<script type="text/javascript">
	var bb="<?php echo base_URL()?>pegawai/";
	function cek_jenis_mutasi(id, tampil) {
		var id;
		var tampil; 

		var key = $("#" + id).val();
		var val = $("#" + id).attr("val");
		var ajx = $.ajax
				({
					url: bb + "form_mutasi", 
					data: "jenis_mutasi=" + key + "&id=" + id,
					cache: false,
					beforeSend: function (msg) {
						$("#" + tampil).html("<i class='fa fa-cog fa-spin'></i><small><br>memuat data...</small>");
					},
					success: function (msg) {
						$("#" + tampil).html(msg);
					}
				});
	}
</script>

<?php $this->load->view('pegawai/mutasi'); ?>
<div class="box box-danger">
    <div class="box-header with-border"><h3 class="box-title">Input Mutasi Pegawai</h3></div>
	<div class="box-body">
		<form action="<?php echo base_url('pegawai/simpan_mutasi'); ?>" method="post" class="form-horizontal">
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
				<label class="col-sm-1">Jenis Mutasi</label>
				<div class="col-xs-5">
					<select class="form-control select2 " style="width: 40%;" name='jenis_mutasi' id='jenis_mutasi' onchange="cek_jenis_mutasi('jenis_mutasi','loadData1');">
						<option value=''>---Pilih---</option>
						<option value="mutasi tempat" > Mutasi Tempat </option>
						<option value="mutasi jabatan"> Mutasi Jabatan </option>
						<option value="mutasi tempat jabatan"> Mutasi Tempat & Jabatan </option>
					</select>
				</div>
			</div>
			<div id="loadData1"></div>
			<div class="form-group">
				<label class="col-sm-1">Tanggal Pengajuan</label>
				<div class="col-xs-4"><input type="date" class="form-control" name='tgl_pengajuan' required></div>
			</div>
			<div class="form-group">
				<label class="col-sm-1">Alasan</label>
				<div class="col-xs-4"><textarea class="form-control" rows="3" name='alasan' required></textarea></div>
			</div>
			<div class="box-footer">
				<button type="reset" class="btn btn-default">Reset</button>   &nbsp; &nbsp; &nbsp; &nbsp;
				<button type="submit" class="btn btn-info pull-left">Simpan</button>
			</div>
		</form>
	</div>
</div>
