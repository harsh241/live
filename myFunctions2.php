<?php
include('connect_to_mysql.php');
$dbname = "livedb";
$usertable = "tblcustomers";
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$city =$_POST['city'];
$phone =$_POST['phone'];
$email=$_POST['email'];
$mpesa_code=$_POST['mpesa_code'];
$product=$_POST['product'];
$quantity=$_POST['quantity'];
$unitcost=$_POST['unitcost'];
$total=$_POST['total'];
mysql_query("INSERT INTO $usertable VALUES('$fullname','$address','$city','$phone','$email','$mpesa_code','$product','$quantity','$unitcost','$total')")or die('' . mysql_error());
?>
