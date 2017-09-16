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
  <textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
  <script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
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
                  <li><a href="<?php echo site_url('Login/logout'); ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
              <p>Admistrator</p>
              
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
        <div class="page-title hidden-print">
          <div>
            <h1><i class="fa fa-file-text-o"></i> Report</h1>
            <p>Laporan Pemilu UNRIYO</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Invoice</a></li>
            </ul>
          </div>
        </div>
        <div class="row ">
		<div class="col-md-12">
            <div class="card">
             <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Pilih Laporan</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-3 col-md-6">
            <form role="form" action="<?php echo site_url('Admin/report'); ?>" method="post">
              <div class="form-group">
                <div class="input-group">
                  <select type="text" class="form-control" name="lem">
				  <option><?php if($lem==""){echo "Pilih Lembaga";}else{echo $lem; } ?></option>
				  <option>Bem Universitas</option>
						 <option>Dpm</option>
        <option>Bem Fikes</option>
		<option>Bem FST</option>
        <option>Bem Fise</option>
		<option>Himagi</option>
		<option>Himika</option>
        <option>Hmkm</option>
		<option>Himabi</option>
		<option>Himatika</option>
        <option>Himasi</option>
		<option>Himamika</option>
		<option>Hmte</option>
        <option>Himaku</option>
		<option>Himasing</option>
        <option>Himahi</option>
				  </select>
                  <span class="input-group-btn">
                    <button class="btn btn-success" type="submit">Go</button>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card" id="printableArea">
              <section class="invoice">
                <div class="row" >
                  <div class="col-xs-12">
                    <h2 class="page-header"><i class="fa fa-file"></i> <?php if($lem == ""){ echo "Laporan";  }else{ echo "Laporan Pemilu Organisasi ". $lem .'';} ?><small class="pull-right"></small></h2>
                  </div>
                </div>
                
                <div class="row" >
				
                  <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No Urut </th>
                          <th>Nama Ketua/ Presiden</th>
                          <th>Nama Wakil</th>
                          <th>Lembaga</th>
                          <th>Perolen Suara</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php for($i=1; $i<=$jum; $i++){ ?>
                        <tr>
                          <td><?php echo eval('return $'. 'nomor' .$i. ';'); ?></td>
                          <td><?php echo eval('return $'. 'nama_ketua' .$i. ';'); ?></td>
                          <td><?php echo eval('return $'. 'nama_wakil' .$i. ';'); ?></td>
                          <td><?php echo $lem; ?></td>
                          <td><?php echo eval('return $'. 'jumlah' .$i. ';'); ?></td>
                        </tr>
                       <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row hidden-print mt-20">
                  <div class="col-xs-12 text-right"><a class="btn btn-primary" onclick="printDiv('printableArea')" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                </div>
              </section>
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