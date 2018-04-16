<?php require_once("conn.php"); ?>
<?php

    $strSQL = "select * from products where not pd_catagory = 0";
    $objQuery = mysqli_query($con, $strSQL);
    

		
		
		$Num_Rows = mysqli_num_rows($objQuery);

		$Per_Page = 9;   // Per Page
		error_reporting(~E_NOTICE);
		$Page = $_GET["Page"];
		if(!$_GET["Page"])
		{
			$Page=1;
		}

		$Prev_Page = $Page-1;
		$Next_Page = $Page+1;

		$Page_Start = (($Per_Page*$Page)-$Per_Page);
		if($Num_Rows<=$Per_Page)
		{
			$Num_Pages =1;
		}
		else if(($Num_Rows % $Per_Page)==0)
		{
			$Num_Pages =($Num_Rows/$Per_Page) ;
		}
		else
		{
			$Num_Pages =($Num_Rows/$Per_Page)+1;
			$Num_Pages = (int)$Num_Pages;
		}

		$strSQL .=" order  by pd_id ASC LIMIT $Page_Start , $Per_Page";
		$objQuery  = mysqli_query($con, $strSQL);


		echo"<div class='row'>";
		$intRows = 0;
		while($objResult = mysqli_fetch_array($objQuery))
		{
			echo"<div class='col-sm-12 col-md-6 col-lg-4 p-b-50'> <div class='block2'> <div class='block2-img wrap-pic-w of-hidden pos-relative block2-labelnew'>";
			$intRows++;
	?>
			<center>
				<img src="images/<?php echo $objResult["pd_picture"];?>" width="320" heigh="290"><br>
				<?php echo"<div class='block2-overlay trans-0-4'>
										<a href='#' class='block2-btn-addwishlist hov-pointer trans-0-4'>
											<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
											<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
										</a>

										<div class='block2-btn-addcart w-size1 trans-0-4'>
											
											<button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
												Add to Cart
											</button>
										</div>
									</div>
								</div>"; ?>
				<?php echo"<div class='block2-txt p-t-20'>
									<a href='#' class='block2-name dis-block s-text3 p-b-5'>"; ?>
						<?php echo $objResult["pd_name"];?>

				<?php echo"</a> <span class='block2-price m-text6 p-r-5'>"; ?>
					<?php echo $objResult["pd_price"];?>
				<?php echo"</span></div>"; ?>
				<br>
			</center>
	<?php
			echo"</div></div>";
			if(($intRows)%2==0)
			{
				
			}
		}
		echo"</div>";
	?>

		<br>
		<div class="pagination flex-m flex-w p-t-26">
		Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
		<?php
		if($Prev_Page)
		{
			echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
		}
			
		for($i=1; $i<=$Num_Pages; $i++){
			if($i != $Page)
			{
				echo "<a href='$_SERVER[SCRIPT_NAME]?Page=$i' class='item-pagination flex-c-m trans-0-4'>$i</a>";
			}
			else
			{
				echo "<a href='#' class='item-pagination flex-c-m trans-0-4 active-pagination'> $i </a>";
			}
		}
			
		if($Page!=$Num_Pages)
		{
			echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
		}
		?>
		</div>