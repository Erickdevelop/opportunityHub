<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<!-- Owl Carousel Theme Default CSS -->
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<!-- Box Icon CSS-->
	<link rel="stylesheet" href="assets/css/boxicon.min.css">
	<!-- Flaticon CSS-->
	<link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
	<!-- Magnific CSS -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- Meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Dark CSS -->
	<link rel="stylesheet" href="assets/css/dark.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<!-- Title CSS -->
	<title>Opportunity Hub</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
	<?php
	// Pre-loader Start
	include "preloader.php";
	// Pre-loader End

	// Navbar Area Start
	include "nav-bar.php";
	// Navbar Area End
	?>
	<!-- Page Title Start -->
	<section class="page-title title-bg5">
		<div class="d-table">
			<div class="d-table-cell">
				<h2>Job Grid</h2>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>Job Grid</li>
				</ul>
			</div>
		</div>
		<div class="lines">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</section>
	<!-- Page Title End -->

	<!-- Jobs Section Start -->
	<?php
	include "jobsec.php";
	?>
	<!-- Jobs Section End -->
	<?php
	// Subscribe Section Start
	include "subscribe.php";
	// Subscribe Section End

	// Footer Section Start
	include "footer.php";
	// Footer Section End

	// Back To Top Start
	include "top.php";
	// Back To Top End
	include "js.php";
	?>


</body>

</html>