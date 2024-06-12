<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('form_validation');

		// $this->load->model('admin_model');
	}

	public function index()
	{

		$data = [
			'title' => 'Home',
			'brand' => 'SATUDATA',
			'owner' => 'Pemerintah Kab. Kep. Mentawai',
			// 'identitas' => $this->admin_model->getIdentity()->result_array()
		];
		
		$this->load->view('_home/_landing_page', $data);
		
	}

	public function op1()
	{
		$data = [
			'title' => 'Option One',
			'brand' => 'SATUDATA',
			'owner' => 'Pemerintah Kab. Kep. Mentawai',
		];

		$this->load->view('_home/_op1', $data);
	}
}
