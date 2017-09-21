
  <?php
  require_once('connect.php');
  ?>



        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>FORUM | Sign In  </title>
<link rel='stylesheet' href='../css/maincss.css' type='text/css' />

<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' />
<style>
#wh{color :white}
</style>
</head>
<body >
<div class="container-fluid">
 <div class="row">
 
 <div class="col-xs-12">
<div class="mail">
    
<h2>Please log in </h2>

 
<form name="SignIN"  role="form" action="" method="POST"   >
<ul>
     
    
 

 


<li><input type='email' name='email' class="form-control" placeholder="Enter your email id "/></li>

 




<br>
<li><input type='password' id="p1" name='password' placeholder='enter your password' /></li>


 


 

 
<li>&nbsp;</li>
<li><input type="submit" name="submit" value="Sign In"    >
    <hr  style ="height:10%">
 
<li>&nbsp;</li>
don't have an account <a id = "wh" href ='../ind.php'>Sign Up</a>
</ul>
    
    
</form>

</div>
</div>
</div>
    
</div>
    
    
</body>

</html>



<?php

if (isset($_POST['submit']))
    
{
    
    session_start();
    
$eml = $_POST['email'];

$pswrd = $_POST['password'] ;


$checkIn = mysql_query("SELECT * FROM user_accounts WHERE ( Email_ID = '".$eml."' AND pass_word = '".$pswrd."')  LIMIT 0,1");

//$check = mysql_fetch_array($checkIn);
 

if(($check = mysql_fetch_array($checkIn))==true)
     
{
     
   echo "done";
   echo $check['Pass_word'];
   
 echo "<a href ='SignOut.php'> signout</a>";
   $_SESSION['id'] = $check['User_ID'];
 $_SESSION['user'] = $eml;
  
   $_SESSION['username'] = $check['First_Name']." ".$check['Last_Name'] ;
   
   header("location:pro_forum.php");
          
      //echo   $check['pass_word'];
  
  
     
 }
 else
 {
     
      header("location:SignInError.php");
    
 }
 
}         
 ?>


