<?php
$assets_location = base_url()."assets/";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Seger Sumyah</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $assets_location;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='<?php echo $assets_location;?>http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo $assets_location;?>js/jquery1.min.js"></script>
<!-- start menu -->
<link href="<?php echo $assets_location;?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $assets_location;?>js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- dropdown -->
<script src="<?php echo $assets_location;?>js/jquery.easydropdown.js"></script>
</head>
<body>
        <div class="login">
          	<div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">Terimakasih Atas Kunjungan Anda :)</h4>
					<p>Customer baru dapat melakukan registrasi terlebih dahulu sebelum melakukan pembelian makanan dan minuman, apabila sebelumnya sudah terdaftar maka tinggal langsung login saja untuk melakukan pembelian</p>
					<div class="button1">
					   <a href="<?php echo base_url();?>/index.php/Form/index"><input type="submit" name="Submit" value="Create an Account"></a>
					 </div>
				</div>
			</div>
		</div>				
</body>
</html>