
 <?php
session_start();
require_once 'connect.php';

if (!isset($_SESSION['user'])) 
{
header("location:SignIn.php");
}
 



$Av = $_GET['ID'];
$AAv = mysql_query("SELECT * FROM pro_user_queries WHERE Query_ID ='$Av' ");

$AAAv  = mysql_fetch_array($AAv);
 
if(isset($_POST['sub']))     
 { 
     "id".$Av = $_GET['ID'];
    $mst_id = $_SESSION['id'];
    $name = $_SESSION['username'];
    $reply = $_POST['rep'];
    date_default_timezone_set("Asia/Kolkata");
    $da =  date('j-M-Y');
    $ti  = date('h:i:s A');
    
     if(!file_exists($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name']))
    
    
     {
         
         if ($l = strlen($reply)<1)
     
 {
    echo $msg = "your post should not be blank".$l;
 }
 
 else 
     { $msg = ""; 
     
    
mysql_query("INSERT INTO pro_user_replies ( Ref_ID,Name,Date,Time,Reply,User_ID) VALUES ('$Av','$name','$da','$ti','$reply','$mst_id') ")  ; 
   }
     
     
 
         
         
     }
    
         
         
         
         
         
         
       else {  
         
         
         
         
         
         
         $title = $_POST['title'];
    $files = rand(1000,100000)."-".$_FILES['file']['name'];
    $file = preg_replace('/\s+/', '_', $files);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
 $folder="../replies_upload/";
    
    $target_file = $folder.basename($_FILES["file"]["name"]);
 $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
  
 if ($l = strlen($reply)<1)
     
 {
    echo $msg = "your posttt should not be blank".$l;
 }
 
 
 
 
 else if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
&& $FileType != "gif" && $FileType != "pdf" &&$FileType != "xlsx" && $FileType != "doc" &&$FileType != "ppt" && $FileType != "pps" && $FileType != "zip"
         
    &&$FileType != "mp4"  && $FileType != "3gp" && $FileType != "txt"   && $FileType != "pptx"   &&$FileType != "docx" )
 
 
     
     {echo "it seems your files format is not supported by our system kindly zip your file & then upload it ...we are sorry for trouble!!!"; }
     
    else
  
 
   { $msg = ""; 
     move_uploaded_file($file_loc,$folder.$file);
    echo "haa";
mysql_query("INSERT INTO pro_user_replies ( Ref_ID,Name,Date,Time,Reply,User_ID,file,type,file_title) VALUES ('$Av','$name','$da','$ti','$reply','$mst_id','$file','$file_type','$title') ")  ; 
   
//mysql_query("INSERT INTO pro_user_replies ( Ref_ID,Name,Date,Time,Reply,User_ID,file,type,file_title) VALUES ('$Av','$name','$da','$ti','$reply','$mst_id','$file','$file_type','$title') ")  ; 
 
   }
       }
    }
   ?>


 

<html>
    <head>
        <title>
            
        </title>
        <link rel='stylesheet' href='../css/bts.css'  type='text/css' />
           
		   <style>
		    #maz a {font-size:150%; position:fixed;}
		   #d  button{  position:fixed;}
		   #ma a {font-size:150%; }
		  #ma a:hover{background-color:#65ACD6;color:white;}
		  #hd {color:grey}
		   #b b{background:#65ACD6;color:white}
		   #dp {position:fixed; margin-top:5%}
		      #dp img {width:35%;}
		   #btcs {position:fixed;margin-top:12% }
		   #lft button{position:fixed; margin-top:7%; margin-left:4%}
		   
		   </style>
		   
		   
    </head>
    <body onload="window.scrollTo(0,100000000);">
        <div class="container-fluid">
 <div class="row">
     <div class="col-sm-3" id = "lft">
     <button type="button" class="btn btn-primary" onclick="window.scrollTo(0,100000000);" >Go to bottem </button>
 <br><br> <br>
 <a href =../index.php><button type="button" class="btn btn-primary">Back to home </button></a></a>
 <br><br><br>
  <a href =pro_forum.php><button type="button" class="btn btn-primary">Back to forum </button></a></a>
  <br>
    <br><br>
 
 <?php 
 echo '<a href=pro_Query.php?ID='.$Av.'><button type="button" class="btn btn-primary">Refresh</button></a>';
//echo"<a href =UserProfile.php?ID=".$nb.">".  $nn ."</a>" ;
 ?>
	  
	    
     </div>
 <div class="col-sm-6">

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.Query_
 */
 

$A = $_GET['ID'];
$AA = mysql_query("SELECT * FROM pro_user_queries WHERE Query_ID ='$A' ");

$AAA  = mysql_fetch_array($AA);
$typ = $AAA['type'];
$title = $AAA['file_title'];
    
       $sr =    $AAA['file'] ; 
       $srr = strlen($sr);
     

 echo"<div id = 'ma'>"."<br>"."<a href =UserProfile.php?ID=".$AAA['User_ID'].">".  $AAA['Name'] ."</a>"."</b>"."</div>" ;
//echo "<h3>".$AAA['User_Query']."</h3>";
  
 
if ($typ === "image/jpeg" || $typ === "image/jpg" || $typ === "image/png" || $typ === "image/gif")
   {

echo "<br><img src = ../queries_upload/".$AAA['file'].">";
echo "<br>".$title ;
   }
   
    
   
   
   
   else if  ($typ === "application/pdf")
      
   {
       echo '<a href = ../queries_upload/'.$AAA['file'].'><img src = "../queries_upload/pdf.jpg" width="20%" ></a>';
       echo "<br>".$title ;
       
   }
   //<img src = "../queries_upload/<?php echo $files " width="30%" />
 
  else if  ($typ === "application/zip")
      
   {
       echo '<a href = ../queries_upload/'.$AAA['file'].'><img src = "../queries_upload/zip.png" width="20%" ></a>';
       echo "<br>".$title ;
       
   }
   
   else if  ($typ === "video/mp4" || $typ === "video/3gpp")
      
   {
       echo '<a href = ../queries_upload/'.$AAA['file'].'><img src = "../queries_upload/vd.jpg" width="20%" ></a>';
       echo "<br>".$title ;
        
   }
   
    else if  ( $typ === "video/3gpp")
      
   {
       echo '<a href = ../queries_upload/'.$AAA['file'].'><img src = "../queries_upload/vd.jpg" width="20%" ></a>';
       echo "<br>".$title ;
        
   }
   
   
   
   
   
   
     else if ($typ != "video/mp4"  && $typ != "application/zip"     && $typ != "application/pdf"   && $typ !="image/jpeg" && $typ != "image/jpg" && $typ != "image/png" && $typ != "image/gif" &&  $srr != 0  )
     
   
   {
       echo '<a href = ../queries_upload/'.$AAA['file'].'><img src = "../queries_upload/doc.jpg" width="20%" ></a>';
       echo "<br>".$title ;
         
       
   }
   
   
   
    //echo"<div id = 'ma'>"."<br>"."<a href =UserProfile.php?ID=".$AAA['User_ID'].">".  $AAA['Name'] ."</a>"."</b>"."</div>" ;
echo "<h3>".$AAA['User_Query']."</h3>";
   
   
   
   
   
   
   
   
   
   
   
?>




<br><center>
  <div class="row" id ="hd">
   <div class="col-md-3">  
 <?=$AAA['Query_Date']?> </div>
 <div class="col-md-3">  
   </div>
 <div class="col-md-6">  
 <?=$AAA['Time']?> </div>
</div></center>





     
     
     
     
 
<?php

$dd = mysql_query("SELECT * FROM pro_user_replies WHERE Ref_ID ='$A' ");
        
     while($ddd = mysql_fetch_array($dd))
             
     {   $nam = $ddd['Name'];     
         $u_id = $ddd['User_ID'];
 		$rtrv_file = $ddd['file'];
                $rtrv_type = $ddd['type'];
                $rtrv_title = $ddd['file_title'];
                
                $ll = strlen($rtrv_file);
                ?>
               
                
		<?php
            echo"<br>"."<hr>"."<b>"."<a href =UserProfile.php?ID=".$u_id.">".  $nam ."</a>"."</b>" ;
           echo "<br><div class='well'><p>". $ddd['Reply']."</p>" ;
		   
		  // echo "<br> <br> "."<div id ='b'>"." ".$ddd['Date']." "."at ".$ddd['Time']."</div>";
                   
                   
                   
                   
                   
                   
                   
                   

   
   if ( $rtrv_type === "image/jpeg" ||  $rtrv_type === "image/jpg" ||  $rtrv_type=== "image/png" ||  $rtrv_type === "image/gif")
   {
   
   echo '<img src = ../replies_upload/'. $rtrv_file .' width="35%" />';
   echo "<br>".$rtrv_title ;
   }
  else if  ($rtrv_type === "application/pdf")
      
   {
       echo '<a href = ../replies_upload/'.$rtrv_file.'><img src = "../queries_upload/pdf.jpg" width="20%" ></a>';
       echo "<br>".$rtrv_title ;
     
     
       
   }
   //<img src = "../queries_upload/<?php echo $files " width="30%" />
 
   
       else if  ($rtrv_type === "application/zip")
      
   {
       echo '<a href = ../replies_upload/'.$rtrv_file.'><img src = "../queries_upload/zip.png" width="20%" ></a>';
       echo "<br>".$rtrv_title ;
     
     
       
   }            
                   
           else if  ($rtrv_type === "video/mp4" )
      
   {
       echo '<a href = ../replies_upload/'.$rtrv_file.'><img src = "../queries_upload/vd.jpg" width="20%" ></a>';
       echo "<br>".$rtrv_title ;
     
     
       
   }            
                  
                   
         else  if($ll !=0)  
      
   {
       echo '<a href = ../replies_upload/'.$rtrv_file.'><img src = "../queries_upload/doc.jpg" width="20%" ></a>';
       echo "<br>"."<br>".$rtrv_title ;
     
     
       
   }  ?>                 
             <center>      
      <div class ="row">
		   <div class="col-sm-3">
		   
		   </div>
		   <div class="col-sm-6">
		   <br> <div id ='b'> <b>&nbsp&nbsp<?=$ddd['Date']?> &nbsp &nbsp &nbsp &nbsp &nbsp    &nbsp <?=$ddd['Time']?>&nbsp&nbsp</b></div>
		   </div>
		   <div class="col-sm-3">
		   
		   </div>
		   </div>   </center>          
              </div>     
                   
        <?php           
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   if ($_SESSION['user']=== 'maazsbofttech@gmail.com')
    
{
    
	 
   echo "<input type ='button' Value ='delete this comment' onclick=".delete();">" ;
    


}


                   
                   
                   
                   
                   
                  
        
     }?>




     
     <br>
     <br>
     




<div class='well'>

<center>     <form method="POST" role="form"  name ="reply" enctype="multipart/form-data">
         <br><br>
         <input type="text"  style="height:45px;width:80%;font-size: 15pt"  class="form-control" name ="rep" placeholder = "post your reply..."/>
        <br>
 
  
         <input type="file" name="file" />
		 <input type ="text" class="form-control"  style="height:35px;width:40%;font-size: 10pt" name ="title" placeholder="enter the tilte of the file "/>
		 

         <br>
         




 <?phpecho $msg; ?>


         <br><input type="submit"  class="btn btn-primary" name="sub" value ="post-reply">
     </form></center></div>
     <br>
<hr>   <center>    <button type="button" class="btn btn-primary" onclick="window.scrollTo(1000000000,0);" >go to top </button> </center>
 

 </div>
     <div class="col-sm-3" id = "d"> 
	 <?php
	 $nb = $_SESSION['id'];
	 $nam = $_SESSION['username'];
	 
	  $q=       mysql_query("SELECT * FROM user_profile WHERE User_ID = '$nb' ");
             $qq = mysql_fetch_array($q);
             $qqq =$qq['Pro_Pic'];
               echo"<div id = 'maz'>"."<br>"."<a href =UserProfile.php?ID=".$nb.">".  $nam ."</a>"."</b>"."</div>" ;
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
	 <br> <br>
	 <a  href =SignOut.php><input type="button" class="btn btn-danger" id = "btcs" value="Sign Out  "></a>
	 
	 
	 </div>
 </div>
       
        </div>
        
      <?php
function delete ()
{
	$A=$_GET['ID'];
	$dsd = mysql_query("SELECT * FROM pro_user_replies WHERE Ref_ID ='$A' ");
    
    $dl = mysql_fetch_array($dsd);
    echo $dat =$dl['Date'];
    $tim = $dl['Time'];
   mysql_query("DELETE FROM pro_user_replies WHERE Date= '$dat' AND Time='$tim'");
} ?>   
        
        
        
</body>
</html>