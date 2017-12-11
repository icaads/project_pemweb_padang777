<html>

<head>
	<title>Berhasil Daftar</title>
</head>

<body>
	<?php echo $navigation; echo $js; echo $css;?>
	<br>
	<br>
	<div class="container">
		<h2 class="h1 m-0" style="text-align:center">Selamat Anda Telah Berhasil Mendaftar !!</h2>
		<p class="pb-4" style="text-align:center">Silahkan masukan nama pengguna dan kata sandi untuk melakukan transaksi</p>
	</div>

	<div class="container">
		<div class="card border-dark rounded-0">

			<div class="card-header p-0">
				<div class="bg-dark text-white text-center py-2">
					<h3 style="color:white">
						<i class="fa fa-user-circle"></i> Masuk </h3>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<br>
						<form class="form" role="form" method="post" action="<?php echo base_url('login/login')?>" accept-charset="UTF-8" id="login-nav">
							<div class="form-group">
								<label class="sr-only" for="Username">Nama Pengguna</label>
								<input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
							</div>
							<div class="form-group">
								<label class="sr-only" for="password">Kata Sandi</label>
								<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
								<br>
								<div class="help-block text-left">
									<a href="">Lupa kata sandi?</a>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Masuk</button>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Biarkan saya tetap masuk
								</label>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php echo $footer ?>
</body>

</html>