<?php $this->load->view('personal/odoj'); ?>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Input Setoran ODOJ</b></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form action="<?php echo base_url('personal/simpan_setoran_odoj'); ?>" method="post" class="form-horizontal">
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-1">Nama Anggota</label>
						<div class="col-xs-5">
							<select class="form-control select2 " style="width: 30%;" name='id_ao' required>
								<option value=''>---Pilih---</option>
								<?php
								foreach($anggota as $a){ 
									echo '<option value="'.$a->id_ao.'">'.$a->nama.'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-1">Juz</label>
						<div class="col-xs-5">
							<select class="form-control select2 " style="width: 30%;" name='juz' required>
								<option value=''>---Pilih---</option>
								<?php
								foreach($juz as $j){ 
									echo '<option value="'.$j->juz.'">Juz '.$j->juz.'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="box-footer">
						<button type="reset" class="btn btn-default">Reset</button>
						<button type="submit" class="btn btn-info pull-left">Simpan</button>
					</div>
				</div>
			</form>
        </div>
    </div><!-- /.box -->
	<!--- Menampilkan data -->
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Data Setoran ODOJ</b></h3>
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
							<th rowspan='2'>No</th>
							<th rowspan='2'>Penyetor</th>
							<th rowspan='2'>Kelompok</th>
							<th rowspan='2'>Penanggung Jawab</th>
							<th colspan='2'>Setoran</th>
							<th colspan='2'>Juz</th>
						</tr>
						<tr>
							<th>Tanggal</th>
							<th>Waktu</th>
						</tr>
						</thead>
						<tbody>
							<?php
							foreach ($setoran as $so) {
								$no++;
								echo "<tr>
										<td>$no</td>
										<td>$penyetor</td>
										<td>$kelompok</td>
										<td>$pj</td>
										<td>$so->tanggal</td>
										<td>$so->jam</td>
										<td>$so->juz</td>
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