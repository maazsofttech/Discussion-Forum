<?php
include("include/dbs.php");
session_start();
if (!isset($_SESSION['id'])) 
{
	header("location:index.php");
}

if(isset($_POST['upload']))
{
 $uname = $_POST['name'];
 $sub = $_POST['subject'];
 $topic = $_POST['topic_name'];
 $desc = $_POST['notes_desc'];
 $keyword = $_POST['keywords'];
 $post = $_SESSION['desig'];
 $depart = $_SESSION['dept'];
 
  $file = rand(1000,100000)."-".$_FILES['notes']['name'] ;
  $files = preg_replace('/\s+/', '_', $file);
	$temp_file = $_FILES['notes']['tmp_name'] ;
	$file_size = $_FILES['notes']['size'];
    $file_type = $_FILES['notes']['type'];
	$folder="user_notes/";
	$target_file = $folder.basename($_FILES["notes"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
&& $FileType != "gif" && $FileType != "pdf" && $FileType != "tex" &&$FileType != "xlsx" && $FileType != "doc" &&$FileType != "ppt" && $FileType != "pps" && $FileType != "zip"
         &&$FileType != "mp4"    &&$FileType != "docx"	&& $FileType != "3gp"  && $FileType != "pptx" && $FileType != "ppt"   &&$FileType !="txt")
    {
     echo "it seems your files format is not supported by our system kindly zip your file & then upload it ...we are sorry for trouble!!!"; 
    }
 else
  {  
     move_uploaded_file($temp_file,$folder.$files);  
  }
  
  if($depart=='School of Computer Science')
  {
  $insert_notes = "INSERT INTO computer_science(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>";
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 }
  }
  
 else if($depart=='School of Technology')
  {
  $insert_notes = "INSERT INTO technology(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Education')
  {
  $insert_notes = "INSERT INTO education(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Pharmacy')
  {
  $insert_notes = "INSERT INTO pharmacy(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}




else if($depart=='Senior Secondary School')
  {
  $insert_notes = "INSERT INTO ss_school(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Law')
  {
  $insert_notes = "INSERT INTO law(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>";
 echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";	   
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Life Science')
  {
  $insert_notes = "INSERT INTO life_science(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>";
 echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";	   
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}



else if($depart=='School of Management')
  {
  $insert_notes = "INSERT INTO management(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Mass Communication')
  {
  $insert_notes = "INSERT INTO mass_comminication(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}


else if($depart=='Glocal Medical College')
  {
  $insert_notes = "INSERT INTO medical(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>"; 
	    echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}

else if($depart=='School of Polytechnic')
  {
  $insert_notes = "INSERT INTO polytechnic(name,designation,sub,topic,file,descp,keywords) VALUES('$uname','$post','$sub','$topic','$files','$desc','$keyword')";
  $run_notes = mysqli_query($con, $insert_notes);
		
		if($run_notes)
 {
       echo "<script>alert('Thanks For Uploading Your Notes');</script>";
 echo "<script> alert('redirecting'); window.location.assign('home.php'); </script>";	   
 }
 else
 {
     echo "<script>alert('error while uploading...');</script>";
 } 
}


}


?>





<!DOCTYPE HTML>
<html>
<head>
<title>online glocal</title>

<link rel="stylesheet" type="text/css" href="BScss\bootstrap.css" media="all"/>


<meta name="viewport" content="width=device-width, initial-scale=1">




</head>
<body>

<form class="form-horizontal"  method="POST"  action="uploadnotes.php" enctype="multipart/form-data">
<div class="form-group">

 <div class="table-responsive">

<table width="50%" height="80%" class ="table-striped" align="center" border="1px" >

<tr align= "center">
<td colspan="2" height="80px"><h1>Upload Notes</h1></td>
</tr>
<tr>
<td align="center" ><b>Name</b></td>
<td ><input class="form-control" type="text" name="name" size="50"/></td>
</tr>


<tr>
<td align="center"><b>Subject</b></td>



<td ><input type="text" class="form-control" name="subject" size="50"/></td>

</tr>

<tr>
<td align="center"><b>Topic Name</b></td>
<td><input type="text" class="form-control"  name="topic_name" size="30"/></td>
</tr>

<tr>
<td align="center"><b>File</b></td>
<td><input type="file"  name="notes"/></td>
</tr>


<tr>
<td align="center"><b>Notes Description</b></td>
<td><textarea name="notes_desc" cols="70" rows="10"></textarea></td>
</tr>

<tr>
<td align="center"><b>Notes Keywords</b></td>
<td><input type="text" name="keywords" size="50" class="form-control"  placeholder="write words which help others searching your notes"/></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" class="btn btn-warning btn-block" name="upload" value="Upload Now"/></td>
</tr>

</table>
</div>

</div>
</form>


</body>
</html>