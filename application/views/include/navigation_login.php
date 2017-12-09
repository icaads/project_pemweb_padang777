<?php $nama = $this->session->userdata('namadepan'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
  
    <a class="navbar-brand" href="<?=base_url('')?>"> <img src="<?=base_url();?>/assets/picture/logo.png"><font face="Brush Script MT" size="6pt">  Padang 777</font></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php base_url('home');?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>shop">Online Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>reservasi/modal">Reservation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>profile">Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>contactform/index">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('login/logout')?>"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link"><span class="fa fa-user-circle"> </span><?php echo ' Hi, '.$nama;?></a>
            </li>
        </ul>
      </div>

</nav>