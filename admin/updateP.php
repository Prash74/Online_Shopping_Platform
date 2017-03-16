<?php
session_start();
$host="localhost"; // Host name
$username="manikandan5"; // Mysql username
$password="admin1234"; // Mysql password
$db_name="InfoArch"; // Database name
$tbl_name="products"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$productID=intval($_POST['productID']);
$productName=$_POST['productName'];
$productQty=$_POST['productQty'];
$productPrice=$_POST['productPrice'];
$productImg=$_POST['productImg'];
$productDesc=$_POST['productDesc'];

// To protect MySQL injection (more detail about MySQL injection)
$sql="update $tbl_name set name='$productName',qty='$productQty',price='$productPrice',image='$productImg',description='$productDesc' where id=$productID";

$result=mysql_query($sql);

header("location: products.php");


?>
