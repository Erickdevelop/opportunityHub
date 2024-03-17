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
        <section class="page-title title-bg8">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Candidates Details</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Candidates Details</li>
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

        <!-- Candidate Details Start -->
        <section class="candidate-details pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="candidate-profile">
                            <img src="assets/img/client-1.png" alt="candidate image">
                            <h3>John Smith</h3>
                            <p>Web Developer</p>

                            <ul>
                                <li>                                 
                                    <a href="tel:+100230342">
                                        <i class='bx bxs-phone'></i>
                                        +101 023 0342
                                    </a>
                                </li>
                                <li>                                   
                                    <a href="mailto:john@gmail.com">
                                        <i class='bx bxs-location-plus'></i>
                                        john@gmail.com
                                    </a>
                                </li>
                            </ul>

                            <div class="candidate-social">
                                <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="candidate-info-text">
                            <h3>About Me</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>

                        <div class="candidate-info-text candidate-education">
                            <h3>Education</h3>

                            <div class="education-info">
                                <h4>School</h4>
                                <p>Amherst School, USA</p>
                                <span>2000-2010</span>
                            </div>

                            <div class="education-info">
                                <h4>College</h4>
                                <p>Swarthmore College, USA</p>
                                <span>2010-2012</span> 
                            </div>

                            <div class="education-info">
                                <h4>University</h4>
                                <p>Princeton University, USA</p>
                                <span>2012-2016</span>
                            </div>
                        </div>

                        <div class="candidate-info-text candidate-experience">
                            <h3>Experience</h3>
                            
                            <ul>
                                <li>Proficient in HTML, CSS, Server-Scripting, C/C++, and Oracle</li>
                                <li>Experience with SEO</li>
                                <li>Experience Teaching Web Development</li>
                                <li>Knowledgeable in Online Advertising</li>
                                <li>Expert in LAMP Web Service Stacks</li>
                            </ul>
                        </div>

                        <div class="candidate-info-text candidate-skill">
                            <h3>Skills</h3>
                            
                            <ul>
                                <li>HTMl</li>
                                <li>CSS</li>
                                <li>JS</li>
                                <li>PHP</li>
                                <li>Oracle</li>
                                <li>C/C++</li>
                                <li>SQL</li>
                                <li>Ruby</li>
                            </ul>
                        </div>

                        <div class="candidate-info-text text-center">
                            <div class="theme-btn">
                                <a href="#" class="default-btn">Hire Me</a>
                                <a href="#" class="default-btn">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Candidate Details End -->
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