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
<form role="form" method="post" action="uploadnotes.php">
<table align="center" width="30%" border="0">
<tr>
<td><button type="submit" class="btn-primary" name="submit1">Faculty</button></td>
</tr>
<tr>
<td><button type="submit" class="btn-primary" name="submit2">Student</button></td>
</tr>

</table>
</form>
</div>
</center>


</body>
</html>
<?php

if(isset($_POST['submit1']))
{
	
	
		 header("Location: facultylogin.php");
	 
}


if(isset($_POST['submit2']))
{
	
	
		 header("Location: studentupload.php");
	
}
 
  ?>