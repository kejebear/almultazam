<?php $this->load->view('personal/odoj'); ?>
	<div class="box">
        <div class="box-header with-border">
            <h2 class="box-title"><b>Anggota Kelompok ODOJ</b></h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="box">
				<!-- /.box-header -->
					<div class="form-group">
						<label class="col-sm-6">Kelompok : <?php echo $arr[0]; ?>, PJ : 
						<?php echo $arr[1]; ?></label>
					</div>
				<table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>NRP</th>
							<th>Anggota</th>
							<th>Penempatan</th>
							<th>Jabatan</th>
						</tr>
						</thead>
						<tbody>
							<?php
							foreach ($anggota as $ar) {
								$no++;
								$id_jab=$ar->id_jabatan;
								$id_sklh=$ar->id_sekolah;
								$data['jabatan'] = $this->m_models->getAll("jabatan where id_jabatan='$id_jab'");
								$data['sekolah'] = $this->m_models->getAll("sekolah where id_sekolah='$id_sklh'");
								$sklh=$data[sekolah][0]->nama;
								$jab=$data[jabatan][0]->nama_jabatan;
								echo "<tr>
										<td>$no</td>
										<td>$ar->nrp</td>
										<td>$ar->nama</td>
										<td>$sklh</td>
										<td>$jab</td>";
									echo "</tr>";
							}
							?>
						</tbody>
				  </table>
			</div>
		</div>
	 </div>