<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/avatar5.png') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('nama_pengguna'); ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_URL()?>admin/jenjang"><i class="fa fa-circle-o"></i> Jenjang</a></li>
                    <li><a href="<?php echo base_URL()?>admin/jabatan"><i class="fa fa-circle-o"></i> Jabatan</a></li>
                    <li><a href="<?php echo base_URL()?>admin/tingpend"><i class="fa fa-circle-o"></i> Tingkat Pendidikan</a></li>
                    <li><a href="<?php echo base_URL()?>admin/golongan"><i class="fa fa-circle-o"></i> Golongan</a></li> 
                    <?php /*<li><a href="<?php //echo base_URL()?>admin/kontrak_kerja"><i class="fa fa-circle-o"></i> Kontrak Kerja</a></li> 
                    <li><a href="<?php echo //base_URL()?>admin/ruangan"><i class="fa fa-circle-o"></i> Ruangan</a></li> */ ?>
                    <li><a href="<?php echo base_URL()?>admin/thn_ajar"><i class="fa fa-circle-o"></i> Tahun Ajaran</a></li>
                    <li><a href="<?php echo base_URL()?>admin/level_user"><i class="fa fa-circle-o"></i> Level User</a></li>
					<li><a href="<?php echo base_url()?>kelas/program_studi"><i class="fa fa-circle-o"></i> Program Studi</a></li>
					<li><a href="<?php echo base_url()?>kelas/tingkatan_kelas"><i class="fa fa-circle-o"></i> Tingkatan Kelas</a></li>
					<li><a href="<?php echo base_url()?>kelas/nama_kelas"><i class="fa fa-circle-o"></i> Kelas</a></li>
					<li><a href="<?php echo base_url()?>master/matapelajaran"><i class="fa fa-circle-o"></i> Mata Pelajaran</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i><span>Pengelolaan Pegawai</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_URL()?>pegawai/pegawai"><i class="fa fa-circle-o"></i> Pengelolaan Pegawai</a></li>
                    <li><a href="<?php echo base_URL()?>pegawai/mutasi"><i class="fa fa-circle-o"></i> Mutasi Pegawai</a></li>
                    <li><a href="<?php echo base_URL()?>pegawai/resign"><i class="fa fa-circle-o"></i> Resign Pegawai</a></li>
                    <li><a href="<?php echo base_URL()?>pegawai/pelatihan"><i class="fa fa-circle-o"></i> Pengembangan Skill</a></li>
                </ul>
            </li> 
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-check-square-o"></i><span>Absensi</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_URL()?>absensi/data_absensi"><i class="fa fa-circle-o"></i> Data Absen</a></li>
                    <li><a href="<?php echo base_URL()?>absensi/import_absensi"><i class="fa fa-circle-o"></i> Import Data</a></li>
                </ul>
            </li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-bank"></i> <span>Sekolah</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url()?>sekolah/profil_sekolah"><i class="fa fa-circle-o"></i>Profil Sekolah</a></li>
				</ul>
            </li>
            <li class="treeview">
				<a href="#">
					<i class="fa fa-users"></i> <span>Peserta Didik</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url()?>siswa/buku_induk"><i class="fa fa-circle-o"></i>Buku Induk Siswa</a></li>
					<li><a href="<?php echo base_url()?>kelas/pembagian_kelas"><i class="fa fa-circle-o"></i>Pembagian Kelas</a></li>
				    <li><a href="<?php echo base_url()?>kelas/rombongan_belajar"><i class="fa fa-circle-o"></i>Rombongan Belajar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt"></i><span>Personal Activity</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_URL()?>personal/odoj"><i class="fa fa-circle-o"></i> ODOJ</a></li>
                    <li><a href="<?php echo base_URL()?>personal/htb"><i class="fa fa-circle-o"></i> Halaqoh Tarbiyah</a></li>
                    <li><a href="<?php echo base_URL()?>personal/myr"><i class="fa fa-circle-o"></i> Mutaba’ah yaumiyah Ramadhan</a></li>
                    <li><a href="<?php echo base_URL()?>personal/mha"><i class="fa fa-circle-o"></i> Mutaba’ah Hafalan Al-Qur’an</a></li>
                </ul>
            </li> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i><span>Surat Al-Qur’an</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_URL()?>alquran/surat_alquran"><i class="fa fa-circle-o"></i> Surat Al-Qur’an</a></li>
                    <li><a href="<?php echo base_URL()?>alquran/alquran"><i class="fa fa-circle-o"></i> Al-Qur’an</a></li>
                </ul>
            </li> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i><span>KBM</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_URL()?>jadwal/jadwal_mapel"><i class="fa fa-circle-o"></i>Jadwal Pelajaran</a></li>
                   
                </ul>
            </li>
        </ul>
		<!--main menu -->    
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">