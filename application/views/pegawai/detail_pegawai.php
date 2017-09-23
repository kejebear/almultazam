<?php $this->load->view('pegawai/pegawai'); 
foreach ($pegawai as $peg){
	?> 
	<div class="box box-info">
		<div class="box-header with-border"><h3 class="box-title">Detail Data Pegawai</h3></div>
		<form action="<?php echo base_url('pegawai/simpan_pegawai'); ?>" method="post" class="form-horizontal">
			<div class="col-md-20">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#inputpegawai" data-toggle="tab">Data Pegawai</a></li>
						<li><a href="#kk" data-toggle="tab">Kartu Keluarga</a></li>
						<li><a href="#rpend" data-toggle="tab">Riwayat Pendidikan</a></li>
						<li><a href="#pengkerja" data-toggle="tab">Pengalaman Bekerja</a></li>
						<li><a href="#idcard" data-toggle="tab">ID Card</a></li>
					</ul>
					<div class="tab-content">
						<!-- DATA KARYAWAN -->
						<div class="tab-pane"  id="inputpegawai">
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-1">NIP</label>
									<div class="col-xs-4"><?php echo $peg->nip; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">NUPTK</label>
									<div class="col-xs-4"><?php echo $peg->nuptk; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">NRP</label>
									<div class="col-xs-4"><?php echo $peg->nrp; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">No KTP</label>
									<div class="col-xs-4"><?php echo $peg->no_ktp; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Nama</label>
									<div class="col-xs-4"><?php echo $peg->nama; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">TTL</label>
									<div class="col-xs-4"><?php echo $peg->tmp_lhr; ?>, <?php echo $peg->tgl_lhr; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Jenis Kelamin</label>
									<div class="col-xs-4"><?php echo $peg->no_ktp; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Gol.Darah</label>
									<div class="col-xs-4"><?php echo $peg->gol_darah; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Alamat</label>
									<div class="col-xs-4"><?php echo $peg->alamat; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Desa/Kel</label>
									<div class="col-xs-4"><?php echo $peg->kel; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Kec</label>
									<div class="col-xs-4"><?php echo $peg->kec; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Kab</label>
									<div class="col-xs-4"><?php echo $peg->kota; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Agama</label>
									<div class="col-xs-4"><?php echo $peg->agama; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Status Perkawinan</label>
									<div class="col-xs-4"><?php echo $peg->st_marital; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Warga Negara</label>
									<div class="col-xs-4"><?php echo $peg->warga_negara; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">No.HP</label>
									<div class="col-xs-4"><?php echo $peg->tlp; ?> , <?php echo $peg->no_hp2; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Tanggal Masuk</label>
									<div class="col-xs-4"><?php echo $peg->tgl_masuk; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Status Aktif</label>
									<div class="col-xs-4"><?php echo $peg->status_aktf; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Status Kontrak</label>
									<div class="col-xs-4"><?php foreach ($kontrak as $kon){ echo $peg->nama_kontrak; }?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Penempatan</label>
									<div class="col-xs-4"><?php foreach ($penempatan as $tmp){ echo $tmp->nama; } ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Jabatan</label>
									<div class="col-xs-4"><?php echo $peg->nama_jabatan; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Pangkat Golongan</label>
									<div class="col-xs-4"><?php foreach ($golongan as $gol) { echo $gol->golongan." (".$gol->pangkat.")"; }?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Email</label>
									<div class="col-xs-4"><?php echo $peg->email; ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Pendidikan Terakhir</label>
									<div class="col-xs-4"><?php foreach ($pend_akhir as $pa) { echo $pa->nama_tp; } ?></div>
								</div>
								<div class="form-group">
									<label class="col-sm-1">Foto</label>
									<div class="col-xs-4"><img src="<?php echo base_url()."/".$peg->foto;?>"></div>
								</div>
							</div>		
						</div>

						<!-- KARTU KELUARGA -->
						<div class="tab-pane" id="kk">
							<div class="box-body">
								<div class="box">
									<div class="box-header with-border">
										<center>
											<h3><b>KARTU KELUARGA</b></h3>
											<h4><b>No. <?php foreach ($kartu_keluarga as $k_keluarga){ echo $k_keluarga->no_kk; }?></b></h4>
										</center>
									</div>
									<div class="box-body no-padding">
										<table class="table table-condensed">
											<tr>
												<td style="width: 40px">Nama Kepala Keluarga</td>
												<td style="width: 10px">: </td>
												<td style="width: 60px"></td>
												<td style="width: 60px"></td>
												<td style="width: 40px">Kecamatan</td>
												<td style="width: 10px">: </td>
												<td style="width: 60px"></td>
											</tr>
											<tr>
												<td style="width: 40px">Alamat</td>
												<td style="width: 10px">: </td>
												<td style="width: 60px"></td>
												<td style="width: 60px"></td>
												<td style="width: 40px">Kabupaten / Kota</td>
												<td style="width: 10px">: </td>
												<td style="width: 60px"></td>
											</tr>
											<tr>
												<td style="width: 40px">RT / RW</td>
												<td style="width: 10px">: </td>
												<td style="width: 60px"></td>
												<td style="width: 60px"></td>
												<td style="width: 40px">Kode Pos</td>
												<td style="width: 10px">: </td>
												<td style="width: 60px"></td>
											</tr>
											<tr>
												<td style="width: 40px">Kelurahan / Desa</td>
												<td style="width: 10px">: </td>
												<td style="width: 60px"></td>
												<td style="width: 60px"></td>
												<td style="width: 40px">Provinsi</td>
												<td style="width: 10px">: </td>
												<td style="width: 60px"></td>
											</tr>
										</table>
									</div>
									<div class="box-body table-responsive no-padding">
										<table class="table table-borderred table-hover">
											<tr>
												<th style="width: 10px" rowspan='2'>No</th>
												<th rowspan='2'>Nama Lengkap</th>
												<th rowspan='2'>NIK</th>
												<th rowspan='2'>Jenis Kelamin</th>
												<th rowspan='2'>Tempat Lahir</th>
												<th rowspan='2'>Tanggal Lahir</th>
												<th rowspan='2'>Agama</th>
												<th rowspan='2'>Pendidikan</th>
												<th rowspan='2'>Pekerjaan</th>
												<th rowspan='2'>Status Pernikahan</th>
												<th rowspan='2'>Status Hubungan</th>
												<th rowspan='2'>Kewarganegaraan</th>
												<th colspan='2'>Dokumen Imigrasi</th>
												<th colspan='2'>Nama Orang Tua</th>
												<th rowspan='2'>Status Keadaan</th>
												<th rowspan='2'>Status Anggota KK</th>
											</tr>
											<tr>
												<th>No Paspor</th>
												<th>No Kitap/Kitas</th>
												<th>Nama Ayah</th>
												<th>Nama Ibu</th>
											</tr>
											<?php foreach ($kartu_keluarga as $kk){ 
												$no++;
												echo "<tr>
												<td>$no</td>
												<td>$kk->nama_lengkap</td>
												<td>$kk->nikk</td>
												<td>$kk->jk</td>
												<td>$kk->tmp_lahir</td>
												<td>$kk->tgl_lahir</td>
												<td>$kk->agama</td>
												<td>$kk->pendidikan</td>
												<td>$kk->pekerjaan</td>
												<td>$kk->status_marital</td>
												<td>$kk->status_hubungan</td>
												<td>$kk->kewarganegaraan</td>
												<td>$kk->no_paspor</td>
												<td>$kk->no_kitap</td>
												<td>$kk->nama_ayah</td>
												<td>$kk->nama_ibu</td>
												<td>$kk->status_keadaan</td>
												<td>$kk->status_anggota_kk</td>
												</tr>";
											}
											?>
										</table>
									</div>
								</div>
							</div>	
						</div>

						<!-- RIWAYAT PENDIDIKAN -->
						<div class="tab-pane" id="rpend">
							<div class="box-body">
								<div class="box">
									<div class="box-body no-padding">
										<table class="table table-condensed">
											<tr>
												<th style="width: 10px">No</th>
												<th>Jenjang</th>
												<th>Nama Sekolah</th>
												<th>Kota</th>
												<th>Thn.Lulus</th>
												<th>Fakultas</th>
												<th>Jurusan</th>
											</tr>
											<?php
											foreach ($pend_akhir as $pend){ 
												$noo++;
												echo "<tr>
												<td>$noo</td>
												<td>$pend->nama_tp</td>
												<td>$pend->sekolah</td>
												<td>$pend->kota</td>
												<td>$pend->thn_lulus</td>
												<td>$pend->fakultas</td>
												<td>$pend->jurusan</td>
												</tr>";
											}
											?>
										</table>
									</div>
								</div>
							</div>
						</div>

						<!-- PENGALAMAN KERJA -->
						<div class="tab-pane" id="pengkerja">
							<div class="box">
								<div class="box-body no-padding">
									<table class="table table-condensed">
										<tr>
											<th style="width: 10px">No</th>
											<th>Periode</th>
											<th>Tempat</th>
											<th>Posisi</th>
										</tr>
										<?php 
										foreach ($pengalaman as $peng){
											$n++;
											echo "<tr>
											<td>$n</td>
											<td>$peng->periode</td>
											<td>$peng->tempat</td>
											<td>$peng->posisi</td>
											</tr>";
										}
										?>
									</table>
								</div>
							</div>
						</div>

						<!-- ID CARD -->
						<div class="tab-pane"  id="idcard">
							<div class="box-body">

								<div class="container-fluid">
									<div class="row">
										<div class="col-md-6">
											<div class="panel panel-primary">
												<div class="panel-heading">Kartu Identitas</div>
												<div class="panel-body">
													<div class="row">
														<div class="col-md-4 center">
															<img src="<?php echo base_url('assets/img/none.jpg');?>" alt="..." class="img-thumbnail">
															<img src="<?php echo site_url();?>/<?php echo $this->uri->segment(1);?>/set_barcode/<?php echo $peg->nrp;?>">
														</div>
														<div class="col-md-8">
															<table class="table">
																<tr>
																	<td>Nama</td>
																	<td>:</td>
																	<td><?php echo $peg->nama;?></td>
																</tr>
																<tr>
																	<td>Tempat/Tgl. Lahir</td>
																	<td>:</td>
																	<td><?php echo $peg->tmp_lhr; ?>, <?php echo $peg->tgl_lhr; ?></td>
																</tr>
																<tr>
																	<td>Alamat</td>
																	<td>:</td>
																	<td><?php echo $peg->alamat; ?> <?php echo $peg->kel; ?> <?php echo $peg->kec; ?> <?php echo $peg->kota; ?></td>
																</tr>
															</table>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>		
						</div>

					</div>
				</div>
			</div>
		</form>
	</div>
	<?php } ?>
