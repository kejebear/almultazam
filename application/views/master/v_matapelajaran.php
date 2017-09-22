
<?php

//error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);

?>

        <!-- Main content -->
        <section class="content">
             <form role="form" action="<?php echo base_url('master/inputmapel'); ?>" method="post">
      




        <div class="form-group">
              <button type="submit" name="submit" id="submit" class="btn btn-primary">+ Tambah Data Mapel</button>
           </div>


</form>

<!--Tab Kedua Untuk Lihat Data -->
 <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Master Mata Pelajaran</h3>
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
                      <th>ID Mapel</th>
                      <th>Kelompok Mapel</th>
                      <th>Nama Mapel</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                    <tr>
                <?php
                     foreach ($q as $r)
                      {
                        echo"<tr>";
                    echo "<td>".$r->id_mapel."</td>";
                     echo "<td>".$r->nama_kelompok."</td>";
                    echo "<td>".$r->nama_mapel."</td>";
                    echo "<td>".$r->keterangan."</td>";
                        echo "<td>";

                        echo"<a href='".base_url()."master/editmapel/".$r->id_mapel."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>&nbsp;&nbsp;";

                      echo"
                       </td>";
                        echo"</tr>";
                      } 
                      
                ?> 
                    </tr>
                  </table>
                </div>

            </div><!-- /.box-body -->
        

       