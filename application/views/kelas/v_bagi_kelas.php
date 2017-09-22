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
              <h3 class="box-title">Data Pembagian Kelas Siswa</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <!--- Batas Atas Tab-->
 <form role="form" action="<?php echo base_url('kelas/simpanbagikelas'); ?>" method="post">
              

<div class="box-body table-responsive no-padding">

<?php
 $amb['ambilta'] = $this->m_models->getAll("tahun_akademik order by tahun1 desc limit 1");

      foreach($amb['ambilta'] as $th) 
        {


$jrow = $this->m_models->getRows("kelas where id_tahun='".$th->id_tahun."'"); 
}
?>
                  <table class="table table-bordered">
                    <tr>
                      <th rowspan="2">NIS</th>
                      <th rowspan="2">Nama</th>
                       <th rowspan="2">Jenis Kelamin</th>
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
                     foreach ($tampilsiswa as $r)
                      {
                        echo"<tr>";
                  ?>

                  <?php
                    echo "<td>".$r->nis."</td>";
                    echo "<td>".$r->nama_lengkap."</td>";
                    echo "<td>".$r->jk."</td>";
                    ?>
                   
                      <?php
                      $no=0;
                          foreach($tampilkelas as $tk)
                          {
                            $no++;
                      ?>
                        <td><input type="radio" name="kelas<?php echo $r->nis;  ?>"  value="<?php echo $r->nis."-".$tk->id_kelas;       ?>"> </td>

                      <?php
                        }
                      ?>

                 
                         

                    <?php
                        echo"</tr>";
                      } 
                      
                ?> 
                    </tr>
                  </table>
                </div>

              <div class="form-group">
            <button type="submit" name="submit" id="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda Yakin Akan Menyimpan Data Ini?')">Simpan</button>
            &nbsp;&nbsp;<button type="reset" name="reset" class="btn btn-primary">Reset</button>
           </div>

</form>



<!--Batas Bawah-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->

       