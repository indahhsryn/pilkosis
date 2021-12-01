<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Help extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        tidak_login();
    }
    public function index()
    {
        $data = [
            'judul' => 'Panduan Pilkosis'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_panduan');
        $this->load->view('layout/footer');
    }
    public function chat(){
        $data = [
            'judul' => 'Chat Admin'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_chat');
        $this->load->view('layout/footer');
    }
}
