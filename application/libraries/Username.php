<?php

class Username
{
    protected $ci;
    function __construct()
    {
        $this->ci = &get_instance();
    }
    function nama()
    {
        $this->ci->load->model('M_Login');
        $username = $this->ci->session->userdata('username');
        $data = $this->ci->M_Login->get_nama($username)->row();
        return $data;
    }
}
