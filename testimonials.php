<?php
require "config.php";

// filter comments
$sql = "SELECT * FROM comments";

// connect the database
$all_comments = mysqli_query($conn, $sql);
?>

<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <h2>What Client’s Say About Us</h2>
            <p>Listen To What Our Valued Clients Have To Say About Their Experince With Opportunity Hub - Read Testimonials and Discover Why We're the Trusted Choice For All Your Recruitment Needs.</p>
        </div>

        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($all_comments)) {
            ?>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-items">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 offset-md-3 offset-lg-0 p-0">
                                <div class="testimonial-img">
                                    <img src="assets/img/testimonial-img.jpg" alt="testimonial image">
                                </div>
                                <div class="testimonial-img-text">
                                    <h3><?php echo $row['name']; ?></h3>
                                    <p><?php echo $row['title']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-7 p-0">
                                <div class="testimonial-text">
                                    <i class='flaticon-left-quotes-sign'></i>
                                    <p><?php echo $row['comment']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
                ?>

                <!-- <div class="testimonial-items">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 offset-md-3 offset-lg-0 p-0">
                            <div class="testimonial-img">
                                <img src="assets/img/testimonial-img-2.jpg" alt="testimonial image">
                            </div>
                            <div class="testimonial-img-text">
                                <h3>John Doe</h3>
                                <p>Web Designer</p>
                            </div>
                        </div>
                        <div class="col-lg-7 p-0">
                            <div class="testimonial-text">
                                <i class='flaticon-left-quotes-sign'></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                </div>
        </div>
    </div>
</section>