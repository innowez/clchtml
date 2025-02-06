<header class="fixedHeader">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">
                        <img class="img-fluid" src="assets/images/logo.svg" alt="CLC">
                    </a>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ">
                            <li class="nav-item ">
                                <a class="nav-link" id="homeMenu" href="index.php"> Home </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" id="coursesMenu" href="courses.php"> Courses </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" id="aboutUsMenu" href="about-us.php"> About us </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" id="testimonialsMenu" href="testimonials.php"> Testimonials </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" id="contactMenu" href="contact-us.php"> Contact Us </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" id="blogMenu" href="blog.php">Blogs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="mobile_right">
                        <a href="tel:+919605833311" class="primary_btn ">
                            Talk With Us
                        </a>
                        <a class="hamburgerMenu" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="offcanvasRight">
                            <img src="assets/images/svg/hamburgerMenu.svg" alt="CLC">
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-end mobileMenu" tabindex="-1" id="mobileMenu" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <a class="" href="index.php">
            <img class="img-fluid logo" src="assets/images/logo.svg" alt="CLC">
        </a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul>
            <li>
                <a id="homeMobileMenu" href="index.php">Home</a>
            </li>
            <li>
                <a id="coursesMobileMenu" href="courses.php">Courses</a>
            </li>
            <li>
                <a id="aboutMobileMenu" href="about-us.php">About Us</a>
            </li>
            <li>
                <a id="testimonialsMobileMenu" href="testimonials.php">Testimonials</a>
            </li>
            <li>
                <a id="aboutMobileMenu" href="contact-us.php">Contact Us</a>
            </li>
        </ul>
    </div>
</div>


