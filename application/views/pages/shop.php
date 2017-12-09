<html>

<head>
	<?php 
	echo $css;
	echo $js;
?>
</head>

<body>
	<div class="container">
		<?php
	
	if ($this->session->userdata('status') == 'guest') echo $navbar_guest;
	else {
		echo $navigation_login; $modal_script;
	} ?>
			<br>
			<br>
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
							<span class="fa fa-navicon"> </span>
							Kategori Menu
						</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
							<li>
								<a href="<?php echo base_url("Shop")?>">Semua Kategori</a>
							</li>
							<li>
								<li>
									<a href="<?php echo base_url("Shop/kategori_menu?id=KM001")?>">Ayam</a>
								</li>
								<li>
									<a href="<?php echo base_url("Shop/kategori_menu?id=KM003")?>">Ikan</a>
								</li>
								<li>
									<a href="<?php echo base_url("Shop/kategori_menu?id=KM002")?>">Sapi</a>
								</li>
								<li>
									<a href="<?php echo base_url("Shop/kategori_menu?id=KM005")?>">Pelengkap</a>
								</li>
								<li>
									<a href="<?php echo base_url("Shop/kategori_menu?id=KM004")?>">Sayuran</a>
								</li>
								<li>
									<a href="<?php echo base_url("Shop/kategori_menu?id=KM007")?>">Minuman Dingin</a>
								</li>
								<li>
									<a href="<?php echo base_url("Shop/kategori_menu?id=KM009")?>">Minuman Panas</a>
								</li>
								<li>
									<a href="<?php echo base_url("Shop/kategori_menu?id=KM006")?>">Minuman Botol</a>
								</li>
								<li>
									<a href="<?php echo base_url("Shop/kategori_menu?id=KM008")?>">Juice</a>
								</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<br>
				<br>
				<div class="row">
					<?php foreach ($menu as $row) {	
						$id = $row['IDMenu'];
			?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="my-list">
							<img src="<?php echo base_url();?><?php echo $row['Gambar'];?>" alt="dsadas" />
							<h3>
								<?php echo $row['NamaMenu']; ?>
								<?php $harga = sprintf('%0.3f',$row['Harga']/1000); ?>
							</h3>
							<span>
								<?php echo 'Rp '.$harga.',00';?> </span>
							<div class="offer">
								<div class="col-md-12 col-sm-12 col-xs-6 review">
									<?php for ($i=0;$i<$row['Rating'];$i=$i+1){?>
									<i class="fa fa-star" aria-hidden="true"></i>
									<?php } ?>
									<?php for ($j=0;$j<5-$row['Rating'];$j=$j+1){?>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<?php } ?>
								</div>
							</div>
							<div class="detail" style="background:#F5F7FA">
								<br>
								<img src="<?php echo base_url();?><?php echo $row['Gambar'];?>" alt="dsadas" />
								<br>
								<br>
								<a href=<?php echo base_url("Shop/belanja?id=$id")?>>
								<button class="btn btn-info">Pesan</button>	
								</a>
								<a href=<?php echo base_url("Shop/detail?id=$id")?>	>
								<button class="btn btn-info">Detail</button>
								</a>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
	</div>
	<br>
	
	<?php
	echo $footer;
?>
</body>

</html>