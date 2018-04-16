<!DOCTYPE html>
<html>
<head>
<title>Pikoro Kid</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/dota2icon.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 20%;
    height: auto;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 0px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}
</style>
</head>
<body>



<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'showindex')" id="defaultOpen">showindex</button>
  <button class="tablinks" onclick="openCity(event, 'prodect')">prodect</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
  <button class="tablinks" onclick="openCity(event, 'Thailand')">Thailand</button>
</div>

<div id="showindex" class="tabcontent">
<?php
  ini_set('display_errors', 1);
  error_reporting(~0);

  $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
  
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

   $sql = "SELECT * FROM products";

   $stmt = $conn->prepare($sql);
   $stmt->execute();


   $sql1 = "SELECT * FROM image";

   $stmt1 = $conn->prepare($sql1);
   $stmt1->execute();
?>
  
  <h1>Show Index Edit</h1>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#row1">Edit Row1</a></li>
    <li><a data-toggle="tab" href="#row2">Edit Sline</a></li>
 
  </ul>

  <div class="tab-content">
    <div id="row1" class="tab-pane fade in active">
  <h1>Edit show product row 1</h1>
<table width="650" border="1">
  <tr>
    <th width="91"> <div align="center">productID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">detail</div></th>
    <th width="198"> <div align="center">price</div></th>
    <th width="97"> <div align="center">color </div></th>
    <th width="59"> <div align="center">size</div></th>
    <th width="71"> <div align="center">picture</div></th>
  <th width="50"> <div align="center">status</div></th>
  <th width="50"> <div align="center">Edit</div></th>
  </tr>
<?php
while($result = $stmt->fetch( PDO::FETCH_ASSOC ))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["pd_id"];?></div></td>
    <td><?php echo $result["pd_name"];?></td>
    <td><?php echo $result["pd_detail"];?></td>
    <td><?php echo $result["pd_price"];?></td>
    <td><div align="center"><?php echo $result["pd_color"];?></div></td>
    <td align="right"><?php echo $result["pd_size"];?></td>
    <td><img src="images/<?php echo $result["pd_picture"];?>" width="100"></td>
    <td align="right"><?php echo $result["pd_status"];?></td>
  <td align="center"><a href="edit.php?pd_id=<?php echo $result["pd_id"];?>">Edit</a></td>
  </tr>
<?php
}
?>
</table>
    </div>
    <div id="row2" class="tab-pane fade">
      <h3>Sline</h3>
       <h1>Edit show product row 1</h1>
<table width="650" border="1">
  <tr>
    <th width="91"> <div align="center">productID </div></th>
    <th width="98"> <div align="center">Name </div></th>
  <th width="50"> <div align="center">status</div></th>
  <th width="50"> <div align="center">Edit</div></th>
  </tr>
<?php
while($result1 = $stmt1->fetch( PDO::FETCH_ASSOC ))
{
?>
  <tr>
    <td><div align="center"><?php echo $result1["im_id"];?></div></td>
    <td><img src="images/<?php echo $result1["im_name"];?>" width="100"></td>
    <td align="right"><?php echo $result1["im_status"];?></td>
  <td align="center"><a href="editsline.php?im_id=<?php echo $result1["im_id"];?>">Edit</a></td>
  </tr>
<?php
}
?>
</table>
    </div>
    
  </div>


</div>

</div>

<div id="prodect" class="tabcontent">
  <h3>Products Manage</h3>
<div class="container">
  
  

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Product Detail</a></li>
  <li><a data-toggle="tab" href="#menu1">Product Insert</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Products Detail</h3>
      <?php
   $sql1 = "SELECT * FROM products";

   $stmt1 = $conn->prepare($sql1);
   $stmt1->execute();

?>
<table width="650" border="1">
  <tr>
    <th width="91"> <div align="center">productID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">detail</div></th>
    <th width="198"> <div align="center">price</div></th>
    <th width="97"> <div align="center">color </div></th>
    <th width="59"> <div align="center">size</div></th>
    <th width="71"> <div align="center">picture</div></th>
  <th width="50"> <div align="center">status</div></th>
  <th width="50"> <div align="center">Edit</div></th>
  <th width="50"> <div align="center">Delete</div></th>
  </tr>
<?php
while($result1 = $stmt1->fetch( PDO::FETCH_ASSOC ))
{
?>
  <tr>
    <td><div align="center"><?php echo $result1["pd_id"];?></div></td>
    <td><?php echo $result1["pd_name"];?></td>
    <td><?php echo $result1["pd_detail"];?></td>
    <td><?php echo $result1["pd_price"];?></td>
    <td><div align="center"><?php echo $result1["pd_color"];?></div></td>
    <td align="right"><?php echo $result1["pd_size"];?></td>
    <td><img src="images/<?php echo $result1["pd_picture"];?>" width="100"></td>
    <td align="right"><?php echo $result1["pd_status"];?></td>
  <td align="center"><a href="edit.php?pd_id=<?php echo $result1["pd_id"];?>">Edit</a></td>
  <td>Delete</td>
  </tr>
<?php
}
?>
</table>
<?php
$conn = null;
?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    
    
  </div>
</div>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Thailand" class="tabcontent">
  <h3>Thailand</h3>
  <p>Thailand is the capital of Bankkok.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html>