<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */





require_once 'connect.php';

    session_start();

if (!isset($_SESSION['user'])) 
{
header("location:SignIn.php");

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Forum put your query
        </title>
       <link rel='stylesheet' href='../css/bts.css' type='text/css' />
        <style>
           #chz{color:white;} 
         #bk{ float:left; width: 100%; height: 100%; position:fixed;} 
         #bk img{width: 100%;height: 100%}
         #c  {     }
         #dp {width:10%;}
         #dp img {width:200%;}
         #for button{color:#265a88;background: #265a88;}
         .container-fluid{position: absolute}
       .col-md-6 h1{font-size:50pt}
        .col-md-6 h1 a{text-decoration:none}
		
		.col-md-6 h1 :hover {
  color: white ;
  background-color: #123456 ;
}
        
        
        #b{color:white; font-size: 40pt;  } 
        
          
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
        
      
        
           
            
        <div id ='bk'>
            <img src ='../images/rr.jpg'/>
        </div>
         
           
                 
                
          <div id ='c'> 
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-6">  
            
                             <div id ="b"> Hello</div>  <h1 style ="color:#ffffff"> <?php $nn=  $_SESSION['username']; 
             $nb = $_SESSION['id'];
        
   
            echo"<a href =UserProfile.php?ID=".$nb.">".  $nn ."</a>" ;
           
                     
             $q=       mysql_query("SELECT * FROM user_profile WHERE User_ID = '$nb' ");
             $qq = mysql_fetch_array($q);
             $qqq =$qq['Pro_Pic'];
               $a= strlen($qqq);
               if($a!=0)
               {
                 echo '<div id="dp"><img src = ../profile_upload/'. $qqq .' class="img-circle" > </div>  ';
               }
              else
              {
                   echo '<div id="dp"><img src = "../nodp/nodp.jpg" class="img-circle"> </div>  ';
              }
                    ?>
          </h1></div> 
                              
             <div class="col-md-6"> 
     <br><br><br>
        
        
       
      
        
        <br><br>
        
		
		
		 <a href =pro_UserQueries.php>  <button type="button" class="btn btn-primary">Programming queries</button></a>
		<a href =algo_UserQueries.php>  <button type="button" class="btn btn-primary">Algorithms queries</button></a>
		<a href =net_UserQueries.php>  <button type="button" class="btn btn-primary">Networking queries</button></a>
		<a href =os_UserQueries.php>  <button type="button" class="btn btn-primary">O.S queries</button></a>
		 
		<a href =cd_UserQueries.php>  <button type="button" class="btn btn-primary">Compiler Design queries</button></a>
		<a href =arch_UserQueries.php>  <button type="button" class="btn btn-primary">Computer System Architecture queries</button></a>
		<a href =dbms_UserQueries.php>  <button type="button" class="btn btn-primary">D.B.M.S queries</button></a>
		<a href =dm_UserQueries.php>  <button type="button" class="btn btn-primary">Discrete Maths queries</button></a>
		<a href =ds_UserQueries.php>  <button type="button" class="btn btn-primary">Data Structure queries</button></a>
		<a href =tc_UserQueries.php>  <button type="button" class="btn btn-primary">Theory of Computation queries</button></a>
		<a href =other_UserQueries.php>  <button type="button" class="btn btn-primary">Other queries</button></a>
		
		
		
		
		
		
		
		
		
 <br><br>       
	   <h4 id = "chz">  Select Your Subject</h4>  
          
        
         
         <div id ="for">
             <center>    <form action="" role="form" method="post" enctype="multipart/form-data"> 
            
                     
  
  
  
  
 
    <select class="form-control" id="sel1" name ="sbjct">
    
   
	<option >Programming</option>
	<option >Operating System</option>
	<option >Algorithms</option>
	<option >Networking</option>
	 
  </select>
  
  
  <br>
  
  
  
  
  
  
                     
                     
             <input type ="text" class="form-control" style="height:60px;width:100%;font-size: 20pt" name ="comment" placeholder="What's in your mind?"    >
            <br>
            <br>
            
           <label> Can also upload a file</label> <input type="file" name="file" />
            
            
            <input type ="text"  class="form-control"  style="height:35px;width:38%;font-size: 12pt"   name ="title" placeholder="enter the tilte of  file "/>
            <br>
              
         <input type ="submit" value ="post your query" class="btn btn-primary" name ="postbutton"  />
            
            
                 </form></center>
         </div>
         
          
         
<a href =../index.php><button type="button" class="btn btn-primary">back to home </button></a></a>
		   <br><br>
         <a href =SignOut.php>  <button type="button" class="btn btn-primary">Sign out</button></a>
          
          
          <br>
          <br>
          <br>
         
             </div></div>
          </div> </div>    </body></html>


<?php




if(isset ($_POST['postbutton']))
                       
                     
        {
           
      $name = $_SESSION['username']; 
      $eml = $_SESSION['user'];
      
      
      $sbname = $_POST['sbjct'];
     
      
      $qB = $_POST['comment'];
   
       
      
      
      
      
 $q = mysql_query("SELECT * from user_accounts WHERE Email_ID =   '$eml'  ");
$qu = mysql_fetch_array($q); 
        
      
      $qq = $qu['User_ID'];
        
   //  echo $t = now();
      
  date_default_timezone_set("Asia/Kolkata");
    
   $da = date('j-M-Y');
   
      $ti  = date('h:i:s A');
      
      
      
      
      
      
     
     if(!file_exists($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name']))
      
      
      
     {
 


 
 
   if( strlen($qB)< 1)
 {echo "your post should not be blank";}
 
 
 
 else
 
     
     
 {  
  
 mysql_query(" INSERT INTO  pro_user_queries (User_ID, Name,User_Query, Query_Date,Time,subject) VALUES ('$qq','$name','$qB','$da','$ti','$sbname')");
      
      
     if ($sbname=='Programming')

{header("location:pro_UserQueries.php");}

else if ($sbname =='Networking')

{header("location:net_UserQueries.php");}


else if ($sbname=='Operating System')
{header("location:os_UserQueries.php");}

else if ($sbname=='Algorithms')
{header("location:algo_UserQueries.php");}





	 }
 
  
      
     }    
      
      
      
      
      
      
      
      
      
      
      
      
      
     
   else 
      {
          
       $files = rand(1000,100000)."-".$_FILES['file']['name'];
	   $file = preg_replace('/\s+/', '_', $files);
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="../queries_upload/";
 $mn = NULL ;
 $title = $_POST['title'];
 
 $target_file = $folder.basename($_FILES["file"]["name"]);
 $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
 
   if( strlen($qB)< 1)
 {echo "your post should not be blank";}
 
 
 
 else if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
&& $FileType != "gif" && $FileType != "pdf" &&$FileType != "xlsx" && $FileType != "doc" &&$FileType != "ppt" && $FileType != "pps" && $FileType != "zip"
         
    &&$FileType != "mp4"    &&$FileType != "docx"	&& $FileType != "3gp"  && $FileType != "pptx" && $FileType != "ppt"   &&$FileType !="txt")
    
 
 {
    // if(isset($_POST['comment']) && !isset($_FILES['file']))
         
         
 echo "it seems your files format is not supported by our system kindly zip your file & then upload it ...we are sorry for trouble!!!"; 

      
 }
 
 else
 
     
     
 {  move_uploaded_file($file_loc,$folder.$file);   
  
 mysql_query(" INSERT INTO  pro_user_queries (User_ID, Name,User_Query, Query_Date,Time,file,type,file_title,subject) VALUES ('$qq','$name','$qB','$da','$ti','$file','$file_type','$title','$sbname')");
      
      
if ($sbname=='Programming')

{header("location:pro_UserQueries.php");}

else if ($sbname =='Networking')

{header("location:net_UserQueries.php");}


else if ($sbname=='Operating System')
{header("location:os_UserQueries.php");}

else if ($sbname=='Algorithms')
{header("location:algo_UserQueries.php");}

	 } 
      
      }
 
 
 
  
 
 }
 ?>