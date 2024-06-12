<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model('admin_model');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('mitra');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data = [
				'title' => 'Login Page',
				'brand' => 'SATUDATA',
				'owner' => 'Pemerintah Kab. Kep. Mentawai',
				'identitas' => $this->admin_model->getIdentity()->result_array()
			];
			
			$this->load->view('_templates/_login/_header', $data);
			$this->load->view('_login/_index', $data);
			$this->load->view('_templates/_login/_footer', $data);
		} else {
			$this->_login_backend();
		}
	}

	private function _login_backend()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		// jika usernya ada
		if ($user) {
			// cek aktif
			if ($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					$this->session->set_flashdata('flash', 'Status User aktif!');

					if ($user['role_id'] == 1) {
						// echo "success";
						$this->session->set_flashdata('flash', 'Selamat datang Admin!');
						redirect('admin');

					} elseif ($user['role_id'] == 2) {
						// echo "success";
						$this->session->set_flashdata('flash', 'Selamat datang User!');
						redirect('user');

					} else {
						// echo "success";
						$this->session->set_flashdata('flash', 'Selamat datang Stake Holder!');
						redirect('mitra');
					}
				} else {
					$this->session->set_flashdata('flash', 'Password yang anda masukkan salah!');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('flash', 'Akun yang anda gunakan belum di aktivasi!');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('flash', 'Akun yang anda gunakan tidak terdaftar!');
			redirect('login');
		}
	}

	public function keluar()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->sess_destroy();

		$this->session->set_flashdata('flash', 'Session cleared! Anda berhasil keluar dari sistem');
		redirect('login');
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				if (time() - $user_token['date_created'] < (1800)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('user');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('flash', 'Akun anda berhasil di avtivasi!. Anda dapat login menggunakan akun tersebut sekarang');
					redirect('login');
				} else {
					$this->db->delete('user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('flash', 'Aktivasi akun anda gagal, karena masa berlaku token anda berakhir!');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('flash', 'Aktivasi akun anda gagal, token yang anda gunakan salah!');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('flash', 'Aktivasi akujn anda gagal, karena anda menggunakan email yang salah!');
			redirect('login');
		}
	}
}
