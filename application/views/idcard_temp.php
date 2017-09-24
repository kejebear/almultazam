<!DOCTYPE html>
<html>
<head>
	<title>KARTU IDENTITAS</title>
	<style type="text/css">
	html,body{
		margin:0;
		padding:0;
		font-size :10px;
	}

	#outtable{
		border:1px solid #e3e3e3;
		width:350px;
		border-radius: 5px;
	}

	.short{
		width: 50px;
	}

	.normal{
		width: 150px;
	}
	.padd{
		padding: 20px 0px 20px 0px;
	}
	.pad-normal{
		padding:10px;
	}
	table{
		border-collapse: collapse;
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		color:#5E5B5C;
	}

	thead th{
		text-align: left;

		background: #337AB7;
		color : #FFFFFF;
	}

	tbody td{
		padding:5px;
	}
	b{
		font-size: 14px;
	}
//*
	tbody tr:nth-child(even){
		background: #F6F5FA;
	}

	tbody tr:hover{
		background: #EAE9F5
	}*/
</style>
</head>
<body>
	<div id="outtable">
		<table>
			<thead>
				<tr>
					<th class="pad-normal" colspan="2">KARTU IDENTITAS <br/><b>YPI AL-MULTAZAM</b></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pegawai as $peg) {?>
				<tr >
					<td align="center" class="padd">
						<img width="85px" src="assets/img/none.jpg" alt="..." class="img-thumbnail"><br/>
						<img width="100px" src="barcode/<?php echo $peg->nrp.".png";?>">
					</td>
					<td class="padd">
						<table>
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
								<td valign="top">Alamat</td>
								<td valign="top">:</td>
								<td><?php echo $peg->alamat; ?> <?php echo $peg->kel; ?> <?php echo $peg->kec; ?> <?php echo $peg->kota; ?></td>
							</tr>
						</table>
						<?php } ?>
					</td>
				</tr>
			</tbody>
		</table>
</div>
</body>
</html>