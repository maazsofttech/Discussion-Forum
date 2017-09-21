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
<html>
    <head>
        <title>
            User Queries
        </title>
         <link rel='stylesheet' href='../css/bts.css' type='text/css' />
         <meta name="viewport" content="width=device-width, initial-scale=1">
		 <style>
		 
		 #zd{position:fixed; color :#65ACD6}
		 #btt{position:fixed; margin-top:4%;}
		 #d form{position: fixed; margin-top :10%;}
		  #d a{position: fixed; margin-top:6.5%;}
  #dp  {position : fixed; width:22%;}
		    #d img {width:37%;}
			#r{margin-top:30%;}
		 #no {background:red ;color:white} 
		 #y {background:#65ACD6 ;color:white}
		 #cv {color :grey; background:white}
		 #ma a{font-size:150%; }
		 #ma a:hover{
	background-color:#65ACD6;
	color:white;
       
	font-weight:bold;
	
}
 a :hover{background-color:#65ACD6}
 #tpb {position:relative;margin-top:40%;}
 
 
		 </style>
    </head>
    <body> 
	
         <div class="container">
        <div class="row">     
            <div class="col-sm-3" >
			<div class="row"> 
			 <div class="col-sm-4" >
			 </div>
			  <div class="col-sm-8" id="btt" >
 <a href =algo_UserQueries.php><button type="button" class="btn btn-primary">Refresh</button></a></a>
<br>
<br>
 <a href =pro_forum.php><button type="button" class="btn btn-primary">post query </button></a></a>
<br>
<br>
<a href =../index.php><button type="button" class="btn btn-primary">back to home </button></a></a>
  <br><br>
  <button type="button"onclick="window.scrollTo(0,100000000);" class="btn btn-primary">go to bottem </button>
  <br><br>
  <a href =SignOut.php><button type="button" class="btn btn-danger">Sign out</button></a>
  </div>
  </div>
  </div>

 <div class="col-sm-6"   >
<?php


 
    
	
	 
	






 $f = mysql_query("SELECT * FROM   pro_user_queries  WHERE    subject ='Algorithms'         order by Query_ID desc LIMIT 20 ");
 
 $msgs ="<h3>most recent  queries</h3>";
 if(isset($_POST['put']))
 {
	 
	 $yr = $_POST['yrr'];
 $dt 	= $_POST['dte'];
 $mn = $_POST['mth'];
	 $finalDate = $dt."-".$mn."-".$yr;
	 
	 
	 
	 
	  $f = mysql_query("SELECT * FROM   pro_user_queries WHERE Query_Date ='$finalDate' AND subject ='Algorithms' order by Query_ID desc  ");
        $msgs ="<br><br><h3>Search result for ".$finalDate."</h3>";
	  
	  
	  
	  
	  
 }
 
  echo $msgs;
 while($ff = mysql_fetch_array($f))
 {    
     $ui = $ff['User_ID'];
		$name = $ff['Name'];
	 
         $qId = $ff['Query_ID'];
         
         $time = $ff['Time'];
         $date = $ff['Query_Date'];
         $query = $ff['User_Query'];
         $files = $ff['file'];
         $typ = $ff['type'];
          $title = $ff['file_title'];
      
         $fl = strlen($files);
		 
		  		 
   
   ?>
                 
<style>
    b {color:#3e1616;}
</style>
<br> 
<hr>
 
    
<div id="ma">   <a href ="UserProfile.php?ID=<?php echo $ui ?> "> <?php echo $name ?></a>   </div>
    
     
<br>
    
   
 
   
  
   
      
   
<center>
   
   <?php
   
   if ($typ === "image/jpeg" || $typ === "image/jpg" || $typ === "image/png" || $typ === "image/gif")
   {
   
 echo '<a href = ../queries_upload/'.$files.'><img src = "../queries_upload/image.jpg" width="20%" ></a>';
   echo "<br>".$title ;
   }
  else if  ($typ === "application/pdf")
      
   {
       echo '<a href = ../queries_upload/'.$files.'><img src = "../queries_upload/pdf.jpg" width="20%" ></a>';
       echo "<br>".$title ;
       
   }
   //<img src = "../queries_upload/<?php echo $files " width="30%" />
 
  else if  ($typ === "application/zip")
      
   {
       echo '<a href = ../queries_upload/'.$files.'><img src = "../queries_upload/zip.png" width="20%" ></a>';
       echo "<br>".$title ;
       
   }
   
   else if  ($typ === "video/mp4")
      
   {
       echo '<a href = ../queries_upload/'.$files.'><img src = "../queries_upload/vd.jpg" width="20%" ></a>';
       echo "<br>".$title ;
       
   }
   
     else if($fl != 0)
      
   {
       echo '<a href = ../queries_upload/'.$files.'><img src = "../queries_upload/doc.jpg" width="20%" ></a>';
       echo "<br>".$title ;
       
   }
   
  
   
  echo"</center> <br><div class='well'>". "<a href ="."pro_Query.php?ID=".$qId.">".$query."</a> "; 

  
 
 // echo  "<br>"."<b>" .""." ".$date." "."at"." ".$time."</b>";
     
   
   ?>   
    <br><br><br>
	<div class="row" id = "bot" >     
            <div class="col-sm-4" id = "cv" >
			  Date :  <?php echo $date?></div>
		<div class="col-sm-4"id = "ce" >	<center><?php  $faa = mysql_query("SELECT COUNT(Reply) FROM   pro_user_replies WHERE Ref_ID = '$qId' ");
  
  $fffa = mysql_fetch_array($faa);
   $rs = $fffa[0];
   if ($rs == 0)
   {echo "<p id ='no'>be the first to reply</p>"  ;}

	   //{ echo"</center> <br><div class='well'>". "<a href ="."pro_Query.php?ID=".$qId.">"."no reply"."</a> "; }

else if  
  ($rs == 1)
  {echo "<p id = 'y'>".$rs." &nbsp reply</p> ";}
  
  
  
  else if  
  ($rs >1)
  {echo "<p id = 'y'>".$rs." &nbsp replies </p>";}
  
  
  
	

	?> </center></div>
			<div class="col-sm-4" id ="cv" > 
			  
			  Time :<?php echo $time ?>
			 </div>
			 
</div>

</div>




          








 







 


 <?php 
   
         }
		 
		 
		 if (!isset($date) && isset($_POST['put']))
		 {echo "<h3 id = 'r' >No query found for " .$finalDate."</h3>";
	 
	 }	
 ?>
    <br>
	<br>
  <center>
  <?php echo $top ='<button type="button" id = "tpb" onclick="window.scrollTo(1000000000,0);" class="btn btn-primary">go to Top </button>'?>
                <br> <br>   <a href =SignOut.php>  <button type="button" class="btn btn-danger">Sign out</button></a>
				</center>
				</div>
                 <div class="col-sm-3"  id = "d">
				   <?php
	 $nb = $_SESSION['id'];
	 
	  $q=       mysql_query("SELECT * FROM user_profile WHERE User_ID = '$nb' ");
             $qq = mysql_fetch_array($q);
             $qqq =$qq['Pro_Pic'];
                echo"<div id = 'ma'>"."<br>"."<a href =UserProfile.php?ID=".$_SESSION['id'].">".  $_SESSION['username'] ."</a>"."</b>"."</div>" ;
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
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 <form method="POST" class="form-horizontal" role="form"  >
    <label>search according to date</label><br>
      
      <label>Select day</label>
       <select class="form-control" id="sel1" name ="dte">
   
    
       <?php
    for ($x = 1; $x <= 31; $x++)
		echo "<option >".$x."</option>";
     ?>
    
  </select>
  
  
  
   <label>Select month</label>
       <select class="form-control" id="sel1" name ="mth">
   
    <option >Jan</option>
	<option >Feb</option>
	<option >Mar</option>
	<option >Apr</option>
	<option >May</option>
	<option >Jun</option>
	<option >Jul</option>
	<option >Aug</option>
	<option >Sep</option>
    <option >Oct</option>   
    <option >Nov</option>
	<option >Dec</option>
  </select>
       <label>enter year carefully</label>
      
       <input type="text" class="form-control" value="2016" name = "yrr">
	    <br>
	   <button type= "submit" name = "put" class="btn btn-primary">Search</button>
	   
     
 </form>
    
    
    
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
				 </div>
                 
            </div>
        </div>
    </body>
</html>

