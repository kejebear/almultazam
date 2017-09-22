<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Absensi extends CI_Controller {
	function __construct() {
		parent::__construct();

		if (!isset($this->session->userdata['id_pengguna'])) {
			redirect(base_url("login"));
		}

		$this->load->library('datatables');
		$this->load->model('m_models');
	}
	
	
	//fungsi menampilkan data absensi
	public function data_absensi(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');

		$this->load->view('absensi/data_absensi');

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}

	function get_absensi() {
        header('Content-Type: application/json');
        echo $this->m_models->get_absensi();
    }

	public function import_absensi(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');

		$this->load->view('absensi/import_absensi');

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}

}
