<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Votting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_Login');
        $this->load->model('M_Paslon');
        tidak_login();
    }
    public function index()
    {
        check_admin();
        $data = [
            'hsl' => $this->M_Login->get_data(),
            'judul' => 'Data Pemilih'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Votting/index');
        $this->load->view('layout/footer');
    }
    public function pilih()
    {
        $seting_vote = $this->db->get('tb_pilkosis')->row();
        $tgl_sekarang = strtotime(date("Y-m-d H:i:s"));
        $tglmulai = strtotime(date($seting_vote->tanggal_mulai));
        $tglakhir = strtotime(date($seting_vote->tanggal_akhir));
        //cek tanggal pemilihan
        if ($tgl_sekarang >= $tglmulai) {
            if ($tgl_sekarang > $tglakhir) {
                $this->session->set_flashdata('message', 'Pemilihan Telah ditutup!');
                redirect('/Data_Paslon');
            } else {
                //cek pemilihan sudah dilakukan/ belum
                $pemilih = $this->session->userdata('username');
                $cek_status = $this->db->get_where('tb_pemilih', array('username' => $pemilih));
                $banyak = $cek_status->num_rows();
                if ($banyak >= 1) {
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('Error, Anda Telah Melakukan Votting!');
                </script>";
                }
                    echo "<script>window.location='" . site_url('/Data_Paslon') . "'</script>";
                } else {
                    $data = [
                        'judul' => 'Vote',
                        'datacalon' => $this->M_Paslon->tampil_data()->result()
                    ];

                    $this->load->view('layout/header', $data);
                    $this->load->view('layout/navbar');
                    $this->load->view('layout/sidebar');
                    $this->load->view('Votting/vote', $data['datacalon']);
                    $this->load->view('layout/footer');
                }
            }
            
        }
    }
    public function vote($no)
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d H:i:s');
        $pemilih = $this->session->userdata('username');
        $data = [

            'no_kandidat' => $no,
            'username' => $pemilih,
            'tgl_pemilihan' => $tgl
        ];
        $this->db->insert('tb_pemilih', $data);
        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Anda telah melakukan pemilihan, Selanjutnya silahkan berikan feedback tentang aplikasi pilkosis ini');
            </script>";
        }
        echo "<script>window.location='" . site_url('/FeedBack') . "'</script>";
    }
    public function hapus_data($id){
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('tb_pemilih');
        redirect('Votting');
    }
}
