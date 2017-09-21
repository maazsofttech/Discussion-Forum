


<html>
    
    <head>
        <title>
           
        </title>
        
        <link rel='stylesheet' href='../css/bts.css' type='text/css' />
        <style>
            h1{color:cyan}
            body{background: #123456}
            a{color:white}
            
        </style>
        
    </head>
</html>

<?php

/* 
s. * To change this license header, choose License Headers in Project Propertie * and open the template in the editor.

 * To change this template file, choose Tools | Templates
 */


   require_once('connect.php');
//require ('../index.php');
   require('insertInDatabase.php');
    

 
  if (isset($_POST['submit'])) {
//$welcome = mysql_query("select * from user_accounts");
//while ($data = mysql_fetch_array ($welcome))
//{
//echo    "<h1>" . $data['First_Name'] . "<br>"."<h1>";
//}
  
      
      echo   $msg ;
echo '<a href ="../ind.php">  <button type="button" class="btn btn-primary">try again</button></a>';
  }
?>
