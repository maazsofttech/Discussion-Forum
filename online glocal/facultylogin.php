<!DOCTYPE HTML>
<html>
<head>
<title>online glocal</title>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-alpha.5-dist\css\bootstrap.css" media="all"/>
<link rel="stylesheet" type="text/css" href="styles/style1.css" media="all"/>
</head>
<body>
<center>
<div id="login-form">
<form role="form" method="post" action="facultylogin.php">
<table align="center" width="30%" border="0">
<tr>
<td align="center" id="1">ENTER YOUR PASSWORD</td>
</tr>
<tr>
<td><input type="password" name="pass" class="form-control"  placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" class="btn-primary" name="submit">Submit</button></td>
</tr>

</table>
</form>
</div>
</center>


</body>
</html>
<?php

if(isset($_POST['submit']))
{
	
	$password = $_POST['pass'];
	 if($password=="srk"){
		 header("Location: option.php");
	 }
	 else{
		 echo "<script>alert('please enter correct password')</script>";
	    exit();
	 }
}
  ?>