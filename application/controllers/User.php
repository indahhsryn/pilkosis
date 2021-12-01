<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        tidak_login();
        check_admin();
    }
    public function index()
    {
        check_admin();
        $data = [
            'user' => $this->M_User->get(),
            'judul' => 'User'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_user');
        $this->load->view('layout/footer');
    }
    public function simpan(){
        tidak_login();
        $post = $this->input->post(null, TRUE);
        $config['upload_path']          = './assets/gambar';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'foto-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $config['max_size']             = 10240;
        $this->upload->initialize($config);

        if (@$_FILES['foto']['name'] != null) {
            if ($this->upload->do_upload('foto')) {
                $post['foto'] = $this->upload->data('file_name');
                $this->M_User->save($post);
                redirect('/User');
            } else {
                $error = $this->upload->display_errors();
                print_r($error);
                $this->session->set_flashdata('Error, Data gagal disimpan!');
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Error, Data gagal disimpan!');
                    </script>";
                }
                echo "<script>window.location='" . site_url('/User') . "'</script>";
            }
        } else {
            $post['foto'] = null;
            $this->M_User->save($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('Gagal menambahkan foto', 'Silahkan tambahkan foto');
            }
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert('Data berhasil disimpan');
                </script>";
            }
            echo "<script>window.location='" . site_url('/User') . "'</script>";
        }
    }
    public function hapus($id){
        $hapus_foto = $this->M_Login->get($id)->row();
        if ($hapus_foto->foto != null) {
            $target = './assets/gambar/' . $hapus_foto->foto;
            unlink($target);
        }
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('tb_login');
        redirect('/User');
    }
    public function edit(){
        $id = $this->uri->segment(3);
        $data = [
            'dt' =>  $this->M_User->get_data_byid($id)->row(),
            'judul' => 'Update Data'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Data/v_editUser', $data['dt']);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $config['upload_path']          = './foto/calon';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        $config['max_size']             = 10240;
        $config['file_name']            = 'foto-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')) {
            $id = $this->input->post('id', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $nis = $this->input->post('nis', TRUE);
            $kelas = $this->input->post('kelas', TRUE);
            $level = $this->input->post('is_active', TRUE);
            $data = [
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'nis' => $nis,
                'kelas' => $kelas,
                'is_active' => $level,
            ];
            $this->db->where('id', $id);
            $this->db->update('tb_login', $data);
            $this->session->set_flashdata('success', 'Data changed successfully');
            redirect('/User');
        } else {

            $foto = $this->upload->data();
            $foto = $foto['file_name'];
            $id = $this->input->post('id', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $nis = $this->input->post('nis', TRUE);
            $kelas = $this->input->post('kelas', TRUE);

            $level = $this->input->post('is_active', TRUE);
            $data = [
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'nis' => $nis,
                'kelas' => $kelas,
                'is_active' => $level,
            ];
            $hapus_foto = $this->M_User->get()->row();
            if ($hapus_foto->foto != null) {
                $target = './assets/gambar/' . $hapus_foto->foto;
                unlink($target);
            }
            $this->db->where('id', $id);
            $this->db->update('tb_login', $data);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data changed successfully');
            }
            redirect('/User');
        }
    }
}
