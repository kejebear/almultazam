<div class="box">
        <div class="box-header with-border">
            <h2 class="box-title"><b>Ayat Al-Qur'an</b></h2>
			<h5><?php foreach ($surat as $srt){ echo "<b>$srt->nama - $srt->arti</b><br>( Surat Ke - $srt->no_surat , Jumlah Ayat : $srt->jml_ayat ayat, $srt->jenis, Urutan Wahyu Ke - $srt->urutan_wahyu)"; } ?></h5>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="box">
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding" align='right'>
						<?php
						foreach ($ayat as $ayt){
							if (($ayt->ayat=="1") and ($ayt->no_surat !="1")){
								$e=explode("بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ",$ayt->ayat);
								$a=str_replace("بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ","<br>",$ayt->image_ayat);
								$ay = "<center> بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ </center> <br>$a";
							} else if ($ayt->no_surat=="9") {
								$e=explode("بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ",$ayt->ayat);
								$a=str_replace("بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ","<br>",$ayt->image_ayat);
								$ay = "<center>$a";
							} else {
								$ay=$ayt->image_ayat;
							}
							//echo"<td><h1 align=right>$ay&nbsp;&nbsp;&nbsp;".AngkaArab($ayt->ayat)."</h1>";
							
							echo "<h1>$ay&nbsp;&nbsp;&nbsp;".Alquran::AngkaArab($ayt->ayat)."<br></h1>
								</h1><br><br><font size='2'><center>$ayt->terjemahan ($ayt->ayat)</center></font>";
						}
						?>
				</div>
			</div>
		</div>
	<i class="bg-red color-palette"> <b>*) Sumber : http://www.qurandatabase.org </b>
</div>