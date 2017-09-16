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
    <title>Admin</title>
   <script type="text/javascript" script-name="aclonica" src="http://use.edgefonts.net/aclonica.js"></script>
	<style>
	.enjoy-css {

  font: normal 25px/2 "aclonica", Helvetica, sans-serif;
  color: #d4dadd;

}

.enjoy-css2 {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal normal bold 30px/1 Georgia, serif;
  color: rgba(64,132,221,1);
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
}
	</style>
  </head>
  <body class="sidebar-mini fixed">
  
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href=""><div class="enjoy-css">Admin CPanel</div></a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="<?php echo site_url('Admin/add_user'); ?>"><i class="fa fa-user-plus fa-lg"></i> Add User</a></li>
				   <li><a href="logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
              <p class="designation">Admistrator</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="<?php echo site_url('Admin/index'); ?>"><i class="fa fa-home"></i><span> Home</span></a></li>
			<li ><a href="<?php echo site_url('Admin/pemilu'); ?>"><i class="fa fa-cog"></i><span> Pemilu</span></a>
              
            </li>
            <li class="treeview"><a href="<?php echo site_url('Admin/about'); ?>"><i class="fa fa-clone"></i><span> Tentang</span></a>
             
            </li>
			<li><a href="<?php echo site_url('Admin/navigasi'); ?>"><i class="fa fa-compass"></i><span> Petunjuk</span></a></li>
            <li class="treeview"><a href="<?php echo site_url('Admin/index'); ?>"><i class="fa fa-users"></i><span> Data Mahasiswa</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('Admin/list_mhs'); ?>"><i class="fa fa-circle-o"></i> Daftar Mahasiswa</a></li>
                <li><a href="<?php echo site_url('Admin/add_mhs'); ?>"><i class="fa fa-circle-o"></i> Tambah Data Mahasiswa</a></li>
              </ul>
            </li>
			<li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Data Calon </span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('Admin/list_calon'); ?>"><i class="fa fa-circle-o"></i> Daftar Calon</a></li>
                <li><a href="<?php echo site_url('Admin/add_calon'); ?>"><i class="fa fa-circle-o"></i> Tambah Data Mahasiswa</a></li>
              </ul>
            </li>
			<li><a href="<?php echo site_url('Admin/profile'); ?>"><i class="fa fa-user"></i><span> Profile Admin</span></a></li>
            
            
           
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-home fa-lg"></i> HOME</h1>
            <p></p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Home</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
		<div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="card ">
			
              <h1			  class="text-center"> <div class="enjoy-css2">Selamat Datang di Panel Admin Aplikasi E-Vote UNRIYO </div></h1><p>
			  
			  <center>
			  <p><img src="<?php echo base_url(); ?>asset/user/images/kpu.png" class="img-rounded" height="350" width="350"></p>
			  <a  href="https://drive.google.com/file/d/0B5YGjSwM5q6vX1ZEam9uOV9JMjA/view" target="_blank" class="btn btn-primary"><span class="fa fa-file"></span> Dokumentasi </a>
			<a  href="<?php echo site_url('Admin/pesan'); ?>"  echo  class="btn <?php if($st=='1'){ echo 'btn-danger';} else{ echo 'btn-info';} ?>"><span class="fa  fa-envelope-o">
			</span> <?php if($st=='1'){ echo 'Ada Pesan Baru';} else{ echo 'Pesan';} ?></a>

			 
</center>
			  
            </div>
          </div>
		  <div class="col-md-1"></div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
	<script type="text/javascript" src="<?php echo base_url(); ?>/asset/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script src="<?php echo base_url(); ?>/asset/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/plugins/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/main.js"></script>
  </body>
</html>