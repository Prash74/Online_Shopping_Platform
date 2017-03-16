<?php
session_start();
$host="localhost"; // Host name
$username="manikandan5"; // Mysql username
$password="admin1234"; // Mysql password
$db_name="StudentShri"; // Database name
$tbl_name="table_progress"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$user=$_GET['usr'];
$mod_no=$_GET['mod_no'];
$chap_no=$_GET['chap_no'];
$url=$_GET['url'];

$sql="SELECT * FROM $tbl_name WHERE Username='$user' and Module_no=$mod_no and Chapter_no=$chap_no";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==0)
{
	$sqlInsert="INSERT INTO table_progress(Username,Module_no,Chapter_no) VALUES ('$user', $mod_no, $chap_no);";
	$result1=mysql_query($sqlInsert);
}

header("location: $url");
?>