<?php
$assets_location = base_url()."assets/";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Free Leoshop Website Template | Womens :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $assets_location;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $assets_location;?>css/form.css" rel="stylesheet" type="text/css" media="all" />
        <link href='<?php echo $assets_location;?>http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
        <script src="<?php echo $assets_location;?>js/jquery1.min.js"></script>
        <!-- start menu -->
        <link href="<?php echo $assets_location;?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="<?php echo $assets_location;?>js/megamenu.js"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
        <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
</head>
<body>
     <div class="header-top">
            <div class="wrap"> 
                <div class="header-top-left">
                    <div class="clear"></div>
                </div>
                <div class="cssmenu">
                    <ul>
                        <li class="active"><a href="<?php echo base_url();?>index.php/Form">Register</a></li> |
                       <!-- <li><a href="checkout.html">Wishlist</a></li> |
                        <li><a href="checkout.html">Checkout</a></li> |-->
                        <li><a href="<?php echo base_url();?>index.php/login_user">Log In</a></li> |
                        <li><a href="register.html">Sign Up</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.html"><img src="<?php echo $assets_location;?>images/LOGOSS.JPG" alt=""/></a>
				</div>
				<div class="menu">
	             <ul class="megamenu skyblue">
                            <li class="active grid"><a href="<?php echo base_url();?>/index.php/MyController">Home</a></li>
                            <li><a class="color4" href="<?php echo base_url();?>/index.php/MyController/makanan">Makanan</a>

                            </li>				
                            <li><a class="color5" href="<?php echo base_url();?>/index.php/MyController/minuman">Minuman</a>

                            </li>
                           
                        </ul>
                </div>
        </div>
     <div class="clear"></div>
        </div>
    </div>
    <div class="mens">    
  <div class="main">
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<h2 class="head">Makanan</h2>
		  	<div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		            
		       
               </div>
    		</div>
        <div class="pager">   
        	

	   		<div class="clear"></div>
    	</div>
     	<div class="clear"></div>
	  </div>



	  <!-- dari sini  pake viewa frontend content gallery -->
	  		<div class="top-box">
				<?php
                    $i=0;
            	foreach ($datakatalogminuman as $row) 
                { if($i%3===0)
                {
                    echo '<div class="top-box">';
                };
                    echo'
			 <div class="col_1_of_3 span_1_of_3"> 
			   <a href="single.html">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="'. base_url().$row['path'] .'"= alt="" style=width:276px;height:172px;
                        margin:0 auto"/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">
								 ' . $row['nama_minuman'] .'</p> 
							<div class="price1">
							  <p class="title">
								 ' . $row['harga_minuman'] .'</p>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>
                '; $i++;
                    if($i%3===0){                                echo '<div class="top-box">';
                                };};?>

				 <div class="clear"></div>
                </div>
            </div>
        </div>
        <script src="<?php echo $assets_location;?>js/jquery.easydropdown.js"></script>
        <div class="footer">
            <div class="footer-top">
                <div class="wrap">
                    <div class="section group example">
                        <div class="col_1_of_2 span_1_of_2">
                            <ul class="f-list">
                                <li><img src="<?php echo $assets_location;?>images/2.png"><span class="f-text">Free Shipping on orders over </span><div class="clear"></div></li>
                            </ul>
                        </div>
                        <div class="col_1_of_2 span_1_of_2">
                            <ul class="f-list">
                                <li><img src="<?php echo $assets_location;?>images/3.png"><span class="f-text">087752806361 </span><div class="clear"></div></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="wrap">
                          <div class="section group example">
                 <div class="col_1_of_f_2 span_1_of_f_2">
                    <h3>Information</h3>
                    
                            <div class="company_address">
                             <p>Menu makanan lengkap</p>
                             <p>Menu lengkap penyetan</p>
                             <p>Aneka minuman dan Jus</p>
                            <p>Menu lengkap sego njamoer </p>
                            <p>Jajanan ringan</p>
                            <p>Batagor dan bakso</span></p>
                            
                       </div>
                       
                </div>
                        
                 </div>
                 <div class="col_1_of_f_2 span_1_of_f_2">
                   <h3>Contact us</h3>
                        <div class="company_address">
                    
                                    <p>087752806361</p>
                            <p>Phone:(031) 222 666 444</p>
                            <p>Email: <span>segersumyah.com</span></p>
                            
                       </div>
                       
                </div>
                <div class="clear"></div>
            </div>
           </div>
          <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
            <div class="wrap">
                 <div class="copy">
                
                 </div>
                <div class="f-list2">
                 <ul>
                    
                 </ul>
                </div>
                <div class="clear"></div>
              </div>
         </div>
    </div>
</body>
</html>