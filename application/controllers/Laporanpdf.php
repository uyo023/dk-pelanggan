<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporanpdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
    }

    public function index()
    {
        $data['tahun'] = $this->Laporan_model->gettahun();

        $this->load->view('laporan/laporan_keluhan', $data, false);
    }

    
}
