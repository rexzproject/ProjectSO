<?php

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Adminmodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('navbar');
        $this->load->view('admin/daftar_admin');
        $this->load->view('footer');
    }
    public function simpan_data()
    {
        $data = array(
            'kode_admin'    => $this->input->post('kode_admin', true),
            'nama_admin'    => $this->input->post('nama_admin', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'agama'         => $this->input->post('agama', true),
            'tempat_lahir'  => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'alamat'        => $this->input->post('alamat', true),
            'email'         => $this->input->post('email', true),
            'no_hp'         => $this->input->post('no_hp', true),
        );
        $this->Adminmodel->create_admin($data);
        $pesan = "Data Berhasil Ditambahkan";
        redirect('admin/data_admin');
    }
    public function data_admin()
    {
        $data = array(
            'admin' => $this->Adminmodel->read_admin()
        );

        $this->load->view('navbar');
        $this->load->view('admin/data_admin', $data);
        $this->load->view('footer');
    }
    public function hapus_data($kode_admin)
    {
        $this->Adminmodel->delete_admin($kode_admin);
        redirect('admin/data_admin');
    }
}
