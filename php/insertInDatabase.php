       
        <?php 
        
               
        
    if (isset($_POST['submit']))
{
//taking form values in variables
        
        
 $first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];


$email = $_POST['email'];

$password = $_POST['password'];


//query to select email id which is entered and already registerd also and assigned to variable email_check


$email_check = mysql_query ("SELECT Email_ID from user_accounts WHERE Email_ID ='$email'");

//fetching that email id as array and assigining to check variable at the same time

if(($check = mysql_fetch_array($email_check))==true)
{
     $msg = "<h1>"."sorry ". $first_name. " " .$last_name." this email id is already registerd  "."</h1>";
}
else
   


//condition to check whether entered email id is matching with the registered one

//if( $email ===  $check['Email_ID'] )
    
//{ //echo "<h1>"."email is already registerdn"."</h1>"; 
    
    // if this is true then assign this message to variable msg which is geting printed by the echo function in welcome.php file 

//$msg = "<h1>"."sorry ". $first_name. " " .$last_name." this email id is already registerd  "."</h1>";
//}

//else {

{
//query to insert user data  in database 

 mysql_query(" INSERT INTO user_accounts (First_Name,Last_Name,Email_ID,Pass_word) VALUES ('$first_name','$last_name','$email','$password')");
 // if this is true then assign this message to variable msg which is geting printed by the echo function in welcome.php file 
 
// $msg ="<h1>"."YOU ARE WELCOME...". $first_name. " " .$last_name.                "....you have sucessfully registerd on forum".          " </h>" ;
 $msg = header("location:pro_forum.php");
 
// $dcheck = mysql_query("SELECT * FROM user_accounts WHERE  Email_ID = '$email' ");
 
 //$fr= mysql_fetch_array($dcheck);
 
 session_start();
 $_SESSION['user'] = $email ;
 
 echo "hello"; 
// echo $fr['First_Name'];
 //echo $_SESSION['username']=  $fr['First_Name']." ".$fr['Last_Name'] ;
 $_SESSION['id'] = $check['User_ID'];
 $f = mysql_query("SELECT * FROM user_accounts WHERE Email_ID ='$email' ");
$ff = mysql_fetch_array($f);
 $_SESSION['id'] = $ff['User_ID'];
 
 
 echo " <h1>". "<a href = 'forum.php'>   Enter in forum   </a>"."</h1> " ;
 
 echo $_SESSION['username'] = $first_name." ".$last_name;
}
 
        }

        
         

    
    
    ?>
    
    
    
    