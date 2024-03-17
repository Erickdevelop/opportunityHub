<?php
// connect to the database
include "config.php";

// filter from database
$sql = "SELECT * FROM jobs";

// connect the database
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
    <title>Opprtunity Hub</title>
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
    <section class="page-title title-bg9">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Company</h2>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Company</li>
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

    <!-- Companies Section Start -->
    <section class="company-section company-style-two pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Top Companies</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="row">
                <?php
                foreach ($jobs as $row) {
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="company-card">
                            <div class="company-logo">
                                <a href="job-list.php">
                                    <img src="assets/img/top-company/1.png" alt="company logo">
                                </a>
                            </div>
                            <div class="company-text">
                                <h3><?php echo $row['name']; ?></h3>
                                <p>
                                    <i class='bx bx-location-plus'></i>
                                    <?php echo $row['location']; ?>
                                </p>
                                <a href="job-list.php" class="company-btn">
                                    25 Open Position
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-list.php">
                                <img src="assets/img/top-company/2.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Trout Design</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Park Avenue, Mumbai
                            </p>
                            <a href="job-list.php" class="company-btn">
                                35 Open Position
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-list.php">
                                <img src="assets/img/top-company/3.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Resland LTD</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Betas Quence, London
                            </p>
                            <a href="job-list.php" class="company-btn">
                                20 Open Position
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-list.php">
                                <img src="assets/img/top-company/4.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Lawn Hopper</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Wellesley Rd, London
                            </p>
                            <a href="job-list.php" class="company-btn">
                                45 Open Position
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-list.php">
                                <img src="assets/img/top-company/5.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Barkleys</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Hill Street, USA
                            </p>
                            <a href="job-list.php" class="company-btn">
                                18 Open Position
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-list.php">
                                <img src="assets/img/top-company/6.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Benetton</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                View Point, USA
                            </p>
                            <a href="job-list.php" class="company-btn">
                                12 Open Position
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-list.php">
                                <img src="assets/img/top-company/7.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Walmesh LTD</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Belfast, UK
                            </p>
                            <a href="job-list.php" class="company-btn">
                                20 Open Position
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-list.php">
                                <img src="assets/img/top-company/8.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Relnet Industry</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Bristol, London
                            </p>
                            <a href="job-list.php" class="company-btn">
                                21 Open Position
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class='bx bx-chevrons-left bx-fade-left'></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link active" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class='bx bx-chevrons-right bx-fade-right'></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- Companies Section End -->
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