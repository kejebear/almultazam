<!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
<?php

error_reporting(0);

?>

        <!-- Main content -->
        <section class="content">
      
             <form role="form" action="<?php echo base_url('sekolah/inputsekolah'); ?>" method="post">
            




        <div class="form-group">
            <button type="submit" name="submit" id="submit" class="btn btn-primary">+ Tambah Data</button>
           </div>


</form>

<!--Tab Kedua Untuk Lihat Data -->
 <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data dan Profil Sekolah / Yayasan</h3>
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
                      <th>NSS</th>
                      <th>Nama Sekolah / Yayasan</th>
                      <th>Tahun Berdiri</th>
                      <th>Status</th>
                       <th>Logo</th>
                      <th>Detail</th>
                    </tr>
                    <tr>
                <?php
                     foreach ($tampilsekolah as $r)
                      {
                        echo"<tr>";
                      
                    echo "<td>".$r->nss."</td>";
                    echo "<td>".$r->nama."</td>";
                    echo "<td>".$r->th_berdiri."</td>";
                       echo "<td>".$r->status."</td>";
                        echo "<td>Foto</td>";
                        echo "<td><a href='".base_url()."siswa/detailsekolah/".$r->id_sekolah."'><i class='fa fa-search' aria-hidden='true'></i></a>&nbsp;&nbsp;";
                              echo"<a href='".base_url()."siswa/editsekolah/".$r->nis."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";




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