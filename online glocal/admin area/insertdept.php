
<?php
include("dbs.php");

?>




<!DOCTYPE HTML>
<html>
<head>
<title>online glocal</title>

<link rel="stylesheet" type="text/css" href="bootstrap.css" media="all"/>


<meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<body>

<form class="form-horizontal" role="form" method="POST"  action="insertdept.php" enctype="multipart/form-data">
<div class="form-group">

 <div class="table-responsive">

<table width="700px" height="650px" class ="table-striped" align="center" border=1px >


<tr>
<td align="center" ><b>Department name</b></td>
<td ><input class="form-control" type="text" name="dept_name" size="50"/></td>
</tr>




<tr>
<td align="center"><b>File</b></td>
<td><input type="file"  name="file"/></td>
</tr>




<tr align="center">
<td colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Submit"/></td>
</tr>

</table>
</div>

</div>
</form>


</body>
</html>





<?php






if(isset($_POST['submit']))
{
	
	//text data variables
	$dept_name=$_POST['dept_name'];
  
	
	//image_names
	$file = $_FILES['file']['name'];
	
	
	//image temp names
	$temp_file = $_FILES['file']['tmp_name'] ;
	
	
	
	
	
	if($dept_name=='' OR $file=='' )
	{
		echo "<script>alert('please fill all the fields')</script>";
	    exit();
	}
	else
	{   
           //uploading images to its folder
		   move_uploaded_file($temp_file,"dept_pics/$file");
		 
		$insert_dept = "insert into department (d_name,d_pic) values ('$dept_name','$file')";
	
	    $run_dept= mysqli_query($con, $insert_dept);
		
		if($run_dept)
		{
			echo "<script> alert('Department inserted successfully') </script>";
		}
		else{
			echo "<script> alert('Error') </script>";
		}
	}
}

?> 

