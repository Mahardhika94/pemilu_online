
	<head>
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
			 <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
						    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" script-name="aclonica" src="http://use.edgefonts.net/aclonica.js"></script>
	<style>
	.enjoy-css {

  font: normal 25px/2 "aclonica", Helvetica, sans-serif;
  color: #d4dadd;

}
	</style>
	<style>
.cc{text-align:center;}
.aa {
	color: #FFF;
}
.f {
	text-align: center;
}
.a {
	background-color: #ffffff;
	color: #000000;
	font-family: "Arial Black", "Arial CYR";
	font-weight: normal;
	list-style-position: inside;
}

.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal normal bold 17px/1 Tahoma, Geneva, sans-serif;
  color: black;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
}

.navbar-inverse {
    background-color: #3b5998;
    font-size:18px;
    }
</style>
											
	</head>
	<body>
	<!---start-wrap---->
		<div class="wrap">
		
		<div class="skills">
				 <center><div class="enjoy-css"><h3 text="cc">Pemilihan Calon <?php echo $ket; ?> UNRIYO</h3></div></center>
								
		                <ul>
							  <li>
							 <?php foreach($data as $row){  
							 $lembaga=$row->lembaga;
							  $nimk=$row->nim_ketua;
							   $nimwk=$row->nim_wakil;
							 $nomor=$row->nomor;
							 $id=$row->id_calon;
							 $fk=$row->foto_ketua;
							 $fwk=$row->foto_wakil;
							 if($fk=='' and $fwk==''){
							 $fk="user.png";
							 $fwk="user.png";
							 }elseif($fk!='' and $fwk==''){
							 $fwk="user.png";
							 }elseif($fk=='' and $fwk!=''){
							 $fk="user.png";
							 }
							 ?> 
							 
							  <table class="table striped " width="200" border="0">
									<tr>
										<td colspan="2" class="f">
										
										<button class="shortcut-button success">
											<span class="icon"> <?php echo $row->nomor; ?></span>
										</button>
										
										</td>
									</tr>
								    <tr>
									    <td class="f">	
												<img src="<?php echo base_url(); ?>asset/img/calon/ketua/<?php echo $fk; ?>"  width="200" height="200" >			
									    </td>
									    <td class="f">
												<img src="<?php echo base_url(); ?>asset/img/calon/wakil/<?php echo $fwk; ?>"  width="200" height="200" >			
										</td>
									</tr>
									<tr>
										<td class="f"><div class="a">ketua</div><a href="<?php echo site_url('User/sel_ket/'. $nimk .''); ?>"><?php echo $row->nama_ketua; ?></a></td>
										<td  class="f"><div class="a">wakil</div><a href="<?php echo site_url('User/sel_wk/'. $nimwk .''); ?>"><?php echo $row->nama_wakil; ?></a></td>
									</tr>
									<tr>
										<td colspan="2" class="f"><button  href="fff" class="btn btn-warning btn-lg"><a href="<?php echo site_url('User/vote/'. $lembaga .'/'. $nomor .'/'. $row->nama_ketua .'/'. $row->nama_wakil .''); ?>"><span class="mif-checkmark"></span> Pilih Calon</a></button></td>
								    </tr>
						     </table>
							  <?php } ?>
							  </li>
							  <li>
							  <button  href="javascript:window.history.back();" class="btn btn-danger btn-lg"><a href="javascript:window.history.back();"><span class="mif-arrow-left"></span> Kembali</a></button>
							  <button  href="<?php echo site_url('User'); ?>" class="btn btn-info btn-lg"><a href="<?php echo site_url('User'); ?>"><span class="mif-home"></span> Home</a></button>
							  </li>
		                          
		                        </ul>
		                           
						   </div>
		
		
			
		</div>
			
		<div data-role="dialog" id="dialog6" class="padding20" data-close-button="true" data-type="success">
           <center> <h1>About</h1></center>
            <p>
               Pada Halaman Ini User/Mahasiswa dapat memilih  Calon Ketua dan wakil Organisasi mahasiswa UNRIYO
            </p>
			
        </div>
		
		<div data-role="dialog" id="dialog7" class="padding20" data-close-button="true" data-type="warning">
		
		</div>
	</body>
</html>

