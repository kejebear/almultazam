<?php $this->load->view('pegawai/pegawai');?>
<div class="box box-info">
    <div class="box-header with-border"><h3 class="box-title">Input Data Pegawai</h3></div>
	<form action="<?php echo base_url('pegawai/simpan_pegawai'); ?>" method="post" class="form-horizontal">
        <div class="col-md-20">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li><a href="#inputpegawai" data-toggle="tab">Data Pegawai</a></li>
					<li><a href="#kk" data-toggle="tab">Kartu Keluarga</a></li>
					<li><a href="#rpend" data-toggle="tab">Riwayat Pendidikan</a></li>
					<li class="active"><a href="#pengkerja" data-toggle="tab">Pengalaman Bekerja</a></li>
				</ul>
				<div class="tab-content">
					<!-- DATA KARYAWAN -->
					<div class="tab-pane"  id="inputpegawai">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-1">NIP</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='nip' value='<?php echo $nrp; ?>' maxlength='16' readonly></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">NUPTK</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='nuptk' maxlength='16'></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">NRP</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='nrp' maxlength='16' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">No KTP</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='no_ktp' maxlength='30' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Nama</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='nama' maxlength='30' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">TTL</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='tmp_lahir' maxlength='30' placeholder='Tempat' ></div>
								<div class="col-xs-4"><input type="date" class="form-control" name='tgl_lahir' placeholder='Tanggal Lahir' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Jenis Kelamin</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 40%;" name='jk' >
										<option value=''>---Pilih---</option>
										<option value='Laki-laki'>Laki-laki</option>
										<option value='Perempuan'>Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Gol.Darah</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 30%;" name='gol_darah' >
										<option value=''>---Pilih---</option>
										<option value='O−'>O−</option>
										<option value='O+'>O+</option>
										<option value='A−'>A−</option>
										<option value='A+'>A+</option>
										<option value='B−'>B−</option>
										<option value='B+'>B+</option>
										<option value='AB−'>AB−</option>
										<option value='AB+'>AB+</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Alamat</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='alamat' maxlength='50' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2  control-label">Desa/Kel</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='desa' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2  control-label">Kec</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='kec' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2  control-label">Kab</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='kab' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Agama</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 30%;" name='agama' >
										<option value=''>---Pilih---</option>
										<option value='Islam'>Islam</option>
										<option value='Kristen Protestan'>Kristen Protestan</option>
										<option value='Kristen Katolik'>Kristen Katolik</option>
										<option value='Hindu'>Hindu</option>
										<option value='Budha'>Budha</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Status Pernikahan</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 30%;" name='status_marital' >
										<option value=''>---Pilih---</option>
										<option value='Menikah'>Menikah</option>
										<option value='Belum Menikah'>Belum Menikah</option>
										<option value='Cerai Hidup'>Cerai Hidup</option>
										<option value='Cerai Mati'>Cerai Mati</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Warga Negara</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='warganegara' maxlength='30' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">No.Telp</label>
								<div class="col-xs-4">
									<input type="text" class="form-control" name='no_hp1' placeholder='No Telp 1' maxlength='13' >
									<input type="text" class="form-control" name='no_hp2' placeholder='No Telp 2' maxlength='13' >
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Tanggal Masuk</label>
								<div class="col-xs-4"><input type="date" class="form-control" name='tgl_masuk' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Status Aktif</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 40%;" name='status_aktif' >
										<option value=''>---Pilih---</option>
										<option value='Aktif'>Aktif</option>
										<option value='Tidak Aktif'>Tidak Aktif</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Kontrak Kerja</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 40%;" name='status_kary' >
										<option value=''>---Pilih---</option>
										<?php
										foreach($kontrak_kerja as $k_kerja){ 
											echo '<option value="'.$k_kerja->id_kontrak.'">'.$k_kerja->nama_kontrak.'</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Penempatan</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 40%;" name='penempatan' >
										<option value=''>---Pilih---</option>
										<?php
										foreach($penempatan as $tmp){ 
											echo '<option value="'.$tmp->id_sekolah.'">'.$tmp->nama.'</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Jabatan</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 40%;" name='jab' >
										<option value=''>---Pilih---</option>
										<?php
										foreach($jabatan as $jab){ 
											echo '<option value="'.$jab->id_jabatan.'">'.$jab->nama_jabatan.'</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Pangkat Golongan</label>
								<div class="col-xs-4">
									<select class="form-control select2 " style="width: 50%;" name='pangkat' >
										<option value=''>---Pilih---</option>
										<?php
										foreach($pangkat as $p){ 
											echo '<option value="'.$p->id_golongan.'">'.$p->golongan.' ('.$p->pangkat.')</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Email</label>
								<div class="col-xs-4"><input type="text" class="form-control" name='email' maxlength='50' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Foto</label>
								<div class="col-xs-4"><input type="file" class="form-control" name='foto' maxlength='30' ></div>
							</div>
							<div class="form-group">
								<label class="col-sm-1">Syarat Adm</label>
								<input type="checkbox" name="ktp" value="Ya">KTP</input>
								<input type="checkbox" name="kk" value="Ya">KK</input>
								<input type="checkbox" name="ijazah" value="Ya">Ijazah</input>
								<input type="checkbox" name="skck" value="Ya">SKCK</input>
								<input type="checkbox" name="ket_dokter" value="Ya">Surat Ket. Dokter</input>
								<input type="checkbox" name="rekomendasi_kerja" value="Ya">Surat Rekomendasi Kerja</input>
								<input type="checkbox" name="sert_keahlian" value="Ya">Sertifikat Keahlian</input>
								<input type="checkbox" name="kartu_kuning" value="Ya">Kartu Kuning</input>
								<input type="checkbox" name="NPWP" value="Ya">NPWP</input>
							</div>
						</div>		
					</div>
					
					
					<!-- KARTU KELUARGA -->
					<div class="tab-pane" id="kk">
						<?php $this->load->view('pegawai/input_kk'); ?>
					</div>
					
					<!-- PENDIDIKAN TERAKHIR -->
					<div class="tab-pane" id="rpend">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-1">Pendidikan Terakhir</label>
								<div class="col-xs-5">
									<select class="form-control select2 " style="width: 30%;" name='ting_pend' >
										<option value=''>---Pilih---</option>
										<?php
										foreach($tingkat_pend as $t_pend){ 
											echo '<option value="'.$t_pend->id_tp.'">'.$t_pend->nama_tp.'</option>';
										}
										?>
									</select>
								</div>
							</div>
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
												echo "<tr>
														<td>$no</td>
														<td>$tpend->nama_tp</td><input type='hidden' class='form-control' name='jenjang[]' value='$tp'>
														<td><input type='text' class='form-control' name='nm_sekolah$tp'></td>
														<td><input type='text' class='form-control' name='kota$tp'></td>
														<td><input type='text' class='form-control' name='thn_lulus$tp'></td>
														<td><input type='text' class='form-control' name='fakultas$tp'></td>
														<td><input type='text' class='form-control' name='jurusan$tp'></td>
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
										for($i=1; $i<=5; $i++){ 
											$n++;
											$tp=$tpend->nama_tp;
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
