<?php
function sudah_login()
{
    $ci = &get_instance(); {
        $pilkosis = $ci->session->userdata('username');
        if ($pilkosis) {
            redirect('/Dashboard');
        }
    }
}

function tidak_login()
{
    $ci = &get_instance(); {
        $pilkosis = $ci->session->userdata('username');
        if (!$pilkosis) {
            redirect('/Login');
        }
    }
}
function check_admin() //untuk mengecek apakah admin/siswa dan siswa tidak bisa masuk ke halaman admin lewat url
{
    $ci = &get_instance();
    $ci->load->library('username');
    if ($ci->username->nama()->is_active != 1) {
        redirect('/Notfound');
    }
}
