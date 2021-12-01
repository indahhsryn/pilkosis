<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
class Chat extends CI_Controller
{
    public function __construct()
    {
    
        parent::__construct();
        $this->load->model('M_Chat');
        tidak_login();
    }
    public function index()
    {
        $data = [
            'judul' => 'Chat Admin',
            'pesan' => $this->M_Chat->get_data(),
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_chat', $data['pesan']);
        $this->load->view('layout/footer');
    }
    public function simpan(){
        $post = $this->input->post(null, TRUE);
        $this->M_Chat->simpan($post);
        redirect('/Chat');
    }
  
    
}
