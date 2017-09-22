<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Import Data Absen</b></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<form action="<?php echo base_url();?>excel/upload/" method="post" enctype="multipart/form-data">
						<div class="form-group">
	                      <label for="exampleInputFile">Input file</label>
	                      <input type="file" id="exampleInputFile" name="file"/>
	                      <p class="help-block">Type file : xls, xlsx atau csv</p>
	                    </div>			
						<div class="box-footer">
	                    	<button type="submit" class="btn btn-primary">Upload file</button>
	                  	</div>	 
					</form>
				</div>
			</div>
		</div>
    </div>