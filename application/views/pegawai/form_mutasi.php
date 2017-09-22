<?php
$jenis_mutasi = $_GET['jenis_mutasi']; 
if ($jenis_mutasi=="mutasi tempat"){
	echo "<div class='form-group'>
		<label class='col-sm-1'>Penempatan</label>
		<div class='col-xs-4'>
			<select class='form-control select2 ' style='width: 50%;' name='tmp_mutasi' >
				<option value=''>---Pilih---</option>";
				foreach($penempatan as $tmp){ 
					echo '<option value="'.$tmp->id_sekolah.'">'.$tmp->nama.'</option>';
				}
				echo "</select>
		</div>
	</div>";
} else if ($jenis_mutasi=="mutasi jabatan"){
	echo "<div class='form-group'>
		<label class='col-sm-1'>Jabatan</label>
		<div class='col-xs-4'>
			<select class='form-control select2 ' style='width: 50%;' name='jab_mutasi' >
				<option value=''>---Pilih---</option>";
				foreach($jabatan as $jab){ 
					echo '<option value="'.$jab->id_jabatan.'">'.$jab->nama_jabatan.'</option>';
				}
			echo "</select>
		</div>
	</div>";
} else if ($jenis_mutasi=="mutasi tempat jabatan"){
	echo "<div class='form-group'>
		<label class='col-sm-1'>Penempatan</label>
		<div class='col-xs-4'>
			<select class='form-control select2 ' style='width: 50%;' name='tmp_mutasi' >
				<option value=''>---Pilih---</option>";
				foreach($penempatan as $tmp){ 
					echo '<option value="'.$tmp->id_sekolah.'">'.$tmp->nama.'</option>';
				}
				echo "</select>
		</div>
	</div>";
	echo "<div class='form-group'>
		<label class='col-sm-1'>Jabatan</label>
		<div class='col-xs-4'>
			<select class='form-control select2 ' style='width: 50%;' name='jab_mutasi' >
				<option value=''>---Pilih---</option>";
				foreach($jabatan as $jab){ 
					echo '<option value="'.$jab->id_jabatan.'">'.$jab->nama_jabatan.'</option>';
				}
			echo "</select>
		</div>
	</div>";
}
?>