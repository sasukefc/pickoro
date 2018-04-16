<?php
session_start();
require_once("conn.php");

if (!$con) {
	echo $con->connect_error;
	exit();
}

  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
    update orders
set or_payment = '".$_POST["txtpic"]."'
where orderid = '".$_POST["txtorid"]."' ";
  $objQuery = mysqli_query($con,$strSQL);

mysqli_close($con);

header("location:order-bill-payment-complete.php?OrderID=".$strOrderID);
?>