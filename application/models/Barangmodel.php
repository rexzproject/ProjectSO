<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barangmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read_barang()
    {
        return $this->db->get('barang')->result();
    }
    public function create_barang($data)
    {
        $this->db->insert('barang', $data);
    }
    public function delete_barang($pk)
    {
        $this->db->where('kode_barang', $pk);
        $this->db->delete('barang');
    }
}
