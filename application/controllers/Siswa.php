<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
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
            $this->load->model('m_models'); //load model
                //$this->load->view('template/header');
       }


	public function buku_induk()
	{
		
   		/*$data['tampilsiswa'] = $this->t_siswa->tampil_siswa(); 
   		 //Menampilkan Tingkat Pendidikan
   		$data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); 
   		 //Menampilkan Tingkat Profesi
   		$data['tampilprofesi'] = $this->t_siswa->tampil_profesi(); 
   		 //Menampilkan Tahun Akademik
   		$data['tampilta'] = $this->t_siswa->tampil_ta(); 
   	

        $this->load->view('siswa/v_siswa',$data);*/


      $this->load->view('template/header');
      $no_link = $this->uri->segment(3);
      $config['base_url'] = site_url('siswa/buku_induk');
            $config['total_rows'] = $this->m_models->getRows("siswa_sma");
            $config['per_page'] = 10; 
      $config['use_page_numbers'] = TRUE;
 
            $config['num_links'] = 5;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = false;
            $config['last_link'] = false;
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="prev">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
      
            $this->pagination->initialize($config);
      
      if ($no_link==""){
        $nolink=1;
      } else {
        $nolink=($no_link*$config['per_page'])-($config['per_page']-1);
      }
    //$data['pegawai'] = $this->m_models->getAll('pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan order by nama asc');
    $data['tampilsiswa'] = $this->m_models->getAllPaging('siswa_sma order by nis asc limit', $nolink, $config['per_page']);
    $data['link'] = $this->pagination->create_links();
    $this->load->view('siswa/v_siswa',$data);
		
		$this->load->view('template/footer');
	}


	//untuk membuat insert data siswa
	function tambahsiswa(){
           $this->t_siswa->simpan_dsiswa();
			redirect('siswa/buku_induk');
    }


     public function inputsiswa()
  {
	   $this->load->view('template/header');
  		 $data['tampilsiswa'] = $this->t_siswa->tampil_siswa(); //membuat data dari hasil transaksi masuk ke $data
   		 //Menampilkan Tingkat Pendidikan
   		$data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); //membuat data dari hasil transaksi masuk ke $data
   		 //Menampilkan Tingkat Profesi
   		$data['tampilprofesi'] = $this->t_siswa->tampil_profesi(); //membuat data dari hasil transaksi masuk ke $data
   		 //Menampilkan Tahun Akademik
   		$data['tampilta'] = $this->t_siswa->tampil_ta(); //membuat data dari hasil transaksi masuk ke $data
   	

        $this->load->view('siswa/v_input_siswa',$data);
		
		$this->load->view('template/footer');
  }



public function detailsiswa()
	{
		 $this->load->view('template/header');
		$kode = $this->uri->segment(3);
   		$data['tampilsiswa'] = $this->t_siswa->tampil_siswa(); //membuat data dari hasil transaksi masuk ke $data
   		 //Menampilkan Tingkat Pendidikan
   		$data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); //membuat data dari hasil transaksi masuk ke $data
   		 //Menampilkan Tingkat Profesi
   		$data['tampilprofesi'] = $this->t_siswa->tampil_profesi(); //membuat data dari hasil transaksi masuk ke $data
   		 //Menampilkan Tahun Akademik
   		$data['tampilta'] = $this->t_siswa->tampil_ta(); //membuat data dari hasil transaksi masuk ke $data
   		


   		//menampilkan seluruh data yang telah di paparkan
        $data['qsiswa']=$this->t_siswa->tampil_dsiswa();
   		$data['qsehat']=$this->t_siswa->tampil_dsiswa();
   		$data['qayah']=$this->t_siswa->tampil_dsiswa();
   		$data['qibu']=$this->t_siswa->tampil_dsiswa();
   		$data['qwali']=$this->t_siswa->tampil_dsiswa();
   		$data['qdidik']=$this->t_siswa->tampil_dsiswa();
   		$data['qlanjut']=$this->t_siswa->tampil_dsiswa();
   		$data['qkembang']=$this->t_siswa->tampil_dsiswa();
   		$data['qpindah']=$this->t_siswa->tampil_dsiswa();
   		$data['qhobi']=$this->t_siswa->tampil_dsiswa();

        $this->load->view('siswa/v_detail_siswa',$data);
		
		$this->load->view('template/footer');
  
	}


public function hapussiswa()
	{
         $this->t_siswa->hapus_dsiswa();
		 redirect('siswa/buku_induk');
	}






//----Handling Pembagian Kelas Siswa-----
	public function pembagian_kelas()
	{
		 $this->load->view('template/header');
		
   		$data['tampilsiswa'] = $this->t_siswa->tampil_siswa(); //membuat data dari hasil transaksi masuk ke $data
   		 //Menampilkan Tingkat Pendidikan
   		$data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); //membuat data dari hasil transaksi masuk ke $data
   		 //Menampilkan Tingkat Profesi
   		$data['tampilprofesi'] = $this->t_siswa->tampil_profesi(); //membuat data dari hasil transaksi masuk ke $data
   		 //Menampilkan Tahun Akademik
   		$data['tampilta'] = $this->t_siswa->tampil_ta(); //membuat data dari hasil transaksi masuk ke $data
     $data['r'] =  $this->m_models->getRows($tabel);   	

    $this->load->view('siswa/v_bagi_kelas',$data);
		
		$this->load->view('template/footer');
	}


  public function editsiswa()
  {
	   $this->load->view('template/header');
    $kode = $this->uri->segment(3);
      $data['tampilsiswa'] = $this->t_siswa->tampil_siswa(); //membuat data dari hasil transaksi masuk ke $data
       //Menampilkan Tingkat Pendidikan
      $data['tampiltingkat'] = $this->t_siswa->tampil_tingkat(); //membuat data dari hasil transaksi masuk ke $data
       //Menampilkan Tingkat Profesi
      $data['tampilprofesi'] = $this->t_siswa->tampil_profesi(); //membuat data dari hasil transaksi masuk ke $data
       //Menampilkan Tahun Akademik
      $data['tampilta'] = $this->t_siswa->tampil_ta(); //membuat data dari hasil transaksi masuk ke $data
      



      //menampilkan seluruh data yang telah di paparkan
      $data['qsiswa']=$this->t_siswa->tampil_dsiswa();
      $data['qsehat']=$this->t_siswa->tampil_dsiswa();
      $data['qayah']=$this->t_siswa->tampil_dsiswa();
      $data['qibu']=$this->t_siswa->tampil_dsiswa();
      $data['qwali']=$this->t_siswa->tampil_dsiswa();
      $data['qdidik']=$this->t_siswa->tampil_dsiswa();
      $data['qlanjut']=$this->t_siswa->tampil_dsiswa();
      $data['qkembang']=$this->t_siswa->tampil_dsiswa();
      $data['qpindah']=$this->t_siswa->tampil_dsiswa();
      $data['qhobi']=$this->t_siswa->tampil_dsiswa();

        $this->load->view('siswa/v_edit_siswa',$data);

    $this->load->view('template/footer');
  
  }



  public function save_editsiswa()
  {
    $kode = $this->uri->segment(3);
    $nisn = $this->input->post('nisn');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $nama_panggilan = $this->input->post('nama_panggilan');
    $status_anak = $this->input->post('hubungan_anak');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
     $email = $this->input->post('email');
     $tgl_masuk = $this->input->post('tanggal_masuk');
      $anak_ke = $this->input->post('anake');
       $sdr_kandung = $this->input->post('saudara_kandung');
       $sdr_tiri = $this->input->post('saudara_tiri');
       $sdr_angkat = $this->input->post('saudara_angkat');
        $arsip_nisn = $this->input->post('arsip_nisn');
        $arsip_akte = $this->input->post('arsip_akte');
        $arsip_kk = $this->input->post('arsip_kk');
        $arsip_ijazah = $this->input->post('arsip_skhun');






      $this->db->query("UPDATE siswa_sma SET `nisn`='$nisn',
        `nama_lengkap`='$nama_lengkap', 
        `nama_panggilan`='$nama_panggilan',
        `jk`='$jk',
        `tempat_lahir`='$tempat_lahir',
        `tanggal_lahir`='$tanggal_lahir',
        `email`='$email',
        `tgl_masuk`='$tgl_masuk',
         `anak_ke`='$anak_ke',
         `sdr_kandung`='$sdr_kandung',
          `sdr_tiri`='$sdr_tiri',
          `sdr_angkat`='$sdr_angkat',
          `arsip_nisn`='$arsip_nisn',
          `arsip_akte`='$arsip_akte',
          `arsip_ijazah`='$arsip_ijazah',
        `status_anak`='$hubungan_anak' WHERE nis='$kode'") or die (mysql_error());

       redirect('siswa/buku_induk');
  
  }


}
?>
