<html>
<head>
<title>send feedback </title>
<link rel='stylesheet' href='../css/bts.css' type='text/css' />
         <meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body{background:#00385B; color:white;}
</style>
</head>

<body>
 <?php
session_start();
require_once 'connect.php';

if (!isset($_SESSION['user'])) 
{
header("location:SignIn.php");
}
 
 
 
 
 
 
 
?>



<center><h1 style="color:white;margin-top:5%;"> Welcome <?=$_SESSION['username']?> send feedback</h1>

<form action="" role="form" method="post" enctype="multipart/form-data"> 
            
                     
  
  
        <input type ="text" class="form-control" style="height:60px;width:50%;font-size: 20pt ;margin-top:12%;" name ="comment" placeholder="write to admin...!"    >
            <br>
            <br>
            
           
              
         <input type ="submit" value ="send your feedback" class="btn btn-default" name ="postbutton"  />
            
            
                 </form>
				 
				 
				 <?php
				 
				 if(isset($_POST['postbutton']))
				 {
					 
					 $msg = $_POST['comment'];
					 if(strlen($msg)<1)
					 {echo "<h3>your message must not be blank</h3>";}
              else {					
					$name = $_SESSION['username'];
					 $id = $_SESSION['id'];
					 
					 
					  date_default_timezone_set("Asia/Kolkata");
    $da =  date('j-M-Y');
    $ti  = date('h:i:s A');
					 
	mysql_query("INSERT INTO feedback (User_ID,Name,feedback,date,time) VALUES ('$id','$name','$msg','$da','$ti')");
			 
			 echo "<h3>your message has been sent</h3>";
				header( "refresh:2; url=../index.php" );	 
					 
			  }			
			}
				 
				 
				 
				 ?>

 </center>
				 </body>
</html>