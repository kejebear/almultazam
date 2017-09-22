<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		//$this->load->model(array('Mod_Login'));
		if (!isset($this->session->userdata['id_pengguna'])) {
			redirect(base_url("login"));
		}
		$this->load->model('m_models');
	}

	public function index(){
		$this->load->view('dashboard');
	}
	
	//fungsi jenjang pendidikan
	public function jenjang(){
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		
		if (($nama != "") && ($keterangan != "")){
			$this->db->query("INSERT INTO jenjang_pendidikan VALUES ('', '$nama', '$keterangan')") or die (mysql_error());
			$data['jenjang'] = $this->m_models->getAll('jenjang_pendidikan');
			//$this->load->view('master/jenjang',$data);
			redirect('admin/jenjang');
		} else {
			$data['jenjang'] = $this->m_models->getAll('jenjang_pendidikan');
			$this->load->view('master/jenjang',$data);
		}
	}
	
	//fungsi jabatan
	public function jabatan(){
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		
		if (($nama != "") && ($keterangan != "")){
			$this->db->query("INSERT INTO jabatan VALUES ('', '$nama', '$keterangan')") or die (mysql_error());
			$data['jabatan'] = $this->m_models->getAll('jabatan');
			//$this->load->view('master/jabatan',$data);
			redirect('admin/jabatan');
		} else {
			$data['jabatan'] = $this->m_models->getAll('jabatan');
			$this->load->view('master/jabatan',$data);
		}
	}
	
	//fungsi tingkat pendidikan
	public function tingpend(){
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		
		if (($nama != "") && ($keterangan != "")){
			$this->db->query("INSERT INTO tingkat_pendidikan VALUES ('', '$nama', '$keterangan')") or die (mysql_error());
			$data['tingpend'] = $this->m_models->getAll('tingkat_pendidikan');
			//$this->load->view('master/tingpend',$data);
			redirect('admin/tingpend');
		} else {
			$data['tingpend'] = $this->m_models->getAll('tingkat_pendidikan');
			$this->load->view('master/tingpend',$data);
		}
	}
	
	//fungsi golongan
	public function golongan(){
		$pangkat = $this->input->post('pangkat');
		$gol = $this->input->post('gol');
		$keterangan = $this->input->post('keterangan');
		
		if (($gol != "") && ($pangkat != "")&& ($keterangan != "")){
			$this->db->query("INSERT INTO golongan VALUES ('', '$pangkat', '$gol', '$keterangan')") or die (mysql_error());
			$data['golongan'] = $this->m_models->getAll('golongan');
			//$this->load->view('master/golongan',$data);
			redirect('admin/golongan');
		} else {
			$data['golongan'] = $this->m_models->getAll('golongan');
			$this->load->view('master/golongan',$data);
		}
	}
	
	
	//fungsi tahun ajaran
	public function thn_ajar(){
		$thn1 = $this->input->post('thn1');
		$thn2 = $this->input->post('thn2');
		$keterangan = $this->input->post('keterangan');
		
		if (($thn1 != "") && ($thn2 != "")&& ($keterangan != "")){
			$this->db->query("INSERT INTO tahun_akademik VALUES ('', '$thn1', '$thn2', '$keterangan')") or die (mysql_error());
			$data['thn_ajar'] = $this->m_models->getAll('tahun_akademik');
			//$this->load->view('master/thn_ajar',$data);
			redirect('admin/thn_ajar');
		} else {
			$data['thn_ajar'] = $this->m_models->getAll('tahun_akademik');
			$this->load->view('master/thn_ajar',$data);
		}
	}
	
	public function level_user(){
		$this->load->view('template/header');
		$data['level_user'] = $this->m_models->getAll('level_user');
		$this->load->view('master/level_user',$data);
		$this->load->view('template/footer');
	}
	
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	
}
