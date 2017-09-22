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
							<th>Juz Ke</th>
							<th>Nama Surat</th>
							<th>Total Ayat</th>
							<th>Detail</th>
						</tr>
							<?php
							foreach ($surat as $srt){
								$jz=$srt->juz;
								$data['surah'] = $this->m_models->getAll("ayat_alquran join surat_alquran on ayat_alquran.no_surat = surat_alquran.no_surat where juz='$jz' group by ayat_alquran.no_surat order by juz asc");
								$no_surah=$data[surah][0]->no_surat;
								$jayat = $this->m_models->getRows("ayat_alquran where juz='$jz'");
								echo "<tr>
										<td>$jz</td>
										<td>";
								$no=0;
								foreach ($data['surah'] as $srh){ 
									$no++;
									$data['ayt_awal'] = $this->m_models->getAll("ayat_alquran where no_surat='$srh->no_surat' and juz='$jz' order by ayat asc limit 1");
									$data['ayt_akhir'] = $this->m_models->getAll("ayat_alquran where no_surat='$srh->no_surat' and juz='$jz' order by ayat desc limit 1");
									echo"<b>$no ".$srh->nama." (".$srh->no_surat." :  ".$data[ayt_awal][0]->ayat." -  ".$data[ayt_akhir][0]->ayat.") </b><br>";
								}
								echo"</td>
										<td>$jayat</td>
										<td><a href='".base_url('alquran/detail_mushaf')."/$jz'><i class='fa fa-book'></i></a></td>
								</tr>";
								
							}
							?>
					</table>
				</div>
			</div>
		</div>
    </div>