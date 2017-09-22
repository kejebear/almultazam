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
              <h3 class="box-title">Input Mata Pelajaran</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
             <form role="form" action="<?php echo base_url('master/tambahmapel'); ?>" method="post">
            <div class="box-body">
              <!--- Batas Atas Tab-->

                <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#dsekolah" data-toggle="tab">Data Data Pelajaran</a></li>
                  
                </ul>
                <div class="tab-content no-padding">
                  <!-- Form Data Sekolah -->
                  <div class="chart tab-pane active" id="dsekolah" style="position: relative;">
                    <div class="form-group">
                      <label>Nama Mata Pelajaran</label><input type="text" name="nama_mapel" class="form-control" size="50" placeholder="Isi Dengan Nama Mata Pelajaran" />
                    </div>

                     <div class="form-group">
                       <label>Kelompok Mata Pelajaran
                          <select name="kelompokmapel" class="form-control">
                            <option value="">--Pilih Kelompok--</option>
                           <?php

                           foreach ($idkelompok as $pr)
                          {
                              echo"<option value ='".$pr->id_kelompok."'>".$pr->nama_kelompok."";
                          }
                           ?>
                          </select></label>
                  </div>

                     <div class="form-group">
                      <label>Keterangan</label>
                              <textarea class="form-control" name="keterangan" rows="3" placeholder="Isi Keterangan Terkait Mata Pelajaran Tersebut..."></textarea>
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