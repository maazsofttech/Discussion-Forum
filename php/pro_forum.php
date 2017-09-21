<?php
ob_start();
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
        <link rel="icon" href="images/fav.png">
		 <link href="../demo_2/css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css"> 
       <style>body {
		background: url(../images/wq.jpg);}
		      #chz{color:white;} 
                      .dropdown ul li a:hover{
	background-color:#222222;
	color:white;
       font-weight:bold;}
                      #fl{color:white}
                      label{color: white}
   #bk{ float:left; width: 100%; height: 100%; position:fixed;} 
         #bk img{width: 100%;height: 100%}
          #dp {width:10%;}
         #dp img {width:250%;}
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
	<div class = "container">
	  <div class="page-header">
  <h1>forum
  </h1>
</div>
  <div class="row"  >  
      <div class = "col-sm-6">						                        <h1 style ="color:#ffffff">Welcome <br> <br>
												<?php $nn=  $_SESSION['username']; 
                                                                                                $nb = $_SESSION['id'];
               echo"<a href =UserProfile.php?ID=".$nb.">".  $nn ."</a>" ;
                $q=       mysql_query("SELECT * FROM user_profile WHERE User_ID = '$nb' ");
                ?>
              <br><br>
              <?php
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
                    ?> </div>
					<div class = "col-sm-6">
	  <nav class="navbar navbar-inverse" role="navigation">
	    <div class="navbar-header">
	         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php"> Back to Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">  All Recent Queries  <b class="caret"></b></a>
		            <ul class="dropdown-menu">     
			            <li><a href = "pro_UserQueries.php">Programming Queries</a></li> 
			            <li><a href = "os_UserQueries.php">Operating System Queries</a></li> 
			            <li><a href ="net_UserQueries.php">Networking Queries</a></li>
						 <li><a href ="algo_UserQueries.php">  Design & Analysis of Algorithms Queries</a></li>
						<li><a href ="cd_UserQueries.php"> Compiler Design Queries</li>
						<li> <a href ="arch_UserQueries.php">Computer Architecture Queries</a></li>
						<li> <a href ="tc_UserQueries.php">Theory of Computation Queries</a></li>
						<li><a href ="ds_UserQueries.php">Data Structure Queries</a></li>
                         <li><a href ="dbms_UserQueries.php">D.B.M.S Queries</a></li>
						 <li><a href ="dm_UserQueries.php">Discrete Maths Queries</a></li>
						 <li><a href ="other_UserQueries.php">Other Queries</a></li>
			            </ul>
		        </li>
		 </ul>
        </div>
	</nav> 
	  <br><br>       
	   <h4 id = "chz"> Select Your Subject</h4>  
             <center>    <form  role="form" method="post" enctype="multipart/form-data"> 
    <select class="form-control" id="sel1" name ="sbjct">
    <option >Programming</option>
	<option >Operating System</option>
	<option >Algorithms</option>
	<option >Networking</option>
	<option  >Compiler Design</option>
	<option  >Computer Architecture</option>
	<option  >Theory of Computation</option>
	<option  >Data Structure</option>
	<option  >D.B.M.S</option>
	<option  >Discrete Maths</option>
	<option  >Other</option>
	  </select>
 <br>     
             <input type ="text" class="form-control" style="height:60px;width:100%;font-size: 20pt" name ="comment" placeholder="What's in your mind?">
            <br>
            <br>
             <label>  Upload a file ?</label> <input type="file" id ="fl" name="file" />
            <input type ="text"  class="form-control"  style="height:35px;width:38%;font-size: 12pt"   name ="title" placeholder="enter the tilte of  file"/>
            <br>
              <input type ="submit" value ="post your query" class="btn btn-primary" name ="postbutton"  />
            </form>
           	   <br>
         <a href =SignOut.php>  <button type="button" class="btn btn-primary">Sign out</button></a></center>
           </div>
		  </div>
         </div>
<script type="text/javascript" src="../demo_2/js/b.js"></script>
<script type="text/javascript" src="../demo_2/js/bootstrap-3.1.1.min.js"></script>
		  </body></html>
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
else if ($sbname=='Computer Architecture')
{header("location:arch_UserQueries.php");}
else if ($sbname=='D.B.M.S')
{header("location:dbms_UserQueries.php");}
else if ($sbname=='Data Structure')
{header("location:ds_UserQueries.php");}
else if ($sbname=='Discrete Maths')
{header("location:dm_UserQueries.php");}
else if ($sbname=='Theory of Computation')
{header("location:tc_UserQueries.php");}
else if ($sbname=='Other')
{header("location:other_UserQueries.php");}
else if ($sbname=='Compiler Design')
{header("location:cd_UserQueries.php");}
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
else if ($sbname=='Computer Architecture')
{header("location:arch_UserQueries.php");}
else if ($sbname=='D.B.M.S')
{header("location:dbms_UserQueries.php");}
else if ($sbname=='Data Structure')
{header("location:ds_UserQueries.php");}
else if ($sbname=='Discrete Maths')
{header("location:dm_UserQueries.php");}
else if ($sbname=='Theory of Computation')
{header("location:tc_UserQueries.php");}
else if ($sbname=='Other')
{header("location:other_UserQueries.php");}
else if ($sbname=='Compiler Design')
{header("location:cd_UserQueries.php");}

}   
        }
 }
 ob_flush();
 ?>