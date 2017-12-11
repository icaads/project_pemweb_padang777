<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<?php echo $css;?>
	<div class="container">
		<?php echo form_open('Profile/gantipasswordexe'); ?>
		<br>
		<h2>Ganti Kata Sandi</h2>
		<div class="form-group">
			<label for="password" class="col-sm-3 control-label">Kata Sandi Lama</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-lock text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'password', 'class'=>'form-control','name'=>'passwordlama', 'placeholder'=>'Min. 8 karakter')); ?>
				</div>
				<?php echo form_error('password', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-3 control-label">Kata Sandi Baru</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-lock text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'password', 'class'=>'form-control','name'=>'password', 'placeholder'=>'Min. 8 karakter')); ?>
				</div>
				<?php echo form_error('password', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="repassword" class="col-sm-3 control-label">Ulang Kata sandi Baru</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-lock text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'password', 'class'=>'form-control','name'=>'repassword', 'placeholder'=>'Min. 8 karakter')); ?>
				</div>
				<?php echo form_error('repassword', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-9 col-sm-offset-3">
				<button type="submit" class="btn btn-primary btn-block">Ganti Kata Sandi</button>
			</div>
		</div>
		<?php echo $this->session->flashdata('msg'); ?>
		<?php echo form_close(); ?>
	</div>
	<?php echo $footer; ?>
	<?php  echo $js; echo $navigation_login?>
</body>

</html>