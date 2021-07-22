<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('teampleate/header', $data);
        $this->load->view('teampleate/sidebar', $data);
        $this->load->view('teampleate/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('teampleate/footer');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['user_detail'] = $this->db->get_where('user_detail', ['no_cus' => $data['user']['id']])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('teampleate/header', $data);
        $this->load->view('teampleate/sidebar', $data);
        $this->load->view('teampleate/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('teampleate/footer');
    }

    public function profile_detail()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_detail'] = $this->db->get_where('user_detail', ['no_cus' => $data['user']['id']])->row_array();

        // var_dump($data['user_detail']);
        // die;

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No hp', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

        // var_dump($this->form_validation->run());
        // die;
        if ($this->form_validation->run()) {
            $user = [
                'nama' => $this->input->post('nama'),
                'tempat' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jk'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat_lengkap' => $this->input->post('alamat'),
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
            $this->user->detailUpdate($user, $data['user']['id']);
            $this->session->set_flashdata('message', 'Data berhasil diubah');

            redirect('user/profile');
        }

        $data['title'] = 'Update Profile';
        $this->load->view('teampleate/header', $data);
        $this->load->view('teampleate/sidebar', $data);
        $this->load->view('teampleate/topbar', $data);
        $this->load->view('user/profile_detail', $data);
        $this->load->view('teampleate/footer', $data);
    }


    public function password()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

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

    public function addkomplain()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('level', 'Level', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskrpsi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Komplain';
            $this->load->view('teampleate/header', $data);
            $this->load->view('teampleate/sidebar', $data);
            $this->load->view('teampleate/topbar', $data);
            $this->load->view('user/addkomplain', $data);
            $this->load->view('teampleate/footer');
        } else {
            $komplain = [
                'id_kel' => uniqid(),
                'level' => $this->input->post('level'),
                'no_cus' => $data['user']['id'],
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => '0',
                'tanggal' => time()
            ];

            $upload_image = $_FILES['image'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/komplain';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data('file_name');
                    $komplain['image'] = $image;
                } else {

                    $this->session->set_flashdata('image', $this->upload->display_errors());

                    redirect('user/addkomplain');
                }
            }
            $this->db->insert('komplain', $komplain);
            redirect('user/pending');
        }
    }

    public function pending()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komplain'] = $this->db->get_where('komplain', [
            'no_cus' => $data['user']['id'], //filter berdasarkan si user
            'status' => '0' //filter berdasarkan status, selain pending gak ditampilin.
        ])->result_array();

        $data['title'] = 'Komplain Pending';
        $this->load->view('teampleate/header', $data);
        $this->load->view('teampleate/sidebar', $data);
        $this->load->view('teampleate/topbar', $data);
        $this->load->view('user/pending', $data);
        $this->load->view('teampleate/footer');
    }

    public function proses()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>  $this->session->userdata('email')])->row_array();
        $data['komplain'] = $this->db->get_where('komplain', [
            'no_cus' => $data['user']['id'],
            'status' => 'proses',
        ])->result_array();

        $data['title'] = 'Komplain Proses';
        $this->load->view('teampleate/header', $data);
        $this->load->view('teampleate/sidebar', $data);
        $this->load->view('teampleate/topbar', $data);
        $this->load->view('user/proses', $data);
        $this->load->view('teampleate/footer');
    }
    public function selesai()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['komplain'] = $this->db->get_where('komplain', [
            'no_cus' => $data['user']['id'],
            'status' => 'selesai'
        ])->result_array();

        $data['title'] = 'Dashboard';
        $this->load->view('teampleate/header', $data);
        $this->load->view('teampleate/sidebar', $data);
        $this->load->view('teampleate/topbar', $data);
        $this->load->view('user/selesai', $data);
        $this->load->view('teampleate/footer');
    }
}
