<?php
// Start the session
session_start();
if(!isset($_SESSION['name']))
{
header("location:login.html");
}

$host="localhost"; // Host name
$username="manikandan5"; // Mysql username
$password="admin1234"; // Mysql password
$db_name="InfoArch"; // Database name
$tbl_name="products"; // Table name
$productID = intval($_POST['productSelected1']);
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql= "delete from $tbl_name where id=$productID" ;
$result=mysql_query($sql);
 header("location: products.php");
?>