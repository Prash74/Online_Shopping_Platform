<?php

session_start();
echo "<script type='text/javascript'>alert('Hello World']);</script>";
$host="localhost"; // Host name
$username="manikandan5"; // Mysql username
$password="admin1234"; // Mysql password
$db_name="InfoArch"; // Database name
$tbl_name="orders"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$sql="insert into $tbl_name(p_name,usrname,qty,amount,address) values($_SESSION['ord_name'],$_SESSION['name'],$_SESSION['ord_num'],$_SESSION['ord_price'],$_SESSION['addr'])";
$result=mysql_query($sql);
header("location: cart.php");
?>
