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
              <h3 class="box-title">Input Master Kelas</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
             <form role="form" action="<?php echo base_url('kelas/tambahkelas'); ?>" method="post">
            <div class="box-body">
              <!--- Batas Atas Tab-->

                <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#dsekolah" data-toggle="tab">Data Kelas</a></li>
                  
                </ul>
                <div class="tab-content no-padding">
                  <!-- Form Data Sekolah -->
                  <div class="chart tab-pane active" id="dsekolah" style="position: relative;">
                    <div class="form-group">
                    </div>
                  <div class="form-group">
                       <label> Tingkat / Grade (Kelas)
                          <select name="tingkatkelas" class="form-control">
                            <option value="">--Pilih Tingkat--</option>
                           <?php

                           foreach ($tampiltkelas as $pr)
                          {
                              echo"<option value ='".$pr->id_tingkatan_kelas."'>".$pr->tingkat."";
                          }
                           ?>
                          </select></label>
                  </div>

                   <div class="form-group">
                       <label>Tahun Pelajaran
                          <select name="ta" class="form-control">
                            <option value="">--Pilih Tingkat Tahun Ajaran--</option>
                           <?php

                           foreach ($tampilta as $pr)
                          {
                              echo"<option value ='".$pr->id_tahun."'>".$pr->tahun1." / ".$pr->tahun2."";
                          }
                           ?>
                          </select></label>
                  </div>
                   <div class="form-group">
                       <label>Program Studi (Prodi)
                          <select name="prodi" class="form-control">
                            <option value="">--Pilih Prodi--</option>
                            <option value="-">Tidak Dibagi Prodi</option>
                           <?php

                           foreach ($tampilprodi as $pr)
                          {
                              echo"<option value ='".$pr->id_prodi."'>".$pr->nama_prodi."";
                          }
                           ?>
                          </select></label>
                  </div>

                  <div class="form-group">
                      <label> Nama Kelas</label><input type="text" name="nama_kelas" class="form-control" size="50" placeholder="Isi Dengan Nama Kelas. Contoh : X.1, X.2, dst.." />
                  </div>

                  <div class="form-group">
                      <label>Kapasitas Kelas</label><input type="text" name="kapasitas" class="form-control" size="50" placeholder="Isi Jumlah Maksimal siswa di Kelas Tersebut..." />
                  </div>


                  <div class="form-group">
                       <label>Wali Kelas
                          <select name="walikelas" class="form-control">
                            <option value="">--Pilih Wali Kelas--</option>
                           <?php

                           foreach ($tampilpegawai as $pr)
                          {
                              echo"<option value ='".$pr->nrp."'>".$pr->nama."";
                          }
                           ?>
                          </select></label>
                  </div>
                     <div class="form-group"> 
                      <label>Keterangan</label>
                              <textarea class="form-control" name="keterangan" rows="3" placeholder="Isi Keterangan Terkait Prodi Tersebut..."></textarea>
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