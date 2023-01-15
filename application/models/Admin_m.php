<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin_m extends CI_Model
{
    public function hapus_post($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posting');
    }
}
