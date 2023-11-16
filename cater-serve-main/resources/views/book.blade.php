<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>CaterServ - Catering Services Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="/lib/animate/animate.min.css" rel="stylesheet">
        <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary fw-bold mb-0">Cater<span class="text-dark">Serv</span> </h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/" class="nav-item nav-link ">Home</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/service" class="nav-item nav-link">Services</a>
                            <a href="/menu" class="nav-item nav-link">Menu</a>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->



        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Booking</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Booking</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Book Us Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-0">
                    <div class="col-1">
                        <img src="/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                    <form action="/create-book" method="POST">
                        @csrf
                        <div class="col-lg-4 col-md-6">
                            <select name="country" class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Select Country</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <option value="India">India</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select name="city" class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Select City</option>
                                <option value="Depend">Depend On Country</option>
                                <option value="UK">UK</option>
                                <option value="India">India</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select name="palace" class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Select Palace</option>
                                <option value="Depend">Depend On Country</option>
                                <option value="UK">UK</option>
                                <option value="India">India</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select name="event_type" class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Small Event</option>
                                <option value="Event">Event Type</option>
                                <option value="Big">Big Event</option>
                                <option value="Small">Small Event</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select name="palace_number" class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>No. Of Palace</option>
                                <option value="200">100-200</option>
                                <option value="400">300-400</option>
                                <option value="600">500-600</option>
                                <option value="800">700-800</option>
                                <option value="1000">900-1000</option>
                                <option value="1200">1000+</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <select name="food_preference" class="form-select border-primary p-2" aria-label="Default select example">
                                <option selected>Vegetarian</option>
                                <option value="Vegetarian">Vegetarian</option>
                                <option value="NonVeg">Non Vegetarian</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input name="contact_no" type="mobile" class="form-control border-primary p-2" placeholder="Your Contact No.">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input name="event_date" type="date" class="form-control border-primary p-2" placeholder="Select Date">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input name="email" type="email" class="form-control border-primary p-2" placeholder="Enter Your Email">
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                        </div>
                    </form>
                    <div class="col-1">
                        <img src="/img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Us End -->



        <!-- Back to Top -->
    <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>