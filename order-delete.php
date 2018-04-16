<?php
	ob_start();
	session_start();

	$Line = $_GET["Line"];
	$_SESSION["strpd_id"][$Line] = "";
	$_SESSION["strQty"][$Line] = "";

	header("location:order-show.php");
?>