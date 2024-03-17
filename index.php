<?php
require_once "config.php";

// filter jobs
$sql = "SELECT * FROM jobs";

// connect with database
$all_jobs = mysqli_query($conn, $sql);
$jobs = [];

while ($row = mysqli_fetch_array($all_jobs)) {
	$job = [
		'id' => $row['id'],
		'title' => $row['title'],
		'category' => $row['category'],
		'name' => $row['CompanyName'],
		'email' => $row['CompanyEmail'],
		'website' => $row['CompanyWebsite'],
		'location' => $row['location'],
		'type' => $row['jobType'],
		'tags' => $row['jobTags'],
		'salary' => $row['salary'],
		'experience' => $row['experience'],
		'description' => $row['description'],
	];

	$jobs[] = $job;
}

// filter from the database for the registered members
$sql = "SELECT * FROM subscribers";

// connect to the database
$all_members = mysqli_query($conn, $sql);

?>


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
	<!-- Meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.css">
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

	<!-- Banner Section Start -->
	<div class="banner-section">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="banner-content text-center">
						<p>Find Jobs, Employment & Career Opportunities</p>
						<h1>Drop Resume & Get Your Desire Job!</h1>

						<form class="banner-form" action="findjob.php" method="post">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Keyword:</label>
										<input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Job Title">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputEmail2">Location:</label>
										<input type="text" name="location" class="form-control" id="exampleInputEmail2" placeholder="City or State">
									</div>
								</div>

								<div class="col-md-4">
									<button type="submit" name="submit" class="find-btn">
										Find A Job
										<i class='bx bx-search'></i>
									</button>
								</div>
							</div>
						</form>

						<ul class="keyword">
							<li>Trending Keywords:</li>
							<li><a href="#">Automotive,</a></li>
							<li><a href="#">Education,</a></li>
							<li><a href="#">Health</a></li>
							<li>and</li>
							<li><a href="#">Care Engineering</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Section End -->

	<!-- Category Section Start -->
	<?php
	include "catsec.php";
	?>
	<!-- Category Section End -->

	<!-- Jobs Section Start -->
	<?php
	include "jobsec.php";
	?>
	<!-- Jobs Section End -->

	<!-- Way To Use Section Start -->
	<?php
	include "use.php";
	?>
	<!-- Way To Use Section End -->

	<!-- Companies Section Start -->
	<section class="company-section pt-100 pb-70">
		<div class="container">
			<div class="section-title text-center">
				<h2>Top Companies</h2>
				<p>Explore Opportunities With Top Companies - Discover Where Your Skills Can Take You At Opportunity Hub.</p>
			</div>

			<div class="row">
				<?php
				foreach ($jobs as $row) {
				?>
					<div class="col-lg-3 col-sm-6">
						<div class="company-card">
							<div class="company-logo">
								<a href="job-grid.php">
									<img src="assets/img/top-company/1.png" alt="company logo">
								</a>
							</div>
							<div class="company-text">
								<h3><?php echo $row['name']; ?></h3>
								<p>
									<i class='bx bx-location-plus'></i>
									<?php echo $row['location']; ?>
								</p>
								<a href="job-grid.php" class="company-btn">
									25 Open Position
								</a>
							</div>
						</div>
					</div>
				<?php } ?>
				<!-- 
					<div class="col-lg-3 col-sm-6">
						<div class="company-card">
							<div class="company-logo">
								<a href="job-grid.php">
									<img src="assets/img/top-company/2.png" alt="company logo">
								</a>
							</div>
							<div class="company-text">
								<h3>Trout Design</h3>
								<p>
									<i class='bx bx-location-plus'></i>
									Park Avenue, Mumbai
								</p>
								<a href="job-grid.php" class="company-btn">
									35 Open Position
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="company-card">
							<div class="company-logo">
								<a href="job-grid.php">
									<img src="assets/img/top-company/3.png" alt="company logo">
								</a>
							</div>
							<div class="company-text">
								<h3>Resland LTD</h3>
								<p>
									<i class='bx bx-location-plus'></i>
									Betas Quence, London
								</p>
								<a href="job-grid.php" class="company-btn">
									20 Open Position
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="company-card">
							<div class="company-logo">
								<a href="job-grid.php">
									<img src="assets/img/top-company/4.png" alt="company logo">
								</a>
							</div>
							<div class="company-text">
								<h3>Lawn Hopper</h3>
								<p>
									<i class='bx bx-location-plus'></i>
									Wellesley Rd, London
								</p>
								<a href="job-grid.php" class="company-btn">
									45 Open Position
								</a>
							</div>
						</div>
					</div> -->
			</div>
		</div>
	</section>
	<!-- Companies Section End -->

	<!-- Why Choose Section Start -->
	<section class="why-choose">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7 p-0">
					<div class="why-choose-text pt-100 pb-70">
						<div class="section-title text-center">
							<h2>Why You Choose Opportunity Hub?</h2>
							<p>Choose Opportunity Hub for Unparalleled Access to Diverse Job Opportunities,Personalized Career Insights and Seamless Job Matching - Your Gateway To a Brighter Future.</p>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="media">
									<i class="flaticon-group align-self-center mr-3"></i>
									<div class="media-body">
										<h5 class="mt-0">Best Talented People</h5>
										<p>At Opportunity Hub We Connect Top-Tier Talent with Exceptional Career Opportunities - Join Our Community of High Achievers and Unleash Your Full Potential.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="media">
									<i class="flaticon-research align-self-center mr-3"></i>
									<div class="media-body">
										<h5 class="mt-0">Easy To Find Canditate</h5>
										<p>Easily Find Top Candidates with Opportunity Hub's Intuitive Platform - Streamline Your Hiring Process and Build Your Dream Team Effortlessly.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="media">
									<i class="flaticon-discussion align-self-center mr-3"></i>
									<div class="media-body">
										<h5 class="mt-0">Easy To Communicate</h5>
										<p>Effortlessly Connect and Communicate with Candidates and Employers on Opportunity Hub - Streamline Your Interactions and Make Meaningful Connections With Ease.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="media">
									<i class="flaticon-recruitment align-self-center mr-3"></i>
									<div class="media-body">
										<h5 class="mt-0">Global Recruitment Option</h5>
										<p>Expand Your Recruitment Reach Globally With Opportunity Hub - Tap into a Diverse Pool of Talent From Around The World o Find The Perfect Fit For Your Team.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row counter-area">
							<div class="col-md-3 col-6">
								<div class="counter-text">
									<h2><span>127</span></h2>
									<p>Job Posted</p>
								</div>
							</div>

							<div class="col-md-3 col-6">
								<div class="counter-text">
									<h2><span>137</span></h2>
									<p>Job Filed</p>
								</div>
							</div>

							<div class="col-md-3 col-6">
								<div class="counter-text">
									<h2><span>180</span></h2>
									<p>Company</p>
								</div>
							</div>

							<div class="col-md-3 col-6">
								<div class="counter-text">
									<h2><span>144</span></h2>
									<p>Members</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 p-0">
					<div class="why-choose-img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Why Choose Section End -->

	<!-- Job Info Section Start -->
	<div class="job-info pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="looking-job">
						<div class="media">
							<i class='flaticon-group align-self-start mr-3'></i>
							<div class="media-body">
								<h5 class="mt-0">Looking For a Job</h5>
								<p>Your next role could be with one of these top leading organizations</p>

								<a href="job-list.php">
									Apply Now
									<i class='bx bx-chevrons-right'></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="recruiting-card">
						<div class="media">
							<i class='flaticon-resume align-self-start mr-3'></i>
							<div class="media-body">
								<h5 class="mt-0">Are You Recruiting?</h5>
								<p>Your next role could be with one of these top leading organizations</p>

								<a href="post-job.php">
									Apply Now
									<i class='bx bx-chevrons-right'></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Job Info Section End -->

	<!-- Pricing Section Start -->
	<section class="pricing-section pb-70">
		<div class="container">
			<div class="section-title text-center">
				<h2>Buy Our Plans & Packages</h2>
				<p>Unlock Premium Features and Maximize Your Hiring Potential With Our Customizable Plans and Packages at Opportunity Hub - Find the Perfect Solution for Your Recruitment Needs Today.</p>
			</div>

			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="price-card">
						<div class="price-top">
							<h3>Free Forever</h3>
							<i class='bx bx-user'></i>
							<h2>0<sub>/Month</sub></h2>
						</div>

						<div class="price-feature">
							<ul>
								<li>
									<i class='bx bx-check'></i>
									Appear in results
								</li>
								<li>
									<i class='bx bx-check'></i>
									<strong>Accept mobile app</strong>
								</li>
								<li>
									<i class='bx bx-check'></i>
									Manage canditates directly
								</li>
							</ul>
						</div>

						<div class="price-btn">
							<a href="post-job.php">Find A Job</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="price-card mt-12">
						<div class="price-top">
							<h3>Sponsor</h3>
							<i class='bx bx-user'></i>
							<h2>10<sub>/Month</sub></h2>
						</div>

						<div class="price-feature">
							<ul>
								<li>
									<i class='bx bx-check'></i>
									Premium placement
								</li>
								<li>
									<i class='bx bx-check'></i>
									<strong>PPC on your job</strong>
								</li>
								<li>
									<i class='bx bx-check'></i>
									Reach more candidates
								</li>
								<li>
									<i class='bx bx-check'></i>
									Desktop, mobile job alerts
								</li>
							</ul>
						</div>

						<div class="price-btn">
							<a href="post-job.php">Find A Job</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
					<div class="price-card">
						<div class="price-top">
							<h3>Premium Plan</h3>
							<i class='bx bx-user'></i>
							<h2>30<sub>/Month</sub></h2>
						</div>

						<div class="price-feature">
							<ul>
								<li>
									<i class='bx bx-check'></i>
									Job ad live for six-weeks
								</li>
								<li>
									<i class='bx bx-check'></i>
									<strong>Premium placement</strong>
								</li>
								<li>
									<i class='bx bx-check'></i>
									Desktop, mobile job alerts
								</li>
							</ul>
						</div>

						<div class="price-btn">
							<a href="post-job.php">Find A Job</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing Section End -->

	<!-- Candidate Section Start -->
	<section class="candidate-section pb-100">
		<div class="container">
			<div class="section-title text-center">
				<h2>Featured Candidates</h2>
				<p>Discover Standout Talent With Our Curated Selection of Featured Candidates - Find Top Performers Ready to Make an Impact on Your Team at Opportunity Hub.</p>
			</div>

			<div class="condidate-slider owl-carousel owl-theme">
				<?php
				// fetch from database by looping
				while ($row = mysqli_fetch_assoc($all_members)) {
				?>
					<div class="condidate-item">
						<div class="candidate-img">
							<img src="assets/img/candidate/1.jpg" alt="candidate image">
						</div>
						<div class="candidate-social">
							<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
							<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
						</div>
						<div class="candidate-text">
							<h3><a href="candidate-details.php"><?php echo $row['uname']; ?></a></h3>
							<ul>
								<li>
									<i class='bx bx-filter-alt'></i>
									Construction & Property
								</li>
								<li>
									<i class='bx bx-location-plus'></i>
									Nairobi,Kenya
								</li>
							</ul>

							<div class="bottom-text">
								<p>
									<i class='bx bx-stopwatch'></i>
									3D Ago
								</p>
								<a href="#">
									<i class='bx bx-heart'></i>
								</a>
							</div>
						</div>
					</div>
				<?php }  ?>
				<!-- <div class="condidate-item">
					<div class="candidate-img">
						<img src="assets/img/candidate/2.jpg" alt="candidate image">
					</div>
					<div class="candidate-social">
						<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
					</div>
					<div class="candidate-text">
						<h3><a href="candidate-details.php">Felix Koni</a></h3>
						<ul>
							<li>
								<i class='bx bx-filter-alt'></i>
								SEO Expart
							</li>
							<li>
								<i class='bx bx-location-plus'></i>
								Narok,Kenya
							</li>
						</ul>

						<div class="bottom-text">
							<p>
								<i class='bx bx-stopwatch'></i>
								8D ago
							</p>
							<a href="#">
								<i class='bx bx-heart'></i>
							</a>
						</div>
					</div>
				</div>

				<div class="condidate-item">
					<div class="candidate-img">
						<img src="assets/img/candidate/3.jpg" alt="candidate image">
					</div>
					<div class="candidate-social">
						<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
					</div>
					<div class="candidate-text">
						<h3><a href="candidate-details.php">Malisha Yeye</a></h3>
						<ul>
							<li>
								<i class='bx bx-filter-alt'></i>
								Project Management
							</li>
							<li>
								<i class='bx bx-location-plus'></i>
								Kisii,Kenya
							</li>
						</ul>

						<div class="bottom-text">
							<p>
								<i class='bx bx-stopwatch'></i>
								1D ago
							</p>
							<a href="#">
								<i class='bx bx-heart'></i>
							</a>
						</div>
					</div>
				</div>

				<div class="condidate-item">
					<div class="candidate-img">
						<img src="assets/img/candidate/1.jpg" alt="candidate image">
					</div>
					<div class="candidate-social">
						<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
					</div>
					<div class="candidate-text">
						<h3><a href="candidate-details.php">Mumbua Alex</a></h3>
						<ul>
							<li>
								<i class='bx bx-filter-alt'></i>
								Construction & Property
							</li>
							<li>
								<i class='bx bx-location-plus'></i>
								Kikuyu,Kenya
							</li>
						</ul>

						<div class="bottom-text">
							<p>
								<i class='bx bx-stopwatch'></i>
								9D ago
							</p>
							<a href="#">
								<i class='bx bx-heart'></i>
							</a>
						</div>
					</div>
				</div>

				<div class="condidate-item">
					<div class="candidate-img">
						<img src="assets/img/candidate/4.jpg" alt="candidate image">
					</div>
					<div class="candidate-social">
						<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
					</div>
					<div class="candidate-text">
						<h3><a href="candidate-details.php">Quence Joes</a></h3>
						<ul>
							<li>
								<i class='bx bx-filter-alt'></i>
								Web Developer
							</li>
							<li>
								<i class='bx bx-location-plus'></i>
								Augusta, Maine
							</li>
						</ul>

						<div class="bottom-text">
							<p>
								<i class='bx bx-stopwatch'></i>
								8D ago
							</p>
							<a href="#">
								<i class='bx bx-heart'></i>
							</a>
						</div>
					</div>
				</div>

				<div class="condidate-item">
					<div class="candidate-img">
						<img src="assets/img/candidate/2.jpg" alt="candidate image">
					</div>
					<div class="candidate-social">
						<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
					</div>
					<div class="candidate-text">
						<h3><a href="candidate-details.php">Felica Kareon</a></h3>
						<ul>
							<li>
								<i class='bx bx-filter-alt'></i>
								SEO Expart
							</li>
							<li>
								<i class='bx bx-location-plus'></i>
								Georgetown, USA
							</li>
						</ul>

						<div class="bottom-text">
							<p>
								<i class='bx bx-stopwatch'></i>
								8D ago
							</p>
							<a href="#">
								<i class='bx bx-heart'></i>
							</a>
						</div>
					</div>
				</div>

				<div class="condidate-item">
					<div class="candidate-img">
						<img src="assets/img/candidate/3.jpg" alt="candidate image">
					</div>
					<div class="candidate-social">
						<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
					</div>
					<div class="candidate-text">
						<h3><a href="candidate-details.php">Malisa Petel</a></h3>
						<ul>
							<li>
								<i class='bx bx-filter-alt'></i>
								Project Management
							</li>
							<li>
								<i class='bx bx-location-plus'></i>
								Madison, USA
							</li>
						</ul>

						<div class="bottom-text">
							<p>
								<i class='bx bx-stopwatch'></i>
								1D ago
							</p>
							<a href="#">
								<i class='bx bx-heart'></i>
							</a>
						</div>
					</div>
				</div> -->

				<!-- <div class="condidate-item">
					<div class="candidate-img">
						<img src="assets/img/candidate/4.jpg" alt="candidate image">
					</div>
					<div class="candidate-social">
						<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
						<a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
					</div>
					<div class="candidate-text">
						<h3><a href="candidate-details.php">Quence Joes</a></h3>
						<ul>
							<li>
								<i class='bx bx-filter-alt'></i>
								Web Developer
							</li>
							<li>
								<i class='bx bx-location-plus'></i>
								Augusta, Maine
							</li>
						</ul>

						<div class="bottom-text">
							<p>
								<i class='bx bx-stopwatch'></i>
								8D ago
							</p>
							<a href="#">
								<i class='bx bx-heart'></i>
							</a>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- Candidate Section End -->

	<!-- Testimonial Section Start -->
	<?php
	include "testimonials.php";
	?>
	<!-- Testimonial Section End -->

	<!-- Blog Section Start -->

	<!-- Blog Section End -->

	<!-- Footer Section Start -->
	<?php
	include "footer.php";
	?>
	<!-- Footer Section End -->
	<?php
	include "top.php";
	?>
	<!-- Back To Top Start -->
	<?php
	include "js.php";
	?>
	<!-- Back To Top End -->

</body>

</html>