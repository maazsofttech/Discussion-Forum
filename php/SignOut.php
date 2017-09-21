<?php


session_start();

session_unset();

session_destroy();


if(!isset($_SESSION['user']))
    
{
    
    echo "logged out";
    header("location:SignIn.php");
    
}
else
{
    
    echo "erorr";
    
}

?>
