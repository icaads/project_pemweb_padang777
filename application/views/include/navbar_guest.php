<?php $nama = $this->session->userdata('nama'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">

	<a class="navbar-brand" href="<?=base_url('')?>">
		<img src="<?=base_url();?>/assets/picture/logo.png">
		<font face="Brush Script MT" size="6pt"> Padang 777</font>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
	aria-expanded="true" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="<?php base_url('home');?>">Beranda
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>about">Tentang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>shop">Pesan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('Reservasi/modal')?>">Reservasi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url()?>contactform/index">Kontal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('login/logout')?>">
					<span class="fa fa-log-out"></span>Keluar</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link">
					<span class="fa fa-user-circle"> </span>
					<?php echo ' Hi, '.$nama;?>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('cart/shopping_cart');?>">
					<span class="fa fa-shopping-cart"></span>
			</li>
			</a>
		</ul>
	</div>
</nav>
