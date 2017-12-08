<?php echo $navigation; echo $js; echo $css;?>
<br>
<br>
<div class="container">
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
							<div class="panel-body">
						<p class="text-danger">Username dan Password tidak sesuai!</p>
					</div>
							<div class="help-block text-left">
								<a href="">Forget the password ?</a>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Sign in</button>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Keep me logged-in
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
