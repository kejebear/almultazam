
<?php

error_reporting(0);

?>

        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Data Induk Siswa</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
             <form role="form" action="<?php echo base_url('siswa/updatesiswa'); ?>" method="post">
            <div class="box-body">
              <!--- Batas Atas Tab-->

                <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#dsiswa" data-toggle="tab">Data Siswa</a></li>
                  <li><a href="#dalamat" data-toggle="tab">Alamat Asal</a></li>
                   <li><a href="#dalamattgl" data-toggle="tab">Alamat Tinggal</a></li>
                   <li><a href="#dkesehatan" data-toggle="tab">Kesehatan</a></li>
                    <li><a href="#dpend" data-toggle="tab">Riwayat Pendidikan</a></li>
                     <li><a href="#dayah" data-toggle="tab">Ayah</a></li>
                       <li><a href="#dibu" data-toggle="tab">Ibu</a></li>
                         <li><a href="#dwali" data-toggle="tab">Wali</a></li>
                         <li><a href="#dhobi" data-toggle="tab">Hobi</a></li>
                          <li><a href="#dkembang" data-toggle="tab">Perkembangan</a></li>
                          <li><a href="#dlanjut" data-toggle="tab">Melanjutkan</a></li>
                          <li><a href="#dpindah" data-toggle="tab">Pindah/Keluar</a></li>
                          <li><a href="#kitas" data-toggle="tab">KITAS</a></li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Form Data Siswa -->
                  <div class="chart tab-pane active" id="dsiswa" style="position: relative;">
                    
                  <?php
                    foreach ($qsiswa as $dtl){



                  ?>



                    <table border=0>
                      <tr>
                          <td><label>NIS</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->nis; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>NISN</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->nisn; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Nama Lengkap</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->nama_lengkap; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Nama Panggilan</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->nama_panggilan; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Jenis Kelamin</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->jk; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tempat Lahir</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->tempat_lahir; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tanggal lahir</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->tanggal_lahir; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Status Hubungan Keluarga</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->status_anak; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Anak Ke</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->anak_ke; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Saudara Kandung</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->sdr_kandung; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Saudara Tiri</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->sdr_tiri; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Saudara Angkat</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->sdr_angkat; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Email</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->email; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Bahasa Sehari - hari</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->bahasa; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Agama</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->agama; ?></label></td>
                      </tr>
                        <tr>
                          <td><label>Kewarganegaraan</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->warga_negara; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Status Aktif</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->status_aktif; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Tanggal Ajaran Masuk</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->id_tahun; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Mulai Belajar Disini </label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td><label><?php echo $dtl->tgl_masuk; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kelengkapan Data</label></td>
                          <td>:</td>
                           <td>&nbsp;</td>
                          <td>
                          <label> <div class="form-group">
               
                     <div class="checkbox">
                                <label>

                                <?php
                                   if ($dtl->arsip_nisn=="Y")
                                   {
                                     $a = "checked";
                                   } else {
                                    $a="";
                                   }

                                   if ($dtl->arsip_akte=="Y")
                                   {
                                     $b = "checked";
                                   } else{
                                    $b="";
                                   }


                                   if ($dtl->arsip_kk=="Y")
                                   {
                                     $c = "checked";
                                   } else
                                   {
                                     $c="";
                                   }

                                   if ($dtl->arsip_ijazah=="Y")
                                   {
                                     $d = "checked";
                                   } else {
                                      $d="";
                                   }

                                   if ($dtl->arsip_skhun=="Y")
                                   {
                                      $e = "checked";
                                   } else {
                                       $e = "";
                                   }
                                ?>

                                  <input type="checkbox" name="arsip_nisn" value="Y" <?php echo"$a"; ?>> NISN
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="arsip_akte" value="Y" <?php echo"$b"; ?>> Akta Kelahiran
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="arsip_kk" value="Y" <?php echo"$c"; ?>> Kartu Keluarga
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="arsip_ijazah" value="Y" <?php echo"$d"; ?>> Ijazah
                                </label>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" name="arsip_skhun" value="Y" <?php echo"$e"; ?>> SKHUN
                                </label>
                              </div></label>
                    </td>
                      </tr>
                  </table>

               

                
            </div>
            <!---Tab Kedua Berisi Form Alamat-->
                  <div class="chart tab-pane" id="dalamat" style="position: relative;">
                   <table border=0>
                      <tr>
                          <td><label>RT</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->rt_asal; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>RW</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->rw_asal; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Jalan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->jalan_asal; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Desa/Kelurahan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->desa_asal; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kecamatan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->kec_asal; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kecamatan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->kec_asal; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kabupaten</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->kab_asal; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Provinsi</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->provinsi_asal; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Provinsi</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->provinsi_asal; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Jarak Ke Sekolah (KM)</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->jarak_asal; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Transport Asal</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->transport_asal; ?></label></td>
                      </tr>
                    </table>  
                  </div>



<!---Tab Ketiga Berisi Form Tinggal-->
                  <div class="chart tab-pane" id="dalamattgl" style="position: relative;">

                    <table border=0>
                      <tr>
                          <td><label>RT</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->rt_asal; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>RW</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->rw; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Jalan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->jalan; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Desa/Kelurahan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->desa; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kecamatan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->kec; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kecamatan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->kec; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kabupaten</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->kab; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Jarak Ke Sekolah (KM)</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->jarak; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Transport Asal</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dtl->transport; ?></label></td>
                      </tr>
                    </table>  
                 
                  </div>


                  <?php
                }
                ?>

                 <?php
                    foreach ($qsehat as $dsht){
                  ?>
 <!---Tab Keempat Berisi Form Riwayat Kesehatan-->
                  <div class="chart tab-pane" id="dkesehatan" style="position: relative;">

                    <table border=0>
                      <tr>
                          <td><label>Golongan Darah</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dsht->golongan_darah; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Penyakit</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dsht->penyakit; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kelainan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dsht->kelainan; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tinggi Badan (Kg)</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dsht->tinggi_badan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Berat Badan (Cm)</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dsht->berat_badan; ?></label></td>
                      </tr>
                    </table> 
                  </div>

               <?php
               }
                 ?>

                <!---Tab Keempat Berisi Form Riwayat Pendidikan-->
                  <div class="chart tab-pane" id="dpend" style="position: relative;">

                    <?php
                    foreach ($qdidik as $ddk){
                  ?>
                    <table border=0>
                      <tr>
                          <td><label>Sekolah Asal</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ddk->sekolah_asal; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Tanggal ijazah</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ddk->tanggal_ijazah; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>No.Ijazah</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ddk->no_ijazah; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tanggal SKHU</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ddk->tanggal_skhu; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>No SKHU</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ddk->no_skhu; ?></label></td>
                      </tr>
                        <tr>
                          <td><label>No Ujian</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ddk->no_ujian; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Status Sekolah</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ddk->status_sekolah; ?></label></td>
                      </tr>
                    </table> 
                  </div>

               <?php
               }
                 ?>


                  

               <!---Tab Keempat Berisi Form Riwayat Pendidikan-->
              <div class="chart tab-pane" id="dayah" style="position: relative;">

                    <?php
                    foreach ($qayah as $ayh){
                  ?>
                    <table border=0>
                      <tr>
                          <td><label>Nama Ayah</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->nama; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tempat Lahir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->tmp_lahir; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tanggal lahir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->tgl_lahir; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>RT</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->rt; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>RW</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->rw; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Jalan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->jalan; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Desa</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->desa; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kecamatan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->kecamatan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kabupaten</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->kabupaten; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Provinsi</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->provinsi; ?></label></td>
                      </tr>
                        <tr>
                          <td><label>No. Telepon</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->no_telepon; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Email</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->email; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Agama</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->agama; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kewarganegaraan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->kewarganegaraan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Pendidikan Terakhir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->nama_tingkat; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Pendidikan Terakhir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->nama_tingkat; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Nama Institusi / Sekolah </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->nama_institusi; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Profesi </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->id_profesi; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Status </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $ayh->status; ?></label></td>
                      </tr>
                       
                    </table> 
                  </div>

               <?php
               }
                 ?>




 <!---Tab Keempat Berisi Form Riwayat Ibu-->
              <div class="chart tab-pane" id="dibu" style="position: relative;">

                    <?php
                    foreach ($qibu as $dibu){
                  ?>
                    <table border=0>
                      <tr>
                          <td><label>Nama Ibu</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->nama; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tempat Lahir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->tmp_lahir; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tanggal lahir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->tgl_lahir; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>RT</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->rt; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>RW</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->rw; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Jalan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->jalan; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Desa</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->desa; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kecamatan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->kecamatan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kabupaten</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->kabupaten; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Provinsi</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->provinsi; ?></label></td>
                      </tr>
                        <tr>
                          <td><label>No. Telepon</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->no_telepon; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Email</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->email; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Agama</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->agama; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kewarganegaraan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->kewarganegaraan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Pendidikan Terakhir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->nama_tingkat; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Pendidikan Terakhir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->nama_tingkat; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Nama Institusi / Sekolah </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->nama_institusi; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Profesi </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->id_profesi; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Status </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $dibu->status; ?></label></td>
                      </tr>
                       
                    </table> 
                  </div>

               <?php
               }
                 ?>

 <!---Tab Keempat Berisi Form Riwayat Pendidikan-->
              <div class="chart tab-pane" id="dwali" style="position: relative;">

                    <?php
                    foreach ($qwali as $wali){
                  ?>
                    <table border=0>
                      <tr>
                          <td><label>Nama Wali</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->nama; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tempat Lahir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->tmp_lahir; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tanggal lahir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->tgl_lahir; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>RT</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->rt; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>RW</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->rw; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Jalan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->jalan; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Desa</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->desa; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kecamatan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->kecamatan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kabupaten</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->kabupaten; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Provinsi</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->provinsi; ?></label></td>
                      </tr>
                        <tr>
                          <td><label>No. Telepon</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->no_telepon; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Email</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->email; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Agama</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->agama; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kewarganegaraan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->kewarganegaraan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Pendidikan Terakhir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->nama_tingkat; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Pendidikan Terakhir</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->nama_tingkat; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Nama Institusi / Sekolah </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->nama_institusi; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Profesi </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->id_profesi; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Status </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $wali->status; ?></label></td>
                      </tr>
                       
                    </table> 
                  </div>

               <?php
               }
                 ?>

             <div class="chart tab-pane" id="dhobi" style="position: relative;">
                    <?php
                    foreach ($qhobi as $hobi){
                  ?>
                    <table border=0>
                      <tr>
                          <td><label>Hobi Seni</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $hobi->seni; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Hobi Olahraga</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $hobi->olahraga; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Hobi Organisasi</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $hobi->organisasi; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Hobi Lainnya</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $hobi->lain; ?></label></td>
                      </tr>
                    </table> 
                  </div>

               <?php
               }
                 ?>

                <div class="chart tab-pane" id="dkembang" style="position: relative;">
                    <?php
                    foreach ($qkembang as $kmb){
                  ?>
                    <table border=0>
                      <tr>
                          <td><label>Nama Beasiswa 1 </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $kmb->tgl_beasiswa1; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Nama Beasiswa 2 </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $kmb->tgl_beasiswa2; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Nama Beasiswa 3 </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $kmb->tgl_beasiswa3; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tanggal Lulus </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $kmb->tgl_tmt; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Tanggal Ijazah </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $kmb->tgl_ijazah; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>No. Ijazah </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $kmb->no_ijazah; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Tanggal SKHU </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $kmb->tgl_skhu; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>No. SKHU </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $kmb->no_skhu; ?></label></td>
                      </tr>
                    </table> 
                  </div>

               <?php
               }
                 ?>

<!--Pindah / keluar-->
             <div class="chart tab-pane" id="dpindah" style="position: relative;">
                 <?php
                    foreach ($qpindah as $pnd){
                  ?>
                    <table border=0>
                      <tr>
                          <td><label>No. Surat Pindah </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->no_surat_pindah; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Tanggal Pindah </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->tgl_pindah; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Alasan Pindah </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->alasan_pindah; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Nama Sekolah Tujuan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->nama_sekolah; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>RT </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->rt; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>RW </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->rw; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Jalan </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->jalan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Desa </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->desa; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Kecamatan </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->kec; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kabupaten </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->kab; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Provinsi </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $pnd->provinsi; ?></label></td>
                      </tr>
                    </table> 
                  </div>     
            
            <?php 
            }
            ?>

            <!--Pindah / keluar-->
             <div class="chart tab-pane" id="dlanjut" style="position: relative;">
                 <?php
                    foreach ($qlanjut as $lanjut){
                  ?>
                    <table border=0>
                      <tr>
                          <td><label>Nama Sekolah </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->nama_sekolah; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Program Studi </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->program_studi; ?></label></td>
                      </tr>
                      <tr>
                          <td colspan="4"><center><label>*) Alamat Sekolah Lanjutan </label></center></td>
                      </tr>
                       <tr>
                          <td><label>RT </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->rt; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>RW</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->rw; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Jalan </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->jalan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Desa</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->desa; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kecamatan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->kec; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Kabupaten</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->kab; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Provinsi </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->provinsi; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Tanggal Mulai </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->tgl_mulai; ?></label></td>
                      </tr>
                      <tr>
                          <td colspan="4"><center><label>*) Jika Sudah Bekerja </label></center></td>
                      </tr>
                      <tr>
                          <td><label>Nama Perusahaan </label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->nama_perusahaan; ?></label></td>
                      </tr>
                      <tr>
                          <td><label>Jabatan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->jabatan; ?></label></td>
                      </tr>
                       <tr>
                          <td><label>Penghasilan</label></td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td><label><?php echo $lanjut->penghasilan; ?></label></td>
                      </tr>
                    </table> 
                  </div>     
              <?php 
              }
              ?>
                  
<!-- ID CARD -->
            <div class="tab-pane"  id="kitas">
              <div class="box-body">

                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="panel panel-primary">
                        <div class="panel-heading">Kartu Identitas</div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-4 center">
                              <img src="<?php echo base_url('assets/img/none.jpg');?>" alt="..." class="img-thumbnail">
                              <img src="<?php echo site_url();?>/<?php echo $this->uri->segment(1);?>/set_barcode/<?php echo $dtl->nis; ?>">
                            </div>
                            <div class="col-md-8">
                              <?php foreach ($qsiswa as $dtl) {?>
                              <table class="table">
                                <tr>
                                  <td>Nama</td>
                                  <td>:</td>
                                  <td><?php echo $dtl->nama_lengkap; ?></td>
                                </tr>
                                <tr>
                                  <td>Tempat/Tgl. Lahir</td>
                                  <td>:</td>
                                  <td><?php echo $dtl->tempat_lahir; ?>, <?php echo $dtl->tanggal_lahir; ?></td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td>:</td>
                                  <td><?php echo $dtl->jalan_asal; ?> <?php echo $dtl->desa_asal; ?> <?php echo $dtl->kec_asal; ?> <?php echo $dtl->kec_asal; ?></td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td>
                                    <a href="<?php echo base_url("siswa/pdf_idcard_siswa/".$dtl->nis);?>" target="blank" class="btn btn-block btn-social btn-bitbucket">
                                      <i class="fa fa-print"></i> Cetak
                                    </a>

                                  </td>
                                </tr>
                              </table>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>    
            </div>

                </div>

              </div><!-- /.nav-tabs-custom -->




       

<!--Batas Bawah-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->






</form>



       