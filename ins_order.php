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
$mypname=$_POST['pname'];
$mypqty=$_POST['qty'];
$_SESSION['ord_name']=$_POST['pname'];
$_SESSION['ord_num']=$mypqty;
$sql="select * from $tbl_name where name='$mypname';";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
if(intval($mypqty) < intval($row['qty'])){
  $_SESSION['ord_price']=intval($mypqty)*intval(str_replace('$','',$row['price']));
}
  header("location: cart.php");
?>
