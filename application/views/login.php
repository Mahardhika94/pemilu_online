
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/css/font-awesome.min.css">
    <title>Login User</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
	<script type="text/javascript" script-name="aclonica" src="http://use.edgefonts.net/aclonica.js"></script>
	<style>
	.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal 40px/1 "aclonica", Helvetica, sans-serif;
  color: #d4dadd;
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
}
	</style>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1><div class="enjoy-css">KPU LOGIN ADMISTRATOR UNRIYO <img class="img-circle" src="<?php echo base_url(); ?>asset/images/kpu.png" width="80" alt="User Image"></div></h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="<?php echo site_url('Login/login/Admin'); ?>" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login Admin</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Username" autofocus name="username">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <div class="utility">
              
              <p class="semibold-text mb-0"><a data-toggle="flip">Login Bawaslu ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
        <form class="forget-form" action="<?php echo site_url('Login/login/Bawaslu'); ?>" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login Bawaslu</h3>
		   <div class="form-group">
            <label class="control-label">Username</label>
            <input class="form-control" type="text" placeholder="username" name="username">
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="password" placeholder="password" name="password">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login Admin</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="<?php echo base_url(); ?>/asset/js/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/plugins/pace.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset/js/main.js"></script>
</html>