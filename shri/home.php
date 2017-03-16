<?php
// Start the session
session_start();
$host="localhost"; // Host name
$username="manikandan5"; // Mysql username
$password="admin1234"; // Mysql password
$db_name="StudentShri"; // Database name
$tbl_name="table_user"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_SESSION['name'];

$sql1="SELECT * FROM table_module WHERE Module_no = 1";
$result1 = mysql_query($sql1);
$row1=mysql_fetch_assoc($result1);

$sql2="SELECT * FROM table_module WHERE Module_no = 2";
$result2 = mysql_query($sql2);
$row2=mysql_fetch_assoc($result2);

$sql3="SELECT * FROM table_module WHERE Module_no = 3";
$result3 = mysql_query($sql3);
$row3=mysql_fetch_assoc($result3);

$sql4="SELECT * FROM table_progress WHERE Username='$myusername'";
$result4 = mysql_query($sql4);
$count1=mysql_num_rows($result4);

$progress = ((float)$count1 * 100 )/ ((float)$row1['NumOfChapter'] + (float)$row2['NumOfChapter'] + (float)$row3['NumOfChapter']);
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <?php
    echo "<p>Welcome <strong>",$_SESSION['name'],"</strong></p>";?>
    <script>
      function addTenPercent() 
      {
        // locate the progress bar and store it in a variable
        var bar = document.getElementById("progressBar");
        // add 10 to the value
        bar.value += 10;
      };
    </script>

    <div>
      <div class="progress" style="width:50%">
        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress;?>%">
          <span class="sr-only"><?php echo $progress;?>% Complete</span>
        </div>
      </div>
      <table border="1">
      <?php
      mysql_connect('localhost','manikandan5','admin1234');
      mysql_select_db('StudentShri');
      $select = mysql_query("select * from table_chapter;");
      while($row = mysql_fetch_assoc($select))
      {
      ?>  
        <strong>Module <?php echo $row['Module_no'];?>, Chapter <?php echo $row['Chapter_no'];?></strong> :
        <a href="checkVideo.php?usr=<?php echo $_SESSION['name'];?>&mod_no=<?php echo $row['Module_no'];?>&chap_no=<?php echo $row['Chapter_no'];?>&url=<?php echo $row['Video_Link'];?>"><?php echo $row['Video_Link'];?></a><br>

      <?php
       }
      ?>
    </div>    
  </body>
</html>