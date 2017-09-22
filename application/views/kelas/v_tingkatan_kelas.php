<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
<?php

error_reporting(0);

?>

        <!-- Main content -->
        <section class="content">
      
             <form role="form" action="<?php echo base_url('kelas/input_tkelas'); ?>" method="post">
            


        <div class="form-group">
            <button type="submit" name="submit" id="submit" class="btn btn-primary">+ Tambah Data</button>
           </div>


</form>

<!--Tab Kedua Untuk Lihat Data -->
 <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Tingkatan Kelas Per Jenjang</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <!--- Batas Atas Tab-->

              

<div class="box-body table-responsive no-padding">
                  <table class="table table-bordered">
                    <tr>
                      <th>Jenjang Pendidikan</th>
                      <th>Tingkatan Pendidikan</th>
                       <th>Tingkat / Kelas (Angka Romawi)</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                      <th>Detail</th>
                    </tr>
                    <tr>
                <?php
                     foreach ($tampiltkelas as $r)
                      {
                        echo"<tr>";
                              echo "<td>".$r->nama_jenjang."</td>";
                              echo "<td>".$r->nama_tp."</td>";
                              echo "<td>".$r->tingkat."</td>";
                              echo "<td>".$r->keterangan."</td>";
                              echo "<td>".$r->status_aktif."</td>";
                              echo "<td><a href='".base_url()."kelas/detailtingkat/".$r->id_sekolah."'><i class='fa fa-search' aria-hidden='true'></i></a>&nbsp;&nbsp;";
                         echo "</td>";
                        echo"</tr>";
                      }
                      
                ?> 
                    </tr>
                  </table>
                </div>





<!--Batas Bawah-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </body>