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
		echo $navigation_login;
	} ?>
			<br>
			<br>
			<div class="row">

				<!--<div class="col-lg-3">-->
				<br>
				<br>
				<!--h1 class="my-4">Padang 777</h1>
			<div class="list-group">
				<a href="#" class="list-group-item">Semua Kategori</a>
				<a href="#" class="list-group-item">Ayam</a>
				<a href="#" class="list-group-item">Ikan</a>
				<a href="#" class="list-group-item">Sapi</a>
				<a href="#" class="list-group-item">Pelengkap</a>
				<a href="#" class="list-group-item">Sayuran</a>
				<a href="#" class="list-group-item">Minuman Dingin</a>
				<a href="#" class="list-group-item">Minuman Panas</a>
				<a href="#" class="list-group-item">Minuman Botol</a>
				<a href="#" class="list-group-item">Minuman Jus</a>
			</div>-->
				<div class="dropdown">
					<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-info" data-target="#" href="/page.html">
						Kategori Menu
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						<li>
							<a href="<?php echo base_url(" Shop ")?>">Semua Kategori</a>
						</li>
						<li>
							<li>
								<a href="<?php echo base_url(" Shop/kategori_menu?id=KM001 ")?>">Ayam</a>
							</li>
							<li>
								<a href="<?php echo base_url(" Shop/kategori_menu?id=KM003 ")?>">Ikan</a>
							</li>
							<li>
								<a href="<?php echo base_url(" Shop/kategori_menu?id=KM002 ")?>">Sapi</a>
							</li>
							<li>
								<a href="<?php echo base_url(" Shop/kategori_menu?id=KM005 ")?>">Pelengkap</a>
							</li>
							<li>
								<a href="<?php echo base_url(" Shop/kategori_menu?id=KM004 ")?>">Sayuran</a>
							</li>
							<li>
								<a href="<?php echo base_url(" Shop/kategori_menu?id=KM007 ")?>">Minuman Dingin</a>
							</li>
							<li>
								<a href="<?php echo base_url(" Shop/kategori_menu?id=KM009 ")?>">Minuman Panas</a>
							</li>
							<li>
								<a href="<?php echo base_url(" Shop/kategori_menu?id=KM006 ")?>">Minuman Botol</a>
							</li>
							<li>
								<a href="<?php echo base_url(" Shop/kategori_menu?id=KM008 ")?>">Juice</a>
							</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-12">
				<br>
				<br>
				<br>
				<br>
				<div class="row">
					<?php foreach ($menu as $row) {	
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
							<div class="detail">
								<br>
								<img src="<?php echo base_url();?><?php echo $row['Gambar'];?>" alt="dsadas" />
								<br>
								<br>
								<button href="#" class="btn btn-info">Pesan</button>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#produkdetail">Detail</button>
								<div class="modal fade product_view" id="produkdetail" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<a href="#" data-dismiss="modal" class="class pull-right">
													<span class="fa fa-remove"></span>
												</a>
												<h3 class="modal-title">
													<?php echo $row['NamaMenu']; ?>
												</h3>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-md-6 product_img">
														<img src="<?php echo base_url();?><?php echo $row['Gambar'];?>" class="img-responsive">
													</div>
													<div class="col-md-6 product_content">
														<h4>Kategori Id:
															<span>
																<?php echo $row['IDKategoriMenu']; ?>
															</span>
														</h4>
														<p>
															<?php echo $row['Deskripsi'];?>
														</p>
														<h3 class="cost">
															<?php echo 'Rp. '.$harga.',00';?>

														</h3>
														<div class="space-ten"></div>

													<div class="container">

														<div class="row">
															<div class="col-xs-3 col-xs-offset-3">
																<div class="input-group number-spinner">
																	<span class="input-group-btn data-dwn">
																		<button class="btn btn-default btn-info" data-dir="dwn">
																			<span class="fa fa-minus"></span>
																		</button>
																	</span>
																	<input type="text" class="form-control text-center" value="1" min="-10" max="40">
																	<span class="input-group-btn data-up">
																		<button class="btn btn-default btn-info" data-dir="up">
																			<span class="fa fa-plus"></span>
																		</button>
																	</span>
																</div>
															</div>
														</div>

													</div>
													<br>
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#keranjang">
													<span class="fa fa-shopping-cart"> Taruh Keranjang</span>
												</button>
													</div>



													
												</div>
											</div>
											<div class="modal-footer">
												<div class="space-ten"></div>
											</div>
											
										</div>
									</div>
								</div>
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