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

    <!-- Pre-loader Start -->
    <?php
    include "preloader.php";
    ?>
    <!-- Pre-loader End -->

    <!-- Navbar Area Start -->
    <?php
    include "nav-bar.php";
    ?>
    <!-- Navbar Area End -->

    <!-- Page Title Start -->
    <section class="page-title title-bg10">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Account</h2>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Account</li>
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

    <!-- Account Area Start -->
    <section class="account-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="account-information">
                        <div class="profile-thumb">
                            <img src="assets/img/account.jpg" alt="account holder image">
                            <h3>John Smith</h3>
                            <p>Web Developer</p>
                        </div>

                        <ul>
                            <li>
                                <a href="#" class="active">
                                    <i class='bx bx-user'></i>
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href="resume.php">
                                    <i class='bx bxs-file-doc'></i>
                                    My Resume
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-briefcase'></i>
                                    Applied Job
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-envelope'></i>
                                    Messages
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-heart'></i>
                                    Saved Jobs
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-lock-alt'></i>
                                    Change Password
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-coffee-togo'></i>
                                    Delete Account
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-log-out'></i>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="account-details">
                        <h3>Basic Information</h3>
                        <form class="basic-info" action="accounts.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="number" name="phone" class="form-control" placeholder="Your Phone">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input type="text" class="form-control" placeholder="Job Title">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="account-btn">Edit</button>
                                    <button type="submit" name="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>

                        <h3>Address</h3>
                        <form class="-candidate-address">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your Country</label>
                                        <input type="text" class="form-control" placeholder="Your Country">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Your City</label>
                                        <input type="text" class="form-control" placeholder="Your City">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="number" class="form-control" placeholder="City Zip">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Region</label>
                                        <input type="text" class="form-control" placeholder="Your Region">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Edit</button>
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>

                        <h3>Other information</h3>
                        <form class="cadidate-others">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="number" class="form-control" placeholder="Your Age">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Work Experience</label>
                                        <input type="number" class="form-control" placeholder="Work Experience">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Language</label>
                                        <input type="text" class="form-control" placeholder="Language">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Skill</label>
                                        <input type="text" class="form-control" placeholder="Skills">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Edit</button>
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>

                        <h3>Social links</h3>
                        <form class="candidates-sociak">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" placeholder="www.facebook.com/user">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="number" class="form-control" placeholder="www.twitter.com/user">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Linkedin</label>
                                        <input type="text" class="form-control" placeholder="www.Linkedin.com/user">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Github</label>
                                        <input type="text" class="form-control" placeholder="www.Github.com/user">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="account-btn">Edit</button>
                                    <button type="submit" class="account-btn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Area End -->
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