<!DOCTYPE html>
<html>
<head>
	<title> Administrator Website - Informasi Customer </title>
	<?php echo $css; ?>
</head>
<body>
	<?php echo $navigation_admin_website; ?>
	<br>
	<div class="container-fluid">
		<div style="border-bottom: 3px solid rgb(218, 55, 72);">
			<p style="text-align: center;"> 
				<font size="7" style="color:rgb(218, 55, 72);"> Informasi Customer </font>
				<br>
				<font size="5" color="black"> Administrator Website </font>
			</p>
		</div>
	</div>
	<br>
	<?php
		if($infocust==NULL) echo "<p style='text-align: center; font-size:20px;'> Maaf, belum ada customer yang mendaftar. </p><br>"; 
		else{
	?>
		<div class='container'>
			<table id="tabel_infocust" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th> </th>
						<th> Username </th>
						<th> Email </th>
						<th> Nama Depan </th>
						<th> Nama Belakang </th>
						<th> No. Telepon </th>
						<th> Alamat </th>
						<th> Kota </th>
						<th> Kode Pos </th>
						<th> Tanggal Lahir </th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$x=1;
						foreach($infocust as $row){
							echo "<tr>";
								echo "<td>" .$x."</td>";
								echo "<td>" .$row['username'] ."</td>";
								echo "<td>" .$row['Email'] ."</td>";
								echo "<td>" .$row['NamaDepan'] ."</td>";
								echo "<td>" .$row['NamaBelakang'] ."</td>";
								echo "<td>" .$row['NoTlp'] ."</td>";
								echo "<td>" .$row['Alamat'] ."</td>";
								echo "<td>" .$row['Kota'] ."</td>";
								echo "<td>" .$row['KodePos'] ."</td>";
								echo "<td>" .$row['Tanggallahir'] ."</td>";
							echo "</tr>";
							$x++;
						}
					?>
				</tbody>
				<tfoot>
					<td> </td>
					<td> Username </td>
					<td> Email </td>
					<td> Nama Depan </td>
					<td> Nama Belakang </td>
					<td> No. Telepon </td>
					<td> Alamat </td>
					<td> Kota </td>
					<td> Kode Pos </td>
					<td> Tanggal Lahir </td>
				</tfoot>
			</table>
		</div>
		<br><br>
	<?php } ?>
	<?php echo $footer; ?>
	<?php echo $js; ?>
	<?php echo $js_datatable; ?>
</body>
</html>