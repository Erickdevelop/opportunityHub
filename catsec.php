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


<section class="categories-section pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Choose Your Category</h2>
            <p>Explore By Category and Find the Perfect Opportunity Tailored to Your Skills and Interests at Opportunity Hub.</p>
        </div>

        <div class="row">
            <?php foreach ($jobs as $job) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="job-list.php">
                        <div class="category-card">
                            <i class='flaticon-accounting'></i>
                            <h3><?php echo $job['title']; ?></h3>
                            <p>301 open position</p>
                        </div>
                    </a>
                </div>
            <?php }; ?>
            <!-- <div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.php">
							<div class="category-card">
								<i class='flaticon-graduation-cap'></i>
								<h3>Education</h3>
								<p>210 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.php">
							<div class="category-card">
								<i class='flaticon-wrench-and-screwdriver-in-cross'></i>
								<h3>Automotive Jobs</h3>
								<p>281 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.php">
							<div class="category-card">
								<i class='flaticon-consultation'></i>
								<h3>Business</h3>
								<p>122 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.php">
							<div class="category-card">
								<i class='flaticon-heart'></i>
								<h3>Health Care</h3>
								<p>335 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3  col-md-4 col-sm-6">
						<a href="job-list.php">
							<div class="category-card">
								<i class='flaticon-computer'></i>
								<h3>IT & Agency</h3>
								<p>401 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3  col-md-4 col-sm-6 offset-md-2 offset-lg-0">
						<a href="job-list.php">
							<div class="category-card">
								<i class='flaticon-worker'></i>
								<h3>Engineering</h3>
								<p>100 open position</p>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-6">
						<a href="job-list.php">
							<div class="category-card">
								<i class='flaticon-auction'></i>
								<h3>Legal</h3>
								<p>201 open position</p>
							</div>
						</a>
					</div>
				</div> -->
        </div>
    </div>
</section>