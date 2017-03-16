<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "manikandan5", "admin1234");
// Selecting Database
$db = mysql_select_db("InfoArch", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['name'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select usrname from users where usrname='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session ="Welcome," + $row['name'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
// Redirecting To Home Page
}
header('Location: index.php');
?>
