<?php
// Start the session
session_start();
if(!isset($_SESSION['name']))
{
header("location:login.html");
}

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="password"; // Mysql password
$db_name="InfoArch"; // Database name
$tbl_name="orders"; // Table name
$orderID = intval($_POST['orderSelected1']);
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql= "delete from $tbl_name where ord_id=$orderID" ;
$result=mysql_query($sql);
 header("location: orders.php");
?>