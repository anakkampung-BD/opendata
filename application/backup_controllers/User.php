<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('user_model');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | User',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'r' => $this->db->get_where('user_role', ['role' => $this->session->userdata('role')])->row_array(),
            'reportWisatawan' => $this->user_model->getReport()->result_array(),
            'tarif' => $this->user_model->tarif()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar_user', $data);
        $this->load->view('_templates/_sidebar_user', $data);
        $this->load->view('_user/_dashboard/_dashboard', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function baseData()
    {
        $data = [
            'title' => 'Data Dasar | User',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'r' => $this->db->get_where('user_role', ['role' => $this->session->userdata('role')])->row_array(),
            'reportWisatawan' => $this->user_model->getReport()->result_array(),
            'tarif' => $this->user_model->tarif()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar_user', $data);
        $this->load->view('_templates/_sidebar_user', $data);
        $this->load->view('_user/_profile/_index', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function do_logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->sess_destroy();

        // $this->session->set_flashdata('flash', 'Session cleared! Anda berhasil keluar dari sistem');
        redirect('login');
    }

    public function uprofile()
    {
        $data = [
            'title' => 'Profile Saya | User',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'r' => $this->db->get_where('user_role', ['role' => $this->session->userdata('role')])->row_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar_user', $data);
        $this->load->view('_templates/_sidebar_user', $data);
        $this->load->view('_user/_uprofile/_index', $data);
        $this->load->view('_templates/_footer', $data);
    }
}
