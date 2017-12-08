<!DOCTYPE html>
<html>

<head>
	<title>Formulir Pemesanan Meja</title>
</head>

<body>
	<?php echo $js;echo $modalcss; echo $css;  ?>
	<div class="container">
		<?php
			if($this->session->userdata('status')=='member'){
				echo $navigation_login;
			}
			else {
				echo $navbar_guest;
				
			}
			
		?>
		
			<?php echo form_open('reservasi/pesan'); ?>
			<br>
			<br>
			<br>

			<h2 class="text-center">Formulir Pemesanan Meja</h2>
			<br>
			<br>
			<div class=row>
				<div class="col-lg-6 mb-4">
					<div class="card border-dark rounded-0">

						<div class="card-header p-0">
							<div class="bg-dark text-white text-center py-2">
								<h3 style="color:white">
									<i class="fa fa-spoon"></i> Reservasi:</h3>
							</div>
						</div>
						<div class="form-group">

							<label for="waktu_datang" class="col-sm-4 control-label">Waktu Kedatangan</label>
							<div class="col-sm-12">
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
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-btn">
										<button type="button" class="quantity-left-minus btn btn-info btn-number" data-type="minus" data-field="">
											<span class="fa fa-minus"></span>
										</button>
									</span>
									<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="1" min="1" max="100">
									<span class="input-group-btn">
										<button type="button" class="quantity-right-plus btn btn-info btn-number" data-type="plus" data-field="">
											<span class="fa fa-plus"></span>
										</button>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="pilih_meja" class="col-sm-3 control-label">Pilihan Meja</label>
							<div class="col-sm-12">
								<div class="input-group">
									<div class="input-group-addon bg-light">
										<i class="fa fa-spoon text-info"></i>
									</div>
									<select multiple class="form-control">
										<?php foreach($meja as $row){ ?>
										<option>
											<?php echo $row['LokasiMeja'];?>
										</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<label for="pilih_meja" class="col-sm-12 control-label">Tekan ctrl untuk memilih lebih dari 1</label>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary btn-xs" style="width:40%">Submit</button>
						</div>
						<br>
					</div>
					<br>
					<br>
					<?php echo form_close(); ?>
				</div>
				<div>
					<h2 class="text-center">Denah Lokasi Meja</h2>
					<?php
						if($Cabang != NULL){ ?>
						<img id="gambar" src=" <?php echo base_url('');?><?php echo $Cabang[0]['LinkDenah']?>" style="width:500px;height:400px;">
						<?php }
						?>
						
						<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="denah">

  <!-- Modal Caption (Image Text) -->
  <div id="caption">apa</div>
</div>
				</div>

			</div>


	</div>
	<br>
	<br>

	<?php echo $footer; echo $button_script; echo $modal_picture;?>
</body>

</html>