<?php

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/templates/header');
        $this->load->view('auth/login');
        $this->load->view('auth/templates/footer');
    }

    public function register()
    {
        $this->load->view('auth/templates/header');
        $this->load->view('auth/register');
        $this->load->view('auth/templates/footer');
    }
}