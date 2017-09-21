 <?php

require_once 'connect.php';

    session_start();

if (!isset($_SESSION['user'])) 
{
header("location:SignIn.php");

}




echo "id".$A = $_GET['ID'];
"<br>".
  
$f = mysql_query("SELECT * FROM user_accounts WHERE User_ID ='$A' ");
$ff = mysql_fetch_array($f);
$NA= $ff['First_Name']." ".$ff['Last_Name']." Profile" ;

  
echo "<center><h1>".$NA ."</h1></center>";
$E = $ff['Email_ID'];




?>


 
   
<?php
$p = mysql_query("SELECT * FROM user_profile WHERE User_ID = '$A'");

$pp = mysql_fetch_array($p);

   $hob=    $pp['hobby'];
   $skill = $pp['Skills'];
   $wr = $pp['Work_AT'];
   
   $dp = $pp['Pro_Pic'];
   
   if(strlen($dp) <1)
   {
       $dp = '../nodp/nodp.jpg';
   }
   
  // $realdp =  '<img src = ../profile_upload/'. $dp .' />';

?>
<html>
    <head>
        
<meta name="viewport" content="width=device-width, initial-scale=1">

   <meta charset="utf-8">
    <title>
        <?=$NA ?>
    
        
    
    </title>

<link rel='stylesheet' href='../css/bts.css' type='text/css' />
   <style>
   body{background:#00385B;}
   h1{color :white;}
     #im img {width:80%; }
    #qq {background: #0099FF; color: white}
     .label label-default h3{background: white;   }
     h4{padding-left: 14%}
     
    </style>
    
    </head>
    
    <BODY>
        
        <div class="container">  
            <h3> <a href = "../index.php">back to home </a></h3>
           <div class ="container"
		   
		   <div class="row" id = "qq">
                
                <div class="col-sm-6">
                     
                    
                    <h1><span class="label label-default">
                        <?=$NA ?></span>
                        
                    </h1>
                    
                    <h3>
                        <?=$E ?>
                    </h3>
                    
                    <div id ="bio">
                       <h3><span class="label label-default">Work @</span></h3> 
                        <h4>
                            <?=$wr ?>
                        </h4>
                       <h3><span class="label label-default">Skills</span></h3>
                        <h4>
                            <?=$skill ?>
                        </h4>
                        
                       <h3><span class="label label-default">Hobby</span></h3>
                        <h4>
                            <?=$hob ?>
                        </h4>
                    </div>
                    
                        
                    
                    
                </div>
                
                
                <div class="col-sm-6">
         
                <div id ="im"><?='<img src = ../profile_upload/'. $dp .' class="img-circle"    />'?>  </div>
        </div>
            </div><center><br>
			<?php

if($A === $_SESSION['id'])
    
{
    
    $c = mysql_query( "SELECT User_ID FROM user_profile WHERE User_ID = '$A'");
    $CC = mysql_fetch_array($c);
    
    if($CC['User_ID']=== $A)
    {
    echo ' <a href ="UpdatePro.php"><input type ="button" name  = "update" value = "update your profile " /></a> ';
    }
    else 
    {
       echo ' <a href ="MakePro.php"><input type ="button" name  = "update" value = "make your profile " /></a> ';  
    }
}



?>
     </center>       </div>
   
   </div>  
    </BODY>
</html>