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
$tbl_name="orders"; // Table name
$orderID = intval($_POST['orderSelected']);
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql= "select * from $tbl_name where ord_id=$orderID" ;
$result=mysql_query($sql);

$row=mysql_fetch_assoc($result);

$productID=$row['p_name'];
$usrname=$row['usrname'];
$qty=$row['qty'];
$amount=$row['amount'];
$address=$row['address'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajalakshmi Stores</title>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
    <input type = "hidden;" value="" id="productSelected">
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.jpg" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">                        <i class="fa fa-envelope fa-3x noti-bar"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    No Messages
                            </div>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning"></span>  <i class="fa fa-bell fa-3x noti-bar"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>No New Comment
                            </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x noti-bar"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php echo $_SESSION['name'];?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li> 
                        <a href="index.php"><em class="fa fa-dashboard fa-fw text-black"></em><span class="text-black">Dashboard</span></a> 
                    </li>
                    <li class="selected">
                        <a href="orders.php"><i class="fa fa-table fa-fw text-black"></i><span class="text-black">Orders</span></a>
                    </li>
                    <li>
                        <a href="products.php"><i class="fa fa-edit fa-fw text-black"></i><span class="text-black">Products</span></a>
                    </li>
                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                  <h1 class="page-header">Edit Orders</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"> <i class="fa fa-bar-chart-o fa-fw"></i>List of Orders
                            <div class="pull-right">
                                
                            </div>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="updateO.php" method="post">
                                <div class="col-lg-2">
                                    Order ID
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" value="<?php echo $orderID;?>" name="orderID" readonly>
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="col-lg-2">
                                    Product ID
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" value="<?php echo $productID;?>" name="productID">
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="col-lg-2">
                                    User Ordered
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" value="<?php echo $usrname;?>" name="usrname">
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="col-lg-2">
                                    Quantity
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control"  value="<?php echo $qty;?>" name="qty">
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="col-lg-2">
                                    Amount
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control"  value="<?php echo $amount;?>" name="amount">
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="col-lg-2">
                                    Address
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control"  value="<?php echo $address;?>" name="address">
                                </div>
                                <br/>
                                <br/>
                                <br/>
                                <div class="col-lg-2">
                                    &nbsp;
                                </div>
                                <div class="col-lg-3">
                                <button type="submit" class="btn btn-default">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                
            
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <style type="text/css">
    .selected-row 
    {
        color: brown;
    }
    </style>
    <script>

        $(document).ready(function () {
            $('#productsTables').dataTable();
            $( "#productsTables" ).selectable();
        });
        $("#productsTables tr").click(function(){
        $(this).addClass('selected-row').siblings().removeClass('selected-row');    
        var value=$(this).find('td:first').html();
        $("#productSelected").val(value);   
        });

        $('.ok').on('click', function(e){
            alert($("#table tr.selected td:first").html());
        });
    </script>

</body>

</html>
