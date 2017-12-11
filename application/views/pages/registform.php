<!DOCTYPE html>
<html>

<head>
	<title>Formulir Pendaftaran</title>
</head>

<body>
	<?php echo $navigation; echo $css; echo $js; echo $captcha_script;?>
	<div class="container">
		<?php echo form_open('Regist/AddUser'); ?>
		<br>
		<h2>Formulir Pendaftaran</h2>
		<div class="form-group">
			<label for="username" class="col-sm-3 control-label">Nama Pengguna</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-user text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'username', 'placeholder'=>'Min. 8 karakter')); ?>
				</div>
				<?php echo form_error('username', '<p class="text-danger">','</p>'); ?>

			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-envelope text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'email', 'placeholder'=>'someone@example.com')); ?>
				</div>
				<?php echo form_error('email', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="firstname" class="col-sm-3 control-label">Nama Depan</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-user text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'namadepan')); ?>
				</div>
				<?php echo form_error('namadepan', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="lastname" class="col-sm-3 control-label">Nama Belakang</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-user text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'namabelakang')); ?>
				</div>
				<?php echo form_error('lastname', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="address" class="col-sm-3 control-label">Alamat</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-map-marker text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'alamat')); ?>
				</div>
				<?php echo form_error('address', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="col-sm-3 control-label">Kota</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-map text-info"></i>
					</div>
					<select name="kota" class="form-control">
						<option>Jakarta</option>
						<option>Bogor</option>
						<option>Depok</option>
						<option>Tangerang</option>
						<option>Bekasi</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="postcode" class="col-sm-3 control-label">Kode Pos</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-envelope-o text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'kodepos', 'placeholder'=>'Maks. 5 digit')); ?>
				</div>
				<?php echo form_error('kodepos', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="phonenumber" class="col-sm-3 control-label">No. Telepon</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-phone text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'notlp')); ?>
				</div>
				<?php echo form_error('notlp', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-3 control-label">Kata Sandi</label>
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
			<label for="repassword" class="col-sm-3 control-label">Ulang Kata sandi</label>
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
			<label for="birthdate" class="col-sm-3 control-label">Tanggal Lahir</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-calendar text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'date', 'class'=>'form-control','name'=>'tanggallahir')); ?>
				</div>
				<?php echo form_error('tanggallahir', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Syarat dan Ketentuan</label>
			<div class="col-sm-9">
				<div style="border:1px solid #e5e5e5; height:200px; overflow:auto; padding:10px;">
					<p> Selamat datang di www.padang777.com. Syarat & ketentuan yang ditetapkan di bawah ini mengatur pemakaian jasa yang ditawarkan
						oleh PT. padang777 terkait penggunaan situs www.padang777.com. Pengguna disarankan membaca dengan seksama karena dapat
						berdampak kepada hak dan kewajiban Pengguna di bawah hukum. Dengan mendaftar dan/atau menggunakan situs www.padang777.com,
						maka pengguna dianggap telah membaca, mengerti, memahami dan menyutujui semua isi dalam Syarat & ketentuan. Syarat
						& ketentuan ini merupakan bentuk kesepakatan yang dituangkan dalam sebuah perjanjian yang sah antara Pengguna dengan
						PT.padang777. Jika pengguna tidak menyetujui salah satu, sebagian, atau seluruh isi Syarat & ketentuan, maka pengguna
						tidak diperkenankan menggunakan layanan di www.padang777.com.</p>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-9 col-sm-offset-3">
				<div class="checkbox">
					<?php echo form_checkbox('termcondition','accept',TRUE); ?> &nbsp;
					<label>Saya Setuju</label>
				</div>
				<div class="g-recaptcha" data-sitekey="6LfqFTsUAAAAANToersUrA0SAVDDTcMz7heUmGvy" style="margin-botton:10px;"></div>
				<?php echo form_error('check', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-9 col-sm-offset-3">
				<button type="submit" class="btn btn-primary btn-block">Daftar</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
	<?php echo $footer; ?>
</body>

</html>
