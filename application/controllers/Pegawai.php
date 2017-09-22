<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pegawai extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('pagination');
		if (!isset($this->session->userdata['id_pengguna'])) {
			redirect(base_url("login"));
		}
		$this->load->model('m_models');
		$this->load->library('datatables');
	}
	
	
	//fungsi menampilkan data pegawai
	public function pegawai(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
	
		$this->load->view('pegawai/pegawai');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}

	
	//fungsi input data pegawai, riwayat pendidikan, kk, dsb
	public function input_pegawai(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$hariini=date("Y");
		$sub=substr($hariini,2,2);
        $jpeg = $this->m_models->getRows('pegawai');
		//menambahkan angka nol
		if($jpeg < 10) {
			$nourut = '000'.$jpeg;
		}else if($jpeg < 100)	{
			$nourut = '00'.$jpeg;
		}else if($jpeg < 1000){
			$nourut = '0'.$jpeg;
		}else {
			$nourut = $jpeg;
		}
		$data['nrp']="$sub$nourut";
        $data['jabatan'] = $this->m_models->getAll('jabatan');
        $data['pangkat'] = $this->m_models->getAll('golongan');
        $data['kontrak_kerja'] = $this->m_models->getAll('kontrak');
        $data['tingkat_pend'] = $this->m_models->getAll('tingkat_pendidikan');
        $data['profesi'] = $this->m_models->getAll('profesi');
        $data['penempatan'] = $this->m_models->getAll('sekolah order by nama');
		$this->load->view('pegawai/f_pegawai',$data);

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function form_anggota_kk(){
		$this->load->view('pegawai/form_anggota_kk');
	}

	//fungsi untuk simpan data pegawai
	public function simpan_pegawai(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
        $nip = $this->input->post('nip');
		$nuptk = $this->input->post('nuptk');
		$nrp = $this->input->post('nrp');
		$no_ktp = $this->input->post('no_ktp');
		$nama = $this->input->post('nama');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jk = $this->input->post('jk');
		$gol_darah = $this->input->post('gol_darah');
		$alamat = $this->input->post('alamat');
		$desa = $this->input->post('desa');
		$kec = $this->input->post('kec');
		$kab = $this->input->post('kab');
		$agama = $this->input->post('agama');
		$status_marital = $this->input->post('status_marital');
		$warganegara = $this->input->post('warganegara');
		$no_hp1 = $this->input->post('no_hp1');
		$no_hp2 = $this->input->post('no_hp2');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$status_aktif = $this->input->post('status_aktif');
		$status_kary = $this->input->post('status_kary');
		$jab = $this->input->post('jab');
		$pangkat = $this->input->post('pangkat');
		$foto = $this->input->post('foto');
		$email = $this->input->post('email');
		$penempatan = $this->input->post('penempatan');
		$ktp=$this->input->post('ktp');
		$kk=$this->input->post('kk');
		$ijazah=$this->input->post('ijazah');
		$skck=$this->input->post('skck');
		$ket_dokter=$this->input->post('ket_dokter');
		$rekomendasi_kerja=$this->input->post('rekomendasi_kerja');
		$sertf_ahli=$this->input->post('sert_keahlian');
		$kartu_kuning=$this->input->post('kartu_kuning');
		$npwp=$this->input->post('NPWP');

		$ting_pend = $this->input->post('ting_pend');
		for ($i=0; $i<=10; $i++){
			$jenjang_pend = $this->input->post('jenjang'.$i);
			$jenjang = $jenjang_pend[$i];
			//$nm_sekolah = $this->input->post('nm_sekolah'.$jenjang[$i]);
			$nm_sekolah = $this->input->post('nm_sekolah'.$jenjang);
			$kota = $this->input->post('kota'.$jenjang);
			$thn_lulus = $this->input->post('thn_lulus'.$jenjang);
			$fakultas = $this->input->post('fakultas'.$jenjang);
			$jurusan = $this->input->post('jurusan'.$jenjang);
			if (($nm_sekolah != "")&&($kota != "")&&($thn_lulus != "")&&($fakultas != "")&&($jurusan != "")){
				$this->db->query("INSERT INTO riwayat_pend_peg VALUES ('', '$nrp', '$jenjang', '$nm_sekolah', '$kota', '$thn_lulus', '$fakultas', '$jurusan')") or die (mysql_error());
			}
		}
		
		for ($j=1; $j<=5; $j++){
			$periode = $this->input->post('periode'.$j); 
			$tmp_kerja = $this->input->post('tmp_kerja'.$j);
			$posisi = $this->input->post('posisi'.$j);
			if (($periode != "") && ($tmp_kerja != "") && ($posisi != "")){
				$this->db->query("INSERT INTO peng_kerja VALUES ('', '$nrp', '$periode', '$tmp_kerja', '$posisi')") or die (mysql_error());
			}
		}
		
		//kartu keluarga
		$jml_anggota = $this->input->post('jml_anggota'); 
		$no_kk = $this->input->post('no_kk'); 
		$blok_kk = $this->input->post('blok_kk'); 
		$rt_kk = $this->input->post('rt_kk'); 
		$rw_kk = $this->input->post('rw_kk'); 
		$desa_kk = $this->input->post('desa_kk'); 
		$kec_kk = $this->input->post('kec_kk'); 
		$kab_kk = $this->input->post('kab_kk'); 
		$kode_pos_kk = $this->input->post('kode_pos_kk'); 
		$provinsi_kk = $this->input->post('provinsi_kk');  
		for ($a=1; $a<=$jml_anggota; $a++){ 
			$no_penduduk_kk = $this->input->post('no_penduduk_kk'.$a); 
			$nama_kk = $this->input->post('nama_kk'.$a); 
			$tmp_lahir_kk = $this->input->post('tmp_lahir_kk'.$a); 
			$tgl_lahir_kk = $this->input->post('tgl_lahir_kk'.$a); 
			$jk_kk = $this->input->post('jk_kk'.$a); 
			$agama_kk = $this->input->post('agama_kk'.$a); 
			$pend_kk = $this->input->post('pend_kk'.$a); 
			$pekerjaan_kk = $this->input->post('pekerjaan_kk'.$a); 
			$status_marital_kk = $this->input->post('status_marital_kk'.$a); 
			$hub_kk = $this->input->post('hub_kk'.$a); 
			$warganegara_kk = $this->input->post('warganegara_kk'.$a); 
			$paspor_kk = $this->input->post('paspor_kk'.$a); 
			$kitas_kk = $this->input->post('kitas_kk'.$a); 
			$ayah_kk = $this->input->post('ayah_kk'.$a); 
			$ibu_kk = $this->input->post('ibu_kk'.$a); 
			$keadaan_kk = $this->input->post('keadaan_kk'.$a); 
			$anggota_kk = $this->input->post('anggota_kk'.$a); 
			
			$this->db->query("INSERT INTO kartu_keluarga VALUES ('', '$no_penduduk_kk', '$no_kk', '$nrp', '$nama_kk','$blok_kk', '$rt_kk', '$rw_kk', '$desa_kk', '$kec_kk', '$kab_kk', '$kode_pos_kk', '$provinsi_kk', '$jk_kk', '$tmp_lahir_kk', '$tgl_lahir_kk', '$agama_kk', '$pend_kk', '$pekerjaan_kk', '$status_marital_kk', '$hub_kk',  '$warganegara_kk', '$paspor_kk', '$kitas_kk', '$ayah_kk', '$ibu_kk', '$keadaan_kk', now(), now(), '$anggota_kk', 'Aktif')") or die (mysql_error());
		}
		
		$this->db->query("INSERT INTO pegawai VALUES ('$nrp', '$nuptk', '$nip', '$nama', '$tmp_lahir','$tgl_lahir', '$jk', '$tgl_masuk', '$alamat', '$desa', '$kec', '$kab', '$email', '$foto', '$status_marital', '$status_aktif', '$jab', '$no_hp1', '$ting_pend', '$gol_darah', '$agama',  '$no_ktp', '0', '$skck', '$ktp', '$kk', '$ijazah', '$kartu_kuning', '$ket_dokter', '$npwp', '$rekomen_kerja', '$sertf_ahli','$warganegara','$status_kary','$no_hp2', '$pangkat','$penempatan' )") or die (mysql_error());
		$data['pegawai'] = $this->m_models->getAll('pegawai');
		//$this->load->view('pegawai/lihat_pegawai',$data);
		redirect('pegawai/lihat_pegawai');
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk lihat data pegawai
	function lihat_pegawai(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
			$no_link = $this->uri->segment(3);
			$config['base_url'] = site_url('pegawai/lihat_pegawai');
            $config['total_rows'] = $this->m_models->getRows("pegawai");
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
		$data['pegawai'] = $this->m_models->getAllPaging('pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan order by nama asc limit', $nolink, $config['per_page']);
		$data['link'] = $this->pagination->create_links();
		$this->load->view('pegawai/lihat_pegawai',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}

	function get_pegawai() {
        header('Content-Type: application/json');
        echo $this->m_models->get_pegawai();
    }

	
	//fungsi untuk detail data pegawai
	public function detail_pegawai($nrp){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$nrp = $this->uri->segment(3);
		$data['pegawai'] = $this->m_models->getAll("pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan where nrp='$nrp' order by nama asc");
		$data['pend_akhir'] = $this->m_models->getAll("riwayat_pend_peg join pegawai on pegawai.nrp=riwayat_pend_peg.nrp join tingkat_pendidikan on riwayat_pend_peg.id_tp= tingkat_pendidikan.id_tp where riwayat_pend_peg.nrp='$nrp'");
		$data['pengalaman'] = $this->m_models->getAll("peng_kerja join pegawai on pegawai.nrp=peng_kerja.nrp where peng_kerja.nrp='$nrp'");
		$data['no_kk'] = $this->m_models->getAll("kartu_keluarga join pegawai on pegawai.nrp=kartu_keluarga.nrp where kartu_keluarga.nrp='$nrp'");
		$nokk=$data['no_kk'][0]->no_kk;
		$data['kartu_keluarga'] = $this->m_models->getAll("kartu_keluarga where no_kk='$nokk'");
		$pangkat=$data['pegawai'][0]->id_golongan;
		$kontrak=$data['pegawai'][0]->kontrak;
		$sekolah=$data['pegawai'][0]->id_sekolah;
		$data['golongan'] = $this->m_models->getAll("golongan where id_golongan='$pangkat'");
		$data['kontrak'] = $this->m_models->getAll("kontrak where id_kontrak='$kontrak'");
		$data['penempatan'] = $this->m_models->getAll("sekolah where id_sekolah='$sekolah' order by nama");
		
		$this->load->view('pegawai/detail_pegawai',$data);

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	
	//fungsi untuk edit data pegawai
	public function edit_pegawai($nrp){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$nrp = $this->uri->segment(3);
		$data['pegawai'] = $this->m_models->getAll("pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan where nrp='$nrp' order by nama asc");
		$data['pend_akhir'] = $this->m_models->getAll("riwayat_pend_peg join pegawai on pegawai.nrp=riwayat_pend_peg.nrp join tingkat_pendidikan on riwayat_pend_peg.id_tp= tingkat_pendidikan.id_tp where riwayat_pend_peg.nrp='$nrp'");
		$data['pengalaman'] = $this->m_models->getAll("peng_kerja join pegawai on pegawai.nrp=peng_kerja.nrp where peng_kerja.nrp='$nrp'");
		$data['no_kk'] = $this->m_models->getAll("kartu_keluarga join pegawai on pegawai.nrp=kartu_keluarga.nrp where kartu_keluarga.nrp='$nrp'");
		$nokk=$data['no_kk'][0]->no_kk;
		$data['kartu_keluarga'] = $this->m_models->getAll("kartu_keluarga where no_kk='$nokk'");
		$pangkat=$data['pegawai'][0]->id_golongan;
		$kontrak=$data['pegawai'][0]->kontrak;
		$data['golongan'] = $this->m_models->getAll("golongan");
		$data['kontrak'] = $this->m_models->getAll("kontrak");
		$data['penempatan'] = $this->m_models->getAll("sekolah order by nama");
		
        $data['jabatan'] = $this->m_models->getAll('jabatan');
        $data['pangkat'] = $this->m_models->getAll('golongan');
        $data['tingkat_pend'] = $this->m_models->getAll('tingkat_pendidikan');
		$id_pend=$data['tingkat_pend'][0]->id_tp;
		$data['rpend'] = $this->m_models->getAll("riwayat_pend_peg where nrp='$nrp' and id_tp='$id_tp'");
		$this->load->view('pegawai/edit_pegawai',$data);

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk simpan data pegawai
	public function update_pegawai(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
        $nip = $this->input->post('nip');
		$nuptk = $this->input->post('nuptk');
		$nrp = $this->input->post('nrp');
		$no_ktp = $this->input->post('no_ktp');
		$nama = $this->input->post('nama');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jk = $this->input->post('jk');
		$gol_darah = $this->input->post('gol_darah');
		$alamat = $this->input->post('alamat');
		$desa = $this->input->post('desa');
		$kec = $this->input->post('kec');
		$kab = $this->input->post('kab');
		$agama = $this->input->post('agama');
		$status_marital = $this->input->post('status_marital');
		$warganegara = $this->input->post('warganegara');
		$no_hp1 = $this->input->post('no_hp1');
		$no_hp2 = $this->input->post('no_hp2');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$status_aktif = $this->input->post('status_aktif');
		$status_kary = $this->input->post('status_kary');
		$jab = $this->input->post('jab');
		$pangkat = $this->input->post('pangkat');
		$foto = $this->input->post('foto');
		$email = $this->input->post('email');
		$penempatan = $this->input->post('penempatan');

		$ting_pend = $this->input->post('ting_pend');
		$jenjang_pend = $this->input->post('jenjang'.$i);
		for ($i=0; $i<=10; $i++){
			$jenjang = $jenjang_pend[$i];
			//$nm_sekolah = $this->input->post('nm_sekolah'.$jenjang[$i]);
			$nm_sekolah = $this->input->post('nm_sekolah'.$jenjang);
			$kota = $this->input->post('kota'.$jenjang);
			$thn_lulus = $this->input->post('thn_lulus'.$jenjang);
			$fakultas = $this->input->post('fakultas'.$jenjang);
			$jurusan = $this->input->post('jurusan'.$jenjang);
			if (($nm_sekolah != "")&&($kota != "")&&($thn_lulus != "")&&($fakultas != "")&&($jurusan != "")){
				$jrpend = $this->m_models->getRows("riwayat_pend_peg where nrp='$nrp' and id_tp='$jenjang'"); 
				if ($jrpend != 0){
					$this->db->query("UPDATE riwayat_pend_peg SET `sekolah`='$nm_sekolah',`kota`='$kota', `thn_lulus`='$thn_lulus',`fakultas`='$fakultas',`jurusan`='$jurusan' WHERE nrp='$nrp' and id_rpend='$jenjang'") or die (mysql_error());
				} else {
					$this->db->query("INSERT INTO riwayat_pend_peg VALUES ('', '$nrp', '$jenjang', '$nm_sekolah', '$kota', '$thn_lulus', '$fakultas', '$jurusan')") or die (mysql_error());
				}
			}
		}
		
		for ($j=1; $j<=5; $j++){
			$periode = $this->input->post('periode'.$j); 
			$tmp_kerja = $this->input->post('tmp_kerja'.$j);
			$posisi = $this->input->post('posisi'.$j);
			$id_pk = $this->input->post('id_pk'.$j);
			$jpeng_kerja = $this->m_models->getRows("peng_kerja join pegawai on pegawai.nrp=peng_kerja.nrp where peng_kerja.id_pk='$id_pk'");
			
			if (($periode != "") && ($tmp_kerja != "") && ($posisi != "")){
				if ($jpeng_kerja != 0){
					$this->db->query("UPDATE peng_kerja SET `periode`='$periode',`tempat`='$tempat', `posisi`='$posisi' WHERE id_pk='$id_pk'") or die (mysql_error());
				} else {
					$this->db->query("INSERT INTO peng_kerja VALUES ('', '$nrp', '$periode', '$tmp_kerja', '$posisi')") or die (mysql_error());
				}
				
			}
		}
		
		$this->db->query("UPDATE `pegawai` SET `nuptk`='$nuptk',`nip`='$nip',`nama`='$nama',`tmp_lhr`='$tmp_lahir',`tgl_lhr`='$tgl_lahir',`jk`='$jk',`tgl_masuk`='$tgl_masuk',`alamat`='$alamat',`kel`='$desa',`kec`='$kec',`kota`='$kab',`email`='$email',`foto`='$foto',`st_marital`='$status_marital', `status_aktf`='$status_aktif',`id_jabatan`='$jab',`tlp`='$no_hp1',`pend_akhir`='$ting_pend',`gol_darah`='$gol_darah',`agama`='$agama',`no_ktp`='$no_ktp',`saldo_awal`='0',`skck`='$skck',`ktp`='$ktp',`kk`='$kk',`ijazah`='$ijazah',`kartu_kuning`='$kartu_kuning',`ket_dokter`='$ket_dokter',`npwp`='$npwp',`rekomen_kerja`='$rekomen_kerja',`sertifikat_keahlian`='$sertf_ahli',`warga_negara`='$warganegara',`id_kontrak`='$status_kary',`no_hp2`='$no_hp2',`id_golongan`='$pangkat',`id_sekolah`='$penempatan' WHERE nrp='$nrp'") or die (mysql_error());
		redirect('pegawai/lihat_pegawai');
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	
	//fungsi untuk resign pegawai
	public function resign(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
		$this->load->view('pegawai/resign');

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk input resign pegawai
	public function input_resign(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$data['pegawai'] = $this->m_models->getAll("pegawai where status_aktf='Aktif' order by nama");
		$this->load->view('pegawai/f_resign',$data);

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk simpan resign pegawai
	public function simpan_resign(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
		$nrp = $this->input->post('nrp');
		$tgl_pengajuan = $this->input->post('tgl_pengajuan');
		$alasan = $this->input->post('alasan');
		$tgl_keluar = $this->input->post('tgl_keluar');
		
		$this->db->query("INSERT INTO resign VALUES ('','$nrp', '$tgl_pengajuan', '$alasan', '$tgl_keluar', 'Accept')") or die (mysql_error());
		$this->db->query("UPDATE pegawai set status_aktf='Tidak Aktif' where nrp='$nrp'") or die (mysql_error());

		redirect('pegawai/lihat_resign');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	
	//fungsi untuk lihat data resign pegawai
	public function lihat_resign(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
		//$data['resign'] = $this->m_models->getAll("pegawai  join jabatan on jabatan.id_jabatan=pegawai.id_jabatan join resign on resign.nrp=pegawai.nrp where pegawai.nrp in (select nrp from resign) and resign.status='Accept' order by tgl_keluar");
		
		$data['resign'] = $this->m_models->getJoin2where("*", "pegawai" , "jabatan", "jabatan.id_jabatan=pegawai.id_jabatan", "resign", "resign on resign.nrp=pegawai.nrp","resign.status","Accept","nama","asc");
		$this->load->view('pegawai/lihat_resign',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk pengajuan data resign pegawai
	public function pengajuan_resign(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
		//$data['resign'] = $this->m_models->getAll("pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan join resign on resign.nrp=pegawai.nrp where pegawai.nrp in (select nrp from resign) and resign.status='Proses' order by tgl_keluar");
		//$data['resign'] = $this->m_models->getJoin2whereIn("*", "pegawai" , "jabatan", "jabatan.id_jabatan=pegawai.id_jabatan", "resign", "resign on resign.nrp=pegawai.nrp", "pegawai.nrp", $id, "nama", "asc");
		$data['resign'] = $this->m_models->getJoin2where("*", "pegawai" , "jabatan", "jabatan.id_jabatan=pegawai.id_jabatan", "resign", "resign on resign.nrp=pegawai.nrp","resign.status","Proses","nama","asc");
		
	
		/*foreach ($data['mutasi'] as $mts){
			$id_tmp=$mts->tmp_mutasi;
			$id_jab=$mts->jab_mutasi;
			$data['jab_mutasi']=$this->m_models->getDataByID("jabatan", "id_jabatan", $id_jab);
			$data['tmp_mutasi']=$this->m_models->getDataByID("sekolah", "id_sekolah", $id_tmp);
			
			$data[jabatan_mutasi]=$data['jab_mutasi'][0]->nama_jabatan;
			$data[tempat_mutasi]=$data['tmp_mutasi'][0]->nama;
			$data['arr']=array("$mts->nrp","$mts->nama","$data[tempat_mutasi]","$data[jabatan_mutasi]","$data[tempat_mutasi]","$data[jabatan_mutasi]","$mts->tgl_pengajuan","$mts->tgl_pindah","$mts->alasan","$mts->no_sk","$mts->id_mp");
		}*/
		
		$this->load->view('pegawai/pengajuan_resign',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function app_pengajuan_resign(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$id_resign = $this->uri->segment(3);
		$ket = $this->uri->segment(4); 
		if ($ket=="A"){
			$data[nrp]=$this->db->query("select * from resign where id_resign='$id_resign'");
			//$nrp=$data[nrp][0]->nrp;
			$update=$this->db->query("update resign set status='Accept' where id_resign='$id_resign'");
			$update=$this->db->query("update pegawai set status_aktf='Tidak Aktif' where nrp in (select nrp from resign where id_resign='$id_resign')");
		} else if ($ket=="R"){
			$update=$this->db->query("update resign set status='Reject' where id_resign='$id_resign'");
		}
		
		redirect('pegawai/pengajuan_resign');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk pelatihan
	public function pelatihan(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
		$this->load->view('pegawai/pelatihan');

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk input pelatihan pegawai
	public function input_pelatihan(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$data['pegawai'] = $this->m_models->getAll("pegawai where status_aktf='Aktif' order by nama");
		$this->load->view('pegawai/f_pelatihan',$data);

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk simpan pelatihan pegawai
	public function simpan_pelatihan(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
		$nrp = $this->input->post('nrp');
		$tgl_pengajuan = $this->input->post('tgl_pengajuan');
		$nama_lembaga = $this->input->post('nama_lembaga');
		$tmp_lembaga = $this->input->post('tmp_lembaga');
		$alamat = $this->input->post('alamat');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$nama_pelatihan = $this->input->post('nama_pelatihan');
		$no_sertifikat = $this->input->post('no_sertifikat');
		
		$this->db->query("INSERT INTO pelatihan VALUES ('','$nrp', '$tgl_pengajuan', '$nama_lembaga', '$tmp_lembaga', '$alamat', '$tgl_mulai', '$tgl_selesai', '$nama_pelatihan', '$no_sertifikat')") or die (mysql_error());

		redirect('pegawai/lihat_pelatihan');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	
	//fungsi untuk lihat data pelatihan pegawai
	public function lihat_pelatihan(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
		$data['pelatihan'] = $this->m_models->getAll("pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan join pelatihan on pelatihan.nrp=pegawai.nrp where pegawai.nrp in (select nrp from pelatihan)  order by tgl_mulai_ps");
		$this->load->view('pegawai/lihat_pelatihan',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	
	//fungsi untuk mutasi
	public function mutasi(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
		$this->load->view('pegawai/mutasi');

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk input mutasi pegawai
	public function form_mutasi(){
        $data['jabatan'] = $this->m_models->getAll('jabatan');
        $data['penempatan'] = $this->m_models->getAll('sekolah order by nama');
		$this->load->view('pegawai/form_mutasi',$data);
	}
	
	public function input_mutasi(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$data['pegawai'] = $this->m_models->getAll("pegawai where status_aktf='Aktif' order by nama");
        $data['jabatan'] = $this->m_models->getAll('jabatan');
        $data['penempatan'] = $this->m_models->getAll('sekolah order by nama');
		$this->load->view('pegawai/f_mutasi',$data);

		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	//fungsi untuk simpan mutasi pegawai
	public function simpan_mutasi(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		
		$nrp = $this->input->post('nrp');
		$jenis_mutasi = $this->input->post('jenis_mutasi');
		$t_mutasi = $this->input->post('tmp_mutasi');
		$j_mutasi = $this->input->post('jab_mutasi');
		$tgl_pengajuan = $this->input->post('tgl_pengajuan');
		$alasan = $this->input->post('alasan');
		
		$data['pegawai'] = $this->m_models->getAll("pegawai where nrp='$nrp' order by nama");
		$tmp_asal=$data['pegawai'][0]->id_sekolah;
		$jab_asal=$data['pegawai'][0]->id_jabatan;
		
		if (($t_mutasi=="") && ($j_mutasi!="")){
			$jab_mutasi=$j_mutasi;
			$tmp_mutasi=$tmp_asal;
		} else if (($t_mutasi!="") && ($j_mutasi=="")){
			$jab_mutasi=$jab_asal;
			$tmp_mutasi=$t_mutasi;
		} else if (($t_mutasi!="") && ($j_mutasi!="")){
			$jab_mutasi=$j_mutasi;
			$tmp_mutasi=$t_mutasi;
		} 
		$this->db->query("INSERT INTO mutasi_pegawai VALUES ('','$nrp', '$jenis_mutasi', '$tmp_asal', '$jab_asal', '$tmp_mutasi', '$jab_mutasi', '$_SESSION[nrp]', 'Proses', 'Proses', 'Proses', 'Proses', '$tgl_pengajuan','0000-00-00','$alasan','')") or die (mysql_error());

		redirect('pegawai/lihat_mutasi');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	
	//fungsi untuk lihat data mutasi pegawai
	public function lihat_mutasi(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$data['mutasi'] = $this->m_models->getDataJoin("mutasi_pegawai.*, pegawai.*, jabatan.*, sekolah.id_sekolah, sekolah.nama as nm_sekolah","mutasi_pegawai","join pegawai on pegawai.nrp=mutasi_pegawai.nrp join sekolah on sekolah.id_sekolah=mutasi_pegawai.tmp_asal join jabatan on jabatan.id_jabatan=mutasi_pegawai.jabatan_asal where app1='Approve'");
		foreach ($data['mutasi'] as $mts){
			$id_tmp=$mts->tmp_mutasi;
			$id_jab=$mts->jab_mutasi;
			$data['jab_mutasi']=$this->m_models->getDataByID("jabatan", "id_jabatan", $id_jab);
			$data['tmp_mutasi']=$this->m_models->getDataByID("sekolah", "id_sekolah", $id_tmp);
			
			$data[jabatan_mutasi]=$data['jab_mutasi'][0]->nama_jabatan;
			$data[tempat_mutasi]=$data['tmp_mutasi'][0]->nama;
			$data['arr']=array("$mts->nrp","$mts->nama","$data[tempat_mutasi]","$data[jabatan_mutasi]","$data[tempat_mutasi]","$data[jabatan_mutasi]","$mts->tgl_pengajuan","$mts->tgl_pindah","$mts->alasan","$mts->no_sk");
		}
		$this->load->view('pegawai/lihat_mutasi',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function pengajuan_mutasi(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$data['mutasi'] = $this->m_models->getDataJoin("mutasi_pegawai.*, pegawai.*, jabatan.*, sekolah.id_sekolah, sekolah.nama as nm_sekolah","mutasi_pegawai","join pegawai on pegawai.nrp=mutasi_pegawai.nrp join sekolah on sekolah.id_sekolah=mutasi_pegawai.tmp_asal join jabatan on jabatan.id_jabatan=mutasi_pegawai.jabatan_asal where app1='Proses'");
		foreach ($data['mutasi'] as $mts){
			$id_tmp=$mts->tmp_mutasi;
			$id_jab=$mts->jab_mutasi;
			$data['jab_mutasi']=$this->m_models->getDataByID("jabatan", "id_jabatan", $id_jab);
			$data['tmp_mutasi']=$this->m_models->getDataByID("sekolah", "id_sekolah", $id_tmp);
			
			$data[jabatan_mutasi]=$data['jab_mutasi'][0]->nama_jabatan;
			$data[tempat_mutasi]=$data['tmp_mutasi'][0]->nama;
			$data['arr']=array("$mts->nrp","$mts->nama","$data[tempat_mutasi]","$data[jabatan_mutasi]","$data[tempat_mutasi]","$data[jabatan_mutasi]","$mts->tgl_pengajuan","$mts->tgl_pindah","$mts->alasan","$mts->no_sk","$mts->id_mp");
		}
		
		$this->load->view('pegawai/pengajuan_mutasi',$data);
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
	
	public function app_pengajuan_mutasi(){
		//menampilkan tampilan header konten
		$this->load->view('template/header');
		$id_mutasi = $this->uri->segment(3);
		$ket = $this->uri->segment(4); 
		if ($ket=="A"){
			$update=$this->db->query("update mutasi_pegawai set app1='Approve' where id_mp='$id_mutasi'");
		} else if ($ket=="R"){
			$update=$this->db->query("update mutasi_pegawai set app1='Batal' where id_mp='$id_mutasi'");
		}
		
		redirect('pegawai/pengajuan_mutasi');
		
		//menampilkan tampilan footer
		$this->load->view('template/footer');
	}
}
