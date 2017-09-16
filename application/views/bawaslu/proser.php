<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/css/font-awesome.min.css">
	<link rel="shorcut icon"  href="images/user.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <title>Bawaslu</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
  
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">Admin CPanel</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
       <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="<?php echo base_url(); ?>asset/images/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <p><?php echo $username; ?></p>
              <p class="designation">Bawaslu</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="<?php echo site_url('Bws'); ?>"><i class="fa fa-user"></i><span> Profile</span></a></li>
			<li ><a href="<?php echo site_url('Bws/statistik'); ?>"><i class="fa fa-bar-chart"></i><span> Statistik</span></a>
              
            </li>
            <li class="treeview"><a href="<?php echo site_url('Bws/report'); ?>"><i class="fa fa-file"></i><span> Laporan</span></a>
             
            </li>
			
			
            
            
           
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-user fa-lg"></i> Profile</h1>
            <p>Welcome to Cpanel Admistrator</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Home</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
       <div class="col-md-3"></div>
	   <div class="col-md-6">
            <div class="card">
			<h4			  class="text-center">Kelola Profile</h4><p>
              <div class="card-body">
			  <form action="<?php echo site_url('Up_admin/up_user'); ?>" method="post">
				
                  <div class="form-group">
				  <div class="input-group col-xs-10">
                    <label class="control-label">Nama</label>
                    <input class="form-control" type="text" placeholder="Enter full name" name="nama" value="<?php echo $nama; ?>" required>
                  </div>
				  </div>
				  
				  <div class="form-group">
				<div class="input-group col-xs-10">
				 <label class="control-label">Usename</label>
				  <input class="form-control " type="tex" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
				  </div>
				  </div>
				  
                  <div class="form-group">
				  <div class="input-group col-xs-10">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="email" placeholder="Enter email address" name="email" value=" <?php echo $email; ?>" required>
                  </div>
				  </div>
				  
				  <div class="form-group">
				<div class="input-group col-xs-6">
				 <label class="control-label">Password</label>
				  <input class="form-control " type="password" placeholder="password" name="pass" value="<?php echo $password; ?>" required>
				  </div>
				  </div>
				  
				  <div class="form-group">
				  <div class="input-group col-xs-10">
				  <label class="control-label">Jabatan</label>
				  <input type="text" class="form-control" placeholder="Jabatan" name="jbt" value="<?php echo $posisi; ?>" required>
				  </div>
				  </div>
				  
				  <button type="submit" class="btn btn-primary"><span class="fa fa-check"></span> Save </button>
			  <a href="<?php echo site_url('Admin/index'); ?>" class="btn btn-default"><span class="fa fa-times"></span> Cancel</a>
                </form>
			  </div>
            </div>
		  <div class="col-md-3"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="<?php echo base_url(); ?>/asset/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/plugins/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/main.js"></script>
  </body>
</html>