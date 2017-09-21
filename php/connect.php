<?php
$host = 'localhost' ;
$username ='root' ;
$password = '';
$db = 'forum' ;
mysql_connect($host,$username,$password) or die ('please check username');
mysql_select_db('test') or die ('not connected');
?>

