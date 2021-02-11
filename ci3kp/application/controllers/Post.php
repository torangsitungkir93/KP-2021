<?php

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model');
    }

    public function tambah()
    {
        $data['judul'] = "Tambah POST";
        $this->load->view("templates/header", $data);
        $this->load->view("posts/tambah");
        $this->load->view("templates/footer");
    }

    public function prosesTambah()
    {
        $this->Post_model->tambahPost();
        echo "Sukses Menambahkan";
    }
}