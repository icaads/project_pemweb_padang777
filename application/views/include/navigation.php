	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?=base_url('')?>"> <img src="<?=base_url();?>/assets/picture/logo.png"><font face="Brush Script MT" size="6pt">  Padang 777</font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <li class="dropdown">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
              <ul id="login-dp" class="dropdown-menu">
        <li>
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-12">
                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                        <div class="help-block text-left"><a href="">Forget the password ?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-secondary btn-block">Login As Guest</button>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-info btn-block">Register</button>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> keep me logged-in
                       </label>
                    </div>
                 </form>
              </div>
           </div>
          </div>
        </li>
      </ul>
            </li>
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Online Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reservation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>