<!DOCTYPE html>
<html>
	<head>
		<title>Profil Pengguna</title>
	</head>
	<body>
		<?php
			$password_lama = $semua['Password'];
			echo $js;
			echo $css;
			echo $profile_script;
			echo $navigation;
		?>
		<br><br><br>
		<div class="container">
			<div class="col-sm-6 pull-left" align="left">
				<h1>Profil Pengguna</h1>
			</div>
			<div class="col-sm-6 pull-right" align="right">
				<a href="<?php echo base_url('Home/login');?>"><i id="back" class="fa fa-arrow-circle-left text-info">&nbsp;&nbsp;Kembali</i></a>
				<br>
			</div>
			<br><br>
			<div class="toppad">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $semua['NamaDepan'].' '.$semua['NamaBelakang']; ?></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class=" col-md-7 col-lg-13 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td>E-Mail</td>
											<td><?php echo $semua['Email']; ?></td>
										</tr>
										<tr>
											<td>Nama Pengguna</td>
											<td><?php  echo $semua['username'];?></td>
										</tr>
										<tr>
											<td>Nomor Telepon</td>
											<td><?php  echo $semua['NoTlp'];?></td>
										</tr>
										<tr>
											<td>Tanggal Lahir</td>
											<td><?php  echo $semua['Tanggallahir'];?></td>
										</tr>
										<tr>
											<td>Alamat</td>
											<td><?php echo $semua['Alamat']; ?><br><?php echo $semua['Kota']; ?><br><?php echo $semua['KodePos']; ?></td>
										</tr>
									</tbody>
								</table>
								<a href="<?php echo base_url('Profile/gantipassword'); ?>" class="btn btn-primary">Ganti Password</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn btn-primary">Isi Padang Cash</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<?php
			echo $footer;
		?>
	</body>
</html>