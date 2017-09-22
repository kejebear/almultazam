<?php 
error_reporting(0);
?>
<!-- Main content -->
<section class="content">
	<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Data Level User</b></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped" border="1">
						<thead>
						<tr>
							<th>No</th>
							<th>Level User</th>
							<th>Keterangan</th>
						</tr>
						</thead>
						<tbody>
							<?php
							foreach ($level_user as $lu) {
								$no++;
								echo "<tr>
										<td>$no</td>
										<td>$lu->nama_level</td>
										<td>$lu->keterangan</td>
									</tr>";
							}
							?>
						</tbody>
				  </table>
				</div>
			</div>
		</div>
    </div><!-- /.box -->

</section><!-- /.content -->
