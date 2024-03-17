<?php
include "config.php";

// filter from the database
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
    <section class="page-title title-bg7">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Candidates</h2>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Candidates</li>
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

    <!-- Candidates Section Start -->
    <section class="candidate-style-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_assoc($all_members)) {
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="candidate-card">
                            <div class="candidate-img">
                                <img src="assets/img/candidate/1.jpg" alt="candidate image">
                            </div>
                            <div class="candidate-text">
                                <h3>
                                    <a href="candidate-details.php"><?php echo $row['uname']; ?></a>
                                </h3>
                                <ul>
                                    <li>
                                        Web Developer
                                    </li>
                                </ul>
                            </div>

                            <div class="candidate-social">
                                <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="candidate-card">
                        <div class="candidate-img">
                            <img src="assets/img/candidate/2.jpg" alt="candidate image">
                        </div>
                        <div class="candidate-text">
                            <h3>
                                <a href="candidate-details.php">Felica Kareon</a>
                            </h3>
                            <ul>
                                <li>
                                    PHP Developer
                                </li>
                            </ul>
                        </div>

                        <div class="candidate-social">
                            <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="candidate-card">
                        <div class="candidate-img">
                            <img src="assets/img/candidate/3.jpg" alt="candidate image">
                        </div>
                        <div class="candidate-text">
                            <h3>
                                <a href="candidate-details.php">Malisa Petel</a>
                            </h3>
                            <ul>
                                <li>
                                    Business Consultant
                                </li>
                            </ul>
                        </div>

                        <div class="candidate-social">
                            <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="candidate-card">
                        <div class="candidate-img">
                            <img src="assets/img/candidate/4.jpg" alt="candidate image">
                        </div>
                        <div class="candidate-text">
                            <h3>
                                <a href="candidate-details.php">Quence Joes</a>
                            </h3>
                            <ul>
                                <li>
                                    Graphics Designer
                                </li>
                            </ul>
                        </div>

                        <div class="candidate-social">
                            <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="candidate-card">
                        <div class="candidate-img">
                            <img src="assets/img/candidate/5.jpg" alt="candidate image">
                        </div>
                        <div class="candidate-text">
                            <h3>
                                <a href="candidate-details.php">Mary Mainor</a>
                            </h3>
                            <ul>
                                <li>
                                    Technical Writter
                                </li>
                            </ul>
                        </div>

                        <div class="candidate-social">
                            <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="candidate-card">
                        <div class="candidate-img">
                            <img src="assets/img/candidate/6.jpg" alt="candidate image">
                        </div>
                        <div class="candidate-text">
                            <h3>
                                <a href="candidate-details.php">Jack Hallock</a>
                            </h3>
                            <ul>
                                <li>
                                    Marketing Expert
                                </li>
                            </ul>
                        </div>

                        <div class="candidate-social">
                            <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="candidate-card">
                        <div class="candidate-img">
                            <img src="assets/img/candidate/7.jpg" alt="candidate image">
                        </div>
                        <div class="candidate-text">
                            <h3>
                                <a href="candidate-details.php">Lucas Mason</a>
                            </h3>
                            <ul>
                                <li>
                                    UX Designer
                                </li>
                            </ul>
                        </div>

                        <div class="candidate-social">
                            <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="candidate-card">
                        <div class="candidate-img">
                            <img src="assets/img/candidate/8.jpg" alt="candidate image">
                        </div>
                        <div class="candidate-text">
                            <h3>
                                <a href="candidate-details.php">Jerry Hudson</a>
                            </h3>
                            <ul>
                                <li>
                                    Video Editor
                                </li>
                            </ul>
                        </div>

                        <div class="candidate-social">
                            <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Candidates Section End -->
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