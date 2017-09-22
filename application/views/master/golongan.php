<?php 
error_reporting(0);
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Input Golongan Pangkat</b></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form action="<?php echo base_url('admin/golongan'); ?>" method="post" class="form-horizontal">
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-1 control-label">Pangkat</label>
						<div class="col-xs-3"><input type="text" class="form-control" name='pangkat' maxlength='40' required></div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label">Golongan Ruang</label>
						<div class="col-xs-3"><input type="text" class="form-control" name='gol' maxlength='20' required></div>
					</div>
					<div class="form-group">
						<label class="col-sm-1 control-label">Keterangan</label>
						<div class="col-xs-3"><textarea class="form-control" rows="3" name='keterangan' required></textarea></div>
					</div>
					<div class="box-footer">
						<button type="reset" class="btn btn-default">Reset</button>   &nbsp; &nbsp; &nbsp; &nbsp;
						<button type="submit" class="btn btn-info pull-left">Simpan</button>
					</div>
				</div>
			</form>
        </div>
    </div><!-- /.box -->
	<!--- Menampilkan data jenjang pendidikan -->
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Data Golongan Pangkat</b></h3>
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
							<th>Pangkat</th>
							<th>Golongan</th>
							<th>Keterangan</th>
						</tr>
						</thead>
						<tbody>
							<?php
							foreach ($golongan as $gol) {
								$no++;
								echo "<tr>
										<td>$no</td>
										<td>$gol->pangkat</td>
										<td>$gol->golongan</td>
										<td>$gol->keterangan</td>
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

<?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>