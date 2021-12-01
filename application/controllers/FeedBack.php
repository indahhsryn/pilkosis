<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FeedBack extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Feedback');
        tidak_login();
    }
    public function index(){
        $data = [
            'judul' => 'FeedBack'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/feedback');
        $this->load->view('layout/footer');
    }
    public function data(){
        $data = [
            'dt' => $this->M_Feedback->get(),
            'judul' => 'Data FeedBack'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_dataFeedback');
        $this->load->view('layout/footer');
    }
    public function simpan(){
        $post = $this->input->post(null, TRUE);
        $this->M_Feedback->simpan($post);
        if($this->db->affected_rows()>0){
            echo "<script> alert('Terimakasih!, FeedBack Anda berhasil disimpan!') </script>";
        }
        echo "<script>window.location='".site_url('/FeedBack'). "'</script>";
    }
    public function hapus($id){
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('tb_feedback');
        redirect('/FeedBack/data');
    }
}