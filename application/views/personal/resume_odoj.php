<?php $this->load->view('personal/odoj'); ?>
<!-- Main content -->
<section class="content">
	<!--- Menampilkan data-->
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Resume Kelompok ODOJ <?php 
								$hariini=date("Y-m-d"); echo $hariini; ?></b></h3>
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
							<th>Jumlah Anggota</th>
							<th><i class='fa fa-spinner'></i></th>
							<th><i class='fa fa-book'></i></th>
						</tr>
						</thead>
						<tbody>
							<?php
							foreach ($kelompok as $klmpk) {
								$no++;
								$jao = $this->m_models->getRows("anggota_odoj where kelompok='$klmpk->id_kel_odoj'"); 
								$baca = $this->m_models->getRows("anggota_odoj where kelompok='$klmpk->id_kel_odoj' and id_ao in (select id_ao from setoran_odoj where tanggal='$hariini')"); 
								$proses = $this->m_models->getRows("anggota_odoj where kelompok='$klmpk->id_kel_odoj' and id_ao not in (select id_ao from setoran_odoj where tanggal='$hariini')"); 
								echo "<tr>
										<td>$no</td>
										<td>$klmpk->nama_kel_odoj</td>
										<td>$klmpk->nama</td>
										<td>$jao</td>
										<td><a href='".base_url('personal/detail_resume_odoj')."/$klmpk->id_kel_odoj/B' >$baca</a></td>
										<td><a href='".base_url('personal/detail_resume_odoj')."/$klmpk->id_kel_odoj/P' >$proses</a></td>
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