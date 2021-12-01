<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
class Dashboard extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
        tidak_login();
    }
	public function index()
	{
		$id = $this->uri->segment(3);
		$data = [
			'judul' => 'Dashboard',
			'jumlah_pemilih' => $this->db->get('tb_pemilih')->num_rows(),
			'kandidat' => $this->db->get('tb_calon')->num_rows(),
			'total_pemilih' => $this->db->get('tb_login')->num_rows(),
			'nama' => $this->db->get_where('tb_login', ['username' => $this->session->userdata('username')])->row_array(),
			'tgl' => $this->db->get_where('tb_kegiatan', ['id' => $this->session->userdata('id')])->row_array(),
			'dt' =>  $this->db->get('tb_pilkosis')->row_array(),
		];
		
		$cek_vote = $this->M_Login->cek_votting($this->session->userdata('username'));
		if($cek_vote->num_rows() < 1){
			$this->session->set_userdata('status','<div class="alert alert-danger" role="alert">
			Belum Voting</div>');
		}else{
			$this->session->set_userdata('status','<div class="alert alert-success" role="alert">
			Sudah Voting</div>');
		}
		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('Dashboard/dashboard');
		$this->load->view('Dashboard/js');
		$this->load->view('layout/footer');
	}
	public function warning()
	{
		$data=[
			'judul' => 'Pemberitahuan',
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('Data/v_warning');
		$this->load->view('layout/footer');
	}
}
