
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Failed Login!!</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <div class="page-error">
	<center>
      <h1><i class="fa fa-exclamation-circle"></i> Peringatan!!!!</h1>
      <p>Proses Pemilihan Belum Dapat Dilakukan </p>
       <small>Pemilu akan diselenggarakan pada <?php echo $tgl; ?> Pukul : <?php echo $jam1; ?>  samapi  <?php echo $jam2; ?></small>
      <p><a href="javascript:window.history.back();">Kembali Ke-Home</a></p>
</center>   
   </div>
  </body>
  <script src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/plugins/pace.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
</html>