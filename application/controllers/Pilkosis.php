<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pilkosis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pilkosis');
        check_admin();
        tidak_login();
    }
    public function index()
    {
        $data = [
            'pilkosis' => $this->M_pilkosis->get(),

            'judul' => 'Waktu Pilkosis',
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_pilko');
        $this->load->view('layout/footer');
    }
    public function setting()
    {
        $post = $this->input->post(null, True);
        if ($post['tglmulai'] > $post['tgltutup']) {
            $this->session->set_flashdata('warning', 'Input Tanggal Salah!');
            redirect('/Pilkosis');
        } else {
            $this->M_pilkosis->setting($post);
            if ($this->db->affected_rows() > 0) {
                redirect('/Pilkosis');
            }
        }
    }
    public function delet(){
        $id = $this->input->post('id');
        $this->M_pilkosis->delete($id);
        if($this->db->affected_rows() > 0 ){
            echo "<script> alert('Data Berhasil Dihapus');</script>";
        }
     redirect('/Pilkosis');

    }

}
