<?php
session_start();
$host="localhost"; // Host name
$username="manikandan5"; // Mysql username
$password="admin1234"; // Mysql password
$db_name="InfoArch"; // Database name
$tbl_name="orders"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$orderID=intval($_POST['orderID']);
$productID=intval($_POST['productID']);
$usrname=$_POST['usrname'];
$qty=$_POST['qty'];
$amount=$_POST['amount'];
$address=$_POST['address'];

// To protect MySQL injection (more detail about MySQL injection)
$sql="update $tbl_name set p_id='$productID',usrname='$usrname',qty='$qty',amount='$amount',address='$address' where ord_id=$orderID";

$result=mysql_query($sql);

header("location: orders.php");


?>
