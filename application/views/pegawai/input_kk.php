<script type="text/javascript">
	var bb="<?php echo base_URL()?>pegawai/";
	function cekanggotakk(id, tampil) {
		var id;
		var tampil; 

		var key = $("#" + id).val();
		var val = $("#" + id).attr("val");
		var ajx = $.ajax
				({
					url: bb + "form_anggota_kk", 
					data: "jml_anggota=" + key + "&id=" + id,
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

<div class="box-body">
	<div class="form-group">
		<label class="col-sm-1">No Kartu Keluarga</label>
		<div class="col-xs-4"><input type="text" class="form-control" name='no_kk'></div>
	</div>
	<div class="form-group">
		<label class="col-sm-1">Alamat</label>
		<div class="col-xs-4">
			<input type="text" class="form-control" name='blok_kk' placeholder='Blok'>
			<input type="text" class="form-control" name='rt_kk'  placeholder='RT' maxlength='3'>
			<input type="text" class="form-control" name='rw_kk'  placeholder='RW' maxlength='3'>
			<input type="text" class="form-control" name='desa_kk' placeholder='Kelurahan/Desa'>
			<input type="text" class="form-control" name='kec_kk'  placeholder='Kecamatan'>
			<input type="text" class="form-control" name='kab_kk'  placeholder='Kabupaten/Kota'>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-1">Kode Pos</label>
		<div class="col-xs-4"><input type="text" class="form-control" name='kode_pos_kk'></div>
	</div>
	<div class="form-group">
		<label class="col-sm-1">Provinsi</label>
		<div class="col-xs-4"><input type="text" class="form-control" name='provinsi_kk'></div>
	</div>
	<div class="form-group">
		<label class="col-sm-1">Jumlah Anggota</label>
		<div class="col-xs-4">
			<select class="form-control select2 " style="width: 40%;" name='jml_anggota' id='jml_anggota' onchange="cekanggotakk('jml_anggota','loadData1');">
				<option value=''>---Pilih---</option>
				<?php 
				for ($l=1; $l<=15; $l++){
					echo "<option value='$l'>$l</option>";
				}
				?>
			</select>
		</div>*)Termasuk Kepala Keluarga dan Istri/Suami
	</div>
	<div id="loadData1"></div>
</div>		