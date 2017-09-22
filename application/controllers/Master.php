<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master extends CI_Controller {
	 function __construct()
       {
            parent::__construct();
            $this->load->helper('url');
        $this->load->library('pagination');
    if (!isset($this->session->userdata['id_pengguna'])) {
      redirect(base_url("login"));
    }
            //$this->load->helper(array('html','url'));
            $this->load->view('template/header');
            $this->load->library('pagination');
            $this->load->model('modelkelas/t_kelas'); 
            $this->load->model('modelsekolah/t_sekolah'); 
            $this->load->model('modelsiswa/t_siswa');
            $this->load->model('m_models');
       }
       

         //----Handling Program Studi-----
  public function matapelajaran()
  {

   // $data['q']=$this->m_models->getAll('mata_pelajaran');
    $data['q']=$this->m_models->getEmployees('*','mata_pelajaran','kelompok_mata_pelajaran','id_kelompok');
    //$select, $table, $tablejoin, $id
    $this->load->view('master/v_matapelajaran',$data);

    $this->load->view('template/footer');
  }

   public function inputmapel()
  {

    $data['idkelompok']=$this->m_models->getAll('kelompok_mata_pelajaran order by id_kelompok asc');
    
    $this->load->view('master/v_input_matapelajaran',$data);

    $this->load->view('template/footer');
  }


   public function tambahmapel()
  {
        $id_mapel = '';
        $nama_mapel  = $this->input->post('nama_mapel');
         $id_kelompok  = $this->input->post('kelompokmapel');
        $id_tp  = '3';

        $keterangan = $this->input->post('keterangan');
        $data = array (
            'id_mapel' => $id_mapel,
            'nama_mapel'  => $nama_mapel,
            'id_kelompok'  => $id_kelompok,
            'id_tp'  => $id_tp,
            'keterangan_mapel'=> $keterangan,
        );


    $this->m_models->save_data($data,"mata_pelajaran");

    //$this->t_kelas->simpan_dprodi();
      redirect('master/matapelajaran');
  }


}
?>