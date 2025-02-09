
<?php include('assets/includes/link.php') ?>
<?php include('assets/includes/header.php') ?>

<section class="homeBanner innerBanner">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center pe-lg-5">
                <div class="w-100 cntBox">
                    <h2 class="color_white mt-20">Testimonials</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonialSection pt-100 pb-100">
    <img src="assets/images/background/gradient-01.svg" class="img-fluid gradientShape" alt="">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 text-center">
                <div class="subtitle ms-auto me-auto">
                    <p>Testimonials</p>
                </div>
                <h1 class="font-size-48 color_white mt-20">Read what our students have to say about us</h1>
            </div>
        </div>
    </div>
    <div class="container position-relative mt-10">
        <div class="row">
 
         
        <?php foreach ($reviews as $review): ?>
        
            <div class="col-md-6 col-xl-4 mt-40">
                <div class="testimonialCard">
                    <img src="assets/images/testimonialIcon.svg" class="img-fluid icon" alt="">
                    <p><?php echo htmlspecialchars($review['text']); ?></p>
                    <div class="profileInfo">
                        <div class="photo">
                                <img src="<?php echo $review['profile_photo_url'] ?? 'assets/images/testimonial/default.png'; ?>" class="img-fluid w-100" alt="">
                        </div>
                        <div class="details">
                        <h5><?php echo htmlspecialchars($review['author_name']); ?></h5>
                                <p><?php echo isset($review['relative_time_description']) ? htmlspecialchars($review['relative_time_description']) : ''; ?></p>
                                <div class="my-rating-readonly" data-rating="<?php echo $review['rating']; ?>"></div>

                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
           
        </div>
    </div>
</section>


<?php include('assets/includes/footer.php') ?>
<?php include('assets/includes/footer-cdn.php') ?>

<script src="assets/js/active-testimonials-menu.js"></script>
