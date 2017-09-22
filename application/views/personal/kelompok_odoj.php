<?php $this->load->view('personal/odoj'); ?>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Input Kelompok ODOJ</b></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form action="<?php echo base_url('personal/simpan_kelompok_odoj'); ?>" method="post" class="form-horizontal">
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-1">Nama Kelompok</label>
						<div class="col-xs-3"><input type="text" class="form-control" name='nama' maxlength='20' required></div>
					</div>
					<div class="form-group">
						<label class="col-sm-1">Penanggung Jawab</label>
						<div class="col-xs-5">
							<select class="form-control select2 " style="width: 30%;" name='pj' required>
								<option value=''>---Pilih---</option>
								<?php
								foreach($pegawai as $peg){ 
									echo '<option value="'.$peg->nrp.'">'.$peg->nama.'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<?php for ($i=1; $i<=30; $i++){ ?>
						<div class="form-group">
						<label class="col-sm-1">Anggota <?php echo $i; ?></label>
						<div class="col-xs-5">
							<select class="form-control select2 " style="width: 30%;" name='nrp<?php echo $i; ?>'>
								<option value=''>---Pilih---</option>
								<?php
								foreach($pegawai as $peg){ 
									echo '<option value="'.$peg->nrp.'">'.$peg->nama.'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<?php } ?>
					<div class="box-footer">
						<button type="reset" class="btn btn-default">Reset</button>
						<button type="submit" class="btn btn-info pull-left">Simpan</button>
					</div>
				</div>
			</form>
        </div>
    </div><!-- /.box -->
	<!--- Menampilkan data-->
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Data Kelompok ODOJ</b></h3>
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
							<th>Nama Kelompok</th>
							<th>Penanggung Jawab</th>
							<th>Detail</th>
						</tr>
						</thead>
						<tbody>
							<?php
							foreach ($kelompok as $klmpk) {
								$no++;
								echo "<tr>
										<td>$no</td>
										<td>$klmpk->nama_kel_odoj</td>
										<td>$klmpk->nama</td>
										<td><a href='".base_url('personal/detail_kelompok_odoj')."/$klmpk->id_kel_odoj' ><i class='fa fa-search-plus'></a></td>
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