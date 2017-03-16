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
$productID=$_POST['productID'];
$productName=$_POST['productName'];
$productQty=$_POST['productQty'];
$productPrice=$_POST['productPrice'];
$productImg=$_POST['productImg'];
$productDesc=$_POST['productDesc'];

// To protect MySQL injection (more detail about MySQL injection)
$sql="insert into $tbl_name values('$productID','$productName','$productQty','$productPrice','$productImg','$productDesc')";
  $result=mysql_query($sql);
  header("location: products.php");

?>
