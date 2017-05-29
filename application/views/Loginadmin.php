<?php
$assets_location = base_url()."assets/";
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style type="text/css">
table
{
	position: absolute;
	height: 100px;
	top: 50%;
	left: 50%;
	margin: -100px 0 0 -150px;
}
</style>
</head>
<body>
<form method="post" action="<?php echo base_url().'index.php/admin/dashboard/login'?>">
<table>
	<tr>
	<td>Username</td>
	<td><input type="text" name="username"></td>
	</tr>
	<tr>
	<td>Password</td>
	<td><input type="password" name="password"></td>
	</tr>
	<tr>
<td></td>
<td><input type="submit" value="LOGIN" name="submit"></td>
</tr>
<tr>
<!-- <td colspan="2"><?php echo $err_message;?></td> -->
</tr>
</table>
</form>
</body>
</html>