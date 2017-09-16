<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  </head><body>
  <?php 
  
  if($fotok==''){
							 $fk="user.png";

							 
							 }else{
							 $fk=$fotok;
							 
							 }
  ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Profile Calon Ketua <?php echo $lembaga; ?> Nomor Urut <?php echo $nomor; ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">
                <!--?php echo $nama; ?-->
              </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                  <img alt="User Pic" src="<?php echo base_url(); ?>asset/img/calon/ketua/<?php echo $fk; ?>"" class="img-circle img-responsive">
                </div>
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nim</td>
                        <td>
                          <?php echo $nimk; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Nama</td>
                        <td>
                          <?php echo $namak; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Fakultas</td>
                        <td><?php echo $fak_ketua; ?></td>
                      </tr>
                      <tr></tr>
                      <tr>
                        <td>Prodi</td>
                        <td>
                          <?php echo $prod_ketua; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Organisasi</td>
                        <td>
                          <?php echo $lembaga; ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Bio</td>
                        <td>
                         <div class="row">
          <div class="col-md-12">
           <?php echo $bio_ketua; ?>
          </div>
        </div>
                        </td>
                      </tr>
					  <tr>
                        <td>Nomor</td>
                        <td>
                          <?php echo $nomor; ?>
                        </td>
                      <tr>
                        <td>Visis Misi</td>
                        <td>
                          <?php echo $visi; ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="panel-footer">
									  <button  href="javascript:window.history.back();" class="btn btn-danger"><a href="javascript:window.history.back();"><span class="mif-arrow-left"></span> Kembali</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>