<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal extends CI_Controller {
	 function __construct()
       {

            parent::__construct();
            $this->load->helper('url');
        $this->load->library('pagination');
    if (!isset($this->session->userdata['id_pengguna'])) {
      redirect(base_url("login"));
    }
            //$this->load->helper(array('html','url'));
          
            $this->load->library('pagination');
            $this->load->model('modelsiswa/t_siswa'); //load model
             $this->load->model('modelkelas/t_kelas'); //load model
             $this->load->model('m_models'); //load model
             $this->load->view('template/header');
       }


	public function jadwal_mapel()
	{
     $data['tampilkelas'] = $this->t_kelas->tampil_kelas(); 
    $this->load->view('jadwal/v_jadwal_mapel',$data);
		$this->load->view('template/footer');
	}


  public function tambahjadwal()
  {
      $data['jam'] = $this->m_models->getAll("jam_pelajaran order by id_jam  asc");
      $data['mapel'] = $this->m_models->getAll("mata_pelajaran where id_tp='3' order by nama_mapel  asc");
      $amb['th'] = $this->m_models->getAll("tahun_akademik order by id_tahun desc limit 1");

      foreach($amb['th'] as $dth)
      {

       $data['kelas'] = $this->m_models->getAll("kelas where id_sekolah='5' and id_tahun='".$dth->id_tahun."' order by id_kelas  asc");
      }

       $data['guru'] = $this->m_models->getAll("pegawai where id_jabatan='6' order by nama");

    $this->load->view('jadwal/v_input_jadwal',$data);
    $this->load->view('template/footer');
  }


	

}
?>
