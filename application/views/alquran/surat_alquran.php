<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Surat Al-Qur'an</b></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="box">
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-borderred table-hover">
						<tr>
							<th>No Surat</th>
							<th>Nama</th>
							<th>Arti</th>
							<th>Jumlah Ayat</th>
							<th>Jenis</th>
							<th>Urutan Wahyu Ke</th>
						</tr>
							<?php
							foreach ($alquran as $aq){
								$no++;
								echo "<tr>
										<td>$aq->no_surat</td>
										<td><a href='".base_url('alquran/detail_alquran')."/$aq->no_surat'>$aq->nama</a></td>
										<td>$aq->arti</td>
										<td>$aq->jml_ayat</td>
										<td>$aq->jenis</td>
										<td>$aq->urutan_wahyu</td>
									</tr>";
							}
							?>
					</table>
				</div>
			</div>
		</div>
    </div>