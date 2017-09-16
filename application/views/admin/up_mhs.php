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
	<script src="<?php echo base_url(); ?>asset/js/datum.js"></script>
	
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
                  <li><a href="proses/logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
            <li><a href="<?php echo site_url('Admin/index'); ?>"><i class="fa fa-home"></i><span> Home</span></a></li>
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
            <h1><i class="fa fa-users fa-lg"></i> Mahasiswa</h1>
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
		 <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card center">
              <div class="card-body">
			  <h3 class="text-center">Masukkan Data Mahasiswa</div>
			  <form action="<?php echo site_url('Up_admin/up_mhs/'. $nim .''); ?>" method="post" role="form">
				
                  <div class="form-group">
				  <div class="input-group col-xs-5">
                    <label class="control-label">Nim</label>
                    <input class="form-control" type="number" data-bind="value:replyNumber"  placeholder="Masukkan nim" name="nim" 
					pattern=".{0}|.{8}" required title="Panjang minimal 8 karakter"
					value="<?php echo $nim; ?>" required>
                  </div>
				  </div>
				  
				  <div class="form-group">
				<div class="input-group col-xs-8">
				 <label class="control-label">Nama</label>
				  <input class="form-control " type="tex" placeholder="nama" name="nama" value="<?php echo $nama; ?>" required >
				  </div>
				  </div>
				  
                  <div class="form-group">
				  <div class="input-group col-xs-5">
                    <label class="control-label">Jenis Kelamin</label>
                    <select class="form-control" type="text" placeholder="Jenkel" name="jenkel" >
					<option><?php echo $jenkel; ?></option>
					<option>Laki-Laki</option>
					<option>Perempuan</option>
					</select>
					</div>
                  </div>
				  
				  <div class="form-group">
				<div class="input-group col-xs-6">
				 <label class="control-label">Tanggal Lahir</label>
				  <input class="form-control " type="tex" placeholder="Tanggal Lahir" id="demoDate" value="<?php echo $tgl_lahir; ?>" name="tgl" required>
				  </div>
				  </div>
				  
				  <div class="form-group">
				  <div class="input-group col-xs-7">
				  <label class="control-label">fakultas</label>
				  <select type="text" class="form-control" placeholder="Tempat Lahir" name="fak" id="fak" onchange="pilih(this)">
				   <option><?php echo $fakultas; ?></option>
						 <option>FST</option>
        <option>Fikes</option>
        <option>Fise</option>
			</select>
				  </div>
				  </div>
				  
				  <div class="form-group">
				  <div class="input-group col-xs-5">
				  <label class="control-label">Prodi</label>
				  <select class="form-control" type="text" placeholder="Prodi" name="prodi" id="prodi"  >
				  <option><?php echo $prodi; ?></option>
				  </select>
				  </div>
				  </div>
				  
                  <div class="form-group">
				  <div class="input-group col-xs-5">
                    <label class="control-label">Status</label>
                    <select class="form-control"  name="status">
					<option><?php echo $status; ?></option>
					<option>Aktif</option>
					<option>Non Aktif</option>
					</select>
					</div>
                  </div>
                  
				  <div class="form-group">
				  <div class="input-group col-xs-8">
				  <label class="control-label ">Tahun Masuk</label>
				   <input type="text" class="form-control" placeholder="Tahun Masuk" name="thm" id="demoDate2" value="<?php echo $tahun_msk; ?>" required>
				  </div>
				  
				  </div>
                 <button type="submit" class="btn btn-primary"><span class="fa fa-check"></span> Simpan Data</button>
			  <a href="<?php echo site_url('Admin/index'); ?>" class="btn btn-default"><span class="fa fa-times"></span> Keluar</a>
                </form></div>
            </div>
          </div>
		   <div class="col-md-3"></div>
        </div>
      </div>
	  
    </div>
    <!-- Javascripts-->
    <script src="<?php echo base_url(); ?>/asset/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/plugins/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/main.js"></script>
	 <script type="text/javascript" src="<?php echo base_url(); ?>/asset/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/js/plugins/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "yyyy-mm-dd",
      	autoclose: true,
		startDate: '-25y',
      	todayHighlight: true
      });
	  
	  $('#demoDate2').datepicker({
      	format: "yyyy",
      	autoclose: true,
		startDate: '-10y',
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>
  </body>
</html>