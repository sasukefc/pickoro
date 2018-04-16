<?php require_once("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pikoro Kid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/dota2icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.html" class="logo">
			<img src="images/icons/jugzdota500px.jpg" alt="IMG-LOGO">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="index.php">Home</a>
					</li>

					<li>
						<a href="product.php">Shop</a>
					</li>

					<li>
						<a href="about.php">About</a>
					</li>

					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
		</div>

		<!-- Header Icon -->
		<div class="header-icons">
			<a href="#" class="header-wrapicon1 dis-block">
				<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">
				<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				<span class="header-icons-noti">0</span>

				<!-- Header cart noti -->
				<div class="header-cart header-dropdown">
					<ul class="header-cart-wrapitem">
						<li class="header-cart-item">
							<div class="header-cart-item-img">
								<img src="images/item-cart-01.jpg" alt="IMG">
							</div>

							<div class="header-cart-item-txt">
								<a href="#" class="header-cart-item-name">
									White Shirt With Pleat Detail Back
								</a>

								<span class="header-cart-item-info">
									1 x $19.00
								</span>
							</div>
						</li>

					</ul>

					<div class="header-cart-total">
						Total: $75.00
					</div>

					<div class="header-cart-buttons">
						<div class="header-cart-wrapbtn">
							<!-- Button -->
							<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								View Cart
							</a>
						</div>

						<div class="header-cart-wrapbtn">
							<!-- Button -->
							<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								Check Out
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- top noti -->
	<div class="flex-c-m size22 bg0 s-text21 pos-relative">
		20% off everything!
		<a href="product.php" class="s-text22 hov6 p-l-5">
			Shop Now
		</a>

		<button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
			<i class="fa fa-remove fs-13" aria-hidden="true"></i>
		</button>
	</div>

	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="35px" viewBox="0 0 315 300">
  							<defs>
    							<style>
    								.fill_1 {fill: #00c300;}
      								.fill_2 {fill: #ffffff;}
    							</style>
  							</defs>
  								<g>
    								<path class="fs-18 color1 fill_1" d="M280.344,206.351 C280.344,206.351 280.354,206.351 280.354,206.351 C247.419,244.375 173.764,290.686 157.006,297.764 C140.251,304.844 142.724,293.258 143.409,289.286 C143.809,286.909 145.648,275.795 145.648,275.795 C146.179,271.773 146.725,265.543 145.139,261.573 C143.374,257.197 136.418,254.902 131.307,253.804 C55.860,243.805 0.004,190.897 0.004,127.748 C0.004,57.307 70.443,-0.006 157.006,-0.006 C243.579,-0.006 314.004,57.307 314.004,127.748 C314.004,155.946 303.108,181.342 280.344,206.351 Z"/>
    								<path class="fs-18 color1 fill_2" d="M253.185,121.872 C257.722,121.872 261.408,125.569 261.408,130.129 C261.408,134.674 257.722,138.381 253.185,138.381
C253.185,138.381 230.249,138.381 230.249,138.381 C230.249,138.381 230.249,153.146 230.249,153.146 C230.249,153.146 253.185,153.146 253.185,153.146 C257.710,153.146 261.408,156.851 261.408,161.398 C261.408,165.960 257.710,169.660 253.185,169.660 C253.185,169.660 222.018,169.660 222.018,169.660 C217.491,169.660 213.795,165.960 213.795,161.398 C213.795,161.398 213.795,130.149 213.795,130.149 C213.795,130.139 213.795,130.139 213.795,130.129 C213.795,130.129 213.795,130.114 213.795,130.109 C213.795,130.109 213.795,98.878 213.795,98.878 C213.795,98.858 213.795,98.850 213.795,98.841 C213.795,94.296 217.486,90.583 222.018,90.583 C222.018,90.583 253.185,90.583 253.185,90.583 C257.722,90.583 261.408,94.296 261.408,98.841 C261.408,103.398 257.722,107.103 253.185,107.103 C253.185,107.103 230.249,107.103 230.249,107.103 C230.249,107.103 230.249,121.872 230.249,121.872 C230.249,121.872 253.185,121.872 253.185,121.872 ZM202.759,161.398 C202.759,164.966 200.503,168.114 197.135,169.236 C196.291,169.521 195.405,169.660 194.526,169.660 C191.956,169.660 189.502,168.431 187.956,166.354 C187.956,166.354 156.012,122.705 156.012,122.705 C156.012,122.705 156.012,161.398 156.012,161.398 C156.012,165.960 152.329,169.660 147.791,169.660 C143.256,169.660 139.565,165.960 139.565,161.398 C139.565,161.398 139.565,98.841 139.565,98.841 C139.565,95.287 141.829,92.142 145.192,91.010 C146.036,90.730 146.915,90.583 147.799,90.583 C150.364,90.583 152.828,91.818 154.366,93.894 C154.366,93.894 186.310,137.559 186.310,137.559 C186.310,137.559 186.310,98.841 186.310,98.841 C186.310,94.296 190.000,90.583 194.536,90.583 C199.073,90.583 202.759,94.296 202.759,98.841 C202.759,98.841 202.759,161.398 202.759,161.398 ZM127.737,161.398 C127.737,165.960 124.051,169.660 119.519,169.660 C114.986,169.660 111.300,165.960 111.300,161.398 C111.300,161.398 111.300,98.841 111.300,98.841 C111.300,94.296 114.986,90.583 119.519,90.583 C124.051,90.583 127.737,94.296 127.737,98.841 C127.737,98.841 127.737,161.398 127.737,161.398 ZM95.507,169.660 C95.507,169.660 64.343,169.660 64.343,169.660 C59.816,169.660 56.127,165.960 56.127,161.398 C56.127,161.398 56.127,98.841 56.127,98.841 C56.127,94.296 59.816,90.583 64.343,90.583 C68.881,90.583 72.564,94.296 72.564,98.841 C72.564,98.841 72.564,153.146 72.564,153.146 C72.564,153.146 95.507,153.146 95.507,153.146 C100.047,153.146 103.728,156.851 103.728,161.398 C103.728,165.960 100.047,169.660 95.507,169.660 Z"/>
  								</g>
						</svg>
				</div>

				<!-- Logo2 -->
				<a href="index.html" class="logo2">
					<img src="images/icons/jugzdota500px.jpg" alt="IMG-LOGO">
				</a>

				<div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div>

					<!--  -->
					<a href="#" class="header-wrapicon1 dis-block m-l-30">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>
							
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/jugzdota500px.jpg" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Home</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.php">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
<?php 
    $strSql3 = "select * from image where im_status = 1";
    $objquery3 = mysqli_query($con, $strSql3);
    $data3 = mysqli_fetch_array($objquery3,MYSQLI_ASSOC);
?>
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/<?php echo $data3['im_name']; ?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
							Wellcome
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
							To Pikoro Kid
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>
<?php 
    $strSql4 = "select * from image where im_status = 2";
    $objquery4 = mysqli_query($con, $strSql4);
    $data4 = mysqli_fetch_array($objquery4,MYSQLI_ASSOC);
?>
				<div class="item-slick1 item2-slick1" style="background-image: url(images/<?php echo $data4['im_name']; ?>););">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rollIn">
							Leather Bags
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="lightSpeedIn">
							New Collection 2018
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>
<?php 
    $strSql6 = "select * from image where im_status = 3";
    $objquery6 = mysqli_query($con, $strSql6);
    $data6 = mysqli_fetch_array($objquery6,MYSQLI_ASSOC);
?>
				<div class="item-slick1 item3-slick1" style="background-image: url(images/<?php echo $data6['im_name']; ?>););">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rotateInDownLeft">
							Leather Bags
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="rotateInUpRight">
							New Collection 2018
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
<?php 
    $strSql = "select * from products where pd_status = 1";
    $objquery = mysqli_query($con, $strSql);
    $data = mysqli_fetch_array($objquery,MYSQLI_ASSOC);
?>
	<!-- Banner -->
	<div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/<?php echo $data['pd_picture']; ?>" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Sunglasses
							</a>
						</div>
					</div>
				</div>
<?php 
    $strSql1 = "select * from products where pd_status = 2";
    $objquery1 = mysqli_query($con, $strSql1);
    $data1 = mysqli_fetch_array($objquery1,MYSQLI_ASSOC);
?>
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/<?php echo $data1['pd_picture']; ?>" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Watches
							</a>
						</div>
					</div>
				</div>
<?php 
    $strSql2 = "select * from products where pd_status = 3";
    $objquery2 = mysqli_query($con, $strSql2);
    $data2 = mysqli_fetch_array($objquery2,MYSQLI_ASSOC);
?>
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/<?php echo $data2['pd_picture']; ?>" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Bags
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<!-- Banner video -->
	<section class="parallax0 parallax100" style="background-image: url(images/thor.jpg);">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">
				<span class="m-text9 p-t-45 fs-20-sm">
					The Beauty
				</span>

				<h3 class="l-text1 fs-35-sm">
					Lookbook
				</h3>

				<span class="btn-play s-text4 hov5 cs-pointer p-t-25" data-toggle="modal" data-target="#modal-video-01">
					<i class="fa fa-play" aria-hidden="true"></i>
					Play Video
				</span>
			</div>
		</div>
	</section>

	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Our Products
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Man</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#featured" role="tab">Wuman</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Sale</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kid" role="tab">Kids</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
	<?php

    $strSQL = "select * from products where pd_catagory = 1 limit 8";
    $objQuery = mysqli_query($con, $strSQL);

		echo"<div class='row'>";
		$intRows = 0;
		while($objResult = mysqli_fetch_array($objQuery))
		{
			echo"<div class='col-sm-6 col-md-4 col-lg-3 p-b-50'> <div class='block2'> <div class='block2-img wrap-pic-w of-hidden pos-relative block2-labelnew'>";
			$intRows++;
	?>
			<center>
				<img src="images/<?php echo $objResult["pd_picture"];?>" width="320" heigh="290">
				<?php
					echo "<div class='block2-overlay trans-0-4'>
											<a href='#'' class='block2-btn-addwishlist hov-pointer trans-0-4'>
												<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
												<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
											</a>

											<div class='block2-btn-addcart w-size1 trans-0-4'>
												
												<button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
													Add to Cart
												</button>
											</div>
										</div>";
				?>


				<?php echo"</div> <div class='block2-txt p-t-20'>
										<a href='product-detail.html' class='block2-name dis-block s-text3 p-b-5'>"; ?>
											<?php echo $objResult["pd_name"];?>
								<?php echo"</a>

										<span class='block2-price m-text6 p-r-5'>"; ?>
											<?php echo $objResult["pd_price"];?>
								<?php echo"</span>
									</div>"; ?>
			</center>
	<?php
			echo"</div></div>";
			if(($intRows)%2==0)
			{
				
			}
		}
		echo"</div>";
	?>


					</div>

					<!-- - -->
					<div class="tab-pane fade" id="featured" role="tabpanel">
						<?php

    $strSQL = "select * from products where pd_catagory = 2 limit 8";
    $objQuery = mysqli_query($con, $strSQL);

		echo"<div class='row'>";
		$intRows = 0;
		while($objResult = mysqli_fetch_array($objQuery))
		{
			echo"<div class='col-sm-6 col-md-4 col-lg-3 p-b-50'> <div class='block2'> <div class='block2-img wrap-pic-w of-hidden pos-relative block2-labelnew'>";
			$intRows++;
	?>
			<center>
				<img src="images/<?php echo $objResult["pd_picture"];?>" width="320" heigh="290">
				<?php
					echo "<div class='block2-overlay trans-0-4'>
											<a href='#'' class='block2-btn-addwishlist hov-pointer trans-0-4'>
												<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
												<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
											</a>

											<div class='block2-btn-addcart w-size1 trans-0-4'>
												
												<button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
													Add to Cart
												</button>
											</div>
										</div>";
				?>


				<?php echo"</div> <div class='block2-txt p-t-20'>
										<a href='product-detail.html' class='block2-name dis-block s-text3 p-b-5'>"; ?>
											<?php echo $objResult["pd_name"];?>
								<?php echo"</a>

										<span class='block2-price m-text6 p-r-5'>"; ?>
											<?php echo $objResult["pd_price"];?>
								<?php echo"</span>
									</div>"; ?>
			</center>
	<?php
			echo"</div></div>";
			if(($intRows)%2==0)
			{
				
			}
		}
		echo"</div>";
	?>

					</div>

					<!--  -->
					<div class="tab-pane fade" id="sale" role="tabpanel">
						<?php

    $strSQL = "select * from products where pd_catagory = 1 limit 8";
    $objQuery = mysqli_query($con, $strSQL);

		echo"<div class='row'>";
		$intRows = 0;
		while($objResult = mysqli_fetch_array($objQuery))
		{
			echo"<div class='col-sm-6 col-md-4 col-lg-3 p-b-50'> <div class='block2'> <div class='block2-img wrap-pic-w of-hidden pos-relative block2-labelsale'>";
			$intRows++;
	?>
			<center>
				<img src="images/<?php echo $objResult["pd_picture"];?>" width="320" heigh="290">
				<?php
					echo "<div class='block2-overlay trans-0-4'>
											<a href='#'' class='block2-btn-addwishlist hov-pointer trans-0-4'>
												<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
												<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
											</a>

											<div class='block2-btn-addcart w-size1 trans-0-4'>
												
												<button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
													Add to Cart
												</button>
											</div>
										</div>";
				?>


				<?php echo"</div> <div class='block2-txt p-t-20'>
										<a href='product-detail.html' class='block2-name dis-block s-text3 p-b-5'>"; ?>
											<?php echo $objResult["pd_name"];?>
								<?php echo"</a>

										<span class='block2-price m-text6 p-r-5'>"; ?>
											<?php echo $objResult["pd_price"];?>
								<?php echo"</span>
									</div>"; ?>
			</center>
	<?php
			echo"</div></div>";
			if(($intRows)%2==0)
			{
				
			}
		}
		echo"</div>";
	?>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="top-rate" role="tabpanel">
						<?php

    $strSQL = "select * from products where pd_catagory = 2 limit 8";
    $objQuery = mysqli_query($con, $strSQL);

		echo"<div class='row'>";
		$intRows = 0;
		while($objResult = mysqli_fetch_array($objQuery))
		{
			echo"<div class='col-sm-6 col-md-4 col-lg-3 p-b-50'> <div class='block2'> <div class='block2-img wrap-pic-w of-hidden pos-relative block2-labelsale'>";
			$intRows++;
	?>
			<center>
				<img src="images/<?php echo $objResult["pd_picture"];?>" width="320" heigh="290">
				<?php
					echo "<div class='block2-overlay trans-0-4'>
											<a href='#'' class='block2-btn-addwishlist hov-pointer trans-0-4'>
												<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
												<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
											</a>

											<div class='block2-btn-addcart w-size1 trans-0-4'>
												
												<button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
													Add to Cart
												</button>
											</div>
										</div>";
				?>


				<?php echo"</div> <div class='block2-txt p-t-20'>
										<a href='product-detail.html' class='block2-name dis-block s-text3 p-b-5'>"; ?>
											<?php echo $objResult["pd_name"];?>
								<?php echo"</a>

										<span class='block2-price m-text6 p-r-5'>"; ?>
											<?php echo $objResult["pd_price"];?>
								<?php echo"</span>
									</div>"; ?>
			</center>
	<?php
			echo"</div></div>";
			if(($intRows)%2==0)
			{
				
			}
		}
		echo"</div>";
	?>
					</div>

										<!--  -->
					<div class="tab-pane fade" id="kid" role="tabpanel">
						<?php

    $strSQL = "select * from products where pd_catagory = 2 limit 8";
    $objQuery = mysqli_query($con, $strSQL);

		echo"<div class='row'>";
		$intRows = 0;
		while($objResult = mysqli_fetch_array($objQuery))
		{
			echo"<div class='col-sm-6 col-md-4 col-lg-3 p-b-50'> <div class='block2'> <div class='block2-img wrap-pic-w of-hidden pos-relative block2-labelsale'>";
			$intRows++;
	?>
			<center>
				<img src="images/<?php echo $objResult["pd_picture"];?>" width="320" heigh="290">
				<?php
					echo "<div class='block2-overlay trans-0-4'>
											<a href='#'' class='block2-btn-addwishlist hov-pointer trans-0-4'>
												<i class='icon-wishlist icon_heart_alt' aria-hidden='true'></i>
												<i class='icon-wishlist icon_heart dis-none' aria-hidden='true'></i>
											</a>

											<div class='block2-btn-addcart w-size1 trans-0-4'>
												
												<button class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>
													Add to Cart
												</button>
											</div>
										</div>";
				?>


				<?php echo"</div> <div class='block2-txt p-t-20'>
										<a href='product-detail.html' class='block2-name dis-block s-text3 p-b-5'>"; ?>
											<?php echo $objResult["pd_name"];?>
								<?php echo"</a>

										<span class='block2-price m-text6 p-r-5'>"; ?>
											<?php echo $objResult["pd_price"];?>
								<?php echo"</span>
									</div>"; ?>
			</center>
	<?php
			echo"</div></div>";
			if(($intRows)%2==0)
			{
				
			}
		}
		echo"</div>";
	?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						บริษัท เพชรอาภรณ์2005 จำกัด, 7, พหลโยธิน 87 ซอย 6 แยก 3 ซอย 16 ตำบล ประชาธิปัตย์ อำเภอ ธัญบุรี ปทุมธานี 12130
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Men
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Women
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dresses
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sunglasses
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/Nt8ZrWY2Cmk?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
