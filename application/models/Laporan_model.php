<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function gettahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM
        komplain GROUP BY YEAR(tanggal) ORDER BY YEAR(tanggal) ASC");

        return $query->result();
    }

    public function filterbytanggal($tanggalawal, $tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM komplain where tanggal
        BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal ASC");

        return $query->result();
    }

    public function filterbybulan($tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT * FROM komplain where YEAR
        (tanggal) = '$tahun1' and MONTH(tanggal)
        BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal ASC");

        return $query->result();
    }

    public function filterbytahun($tahun2)
    {
        $query = $this->db->query("SELECT * from komplain where YEAR
        (tanggal) = '$tahun2' ORDER BY tanggal ASC ");

        return $query->result();
    }
}
