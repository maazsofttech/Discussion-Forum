
<?php


session_start();
 

?>


<!DOCTYPE html>


<html>
<head>
<title>Operating System</title>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css"> 

<style type="text/css">
	* {
		margin: 0;
		padding: 0;
		font-family: 'Oswald', sans-serif;
	}
	
	body {
		background: url(../images/.jpg);
	}
	
	img {
		display: block;
		max-width: 100%;
		height: auto;
	}
        
        
       // table{color:white;   border:5px solid #0000ff;width:70%; padding-top: 18px; padding-bottom: 18px;}
 
//td{background:white;color: #123456;width: auto; border:2px solid #0000ff ;}
        
       .table-responsive{width:70%} 
	  
       #a{width: 25%;}
      #b{width: 52%;}
       #c{width: 11%}
       #d{width:12%;}
       #a a{text-decoration :none}
       #w{width:50%}
       tr:hover{width:auto;background:lightgrey; color:white; height:10px;}
       #t{background: #222222;color:white}
     // td {width: auto; }
      //  table tr td{width: 10%}
	
	.content {
		width: 80%;
		margin: 50px auto;
		padding: 20px;
	}
	.content h1 {
		font-weight: 400;
		text-transform: uppercase;
		margin: 0;
		color: #fff;
	}
	.content h2 {
		font-weight: 400;
		text-transform: uppercase;
		color: #333;
		margin: 0 0 20px;
	}
	.content p {
		font-size: 1em;
		font-weight: 300;
		line-height: 1.5em;
		margin: 0 0 20px;
	}
	.content p:last-child {
		margin: 0;
	}
	 
	.dropdown-menu ul li a :hover{color:white;background:black}
	.content a.button {
		display: inline-block;
		padding: 10px 20px;
		background: #ff0;
		color: #000;
		text-decoration: none;
	}
	.content a.button:hover {
		background: red;
		color: #ff0;
	}
	.content.title {
		position: relative;
		background: #333;
	}
	.content.title h1 span.demo {
		display: inline-block;
		font-size: .5em;
		padding: 10px;
		background: #fff;
		color: #333;
		vertical-align: top;
	}
	.content.title .back-to-article {
		position: absolute;
		bottom: -20px;
		left: 20px;
	}
	.content.title .back-to-article a {
		padding: 10px 20px;
		background: #f60;
		color: #fff;
		text-decoration: none;
	}
	.content.title .back-to-article a:hover {
		background: #f90;
	}
	.content.title .back-to-article a i {
		margin-left: 5px;
	}
	.content.white {
		background: #fff;
		box-shadow: 0 0 10px #999;
	}
	.content.black {
		background: #000;
	}
	.content.black p {
		color: #999;
	}
	.content.black p a {
		color: #08c;
	}
	
	.dropdown ul li a:hover{
	background-color:#222222;
	color:white;
       
	font-weight:bold;
	
}
	
	
	
	
	.dropdown-menu {
		min-width: 200px;
	}
	.dropdown-menu.columns-2 {
		min-width: 400px;
	}
	.dropdown-menu.columns-3 {
		min-width: 600px;
	}
	.dropdown-menu li a {
		padding: 5px 15px;
		font-weight: 300;
	}
	.multi-column-dropdown {
		list-style: none;
	}
	.multi-column-dropdown li a {
		display: block;
		clear: both;
		line-height: 1.428571429;
		color: #333;
		white-space: normal;
	}
	.multi-column-dropdown li a:hover {
		text-decoration: none;
		color: #262626;
		background-color: #f5f5f5;
	}
	
	@media (max-width: 767px) {
		.dropdown-menu.multi-column {
			min-width: 240px !important;
			overflow-x: hidden;
		}
	}
	
	@media (max-width: 480px) {
		.content {
			width: 90%;
			margin: 50px auto;
			padding: 10px;
		}
		
		#im img {width:200%;}
	}
	 
     .container{width:73%}

	 
 .con{background:#222222;width:70%;margin-left:15%;margin-right:15%; padding:1%;color:white}
 
	 
	 
 
</style>

</head>

<body>

<div id = "maincontaintt">
<div id = "st">

 
<!--/.content-->


        
<div class="container">


         <div class="page-header">
  <h1>Operating System</h1>
</div>
 


<br>
	 <nav class="navbar navbar-inverse" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="../index.php">Home</a>
	    </div>
	    <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	         <ul class="nav navbar-nav ">
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subjects <b class="caret"></b></a>
		            <ul class="dropdown-menu">     
			            			            <li><a href="prog.php">Programming</a></li>
						 
			            <li><a href="OS.php">Operating System</a></li>
						 
			            <li><a href="netw.php">Networking</a></li>
						 
 
			            <li><a href="algo.php">Design & Analysis of Algorithms</a></li>
						<li><a href="cd.php">Compiler Design</a></li>
						<li><a href="arch.php">Computer Architecture</a></li>
						<li><a href="tc.php">Theory of Computation</a></li>
						<li><a href="ds.php">Data Structure</a></li>
                         <li><a href="dbms.php">D.B.M.S</a></li>
						 <li><a href="dm.php">Discrete Maths</a></li>
						 <li><a href="other.php">Other</a></li>
 
			            
		            </ul>
		        </li>
		        <li class="dropdown">
		             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Research Trends<b class="caret"></b></a>
		            <ul class="dropdown-menu">     
			             <li><a href="http://www.jair.org/">Artificial intelligence</a></li>
						  <li class="divider"></li>
						<li><a href="https://www.eecs.berkeley.edu/Research/Areas/ARC/">Computer Architecture & VLSI</a></li> 
						 <li class="divider"></li>
						<li><a href="http://www.cbrc.jp/">Computational Biology</a></li>
						 <li class="divider"></li>
<li><a href="http://www.i-asr.com/journals/jarsc/">Scientific Computing</a></li>
 <li class="divider"></li>
<li><a href="https://xforce.iss.net/">network security</a></li>
		            </ul>
		        </li>
		        <li class="dropdown">
		        	 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tech News<b class="caret"></b></a>
		            <ul class="dropdown-menu">     
			           <li><a href="http://www.efytimes.com/e1/index.asp">Efy times</a></li>
					    <li class="divider"></li>
						<li><a href="http://www.in.techradar.com/">Tech radar
						
</a></li> <li class="divider"></li>
						<li><a href="http://www.extremetech.com/category/computing">extream tech</a></li>
						 <li class="divider"></li>
						<li><a href="http://www.sciencedaily.com/news/computers_math/software/">Software news Science daily</a></li>
						 <li class="divider"></li>
                                                <li><a href="http://maazsofttech.net16.net">Maazsofttech</a></li>
<li><a href="https://m.facebook.com/bcaglocal">Glocal school of computer science</a></li>
		            </ul>
		        </li>
				
				  <li>   <a href="../php/pro_forum.php"> Discussion Forum</a></li>  
				  
				
		        <li>   <a href="toadmin.php"><span class="glyphicon glyphicon-envelope"></span> Send Feedback</a></li>  
	        </ul>
			<ul class="nav navbar-nav navbar-right">
			<?php
			if (!isset($_SESSION['user'])) 
			{
        echo '<li><a href="../ind.php"> Sign Up</a></li>';
        echo '<li><a href=../php/SignIn.php><span class=glyphicon glyphicon-log-in></span> Login</a></li>';
			}
			else{   echo '<li><a href=../php/UserProfile.php?ID='.$_SESSION['id'].'> '.$_SESSION['username'].'</a></li>';}
		?>
      </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
	 
</div>
<!--/.content-->
<center> 
    
    <br><br>
    
<br><br>	<form method="POST" class="form-inline" role="form"  >
    
      
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
	    
	   <button type= "submit" name = "put" class="btn btn-default">Search Links</button>
	   
     
 </form>
    <br><br>
    
    <?php
	
	if(isset($_POST['put']))
	{	
	 $yr = $_POST['yrr'];
 $dt 	= $_POST['dte'];
 $mn = $_POST['mth'];
	 $finalDate = $dt."-".$mn."-".$yr;
	}
	
	?>
    
    
    
    
    <br><br>
    
    
    
 
 <div class="table-responsive" id="t">
     <center> <table class="table">
         <tr>
             <th>Link to download</th>
             <th id="w">About link</th>
             <th id="c">Date</th>
             <th id="d">Time</th>
         </tr>
         </table></div></center> 
     
    <?php
    require_once 'connect.php';
	
	 
	 
    $myq = mysql_query("SELECT * FROM admin_data WHERE subject_name = 'OperatingSystem' order by link_id desc  LIMIT 20");
    
	  if(isset($_POST['put']))
	{$myq = mysql_query("SELECT * FROM admin_data WHERE subject_name = 'OperatingSystem' AND date = '$finalDate' order by link_id desc ");

	  

	}
while(   $q = mysql_fetch_array($myq))
{   
 
  $link = $q['link'];
    $abtlnk = $q['link_des'];
    $title = $q['link_title'];
    $ti = $q['time'];
    $da = $q['date'];
	
	
  ?>
      
            
<center>      
    
    
    <div class="table-responsive">
  <table class="table">
    ...
   
    
    
                    <tr>
                        <td id ="a">    <a href ="<?=$link?>"><?=$title?></a></td></div>      
    <td id ="b"> <?=$abtlnk?></td>
    <td id ="c">
          <?=$da?></td>
    <td id ="d">
                            <?=$ti?>
                            </td></tr></table> 
</center>
                
          
    <?php
    
}if (!isset($link)&&isset($_POST['put'])) 
	echo "<center><h1>no result found for " .$finalDate." </h1></center>";
    
    
    ?>
    
	
	
	
	
    </div> 
    
    
 
<br><br>

<div class="con">
	<center>  Developed by &nbsp <a href="../php/UserProfile.php?ID=1">Mohd Maaz</a> </center>
</div>
<!--/.content-->

<!-------------------- JS -------------------->
<script type="text/javascript" src="js/b.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</div>

</div>
</body>
</html>