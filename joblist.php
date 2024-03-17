<?php
require_once "config.php";

// filter jobs
$sql = "SELECT * FROM jobs";

// connect with database
$all_jobs = mysqli_query($conn, $sql);
?>


<section class="job-style-two job-list-section pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Jobs You May Be Interested In</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
        </div>

        <div class="row">
            <?php
            // loop through the database
            while ($row = mysqli_fetch_assoc($all_jobs)) { ?>
                <div class="col-lg-12">
                    <div class="job-card-two">
                        <div class="row align-items-center">
                            <div class="col-md-1">
                                <div class="company-logo">
                                    <a href="job-details.php"></a>
                                    <img src="assets/img/company-logo/1.png" alt="logo">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.php">Web Designer, Graphic Designer, UI/UX Designer</a>
                                    </h3>
                                    <ul>
                                        <li>
                                            <i class='bx bx-briefcase'></i>
                                            <?php echo $row['title']; ?>
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase'></i>
                                            <?php echo $row['salary']; ?>
                                        </li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            <?php echo $row['location']; ?>
                                        </li>
                                        <li>
                                            <i class='bx bx-stopwatch'></i>
                                            9 days ago
                                        </li>
                                    </ul>

                                    <span><?php echo $row['category']; ?></span>

                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="theme-btn text-end">
                                    <a href="job-details.php" class="default-btn">
                                        Browse Job
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/2.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="job-details.php">Website Developer & Software Developer</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                Web Developer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                $3000-$8000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Garden Road, UK
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                5 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="job-details.php" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/3.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="job-details.php">Application Developer & Web Designer</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                App Developer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                $3000-$4000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                State City, USA
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                8 days ago
                                            </li>
                                        </ul>

                                        <span>Part-Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="job-details.php" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/4.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="job-details.php">Frontend & Backend Developer</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                Web Developer
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                $5000-$8000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Drive Post NY 676
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                1 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="job-details.php" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/5.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="job-details.php">IT Department & Manager</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                Manager
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                $35000-$38000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Wellesley Rd, London
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                7 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="job-details.php" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/6.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="job-details.php">Office Assistant</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                Manager
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                $10000-$12000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Wellesley Rd, London
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                9 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="job-details.php" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/1.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="job-details.php">Accountants</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                Finance
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                $5000-$8000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Green View, Australia
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch' ></i>
                                                2 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="job-details.php" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="company-logo">
                                        <a href="job-details.php">
                                            <img src="assets/img/company-logo/2.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href="job-details.php">Budget Analysts</a>
                                        </h3>
                                        <ul>                                          
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                Data Science
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                $3000-$8000
                                            </li>
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                Park Road, UK
                                            </li>
                                            <li>
                                                <i class='bx bx-stopwatch'></i>
                                                3 days ago
                                            </li>
                                        </ul>

                                        <span>Full Time</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href="job-details.php" class="default-btn">
                                            Browse Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

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