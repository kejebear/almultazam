<!-- Content Wrapper. Contains page content -->
     <!-- <div class="content-wrapper">-->
        <!-- Content Header (Page header) -->
<?php

//error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);

?>

        <!-- Main content -->
        <section class="content">
             <form role="form" action="<?php echo base_url('jadwal/tambahjadwal'); ?>" method="post">
      




        <div class="form-group">
              <button type="submit" name="submit" id="submit" class="btn btn-primary">+ Tambah Data Jadwal</button>
           </div>


</form>

<!--Tab Kedua Untuk Lihat Data -->
 <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DataJadwal Mata Pelajaran</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <!--- Batas Atas Tab-->

              

<div class="box-body table-responsive no-padding">


  <?php
  $jrow = $this->m_models->getRows("kelas where id_tahun='3'"); 
  ?>

                  <table class="table table-bordered">
                    <tr>
                      <th rowspan="2">Hari</th>
                         <th colspan="<?php echo $jrow;     ?>">Nama Kelas</th>
                      
                    </tr>
                    <tr>
                      <?php
                          foreach($tampilkelas as $tk)
                          {
                          echo "<th>".$tk->nama_kelas."</th>";
                        }
                      ?>
                    </tr>
                    <tr>
                <?php
                     
                        echo"<tr>";
                        echo"<td>Senin</td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<td>Selasa</td>";
                        echo"</tr>";
                        echo"<tr>";
                          echo"<td>Rabu</td>";
                        echo"</tr>";
                         echo"<tr>";
                          echo"<td>Kamis</td>";
                        echo"</tr>";
                         echo"<tr>";
                          echo"<td>Jum'at</td>";
                        echo"</tr>";
                         echo"<tr>";
                          echo"<td>Sabtu</td>";
                        echo"</tr>";
                     
                      
                ?> 
                    </tr>
                  </table>
                </div>





<!--Batas Bawah-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      
       <script type="text/javascript">
      /*$(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });*/
    </script>
    </body>