<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sparlex - Spa Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid topbar d-none d-lg-block">
            <div class="container px-0">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="me-4 text-light"><i
                                    class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="#" class="me-4 text-light"><i
                                    class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                            <a href="#" class="text-light"><i
                                    class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary display-4">Sparlex</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="#beranda" class="nav-item nav-link active">Beranda</a>
                            <a href="#servis" class="nav-item nav-link">Servis</a>
                            <a href="#tentang" class="nav-item nav-link">Tentang</a>
                            <a href="#testimoni" class="nav-item nav-link">Testimoni</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <a href="{{ route('login') }}"
                                class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">Masuk
                                Aplikasi</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid carousel-header px-0" id="beranda">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('front/img/carousel-3.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3">Kecantikan dan Kesehatan Kulit</h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Cek Jenis Kulit</h1>
                            <p class="mx-md-5 fs-4 px-4 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod
                                magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5"
                                    href="#">Mulai Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front/img/carousel-2.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Kecantikan dan
                                Kesehatan Kulit</h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Cek Jenis Kulit</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod
                                magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5"
                                    href="#">Mulai Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front/img/carousel-1.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Kecantikan dan
                                Kesehatan Kulit</h4>
                            <h1 class="display-1 text-capitalize text-dark">Cek Jenis Kulit</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod
                                magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5"
                                    href="#">Mulai Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5" id="servis">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-center text-primary">Our Service</p>
                <h1 class="display-3">Spa & Beauty Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="services-content text-end">
                                    <h3>Skin Care</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy</p>
                                    <a href="#"
                                        class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make
                                        Order</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{ asset('front/img/services-1.jpg') }}" class="img-fluid rounded"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{ asset('front/img/services-2.jpg') }}" class="img-fluid rounded"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="services-content text-start">
                                    <h3>Face Masking</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy</p>
                                    <a href="#"
                                        class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make
                                        Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="services-content text-end">
                                    <h3>Stream Bath</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy</p>
                                    <a href="#"
                                        class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make
                                        Order</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{ asset('front/img/services-3.jpg') }}" class="img-fluid rounded"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{ asset('front/img/services-4.jpg') }}" class="img-fluid rounded"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="services-content text-start">
                                    <h3>Facial Therapy</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy</p>
                                    <a href="#"
                                        class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make
                                        Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- About Start -->
    <div class="container-fluid about py-5" id="tentang">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="video">
                        <img src="{{ asset('front/img/about-1.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="position-absolute rounded border-5 border-top border-start border-white"
                            style="bottom: 0; right: 0;;">
                            <img src="{{ asset('front/img/about-2.jpg') }}" class="img-fluid rounded"
                                alt="">
                        </div>
                        <button type="button" class="btn btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="fs-4 text-uppercase text-primary">About Us</p>
                    <h1 class="display-4 mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-gitkraken fa-3x text-primary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">Special Offers</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-gift fa-3x text-primary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">Special Offers</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Explore
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid appointment py-5">
        <!-- Counter Start -->
        <div class="container-fluid counter-section">
            <div class="container py-5">
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="counter-item p-5">
                            <div class="counter-content bg-white p-4">
                                <i class="fas fa-globe fa-5x text-primary mb-3"></i>
                                <h5 class="text-primary">Worldwide Clients</h5>
                                <div class="svg-img">
                                    <svg width="100" height="50">
                                        <polygon points="55, 10 85, 55 25, 55 25," style="fill: #DCCAF2;" />
                                    </svg>
                                </div>
                            </div>
                            <div class="counter-quantity">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">379</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="counter-item p-5">
                            <div class="counter-content bg-white p-4">
                                <i class="fas fa-spa fa-5x text-primary mb-3"></i>
                                <h5 class="text-primary">Wellness & Spa</h5>
                                <div class="svg-img">
                                    <svg width="100" height="50">
                                        <polygon points="55, 10 85, 55 25, 55 25," style="fill: #DCCAF2;" />
                                    </svg>
                                </div>
                            </div>
                            <div class="counter-quantity">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">829</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="counter-item p-5">
                            <div class="counter-content bg-white p-4">
                                <i class="fas fa-users fa-5x text-primary mb-3"></i>
                                <h5 class="text-primary">Happy Customers</h5>
                                <div class="svg-img">
                                    <svg width="100" height="50">
                                        <polygon points="55, 10 85, 55 25, 55 25," style="fill: #DCCAF2;" />
                                    </svg>
                                </div>
                            </div>
                            <div class="counter-quantity">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">713</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->
    </div>
    <!-- Appointment End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5" id="testimoni">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-primary">Testimonial</p>
                <h1 class="display-4 mb-4 text-white">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4"
                                    style="border: dashed; border-color: var(--bs-white);">
                                    <img src="{{ asset('front/img/testimonial-1.jpg') }}"
                                        class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary">Person Name</h4>
                                    <p class="m-0 text-white">Profession</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-white">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor
                                    ut labore et dolore magna aliqua is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4"
                                    style="border: dashed; border-color: var(--bs-white);">
                                    <img src="{{ asset('front/img/testimonial-2.jpg') }}"
                                        class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary">Person Name</h4>
                                    <p class="m-0 text-white">Profession</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-white">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor
                                    ut labore et dolore magna aliqua is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4"
                                    style="border: dashed; border-color: var(--bs-white);">
                                    <img src="{{ asset('front/img/testimonial-3.jpg') }}"
                                        class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-primary">Person Name</h4>
                                    <p class="m-0 text-white">Profession</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-white">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor
                                    ut labore et dolore magna aliqua is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Newsletter</h4>
                        <p class="text-white">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit. Nullam in tempor dui, non consectetur enim.</p>
                        <div class="position-relative mx-auto rounded-pill">
                            <input class="form-control rounded-pill border-0 w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Enter your email">
                            <button type="button"
                                class="btn btn-primary btn-primary-outline-0 rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Our Services</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Facials</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Waxing</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Message</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Minarel baths</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Body treatments</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Aroma Therapy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Stone Spa</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Schedule</h4>
                        <p class="text-muted mb-0">Monday: <span class="text-white"> 09:00 am – 10:00 pm</span></p>
                        <p class="text-muted mb-0">Saturday: <span class="text-white"> 09:00 am – 08:00 pm</span>
                        </p>
                        <p class="text-muted mb-0">Sunday: <span class="text-white"> 09:00 am – 05:00 pm</span></p>
                        <h4 class="my-4 text-white">Address</h4>
                        <p class="mb-0"><i class="fas fa-map-marker-alt text-secondary me-2"></i> 123 ranking
                            street North tower New York, USA</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Follow Us</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Faceboock</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Instagram</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Twitter</a>
                        <h4 class="my-4 text-white">Contact Us</h4>
                        <p class="mb-0"><i class="fas fa-envelope text-secondary me-2"></i> info@example.com</p>
                        <p class="mb-0"><i class="fas fa-phone text-secondary me-2"></i> (+012) 3456 7890 123</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center text-md-start mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your
                            Site Name</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-center">
                        <a href=""
                            class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href=""
                            class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i
                                class="fab fa-twitter"></i></a>
                        <a href=""
                            class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i
                                class="fab fa-instagram"></i></a>
                        <a href=""
                            class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-0"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By
                    <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('front/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('front/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('front/js/main.js') }}"></script>
</body>

</html>
