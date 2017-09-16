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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.js"></script>
  </head>
  <script type="text/javascript">
  function reset(){
 // document.getElementById("tt2").click(); 
  var pass=<?php echo $pass; ?>;
  var r = confirm("Apakah Anda Yakin Untuk Mereset Data Pemilihan?");
  if(r == true){
  var input=prompt("Masukan Password Anda Untuk Mereset data Pemilihan : ");
  if(input == pass){
  document.getElementById("rst").submit(); 
  }else{
  alert("Password yang Nada Masukkan Salah");
  }
  }
  
  }
  
   function save(){
 // document.getElementById("tt2").click(); 
  var pass=<?php echo $pass; ?>;
  var r = confirm("Apakah Anda Yakin Untuk Merubah Tanggal Pemilihan?");
  if(r == true){
  var input=prompt("Masukan Password Untuk Merubah Tanggal Pemilihan : ");
  if(input == pass){
  document.getElementById("svt").submit(); 
  }else{
  alert("Password yang Nada Masukkan Salah");
  }
  }
  
  }
  
  
  </script>
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
            <li ><a href="<?php echo site_url('Admin/index'); ?>"><i class="fa fa-home"></i><span> Home</span></a></li>
			<li class="active"><a href="<?php echo site_url('Admin/pemilu'); ?>"><i class="fa fa-cog"></i><span> Pemilu</span></a>
              
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
            <h1><i class="fa fa-cog fa-lg"></i> Pemilu</h1>
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
            <div class="card ">
			
              <h1			  class="text-center">Masukan Waktu Penyelenggaraan PEMILU</h1><p>
			  <form action="<?php echo site_url('Up_admin/up_tgl'); ?>" method="post" id="svt">
			  <div class="form-group">
			 
			  <a class="btn btn-block <?php if($stat =='no') {echo 'btn-danger';}else{echo 'btn-info';}?>">
			  <?php if($stat =='no') {echo 'Pemilu Non Aktif';}else{echo 'Pemilu Aktif';}?>
			  </a>
			 
			  </div>
			  <div class="form-group">
			  <div class="input-group col-xs-12">
			  <label class="label-control">Tanggal Dimulai</label>
			  <input type="text" class="form-control " name="tgl" id="demoDate" value="<?php echo $tgl; ?>">
			  </div>
			  </div>
			  <div class="form-group">
			  <div class="input-group col-xs-4">
			  <label class="label-control">Jam Dimulai</label>
			  <input type="text" class="form-control " name="jam1" id="jam1" value="<?php echo $jam1; ?>"  required>
			  </div>
			  </div>
			   <div class="form-group">
			  <div class="input-group col-xs-4">
			  <label class="label-control">Jam Berakhir</label>
			  <input type="text" class="form-control " name="jam2" required value="<?php echo $jam2; ?>">
			  </div>
			  </div>
			  
			  <a  onclick="save()" class="btn btn-primary"><span class="fa fa-check"></span> Simpan</a>
			<a  onclick="reset()" class="btn btn-danger"><span class="fa fa-times"></span> Hapus Data Pemilu</a>

			  <a href="<?php echo site_url('Admin/report'); ?>" class="btn btn-warning" id="tt2"><span class="fa fa-file"></span> Laporan </a>
			  </form>
			  <form action="<?php echo site_url('Up_admin/reset'); ?>" method="post" id="rst">
			  
			  </form>
			  
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
      	format: "yyyy/mm/dd",
      	autoclose: true,
      	todayHighlight: true
      });
	  
	  $('#demoDate2').datepicker({
      	format: "yyyy/mm/dd",
      	autoclose: true,
      	todayHighlight: true
      });
	  
	  $('#jam2').datepicker({
      	format: "yyyy/mm/dd",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>
  </body>
</html>