
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
    <title>Peringatan</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
  <?php error_reporting(0); ?>
    <div class="page-error">
      <h1><i class="fa fa-exclamation-circle"></i> Proses Gagal</h1>
      <p>Data nim yang anda masukan sudah terdaftar di Sistem</p>
      <p><a href="javascript:window.history.back();">Kembali</a></p>
    </div>
  </body>
  <script src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/plugins/pace.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
</html>