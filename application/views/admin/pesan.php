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
              <p>Admin</p>
              <p class="designation">Admistrator</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="<?php echo site_url('Admin/index'); ?>"><i class="fa fa-home"></i><span> Home</span></a></li>
			<li ><a href="<?php echo site_url('Admin/pemilu'); ?>"><i class="fa fa-cog"></i><span> PEMILU</span></a>
              
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
                <li><a href="<?php echo site_url('Admin/add_calon'); ?>"><i class="fa fa-circle-o"></i> Tambah Data Calon</a></li>
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
			
              <table class="table table-hover " id="sampleTable">
                  <thead>
                    <tr >
                      <th class="text-center"> <h1>Pesan</h1></th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data as $row){ ?>
                    <tr>
                      <td>
					  <div class="row">
					  
					  <div class="col-md-2">
					 <a href="#"><img src="<?php echo base_url(); ?>asset/images/user.png"></a>
                      <div class="content">
                        <h5><a href="#"></a></h5>
                        <p class="text-muted"><small></small></p>
                      </div>
					  </div>
					  <div class="col-md-6">
					  <div class="form-group">
                    <label class="control-label col-md-8">Name :  <?php echo $row->nama; ?></label>
                    
                  </div>
					  </div>
					  
					 
					  
					  <div class="col-md-6">
					  <div class="form-group">
                    <label class="control-label col-md-8">Email :<?php echo $row->email; ?></label>
                    
                  </div>
					  </div>
					  
					  
					  
					  <div class="col-md-6">
					  <div class="form-group">
                    <label class="control-label col-md-8">Pesan : <?php echo $row->pesan; ?></label>
                    
                  </div>
					  </div>
					  
					  </div>
					  
					 <div class="col-md-6">
					  <div class="form-group">
                    <label class="control-label col-md-4"></label>
                    <div class="col-md-8">
                     <a class="btn btn-danger" href="<?php echo site_url('Admin/del_pesan/'. $row->id_pesan .''); ?>"><i class="fa fa-remove fa-lg"> </i> Hapus Pesan</a>
                    </div>
                  </div>
					  </div>
					  </td>
                      
                    </tr>
                    <?php } ?>
                    
                  </tbody>
                </table>
			  
            </div>
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