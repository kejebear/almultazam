<?php
class t_sekolah extends CI_Model{

 function tampil_sekolah(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('sekolah'); //memeilih tabel
    $this->db->order_by('id_sekolah', 'asc');
 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampilsekolah[] = $data;
            }
        return $tampilsekolah; //hasil dari semua proses ada dimari
        }
}


function tampil_tingkat(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('tingkat_pendidikan'); //memeilih tabel
    $this->db->order_by('nama_tp', 'asc');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampiltingkat[] = $data;
            }
        return $tampiltingkat; //hasil dari semua proses ada dimari
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

function tampil_jenjang(){
    $this->db->select('*'); //memeilih semua field
    $this->db->from('jenjang_pendidikan'); //memilih tabe
    $this->db->order_by('id_jenjang');

 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
               
                $tampiljjg[] = $data;
            }
        return $tampiljjg; //hasil dari semua proses ada dimari
        }
}




//Insert Data ke Tabel
function simpan_dsekolah(){
    //masuk ke tabel siswa //Contoh kasus siswa sd
   $this->db->query("INSERT INTO sekolah VALUES ('','".$this->input->post('nama')."', '".
                                        $this->input->post('nss')."', '".
                                        $this->input->post('npsn')."', '".
                                        $this->input->post('provinsi')."', '".
                                        $this->input->post('kabupaten')."', '".
                                        $this->input->post('kecamatan')."', '".
                                        $this->input->post('desa')."', '".
                                        $this->input->post('jalan')."', '".
                                        $this->input->post('kodepos')."', '".
                                        $this->input->post('telp')."', '".
                                        $this->input->post('fax')."', '".
                                        $this->input->post('daerah')."', '".
                                        $this->input->post('status')."', '".
                                        $this->input->post('akreditasi')."', '".
                                        $this->input->post('tahun_akreditasi')."', '".
                                        $this->input->post('npwprutin')."', '".
                                        $this->input->post('npwpbop')."', '".
                                        $this->input->post('skberdiri')."', '".
                                        $this->input->post('tglsk')."', '".
                                        $this->input->post('penandatangansk')."', '0', '".
                                        $this->input->post('thberdiri')."', '".
                                        $this->input->post('thnpenegrian')."' , '".
                                        $this->input->post('waktu_kbm')."' , '".
                                        $this->input->post('statusgedung')."', '".
                                        $this->input->post('jarakkec')."', '".
                                        $this->input->post('jarakkab')."', '".
                                        $this->input->post('lintasan')."', '".
                                        $this->input->post('lintang')."', '".
                                        $this->input->post('bujur')."', '".
                                        $this->input->post('penyelenggara')."', '".
                                        $this->input->post('logo')."', '".
                                        $this->input->post('jenjang')."')");
}
}
?>