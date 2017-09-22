<?php $this->load->view('pegawai/pelatihan'); ?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Data Pelatihan Pegawai</b></h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="box">
			<div class="box-body no-padding">
				<table class="table table-condensed">
					<thead>
						<tr>
							<th>No</th>
							<th>NRP</th>
							<th>Nama</th>
							<th>Penempatan</th>
							<th>Jabatan</th>
							<th>Tanggal Pengajuan</th>
							<th>Nama Lembaga</th>
							<th>Tempat Lembaga</th>
							<th>Alamat Lembaga</th>
							<th>Tanggal Mulai</th>
							<th>Tanggal Selesai</th>
							<th>Nama Pelatihan</th>
							<th>No Sertifikat</th>
						</tr>
					</thead>
					<tbody>
							<?php
							foreach ($pelatihan as $plthn){
								$no++;
								$data['sekolah'] = $this->m_models->getAll("sekolah where id_sekolah='$plthn->id_sekolah'");
								$sklh=$data[sekolah][0]->nama;
									echo "<tr>
										<td>$no</td>
										<td>$plthn->nrp</td>
										<td>$plthn->nama</td>
										<td>$sklh</td>
										<td>$plthn->nama_jabatan</td>
										<td>$plthn->tgl_pengajuan</td>
										<td>$plthn->nama_lembaga_ps</td>
										<td>$plthn->tmp_lembaga_ps</td>
										<td>$plthn->alamat_lembaga_ps</td>
										<td>$plthn->tgl_mulai_ps</td>
										<td>$plthn->tgl_selesai_ps</td>
										<td>$plthn->nama_pelatihan</td>
										<td>$plthn->no_sertifikat</td>
									</tr>";
							}
							?>
						</tbody>
				  </table>
				</div>
			</div>
		</div>
    </div>