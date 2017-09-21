<?php
include("include/dbs.php");
if(isset($_POST['login']))
{
	  session_start();	
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $get = "SELECT * FROM user WHERE email ='$email' AND password='$pass'";
 $run = mysqli_query($con,$get);
 $row = mysqli_fetch_array($run);
 if($row)
 {
  $_SESSION['id'] = $row['u_id'];
  $_SESSION['name'] = $row['username'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['pic'] = $row['profilepic'];
  $_SESSION['dept'] = $row['dept'];
  $_SESSION['course'] = $row['course'];
  $_SESSION['desig'] = $row['designation'];
  header("Location: home.php");
 }
 else
 {
  
      echo  "<script>alert('wrong details');</script>";
        
 }
 
}
?>
<!doctype html>
<html lang="en">

 
<head>
<!--
    Programming by Ildar Sagdejev ( http://twitter.com/tknomad )
  -->
<meta charset="UTF-8">
<title>Cloud 9 Carousel jQuery Plugin Demo</title>
<link rel="stylesheet" href="css/main.css">
<link href="sld/jquerysctipttop.css" rel="stylesheet" type="text/css">

<link href="BScss\bootstrap.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="mnu/style.css" type="text/css" media="screen"/>

<link rel="stylesheet" type="text/css" href="style1.css" media="all"/>


<link href="rot/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="rot/jquery.min.js"></script>
<script src="rot/jquery.rotate.js"></script>
<script>
$(function() {
	var img = $('#spin');
	function rotate() {
		img.animate({rotate: '360'}, 4000, 'linear', function() {
			rotate();
		});
	}
	rotate();
});


 


    </script>

	
	
 
	
	



        <meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<STYLE>
 
 
  body {	
  background-image: url('LOGO/abc.jpg');
   
    }
 
 
 #spin{
 width:180%;
 
 }
 
</STYLE>
<body>

<BR>
 <div class="container-fluid">
  <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >  
<div ID = "do"class = "col-sm-2"><img   src="LOGO/G.png"/></DIV>
<div ID = "doo" class = "col-sm-2"><img   src="LOGO/L.png"/></DIV>
<div class = "col-sm-2">  <img  id = "spin" src="LOGO/O.png"/></DIV>
 <div class = "col-sm-2"><img   src="LOGO/C.png"/></DIV>
<div class = "col-sm-2"><img   src="LOGO/A.png"/></DIV>
<div class = "col-sm-2"><img   src="LOGO/L.png"/> </DIV>
 
 
 </DIV>
 
 </DIV>
 
  <div class = "col-sm-6"> </DIV>
   <div id="log" class = "col-sm-3"><center> <img height= "40%" width="80%" src="log.png"/></center> </DIV>
 </DIV>
 
 
 
 
 
  <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >   
 
 
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> <img   src="LOGO/N.png"/></DIV>
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
  <div class = "col-sm-9"> </DIV>
 </DIV>
 
 
 
 
 
 
  <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >   
 
 
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2">  <img  src="LOGO/L.png"/></DIV>
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
  <div class = "col-sm-9">
<div class="row"  >
<div class = "col-sm-8">
 
 <div class="menu">
            <div class="item">
                <a class="link icon_mail"></a>
                <div class="item_content">
                    <h2>Contact us</h2>
                    <p>
                        <a href="mailto:info@tympanus.net">eMail</a>
                        <a href="http://www.twitter.com/codrops/">Twitter</a>
                        <a href="http://www.facebook.com/pages/Codrops/159107397912">Facebook</a>
                    </p>
                </div>
            </div>
		 
            <div class="item">
                <a class="link icon_help"></a>
                <div class="item_content">
                    <h2>Help</h2>
                    <p>
                        <a href="#">FAQ</a>
                        <a href="#">Live Support</a>
                        <a href="#">Tickets</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_find"></a>
                <div class="item_content">
                    <h2>Search</h2>
                    <p>
                        <input type="text"></input>
                        <a href="">Go</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_photos"></a>
                <div class="item_content">
                    <h2>Image Gallery</h2>
                    <p>
                        <a href="#">Categories</a>
                        <a href="#">Archives</a>
                        <a href="#">Featured</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_home"></a>
                <div class="item_content">
                    <h2>Start from here</h2>
                    <p>
                        <a href="http://www.tympanus.net/">Services</a>
                        <a href="http://www.tympanus.net/">Portfolio</a>
                        <a href="http://www.tympanus.net/">Pricing</a>
                    </p>
                </div>
            </div>
        </div> </div> 
		<div  class =  "col-sm-4">  </div>
		</div>
		









  </DIV>
 </DIV>
 
 
 
 
 
  <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >   
 
 
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2">  <img  src="LOGO/I.png"/></DIV>
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
  <div class = "col-sm-9"> </DIV>
 </DIV>
 
 
 
 
 
 
 
  <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >   
 
 
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div  id ="do" class = "col-sm-2">   <img    src="LOGO/N.png"/>  </DIV>
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
  <div class = "col-sm-9"> </DIV>
 </DIV>
 
 
 
 
 
 
 
 
 <div class="row"  >  
      <div class = "col-sm-3">
 <div class="row"  >   
 
 
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"> </DIV>
<div class = "col-sm-2">  <img   src="LOGO/E.png"/></DIV>
 <div class = "col-sm-2"> </DIV>
<div class = "col-sm-2"></DIV>
<div class = "col-sm-2"> </DIV>
 
 
 
 </DIV>
 
 </DIV>
 
  <div class = "col-sm-9"> </DIV>
 </DIV>
 
 
 
 
 
 
 
 
 
 
 
 
 
<div id="wrap">

<div id="showcase" class="noselect"> <a href ="#"> <img class="cloud9-item" src="technology.jpg" alt="Firefox">      


<img class="cloud9-item" src="law.jpg" alt="Firefox"><img class="cloud9-item" src="education.jpg" alt="Firefox"> <img class="cloud9-item" src="mass.jpg" alt="Firefox"><img class="cloud9-item" src="ss school.jpg" alt="Firefox">

<img class="cloud9-item" src="life science.jpg" alt="Wyzo"> <img class="cloud9-item" src="polytechnic.jpg" alt="Opera"> <img class="cloud9-item" src="pharmacy.jpg" alt="Chrome"> <img class="cloud9-item" src="management.jpg" alt="Internet Explorer"> <img class="cloud9-item" src="medical.jpg" alt="Safari"> </div>
 </a>
 
</div>
 
<script src="sld/jquery.reflection.js"></script> 
<script src="sld/jquery.cloud9carousel.js"></script> 
<script>
    $(function() {
      var showcase = $("#showcase")

      showcase.Cloud9Carousel( {
        yPos: 42,
        yRadius: 48,
        mirrorOptions: {
          gap: 12,
          height: 0.2
        },
        buttonLeft: $(".nav > .left"),
        buttonRight: $(".nav > .right"),
        autoPlay: true,
        bringToFront: true,
        onRendered: showcaseUpdated,
        onLoaded: function() {
          showcase.css( 'visibility', 'visible' )
          showcase.css( 'display', 'none' )
          showcase.fadeIn( 1500 )
        }
      } )

      function showcaseUpdated( showcase ) {
        var title = $('#item-title').html(
          $(showcase.nearestItem()).attr( 'alt' )
        )

        var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
        title.css('opacity', 0.5 + (0.5 * c))
      }

      // Simulate physical button click effect
      $('.nav > button').click( function( e ) {
        var b = $(e.target).addClass( 'down' )
        setTimeout( function() { b.removeClass( 'down' ) }, 80 )
      } )

      $(document).keydown( function( e ) {
        //
        // More codes: http://www.javascripter.net/faq/keycodes.htm
        //
        switch( e.keyCode ) {
          /* left arrow */
          case 37:
            $('.nav > .left').click()
            break

          /* right arrow */
          case 39:
            $('.nav > .right').click()
        }
      } )
    })
  </script> 
  
    
        <script>
            $('.item').hover(
                function(){
                    var $this = $(this);
                    expand($this);
                },
                function(){
                    var $this = $(this);
                    collapse($this);
                }
            );
            function expand($elem){
                var angle = 0;
                var t = setInterval(function () {
                    if(angle == 1440){
                        clearInterval(t);
                        return;
                    }
                    angle += 40;
                    $('.link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
                },10);
                $elem.stop().animate({width:'268px'}, 1000)
                .find('.item_content').fadeIn(400,function(){
                    $(this).find('p').stop(true,true).fadeIn(600);
                });
            }
            function collapse($elem){
                var angle = 1440;
                var t = setInterval(function () {
                    if(angle == 0){
                        clearInterval(t);
                        return;
                    }
                    angle -= 40;
                    $('.link',$elem).stop().animate({rotate: '+=40deg'}, 0);
                },10);
                $elem.stop().animate({width:'52px'}, 1000)
                .find('.item_content').stop(true,true).fadeOut().find('p').stop(true,true).fadeOut();
            }
        </script>
 
 
 
 
 
 
 
 
 
 
 
 
 
  
 
 
 
 
 
 
 
 
 
 </DIV>
 <center>
 <div id="login-form">
<form method="post" action="" enctype="multipart/form-data">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="login">Sign In</button></td>
</tr>
<tr>
<td><a href="signup.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
 
  
 
 
 
</body>
</html>
