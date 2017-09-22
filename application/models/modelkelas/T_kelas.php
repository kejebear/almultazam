<?php
class t_kelas extends CI_Model{

 function tampil_siswa(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('siswa_sma'); //memeilih tabel
    $this->db->order_by('nama_lengkap', 'asc');
 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampilsiswa[] = $data;
            }
        return $tampilsiswa; //hasil dari semua proses ada dimari
        }
}



function tampil_kelas(){
    $this->db->select('*'); //memilih semua field
    $this->db->from('kelas'); //memeilih tabel
    $this->db->join('tahun_akademik', 'tahun_akademik.id_tahun = kelas.id_tahun');
    $this->db->join('tingkatan_kelas', 'tingkatan_kelas.id_tingkatan_kelas = kelas.id_tingkatan_kelas');
     $this->db->join('prodi', 'prodi.id_prodi = kelas.id_prodi');
    $this->db->join('pegawai', 'pegawai.nrp = kelas.nrp');

    $this->db->order_by('id_kelas', 'asc');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampilkelas[] = $data;
            }
        return $tampilkelas; //hasil dari semua proses ada dimari
        }
}

function tampil_tingkatan_kelas(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('tingkatan_kelas'); //memeilih tabel
    $this->db->join('jenjang_pendidikan', 'jenjang_pendidikan.id_jenjang = tingkatan_kelas.id_jenjang');
    $this->db->join('tingkat_pendidikan', 'tingkat_pendidikan.id_tp =tingkatan_kelas.id_tp');
    $this->db->order_by('id_tingkatan_kelas', 'asc');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampiltkelas[] = $data;
            }
        return $tampiltkelas; //hasil dari semua proses ada dimari
        }
}


function tampil_tingkat(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('tingkat_pendidikan'); //memilih tabel
    $this->db->order_by('nama_tp', 'asc');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampiltingkat[] = $data;
            }
        return $tampiltingkat; //hasil dari semua proses ada dimari
        }
}


function tampil_pegawai(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('pegawai'); //memilih tabel
    $this->db->order_by('nama', 'asc');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampilpegawai[] = $data;
            }
        return $tampilpegawai; //hasil dari semua proses ada dimari
        }
}

function tampil_profesi(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('profesi'); //memeilih tabel
    $this->db->order_by('nama_profesi', 'asc');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampilprofesi[] = $data;
            }
        return $tampilprofesi; //hasil dari semua proses ada dimari
        }
}

function tampil_ta(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('tahun_akademik'); //memilih tabe
    $this->db->order_by('tahun1', 'desc limit 1');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampilta[] = $data;
            }
        return $tampilta; //hasil dari semua proses ada dimari
        }
}


function tampil_prodi(){
    $this->db->select('*'); 
    $this->db->from('prodi'); 
    $this->db->join('jenjang_pendidikan', 'jenjang_pendidikan.id_jenjang = prodi.id_jenjang');
    $this->db->join('tingkat_pendidikan', 'tingkat_pendidikan.id_tp =prodi.id_tp');


    $this->db->order_by('nama_prodi', 'asc');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampilprodi[] = $data;
            }
        return $tampilprodi; //hasil dari semua proses ada dimari
        }
}


function tampil_jenjang_pendidikan(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('jenjang_pendidikan'); //memilih tabe
    $this->db->order_by('id_jenjang', 'desc');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampiljenjang[] = $data;
            }
        return $tampiljenjang; //hasil dari semua proses ada dimari
        }
}



function tampil_rombel(){
    $this->db->select('*'); //memilih semua field
    $this->db->from('rombongan_belajar'); //memeilih tabel
    $this->db->join('tahun_akademik', 'tahun_akademik.id_tahun = rombongan_belajar.id_tahun');
    $this->db->join('kelas', 'kelas.id_kelas = rombongan_belajar.id_kelas');
    $this->db->join('siswa_sma', 'siswa_sma.nis = rombongan_belajar.nis');

    $this->db->order_by('nama_lengkap', 'asc');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampilrombel[] = $data;
            }
        return $tampilrombel; //hasil dari semua proses ada dimari
        }
}




//Tambah - Tambah Data

//Insert Data ke Tabel
function simpan_dsiswa(){
    //masuk ke tabel siswa //Contoh kasus siswa sd
   $this->db->query("INSERT INTO siswa_sma VALUES ('','".$this->input->post('nama_lengkap')."', '".
                                        $this->input->post('nama_panggilan')."', '".
                                        $this->input->post('nis')."', '".
                                        $this->input->post('nisn')."', '".
                                        $this->input->post('jk')."', '".
                                        $this->input->post('tempat_lahir')."', '".
                                        $this->input->post('tanggal_lahir')."', '".
                                        $this->input->post('agama')."', '".
                                        $this->input->post('warganegara')."', '".
                                        $this->input->post('email')."', '".
                                        $this->input->post('hubungan_anak')."', '".
                                        $this->input->post('bahasa')."', '".
                                        $this->input->post('fotosiswa')."', '".
                                        $this->input->post('rttgl')."', '".
                                        $this->input->post('rwtgl')."', '".
                                        $this->input->post('jlntgl')."', '".
                                        $this->input->post('desatgl')."', '".
                                        $this->input->post('kectgl')."', '".
                                        $this->input->post('kabtgl')."', '".
                                        $this->input->post('rt')."', '".
                                        $this->input->post('rw')."', '".
                                        $this->input->post('jln')."', '".
                                        $this->input->post('desa')."' , '".
                                        $this->input->post('kec')."' , '".
                                        $this->input->post('kab')."', '".
                                        $this->input->post('prov')."', '".
                                        $this->input->post('anakke')."', '".
                                        $this->input->post('saudara_kandung')."', '".
                                        $this->input->post('saudara_tiri')."', '".
                                        $this->input->post('saudara_angkat')."', '".
                                        $this->input->post('telptgl')."', '".
                                        $this->input->post('jaraktgl')."', '".
                                        $this->input->post('saranatgl')."', '".
                                        $this->input->post('jarak')."', '".
                                        $this->input->post('sarana')."', '".
                                        $this->input->post('arsip_nisn')."', '".
                                        $this->input->post('arsip_akte')."', '".
                                        $this->input->post('arsip_kk')."', '".
                                        $this->input->post('arsip_ijazah')."', '".
                                        $this->input->post('arsip_skhun')."', '".
                                        $this->input->post('tanggal_masuk')."', '', '".
                                        $this->input->post('tahun_akademik')."', '".
                                        $this->input->post('status_aktif')."')");

    //masuk ke tabel siswa
    $this->db->query("INSERT INTO kesehatan_siswa_sma VALUES ('','".$this->input->post('nis')."', '".
                                        $this->input->post('goldar')."', '".
                                        $this->input->post('penyakit')."', '".
                                        $this->input->post('kelainan')."', '".
                                        $this->input->post('tb')."', '".
                                        $this->input->post('bb')."')");
    //ortu ayah
     $this->db->query("INSERT INTO ortu_ayah_sma VALUES ('','".$this->input->post('nis')."', '".
                                        $this->input->post('nama_ayah')."', '".
                                        $this->input->post('tempat_lahir_ayah')."', '".
                                        $this->input->post('tgl_lahir_ayah')."', '".
                                        $this->input->post('agama_ayah')."', '".
                                        $this->input->post('warganegara_ayah')."', '".
                                        $this->input->post('pterakhir_ayah')."', '".
                                        $this->input->post('institusi_pendidikan_ayah')."', '".
                                        $this->input->post('profesi_ayah')."', '".
                                        $this->input->post('penghasilan_ayah')."', '".
                                        $this->input->post('status_ayah')."', '".
                                        $this->input->post('rt_ayah')."', '".
                                        $this->input->post('rw_ayah')."', '".
                                        $this->input->post('jalan_ayah')."', '".
                                        $this->input->post('desa_ayah')."', '".
                                        $this->input->post('kec_ayah')."', '".
                                        $this->input->post('kab_ayah')."', '".
                                        $this->input->post('prov_ayah')."', '".
                                        $this->input->post('no_telp_ayah')."', '".
                                        $this->input->post('email_ayah')."')");

    //ortu ibu
 $this->db->query("INSERT INTO ortu_ibu_sma VALUES ('','".$this->input->post('nis')."', '".
                                        $this->input->post('nama_ibu')."', '".
                                        $this->input->post('tempat_lahir_ibu')."', '".
                                        $this->input->post('tgl_lahir_ibu')."', '".
                                        $this->input->post('agama_ibu')."', '".
                                        $this->input->post('warganegara_ibu')."', '".
                                        $this->input->post('pterakhir_ibu')."', '".
                                        $this->input->post('institusi_pendidikan_ibu')."', '".
                                        $this->input->post('profesi_ibu')."', '".
                                        $this->input->post('penghasilan_ibu')."', '".
                                        $this->input->post('status_ibu')."', '".
                                        $this->input->post('rt_ibu')."', '".
                                        $this->input->post('rw_ibu')."', '".
                                        $this->input->post('jalan_ibu')."', '".
                                        $this->input->post('desa_ibu')."', '".
                                        $this->input->post('kec_ibu')."', '".
                                        $this->input->post('kab_ibu')."', '".
                                        $this->input->post('prov_ibu')."', '".
                                        $this->input->post('no_telp_ibu')."', '".
                                        $this->input->post('email_ibu')."')");
    //ortu wali
 $this->db->query("INSERT INTO ortu_wali_sma VALUES ('','".$this->input->post('nis')."', '".
                                        $this->input->post('nama_wali')."', '".
                                        $this->input->post('tempat_lahir_wali')."', '".
                                        $this->input->post('tgl_lahir_wali')."', '".
                                        $this->input->post('agama_wali')."', '".
                                        $this->input->post('warganegara_wali')."', '".
                                        $this->input->post('pterakhir_wali')."', '".
                                        $this->input->post('institusi_pendidikan_wali')."', '".
                                        $this->input->post('profesi_wali')."', '".
                                        $this->input->post('penghasilan_wali')."', '".
                                        $this->input->post('status_wali')."', '".
                                        $this->input->post('rt_wali')."', '".
                                        $this->input->post('rw_wali')."', '".
                                        $this->input->post('jalan_wali')."', '".
                                        $this->input->post('desa_wali')."', '".
                                        $this->input->post('kec_wali')."', '".
                                        $this->input->post('kab_wali')."', '".
                                        $this->input->post('prov_wali')."', '".
                                        $this->input->post('no_telp_wali')."', '".
                                        $this->input->post('email_wali')."')");

    //hobi
$this->db->query("INSERT INTO hobi_sma VALUES ('','".$this->input->post('nis')."', '".
                                        $this->input->post('hobiseni')."', '".
                                        $this->input->post('hobiolahraga')."', '".
                                        $this->input->post('hobiorganisasi')."', '".
                                        $this->input->post('hobilainnya')."')");

    //perkembangan
$this->db->query("INSERT INTO perkembangan_siswa_sma VALUES ('','".$this->input->post('nis')."', '".
                                        $this->input->post('nama_beasiswa1')."', '".
                                        $this->input->post('bulan_beasiswa1')."', '".
                                        $this->input->post('nama_beasiswa2')."', '".
                                        $this->input->post('bulan_beasiswa2')."', '".
                                        $this->input->post('nama_beasiswa3')."', '".
                                        $this->input->post('bulan_beasiswa3')."', '".
                                        $this->input->post('tanggal_lulus')."', '".
                                        $this->input->post('tanggal_ijazah')."', '".
                                        $this->input->post('no_ijazah')."', '".
                                        $this->input->post('tanggal_skhun')."', '".
                                        $this->input->post('no_skhun')."')");


    //melanjutkan

if($this->input->post('nama_sekolah_lanjut') !="")
{
$this->db->query("INSERT INTO lanjut_siswa_sma VALUES ('','".$this->input->post('nis')."', '".
                                        $this->input->post('nama_sekolah_lanjut')."', '".
                                        $this->input->post('program_studi')."', '".
                                        $this->input->post('rt_sekolah_lanjutan')."', '".
                                        $this->input->post('rw_sekolah_lanjutan')."', '".
                                        $this->input->post('jalan_sekolah_lanjutan')."', '".
                                        $this->input->post('desa_sekolah_lanjutan')."', '".
                                        $this->input->post('kec_sekolah_lanjutan')."', '".
                                        $this->input->post('kab_sekolah_lanjutan')."', '".
                                        $this->input->post('prov_sekolah_lanjutan')."', '".
                                        $this->input->post('tgl_sekolah_lanjutan')."', '".
                                        $this->input->post('nama_perusahaan')."', '".
                                        $this->input->post('jabatan')."', '".
                                        $this->input->post('penghasilan')."')");
} else {


}


    //pindah / keluar

if($this->input->post('no_suratpindah') !="")
{
        $this->db->query("INSERT INTO pindah_siswa_sma VALUES ('','".$this->input->post('nis')."', '".
                                                $this->input->post('no_suratpindah')."', '".
                                                $this->input->post('tanggal_pindah')."', '".
                                                $this->input->post('alasan_pindah')."', '".
                                                $this->input->post('sekolah_tujuan')."', '".
                                                $this->input->post('rt_sekolah_tujuan')."', '".
                                                $this->input->post('rw_sekolah_tujuan')."', '".
                                                $this->input->post('jalan_sekolah_tujuan')."', '".
                                                $this->input->post('desa_sekolah_tujuan')."', '".
                                                $this->input->post('kec_sekolah_tujuan')."', '".
                                                $this->input->post('kab_sekolah_tujuan')."', '".
                                                $this->input->post('prov_sekolah_tujuan')."')");
} else {

}


          //Riwayat Pendidikan
        $this->db->query("INSERT INTO pendidikan_siswa_sma VALUES ('','".$this->input->post('nis')."', '".
                                                $this->input->post('sekolah_asal')."', '".
                                                $this->input->post('tgijazah')."', '".
                                                $this->input->post('noijazah')."', '".
                                                $this->input->post('tgskhu')."', '".
                                                $this->input->post('noskhu')."', '".
                                                $this->input->post('noujian')."', '".
                                                $this->input->post('status_sekolah')."')");



               // return $simpansiswa; //hasil dari semua proses ada dimari            
    }

function simpan_dprodi(){
            //masuk ke tabel siswa //Contoh kasus siswa sd
           $this->db->query("INSERT INTO prodi VALUES ('','".$this->input->post('tingkat')."', '".
                                                $this->input->post('jenjang')."', '".
                                                $this->input->post('namaprodi')."', '".
                                                $this->input->post('keterangan')."', '".
                                                $this->input->post('status')."')");
                        }

function simpan_dtkelas(){
            //masuk ke tabel siswa //Contoh kasus siswa sd
           $this->db->query("INSERT INTO tingkatan_kelas VALUES ('','".$this->input->post('jenjang')."', '".
                                                $this->input->post('tingkat')."', '".
                                                $this->input->post('nama_kelas')."', '".
                                                $this->input->post('keterangan')."', '".
                                                $this->input->post('status')."')");
                        }

function simpan_dkelas(){
            //masuk ke tabel siswa //Contoh kasus siswa sd
           $this->db->query("INSERT INTO kelas VALUES ('','".$this->input->post('tingkatkelas')."', '".
                                                $this->input->post('ta')."', '".
                                                $this->input->post('prodi')."', '".
                                                $this->input->post('nama_kelas')."', '".
                                                $this->input->post('kapasitas')."', '".
                                                 $this->input->post('walikelas')."', '".
                                                $this->input->post('keterangan')."')");
                        }


function simpan_dbagikelas(){

       // $jsiswa = $this->m_models->getRows("siswa_sma where nis not in (select nis from rombongan_belajar where id_tahun='3')"); 
        $da['dnis'] = $this->m_models->getAll("siswa_sma where nis not in (select nis from rombongan_belajar where id_tahun='3')"); 

        //for($i = 0; $i <= $jsiswa; $i++)
        foreach($da['dnis'] as $i)
            {
                $in = $i->nis;

                //echo"$in";
         $kl = $this->input->post('kelas'.$in);
         
         $bg = explode("-",$kl);
         $kelas = $bg[1];
         $nis = $bg[0];


            //Membagi value_kelas
           // $query = "INSERT INTO rombongan_belajar VALUES('','$nis','3','$kelas', '-')";
           // mysql_query($query);  
         if ($nis != "")
         {

             $this->db->query("INSERT INTO rombongan_belajar VALUES ('','$nis', '3', '$kelas', '-')");
         } else {

         }
            }
        }

}
?>