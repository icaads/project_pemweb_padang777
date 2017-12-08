<?php echo $navigation; echo $js; echo $css;?>
<br>
<br>
<div class="container">
	<p class="pb-4" style="text-align:center">Silahkan masukan username dan password untuk melakukan transaksi atau lakukan login sebagai tamu</p>
</div>

<div class="container">
	<div class="card border-dark rounded-0">

		<div class="card-header p-0">
			<div class="bg-dark text-white text-center py-2">
				<h3 style="color:white">
					<i class="fa fa-user-circle"></i> Login </h3>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<br>
					<form class="form" role="form" method="post" action="<?php echo base_url('login/login')?>" accept-charset="UTF-8" id="login-nav">
						<div class="form-group">
							<label class="sr-only" for="Username">Username</label>
							<input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
						</div>
						<div class="form-group">
							<label class="sr-only" for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
							<br>
							<div class="help-block text-left">
								<a href="">Forget the password ?</a>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Sign in</button>
						</div>

					</form>
					
					<button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal_guest">Sebagai Tamu</button>
					<br>
					<br>
					<div id="modal_guest" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									
									<h4 class="modal-title">Data Tamu</h4>
								</div>
                                <?php echo form_open('Guest/cek'); ?>
								<?php echo validation_errors(); ?>								
								<div class="modal-body">
									<div class="form-group">
										<label for="name" class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-12">
											<div class="input-group">
												<div class="input-group-addon bg-light">
													<i class="fa fa-user text-info"></i>
												</div>
												<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'nama')); ?>
											</div>
											<?php echo form_error('nama', '<p class="text-danger">','</p>'); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="nohp" class="col-sm-3 control-label">Nomor Telfon</label>
										<div class="col-sm-12">
											<div class="input-group">
												<div class="input-group-addon bg-light">
													<i class="fa fa-mobile-phone text-info"></i>
												</div>
												<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'nohp')); ?>
											</div>
											<?php echo form_error('nohp', '<p class="text-danger">','</p>'); ?>
										</div>
									</div>

									<div class="form-group">
										<label for="alamat" class="col-sm-3 control-label">Alamat</label>
										<div class="col-sm-12">
											<div class="input-group">
												<div class="input-group-addon bg-light">
													<i class="fa fa-location-arrow text-info"></i>
												</div>
												<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'alamat')); ?>
											</div>
											<?php echo form_error('alamat', '<p class="text-danger">','</p>'); ?>
										</div>
									</div>

								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary btn-block">Lanjutkan</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
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
<?php echo $footer ;
echo $modal_script;?>
