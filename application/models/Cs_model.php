<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cs_model extends CI_Model
{
    public function detailUpdate($data, $id)
    {
        $this->db->update('user', ['nama' => $data['nama']], ['id' => $id]);
        return $this->db->update('cs_detail', $data, ['no_cs' => $id]);
        return $this->db->update('komplain', $data, ['id_kel' => $id]);
    }
}
