<?php

 require_once 'connect.php';

    session_start();

if (!isset($_SESSION['user'])) 
{
header("location:SignIn.php");

}
if(isset($_POST['sub'])) 
{
$id = $_SESSION['id'];
$Name = $_SESSION['username'];
$email = $_SESSION['user'];
$work = $_POST['work'];
$skills = $_POST['skills'];
$hobby = $_POST['hobby'];



   $files = rand(1000,100000)."-".$_FILES['pro_pic']['name'];
	   $file = preg_replace('/\s+/', '_', $files);
    $file_loc = $_FILES['pro_pic']['tmp_name'];
 $folder="../profile_upload/";
 $target_file = $folder.basename($_FILES["pro_pic"]["name"]);
 $FileType = pathinfo($target_file,PATHINFO_EXTENSION);

 if(!file_exists($_FILES['pro_pic']['tmp_name']) || !is_uploaded_file($_FILES['pro_pic']['tmp_name']))
     
 {  
   if( strlen($skills)  <  1 ||   strlen($work)<1 || strlen($hobby) <1 )
 {$mss= "even a single field should not be blank";}
    else  
 {
     $inq = mysql_query("INSERT INTO user_profile (User_ID,Name,Email_ID,Skills,Work_AT,hobby) VALUES ('$id','$Name','$email','$work','$skills','$hobby') ");
   header("location:UserProfile.php?ID=$id");
     
 }
     
 }

 
 
 else {
      if( strlen($skills)  <  1 ||   strlen($work)<1 || strlen($hobby) <1 )
 { $mss= "even a single field should not be blank";}
     
     
   else if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
&& $FileType != "gif")
        
    {
        echo "pic format is not supported";
    }
    else {
        
        move_uploaded_file($file_loc,$folder.$file);
        
    mysql_query("INSERT INTO user_profile (User_ID,Name,Email_ID,Skills,Work_AT,hobby,Pro_Pic) VALUES ('$id','$Name','$email','$work','$skills','$hobby','$file') ");    
         header("location:UserProfile.php?ID=$id"); 
    }
    
    
}
 
 
 


}
 

    ?>


<html>
    <head>
        <title>
            setup you profile <?=$_SESSION['username'];?>
        </title>
    <style>
       #form {background: #123456; color :white ;margin-top: 5% }
   </style>
    </head>
    <body>
<h1>
    Welcome <?=$_SESSION['username'];?> make your profile for the first time
</h1>
<div id="form">
 <center>  
     <h2>
         <?php if(isset($_POST['sub'])){echo $mss;}?>
     </h2>
     <form action="" method="post" enctype="multipart/form-data"> 
                <br><br><br> where do you work  &nbsp;  <input type ="text" name ="work"  placeholder = " insert where do you work"/> 
                <br><br> insert your skills &nbsp; &nbsp;    <input type ="text" name = "skills" placeholder ="insert your professional skills" /> 
 <br><br> insert your hobbies  <input type ="text" name = "hobby" placeholder ="enter your hobbies" /> 
 <br><br> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;insert your profile picture   <input type ="file" name  = "pro_pic" value= "insert your profile picture" />    
     
 <br><br><br>  &nbsp;&nbsp;&nbsp; <input type="submit" value="setup profile" name ="sub"/> 
   
     </form></div>
 </body>
 ></html>