<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User_m extends CI_Model
{
    public function detail_post($id_post)
    {
        $result = $this->db->where('id', $id_post)->get('posting');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
