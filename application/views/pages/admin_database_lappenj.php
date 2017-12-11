<!DOCTYPE html>
<html>
<head>
	<title> Administrator Database - Laporan Penjualan </title>
	<?php echo $css; ?>
</head>
<body>
	<?php echo $navigation_admin_database; ?>
	<br>
	<div class="container-fluid">
		<div style="border-bottom: 3px solid rgb(218, 55, 72);">
			<p style="text-align: center;"> 
				<font size="7" style="color:rgb(218, 55, 72);"> Laporan Penjualan </font>
				<br>
				<font size="5" color="black"> Administrator Database </font>
			</p>
		</div>
	</div>
	<br>
	<?php
		if($lappenj==NULL) echo "<p style='text-align: center; font-size:20px;'> Maaf, belum ada transaksi. </p><br>"; 
		else{
	?>
		<div class='container'>
			<table id="tabel_lappenj" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th> </th>
						<th> IDTransaksi </th>
						<th> IDCart </th>
						<th> TanggalTransaksi </th>
						<th> JumlahTransaksi </th>
						<th> Status </th>
						<th> JenisPembayaran </th>
						<th> IDKurir </th>
						<th> IDCabang </th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$x=1;
						foreach($lappenj as $row){
							echo "<tr>";
								echo "<td>" .$x."</td>";
								echo "<td>" .$row['IDTransaksi'] ."</td>";
								echo "<td>" .$row['IDCart'] ."</td>";
								echo "<td>" .$row['TanggalTransaksi'] ."</td>";
								echo "<td>" .$row['JumlahTransaksi'] ."</td>";
								echo "<td>" .$row['Status'] ."</td>";
								echo "<td>" .$row['JenisPembayaran'] ."</td>";
								echo "<td>" .$row['IDKurir'] ."</td>";
								echo "<td>" .$row['IDCabang'] ."</td>";
							echo "</tr>";
							$x++;
						}
					?>
				</tbody>
				<tfoot>
					<td> </td>
					<td> IDTransaksi </td>
					<td> IDCart </td>
					<td> TanggalTransaksi </td>
					<td> JumlahTransaksi </td>
					<td> Status </td>
					<td> JenisPembayaran </td>
					<td> IDKurir </td>
					<td> IDCabang </td>
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