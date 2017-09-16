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
	<script src="<?php echo base_url(); ?>asset/js/datum1.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/datum2.js"></script>
    <title>Admin</title>
	<script type="text/javascript" script-name="aclonica" src="http://use.edgefonts.net/aclonica.js"></script>
	<style>
	.enjoy-css {

  font: normal 25px/2 "aclonica", Helvetica, sans-serif;
  color: #d4dadd;

}
	</style>
   <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>	
  </head>
  <style>
  .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
  </style>
  <body class="sidebar-mini fixed">
  
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="#"><div class="enjoy-css">Admin CPanel</div></a>
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
                <li><a href="<?php echo site_url('Admin/add_calon'); ?>"><i class="fa fa-circle-o"></i> Tambah Data calon</a></li>
              </ul>
            </li>
			<li><a href="<?php echo site_url('Admin/profile'); ?>"><i class="fa fa-user"></i><span> Profile Admin</span></a></li>
            
            
           
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit fa-lg"></i> Calon</h1>
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
            <div class="card">
              <div class="card-body">
			  <h3 class="text-center">Masukkan Data Calon</div>
			  <form action="<?php echo site_url('Ins_data/add_calon'); ?>" method="post" >
				
                  <div class="form-group">
				  <div class="input-group col-xs-5">
                    <label class="control-label">Nim Ketua</label>
                    <input class="form-control"  placeholder="Masukkan nim Calon Ketua" type="number" data-bind="value:replyNumber"
					pattern=".{0}|.{8}" required title="Panjang minimal 8 karakter" name="nimk">
                  </div>
				  </div>
				  
				  <div class="form-group">
				<div class="input-group col-xs-8">
				 <label class="control-label">Nama Ketua</label>
				  <input class="form-control " type="tex" placeholder="Nama Calon Ketua" name="namak"  required>
				  
				 </div>
				  </div>
				  
				  <div class="form-group">
				  <div class="input-group col-xs-5">
                    <label class="control-label">Nim Wakil Ketua</label>
                    <input class="form-control"  placeholder="Masukkan nim Calon Wakil Ketua" type="number" data-bind="value:replyNumber"
					pattern=".{0}|.{8}" required title="Panjang minimal 8 karakter" name="nimwk">
                  </div>
				  </div>
				  
				  <div class="form-group">
				<div class="input-group col-xs-8">
				 <label class="control-label">Nama Wakil Ketua</label>
				  <input class="form-control " type="tex" placeholder="Nama Calon Wakil Ketua" name="namawk" required>
				  </div>
				  </div>
				  
				   <div class="form-group">
				<div class="input-group col-xs-4">
				 <label class="control-label">Fakultas Ketua</label>
<select type="text" class="form-control"  name="fak_k" id="fak_k" onchange="pilih1(this)" >
				   <option>Pilih Fakultas</option>
				   <option>FST</option>
				    <option>FIKES</option>
                   <option>FISE</option>
		
		</select>
				 </div>
				  </div>
				   <div class="form-group">
				<div class="input-group col-xs-4">
				 <label class="control-label">Fakultas Wakil Ketua</label>
				  <select type="text" class="form-control" placeholder="Tempat Lahir" name="fak_wk" id="fak_wk" onchange="pilih2(this)">
				  <option>Pilih Fakultas</option>
				   <option>FST</option>
				    <option>FIKES</option>
                   <option>FISE</option>
		
		</select>
				  </div>
				  </div>
				   <div class="form-group">
				<div class="input-group col-xs-8">
				 <label class="control-label">Prodi Ketua</label>
<select type="text" class="form-control" placeholder="Tempat Lahir" name="prodi_k" id="prodi_k"  >
				  
		</select>
				 </div>
				  </div>
				   <div class="form-group">
				<div class="input-group col-xs-8">
				 <label class="control-label">Prodi Wakil Ketua</label>
<select type="text" class="form-control" placeholder="Tempat Lahir" name="prodi_wk" id="prodi_wk" >
				  
		
		</select>
				 </div>
				  </div>
				  <div class="form-group">
				<div class="input-group col-xs-12">
				 <label class="control-label">Biografi Ketua</label>
<textarea  class="form-control " name="biok" ></textarea>

				 </div>
				  </div>
				  <div class="form-group">
				<div class="input-group col-xs-12">
				 <label class="control-label">Biografi Wakil Ketua</label>
<textarea  class="form-control " name="biowk" ></textarea>
				 </div>
				  </div>
				  
  
				  <div class="form-group">
				  <div class="input-group col-xs-5">
				  <label class="control-label">Lembaga</label>
				  <select type="text" class="form-control" placeholder="Tempat Lahir" name="lembaga" id="lem"  required>
				   <option>Bem Universitas</option>
						 <option>Dpm</option>
        <option>Bem Fikes</option>
		<option>Bem FST</option>
        <option>Bem Fise</option>
		<option>Himagi</option>
		<option>Himika</option>
        <option>Hmkm</option>
		<option>Himabi</option>
		<option>Himfise</option>
		<option>Himatika</option>
        <option>Himasi</option>
		<option>Himamika</option>
		<option>Hmte</option>
        <option>Himaku</option>
		<option>Himasing</option>
        <option>Himahi</option>
		<option>Himakom</option>
		</select>
				  </div>
				  </div>
				  
				  <div class="form-group">
				  <div class="input-group col-xs-3">
				  <label class="control-label">Nomor</label>
				  <select class="form-control" type="text" placeholder="Prodi" name="nomor" id="nomor"  >
				  <option>1</option>
						 <option>2</option>
        <option>3</option>
		<option>4</option>
        <option>5</option>
		<option>6</option>
		<option>7</option>
        <option>8</option>
		<option>9</option>
		<option>10</option>
        <option>11</option>
		<option>12</option>
				  </select>
				  </div>
				  </div>
				  <div class="form-group">
				<div class="input-group col-xs-10">
				 <label class="control-label">Visi Dan Misi </label>
<textarea  class="form-control " name="visi" ></textarea>

				 </div>
				  </div>
				  
				  
                 
                  
				                  <button type="submit" class="btn btn-primary"><span class="fa fa-check"></span> Simpan Data</button>
			  <a href="<?php echo site_url('Admin/index'); ?>" class="btn btn-default"><span class="fa fa-times"></span> Kembali</a>
                </form></div>
            </div>
          </div>
		   <div class="col-md-3"></div>
      </div>
    </div>
	
    <!-- Javascripts-->
    <script src="<?php echo base_url(); ?>/asset/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/plugins/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/main.js"></script>
	<script>
	$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
	</script>
  </body>
  
</html>