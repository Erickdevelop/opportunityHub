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
    <section class="page-title title-bg23">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Contact Us</li>
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

    <!-- Contact Section Start -->
    <div class="contact-card-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="contact-card">
                                <i class='bx bx-phone-call'></i>
                                <ul>
                                    <li>
                                        <a href="tel:+145664474574">
                                            +1-456-644-7457
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:17459674567">
                                            +1-745-967-4567
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="contact-card">
                                <i class='bx bx-mail-send'></i>
                                <ul>
                                    <li>
                                        <a href="mailto:info@jovie.com">
                                            info@opphub.com
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:hello@jovie.com">
                                            hello@opphub.com
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
                            <div class="contact-card">
                                <i class='bx bx-location-plus'></i>
                                <ul>
                                    <li>
                                        123, Nairobi, Kenya
                                    </li>
                                    <li>
                                        Wabera Street, Kenya
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Contact Form Start -->
    <section class="contact-form-section pb-100">
        <div class="container">
            <div class="contact-area">
                <h3>Lets' Talk With You</h3>
                <form action="contactus.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="number" id="number" class="form-control" required data-error="Please enter your number" placeholder="Phone Number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control message-field" id="message" cols="30" rows="7" required data-error="Please type your message" placeholder="Write Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 text-center">
                            <button type="submit" name="submit" class="default-btn contact-btn">
                                Send Message
                            </button>
                            <?php echo $message; ?>
                            <div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->
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