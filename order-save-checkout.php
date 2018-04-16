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
	INSERT INTO orders (OrderDate,Name,Address,Tel,Email,or_total,or_d_name,or_payment)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtName"]."','".$_POST["txtAddress"]."' ,'".$_POST["txtTel"]."','".$_POST["txtEmail"]."','".$_POST["txttotal"]."','".$_POST["deli"]."','ยังไม่ชำระเงิน') 
  ";
  $objQuery = mysqli_query($con,$strSQL);
  if(!$objQuery)
  {
	echo $objCon->error;
	exit();
  }

  $strOrderID = mysqli_insert_id($con);

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strpd_id"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orders_detail (OrderID,pd_id,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strpd_id"][$i]."','".$_SESSION["strQty"][$i]."') 
			  ";
			  mysqli_query($con,$strSQL);
	  }
  }

mysqli_close($con);

session_destroy();

header("location:order-bill-paypal.php?OrderID=".$strOrderID);
?>