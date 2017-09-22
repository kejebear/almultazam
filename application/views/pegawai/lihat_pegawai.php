<?php $this->load->view('pegawai/pegawai'); ?>
<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Data Pegawai</b></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="box">
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-borderred table-hover" rules='all'>
						<tr>
							<th>No</th>
							<th>NRP</th>
							<th>No KTP/NIK</th>
							<th>Nama</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Jenis Kelamin</th>
							<th>Tanggal Masuk</th>
							<th>Jabatan</th>
							<th>Telp</th>
							<th colspan='2'>Detail</th>
						</tr>
							<?php
							$no_link = $this->uri->segment(3); 
							if ($no_link==""){
								$no=0;
							} else {
								$no=($no_link*10)-(10);
							}
							foreach ($pegawai as $peg){
								$id_jabatan=$peg->id_jabatan;
								$no++;
								echo "<tr>
										<td>$no</td>
										<td>$peg->nrp</td>
										<td>$peg->no_ktp</td>
										<td>$peg->nama</td>
										<td>$peg->tmp_lhr</td>
										<td>$peg->tgl_lhr</td>
										<td>$peg->jk</td>
										<td>$peg->tgl_masuk</td>
										<td>$peg->nama_jabatan</td>
										<td>$peg->tlp</td>
										<td><a href='".base_url('pegawai/detail_pegawai')."/$peg->nrp' ><i class='fa fa-search-plus'></a></td>
										<td><a href='".base_url('pegawai/edit_pegawai')."/$peg->nrp' ><i class='fa fa-edit'></a></td>
									</tr>";
							}
							?>
				  </table>
				  <?= $link; ?>
				</div>
			</div>
		</div>
    </div>














<?php
/*


    <?php $this->load->view('pegawai/pegawai'); ?>
    <style>
        .dataTables_wrapper {
            min-height: 500px
        }
            
        .dataTables_processing {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            margin-left: -50%;
            margin-top: -25px;
            padding-top: 20px;
            text-align: center;
            font-size: 1.2em;
            color:grey;
        }
    </style>        

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Data Pegawai</b></h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped" id="mytable"> 
                <thead>
                    <tr>
                       <th>No</th>
						<th>NRP</th>
						<th>No KTP/NIK</th>
						<th>Nama</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal Masuk</th>
						<th>Penempatan</th>
						<th>Jabatan</th>
						<th>Telp</th>
						<th colspan='2'>Detail</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
        
        
    <!--    <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>" ></script> -->
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>" ></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "<?php echo base_URL()?>/pegawai/get_pegawai", "type": "POST"},

                    columns: [
                        {
                            "data": "nrp",
                            "orderable": false
                        },
                        {"data": "nrp"},
                        {"data": "no_ktp"},
                        {"data": "nama"},
                        {"data": "tmp_lhr"},
                        {"data": "tgl_lhr"},
                        {"data": "jk"},
                        {"data": "tgl_masuk"}, 
                        {"data": "nm_sekolah"}, 
                        {"data": "nama_jabatan"},
                        {"data": "tlp"},
                        {"data": "view"}
                    ],
                    order: [[3, 'asc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>


        ?>


        */