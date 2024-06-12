<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('mitra_model');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Stake Holder',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'r' => $this->db->get_where('user_role', ['role' => $this->session->userdata('role')])->row_array(),
            'tarif' => $this->mitra_model->tarif()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar_mitra', $data);
        $this->load->view('_templates/_sidebar_mitra', $data);
        $this->load->view('_mitra/_dashboard/_dashboard', $data);
        $this->load->view('_templates/_footer', $data);
    }

}