<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Alquran extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('pagination');
		if (!isset($this->session->userdata['id_pengguna'])) {
			redirect(base_url("login"));
		}
		$this->load->model('m_models');
		//menampilkan tampilan header konten
		$this->load->view('template/header');
	}
	//fungsi menampilkan angka arab
	function AngkaArab($number){
		$arabic_number = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
		$jum_karakter = strlen($number);
		$temp = "";
		for($i = 0; $i < $jum_karakter; $i++){
			$char = substr($number, $i, 1);
			$temp .= $arabic_number[$char];
		}

		$angka = $temp;
		return $angka;
	}
	 
	 
	public function surat_alquran(){
		$data['alquran'] = $this->m_models->getAll('surat_alquran order by no_surat asc');
		$this->load->view('alquran/surat_alquran',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function detail_alquran(){
		$no_link = $this->uri->segment(3);
		$data['ayat'] = $this->m_models->getAll("ayat_alquran where no_surat='$no_link' order by no_surat asc");
		$data['surat'] = $this->m_models->getAll("surat_alquran where no_surat='$no_link' order by no_surat asc");
		$this->load->view('alquran/detail_alquran',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function alquran(){
		$data['surat'] = $this->m_models->getAll("ayat_alquran group by juz order by juz asc");
		
		$this->load->view('alquran/alquran',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function detail_mushaf(){
		$no_link = $this->uri->segment(3);
		$data['ayat'] = $this->m_models->getAll("ayat_alquran where juz='$no_link' order by no_surat asc");
		$srt=$data['ayat'][0]->no_surat;
		$data['surat'] = $this->m_models->getAll("surat_alquran where no_surat='$srt' order by no_surat asc");
		$this->load->view('alquran/detail_mushaf',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
}