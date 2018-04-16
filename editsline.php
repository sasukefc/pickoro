<html>
<head>
  <title>Pikoro Kid</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/dota2icon.png"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 

</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

   $strimid = null;

   if(isset($_GET["im_id"]))
   {
	   $strimid = $_GET["im_id"];
   }
  
 	$servername = "localhost";
	$username = "gagathaic1_yy";
	$password = "Nologolomo7";
	$dbname = "gagathaic1_yy";
  
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	$sql = "SELECT * FROM image WHERE im_id = ? ";
	$params = array($strimid);

	$stmt = $conn->prepare($sql);
	$stmt->execute($params);

	$result = $stmt->fetch( PDO::FETCH_ASSOC );

?>
<form action="savesline.php" name="frmAdd" method="post">
<table width="284" border="1">
  <tr>
    <th width="120">ID</th>
    <td width="238"><input type="hidden" name="txtid" value="<?php echo $result["im_id"];?>"><?php echo $result["im_id"];?></td>
    </tr>
  <tr>
    <th width="120">Name</th>
    <td><input type="text" name="txtname" size="20" value="<?php echo $result["im_name"];?>"></td>
    </tr>
    <tr>
    <th width="120">status</th>
    <td>
      <input type="text" name="txtstatus" size="5" value="<?php echo $result["im_status"];?>">
      
    </td>
    </tr>
  </table>
  <input type="submit" name="submit" value="submit">
</form>


<?php
$conn = null;
?>
</body>
</html>
