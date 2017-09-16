
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="<?php echo base_url(); ?>/asset/user/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="<?php echo base_url(); ?>/asset/user/static/js/metro.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/user/static/css/metro.min.css">
		<script src="<?php echo base_url(); ?>/asset/user/js/jquery.js" type="text/javascript"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>/asset/user/js/metro.js"></script> 
		
		<link href="<?php echo base_url(); ?>/asset/user/metro/css/metro.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>/asset/user/metro/css/metro-icons.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>/asset/user/metro/css/metro-responsive.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>/asset/user/metro/js/metro.js"></script>
		<script src="<?php echo base_url(); ?>/asset/user/metro/js/docs.js"></script>
	   
		<script src="<?php echo base_url(); ?>/asset/user/metro/js/ga.js"></script>	
		<script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/css/main2.css">
						    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" script-name="aclonica" src="http://use.edgefonts.net/aclonica.js"></script>
	<style>
	.enjoy-css1 {

  font: normal 25px/2 "aclonica", Helvetica, sans-serif;
  color: #d4dadd;

}
	</style>
	<style>
.cc{text-align:center;}
.aa {
	color: #FFF;
}
.navbar-inverse {
    background-color:   #1E90FF ;
    font-size:18px;
    }
.b {
	color: #F00;
}
.b {
	font-weight: bold;
}

.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal normal bold 21px/1 "Comic Sans MS", cursive, sans-serif;
  color: rgba(247,244,244,1);
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
}


	
</style>
											
	</head>
	<body>
	<!---start-wrap---->
		<div class="wrap">
		
		<header class="main-header"><a class="logo" href=""><div class="enjoy-css1">E-Vote Unriyo</div></a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" onclick="metroDialog.toggle('#dialog99')" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a class="active" href="index" ><span class="fa fa-home"></span>  Beranda</a></li>					
							    <li class="a"><a href="<?php echo site_url('User/nav'); ?>" ><span class="fa fa-compass"></span> Petunjuk</a></li>
								
								<li><a href="#" onclick="metroDialog.toggle('#dialog7')"> <span class="fa fa-envelope"></span>  Kontak</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
		
		<div class="skills">
				   			 <center><h3 text="cc">Pemilihan Calon Pemimpin Organisasi Mahasiswa UNRIYO</h3></center>
								
		                <ul>
							  <li>
							 
							  <a class="btn btn-warning btn-block" <?php if($st_bem =='2'){echo "disabled";}else{echo "";} ?>  href="<?php echo site_url('User/sel_bemu'); ?>"  ><span class="fa fa-check"></span> Bem Universitas</a> 
							  </li>
		                        <li>
								<a class="btn btn-warning btn-block" href="<?php echo site_url('User/sel_dpm'); ?>" <?php if($st_dpm =='2'){echo "disabled";}else{echo "";} ?>><span class="fa fa-check"></span> DPM Universitas</a> 	
								</li>  
								<li>
								<a class="btn btn-warning btn-block" href="<?php echo site_url('User/sel_bemf'); ?>" <?php if($st_bmuniv =='2'){echo "disabled";}else{echo "";} ?>><span class="fa fa-check"></span> <?php echo $bemf; ?></a> 	
								</li> 
								<li>
								<a class="btn btn-warning btn-block" href="<?php echo site_url('User/sel_hima'); ?>" <?php if($st_hima =='2'){echo "disabled";}else{echo "";} ?>><span class="fa fa-check"></span> <?php echo $hima; ?></a> 	
								</li> 
								<li>
															
								</li> 
		                </ul>
								
		                           
						   </div>
		
		
			</div>
			
<div data-role="dialog" id="dialog99" class="padding20" data-close-button="true" data-type="success">
           <center> <h1>E-Vote</h1></center>
            <p>
              Program Version 1.1 :) 
            </p>
			
        </div>

		
		<div data-role="dialog" id="dialog7" class="padding20" data-close-button="true" data-type="warning">
		<form action="<?php echo site_url('User/sendMail'); ?>" method="post">
            <h1>Kirim Pesan</h1>
        <label class="aa">Nama</label><p>
            <div class="input-control text">
    <input type="text" class="form-control"  name="nama" placeholder="Nama Pengirim" required>
</div><p>
<label class="aa">Email</label><p>
          <div class="input-control text">
     <input type="email" class="form-control" name="email" placeholder="email" required>
</div><p>		

		<label class="aa">Pesan</label><p>
            <div class="input-control textarea">
    <textarea class="form-control" name="pesan" placeholder="pesan" rows="5" required></textarea>
</div><p>
<button class="button success">Kirim Pesan</button>
</form>
        </div>
	</body>
</html>

