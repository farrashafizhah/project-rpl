<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Stellar Haven</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0"  style="position: fixed; top: 0; left: 0; z-index: 10; background-color: rgba(34, 49, 52, 0.9);" >
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h2 class="m-0 text-primary text-uppercase">Stellar Haven</h2>
                    </a>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2"></div>
                <div class="col-lg-1"></div>
                <div class="col-lg-1">
                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h2 class="m-0 text-primary text-uppercase">Stellar Haven</h2>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" style="text-align: right; margin-right: 50px;" id="navbarCollapse">
                            <div class="navbar-nav py-0">
                                <!-- <a href="pemilik-home.php" class="nav-item nav-link">Home</a>
                                <a href="pemilik-home.php#room" class="nav-item nav-link">Rooms</a>
                                <a href="pemilik-home.php#keuangan" class="nav-item nav-link">Finance </a>
                                <a href="pemilik-home.php#keluhan" class="nav-item nav-link">Complaints</a>
                                <a href="pemilik-home.php#datapenghuni" class="nav-item nav-link">Tenants</a> -->
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login as</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="pemilik-login.php#login" class="dropdown-item">Pemilik</a>
                                        <a href="pengelola-login.php#login" class="dropdown-item">Pengelola</a>
                                        <a href="penghuni-login.php#login" class="dropdown-item">Penghuni</a>
                                    </div>
                                </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
    <section id="carr">
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Comfey Living</h6>
                                <h3 class="display-3 text-white mb-4 animated slideInDown">Discover The Most Comfortable Place to Rest</h3>
                                <a href="#login" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Log in</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Comfey Living</h6>
                                <h3 class="display-3 text-white mb-4 animated slideInDown">Discover The Most Comfortable Place to Rest</h3>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow mx-auto" style="padding: 55px; width: 500px">
                    
                    <div >
                        <section id="login">
                            <div class="mb-5" style="text-align: center;">Login as Penghuni</div>
                            <center class="mb-3 text-danger text-sm">
                                <?php 
                                    if (isset($_GET['message'])) {
                                        if ($_GET['message'] == "gagal") {
                                            echo "Login gagal! Username dan password salah.";
                                        } elseif ($_GET['message'] == "logout") {
                                            echo "Anda telah berhasil logout";
                                        } elseif ($_GET['message'] == "belum_login") {
                                            echo "Anda harus login dulu untuk mengakses halaman ini";
                                        }
                                    }
                                ?>
                            </center>
                            <form method="POST" action="penghuni-lp.php">
                                <input class="form-control" type="text" name="username" placeholder="Username">
                                <input class="form-control mt-4" type="password" name="password" placeholder="Password">
                                <div class="" style="text-align: right;">
                                    <button class="btn btn-primary w-200 mt-4 ">Log in</button>
                                    <a href="index.php#room" class="btn btn-primary w-200 mt-4">Back</a>
                            </div>         
                        </form>
                        </section>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>