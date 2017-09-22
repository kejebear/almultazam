<!-- Content Wrapper. Contains page content -->
     <!-- <div class="content-wrapper">-->
        <!-- Content Header (Page header) -->
<?php

//error_reporting(E_ALL ^ E_DEPRECATED);

?>

        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Induk Siswa</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
             <form role="form" action="<?php echo base_url('siswa/tambahsiswa'); ?>" method="post">
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
                </ul>
                <div class="tab-content no-padding">
                  <!-- Form Data Siswa -->
                  <div class="chart tab-pane active" id="dsiswa" style="position: relative;">
                    
                    <div class="form-group">
                      <label><input type="hidden"  class="form-control" size="10" /></label>
                    </div>
                    <div class="form-group">
                      <label>NIS<input type="text" name="nis" class="form-control" size="10" /></label>
                    </div>
                    <div class="form-group"><label>NISN
                      <input type="text" name="nisn" class="form-control" size="10" placeholder="Isi NISN"/></label>
                    </div>
                    <div class="form-group"><label>Nama Lengkap
                      <input type="text" class="form-control" name="nama_lengkap" size="70"  placeholder="Isi Nama Lengkap"/></label>
                    </div>
                    <div class="form-group"><label>Nama Panggilan
                      <input type="text" class="form-control" name="nama_panggilan" size="30" placeholder="Isi Nama Panggilan"/></label>
                    </div>
                    <div class="form-group"><label>Jenis Kelamin</label>
                         <div class="radio">
                            <label>
                              <input type="radio" name="jk" id="jk" value="Laki-Laki" checked>
                             Laki - Laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="jk" id="jk" value="Perempuan">
                            Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Tempat Lahir</label><input type="text" name="tempat_lahir" class="form-control" size="10" /> 
                    </div>
                    <div class="form-group">
                       <label>Tanggal Lahir</label>
                             <input type="date" name="tanggal_lahir" class="form-control" size="10" /> 
                  </div>
                  <div class="form-group">
                       <label>Status Hubungan Keluarga</label>
                             <select name="hubungan_anak" class="form-control">
                                <option value="">--Pilih Hubungan--</option>
                                <option value="Anak Kandung">Anak Kandung</option>
                                 <option value="Anak Tiri">Anak Tiri</option>
                                  <option value="Anak Angkat">AnakAngkat</option>
                             </select>
                  </div>
                   <div class="form-group">
                      <label>Anak Ke- <input type="text" name="anake" maxlegth="10"  class="form-control" size="10" /></label>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Saudara Kandung <input type="text" maxlegth="10" name="saudara_kandung"  class="form-control" size="10" /></label>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Saudara Tiri <input type="text" maxlegth="10" name="saudara_tiri"  class="form-control" size="10" /></label>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Saudara Angkat <input type="text" maxlegth="10" name="saudara_angkat"  class="form-control" size="10" /></label>
                    </div>


                   <div class="form-group">
                      <label for="exampleInputFile">Foto Siswa:</label>
                      <input type="file" id="fotosiswa" name="fotosiswa">
                     
                   </div>
                   <div class="form-group">
                      <label>Email<input type="text" name="email" class="form-control" size="10" /></label>
                    </div>
                    <div class="form-group">
                      <label>Bahasa Sehari-hari</label>
                              <textarea class="form-control" name="bahasa" rows="3" placeholder="Isi Bahasa Sehari-hari yang digunakan..."></textarea>
                    </div>


                    <div class="form-group">
                      <label>Agama
                      <select name="agama" class="form-control">
                        <option value="">--Pilih Agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                      </select></label>
                    </div>

                    <div class="form-group">
                      <label>Kewarganegaraan
                      <select name="warganegara" class="form-control">
                        <option value="">--Pilih Warganegara--</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select></label>
                    </div>
                    <div class="form-group">
                      <label>Status Aktif
                      <select name="status_aktif" class="form-control">
                        <option value="">--Pilih Status--</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                      </select></label>
                    </div> 
                    <div class="form-group">
                      <label>Tahun Masuk
                      <select name="tahun_akademik" class="form-control">
                        <option value="">--Pilih Tahun Masuk--</option>
                        <?php

                       foreach ($tampilta as $pta)
                      {
                          echo"<option value ='".$pta->id_tahun."'>".$pta->tahun1."/".$pta->tahun2."</option>";
                      }
                       ?>
                      </select></label>
                    </div> 
                   <div class="form-group">
                      <label>Mulai Belajar Disini Tanggal : <input type="date" maxlegth="10" name="tanggal_masuk"  class="form-control" size="10" /></label>
                    </div>

                <div class="form-group">
                  <label> kelengkapan </label>
                     <div class="checkbox">
                      <label>
                        <input type="checkbox" name="arsip_nisn" value="Y"> NISN
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="arsip_akte" value="Y"> Akta Kelahiran
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="arsip_kk" value="Y"> Kartu Keluarga
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="arsip_ijazah" value="Y"> Ijazah
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="arsip_skhun" value="Y"> SKHUN
                      </label>
                    </div>

                </div> 


                     

            </div>
            <!---Tab Kedua Berisi Form Alamat-->
                  <div class="chart tab-pane" id="dalamat" style="position: relative;">

                    <div class="form-group">
                      <label>RT/RW</label>
                            <input type="text" name="rt" class="form-control" maxlegth="10" placeholder="isi RT" />
                    </div>
                     <div class="form-group">
                        <label>RW</label>
                          <input type="text" name="rw" class="form-control" maxlegth="10" placeholder="isi RW" />
                    </div>
                    <div class="form-group">
                        <label>Jalan</label>
                         <input type="text" name="jln" class="form-control" maxlegth="10" placeholder="isi Jalan" />
                    </div>
                    <div class="form-group">
                        <label>Desa/Kelurahan</label>
                         <input type="text" name="desa" class="form-control" maxlegth="10" placeholder="isi Desa" />
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                         <input type="text" name="kec" class="form-control" maxlegth="10" placeholder="isi Kecamatan" />
                    </div>
                    <div class="form-group">
                        <label>Kabupaten</label>
                         <input type="text" name="kab" class="form-control" maxlegth="20" placeholder="isi Kabupaten" />
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                         <input type="text" name="prov" class="form-control" maxlegth="10" placeholder="isi Provinsi" />
                    </div>
                    <div class="form-group">
                        <label>No.Telp</label>
                         <input type="text" name="telp" class="form-control" maxlegth="10" placeholder="isi No.Telp" />
                    </div>
                    <div class="form-group">
                        <label>Jarak Ke Sekolah
                         <input type="text" name="jarak" class="form-control" maxlegth="10" placeholder="isi Jarak" /></label>
                    </div>
                     <div class="form-group">
                        <label>Sarana Transportasi</label>
                         <input type="text" name="sarana" class="form-control" maxlegth="10" placeholder="isi Sarana Transportasi.." />
                    </div>
                  </div>



<!---Tab Ketiga Berisi Form Tinggal-->
                  <div class="chart tab-pane" id="dalamattgl" style="position: relative;">

                    <div class="form-group">
                      <label>RT/RW</label>
                            <input type="text" name="rttgl" class="form-control" maxlegth="10" placeholder="isi RT" />
                    </div>
                     <div class="form-group">
                        <label>RW</label>
                          <input type="text" name="rwtgl" class="form-control" maxlegth="10" placeholder="isi RW" />
                    </div>
                    <div class="form-group">
                        <label>Jalan</label>
                          <input type="text" name="jlntgl" class="form-control" maxlegth="10" placeholder="isi Jalan" />
                    </div>
                    <div class="form-group">
                        <label>Desa/Kelurahan</label>
                         <input type="text" name="desatgl" class="form-control" maxlegth="10" placeholder="isi Desa" />
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                         <input type="text" name="kectgl" class="form-control" maxlegth="10" placeholder="isi Kecamatan" />
                    </div>
                    <div class="form-group">
                        <label>Kabupaten</label>
                         <input type="text" name="kabtgl" class="form-control" maxlegth="20" placeholder="isi Kabupaten" />
                    </div>
                    <div class="form-group">
                        <label>No.Telp</label>
                         <input type="text" name="telptgl" class="form-control" maxlegth="10" placeholder="isi No.Telp" />
                    </div>
                    <div class="form-group">
                        <label>Jarak Ke Sekolah
                         <input type="text" name="jaraktgl" class="form-control" maxlegth="10" placeholder="isi Jarak" /></label>
                    </div>
                     <div class="form-group">
                        <label>Sarana Transportasi</label>
                         <input type="text" name="saranatgl" class="form-control" maxlegth="10" placeholder="isi Sarana Transportasi.." />
                    </div>
                  </div>


 <!---Tab Keempat Berisi Form Riwayat Kesehatan-->
                  <div class="chart tab-pane" id="dkesehatan" style="position: relative;">

                    <div class="form-group">
                      <label>Golongan Darah</label>
                            <input type="text" name="goldar" class="form-control" maxlegth="10" placeholder="isi Golongan Darah" />
                    </div>
                     <div class="form-group">
                        <label>Penyakit Kronis Yang Penah Diderita</label>
                          <input type="text" name="penyakit" class="form-control" placeholder="isi Penyakit, Jika Ada.." />
                    </div>
                    <div class="form-group">
                        <label>Kelainan</label>
                         <input type="text" name="kelainan" class="form-control" maxlegth="10" placeholder="isi Kelainan,Jika Ada..." />
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan
                         <input type="text" name="tb" class="form-control" maxlegth="10" placeholder="isi Tinggi Badan" /> Cm</label>
                    </div>
                    <div class="form-group">
                        <label>Berat Badan</label>
                         <input type="text" name="bb" class="form-control" placeholder="isi Berat Badan" /> Kg
                    </div>
                  </div>


                <!---Tab Keempat Berisi Form Riwayat Pendidikan-->
                  <div class="chart tab-pane" id="dpend" style="position: relative;">

                    <div class="form-group">
                      <label>Sekolah Asal</label>
                            <input type="text" name="sekolah_asal" class="form-control" maxlegth="10" placeholder="isi Sekolah Asal" />
                    </div>
                     <div class="form-group">
                        <label>Tanggal Ijazah</label>
                          <input type="text" name="tgijazah" class="form-control" placeholder="Isi Tanggal Ijazah" />
                    </div>
                    <div class="form-group">
                        <label>No. Ijazah</label>
                         <input type="text" name="noijazah" class="form-control"  placeholder="isi Nomor Ijazah" />
                    </div>
                    <div class="form-group">
                        <label>Tgl SKHU
                         <input type="text" name="tgskhu" class="form-control" maxlegth="10" placeholder="isi Tgl SKHU" /></label>
                    </div>
                    <div class="form-group">
                        <label>Nomor SKHU</label>
                         <input type="text" name="noskhu" class="form-control" placeholder="isi No.SKHU" />
                    </div>
                     <div class="form-group">
                        <label>Nomor Ujian Sebelumnya</label>
                         <input type="text" name="noujian" class="form-control" placeholder="isi Nomor Ujian Sebelumnya" /> 
                    </div>
                    <div class="form-group"><label>Status Sekolah Sebelumnya</label>
                         <div class="radio">
                            <label>
                              <input type="radio" name="status_sekolah" id="status_sekolah" value="Negeri" checked>
                             Negeri &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="status_sekolah" id="statu_sekolah" value="Swasta" >
                           Swasta
                            </label>
                        </div>
                    </div>
              </div>   
                  

               <!---Tab Keempat Berisi Form Riwayat Pendidikan-->
              <div class="chart tab-pane" id="dayah" style="position: relative;">

                    <div class="form-group">
                      <label>Nama Ayah</label>
                            <input type="text" name="nama_ayah" class="form-control" maxlegth="50" placeholder="isi Nama Ayah" />
                    </div>
                     <div class="form-group">
                          <label>Tempat Lahir<input type="text" name="tempat_lahir_ayah" class="form-control" size="20" /></label>
                      </div>
                      <div class="form-group">
                          <label>Tanggal Lahir<input type="date" name="tgl_lahir_ayah" class="form-control" size="20" /></label>
                      </div>
                       <div class="form-group">
                          <label>RT.</label>
                          <input type="text" class="form-control" name="rt_ayah" rows="3" placeholder="Masukkan RT. Ayah">
                    </div>
                    <div class="form-group">
                          <label>RW.</label>
                          <input type="text" class="form-control" name="rw_ayah" rows="3" placeholder="Masukkan RW. Ayah">
                    </div>
                     <div class="form-group">
                          <label>Jalan </label>
                          <input type="text" class="form-control" name="jalan_ayah" rows="3" placeholder="Masukkan Jalan ">
                    </div>
                    <div class="form-group">
                          <label>Desa/Kelurahan </label>
                          <input type="text" class="form-control" name="desa_ayah" rows="3" placeholder="Masukkan Desa ">
                    </div>
                     <div class="form-group">
                          <label>Kecamatan </label>
                          <input type="text" class="form-control" name="kec_ayah" rows="3" placeholder="Masukkan Kecamatan ">
                    </div>
                    <div class="form-group">
                          <label>Kabupaten </label>
                          <input type="text" class="form-control" name="kab_ayah" rows="3" placeholder="Masukkan Kabupaten ">
                    </div>
                     <div class="form-group">
                          <label>Provinsi </label>
                          <input type="text" class="form-control" name="prov_ayah" rows="3" placeholder="Masukkan Provinsi ">
                    </div>
                      <div class="form-group">
                          <label>No. Telepon</label>
                          <input type="text" class="form-control" name="no_telp_ayah" rows="3" placeholder="Masukkan No.Telp Ayah">
                    </div>
                    <div class="form-group">
                          <label>No. Telepon 2</label>
                          <input type="text" class="form-control" name="no_telp_ayah2" rows="3" placeholder="Masukkan No.Telp Ayah">
                    </div>
                    <div class="form-group">
                          <label>No. Telepon 3</label>
                          <input type="text" class="form-control" name="no_telp_ayah3" rows="3" placeholder="Masukkan No.Telp Ayah">
                    </div>

                    <div class="form-group">
                          <label>Alamat Email</label>
                          <input type="text" class="form-control" name="email_ayah" rows="3" placeholder="Masukkan Alamat Email Ayah">
                    </div>

                    <div class="form-group">
                      <label>Agama
                      <select name="agama_ayah" class="form-control">
                        <option value="">--Pilih Agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                      </select></label>
                    </div>

                     <div class="form-group">
                      <label>Kewarganegaraan
                      <select name="warganegara_ayah" class="form-control">
                        <option value="">--Pilih Warganegara--</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select></label>
                    </div>


                    <div class="form-group"><label>Status</label>
                         <div class="radio">
                            <label>
                              <input type="radio" name="status_ayah" id="status_ayah" value="Hidup" checked>
                             Hidup &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="status_ayah" id="status_ayah" value="Meninggal">
                           Meninggal Dunia
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                      <label>Pendidikan Terakhir
                      <select name="pterakhir_ayah" class="form-control">
                        <option value="">--Pilih Pendidikan Terakhir--</option>
                       <?php

                       foreach ($tampiltingkat as $p)
                      {
                          echo"<option value ='".$p->id_tp."'>".$p->nama_tp."";
                      }
                       ?>
                      </select></label>
                    </div>
                    <div class="form-group">
                      <label>Nama Institusi Pendidikan Terakhir</label>
                      <input type="text" name="institusi_pendidikan_ayah" class="form-control" placeholder="Isi Nama Institusi Pendidikan Terakhir Ayah" />
                    </div>
                    <div class="form-group">
                          <label>Profesi Ayah
                          <select name="profesi_ayah" class="form-control">
                            <option value="">--Pilih Profesi--</option>
                           <?php

                           foreach ($tampilprofesi as $pr)
                          {
                              echo"<option value ='".$pr->id_profesi."'>".$pr->nama_profesi."";
                          }
                           ?>
                          </select></label>
                    </div>
                      <div class="form-group">
                      <label>Penghasilan</label>
                      <input type="text" name="penghasilan_ayah" class="form-control" placeholder="Isi Penghasilan Ayah" />
                    </div>
              </div>   


<!---Tab Keenam Berisi Form Riwayat Ibu-->
              <div class="chart tab-pane" id="dibu" style="position: relative;">

                    <div class="form-group">
                      <label>Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" maxlegth="50" placeholder="isi Nama Ibu" />
                    </div>
                     <div class="form-group">
                          <label>Tempat Lahir<input type="text" name="tempat_lahir_ibu" class="form-control" size="20" /></label>
                      </div>
                      <div class="form-group">
                          <label>Tanggal Lahir<input type="date" name="tgl_lahir_ibu" class="form-control" size="20" /></label>
                      </div>
                      <div class="form-group">
                      <label>RT</label>
                            <input type="text" name="rt_ibu" class="form-control" maxlegth="50" placeholder="isi RT.Ibu" />
                    </div>
                    <div class="form-group">
                     <label>RW</label>
                            <input type="text" name="rw_ibu" class="form-control" maxlegth="50" placeholder="isi RW.Ibu" />
                    </div>
                    <div class="form-group">
                      <label>Jalan</label>
                            <input type="text" name="jalan_ibu" class="form-control" maxlegth="50" placeholder="isi Jalan " />
                    </div>
                     <div class="form-group">
                      <label>Desa/Kelurahan</label>
                            <input type="text" name="desa_ibu" class="form-control" maxlegth="50" placeholder="isi Desa " />
                    </div>
                     <div class="form-group">
                      <label>Kecamatan</label>
                            <input type="text" name="kec_ibu" class="form-control" maxlegth="50" placeholder="isi Kecamatan " />
                    </div>
                    <div class="form-group">
                      <label>Kabupaten</label>
                            <input type="text" name="kab_ibu" class="form-control" maxlegth="50" placeholder="isi Kabupaten " />
                    </div>
                    <div class="form-group">
                      <label>Provinsi</label>
                            <input type="text" name="prov_ibu" class="form-control" maxlegth="50" placeholder="isi Desa " />
                    </div>
                    <div class="form-group">
                      <label>No. Telepon</label>
                            <input type="text" name="no_telp_ibu" class="form-control" maxlegth="50" placeholder="isi No. Telp Ibu " />
                    </div>
                     <div class="form-group">
                          <label>No. Telepon 2</label>
                          <input type="text" class="form-control" name="no_telp_ibu2" rows="3" placeholder="Masukkan No.Telp Ibu Yang Lain...">
                    </div>
                    <div class="form-group">
                          <label>No. Telepon 3</label>
                          <input type="text" class="form-control" name="no_telp_ibu3" rows="3" placeholder="Masukkan No.Telp Ibu Yang Lain...">
                    </div>
                     <div class="form-group">
                          <label>Provinsi </label>
                          <input type="text" class="form-control" name="prov_ibu" rows="3" placeholder="Masukkan Provinsi ">
                    </div>
                    <div class="form-group">
                          <label>Alamat Email</label>
                          <input type="text" class="form-control" name="email_ibu" rows="3" placeholder="Masukkan Alamat Email Ibu">
                    </div>

                    <div class="form-group">
                      <label>Agama
                      <select name="agama_ibu" class="form-control">
                        <option value="">--Pilih Agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                      </select></label>
                    </div>

                     <div class="form-group">
                      <label>Kewarganegaraan
                      <select name="warganegara_ibu" class="form-control">
                        <option value="">--Pilih Warganegara--</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select></label>
                    </div>


                    <div class="form-group"><label>Status</label>
                         <div class="radio">
                            <label>
                              <input type="radio" name="status_ibu" id="status_ibu" value="Hidup" checked>
                             Hidup &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="status_ibu" id="status_ibu" value="Meninggal">
                           Meninggal Dunia
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                      <label>Pendidikan Terakhir
                      <select name="pterakhir_ibu" class="form-control">
                        <option value="">--Pilih Pendidikan Terakhir--</option>
                       <?php

                       foreach ($tampiltingkat as $p)
                      {
                          echo"<option value ='".$p->id_tp."'>".$p->nama_tp."";
                      }
                       ?>
                      </select></label>
                    </div>
                    <div class="form-group">
                      <label>Nama Institusi Pendidikan Terakhir</label>
                      <input type="text" name="institusi_pendidikan_ibu" class="form-control" placeholder="Isi Nama Institusi Pendidikan Terakhir Ibu" />
                    </div>
                    <div class="form-group">
                          <label>Profesi Ibu
                          <select name="profesi_ibu" class="form-control">
                            <option value="">--Pilih Profesi--</option>
                           <?php

                           foreach ($tampilprofesi as $pr)
                          {
                              echo"<option value ='".$pr->id_profesi."'>".$pr->nama_profesi."";
                          }
                           ?>
                          </select></label>
                    </div>
                      <div class="form-group">
                      <label>Penghasilan</label>
                      <input type="text" name="penghasilan_ibu" class="form-control" placeholder="Isi Penghasilan Ibu" />
                    </div>
              </div>   


<!---Tab KeTujuh Berisi Form Riwayat Wali-->
              <div class="chart tab-pane" id="dwali" style="position: relative;">

                    <div class="form-group">
                      <label>Nama wali</label>
                            <input type="text" name="nama_wali" class="form-control" maxlegth="50" placeholder="isi Nama Wali" />
                    </div>
                     <div class="form-group">
                          <label>Tempat Lahir<input type="text" name="tempat_lahir_wali" class="form-control" size="20" /></label>
                      </div>
                      <div class="form-group">
                          <label>Tanggal Lahir<input type="date" name="tgl_lahir_wali" class="form-control" size="20" /></label>
                      </div>
                     <div class="form-group">
                      <label>RT</label>
                            <input type="text" name="rt_wali" class="form-control" maxlegth="50" placeholder="isi RT.Wali" />
                    </div>
                    <div class="form-group">
                     <label>RW</label>
                            <input type="text" name="rw_wali" class="form-control" maxlegth="50" placeholder="isi RW.Wali" />
                    </div>
                    <div class="form-group">
                      <label>Jalan</label>
                            <input type="text" name="jalan_wali" class="form-control" maxlegth="50" placeholder="isi Jalan " />
                    </div>
                     <div class="form-group">
                      <label>Desa/Kelurahan</label>
                            <input type="text" name="desa_wali" class="form-control" maxlegth="50" placeholder="isi Desa " />
                    </div>
                     <div class="form-group">
                      <label>Kecamatan</label>
                            <input type="text" name="kec_wali" class="form-control" maxlegth="50" placeholder="isi Kecamatan " />
                    </div>
                    <div class="form-group">
                      <label>Kabupaten</label>
                            <input type="text" name="kab_wali" class="form-control" maxlegth="50" placeholder="isi Kabupaten " />
                    </div>
                    <div class="form-group">
                      <label>Provinsi</label>
                            <input type="text" name="prov_wali" class="form-control" maxlegth="50" placeholder="isi Provinsi " />
                    </div>
                     <div class="form-group">
                      <label>No. Telepon</label>
                            <input type="text" name="no_telp_wali" class="form-control" maxlegth="50" placeholder="isi No.Telp" />
                    </div>
                     <div class="form-group">
                          <label>No. Telepon 2</label>
                          <input type="text" class="form-control" name="no_telp_wali2" placeholder="Masukkan No.Telp Wali Yang Lain...">
                    </div>
                    <div class="form-group">
                          <label>No. Telepon 3</label>
                          <input type="text" class="form-control" name="no_telp_wali3" rows="3" placeholder="Masukkan No.Telp Wali Yang Lain... ">
                    </div>
                    <div class="form-group">
                          <label>Alamat Email</label>
                          <input type="text" class="form-control" name="email_wali" rows="3" placeholder="Masukkan Alamat Email Wali">
                    </div>


                    <div class="form-group">
                      <label>Agama
                      <select name="agama_wali" class="form-control">
                        <option value="">--Pilih Agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                      </select></label>
                    </div>

                     <div class="form-group">
                      <label>Kewarganegaraan
                      <select name="warganegara_wali" class="form-control">
                        <option value="">--Pilih Warganegara--</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select></label>
                    </div>


                    <div class="form-group"><label>Status</label>
                         <div class="radio">
                            <label>
                              <input type="radio" name="status_wali" id="status_wali" value="Hidup" checked>
                             Hidup &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="status_wali" id="status_wali" value="Meninggal">
                           Meninggal Dunia
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                      <label>Pendidikan Terakhir
                      <select name="pterakhir_wali" class="form-control">
                        <option value="">--Pilih Pendidikan Terakhir--</option>
                       <?php

                       foreach ($tampiltingkat as $p)
                      {
                          echo"<option value ='".$p->id_tp."'>".$p->nama_tp."";
                      }
                       ?>
                      </select></label>
                    </div>
                    <div class="form-group">
                      <label>Nama Institusi Pendidikan Terakhir</label>
                      <input type="text" name="institusi_pendidikan_wali" class="form-control" placeholder="Isi Nama Institusi Pendidikan Terakhir wali" />
                    </div>
                    <div class="form-group">
                          <label>Profesi Wali
                          <select name="profesi_wali" class="form-control">
                            <option value="">--Pilih Profesi--</option>
                           <?php

                           foreach ($tampilprofesi as $pr)
                          {
                              echo"<option value ='".$pr->id_profesi."'>".$pr->nama_profesi."";
                          }
                           ?>
                          </select></label>
                    </div>
                      <div class="form-group">
                      <label>Penghasilan</label>
                      <input type="text" name="penghasilan_wali" class="form-control" placeholder="Isi Penghasilan Wali" />
                    </div>
              </div>   

      <!---Tab KeTujuh Berisi Form Riwayat Hobi-->
              <div class="chart tab-pane" id="dhobi" style="position: relative;">

                    <div class="form-group">
                      <label>Kegemaran Seni</label>
                              <textarea class="form-control" name="hobiseni" rows="3" placeholder="Isi Hobi Kesenian..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Kegemaran Olahraga</label>
                              <textarea class="form-control" name="hobiolahraga" rows="3" placeholder="Isi Hobi Olahraga..."></textarea>
                    </div>
                    <div class="form-group">
                           <label>Organisasi</label>
                              <textarea class="form-control" name="hobiorganiasi" rows="3" placeholder="Isi Organisasi Yang Diikuti..."></textarea>
                    </div>
                     <div class="form-group">
                           <label>Lainnya</label>
                              <textarea class="form-control" name="hobilainnya" rows="3" placeholder="Isi Organisasi Yang Diikuti..."></textarea>
                    </div>
             </div>


             <div class="chart tab-pane" id="dkembang" style="position: relative;">
                    <div class="form-group">
                      <label>Beasiswa 1</label>
                               <input type="date" name="bulan_beasiswa1" class="form-control" />
                                <input type="text" name="nama_beasiswa1" class="form-control" placeholder="Isi Nama Beasiswa 3" />
                    </div>
                    <div class="form-group">
                      <label>Beasiswa 2</label>
                               <input type="date" name="bulan_beasiswa2" class="form-control" />
                              <input type="text" name="nama_beasiswa2" class="form-control" placeholder="Isi Nama Beasiswa 3" />
                    </div>
                    <div class="form-group">
                      <label>Beasiswa 3</label>
                               <input type="date" name="bulan_beasiswa3" class="form-control" />
                              <input type="text" name="nama_beasiswa3" class="form-control" placeholder="Isi Nama Beasiswa 3" />
                    </div>
                    <div class="form-group">
                      <label>Kelulusan</label>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lulus</label>
                               <input type="date" name="tanggal_lulus" class="form-control" />
                    </div>
                    <div class="form-group">
                      <label>Tanggal Ijazah</label>
                               <input type="date" name="tanggal_ijazah" class="form-control" />
                    </div><div class="form-group">
                      <label>No. Ijazah</label>
                               <input type="text" name="no_ijazah" class="form-control" placeholder="Isi No. Ijazah" />
                    </div> <div class="form-group">
                      <label>Tanggal SKHUN</label>
                               <input type="date" name="tanggal_skhun" class="form-control" />
                    </div><div class="form-group">
                      <label>No. SKHUN</label>
                               <input type="text" name="no_skhun" class="form-control" placeholder="Isi No. SKHUN" />
                    </div>
             </div>

               <div class="chart tab-pane" id="dlanjut" style="position: relative;">
                     <div class="form-group">
                              <label>Nama Sekolah / Universitas Lanjutan</label>
                             <input type="text" name="nama_sekolah_lanjut" class="form-control" placeholder="Isi Nama Sekolah /Universitas..." />
                      </div>
                      <div class="form-group">
                              <label>Program Studi</label>
                              <textarea class="form-control" name="program_studi" rows="3" placeholder="Isi Program Studi..."></textarea>
                      </div>
                       <div class="form-group">
                              <label>Alamat Sekolah Lanjutan</label>
                      </div>
                       <div class="form-group">
                              <label>RT</label>
                              <input type="text" name="rt_sekolah_lanjutan" class="form-control" placeholder="Isi RT.Sekolah Tujuan" />
                      </div>
                      <div class="form-group">
                              <label>RW</label>
                             <input type="text" name="rw_sekolah_lanjutan" class="form-control" placeholder="Isi RW Sekolah Tujuan" />
                      </div>
                       <div class="form-group">
                              <label>Jalan</label>
                             <input type="text" name="jalan_sekolah_lanjutan" class="form-control" placeholder="Isi Jalan Sekolah Tujuan" />
                      </div>
                       <div class="form-group">
                              <label>Desa/Kelurahan</label>
                             <input type="text" name="desa_sekolah_tujuan" class="form-control" placeholder="Isi Desa Sekolah Tujuan" />
                      </div>
                       <div class="form-group">
                              <label>Kecamatan</label>
                             <input type="text" name="kec_sekolah_lanjutan" class="form-control" placeholder="Isi Kecamatan Sekolah Tujuan" />
                      </div>
                       <div class="form-group">
                              <label>Kabupaten/Kota</label>
                             <input type="text" name="kab_sekolah_lanjutan" class="form-control" placeholder="Isi Kabupaten Sekolah Tujuan" />
                      </div>
                      <div class="form-group">
                              <label>Provinsi</label>
                             <input type="text" name="prov_sekolah_lanjutan" class="form-control" placeholder="Isi Kabupaten Sekolah Tujuan" />
                      </div>

                      <div class="form-group">
                              <label>Mulai Pada Tanggal</label>
                             <input type="date" name="tgl_sekolah_lanjutan" class="form-control" placeholder="Isi Kabupaten Sekolah Tujuan" />
                      </div>
                      <div class="form-group">
                              <label>Jika Sudah Bekerja</label> 
                      </div>
                      <div class="form-group">
                              <label>Nama Perusahaan</label> 
                             <input type="name" name="nama_perusahaan" class="form-control" placeholder="Isi Nama Perusahaan" />
                      </div>
                      <div class="form-group">
                              <label>Jabatan</label> 
                             <input type="name" name="jabatan" class="form-control" placeholder="Isi Nama Perusahaan" />
                      </div>
                      <div class="form-group">
                              <label>Penghasilan</label> 
                             <input type="name" name="penghasilan" class="form-control" placeholder="Isi Nominal Penghasilan" />
                      </div>
              </div>


<!--Pindah / keluar-->
             <div class="chart tab-pane" id="dpindah" style="position: relative;">
                     <div class="form-group">
                              <label>Nomor Surat Pindah/Keluar</label>
                             <input type="text" name="no_suratpindah" class="form-control" placeholder="Isi Nomor Surat Pindah..." />
                      </div>
                      <div class="form-group">
                              <label>Tanggal Pindah/Keluar</label>
                             <input type="date" name="tanggal_pindah" class="form-control" placeholder="Isi Nomor Surat Pindah..." />
                      </div>
                      <div class="form-group">
                              <label>Alasan Pindah / Keluar</label>
                              <textarea class="form-control" name="alasan_pindah" rows="3" placeholder="Isi Alasan Pindah..."></textarea>
                      </div>
                       <div class="form-group">
                              <label>Sekolah Tujuan</label>
                              <input type="date" name="sekolah_tujuan" class="form-control" placeholder="Sekolah Tujuan..." />
                      </div>
                      <div class="form-group">
                              <label>Alamat Sekolah Tujuan</label>
                      </div>
                       <div class="form-group">
                              <label>RT</label>
                              <input type="text" name="rt_sekolah_tujuan" class="form-control" placeholder="Isi RT.Sekolah Tujuan" />
                      </div>
                      <div class="form-group">
                              <label>RW</label>
                             <input type="text" name="rw_sekolah_tujuan" class="form-control" placeholder="Isi RW Sekolah Tujuan" />
                      </div>
                       <div class="form-group">
                              <label>Jalan</label>
                             <input type="text" name="jalan_sekolah_tujuan" class="form-control" placeholder="Isi Jalan Sekolah Tujuan" />
                      </div>
                       <div class="form-group">
                              <label>Desa/Kelurahan</label>
                             <input type="text" name="desa_sekolah_tujuan" class="form-control" placeholder="Isi Desa Sekolah Tujuan" />
                      </div>
                       <div class="form-group">
                              <label>Kecamatan</label>
                             <input type="text" name="kec_sekolah_tujuan" class="form-control" placeholder="Isi Kecamatan Sekolah Tujuan" />
                      </div>
                       <div class="form-group">
                              <label>Kabupaten/Kota</label>
                             <input type="text" name="kab_sekolah_tujuan" class="form-control" placeholder="Isi Kabupaten Sekolah Tujuan" />
                      </div>
                      <div class="form-group">
                              <label>Provinsi</label>
                             <input type="text" name="prov_sekolah_tujuan" class="form-control" placeholder="Isi Kabupaten Sekolah Tujuan" />
                      </div>
              </div>
            

                  

                

                    




                </div>
              </div><!-- /.nav-tabs-custom -->




        <div class="form-group">
            <button type="submit" name="submit" id="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda Yakin Akan Menyimpan Data Ini?')">Simpan</button>
            &nbsp;&nbsp;<button type="reset" name="reset" class="btn btn-primary">Reset</button>
           </div>

<!--Batas Bawah-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->






</form>


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </body>