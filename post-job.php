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
        <section class="page-title title-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Post a Job</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Post a Job</li>
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

        <!-- Post Job Section Start -->
        <div class="job-post ptb-100">
            <div class="container">
                <form class="job-post-from" action="postjob.php" method="post">
                    <h2>Fill Up Your Job information</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInput1" placeholder="Job Title or Keyword" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Category</label>
                                <select class="category" name="category">
                                    <option data-display="Category">Category</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Graphics Design">Graphics Design</option>
                                    <option value="Data Entry">Data Entry</option>
                                    <option value="Visual Editor">Visual Editor</option>
                                    <option value="Office Assistant">Office Assistant</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" name="name"class="form-control" id="exampleInput2" placeholder="Company Name" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInput3" placeholder="e.g. hello@company.com" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Website (Optional)</label>
                                <input type="text" name="website" class="form-control" id="exampleInput4" placeholder="e.g www.companyname.com">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" name="location" class="form-control" id="exampleInput5" placeholder="e.g. London" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Type</label>
                                <select class="category" name="type">
                                    <option data-display="Job Type">Job Type</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Freelancer">Freelancer</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Tags</label>
                                <input type="text" name="tags" class="form-control" id="exampleInput6" placeholder="e.g. web design, graphics design, video editing" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Salary (Optional)</label>
                                <input type="number" name="salary" class="form-control" id="exampleInput7" placeholder="e.g. $20,000">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Experience</label>
                                <input type="text" name="experience" class="form-control" id="exampleInput8" placeholder="e.g. 1 year" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Job Description</label>
                                <textarea class="form-control description-area" name="description" id="exampleFormControlTextarea1" rows="6" placeholder="Job Description" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" name="submit" class="post-btn">
                                Post A Job
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Post Job Section End -->
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