<!-- Content Wrapper. Contains page content -->
      <!--<div class="content-wrapper">-->
        <!-- Content Header (Page header) -->
<?php

error_reporting(0);

?>

        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Input Jadwal Pelajaran</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
             <form role="form" action="<?php echo base_url('jadwal/tambahjadwal'); ?>" method="post">
            <div class="box-body">
              <!--- Batas Atas Tab-->

                <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#dsekolah" data-toggle="tab">Jadwal Pelajaran</a></li>
                  
                </ul>
                <div class="tab-content no-padding">
                  <!-- Form Data Sekolah -->
                  <div class="chart tab-pane active" id="dsekolah" style="position: relative;">
				  <div class="form-group">
                       <label>Hari
                          <select name="hari" class="form-control">
							<option value="">--Pilih Hari--</option>
							<option value="Senin">Senin</option>
							<option value="Selasa">Selasa</option>
							<option value="Rabu">Rabu</option>
							<option value="Kamis">Kamis</option>
							<option value="Jumat">Jumat</option>
							<option value="Sabtu">Sabtu</option>
						  </select>
                  </div>
                     <div class="form-group">
                       <label>Jam Pelajaran
                          <select name="jam" class="form-control">
                            <option value="">--Pilih Jam--</option>
                           <?php

                           foreach ($jam as $pr)
                          {
                              echo"<option value ='".$pr->id_jam."'>".$pr->jam_mulai." - ".$pr->jam_selesai."";
                          }
                           ?>
                          </select></label>
                  </div>
                   <div class="form-group">
                       <label>Mata Pelajaran
                          <select name="mapel" class="form-control">
                            <option value="">--Pilih Mata Pelajaran--</option>
                           <?php

                           foreach ($mapel as $pr)
                          {
                              echo"<option value ='".$pr->id_mapel."'>".$pr->nama_mapel."";
                          }
                           ?>
                          </select></label>
                  </div>
                  <div class="form-group">
                       <label>Pilih Kelas
                          <select name="kelas" class="form-control">
                            <option value="">--Pilih Kelas--</option>
                           <?php

                           foreach ($kelas as $pr)
                          {
                              echo"<option value ='".$pr->id_kelas."'>".$pr->nama_kelas."";
                          }
                           ?>
                          </select></label>
                  </div>
                   <div class="form-group">
                       <label>Pilih Ruangan
                          <select name="kelompokmapel" class="form-control">
                            <option value="">--Pilih Ruangan--</option>
                           <?php

                           foreach ($idkelompok as $pr)
                          {
                              echo"<option value ='".$pr->id_kelompok."'>".$pr->nama_kelompok."";
                          }
                           ?>
                          </select></label>
                  </div>
                   <div class="form-group">
                       <label>Pilih Guru
                          <select name="nrp" class="form-control">
                            <option value="">--Pilih Guru--</option>
                           <?php

                           foreach ($guru as $pr)
                          {
                              echo"<option value ='".$pr->nrp."'>".$pr->nama."";
                          }
                           ?>
                          </select></label>
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

       