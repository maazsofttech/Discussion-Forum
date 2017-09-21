<?php

 require_once 'connect.php';

    session_start();

if (!isset($_SESSION['user'])) 
{
header("location:SignIn.php");

}
 
$Name = $_SESSION['username'];
$id = $_SESSION['id'];
 
if(isset($_POST['sub'])) 
{
$id = $_SESSION['id'];

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
 { $ms = "even a single field should not be blank";}
     else
     {
  
mysql_query("UPDATE user_profile SET Skills ='$skills', Work_AT = '$work' , hobby = '$hobby' WHERE User_ID ='$id'");
  header("location:UserProfile.php?ID=$id");
     }
 }

 
 
 else {
     
    if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
&& $FileType != "gif")
        
    {
        echo "pic format is not supported";
    }
    
    //else if(!isset($_POST['work']) && !isset($_POST['skills']) && !isset ($_POST['hobby'])) {
        
      //  move_uploaded_file($file_loc,$folder.$file);
        
        
     
    //mysql_query("UPDATE user_profile SET Pro_Pic = '$file' WHERE User_ID ='$id'");}
    
    
    
    else {
         if( strlen($skills)  <  1 ||   strlen($work)<1 || strlen($hobby) <1 )
 { $ms= "even a single field should not be blank";}
     else
     
        
        
     {  
        
        
        move_uploaded_file($file_loc,$folder.$file);
        
        
     
    mysql_query("UPDATE user_profile SET Skills ='$skills', Work_AT = '$work' , hobby = '$hobby' ,Pro_Pic = '$file' WHERE User_ID ='$id'");
   
    
      header("location:UserProfile.php?ID=$id");
     }
    
     }
    
    
}
 
 
 


}
 

    ?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
            
        
   <meta charset="utf-8">
        <title>
            update your profile <?=$Name?> 
        
        </title>
   <style>
       #form {background: #123456; color :white ;margin-top: 5% }
   </style>
    
    </head>

    <body>
        <div id ="form">
            <center>    <h1>
                Welcome <?=$Name?> update you profile 
                </h1>
                <h2>
                    <?php if(isset($_POST['sub'])){echo $ms;}?>
                </h2></center>
            <tabel border="1">
                <center>   <form action="" method="post" enctype="multipart/form-data"> 
                <br><br><br> where do you work  &nbsp;  <input type ="text" name ="work"  placeholder = " update where do you work"/> 
                <br><br> update your skills &nbsp; &nbsp;    <input type ="text" name = "skills" placeholder ="update your professional skills" /> 
 <br><br> update your hobbies  <input type ="text" name = "hobby" placeholder ="enter your hobbies" /> 
 <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update your profile picture   <input type ="file" name  = "pro_pic" value= "update your profile picture" />    
     
 <br><br><br>   <input type="submit" value="update profile" name ="sub"/> 
   
            </form>
                    <a href ="UserProfile.php?ID=<?=$id?>"><input type="button" value ="cancel"></a>
                </center></tabel>
        </div>
    </body>
</html>