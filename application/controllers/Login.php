<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__Construct();
        $this->load->model('M_Login');
    }
    public function index()
    {
        sudah_login();
        $data = [
            'judul' => "Login",
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('Login/login');
        $this->load->view('Login/style');
    }
    public function login()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $query = $this->M_Login->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $data = [
                    'username' => $row->username,
                    'is_active' => $row->is_active
                ];
                $this->session->set_userdata($data);
                echo "<script>alert('Congratulations, you have successfully logged in');
                window.location='" . site_url('/Dashboard/warning') . "' ;
                </script>";
            } else {
                echo "<script>alert('login failed, wrong username/password');
                window.location='" . site_url('/Login') . "';
                </script>";
            }
        }
    }

    public function confirm()
    {
        $data = ['judul' => 'Confirm'];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_logout');
        $this->load->view('layout/footer');
    }
    public function logout()
    {

        tidak_login();
        $data = ['username', 'is_active'];
        $this->session->unset_userdata($data);
        redirect('/Login');
    }
    public function setting()
    {

        tidak_login();
        $data = [
            'judul' => 'Setting',
            'dt' => $this->db->get_where('tb_login', ['username' => $this->session->userdata('username')])->row_array()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_setting', $data['dt']);
        $this->load->view('layout/footer');
    }
    public function change()
    {
        tidak_login();
        $config['upload_path']          = './assets/gambar';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        $config['max_size']             = 10240;
        $config['file_name']            = 'foto-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')) {
            $nama = $this->input->post('nama', TRUE);
            $username = $this->input->post('username', TRUE);
            $nis = $this->input->post('nis', TRUE);
            $kelas = $this->input->post('kelas', TRUE);
            $data = [
                'nama' => $nama,
                'nis' => $nis,
                'kelas' => $kelas,
            ];
            $this->db->where('username', $username);
            $this->M_Login->update($data, 'tb_login');

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data changed successfully');
            }
            redirect('/Login/profile');
        } else {
            $foto = $this->upload->data();
            $foto = $foto['file_name'];
            $nama = $this->input->post('nama', TRUE);
            $username = $this->input->post('username', TRUE);
            $nis = $this->input->post('nis', TRUE);
            $kelas = $this->input->post('kelas', TRUE);
            $data = [
                'nama' => $nama,
                'nis' => $nis,
                'kelas' => $kelas,
                'foto' => $foto
            ];
            $hapus_foto = $this->M_Login->get()->row();
            if ($hapus_foto->foto != null) {
                $target = './foto/calon/' . $hapus_foto->foto;
                unlink($target);
            }
            $this->db->where('username', $username);
            $this->M_Login->update($data, 'tb_login');

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data changed successfully');
            }
            redirect('/Login/profile');
        }
    }
    public function profile()
    {
        tidak_login();
        $data = [
            'judul' => 'My Profile',
            'profile' => $this->db->get_where('tb_login', ['username' => $this->session->userdata('username')])->row_array()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_myprofile', $data['profile']);
        $this->load->view('layout/footer');
    }
    public function password()
    {
        tidak_login();
        $data = [
            'judul' => 'Change Password',
            'dt' => $this->db->get_where('tb_login', ['username' => $this->session->userdata('username')])->row_array()
        ];
      
        $this->form_validation->set_rules('password', 'Current Password', 'required|trims');
        $this->form_validation->set_rules('newpassword', 'New Password', 'required|trims|min_length[6]|matches[repeatpassword]');
        $this->form_validation->set_rules('repeatpassword', 'Confirm New Password', 'required|trims|min_length[6]|matches[newpassword]');


        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/navbar');
            $this->load->view('layout/sidebar');
            $this->load->view('Data/v_pass');
            $this->load->view('layout/footer');
        } else {
            $current_password = $this->input->post('password');
            $new_password = $this->input->post('newpassword');

            if (!password_verify($current_password, $data['dt']['password'])) {
                $this->session->set_flashdata('message', 'Wrong Current Password!');
                redirect('/Login/password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', 'New Password cannot be the same as current password!!');
                    redirect('/Login/password');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('tb_login');

                    $this->session->set_flashdata('message', 'Password changed!');
                    redirect('/Login/password');
                }
            }
        }
    }
}
