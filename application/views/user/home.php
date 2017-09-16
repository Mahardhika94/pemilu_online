
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="<?php echo base_url(); ?>/asset/user/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="<?php echo base_url(); ?>/asset/user/static/js/metro.min.js"></script>
		 <link rel="stylesheet" type="text/css" href="css/main2.css">
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
							<script type="text/javascript" script-name="aladin" src="http://use.edgefonts.net/aladin.js"></script>

							<script>
							function hai(){
							alert("Program Version 1.1 :) ");
							
							}
							</script>
	
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
  font: normal 32px/1 "aladin", Helvetica, sans-serif;
  color: #f2f6f9;
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
}


	
</style>
											
	</head>
	<body>
	<!---start-wrap---->
		<div class="wrap">
		
		<header class="main-header"><a class="logo" href=""><div class="enjoy-css1">E-Vote UNRIYO</div></a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" onclick="metroDialog.toggle('#dialog99')" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a class="active" href="#" ><span class="fa fa-home"></span>  Beranda</a></li>					
							    <li class="a"><a href="<?php echo site_url('User/nav'); ?>" ><span class="fa fa-compass"></span> Petunjuk</a></li>
								<li><a href="#" onclick="metroDialog.toggle('#dialog6')"> Tentang</a></li>
								<li><a href="#" onclick="metroDialog.toggle('#dialog7')"> <span class="fa fa-envelope"></span>  Kontak</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
		
		<div class="skills">
				   				<center><h3><div class="enjoy-css">Selamat Datang di E-Vote UNRIYO</div></h3></center>
								
		                      <ul>
							  <li>
							  <center>
							  <a class="btn btn-warning btn-block" href="<?php echo site_url('User/pilihan1/'); ?>">
									<span class="fa fa-pencil"></span>
									Mulai Memilih Calon 
								</a><p>

								</center>
							  </li>
							  <li>
							  <center>
							  <a class="btn btn-warning btn-block" href="<?php echo site_url('User/stat1/'); ?>">
									<span class="fa fa-bar-chart"></span>
									Lihat Statistik
								</a><p>

								</center>
							  </li>
							  <li>
							  <center>
							  <a class="btn btn-warning btn-block" href="<?php echo site_url('User/nav'); ?>">
									<span class="fa fa-compass"></span>
									Petunjuk Penggunaan 
								</a><p>

								</center>
							  </li>
							  <li>
							  <center>
							  <a class="btn btn-warning btn-block" href="<?php echo site_url('User/logout'); ?>">
									<span class="fa fa-sign-out"></span>
									keluar
								</a><p>

								</center>
							  </li>
							      <li>   
								  
								  
							      	  
                           
		                           </li>
		                           
		                           
		                          
		                        </ul>
		                           
						   </div>
		
		
			</div>
			
<div data-role="dialog" id="dialog6" class="padding20" data-close-button="true" data-type="success">
           <center> <h1>Info</h1></center>
            <p>
               <?php echo $about; ?> 
            </p>
			
        </div>
		
		<div data-role="dialog" id="dialog99" class="padding20" data-close-button="true" data-type="success">
           <center> <h1>E-Vote</h1></center>
            <p>
              Program Version 1.1 :) 
            </p>
			
        </div>



		
		
		<div data-role="dialog" id="dialog6" class="padding20" data-close-button="true" data-type="success">
           <center> <h1>Info</h1></center>
            <p>
               <?php echo $about; ?> 
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

