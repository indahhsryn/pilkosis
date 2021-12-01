<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Chat');
        $this->load->model('M_info');
        tidak_login();
    }
    public function index()

    {
        $data = [
            'judul' => 'About Us',
            'nama' => 'SMK N 1 KEBUMEN'

        ];
        $this->load->view('Intro/index', $data);
    }
    public function simpan()
    {
        $post = $this->input->post(null, TRUE);
        $this->M_Chat->save($post);
        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('Pertanyaan berhasil dikirim!') </script>";
        }
        echo "<script>window.location='" . site_url('/Landing') . "'</script>";
    }
    public function info(){
        $data = [
            'judul' => 'Info Sekolah',
            
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Intro/v_alamat');
        $this->load->view('layout/footer');
    }
    public function Alamat(){
        check_admin();
        $data =[
            'judul' => 'Input Alamat Sekolah',
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Intro/v_info');
        $this->load->view('layout/footer');
    }
    public function save(){

        $post = $this->input->post(null, TRUE);
        $this->M_info->save_alamat($post);
        if($this->db->affected_rows() > 0){
            echo "<script> alert('Data Berhasil disimpan');</script>";
        }
        redirect('Landing/Alamat');
    }
    public function delet(){
        $id = $this->input->post('id');
        $this->M_info->delete($id);
        if($this->db->affected_rows() > 0 ){
            echo "<script> alert('Data Berhasil Dihapus');</script>";
        }
     redirect('Landing/Alamat');

    }
    public function edit(){
     $id = $this->uri->segment(3);
     $data=[
         'judul' => 'Edit Data',
         'alamat' => $this->M_info->get_data_by_id($id)->row()
     ];   
     $this->load->view('layout/header', $data);
     $this->load->view('layout/navbar');
     $this->load->view('layout/sidebar');
     $this->load->view('Intro/v_editAlamat');
     $this->load->view('layout/footer');
    }
    public function update_data(){
        
        $alamat = $this->input->post('alamat', TRUE);
        $kode_pos = $this->input->post('kdPos', TRUE);
        $telepon = $this->input->post('telepon', TRUE);
        $data = [
            'alamat' => $alamat,
            'kode_pos' => $kode_pos,
            'telepon' => $telepon,
        ];
     
        $this->db->where('alamat', $alamat);
        $this->db->update('tb_alamat', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data changed successfully');
        }
        redirect('Landing/Alamat');
    }
}