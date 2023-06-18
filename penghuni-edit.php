<?php 
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:penghuni-login.php?message=belum_login#login");
    }
?>

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
        <div class="container-fluid bg-dark px-0"  style="position: fixed; top: 0; left: 0; z-index: 10; background-color:">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h2 class="m-0 text-primary text-uppercase">Stellar Haven</h2>
                    </a>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-3">
                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h2 class="m-0 text-primary text-uppercase">Stellar Haven</h2>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" style="text-align: right; margin-right: 50px;" id="navbarCollapse">
                            <div class="navbar-nav py-0">
                                <a href="penghuni-home.php?id=<?= $id_penghuni; ?>" class="nav-item nav-link">Home</a>
                                <a href="penghuni-home.php?id=<?= $id_penghuni; ?>#profil" class="nav-item nav-link">Profile</a>
                                <a href="penghuni-home.php?id=<?= $id_penghuni; ?>#pembayaran" class="nav-item nav-link">Payment </a>
                                <a href="penghuni-home.php?id=<?= $id_penghuni; ?>#keluhan" class="nav-item nav-link">Complaints</a>
                                <a href="penghuni-home.php?id=<?= $id_penghuni; ?>#datapenghuni" class="nav-item nav-link">Tenants</a>
                                <a href="logout.php" class="nav-item nav-link">Logout</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg); position: relative; overflow: hidden; margin-top: 70px ; z-index: 2;">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Welcome to Our Haven, <br> Dear!</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <?php 
            include 'connection.php';

            $username = $_SESSION['username'];
            $query = mysqli_query($connect, "SELECT * FROM penghuni WHERE username='$username' ");
            $data = mysqli_fetch_array($query);

            $id_penghuni = $data['id_penghuni'];
        ?>

        <!-- Profile Start -->
        <section id="edit">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Your Profile</h6>
                        <h1 class="mb-5">Edit Your <span class="text-primary text-uppercase">Profile</span></h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="p-4 mt-2">
                                    <table class="table text-dark">
                                      <form method="POST" action="penghuni-edit-process.php">
                                        <tbody>
                                          <input type="hidden" name="id_penghuni" value="<?= $id_penghuni;  ?>">
                                        <tr>
                                          <td>Nama</td>
                                          <td>:</td>
                                          <td><input type="text" name="nama_penghuni" value="<?= $data['nama_penghuni'];?>"></td>
                                        </tr>
                                        <tr>
                                          <td>NIK</td>
                                          <td>:</td>
                                          <td><input type="text" name="nik" value="<?= $data['nik'];?>"></td>
                                        </tr>
                                        <tr>
                                          <td>Username</td>
                                          <td>:</td>
                                          <td><input type="text" name="username" value="<?= $data['username'];?>"></td>
                                        </tr>
                                        <tr>
                                          <td>Password</td>
                                          <td>:</td>
                                          <td><input type="text" name="password" value="<?= $data['password'];?>"></td>
                                        </tr>
                                        <tr>
                                          <td>Tanggal Lahir</td>
                                          <td>:</td>
                                          <td><input type="text" name="tgl_lahir" value="<?= $data['tgl_lahir'];?>" onfocus="(this.type='date')"></td>
                                        </tr>
                                        <tr>
                                          <td>Alamat</td>
                                          <td>:</td>
                                          <td><input type="text" name="alamat" value="<?= $data['alamat'];?>"></td>
                                        </tr>
                                        <tr>
                                          <td>No.HP</td>
                                          <td>:</td>
                                          <td><input type="text" name="no_hp" value="<?= $data['no_hp'];?>"></td>
                                        </tr>
                                        <tr>
                                          <td>Pekerjaan</td>
                                          <td>:</td>
                                          <td><input type="text" name="pekerjaan" value="<?= $data['pekerjaan'];?>"></td>
                                        </tr>
                                        <tr>
                                          <td>Tanggal Masuk</td>
                                          <td>:</td>
                                          <td><?= $data['tgl_masuk'];?></td>
                                        </tr>
                                        <tr>
                                          <td>Tanggal Keluar</td>
                                          <td>:</td>
                                          <td><?= $data['tgl_keluar'];?></td>
                                        </tr>
                                        <tr>
                                          <td>No.Kamar</td>
                                          <td>:</td>
                                          <td><?= $data['id_kamar'];?></td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td><button class="btn btn-sm btn-primary rounded py-2 px-4">Save</button></td>
                                        </tr>
                                      </tbody>
                                      </form>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profile End -->

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