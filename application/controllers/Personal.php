<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class personal extends CI_Controller {
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
	
	public function odoj(){
		$this->load->view('personal/odoj');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function anggota_odoj(){
		$data['pegawai'] = $this->m_models->getAll("pegawai where status_aktf='Aktif' order by nama");
		$data['kelompok'] = $this->m_models->getAll("kelompok_odoj join pegawai on pegawai.nrp=kelompok_odoj.nrp_pj");
		$data['anggota'] = $this->m_models->getAll("anggota_odoj join kelompok_odoj on kelompok_odoj.nrp_pj=anggota_odoj.nrp join pegawai on pegawai.nrp=anggota_odoj.nrp");
		$nrp=$data['anggota'][0]->nrp_pj;
		$data['pegawai_pj'] = $this->m_models->getAll("pegawai where nrp='$nrp' order by nama");
		$data['pj']=$data['pegawai_pj'][0]->nama;
		$this->load->view('personal/anggota_odoj',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function simpan_anggota_odoj(){
		$kelompok = $this->input->post('kelompok');
		$nrp = $this->input->post('nrp');
		if (($kelompok != "")&&($nrp != "")){
			$this->db->query("INSERT INTO anggota_odoj VALUES ('', '$nrp', '$kelompok',now(),'0000-00-00')") or die (mysql_error());
		}
		redirect('personal/anggota_odoj');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function kelompok_odoj(){
		$data['kelompok'] = $this->m_models->getAll("kelompok_odoj join pegawai on pegawai.nrp=kelompok_odoj.nrp_pj");
		$data['pegawai'] = $this->m_models->getAll("pegawai where status_aktf='Aktif' order by nama");
		$this->load->view('personal/kelompok_odoj',$data);
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function detail_kelompok_odoj(){
		$id_kel = $this->uri->segment(3);
		$data['anggota'] = $this->m_models->getAll("anggota_odoj join pegawai on pegawai.nrp=anggota_odoj.nrp join kelompok_odoj on kelompok_odoj.id_kel_odoj=anggota_odoj.kelompok where kelompok='$id_kel'");
		foreach ($data['anggota'] as $anggt){
			$id_jab=$anggt->id_jabatan;
			$id_sklh=$anggt->id_sekolah;
			$data['jabatan'] = $this->m_models->getAll("jabatan where id_jabatan='$id_jab'");
			$data['sekolah'] = $this->m_models->getAll("sekolah where id_sekolah='$id_sklh'");
			$data['pj'] = $this->m_models->getAll("pegawai where nrp='$anggt->nrp_pj'");
			$sklh=$data[sekolah][0]->nama;
			$jab=$data[jabatan][0]->nama_jabatan;
			$pj=$data[pj][0]->nama;			
			$data[arr]=array("$anggt->nama_kel_odoj", "$pj", "$anggt->nrp", "$anggt->nama", "$sklh", "$jab");
		}
		$this->load->view('personal/detail_kelompok_odoj',$data);
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function simpan_kelompok_odoj(){
		$nama = $this->input->post('nama');
		$pj = $this->input->post('pj');
		
		if (($nama != "")&&($pj != "")){
			$this->db->query("INSERT INTO kelompok_odoj VALUES ('', '$nama', '$pj')") or die (mysql_error());
			
			$data[kelompok]= $this->m_models->getAll("kelompok_odoj where nama_kel_odoj='$nama' and nrp_pj='$pj'");
			$id_kel=$data[kelompok][0]->id_kel_odoj;
			for ($j=1; $j<=5; $j++){
				$nrp = $this->input->post('nrp'.$j); 
				if (($nrp != "")){
					$this->db->query("INSERT INTO anggota_odoj VALUES ('', '$nrp', '$id_kel',now(),'0000-00-00')") or die (mysql_error());
				}
			}
			
		}
		redirect('personal/kelompok_odoj');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function setoran_odoj(){
		$data['anggota'] = $this->m_models->getAll("anggota_odoj join pegawai on pegawai.nrp=anggota_odoj.nrp order by nama");
		$data['setoran'] = $this->m_models->getAll("setoran_odoj join anggota_odoj on setoran_odoj.id_ao=anggota_odoj.id_ao");
		$id_ao=$data['setoran'][0]->id_ao;
		$data['angg_odoj'] = $this->m_models->getAll("anggota_odoj join kelompok_odoj on kelompok_odoj.id_kel_odoj=anggota_odoj.kelompok join pegawai on pegawai.nrp=anggota_odoj.nrp where id_ao='$id_ao'");
		$data['kelompok']=$data['angg_odoj'][0]->nama_kel_odoj;
		$data['penyetor']=$data['angg_odoj'][0]->nama;
		$nrp=$data['angg_odoj'][0]->nrp_pj;
		$data['pegawai_pj'] = $this->m_models->getAll("pegawai where nrp='$nrp' order by nama");
		$data['pj']=$data['pegawai_pj'][0]->nama;
		$data['juz'] = $this->m_models->getAll("ayat_alquran group by juz order by juz asc");
		$this->load->view('personal/setoran_odoj',$data);
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function simpan_setoran_odoj(){
		$id_ao = $this->input->post('id_ao');
		$juz = $this->input->post('juz');
		if (($id_ao != "")&&($juz != "")){
			$hariini=date("Y-m-d");
			$jset = $this->m_models->getRows("setoran_odoj where tanggal='$hariini' and id_ao='$id_ao'");
			if ($jset==0){
				$this->db->query("INSERT INTO setoran_odoj VALUES ('', '$id_ao', now(), now(), '$juz')") or die (mysql_error());
			}
		}
		redirect('personal/setoran_odoj');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	
	public function resume_odoj(){
		$data['kelompok'] = $this->m_models->getAll("kelompok_odoj join pegawai on pegawai.nrp=kelompok_odoj.nrp_pj");
		$this->load->view('personal/resume_odoj',$data);
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function detail_resume_odoj(){
		$id_kel = $this->uri->segment(3);
		$ket = $this->uri->segment(4);
		$hariini=date("Y-m-d");
		if($ket=="B"){
			$data['anggota'] = $this->m_models->getAll("anggota_odoj join pegawai on pegawai.nrp=anggota_odoj.nrp join kelompok_odoj on kelompok_odoj.id_kel_odoj=anggota_odoj.kelompok where kelompok='$id_kel' and id_ao in (select id_ao from setoran_odoj where tanggal='$hariini')");
		} else if($ket=="P"){
			$data['anggota'] = $this->m_models->getAll("anggota_odoj join pegawai on pegawai.nrp=anggota_odoj.nrp join kelompok_odoj on kelompok_odoj.id_kel_odoj=anggota_odoj.kelompok where kelompok='$id_kel' and id_ao not in (select id_ao from setoran_odoj where tanggal='$hariini')");
		}
		foreach ($data['anggota'] as $anggt){
			$data['pj'] = $this->m_models->getAll("pegawai where nrp='$anggt->nrp_pj'");
			$pj=$data[pj][0]->nama;			
			$data[arr]=array("$anggt->nama_kel_odoj", "$pj", "$anggt->nrp", "$anggt->nama", "$sklh", "$jab");
		}
		$this->load->view('personal/detail_resume_odoj',$data);
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
}