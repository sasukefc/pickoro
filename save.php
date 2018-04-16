<html>
<head>
<title>ThaiCreate.Com PHP & SQL Server (PDO)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

   $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
  
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	$sql = "UPDATE products SET 
				pd_name = ? ,
				pd_detail = ? ,
				pd_price = ? ,
				pd_color = ? ,
				pd_size = ? ,
				pd_picture = ? ,
				pd_status = ? 
				WHERE pd_id = ? ";
	$params = array($_POST["txtname"], $_POST["txtdetail"], $_POST["txtprice"], $_POST["txtcolor"], $_POST["txtsize"],$_POST["txtpicture"], $_POST["txtstatus"], $_POST["txtid"]);

	$stmt = $conn->prepare($sql);
	$stmt->execute($params);
	
	if( $stmt->rowCount() ) {
		 echo "Record update successfully";
		 header("refresh:5;url=admin-test.php");
	}

	$conn = null;
?>
</body>
</html>