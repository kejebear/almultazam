     
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
            <h3 class="box-title"><b>Data Log Absensi</b></h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped" id="mytable"> 
                <thead>
                    <tr>
                        <th width="80px">No</th>
                        <th>NRP</th>
                        <th>Nama Karyawan</th>
                        <th>Tanggal</th>
                        <th>Scan Masuk</th>
                        <th>Scan Pulang</th>
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
                    ajax: {"url": "http://demo2.berkahglobalbusiness.co.id/absensi/get_absensi", "type": "POST"},

                    columns: [
                        {
                            "data": "absensi_id",
                            "orderable": false
                        },
                        {"data": "nrp"},
                        {"data": "nama"},
                        {"data": "tanggal"},
                        {"data": "masuk"},
                        {"data": "pulang"}
                    ],
                    order: [[1, 'asc']],
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




