<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
        $this->load->model('admin_model');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Administrator',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'r' => $this->db->get_where('user_role', ['role' => $this->session->userdata('role')])->row_array(),
            'tarif' => $this->admin_model->tarif()->result_array(),
            'user_count' => $this->load->model('admin_model'),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_admin/_dashboard', $data);
        $this->load->view('_templates/_footer', $data);
    }

    // Pengaturan Identitas
    public function logo()
    {
        $data = [
            'title' => 'Pengaturan Logo',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'tarif' => $this->admin_model->tarif()->result_array(),
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_pengaturan/_identitas', $data);
        $this->load->view('_templates/_footer', $data);
    }

    // Tarif Retribusi
    public function tarif()
    {
        $data = [
            'title' => 'Pengaturan Tarif',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'tarif' => $this->admin_model->tarif()->result_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_pengaturan/_tarif', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function update_tarif($id = null)
    {
        $id = strip_tags($this->input->post('id'));
        $surf_a = strip_tags($this->input->post('surf_int'));
        $surf_b = strip_tags($this->input->post('surf_nas'));
        $rm = strip_tags($this->input->post('pjk_rm'));

        // var_dump($id, $surf_a, $surf_b, $rm);
        // die;

        $this->admin_model->edit_tarif($id, $surf_a, $surf_b, $rm);
        $this->session->set_flashdata('flash', 'Data Tarif berhasil diubah!');
        redirect('admin/tarif');
    }

    public function akomodasi()
    {
        $data = [
            'title' => 'Akomodasi',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'homestay' => $this->admin_model->get_homestay()->result_array(),
            'kapal' => $this->admin_model->get_ship()->result_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_pengaturan/_akomodasi', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function add_akdarat()
    {
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('homestay_name', 'homestay_name', 'required');
        $this->form_validation->set_rules('owner', 'owner');
        $this->form_validation->set_rules('alamat', 'alamat');
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('latitude', 'latitude');
        $this->form_validation->set_rules('longitude', 'longitude');
        $this->form_validation->set_rules('tagline', 'tagline');
        $this->form_validation->set_rules('visi', 'visi');
        $this->form_validation->set_rules('misi', 'misi');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Akomodasi Darat',
                'brand' => 'SATUDATA',
                'owner' => 'Pemerintah Kab. Kep. Mentawai',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'identitas' => $this->admin_model->getIdentity()->result_array()
            ];
    
            $this->load->view('_templates/_header', $data);
            $this->load->view('_templates/_topbar', $data);
            $this->load->view('_templates/_sidebar', $data);
            $this->load->view('_pengaturan/_add_akomodasi_darat', $data);
            $this->load->view('_templates/_footer', $data);
        } else {

            $data = [
                'type' => $this->input->post('type'),
                'homestay_name' => $this->input->post('homestay_name'),
                'owner' => $this->input->post('owner'),
                'alamat' => $this->input->post('alamat'),
                'kecamatan' => $this->input->post('kecamatan'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'tagline' => $this->input->post('tagline'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi')
            ];

            $this->db->insert('t_homestay', $data);
            $this->session->set_flashdata('flash', 'Data Akomodasi berhasil disimpan!');
            redirect('admin/akomodasi');
        }
    }

    public function add_aklaut()
    {
        $this->form_validation->set_rules('ship_name', 'ship_name', 'required');
        $this->form_validation->set_rules('noGT', 'noGT', 'required');
        $this->form_validation->set_rules('owner', 'owner', 'required');
        $this->form_validation->set_rules('kapten', 'kapten', 'required');

        if($this->form_validation->run() == false) {
            $data = [
                'title' => 'Akomodasi Laut',
                'brand' => 'SATUDATA',
                'owner' => 'Pemerintah Kab. Kep. Mentawai',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'identitas' => $this->admin_model->getIdentity()->result_array()
            ];
    
            $this->load->view('_templates/_header', $data);
            $this->load->view('_templates/_topbar', $data);
            $this->load->view('_templates/_sidebar', $data);
            $this->load->view('_pengaturan/_add_akomodasi_laut', $data);
            $this->load->view('_templates/_footer', $data);
        } else {

            $data = [
                'ship_name' => $this->input->post('ship_name', true),
                'owner' => $this->input->post('owner', true),
                'noGT' => $this->input->post('noGT', true),
                'kapten' => $this->input->post('kapten', true),
            ];

            $this->db->insert('t_ship', $data);
            $this->session->set_flashdata('flash', 'Data Kapal berhasil disimpan');
            redirect('admin/akomodasi');
        }

    }

    public function pengguna()
    {
        $data = [
            'title' => 'Daftar Pengguna Aplikasi',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array(),
            'listUser' => $this->admin_model->getUser()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_pengaturan/_pengguna', $data);
        $this->load->view('_templates/_footer', $data);
    }

    // Daftarkan Pengguna
    public function regProses()
    {

        // if ($this->session->userdata('email') == 1) {
        //     redirect('admin');
        // } else if ($this->session->userdata('role_id') == 2) {
        //     redirect('user');
        // } else {
        //     redirect('mitra');
        // }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar pada system!'
        ]);

        $this->form_validation->set_rules('role_id', 'Role', 'required');

        $this->form_validation->set_rules('akomodasi', 'Akomodasi', 'required|trim|is_unique[user.akomodasi]', [
            'is_unique' => 'Akun dengan Nama Instansi ini sudah terdaftar',
        ]);

        if ($this->form_validation->run() == false) {

            redirect('admin/pengguna');

        } else {

            $email = $this->input->post('email', true);
            $data = [
                    'name' => htmlspecialchars($this->input->post('name', true)),
                    'email' => htmlspecialchars($email),
                    'akomodasi' => htmlspecialchars($this->input->post('akomodasi', true)),
                    'image' => 'default.png',
                    'password' => password_hash('simorist2022', PASSWORD_DEFAULT),
                    'role_id' => $this->input->post('role_id'),
                    'is_active' => 0,
                    'date_created' => date('Y-m-d His')
                ];

            // siapkan token
            $token = base64_encode(random_bytes(64));

            // var_dump($token);
            // die;

            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => date('Y-m-d His')
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('flash', 'Akun pengguna yang anda daftarkan sudah terekam pada database! Segera lakukan aktivasi akun.');
            redirect('admin/pengguna');
        }

    }

    // Method kirim email
    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://mail.simorist.com',
            'smtp_user' => 'registration@simorist.com',
            'smtp_pass' => 'OvTPX-P%rplq',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('registration@simorist.com', '');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Registrasi Akun | SIMORIST');
            $this->email->message('Akun anda berhasil didaftarkan oleh Administrator pada System Simorist.<br> 
            Segera lakukan aktivasi akun agar anda dapat mengakses aplikasi Simorist dengan akun tersebut. <br>
            Klik link berikut untuk aktivas akun anda : <a href="' . base_url() . 'login/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktifkan Akun Saya</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        }
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile Saya',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_profile/_index', $data);
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

    public function transaksi()
    {
        $data = [
            'title' => 'Data Transaksi',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_transaksi/_transaksi', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function tx_int()
    {
        $data = [
            'title' => 'Transaksi Surfing International',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_transaksi/_surf_int', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function tx_nas()
    {
        $data = [
            'title' => 'Transaksi Surfing Nasional',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_transaksi/_surf_nas', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function rm()
    {
        $data = [
            'title' => 'Transaksi Pajak Rumah Makan',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_transaksi/_pajak_rm', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function tic()
    {
        $data = [
            'title' => 'Data Check-in via TIC',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_check-in/_tic', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function duty()
    {
        $data = [
            'title' => 'Data Check-in via Akomodasi',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_check-in/_pelaku_usaha', $data);
        $this->load->view('_templates/_footer', $data);
    }
    
    public function grafik_analitik()
    {
        $data = [
            'title' => 'Grafik Analitik',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_analitik/_grafik', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function tabel_analitik()
    {
        $data = [
            'title' => 'Tabel Analitik',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_analitik/_tabel', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function chatting()
    {
        $data = [
            'title' => 'Halaman Chatting',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_chat/_index', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function request()
    {
        $data = [
            'title' => 'Daftar Permintaan Data',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_request/_index', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function approve()
    {
        $data = [
            'title' => 'Daftar Permintaan Data yang disetujui',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_request/_approve', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function reject()
    {
        $data = [
            'title' => 'Daftar Permintaan Data',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_request/_reject', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function wisatawan()
    {
        $data = [
            'title' => 'Daftar Seluruh Wisatawan',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_laporan/_wisatawan', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function retribusi_pad()
    {
        $data = [
            'title' => 'Dartar Retribusi Surfing',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_laporan/_retribusi_pad', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function retribusi_rm()
    {
        $data = [
            'title' => 'Dartar Pajak Rumah Makan',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_laporan/_retribusi_rm', $data);
        $this->load->view('_templates/_footer', $data);
    }

    public function retribusi_akomodasi()
    {
        $data = [
            'title' => 'Dartar Retribusi Akomodasi',
            'brand' => 'SATUDATA',
            'owner' => 'Pemerintah Kab. Kep. Mentawai',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'identitas' => $this->admin_model->getIdentity()->result_array()
        ];

        $this->load->view('_templates/_header', $data);
        $this->load->view('_templates/_topbar', $data);
        $this->load->view('_templates/_sidebar', $data);
        $this->load->view('_laporan/_retribusi_akomodasi', $data);
        $this->load->view('_templates/_footer', $data);
    }
}