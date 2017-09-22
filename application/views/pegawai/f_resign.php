<?php $this->load->view('pegawai/resign'); ?>
<div class="box box-danger">
    <div class="box-header with-border"><h3 class="box-title">Input Resign Pegawai</h3></div>
	<div class="box-body">
		<form action="<?php echo base_url('pegawai/simpan_resign'); ?>" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-1">Pegawai</label>
				<div class="col-xs-5">
					<select class="form-control select2 " style="width: 30%;" name='nrp' >
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
				<div class="col-xs-4"><input type="date" class="form-control" name='tgl_pengajuan' ></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Alasan</label>
				<div class="col-xs-4"><textarea class="form-control" rows="3" name='alasan' required></textarea></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Tanggal Keluar</label>
				<div class="col-xs-4"><input type="date" class="form-control" name='tgl_keluar' ></div>
			</div>
			<div class="box-footer">
				<button type="reset" class="btn btn-default">Reset</button>   &nbsp; &nbsp; &nbsp; &nbsp;
				<button type="submit" class="btn btn-info pull-left">Simpan</button>
			</div>
		</form>
	</div>
</div>
