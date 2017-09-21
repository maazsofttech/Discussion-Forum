<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
         require_once('php/connect.php');
		 
		 ?>
		 
		 
		 
        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>FORUM | register   </title>
<link rel='stylesheet' href='css/maincss.css' type='text/css' />

<link rel='stylesheet' href='css/bts.css' type='text/css' />

</head>
<body >
<div class="container-fluid">
 <div class="row">
 <div class="col-xs-12">
<div class="mail">
    
<h2>Please fill the form to register on forum </h2>

 
<form name="form1" action="welcome.php" method="POST"   >
<ul>
    <li><input type='text'  name='first_name' placeholder="Enter your first name " /></li>
    
<li class="rq">*Enter alphabets only.</li>
<br>
<li><input type='text' name='last_name' placeholder="Enter you last name "  /></li>

<li class="rq">*Enter alphabets only.</li>

<br>
<li><input type='email' name='email' placeholder="Enter your email id "/></li>

<li class="rq">*enter a valid email address.</li>




<br>
<li><input type='password' id="p1" name='password' placeholder='Enter a strong password atleast of 5 characters' /></li>


<li class="rq">*Enter numbers and alphabets only.</li>
<br>
<li><input type='password' id = "p2" name='confirm_password' placeholder="confirm your password"/></li>



 

 
<li>&nbsp;</li>
<li><input type="submit" name="submit" value="sign up" onclick =  "return  allLetter(document.form1.first_name);  "

</li>
<li><p style="color: white">already have an account</p> <a href="php/SignIn.php">Sign In</a>
</li>
<li>&nbsp;</li>
</ul>
</form>
</div>
</div>
</div>
</div>
    <script src="javascript/validation.js"></script>
    
    
    
    
    
     <?php
        
           include ('php/insertInDatabase.php');
           
            
      ?>
    
    
    
    
    
         
       
  
    
        
       
  
    </body>
</html>
