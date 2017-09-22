<!-- Content Wrapper. Contains page content -->
     <!-- <div class="content-wrapper">-->
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
             <form role="form" action="<?php echo base_url('siswa/inputsiswa'); ?>" method="post">
      




        <div class="form-group">
              <button type="submit" name="submit" id="submit" class="btn btn-primary">+ Tambah Data Siswa</button>
           </div>







</form>

<!--Tab Kedua Untuk Lihat Data -->
 <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Siswa</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <!--- Batas Atas Tab-->

              

<div class="box-body table-responsive no-padding">
                  <table class="table table-bordered">
                    <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Status</th>
                      <th>Tahun Masuk</th>
                       <th>Foto</th>
                      <th>Detail</th>
                    </tr>
                    <tr>
                <?php
                    $no_link = $this->uri->segment(3); 
                    if ($no_link==""){
                      $no=0;
                    } else {
                      $no=($no_link*10)-(10);
                    }
                     foreach ($tampilsiswa as $r)
                      {
                        echo"<tr>";
                    echo "<td>".$r->nis."</td>";
                    echo "<td>".$r->nama_lengkap."</td>";
                    echo "<td>".$r->jk."</td>";
                    echo "<td>".$r->status_aktif."</td>";
                     echo "<td>".$r->tgl_masuk."</td>";
                   echo "<td> <img src='".base_url()."assets/gambar_siswa/siswa_sma/".$r->foto."'></td>";


                        //echo "<td>Foto</td>";
                        echo "<td>

                        <a href='".base_url()."siswa/detailsiswa/".$r->nis."'><i class='fa fa-search' aria-hidden='true'></i></a>&nbsp;&nbsp;";

                        echo"<a href='".base_url()."siswa/editsiswa/".$r->nis."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>&nbsp;&nbsp;";

                        echo "<a href='".base_url()."siswa/hapussiswa/".$r->nis."'";?> onclick="javascript: return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?. Jika Data Ini Di Hapus Semua Detail Akan Hilang !')"
                       <?php echo"><i class='fa  fa-trash-o' aria-hidden='true'></i></a>






                       </td>";
                        echo"</tr>";
                      } 
                      
                ?> 
                    </tr>
                  </table>
                   <?= $link; ?>
                </div>





<!--Batas Bawah-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
     