<!DOCTYPE html>
<html>

<head>
	<title>Formulir Pemesanan Meja</title>
</head>

<body>

	<div class="container">
		<?php echo $js; echo $css; echo $navigation_login;  ?>
		<?php echo form_open(); ?>
		<br>
		<h2 class="text-center">Formulir Pemesanan Meja</h2>
		<div class="form-group">

			<label for="waktu_datang" class="col-sm-3 control-label">Waktu Kedatangan</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-calendar text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'date', 'class'=>'form-control','name'=>'waktu_datang')); ?>
				</div>
				<?php echo form_error('waktu_datang', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_tamu" class="col-sm-3 control-label">Jumlah Tamu</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-users text-info"></i>
					</div>
					<select name="jumlah_tamu" class="form-control">
						<option>2-4 orang</option>
						<option>5-8 orang</option>
						<option>9-12 orang</option>
						<option>>12 orang</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="pilih_meja" class="col-sm-3 control-label">Pilihan Meja</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-spoon text-info"></i>
					</div>
					<select name="meja_cb1" class="form-control">
						<option>A1</option>
						<option>A2</option>
						<option>A3</option>
						<option>A4</option>
						<option>A5</option>
						<option>B1</option>
						<option>B2</option>
						<option>B3</option>
						<option>B4</option>
					</select>
				</div>
			</div>
		</div>
		<br>
		<br>
		<h4>Data Pemesan</h4>
		<hr/>
		<div class="form-group">
			<label for="nama_pemesan" class="col-sm-3 control-label">Nama Pemesan</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-user text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'nama_pemesan')); ?>
				</div>
				<?php echo form_error('nama_pemesan', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="alamat" class="col-sm-3 control-label">Alamat</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-map-marker text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'alamat')); ?>
				</div>
				<?php echo form_error('alamat', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="notelp" class="col-sm-3 control-label">No. Telepon</label>
			<div class="col-sm-9">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-phone text-info"></i>
					</div>
					<?php echo form_input(array('type'=>'text', 'class'=>'form-control','name'=>'notelp')); ?>
				</div>
				<?php echo form_error('notelp', '<p class="text-danger">','</p>'); ?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-9 col-sm-offset-3">
				<button type="submit" class="btn btn-primary btn-block">Daftar</button>
				<button type="submit" class="btn btn-secondary btn-block">Batal</button>
			</div>
		</div>
	</div>
	<?php echo $footer; ?>
</body>

</html>