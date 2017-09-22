<?php $this->load->view('pegawai/resign'); ?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Pengajuan Resign Pegawai</b></h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="box">
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>NRP</th>
							<th>Nama</th>
							<th>Penempatan</th>
							<th>Jabatan</th>
							<th>Tanggal Pengajuan</th>
							<th>Tanggal Keluar</th>
							<th>Alasan</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
							<?php
							foreach ($resign as $r){
								$no++;
								$data['sekolah'] = $this->m_models->getAll("sekolah where id_sekolah='$r->id_sekolah'");
								$sklh=$data[sekolah][0]->nama;
									echo "<tr>
										<td>$no</td>
										<td>$r->nrp</td>
										<td>$r->nama</td>
										<td>$sklh</td>
										<td>$r->nama_jabatan</td>
										<td>$r->tgl_pengajuan</td>
										<td>$r->tgl_keluar</td>
										<td>$r->alasan</td>
										<td><a href='".base_url('pegawai/app_pengajuan_resign')."/$r->id_resign/A' >Approve</a>
										<a href='".base_url('pegawai/app_pengajuan_resign')."/$r->id_resign/R' >Reject</a></td>
									</tr>";
							}
							?>
						</tbody>
				  </table>
				</div>
			</div>
		</div>
    </div>