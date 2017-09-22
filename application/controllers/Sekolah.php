<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {
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
            $this->load->model('modelsekolah/t_sekolah'); //load model
            $this->load->view('template/header');
       }


	public function profil_sekolah()
	{
		
		
		
   		$data['tampiljjg'] = $this->t_sekolah->tampil_jenjang(); //membuat data dari hasil transaksi masuk ke $data*/
   	  $data['tampilsekolah'] = $this->t_sekolah->tampil_sekolah();

       //$this->load->view('siswa/v_siswa',$data);
       $this->load->view('sekolah/v_sekolah',$data);
		
		$this->load->view('template/footer');
	}


  public function inputsekolah()
  {
    $this->load->view('template/header');
    
    
      $data['tampiljjg'] = $this->t_sekolah->tampil_jenjang(); //membuat data dari hasil transaksi masuk ke $data*/

       //$this->load->view('siswa/v_siswa',$data);
       $this->load->view('sekolah/v_input_sekolah',$data);

    $this->load->view('template/footer');
  }

  //untuk membuat insert data siswa
  function tambahsekolah(){
           $this->t_sekolah->simpan_dsekolah();
      redirect('siswa/profil_sekolah');
    }


    public function detailsekolah()
  {
    $kode = $this->uri->segment(3);
      $data['tampilsekolah'] = $this->t_sekolah->tampil_sekolah(); 
       //Menampilkan Tingkat Pendidikan
      $data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); 
      $data['tampilprofesi'] = $this->t_siswa->tampil_profesi(); 
       //Menampilkan Tahun Akademik
      $data['tampilta'] = $this->t_siswa->tampil_ta(); //membuat data dari hasil transaksi masuk ke $data
      


      //menampilkan seluruh data yang telah di paparkan
        $data['qsiswa']=$this->t_siswa->tampil_dsiswa();
    

    $this->load->view('sekolah/v_detail_sekolah',$data);

    $this->load->view('template/footer');
  
  }


	


}
?>
