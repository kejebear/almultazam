<?php $this->load->view('pegawai/pelatihan'); ?>
<div class="box box-danger">
    <div class="box-header with-border"><h3 class="box-title">Input Pelatihan Pegawai</h3></div>
	<div class="box-body">
		<form action="<?php echo base_url('pegawai/simpan_pelatihan'); ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-1">Pegawai</label>
				<div class="col-xs-5">
					<select class="form-control select2 " style="width: 30%;" name='nrp' required>
						<option value=''>---Pilih---</option>
						<?php
						foreach($pegawai as $peg){ 
							echo '<option value="'.$peg->nrp.'">'.$peg->nama.'</option>';
						}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Pengajuan</label>
				<div class="col-xs-4"><input type="date" class="form-control" name='tgl_pengajuan' required></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Nama Lembaga</label>
				<div class="col-xs-4"><input type="text" class="form-control" name='nama_lembaga' required></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Tempat Lembaga</label>
				<div class="col-xs-4"><input type="text" class="form-control" name='tmp_lembaga' required></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Alamat</label>
				<div class="col-xs-4"><textarea class="form-control" rows="3" name='alamat' required></textarea></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Tanggal Mulai</label>
				<div class="col-xs-4"><input type="date" class="form-control" name='tgl_mulai' required></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Tanggal Selesai</label>
				<div class="col-xs-4"><input type="date" class="form-control" name='tgl_selesai' required></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Nama Pelatihan</label>
				<div class="col-xs-4"><input type="text" class="form-control" name='nama_pelatihan' required></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">No Sertifikat</label>
				<div class="col-xs-4"><input type="text" class="form-control" name='no_sertifikat' required></div>
			</div>
			<div class="box-footer">
				<button type="reset" class="btn btn-default">Reset</button>   &nbsp; &nbsp; &nbsp; &nbsp;
				<button type="submit" class="btn btn-info pull-left">Simpan</button>
			</div>
		</form>
	</div>
</div>
