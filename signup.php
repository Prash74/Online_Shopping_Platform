<?php
session_start();
$host="localhost"; // Host name
$username="manikandan5"; // Mysql username
$password="admin1234"; // Mysql password
$db_name="InfoArch"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myfname=$_POST['fname'];
$mylname=$_POST['lname'];
$myusername=$_POST['usrname'];
$mymailid=$_POST['mail'];
$mypassword=$_POST['pwd'];
$myaddr=$_POST['addr'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="insert into $tbl_name values('$myfname','$mylname','$myusername','$mypassword','$mymailid','$myaddr',0)";
$result=mysql_query($sql);
header("location: index.php");
?>
