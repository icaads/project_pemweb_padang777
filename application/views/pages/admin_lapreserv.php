<!DOCTYPE html>
<html>
<head>
	<title> Administrator Website - Laporan Reservasi </title>
	<?php echo $css; ?>
</head>
<body>
	<?php echo $navigation_admin_website; ?>
	<br>
	<div class="container-fluid">
		<div style="border-bottom: 3px solid rgb(218, 55, 72);">
			<p style="text-align: center;"> 
				<font size="7" style="color:rgb(218, 55, 72);"> Laporan Reservasi </font>
				<br>
				<font size="5" color="black"> Administrator Website </font>
			</p>
		</div>
	</div>
	<br>
	<?php
		if($lapreserv==NULL) echo "<p style='text-align: center; font-size:20px;'> Maaf, belum ada reservasi. </p><br>"; 
		else{
	?>
		<div class='container'>
			<table id="tabel_lapreserv" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th> </th>
						<th> ID Reservasi </th>
						<th> Username </th>
						<th> Jumlah Tamu </th>
						<th> Tanggal Reservasi </th>
						<th> ID Meja </th>
						<th> ID Cabang </th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$x=1;
						foreach($lapreserv as $row){
							echo "<tr>";
								echo "<td>" .$x."</td>";
								echo "<td>" .$row['IDReservasi'] ."</td>";
								echo "<td>" .$row['username'] ."</td>";
								echo "<td>" .$row['jumlah_tamu'] ."</td>";
								echo "<td>" .$row['tanggalreservasi'] ."</td>";
								echo "<td>" .$row['IDMeja'] ."</td>";
								echo "<td>" .$row['IDCabang'] ."</td>";
							echo "</tr>";
							$x++;
						}
					?>
				</tbody>
				<tfoot>
					<td> </td>
					<td> ID Reservasi </td>
					<td> Username </td>
					<td> Jumlah Tamu </td>
					<td> Tanggal Reservasi </td>
					<td> ID Meja </td>
					<td> ID Cabang </td>
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