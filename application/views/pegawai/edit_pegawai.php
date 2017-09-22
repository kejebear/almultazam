<?php $this->load->view('pegawai/pegawai'); 
foreach ($pegawai as $peg){
?> 
<div class="box box-info">
    <div class="box-header with-border"><h3 class="box-title">Edit Data Pegawai</h3></div>
	<form action="<?php echo base_url('pegawai/update_pegawai'); ?>" method="post" class="form-horizontal">
        <div class="col-md-20">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li><a href="#inputpegawai" data-toggle="tab">Data Pegawai</a></li>
					<li><a href="#rpend" data-toggle="tab">Riwayat Pendidikan</a></li>
					<li class="active"><a href="#pengkerja" data-toggle="tab">Pengalaman Bekerja</a></li>
				</ul>
				<div class="tab-content">
					<!-- DATA KARYAWAN -->
					<div class="tab-pane"  id="inputpegawai">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-1">NIP</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='nip' maxlength='16' value="<?php echo $peg->nip; ?>"></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">NUPTK</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='nuptk' maxlength='16' value="<?php echo $peg->nuptk; ?>"></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">NRP</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='nrp' maxlength='30' value="<?php echo $peg->nrp; ?>" readonly></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">No KTP</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='no_ktp' maxlength='30' value="<?php echo $peg->no_ktp; ?>"></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Nama</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='nama' maxlength='16' value="<?php echo $peg->nama; ?>"></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">TTL</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='tmp_lahir' maxlength='16' value="<?php echo $peg->tmp_lhr; ?>">
								<input type="date" class="form-control" name='tgl_lahir' value="<?php echo $peg->tgl_lhr; ?>"></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Jenis Kelamin</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='nuptk' maxlength='16' value="<?php echo $peg->no_ktp; ?>"></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Gol.Darah</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 30%;" name='gol_darah' >
										<option value=''>---Pilih---</option>
										<option value='O−' <?php if ($peg->gol_darah=="O-"){ echo "selected"; } ?>>O−</option>
										<option value='O+' <?php if ($peg->gol_darah=="O+"){ echo "selected"; } ?>>O+</option>
										<option value='A−' <?php if ($peg->gol_darah=="A-"){ echo "selected"; } ?>>A−</option>
										<option value='A+' <?php if ($peg->gol_darah=="A+"){ echo "selected"; } ?>>A+</option>
										<option value='B−' <?php if ($peg->gol_darah=="B-"){ echo "selected"; } ?>>B−</option>
										<option value='B+' <?php if ($peg->gol_darah=="B+"){ echo "selected"; } ?>>B+</option>
										<option value='AB−' <?php if ($peg->gol_darah=="AB-"){ echo "selected"; } ?>>AB−</option>
										<option value='AB+' <?php if ($peg->gol_darah=="AB+"){ echo "selected"; } ?>>AB+</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Alamat</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='alamat' maxlength='50' value='<?php echo $peg->alamat; ?>'></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Desa/Kel</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='desa' value='<?php echo $peg->kel; ?>'></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Kec</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='kec' value='<?php echo $peg->kec; ?>'></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Kab</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='kab' value='<?php echo $peg->kota; ?>'></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Agama</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 30%;" name='agama' >
										<option value=''>---Pilih---</option>
										<option value='Islam' <?php if ($peg->agama=="Islam"){ echo "selected"; } ?>>Islam</option>
										<option value='Kristen Protestan' <?php if ($peg->agama=="Kristen Protestan"){ echo "selected"; } ?>>Kristen Protestan</option>
										<option value='Kristen Katolik' <?php if ($peg->agama=="Kristen Katolik"){ echo "selected"; } ?>>Kristen Katolik</option>
										<option value='Hindu' <?php if ($peg->agama=="Hindu"){ echo "selected"; } ?>>Hindu</option>
										<option value='Budha' <?php if ($peg->agama=="Budha"){ echo "selected"; } ?>>Budha</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Status Perkawinan</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 50%;" name='status_marital' >
										<option value=''>---Pilih---</option>
										<option value='Menikah' <?php if ($peg->st_marital=="Menikah"){ echo "selected"; } ?>>Menikah</option>
										<option value='Belum Menikah' <?php if ($peg->st_marital=="Belum Menikah"){ echo "selected"; } ?>>Belum Menikah</option>
										<option value='Cerai Hidup' <?php if ($peg->st_marital=="Cerai Hidup"){ echo "selected"; } ?>>Cerai Hidup</option>
										<option value='Cerai Mati' <?php if ($peg->st_marital=="Cerai Mati"){ echo "selected"; } ?>>Cerai Mati</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Warga Negara</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='warganegara' maxlength='30' value='<?php echo $peg->warga_negara; ?>' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">No.HP</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='no_hp1' placeholder='No Telp 1' maxlength='13' value='<?php echo $peg->tlp; ?>' >
									<input type="text" class="form-control" name='no_hp2' placeholder='No Telp 2' maxlength='13' >
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Tanggal Masuk</label>
								<div class="col-xs-4"><input type="date" class="form-control" name='tgl_masuk' value='<?php echo $peg->tgl_masuk; ?>'></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Status Aktif</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 40%;" name='status_aktif' >
										<option value=''>---Pilih---</option>
										<option value='Aktif' <?php if ($peg->status_aktf=="Aktif"){ echo "selected"; } ?>>Aktif</option>
										<option value='Tidak Aktif' <?php if ($peg->status_aktf=="Tidak Aktif"){ echo "selected"; } ?>>Tidak Aktif</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Kontrak Kerja</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 50%;" name='status_kary' >
										<option value=''>---Pilih---</option>
										<?php foreach($kontrak as $k_kerja){  ?>
											<option value="<?php echo $k_kerja->id_kontrak; ?>"<?php if ($k_kerja->id_kontrak==$peg->id_kontrak){ echo "selected"; } ?>><?php echo $k_kerja->nama_kontrak; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Penempatan</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 60%;" name='penempatan' >
										<option value=''>---Pilih---</option>
										<?php foreach($penempatan as $tmp){ ?>
											<option value="<?php echo $tmp->id_sekolah; ?>"<?php if ($tmp->id_sekolah==$peg->id_sekolah){ echo "selected"; } ?>><?php echo $tmp->nama; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Jabatan</label>
								<div class="col-xs-4">
								<select class="form-control select2 " style="width: 40%;" name='jab' >
										<option value=''>---Pilih---</option>
										<?php foreach($jabatan as $jab){ ?>
											<option value="<?php echo $jab->id_jabatan; ?>"<?php if ($jab->id_jabatan==$peg->id_jabatan){ echo "selected"; } ?>><?php echo $jab->nama_jabatan; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Pangkat Golongan</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 50%;" name='pangkat' >
										<option value=''>---Pilih---</option>
										<?php foreach($pangkat as $p){ ?>
											<option value="<?php echo $p->id_golongan; ?>"<?php if ($p->id_golongan==$peg->id_golongan){ echo "selected"; } ?>><?php echo $p->golongan." (".$p->pangkat; ?>)</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Email</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='email' maxlength='50' value='<?php echo $peg->email; ?>'></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Pendidikan Terakhir</label>
								<div class="col-xs-5">
									<select class="form-control select2 " style="width: 30%;" name='ting_pend' >
										<option value=''>---Pilih---</option>
										<?php foreach($tingkat_pend as $t_pend){ ?>
											<option value="<?php echo $t_pend->id_tp; ?>"<?php if ($t_pend->id_tp==$peg->pend_akhir){ echo "selected"; } ?>><?php echo $t_pend->nama_tp; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Foto</label>
								<div class="col-xs-4"><img src="<?php echo base_url()."/".$peg->foto;?>"></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Syarat Adm</label>
								<input type="checkbox" name="ktp" value="Ya" <?php if($peg->ktp=='Ya') {echo "checked";} ?>>KTP</input>
								<input type="checkbox" name="kk" value="Ya" <?php if($peg->kk=='Ya') {echo "checked";} ?>>KK</input>
								<input type="checkbox" name="ijazah" value="Ya" <?php if($peg->ijazah=='Ya') {echo "checked";} ?>>Ijazah</input>
								<input type="checkbox" name="skck" value="Ya" <?php if($peg->skck=='Ya') {echo "checked";} ?>>SKCK</input>
								<input type="checkbox" name="ket_dokter" value="Ya" <?php if($peg->ket_dokter=='Ya') {echo "checked";} ?>>Surat Ket. Dokter</input>
								<input type="checkbox" name="rekomendasi_kerja" value="Ya" <?php if($peg->rekomen_kerja=='Ya') {echo "checked";} ?>>Surat Rekomendasi Kerja</input>
								<input type="checkbox" name="sert_keahlian" value="Ya" <?php if($peg->sertifikat_keahlian=='Ya') {echo "checked";} ?>>Sertifikat Keahlian</input>
								<input type="checkbox" name="kartu_kuning" value="Ya" <?php if($peg->kartu_kuning=='Ya') {echo "checked";} ?>>Kartu Kuning</input>
								<input type="checkbox" name="NPWP" value="Ya" <?php if($peg->npwp=='Ya') {echo "checked";} ?>>NPWP</input>
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
											foreach($tingkat_pend as $tpend){ 
												$no++;
												$tp=$tpend->id_tp;
												$data['rpend'] = $this->m_models->getAll("riwayat_pend_peg where nrp='$peg->nrp' and id_tp='$tp'");
												$nm_sekolah = $data['rpend'][0]->sekolah;
												$kota = $data['rpend'][0]->kota;
												$tahun = $data['rpend'][0]->thn_lulus;
												$fakultas = $data['rpend'][0]->fakultas;
												$jurusan = $data['rpend'][0]->jurusan;
													echo "<tr>
														<td>$no</td>
														<td>$tpend->nama_tp</td><input type='hidden' class='form-control' name='jenjang[]' value='$tp'>
														<td><input type='text' class='form-control' name='nm_sekolah$tp' value='$nm_sekolah'></td>
														<td><input type='text' class='form-control' name='kota$tp' value='$kota'></td>
														<td><input type='text' class='form-control' name='thn_lulus$tp' value='$tahun'></td>
														<td><input type='text' class='form-control' name='fakultas$tp' value='$fakultas'></td>
														<td><input type='text' class='form-control' name='jurusan$tp' value='$jurusan'></td>
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
													<td>$n</td><input type='text' class='form-control' name='id_pk$i' value='$peng->id_pk'>
													<td><input type='text' class='form-control' name='periode$i' value='$peng->periode'></td>
													<td><input type='text' class='form-control' name='tmp_kerja$i' value='$peng->tempat'></td>
													<td><input type='text' class='form-control' name='posisi$i' value='$peng->posisi'></td>
												</tr>";
										}
										for($i=1; $i<=5; $i++){ 
											$n++;
											echo "<tr>
													<td>$n</td>
													<td><input type='text' class='form-control' name='periode$i'></td>
													<td><input type='text' class='form-control' name='tmp_kerja$i'></td>
													<td><input type='text' class='form-control' name='posisi$i'></td>
												</tr>";
										}
										?>
								</table>
								<div>
									<button type="submit" class="btn btn-danger">Simpan</button>
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