<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>
  
  <body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
		  <?php for($i=1; $i<=$jum; $i++){ ?>
            <ul class="media-list">
              <li class="media">
                <div class="media-body">
                  <h4 class="media-heading"><center><?php echo eval('return $'. 'nomor' .$i. ';'); ?> </center></h4>
                  <p>Nama Ketua : <?php echo eval('return $'. 'nama_ketua' .$i. ';'); ?> </p>
				  <p>Nama wakil : <?php echo eval('return $'. 'nama_wakil' .$i. ';'); ?> </p>
				  <p>Jumlah Suara: <?php echo eval('return $'. 'jumlah' .$i. ';'); ?>  </p>
                </div>
              </li>
             
            </ul>
			<?php } ?>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>