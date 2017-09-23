<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  <style type="text/css">
  html,body{
  	margin:0;
  	padding:0;
  }

    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:600px;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
      background: #337AB7;
      color : #FFFFFF;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
	  			<th class="short">KARTU IDENTITAS</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($users as $user): ?>
	  		  <tr>
	  			<td><?php echo $no; ?></td>
	  			<td><?php echo $user['firstname']; ?></td>
	  			<td><?php echo $user['lastname']; ?></td>
	  			<td><?php echo $user['email']; ?></td>
	  		  </tr>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>
	  	</tbody>
	  </table>

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
</body>
</html>