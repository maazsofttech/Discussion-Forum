
<?php
include("include/dbs.php");

?>




<!DOCTYPE HTML>
<html>
<head>
<title>online glocal</title>

<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-alpha.5-dist\css\bootstrap.css" media="all"/>


<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
body{
	background-image: url('3.jpg');
    background-size: cover;
	
}
table{
	color:white;
	background-image: url('1.jpg');
    background-size: cover;
}
</style>


</head>
<body>

<form class="form-horizontal" role="form" method="POST"  action="facultynotes.php" enctype="multipart/form-data">
<div class="form-group">

 <div class="table-responsive">

<table width="700px" height="650px" class ="table-striped" align="center" border=1px >

<tr align= "center">
<td colspan="2" height=80px><h1>Upload Notes</h1></td>
</tr>
<tr>
<td align="center" ><b>Faculty name</b></td>
<td ><input class="form-control" type="text" name="faculty_name" size="50"/></td>
</tr>

<tr>
<td align="center"><b>Department</b></td>
<td><select name="department"/>
<option>Select your Department</option>
<?php
			   
			   $get_dept = "select * from department";
			   $run_dept = mysqli_query($con, $get_dept);
			   while($row_cats = mysqli_fetch_array($run_cats))
			   {   
			   $cat_id= $row_cats['cat_id']; 
			   $cat_title=$row_cats['cat_title'];
			   echo "<option value='$cat_id'>$cat_title</option>";
			   
			   }
			   
			   ?>
</select></td>
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
<td><input type="file"  name="file"/></td>
</tr>


<tr>
<td align="center"><b>Notes Description</b></td>
<td><textarea name="notes_desc" cols="35" rows="10"></textarea></td>
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