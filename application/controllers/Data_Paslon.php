<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Paslon extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        $this->load->model('M_Paslon');
        tidak_login();
    }
    public function index()
    {
        tidak_login();
        $id = $this->uri->segment(3);

        $data = [
            'judul' => 'Paslon',
            'datacalon' => $this->M_Paslon->tampil_data($id)->result(),
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data_Paslon/index', $data['datacalon']);
        $this->load->view('layout/footer');
    }
    public function detail(){
        $id = $this->uri->segment(3);
        $data = [
            'judul' => 'Informasi Detail',
            'datacalon' => $this->M_Paslon->tampil_data()->result(),
            'dt' =>  $this->M_Paslon->get_data_byid($id)->row_array()
        ];
        

        $this->load->view('Data_Paslon/detail', $data);
        $this->load->view('Data_Paslon/style');

    }
   
}