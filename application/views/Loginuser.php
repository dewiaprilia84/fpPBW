<?php
$assets_location = base_url()."assets/";
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylelogin.css">


</head>

<body>

  <div class="login">
  <h2>Seger Sumyah Log in member</h2>
  <fieldset>
		<form action="<?php echo base_url().'index.php/login_user/loginuser'; ?>" method="post">
    <input type="text" name="username" placeholder="username">
  	<input type="password" name="password" placeholder="password">
  </fieldset>
  <input type="submit" value="Login">
	</form>
  <div class="utilities">
    <a href="<?php echo base_url();?>/index.php/MyController">kembali &rarr;</a>
  </div>
</div>

</body>
</html>
