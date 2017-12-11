<nav class="navbar navbar-header navbar-dark bg-danger fixed-top">
<div class="container">
  <a class="navbar-brand" href="<?php echo base_url('index.php/Admin/admin_database'); ?>"> <img src="<?=base_url();?>/assets/picture/logo.png"><font face="Brush Script MT" size="6pt"> Padang 777 </font></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Admin/admin_database');?>"> Home <span class="sr-only"> (current) </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/menu2') ?>"> Menu </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/kategori_menu') ?>">Kategori Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/lappenj2') ?>">Lihat Laporan Keuangan</a>
          </li>
      </ul>
    </div>
</div>
</nav>