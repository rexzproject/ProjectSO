<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Adminmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read_admin()
    {
        return $this->db->get('admin')->result();
    }
    public function create_admin($data)
    {
        $this->db->insert('admin', $data);
    }
    public function delete_admin($pk)
    {
        $this->db->where('kode_admin', $pk);
        $this->db->delete('admin');
    }
}
