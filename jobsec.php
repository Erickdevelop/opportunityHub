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
<section class="job-section pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Jobs You May Be Interested In</h2>
            <p>Explore Curated Job Listings and Experience - Find Your Perfect Fit at Opportunity Hub.</p>
        </div>

        <div class="row">
            <?php foreach ($jobs as $row1) { ?> <!-- loop through the database to pick the jobs -->
                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.php">
                                        <img src="assets/img/company-logo/1.png" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.php"><?php echo $row1['title']; ?></a>
                                    </h3>
                                    <ul>
                                        <li>Via <a href="#"><?php echo $row1['name']; ?></a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            <?php echo $row1['location']; ?>
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt'></i>
                                            <?php echo $row1['tag']; ?>
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase'></i>
                                            <?php echo $row1['type']; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                    <span><?php echo $row1['type']; ?></span>
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch'></i>
                                        1 Hr Ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }; ?> <!-- loop End -->


            <!-- <div class="col-sm-6">
    <div class="job-card">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="thumb-img">
                    <a href="job-details.php">
                        <img src="assets/img/company-logo/2.png" alt="company logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="job-info">
                    <h3>
                        <a href="job-details.php">Data Entry</a>
                    </h3>
                    <ul>
                        <li>Via <a href="#">Techno Inc.</a></li>
                        <li>
                            <i class='bx bx-location-plus'></i>
                            Street 40/A, London
                        </li>
                        <li>
                            <i class='bx bx-filter-alt'></i>
                            Data Entry
                        </li>
                        <li>
                            <i class='bx bx-briefcase'></i>
                            Freelance
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="job-save">
                    <a href="#">
                        <i class='bx bx-heart'></i>
                    </a>
                    <p>
                        <i class='bx bx-stopwatch'></i>
                        3 Hr Ago
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="job-card">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="thumb-img">
                    <a href="job-details.php">
                        <img src="assets/img/company-logo/3.png" alt="company logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="job-info">
                    <h3>
                        <a href="job-details.php">Graphic Designer</a>
                    </h3>
                    <ul>
                        <li>Via <a href="#">Devon Design</a></li>
                        <li>
                            <i class='bx bx-location-plus'></i>
                            West Sight, USA
                        </li>
                        <li>
                            <i class='bx bx-filter-alt'></i>
                            Graphics
                        </li>
                        <li>
                            <i class='bx bx-briefcase'></i>
                            Freelance
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="job-save">
                    <a href="#">
                        <i class='bx bx-heart'></i>
                    </a>
                    <p>
                        <i class='bx bx-stopwatch'></i>
                        4 Hr Ago
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="job-card">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="thumb-img">
                    <a href="job-details.php">
                        <img src="assets/img/company-logo/4.png" alt="company logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="job-info">
                    <h3>
                        <a href="job-details.php">Web Developer</a>
                    </h3>
                    <ul>
                        <li>Via <a href="#">MegaNews</a></li>
                        <li>
                            <i class='bx bx-location-plus'></i>
                            San Francisco, California
                        </li>
                        <li>
                            <i class='bx bx-filter-alt'></i>
                            Development
                        </li>
                        <li>
                            <i class='bx bx-briefcase'></i>
                            Freelance
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="job-save">
                    <a href="#">
                        <i class='bx bx-heart'></i>
                    </a>
                    <p>
                        <i class='bx bx-stopwatch'></i>
                        5 Hr Ago
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="job-card">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="thumb-img">
                    <a href="job-details.php">
                        <img src="assets/img/company-logo/5.png" alt="company logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="job-info">
                    <h3>
                        <a href="job-details.php">Digital Marketor</a>
                    </h3>
                    <ul>
                        <li>Via <a href="#">AB Marketer LTD</a></li>
                        <li>
                            <i class='bx bx-location-plus'></i>
                            Wellesley Rd, London
                        </li>
                        <li>
                            <i class='bx bx-filter-alt'></i>
                            Marketing
                        </li>
                        <li>
                            <i class='bx bx-briefcase'></i>
                            Freelance
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="job-save">
                    <a href="#">
                        <i class='bx bx-heart'></i>
                    </a>
                    <p>
                        <i class='bx bx-stopwatch'></i>
                        6 Hr Ago
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6">
    <div class="job-card">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="thumb-img">
                    <a href="job-details.php">
                        <img src="assets/img/company-logo/6.png" alt="company logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="job-info">
                    <h3>
                        <a href="job-details.php">UI/UX Designer</a>
                    </h3>
                    <ul>
                        <li>Via <a href="#">Design Hunter</a></li>
                        <li>
                            <i class='bx bx-location-plus'></i>
                            Zoo Rd, London
                        </li>
                        <li>
                            <i class='bx bx-filter-alt'></i>
                            Accountancy
                        </li>
                        <li>
                            <i class='bx bx-briefcase'></i>
                            Freelance
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="job-save">
                    <a href="#">
                        <i class='bx bx-heart'></i>
                    </a>
                    <p>
                        <i class='bx bx-stopwatch'></i>
                        8 Hr Ago
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> -->

        </div>

    </div>
</section>