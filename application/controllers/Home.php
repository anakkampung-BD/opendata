<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// GetInfoAppsOwner
		

		$data = [
			'title' => 'Home',
		];

		$this->load->view('part/f_header', $data);
		$this->load->view('home/home', $data);
		$this->load->view('part/f_footer', $data);
	}

	public function getDataSet($keyword)
	{
		if ($keyword == '') {

			$data = [
				'title' => 'Home',
			];

			$this->load->view('part/f_header', $data);
			$this->load->view('home/home', $data);
			$this->load->view('part/f_footer', $data);

		} else {

			

		}
	}
}
