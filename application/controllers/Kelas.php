<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	 function __construct()
       {
            parent::__construct();
            $this->load->helper('url');
        $this->load->library('pagination');
            if (!isset($this->session->userdata['id_pengguna'])) {
              redirect(base_url("login"));
            }
            //$this->load->helper(array('html','url'));
            $this->load->library('datatables');
            $this->load->view('template/header');
            $this->load->library('pagination');
            $this->load->model('modelkelas/t_kelas'); 
            $this->load->model('modelsekolah/t_sekolah'); 
            $this->load->model('modelsiswa/t_siswa');
             $this->load->model('m_models');
       }

         //----Handling Program Studi-----
  public function program_studi()
  {
      $data['tampiltingkat'] = $this->t_kelas->tampil_tingkat(); 
       $data['tampiljenjang'] = $this->t_kelas->tampil_jenjang_pendidikan(); 
        $data['tampilprodi'] = $this->t_kelas->tampil_prodi(); 

    $this->load->view('kelas/v_nama_prodi',$data);

    $this->load->view('template/footer');
  }


  public function inputprodi()
  {
    
      $data['tampiltingkat'] = $this->t_kelas->tampil_tingkat(); 
     $data['tampiljenjang'] = $this->t_kelas->tampil_jenjang_pendidikan();  
     // $data['tampilta'] = $this->t_kelas->tampil_ta(); 
    $data['tampilprodi'] = $this->t_kelas->tampil_prodi(); 

       //$this->load->view('siswa/v_siswa',$data);
    $this->load->view('kelas/v_input_prodi',$data);

    $this->load->view('template/footer');
  }

  function tambahprodi(){
           $this->t_kelas->simpan_dprodi();
      redirect('kelas/program_studi');
    }



  //----Handling Tingkatan Kelas-----
  public function tingkatan_kelas()
  {
    
     $data['tampilsiswa'] = $this->t_kelas->tampil_kelas(); 
      $data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); 
       //Menampilkan Tahun Akademik
      //Menampilkan jenjang pendidikan
      //$data['tampiltkelas'] = $this->m_models->getEmployees('*', 'tingkatan_kelas', 'jenjang_pendidikan', 'id_jenjang');
      //$data['tampiltkelas'] = $this->m_models->getEmployees('*', 'tingkatan_kelas', 'tingkat_pendidikan', 'id_tp');
       //$data['tampiltkelas2'] = $this->m_models->getEmployees('*', 'tingkatan_kelas', 'jtingkat_pendidikan', 'id_jenjang');
      //($select, $table, $tablejoin, $id)
      $data['tampilta'] = $this->t_siswa->tampil_ta(); 
       $data['tampiltkelas'] = $this->t_kelas->tampil_tingkatan_kelas(); 

       //$data['t']

    $this->load->view('kelas/v_tingkatan_kelas',$data);

    $this->load->view('template/footer');
  }



 public function input_tkelas()
  {
   
            $data['tampiltingkat'] = $this->t_kelas->tampil_tingkat(); 
           $data['tampiljenjang'] = $this->t_kelas->tampil_jenjang_pendidikan(); 

             //$this->load->view('siswa/v_siswa',$data);
          $this->load->view('kelas/v_input_tkelas',$data);
      
          $this->load->view('template/footer');
  }

   function tambahtkelas(){
           $this->t_kelas->simpan_dtkelas();
      redirect('kelas/tingkatan_kelas');
    }





  //----Handling Master Kelas-----
  public function nama_kelas()
  {
    
      $data['tampilkelas'] = $this->t_kelas->tampil_kelas(); 
      $data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); 
       //Menampilkan Tahun Akademik
      $data['tampilta'] = $this->t_siswa->tampil_ta(); 
    

    $this->load->view('kelas/v_nama_kelas',$data);

    $this->load->view('template/footer');

  }


   public function inputkelas()
  {
      $data['tampiljjg'] = $this->t_sekolah->tampil_jenjang();
      $data['tampilta'] = $this->t_kelas->tampil_ta(); 
      $data['tampilprodi'] = $this->t_kelas->tampil_prodi();
      $data['tampilpegawai'] = $this->t_kelas->tampil_pegawai();  
       $data['tampiltkelas'] = $this->t_kelas->tampil_tingkatan_kelas(); 


       //$this->load->view('siswa/v_siswa',$data);
    $this->load->view('kelas/v_input_kelas',$data);

    $this->load->view('template/footer');
  }




 function tambahkelas(){
           $this->t_kelas->simpan_dkelas();
      redirect('kelas/nama_kelas');
    }




//----Handling Pembagian Kelas Siswa-----
	public function pembagian_kelas()
	{
   	//$data['tampilsiswa'] = $this->t_siswa->tampil_siswa(); 
    //ambil id sekolah dari session

      $amb['ambilta'] = $this->m_models->getAll("tahun_akademik order by tahun1 desc limit 1");

      foreach($amb['ambilta'] as $th) 
        {
    $data['tampilsiswa'] = $this->m_models->getAll("siswa_sma where nis not in (select nis from rombongan_belajar where id_tahun='".$th->id_tahun."') and id_sekolah='5'");
     $data['tampilkelas'] = $this->m_models->getAll("kelas where id_tahun='".$th->id_tahun."' and  id_sekolah='5'");   
        } 
   	//Menampilkan Tingkat Pendidikan
   	$data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); 
   	//Menampilkan Tingkat Profesi
   	$data['tampilprofesi'] = $this->t_siswa->tampil_profesi(); 
   	//Menampilkan Tahun Akademik
   	$data['tampilta'] = $this->t_siswa->tampil_ta(); 
    //Menampilkan Tahun Akademik
   // $data['tampilkelas'] = $this->t_kelas->tampil_kelas(); 
   // $data['tampilkelas'] = $this->m_models->getAll("kelas where id_tahun='3' and  id_sekolah='5'");
   	

    $this->load->view('kelas/v_bagi_kelas',$data);
		$this->load->view('template/footer');
	}


   function simpanbagikelas(){
           $this->t_kelas->simpan_dbagikelas();
      redirect('kelas/rombongan_belajar');
    }


    public function rombongan_belajar()
  {
     /* $data['tampilsiswa'] = $this->t_siswa->tampil_siswa(); 
    //Menampilkan Tingkat Pendidikan
    $data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); 
    //Menampilkan Tingkat Profesi
    $data['tampilprofesi'] = $this->t_siswa->tampil_profesi(); 
    //Menampilkan Tahun Akademik
    $data['tampilta'] = $this->t_siswa->tampil_ta(); 
    //Menampilkan Tahun Akademik
    $data['tampilkelas'] = $this->t_kelas->tampil_kelas(); */

    $data['tampilrombel'] = $this->t_kelas->tampil_rombel(); 
     //$amb['tampilrombel'] = $this->m_models->getAll("rombongan_belajar order by tahun1");


    

    $this->load->view('kelas/v_rombel',$data);
    $this->load->view('template/footer');
  }






}
?>