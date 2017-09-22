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
              <h3 class="box-title">Input Program Studi</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
             <form role="form" action="<?php echo base_url('kelas/tambahprodi'); ?>" method="post">
            <div class="box-body">
              <!--- Batas Atas Tab-->

                <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#dsekolah" data-toggle="tab">Data Program Studi</a></li>
                  
                </ul>
                <div class="tab-content no-padding">
                  <!-- Form Data Sekolah -->
                  <div class="chart tab-pane active" id="dsekolah" style="position: relative;">
                    <div class="form-group">
                      <label>Nama Prodi</label><input type="text" name="namaprodi" class="form-control" size="50" placeholder="Isi Dengan Nama Program Studi" />
                    </div>
                  <div class="form-group">
                       <label>Tampil Jenjang Pendidikan
                          <select name="jenjang" class="form-control">
                            <option value="">--Pilih jenjang--</option>
                           <?php

                           foreach ($tampiljenjang as $pr)
                          {
                              echo"<option value ='".$pr->id_jenjang."'>".$pr->nama_jenjang."";
                          }
                           ?>
                          </select></label>
                  </div>

                   <div class="form-group">
                       <label>Tampil Tingkat Pendidikan
                          <select name="tingkat" class="form-control">
                            <option value="">--Pilih Tingkat Pendidikan--</option>
                           <?php

                           foreach ($tampiltingkat as $pr)
                          {
                              echo"<option value ='".$pr->id_tp."'>".$pr->nama_tp."";
                          }
                           ?>
                          </select></label>
                  </div>
                    <div class="form-group"><label>Status Keaktifan</label>
                        <select name="status" class="form-control">
                                <option value="Aktif">Aktif</option>
                                   <option value="Tidak Aktif">Tidak Aktif</option>
                             </select>
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