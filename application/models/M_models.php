<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_models extends CI_Model {	

    function __construct(){
        parent::__construct();
    }
	
	function getAll($tabel) {
		$q = $this->db->query("SELECT * FROM $tabel");
		return $q->result();
	}
	
	function getAllPaging($tabel, $limit, $jml) {
		//$q = $this->db->query("SELECT * FROM $tabel");
		$q = $this->db->query("SELECT * FROM $tabel $limit, $jml");
		return $q->result();
	}
	
	function getSpesific($tabel, $kondisi) {
		$q = $this->db->query("SELECT * FROM $tabel where $kondisi");
		return $q->result();	
	}

	function getDataByID($tabel, $kunci, $data) {
		$q = $this->db->query("SELECT * FROM $tabel WHERE $kunci='$data'");
		return $q->result();	
	}
	
	function getRows($tabel){
		$q = $this->db->query("SELECT * FROM $tabel");
		return $q->num_rows();
	}
	
	function get_data($select, $table, $where){       
        $query = 'SELECT '.$select.' FROM '.$table.' '.$where;
        return $this->db->query($query);
    }
	
	function getDataJoin($select,$table,$join){
		$q = $this->db->query("SELECT $select FROM $table $join");
		return $q->result();	
	} 
  
	function save_data($data, $table){
        $return = FALSE;
        if ($this->db->insert($table, $data)){
            $return = TRUE;
        }
         
        return $return;
    }
  
	function update_data($id, $field, $data, $table){
        $return = FALSE;
        $this->db->where($field, $id);
        if ($this->db->update($table, $data)){
            $return = TRUE;
        }
         
        return $return;
    }
  
	function delete_data($id, $field, $table){
        $return = FALSE;
        $this->db->where($field, $id);
        if ($this->db->delete($table)){
            $return = TRUE;
        }
         
        return $return;
    }
	
	function getEmployees($select, $table, $tablejoin, $id){
		$this->db->select($select);
		$this->db->from($table);
		//$this->db->join('trn_address', 'trn_address.employee_id = trn_employee.employee_id');
		$this->db->join($tablejoin, $id);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	 function get_absensi() {
        $this->datatables->select('absensi_id, absensi.user_id as nrp, absensi.date as tanggal, absensi.time_in as masuk, absensi.time_out as pulang, pegawai.nama as nama');
        $this->datatables->from('absensi');
        $this->datatables->join('pegawai', 'absensi.user_id = pegawai.nrp');
    //    $this->datatables->add_column('view', '<a href="world/edit/$1">edit</a> | <a href="world/delete/$1">delete</a>', 'absensi_id');
    //	$this->datatables->group_by("absensi.user_id", "desc");
        return $this->datatables->generate();
    }

    function get_pegawai() {
        $this->datatables->select('pegawai.*, jabatan.*, sekolah.nama as nm_sekolah');
        $this->datatables->from('pegawai');
        $this->datatables->join('jabatan', 'jabatan.id_jabatan=pegawai.id_jabatan');
        $this->datatables->join('sekolah', 'sekolah.id_sekolah=pegawai.id_sekolah');

        //$this->datatables->add_column("view", "<a href='".base_url('pegawai/detail_pegawai/$1')."' ><i class='fa fa-search-plus'></i></a> <a href='".base_url('pegawai/edit_pegawai/$1')."' ><i class='fa fa-edit'></a>", 'nrp');
    //	$this->datatables->group_by("absensi.user_id", "desc");
        return $this->datatables->generate();
    }

	function getJoin1($select, $tabel, $tabeljoin, $idjoin, $fieldorder, $jenis_orderby) {
        $this->db->select($select);
        $this->db->from($tabel);
        $this->db->join($tabeljoin, $idjoin);
    	$this->db->order_by($fieldorder, $jenis_orderby);
        $query = $this->db->get();
		return $query->result();
    }
	
	function getJoin2($select, $tabel, $tabeljoin1, $idjoin1,$tabeljoin2, $idjoin2, $fieldorder, $jenis_orderby) {
        $this->db->select($select);
        $this->db->from($tabel);
        $this->db->join($tabeljoin1, $idjoin1);
        $this->db->join($tabeljoin2, $idjoin2);
    	$this->db->order_by($fieldorder, $jenis_orderby);
        $query = $this->db->get();
		return $query->result();
    }
	
	function getJoin2whereIn($select, $tabel, $tabeljoin1, $idjoin1,$tabeljoin2, $idjoin2, $fieldwhere, $idwhere, $fieldorder, $jenis_orderby) {
        $this->db->select($select);
        $this->db->from($tabel);
        $this->db->join($tabeljoin1, $idjoin1);
        $this->db->join($tabeljoin2, $idjoin2);
        $this->db->where_in($fieldwhere, $idwhere);
    	$this->db->order_by($fieldorder, $jenis_orderby);
        $query = $this->db->get();
		return $query->result();
    }
	
	function getJoin2where($select, $tabel, $tabeljoin1, $idjoin1,$tabeljoin2, $idjoin2, $fieldwhere, $idwhere, $fieldorder, $jenis_orderby) {
        $this->db->select($select);
        $this->db->from($tabel);
        $this->db->join($tabeljoin1, $idjoin1);
        $this->db->join($tabeljoin2, $idjoin2);
        $this->db->where($fieldwhere, $idwhere);
    	$this->db->order_by($fieldorder, $jenis_orderby);
        $query = $this->db->get();
		return $query->result();
    }
}
?>
