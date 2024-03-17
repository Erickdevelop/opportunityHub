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
    <section class="page-title title-bg13">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Sign Up</h2>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Sign Up</li>
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

    <!-- Sign up Section Start -->
    <div class="signup-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                    <form class="signup-form" action="connect.php" method="post">
                        <div class="form-group">
                            <label>Enter Username</label>
                            <input type="text" class="form-control" name="uname" placeholder="Enter Username" required>
                        </div>

                        <div class="form-group">
                            <label>Enter Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                        </div>

                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                        </div>

                        <div class="form-group">
                            <label>Repeat Password</label>
                            <input type="password" class="form-control" name="password2" placeholder="Repeat Your Password" required>
                        </div>

                        <div class="form-group">
                            <label>Enter Your Category/Position</label>
                            <select class="form-select category" name="position">
                                <!-- <option data-display="Job Type">Job Type</option> -->
                                <option value="Employer">Employer</option>
                                <option value="Job Seeker">Job Seeker</option>
                                <!-- <option value="Freelancer">Freelancer</option> -->
                            </select>
                            <!-- <input type="password" class="form-control" name="position" placeholder="Enter Employer or Job-seeker" required> -->
                        </div>

                        <div class="signup-btn text-center">
                            <button type="submit" name="submit">Sign Up</button>
                        </div>

                        <div class="other-signup text-center">
                            <span>Or sign up with</span>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-google'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="create-btn text-center">
                            <p>
                                Have an Account?
                                <a href="sign-in.php">
                                    Sign In
                                    <i class='bx bx-chevrons-right bx-fade-right'></i>
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->
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