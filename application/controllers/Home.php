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

	public function getDataSet()
	{
		$keyword = $this->input->post('cari');

		if ($keyword == null) {

			$data = [
				'title' => 'Cari Data',
			];

			$this->load->view('part/f_header', $data);
			$this->load->view('home/search', $data);
			$this->load->view('part/f_footer', $data);

		} else {

			$keyword = $this->input->post('cari');

			$dataset = 1;

			$data = [
				'title' => 'Cari Data',
				'keyword' => $keyword,
				'dataset' => $dataset
			];

			$this->load->view('part/f_header', $data);
			$this->load->view('home/search_result', $data);
			$this->load->view('part/f_footer', $data);

		}
	}
}
