<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('admin/teampleate/header', $data);
        $this->load->view('admin/teampleate/sidebar', $data);
        $this->load->view('admin/teampleate/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/teampleate/footer');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['admin_detail'] = $this->db->get_where('cs_admin', ['no_admin' => $data['user']['id']])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('admin/teampleate/header', $data);
        $this->load->view('admin/teampleate/sidebar', $data);
        $this->load->view('admin/teampleate/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/teampleate/footer');
    }
}
