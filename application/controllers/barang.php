<?php

class barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barangmodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('navbar');
        $this->load->view('barang/input_barang');
        $this->load->view('footer');
    }
    public function add_barang()
    {
        $data = array(
            'kode_barang'    => $this->input->post('kode_barang', true),
            'nama_barang'    => $this->input->post('nama_barang', true),
            'satuan' => $this->input->post('satuan', true),
            'harga_beli'         => $this->input->post('harga_beli', true),
            'harga_jual'  => $this->input->post('harga_jual', true),
            'kategori' => $this->input->post('kategori', true),
            'deskripsi'        => $this->input->post('deskripsi', true),
        );
        $this->Barangmodel->create_barang($data);
        $pesan = "Data Berhasil Ditambahkan";
        redirect('barang/data_barang');
    }
    public function data_barang()
    {
        $data = array(
            'brg' => $this->Barangmodel->read_barang()
        );

        $this->load->view('navbar');
        $this->load->view('barang/data_barang', $data);
        $this->load->view('footer');
    }
    public function hapus_barang($kode_barang)
    {
        $this->Barangmodel->delete_barang($kode_barang);
        redirect('barang/data_barang');
    }
}
