<?php $this->load->view('personal/odoj'); ?>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Input Anggota ODOJ</b></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form action="<?php echo base_url('personal/simpan_anggota_odoj'); ?>" method="post" class="form-horizontal">
				<div class="box-body">
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
						<label class="col-sm-1 control-label">Kelompok</label>
						<div class="col-xs-5">
							<select class="form-control select2 " style="width: 30%;" name='kelompok' required>
								<option value=''>---Pilih---</option>
								<?php
								foreach($kelompok as $klmpk){ 
									echo '<option value="'.$klmpk->id_kel_odoj.'">'.$klmpk->nama_kel_odoj.'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="box-footer">
						<button type="reset" class="btn btn-default">Reset</button>   &nbsp; &nbsp; &nbsp; &nbsp;
						<button type="submit" class="btn btn-info pull-left">Simpan</button>
					</div>
				</div>
			</form>
        </div>
    </div><!-- /.box -->
	<!--- Menampilkan data -->
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Data Anggota ODOJ</b></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Kelompok</th>
							<th>Penanggung Jawab</th>
							<th>Tanggal On</th>
						</tr>
						</thead>
						<tbody>
							<?php
							foreach ($anggota as $a) {
								$no++;
								echo "<tr>
										<td>$no</td>
										<td>$a->nama</td>
										<td>$a->nama_kel_odoj</td>
										<td>$pj</td>
										<td>$a->tgl_on</td>
									</tr>";
							}
							?>
						</tbody>
				  </table>
				</div>
			</div>
		</div>
    </div><!-- /.box -->
</section><!-- /.content -->