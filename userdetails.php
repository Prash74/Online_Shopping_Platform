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
$myusername=$_SESSION['name'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE usrname='$myusername' and pwd='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$row=mysql_fetch_assoc($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
  $_SESSION['uname']=$myusername; // Initializing Session
  $_SESSION['mail']=$row['email'];
  header("location: index.php");
}
else {
echo "Wrong Username or Password";
}
?>
