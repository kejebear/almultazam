<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
<?php

error_reporting(0);

?>

        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Input Profil Sekolah / Yayasan</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
             <form role="form" action="<?php echo base_url('sekolah/tambahsekolah'); ?>" method="post">
            <div class="box-body">
              <!--- Batas Atas Tab-->

                <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#dsekolah" data-toggle="tab">Data Sekolah</a></li>
                  <li><a href="#dalamat" data-toggle="tab">Alamat</a></li>
                   <li><a href="#dgeografis" data-toggle="tab">Geografis</a></li>
                   <li><a href="#dakademik" data-toggle="tab">Akademik</a></li>
                    <li><a href="#dlegalitas" data-toggle="tab">Legalitas</a></li>
                     <li><a href="#dkepsek" data-toggle="tab">Kepala Sekolah</a></li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Form Data Sekolah -->
                  <div class="chart tab-pane active" id="dsekolah" style="position: relative;">
                    <div class="form-group">
                      <label>Nama Sekolah<input type="text" name="nis" class="form-control" size="50" placeholder="Isi Dengan Nama Sekolah" /></label>
                    </div>
                    <div class="form-group"><label>NSS
                      <input type="text" name="nisn" class="form-control" size="50" placeholder="Isi NSS"/></label>
                    </div>
                    <div class="form-group"><label>NPSN
                      <input type="text" class="form-control" name="npsn" size="70"  placeholder="Isi NPSN"/></label>
                    </div>
                    <div class="form-group"><label>Status Sekolah
                      <input type="text" class="form-control" name="status" size="30" placeholder="Isi Nama Panggilan"/></label>
                    </div>
                    <div class="form-group"><label>Akreditasi</label>
                        <select name="akreditasi" class="form-control">
                                <option value="">--Pilih Akreditasi--</option>
                                <option value="A">A</option>
                                 <option value="B">B</option>
                                  <option value="C">C</option>
                                   <option value="Belum Akreditasi">Belum Akreditasi</option>
                             </select>
                    </div>
                    <div class="form-group">
                      <label>Tahun Akreditasi</label><input type="name" name="tahun_akreditasi" class="form-control" size="10" /> 
                    </div>
                  <div class="form-group">
                       <label>Jenjang Pendidikan
                          <select name="jenjang" class="form-control">
                            <option value="">--Pilih jejang--</option>
                           <?php

                           foreach ($tampiljjg as $pr)
                          {
                              echo"<option value ='".$pr->id_jenjang."'>".$pr->nama_jenjang."";
                          }
                           ?>
                          </select></label>
                  </div>
                   <div class="form-group">
                      <label for="exampleInputFile">Foto Logo:</label>
                      <input type="file" id="logo" name="logo">
                     
                   </div>

                     

            </div>
            <!---Tab Kedua Berisi Form Alamat-->
                  <div class="chart tab-pane" id="dalamat" style="position: relative;">

                    <div class="form-group">
                      <label>Provinsi</label>
                            <input type="text" name="provinsi" class="form-control" maxlegth="10" placeholder="isi Provinsi" />
                    </div>
                     <div class="form-group">
                        <label>Kabupaten</label>
                          <input type="text" name="kabupaten" class="form-control" maxlegth="10" placeholder="isi Kabupaten" />
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                         <input type="text" name="kecamatan" class="form-control" maxlegth="10" placeholder="isi Kecamatan" />
                    </div>
                    <div class="form-group">
                        <label>Desa/Kelurahan</label>
                         <input type="text" name="desa" class="form-control" maxlegth="10" placeholder="isi Desa" />
                    </div>
                    <div class="form-group">
                        <label>Jalan</label>
                         <input type="text" name="jalan" class="form-control" maxlegth="20" placeholder="isi Jalan" />
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                         <input type="text" name="kodepos" class="form-control" maxlegth="10" placeholder="isi Kodepos" />
                    </div>
                    <div class="form-group">
                        <label>No.Telp</label>
                         <input type="text" name="telp" class="form-control" maxlegth="10" placeholder="isi No.Telp" />
                    </div>
                       <div class="form-group">
                        <label>Fax</label>
                         <input type="text" name="fax" class="form-control" maxlegth="10" placeholder="isi No.Telp" />
                    </div>
                  </div>



<!---Tab Ketiga Berisi Geografis-->
                  <div class="chart tab-pane" id="dgeografis" style="position: relative;">

                    <div class="form-group">
                      <label>Daerah</label>
                            <input type="text" name="daerah" class="form-control" maxlegth="10" placeholder="isi Nama Daerah  (Perkotaan / Pedesaan)" />
                    </div>
                     <div class="form-group">
                        <label>Lintasan</label>
                          <input type="text" name="lintasan" class="form-control" maxlegth="10" placeholder="isi Lintasan" />
                    </div>
                    <div class="form-group">
                        <label>Jarak Ke Kecamatan</label>
                         <input type="text" name="jarakkec" class="form-control" maxlegth="10" placeholder="isi Desa" />
                    </div>
                    <div class="form-group">
                        <label>Jarak Ke Kabupaten</label>
                         <input type="text" name="jarakkab" class="form-control" maxlegth="10" placeholder="isi Jarak Ke Kabupaten" />
                    </div>
                    <div class="form-group">
                        <label>Lintang</label>
                         <input type="text" name="lintang" class="form-control" maxlegth="20" placeholder="isi lintang" />
                    </div>
                    <div class="form-group">
                        <label>Bujur</label>
                         <input type="text" name="bujur" class="form-control" maxlegth="20" placeholder="isi Bujur" />
                    </div>
                  </div>


 <!---Tab Keempat Berisi Form Akademik-->
                  <div class="chart tab-pane" id="dakademik" style="position: relative;">

                    <div class="form-group">
                      <label>Program Studi</label>
                            <input type="text" name="program_studi" class="form-control" maxlegth="10" placeholder="isi Program Study Jika Ada" />
                    </div>
                     <div class="form-group">
                        <label>Kompetensi</label>
                          <input type="text" name="kompetensi" class="form-control" placeholder="isi Kompetensi" />
                    </div>
                    <div class="form-group">
                        <label>Jumlah Guru</label>
                         <input type="text"  class="form-control" maxlegth="10" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Waktu KBM
                         <input type="text" name="waktu_kbm" class="form-control" maxlegth="10" placeholder="isi Waktu KBM" /></label>
                    </div>
                  </div>


                <!---Tab Keempat Legalitas-->
                  <div class="chart tab-pane" id="dlegalitas" style="position: relative;">

                    <div class="form-group">
                      <label>SK Berdiri</label>
                            <input type="text" name="skberdiri" class="form-control" maxlegth="50" placeholder="isi Sekolah Asal" />
                    </div>
                     <div class="form-group">
                        <label>SK Tanggal</label>
                          <input type="date" name="tglsk" class="form-control" placeholder="Isi Tanggal Ijazah" />
                    </div>
                    <div class="form-group">
                        <label>Penanda Tangan SK</label>
                         <input type="text" name="penandatanganSK" class="form-control"  placeholder="isi Nomor Ijazah" />
                    </div>
                    <div class="form-group">
                        <label>Tahun Berdiri
                         <input type="date" name="thberdiri" class="form-control" maxlegth="10" /></label>
                    </div>
                    <div class="form-group">
                        <label>Tahun Penegrian</label>
                         <input type="date" name="thnpenegrian" class="form-control" placeholder="isi Tahun Penegrian" />
                    </div>
                     <div class="form-group">
                        <label>NPWP Rutin</label>
                         <input type="text" name="npwprutin" class="form-control" placeholder="isi NPWP Rutin" /> 
                    </div>
                     <div class="form-group">
                        <label>NPWP BOP</label>
                         <input type="text" name="npwpbop" class="form-control" placeholder="isi NPWP BOP" /> 
                    </div>
                     <div class="form-group">
                        <label>Status Gedung</label>
                         <input type="text" name="statusgedung" class="form-control" placeholder="isi Status Gedung" /> 
                    </div>
                     <div class="form-group">
                        <label>Penyelenggara</label>
                         <input type="text" name="penyelenggara" class="form-control" placeholder="isi Penyenlenggara Pendidikan" /> 
                    </div>
              </div>   
                  

               <!---Tab Keempat Berisi Data Kepala Sekolah-->
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



                </div>
              </div><!-- /.nav-tabs-custom -->




        <div class="form-group">
            <button type="submit" name="submit" id="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda Yakin Akan Menyimpan Data Ini?')">Simpan</button>&nbsp;&nbsp;<button type="reset" name="reset" class="btn btn-primary">Reset</button>
           </div>

<!--Batas Bawah-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->






</form>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </body>