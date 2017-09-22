<!-- Content Wrapper. Contains page content -->
      <!--<div class="content-wrapper">-->
        <!-- Content Header (Page header) -->
<?php

//error_reporting(E_ALL ^ E_DEPRECATED);

?>

        <!-- Main content -->
        <section class="content">

<!--Tab Kedua Untuk Lihat Data -->
 <div class="box">
            <div class="box-header with-border">
           
                      
              <h3 class="box-title">Data Rombongan Belajar </h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
            <div class="box-body">
              <!--- Batas Atas Tab-->
 <form role="form" action="<?php echo base_url('kelas/simpanbagikelas'); ?>" method="post">
              

<div class="box-body table-responsive no-padding">


                  <table class="table table-bordered">
                    <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>TA</th>
                      <th>Aksi</th>
                    </tr>
                    <tr>
                <?php
                     foreach ($tampilrombel as $r)
                      {
                        echo"<tr>";
                  ?>

                  <?php
                    echo "<td>".$r->nis."</td>";
                    echo "<td>".$r->nama_lengkap."</td>";
                    echo "<td>".$r->nama_kelas."</td>";
                    echo "<td>".$r->tahun1."/".$r->tahun2."</td>";
                     echo "<td>";

                        echo"<a href='".base_url()."kelas/editbagikelas/".$r->nis."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>&nbsp;&nbsp;




                       </td>";
                    
                        echo"</tr>";
                      } 
                      
                ?> 
                    </tr>
                  </table>
                </div>

             
           </div>

</form>



<!--Batas Bawah-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      