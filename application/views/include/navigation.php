<nav class="navbar navbar-header navbar-dark bg-danger fixed-top">
<div class="container">
  <a class="navbar-brand" href="<?=base_url('')?>"> <img src="<?=base_url();?>/assets/picture/logo.png"><font face="Brush Script MT" size="6pt">  Padang 777</font></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><b>Masuk</b> <span class="caret"></span></a>
              <ul id="login-dp" class="dropdown-menu">
                <li>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <form class="form" role="form" method="post" action="<?php echo base_url('login/login')?>" accept-charset="UTF-8" id="login-nav">
                          <div class="form-group">
                            <label class="sr-only" for="Username">Nama Pengguna</label>
                             <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="password">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                           
                              <div class="help-block text-left"><a href="">Lupa kata sandi?</a></div>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                          </div>
                        </form>
                         
                          
                       
                          <a href="<?php echo base_url()?>Login/login_bar">
                           <button type="submit" class="btn btn-secondary btn-block">Masuk Sebagai Tamu</button>
                          </a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <a class="nav-link" href="<?php echo base_url();?>">Beranda
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>login/login_bar">Pesan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>login/login_bar">Reservasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>contactform/index">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>Regist/AddUser">Daftar</a>
          </li>
      </ul>
    </div>
</div>
</nav>