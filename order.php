<?php
ob_start();
session_start();
	
if(!isset($_SESSION["intLine"]))
{

	 $_SESSION["intLine"] = 0;
	 $_SESSION["strpd_id"][0] = $_GET["pd_id"];
	 $_SESSION["strQty"][0] = 1;

	 header("location:order-show.php");
}
else
{
	
	$key = array_search($_GET["pd_id"], $_SESSION["strpd_id"]);
	if((string)$key != "")
	{
		 $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + 1;
	}
	else
	{
		
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["strpd_id"][$intNewLine] = $_GET["pd_id"];
		 $_SESSION["strQty"][$intNewLine] = 1;
	}
	
	 header("location:order-show.php");

}
?>