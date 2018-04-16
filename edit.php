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

   $strpdid = null;

   if(isset($_GET["pd_id"]))
   {
	   $strpdid = $_GET["pd_id"];
   }
  
 	$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";
  
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	$sql = "SELECT * FROM products WHERE pd_id = ? ";
	$params = array($strpdid);

	$stmt = $conn->prepare($sql);
	$stmt->execute($params);

	$result = $stmt->fetch( PDO::FETCH_ASSOC );

?>
<form action="save.php" name="frmAdd" method="post">
<table width="284" border="1">
  <tr>
    <th width="120">ID</th>
    <td width="238"><input type="hidden" name="txtid" value="<?php echo $result["pd_id"];?>"><?php echo $result["pd_id"];?></td>
    </tr>
  <tr>
    <th width="120">Name</th>
    <td><input type="text" name="txtname" size="20" value="<?php echo $result["pd_name"];?>"></td>
    </tr>
  <tr>
    <th width="120">detail</th>
    <td><input type="text" name="txtdetail" size="20" value="<?php echo $result["pd_detail"];?>"></td>
    </tr>
  <tr>
    <th width="120">price</th>
    <td><input type="text" name="txtprice" size="2" value="<?php echo $result["pd_price"];?>"></td>
    </tr>
  <tr>
    <th width="120">color</th>
    <td><input type="text" name="txtcolor" size="5" value="<?php echo $result["pd_color"];?>"></td>
    </tr>
  <tr>
    <th width="120">size</th>
    <td><input type="text" name="txtsize" size="5" value="<?php echo $result["pd_size"];?>"></td>
    </tr>
    <tr>
    <th width="120">picture</th>
    <td><input type="text" name="txtpicture" size="5" value="<?php echo $result["pd_picture"];?>"></td>
    </tr>
    <tr>
    <th width="120">status</th>
    <td>
      <input type="text" name="txtstatus" size="5" value="<?php echo $result["pd_status"];?>">
      
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
