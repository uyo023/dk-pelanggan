<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cs_model', 'user');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('cs/teampleate/header', $data);
        $this->load->view('cs/teampleate/sidebar', $data);
        $this->load->view('cs/teampleate/topbar', $data);
        $this->load->view('cs/index', $data);
        $this->load->view('cs/teampleate/footer');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['cs_detail'] = $this->db->get_where('cs_detail', ['no_cs' => $data['user']['id']])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('cs/teampleate/header', $data);
        $this->load->view('cs/teampleate/sidebar', $data);
        $this->load->view('cs/teampleate/topbar', $data);
        $this->load->view('cs/profile', $data);
        $this->load->view('cs/teampleate/footer');
    }

    public function profile_detail()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['cs_detail'] = $this->db->get_where('cs_detail', ['no_cs' => $data['user']['id']])->row_array();

        // var_dump($data['user_detail']);
        // die;

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No hp', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

        // var_dump($this->form_validation->run());
        // die;
        if ($this->form_validation->run()) {
            $cs = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jk'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
            ];

            $upload_image = $_FILES['image'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->update('user');
            $this->user->detailUpdate($cs, $data['user']['id']);
            $this->session->set_flashdata('message', 'Data berhasil diubah');

            redirect('cs/profile');
        }

        $data['title'] = 'Update Profile';
        $this->load->view('cs/teampleate/header', $data);
        $this->load->view('cs/teampleate/sidebar', $data);
        $this->load->view('cs/teampleate/topbar', $data);
        $this->load->view('cs/profile_detail', $data);
        $this->load->view('cs/teampleate/footer', $data);
    }

    public function detailcus()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_detail'] = $this->db->get_where('user_detail')->result_array();

        $data['title'] = 'detail Customer Sevice';
        $this->load->view('cs/teampleate/header', $data);
        $this->load->view('cs/teampleate/sidebar', $data);
        $this->load->view('cs/teampleate/topbar', $data);
        $this->load->view('cs/detailcus', $data);
        $this->load->view('cs/teampleate/footer');
    }


    public function password()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[8]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[8]|matches[new_password1]');

        // var_dump($this->form_validation->run());
        // die;
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view('teampleate/header', $data);
            $this->load->view('teampleate/sidebar', $data);
            $this->load->view('teampleate/topbar', $data);
            $this->load->view('user/password',  $data);
            $this->load->view('teampleate/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            // jika password salah
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/password');
            } else {

                // jika password sama yang lama dengan yang baru
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password Cannot be the same as current password! </div>');
                    redirect('user/password');
                } else {
                    // password ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Changed!</div>');
                    redirect('user/password');
                }
            }
        }
    }

    public function konfir_keluhan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komplain'] = $this->db->get_where('komplain')->result_array();

        $data['title'] = 'Konfirmasi Keluhan';
        $this->load->view('cs/teampleate/header', $data);
        $this->load->view('cs/teampleate/sidebar', $data);
        $this->load->view('cs/teampleate/topbar', $data);
        $this->load->view('cs/konfir_keluhan', $data);
        $this->load->view('cs/teampleate/footer');
    }

    public function konfir_detail($id = null)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komplain'] = $this->db->get_where('komplain', ['id_kel' => $id])->row_array();

        // var_dump($data['komplain']);
        // die;


        $data['title'] = 'Detail Keluhan';
        $this->load->view('cs/teampleate/header', $data);
        $this->load->view('cs/teampleate/sidebar', $data);
        $this->load->view('cs/teampleate/topbar', $data);
        $this->load->view('cs/konfir_detail', $data);
        $this->load->view('cs/teampleate/footer');
    }

    public function proses($id) // id yang dikirim ditangkap sama si $id
    {
        // terus dicek
        if ($id == null) {
            echo "tidak ada data! ";
        }

        // nah disini statusnya diganti dri 0 jadi proses
        $this->db->set('status', 'proses');
        $this->db->where('id_kel', $id); // yang id nya dikirim tadi.
        $this->db->update('komplain');
        $this->session->set_flashdata('message', 'Status berhasil diupdate');

        redirect('cs/konfir_keluhan');
    }

    public function selesai($id)
    {
        if ($id == null) {
            echo "tidak ada data! ";
        }

        $this->db->set('status', 'selesai');
        $this->db->where('id_kel', $id);
        $this->db->update('komplain');
        $this->session->set_flashdata('message', 'Status berhasil diupdate');

        redirect('cs/konfir_keluhan');
    }

    public function laporan_keluhan($id = null)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komplain'] = $this->db->get_where('komplain', ['id_kel' => $id])->row_array();

        // var_dump($data['komplain']);
        // die;


        $data['title'] = 'Laporan Keluhan';
        $this->load->view('cs/teampleate/header', $data);
        $this->load->view('cs/teampleate/sidebar', $data);
        $this->load->view('cs/teampleate/topbar', $data);
        $this->load->view('cs/laporan/laporan_keluhan', $data);
        $this->load->view('cs/teampleate/footer');
    }
}
