<!DOCTYPE html>
<html>
<head>
<title>Share ,learn & study together </title>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
 
 

<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="jQuery Phoenix Slider Demo">
 

	 
 <link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
	<link href="css/csss/style.css" rel="stylesheet">
	<link href ="css/normlize.css" rel ="stylesheet">
	 
  
<style>


 .table-responsive{width:70%} 
       
       #a{width: 25%;}
       #b{width: 53%;}
       #c{width: 10%}
       #d{width:12%;}
       #a a{text-decoration :none}
       #w{width:50%}
       tr:hover{width:auto;background:lightgrey; color:white; height:10px;}
       #t{background: black;color:white}




 .dropdown ul li a:hover{
	background-color:#222222;
	color:white;
       
	font-weight:bold;
	

 
 #he {background :black}
 #bkc {position:absolute; float:left;}
	
</style>



</head>

<body>
    
   
    
    <div class="container">
   
         <div class="page-header">
  <h1>Admin Dashboard</h1>
</div>
        
      <h3> to remove a user </h3>
        
        
        
        
        
        <form method="POST" class="form-inline" role="form"  >
  <div class="form-group">
    <label for="email">Enter User's Email address:</label>
    <input type="email"  class="form-control"   name = "em">
  </div>
  
   
  <button type= "submit"  name = "sb" class="btn btn-primary">Remove user</button>
</form>
        
       
      
 
        
        <?php
        
        require_once 'connect.php';
        if(isset($_POST['sb']))
            
        {   $e = $_POST['em'];
        
        
        $cq = mysql_query("SELECT * FROM user_accounts WHERE Email_ID = '$e' ");  
        
        $ccq = mysql_fetch_array($cq);
       $ui =  $ccq['User_ID'];
       $ch = strlen($ui);
       if ($ch >1)
       {
       $fn = $ccq['First_Name'];
        $ln = $ccq['Last_Name'];
    
       mysql_query("DELETE FROM  user_accounts WHERE User_ID ='$ui' ");
       mysql_query("DELETE FROM pro_user_queries WHERE User_ID ='$ui' ");
       mysql_query("DELETE FROM pro_user_replies WHERE User_ID ='$ui' ");
       mysql_query("DELETE FROM user_profile WHERE User_ID ='$ui' ");
         echo "user &nbsp <b>".$fn."&nbsp".$ln."</b>has been removed";
       
      
         
      
       
       }
      // $ccc = mysql_query("DELETE FROM user_accounts WHERE User_ID ='$ui' "&& "DELETE form")
        
    //    DELETE FROM Customers
//WHERE CustomerName='Alfreds Futterkiste' AND ContactName='Maria Anders';
        else{echo "<br><h4>there is no user of this email id in our database </h4>";}
        
        }  
        
        ?>
        <br><hr>  <h1>To update links</h1> 
        
        
        
        
        
        
        
        
        
        
        
        
        
     <form role="form" method="POST"   >
         
         
         
  
      
      
       <select class="form-control" id="sel1" name ="sub">
    <option  >Programming</option>
    <option  >Networking</option>
    <option  >OperatingSystem</option>
    <option  >Algorithms</option>
	<option  >Compiler Design</option>
	<option  >Computer Architecture</option>
	<option  >Theory of Computation</option>
	<option  >Data Structure</option>
	<option  >D.B.M.S</option>
	<option  >Discrete Maths</option>
	<option  >Other</option>
	
  </select>
      
      
      
      
    <label >Enter title of the link  </label>
    <input type="text" class="form-control" name = "title">
    <br>
     <label >enter the complete link    </label>
  <input type="text" class="form-control" name = "link">
  
   <br>
     <label >enter the description of link about which it is?   </label>
  <input type="text" class="form-control" name = "linkdescription">
 
 <br>
         <button type="submit" name="submt"  style="width:12%;" class="btn btn-primary">Submit </button>
</form>
    </div>
    
    
    
    
    <?php
    if(isset($_POST['submt']))
    {
   $t= $_POST['title'];
   $l= $_POST['link'];
    $d= $_POST['linkdescription'];
     date_default_timezone_set("Asia/Kolkata");
     $da =  date('j-M-Y');
    $ti  = date('h:i:s A');
     $s=  $_POST['sub'];
   $qr= 1;
      
      $l1 = strlen($t);
	  $l2 = strlen($l);
	  $l3 = strlen($d);
	  if($l1<1 || $l2<1 || $l3 <1)
		  echo "<h2>even a single field must not be blank</h2>";
	  else {
     mysql_query("INSERT INTO admin_data (subject_name,link_title,link,link_des,time,date) VALUES ('$s','$t','$l','$d','$ti','$da')");
	 
	  echo "<h2>link successfully updated </h2>";
	 }
     
    
    }
    ?>
    
	
	
	
	
	
	<br>
	<br>
	
	
	<center><H2> Feedback Section</H2>
	</center>
	
	
	<BR>
	
	
	
	
	
	<center>
	<h4>Search according to date</h4>
	<br>
	<form method="POST" class="form-inline" role="form"  >
    
      
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
	    
	   <button type= "submit" name = "put" class="btn btn-primary">Search messages</button>
	   
     
 </form>
    
    
    <?php
	
	if(isset($_POST['put']))
	{	
	 $yr = $_POST['yrr'];
 $dt 	= $_POST['dte'];
 $mn = $_POST['mth'];
	 $finalDate = $dt."-".$mn."-".$yr;
	}
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<?php $www="<h2>few most recent messages</h2></center>"?>
	<hr>
	
	<?php
	
	 
	
	$m = mysql_query ("SELECT * FROM feedback  order by msg_id desc LIMIT 20");
	
	if(isset($_POST['put']))
		
		{$m = mysql_query ("SELECT * FROM feedback WHERE date = '$finalDate' order by msg_id desc  ");
		echo  $www= "<h2>result for ".$finalDate."</h2>";}
		else {echo $www;}
	
	while ($mm = mysql_fetch_array($m))
	{
	 $id = $mm['User_ID'];
	 $name = $mm['Name'];
	 $fdb = $mm['feedback'];
	 $dta =$mm['date'];
	 $tta = $mm['time'];
	
	?>
	
	
	<br>
	
 
	
	<center>      
    
    
    <div class="table-responsive">
  <table class="table">
    ...
   
    
    
                    <tr>
                        <td id ="a">    <a href ="../php/UserProfile.php?ID=<?=$id?>"><?=$name?></a></td></div>      
    <td id ="b"> <?=$fdb?></td>
    <td id ="c">
          <?=$dta?></td>
    <td id ="d">
                            <?=$tta?>
                            </td></tr></table> 
</center>
</div>                 
          
    <?php
    
 	
	
	
	
	
	
	
	
	
	
	
	}
	if (isset($finalDate)&& !isset($dta) )
{
	echo "<center><h1> no message found on " .$finalDate." </h1></center>";
}
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    
</body>







</html>