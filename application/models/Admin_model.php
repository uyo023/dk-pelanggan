<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function detailUpdate($data, $id)
    {
        $this->db->update('user', ['nama' => $data['nama']], ['id' => $id]);
        return $this->db->update('admin_detail', $data, ['no_admin' => $id]);
    }
}
