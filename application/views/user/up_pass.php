<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Up Passs</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="<?php echo base_url(); ?>asset/user/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="<?php echo base_url(); ?>asset/user/static/js/metro.min.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/user/metro/static/css/metro.min.css">
		<script src="<?php echo base_url(); ?>asset/user/js/jquery.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>asset/user/js/metro.js"></script> 
		
        <script src="<?php echo base_url(); ?>asset/user/js/easyResponsiveTabs.js" type="text/javascript"></script> 

		<link href="<?php echo base_url(); ?>asset/user/metro/css/metro.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/user/metro/css/metro-icons.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/user/metro/css/metro-responsive.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">

	   
		<script src="<?php echo base_url(); ?>asset/user/metro/js/metro.js"></script>
		<script src="<?php echo base_url(); ?>asset/user/metro/js/docs.js"></script>
   	<script src="<?php echo base_url(); ?>asset/js/datum.js"></script>	
		
  		
	<style>
		.cc{text-align:center;}
		.aa {
			color: #FFF;
		}
		
		.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 2px;
  border: none;
  font: normal 18px/1 "Comic Sans MS", cursive, sans-serif;
  color: rgba(252,244,244,1);
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
}
</style>
											
	</head>
	<body>
	<!---start-wrap---->
		<div class="wrap">
		
		<div class="skills">
		<form action="<?php echo site_url('User/up_pass'); ?>" method="post">
				   				<div class="enjoy-css">Perbaruhi Password Dari Password Default, Untuk Dapat Memilih Calon</div>
		                      <ul>
							      <li>                 
							      	  
									<label class="aa">Nim</label>				
										<div class="input-control text full-size">
											<input type="text" name="nim">
										</div>	                            
		                          </li>
		                           <li>                 
							      	  
									 <label class="aa">Tanggal Lahir</label>				
									  <div class="input-control text full-size" data-role="datepicker">
										<input type="text" name="tgl">
																<button class="button"><span class="fa fa-calendar"></span></button>
															</div>                            
		                           </li>
		                           <li>                 
							      	  
								<label class="aa">Fakultas</label>				
								<div class="input-control text full-size">
												
												<select type="text" name="fak" id="fak" onchange="pilih(this)"><option>Pilih Fakultas</option>
												<option>FST</option>
												<option>Fikes</option>
												<option>Fise</option>
												</select>
											</div>	                            
																   </li>
																   <li>                 
																	  
								<label class="aa">Prodi</label>				
								<div class="input-control text full-size">
												
												<select type="text" name="prodi" id="prodi">
												<option>Pilih Prodi</option>
												</select>
											</div>	                            
																   </li>
																    <li>                 
																	  
								<label class="aa">Password Baru</label>				
								<div class="input-control text full-size">
												
												<input  type="password" name="pass">
												
											</div>	                            
																   </li>
																</ul>
																<div class="email-button">
																	   
																		<button class="button success">Perbarui Password</button>
								<button class="button danger">Kembali</button>	
								<a href="#" class="button warning" onclick="metroDialog.toggle('#dialog6')">Bantuan</a>									
																	  <div class="clear"></div>                               
																</div> 

</form>								
						   </div>
		
		
							 
			</div>
			
<div data-role="dialog" id="dialog6" class="padding20" data-close-button="true" data-type="success">
           <center> <h1>Info</h1></center>
            <p>
               Sebelum melakukan  pemilihan, Mahasiswa harus mengganti password terlebih dahulu dan mengulang login lagi.. 
            </p>
			<small>Untuk memastikan Mahasiswa yang login tepat, user di haruskan mengisi input box sesuai dengan data yang diminta </small>
        </div>
		
		<div data-role="dialog" id="dialog7" class="padding20" data-close-button="true" data-type="warning">
		<form action="" method="post">
            <h1>Kirim Pesan</h1>
        <label class="aa">Pesan</label><p>
            <div class="input-control text">
    <input type="text" name="nama" placeholder="Nama Pengirim" required>
</div><p>
<label class="aa">Pesan</label><p>
          <div class="input-control text">
     <input type="email" name="nama" placeholder="Nama Pengirim" required>
</div><p>		

		<label class="aa">Pesan</label><p>
            <div class="input-control textarea">
    <textarea name="pesan" placeholder="pesan" rows="5" required></textarea>
</div><p>
<button class="button success">Kirim Pesan</button>
</form>
        </div>
	</body>
</html>

