<div class="box box-danger">
	<div class="box-header with-border">
       <h4><center><b>Inputan Anggota Kartu Keluarga</b></center></h4>
    </div>
<?php
$jml_anggota = $_GET['jml_anggota']; 
for ($m=1; $m<=$jml_anggota; $m++){
?>
<hr class="box box-danger"></hr>
    <div class="box-body">
		<div class="form-group">
			<label class="col-sm-1">NIK <?php echo $m; ?></label>
			<div class="col-xs-4"><input type="text" class="form-control" name='no_penduduk_kk<?php echo $m; ?>'></div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Nama  <?php echo $m; ?></label>
			<div class="col-xs-4"><input type="text" class="form-control" name='nama_kk<?php echo $m; ?>' maxlength='30' ></div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">TTL  <?php echo $m; ?></label>
			<div class="col-xs-4"><input type="text" class="form-control" name='tmp_lahir_kk<?php echo $m; ?>' maxlength='30' placeholder='Tempat' ></div>
			<div class="col-xs-4"><input type="date" class="form-control" name='tgl_lahir_kk<?php echo $m; ?>' placeholder='Tanggal Lahir' ></div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Jenis Kelamin  <?php echo $m; ?></label>
			<div class="col-xs-4">
				<select class="form-control select2 " style="width: 40%;" name='jk_kk<?php echo $m; ?>' >
					<option value=''>---Pilih---</option>
					<option value='Laki-laki'>Laki-laki</option>
					<option value='Perempuan'>Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Agama <?php echo $m; ?></label>
			<div class="col-xs-4">
				<select class="form-control select2 " style="width: 30%;" name='agama_kk<?php echo $m; ?>' >
					<option value=''>---Pilih---</option>
					<option value='Islam'>Islam</option>
					<option value='Kristen Protestan'>Kristen Protestan</option>
					<option value='Kristen Katolik'>Kristen Katolik</option>
					<option value='Hindu'>Hindu</option>
					<option value='Budha'>Budha</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Pendidikan <?php echo $m; ?></label>
			<div class="col-xs-5">
				<select class="form-control select2 " style="width: 30%;" name='pend_kk<?php echo $m; ?>' >
					<option value=''>---Pilih---</option>
					<?php
					foreach($tingkat_pend as $t_pend){ 
						echo '<option value="'.$t_pend->id_tp.'">'.$t_pend->nama_tp.'</option>';
					}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Pekerjaan <?php echo $m; ?></label>
			<div class="col-xs-5">
				<select class="form-control select2 " style="width: 30%;" name='pekerjaan_kk<?php echo $m; ?>' >
					<option value=''>---Pilih---</option>
					<?php
					foreach($profesi as $pekerjaan){ 
						echo '<option value="'.$pekerjaan->id_profesi.'">'.$pekerjaan->nama_profesi.'</option>';
					}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Status Pernikahan <?php echo $m; ?></label>
			<div class="col-xs-4">
				<select class="form-control select2 " style="width: 30%;" name='status_marital_kk<?php echo $m; ?>' >
					<option value=''>---Pilih---</option>
					<option value='Menikah'>Menikah</option>
					<option value='Belum Menikah'>Belum Menikah</option>
					<option value='Belum Menikah'>Cerai Hidup</option>
					<option value='Belum Menikah'>Cerai Mati</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Status Hubungan Keluarga <?php echo $m; ?></label>
			<div class="col-xs-4">
				<select class="form-control select2 " style="width: 30%;" name='hub_kk<?php echo $m; ?>' >
					<option value=''>---Pilih---</option>
					<option value='Kepala Keluarga'>Kepala Keluarga</option>
					<option value='Suami'>Suami</option>
					<option value='Istri'>Istri</option>
					<option value='Anak'>Anak</option>
					<option value='Menantu'>Menantu</option>
					<option value='Cucu'>Cucu</option>
					<option value='Orang Tua'>Orang Tua</option>
					<option value='Mertua'>Mertua</option>
					<option value='Family Lain'>Family Lain</option>
					<option value='Pembantu'>Pembantu</option>
					<option value='Lainnya'>Lainnya</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Warga Negara <?php echo $m; ?></label>
			<div class="col-xs-4"><input type="text" class="form-control" name='warganegara_kk<?php echo $m; ?>' maxlength='30' ></div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Nomor Paspor <?php echo $m; ?></label>
			<div class="col-xs-4"><input type="text" class="form-control" name='paspor_kk<?php echo $m; ?>' maxlength='30' ></div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Nomor KITAS/KITAP <?php echo $m; ?></label>
			<div class="col-xs-4"><input type="text" class="form-control" name='kitas_kk<?php echo $m; ?>' maxlength='30' ></div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Nama Ayah <?php echo $m; ?></label>
			<div class="col-xs-4"><input type="text" class="form-control" name='ayah_kk<?php echo $m; ?>' maxlength='30' ></div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Nama Ibu <?php echo $m; ?></label>
			<div class="col-xs-4"><input type="text" class="form-control" name='ibu_kk<?php echo $m; ?>' maxlength='30' ></div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Status Keadaan  <?php echo $m; ?></label>
			<div class="col-xs-4">
				<select class="form-control select2 " style="width: 40%;" name='keadaan_kk<?php echo $m; ?>' >
					<option value='Hidup'>Hidup</option>
					<option value='Meninggal'>Meninggal</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-1">Status Anggota KK <?php echo $m; ?></label>
			<div class="col-xs-4">
				<select class="form-control select2 " style="width: 40%;" name='anggota_kk<?php echo $m; ?>' >
					<option value='Anggota'>Anggota</option>
					<option value='Pindah'>Pindah</option>
				</select>
			</div>
		</div>
	</div>
</div>
<?php } ?>
