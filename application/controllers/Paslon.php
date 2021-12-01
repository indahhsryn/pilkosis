<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paslon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login', 'M_Paslon');
        tidak_login();
        check_admin();
    }
    public function index()
    {
        tidak_login();
        $data = [
            'row' => $this->M_Login->get(),
            'judul' => 'Data Calon'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Paslon/index');
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Data',

        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Paslon/tambah');
        $this->load->view('layout/footer');
    }
    public function simpan()
    {
        tidak_login();
        $post = $this->input->post(null, TRUE);
        $config['upload_path']          = './foto/calon';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'foto-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $config['max_size']             = 10240;
        $this->upload->initialize($config);

        if (@$_FILES['foto']['name'] != null) {
            if ($this->upload->do_upload('foto')) {
                $post['foto'] = $this->upload->data('file_name');
                $this->M_Login->save($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('Success', 'Data berhasil disimpan!');
                }
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Data berhasil disimpan');
                    </script>";
                }
                echo "<script>window.location='" . site_url('/Paslon') . "'</script>";
            } else {
                $error = $this->upload->display_errors();
                print_r($error);
                $this->session->set_flashdata('Error, Data gagal disimpan!');
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('Error, Data gagal disimpan!');
                    </script>";
                }
                echo "<script>window.location='" . site_url('/Paslon') . "'</script>";
            }
        } else {
            $post['foto'] = null;
            $this->M_Login->save($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('Gagal menambahkan foto', 'Silahkan tambahkan foto');
            }
            if ($this->db->affected_rows() > 0) {
                echo "<script> alert('Data berhasil disimpan');
                </script>";
            }
            echo "<script>window.location='" . site_url('/Paslon') . "'</script>";
        }
    }

    public function edit()
    {
        tidak_login();
        $id = $this->uri->segment(3);

        $data = [
            'judul' => 'Edit data',
            'dt' =>  $this->M_Login->get_data_byid($id)->row()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('Paslon/edit',  $data["dt"]);
        $this->load->view('layout/footer');
    }

    public function update_data()
    {
        $config['upload_path']          = './foto/calon';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        $config['max_size']             = 10240;
        $config['file_name']            = 'foto-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')) {
            $no = $this->input->post('no', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $ketua = $this->input->post('ketua', TRUE);
            $wakil = $this->input->post('wakil', TRUE);
            $visi = $this->input->post('visi', TRUE);
            $misi = $this->input->post('misi', TRUE);
            $proker = $this->input->post('proker', TRUE);
            $data = [
                'no' => $no,
                'nama_paslon' => $nama,
                'calon_ketua' => $ketua,
                'calon_wakil' => $wakil,
                'visi' => $visi,
                'misi' => $misi,
                'proker' => $proker,
            ];
            $this->db->where('no', $no);
            $this->db->update('tb_calon', $data);
            $this->session->set_flashdata('success', 'Data changed successfully');
            redirect('/Paslon');
        } else {

            $foto = $this->upload->data();
            $foto = $foto['file_name'];
            $no = $this->input->post('no', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $ketua = $this->input->post('ketua', TRUE);
            $wakil = $this->input->post('wakil', TRUE);
            $visi = $this->input->post('visi', TRUE);
            $misi = $this->input->post('misi', TRUE);
            $proker = $this->input->post('proker', TRUE);
            $data = [
                'no' => $no,
                'nama_paslon' => $nama,
                'calon_ketua' => $ketua,
                'calon_wakil' => $wakil,
                'visi' => $visi,
                'misi' => $misi,
                'proker' => $proker,
                'foto' => $foto
            ];
            $hapus_foto = $this->M_Login->get()->row();
            if ($hapus_foto->foto != null) {
                $target = './foto/calon/' . $hapus_foto->foto;
                unlink($target);
            }
            $this->db->where('no', $no);
            $this->db->update('tb_calon', $data);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data changed successfully');
            }
            redirect('/Paslon');
        }
    }
    public function del()
    {
        $id  = $this->input->post('no');
        $img = $this->input->post('img_paslon');
        if ($img != null) {
            $target = './foto/calon/' . $img;
            unlink($target);
        }

        $delete = $this->M_Paslon->deleted($id);
        redirect('/Paslon');
    }
    public function delet($id)
    {
        $hapus_foto = $this->M_Login->get($id)->row();
        if ($hapus_foto->foto != null) {
            $target = './foto/calon/' . $hapus_foto->foto;
            unlink($target);
        }
        $id = $this->input->post('no');
        $this->M_Login->deleted($id);
        redirect('/Paslon');
    }
}
