<?php $this->load->view('pegawai/mutasi'); ?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Data Mutasi Pegawai</b></h3>
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
							<th>Penempatan Asal</th>
							<th>Jabatan asal</th>
							<th>Penempatan Tujuan</th>
							<th>Jabatan Tujuan</th>
							<th>Tanggal Pengajuan</th>
							<th>Tanggal Pindah</th>
							<th>Alasan</th>
							<th>No. SK</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
							<?php
							foreach ($mutasi as $m){
								$no++;
									echo "<tr>
										<td>$no</td>
										<td>$arr[0]</td>
										<td>$arr[1]</td>
										<td>$arr[2]</td>
										<td>$arr[3]</td>
										<td>$arr[4]</td>
										<td>$arr[5]</td>
										<td>$arr[6]</td>
										<td>$arr[7]</td>
										<td>$arr[8]</td>
										<td>$arr[9]</td>
										<td><a href='".base_url('pegawai/app_pengajuan_mutasi')."/$arr[10]/A' >Approve</a>
										<a href='".base_url('pegawai/app_pengajuan_mutasi')."/$arr[10]/R' >Reject</a></td>
									</tr>";
							}
							?>
						</tbody>
				  </table>
				</div>
			</div>
		</div>
    </div>