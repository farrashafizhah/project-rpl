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
    <?php 
        include 'connection.php';

        $id_penghuni =$_GET['id'];
        $query = mysqli_query($connect, "SELECT * FROM penghuni WHERE id_penghuni='$id_penghuni' ");            
        $data = mysqli_fetch_array($query);

        $id_penghuni = $data['id_penghuni'];
    ?>
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
                <div class="col-lg-3"></div>
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

            $id_penghuni =$_GET['id'];
            $query = mysqli_query($connect, "SELECT * FROM penghuni WHERE id_penghuni='$id_penghuni' ");
            $data = mysqli_fetch_array($query);
        ?>

        <!-- Profile Start -->
        <section id="profil">
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
                                      <tbody>
                                        <tr>
                                          <td>Nama</td>
                                          <td>:</td>
                                          <td><?= $data['nama_penghuni'];?></td>
                                        </tr>
                                        <tr>
                                          <td>NIK</td>
                                          <td>:</td>
                                          <td><?= $data['nik'];?></td>
                                        </tr>
                                        <tr>
                                          <td>Username</td>
                                          <td>:</td>
                                          <td><?= $data['username'];?></td>
                                        </tr>
                                        <tr>
                                          <td>Password</td>
                                          <td>:</td>
                                          <td><?= $data['password'];?></td>
                                        </tr>
                                        <tr>
                                          <td>Tanggal Lahir</td>
                                          <td>:</td>
                                          <td><?= $data['tgl_lahir'];?></td>
                                        </tr>
                                        <tr>
                                          <td>Alamat</td>
                                          <td>:</td>
                                          <td><?= $data['alamat'];?></td>
                                        </tr>
                                        <tr>
                                          <td>No.HP</td>
                                          <td>:</td>
                                          <td><?= $data['no_hp'];?></td>
                                        </tr>
                                        <tr>
                                          <td>Pekerjaan</td>
                                          <td>:</td>
                                          <td><?= $data['pekerjaan'];?></td>
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
                                      </tbody>
                                    </table>
                                    <a href="penghuni-edit.php?id=<?= $id_penghuni ?>#edit" class="btn btn-sm btn-primary rounded py-2 px-4" style="float: right;">EDIT</a><br>
                                   
                                    <!-- Message -->
                                        <?php 
                                            if (isset($_GET['message'])) {
                                                if ($_GET['message'] == "gagalEdit") {
                                                    echo "Edit Gagal :'( ";
                                                } elseif ($_GET['message'] == "berhasilEdit") {
                                                    echo "Edit Berhasil /sujud syukur";
                                                } 
                                            }
                                        ?>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profile End -->

        <!-- Pembayaran Start -->
        <section id="pembayaran">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Your Payment History</h6>
                        <h1 class="mb-5">Explore Your <span class="text-primary text-uppercase">Payment</span></h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="p-4 mt-2">
                                    <table class="table table-bordered  border-dark text-dark">
                                      <thead>
                                        <tr class="table-style text-white text-center" style="background-color: #fea116; font-family: Heebo,sans-serif;">
                                          <th scope="col">No.</th>
                                          <th scope="col">Periode</th>
                                          <th scope="col">Waktu</th>
                                          <th scope="col">Jenis Pembayaran</th>
                                          <th scope="col">Bukti</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                            include 'connection.php';

                                            $id_penghuni = $_GET['id'];
                                            $nomor = 1;
                                            $query = mysqli_query($connect, "SELECT * FROM pemasukan WHERE id_penghuni='$id_penghuni' ");
                                            
                                            while ($data = mysqli_fetch_array($query)) { ?>
                                              <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $data["periode"] ?></td>
                                                <td><?= $data["tanggal_bayar"] ?></td>
                                                <td><?= $data["jenis"] ?></td>
                                                <td><img src="bukti/<?= $data["bukti"] ?>" style="width: 50%; height: 50% "></td>
                                              </tr>
                                                <?php $nomor++; 
                                        } ?>
                                      </tbody>
                                    </table>
                                    <div class="container" style="width: 450px">
                                        <p class="text-center">Tambahkan Pembayaran</p>
                                        <form method="POST" action="penghuni-pembayaran-process.php" enctype="multipart/form-data">
                                            <!-- periode -->
                                            <select class="mt-3 form-select" name="periode">
                                                <option selected hidden value="">Periode</option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November<November/option>
                                                <option value="Desember">Desember</option>
                                            </select>

                                            <!-- jenis pembayaran -->
                                            <select class="mt-3 form-select" name="jenis">
                                                <option selected hidden value="">Jenis Pembayaran</option>
                                                <option value="Transfer">Transfer</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Dana">Dana</option>
                                            </select>
                                            
                                            <!-- bukti -->
                                            <div class="mt-3">
                                                <label for="formFile" class="form-label ms-2">Bukti Pembayaran</label>
                                                <input class="form-control" type="file" name="bukti" id="formFile" accept="image/*">
                                            </div>

                                            <?php
                                                include 'connection.php';

                                                $id_penghuni = $_GET['id'];
                                                $query = mysqli_query($connect, "SELECT * FROM pemasukan WHERE id_penghuni='$id_penghuni' ");
                                                $data1 = mysqli_fetch_array($query);
                                            ?>
                                            <input type="text" name="id_penghuni" value="<?= $data1['id_penghuni']?>" hidden>

                                            <button class="btn btn-sm btn-primary rounded py-2 px-4 mt-3 mb-3 me-3" style="float: right;">Add</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pembayaran End -->
            
        <!-- Keluhan Start -->
        <section id="keluhan">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Your Complaint</h6>
                        <h1 class="mb-5">Submit Your <span class="text-primary text-uppercase">Complaint</span></h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="p-4 mt-2">
                                    <table class="table table-bordered  border-dark text-dark">
                                      <thead>
                                        <tr class="table-style text-white text-center" style="background-color: #fea116; font-family: Heebo,sans-serif;">
                                          <th scope="col">No.</th>
                                          <th scope="col">Tanggal</th>
                                          <th scope="col">Keluhan</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Proses</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                            include 'connection.php';
                                            $nomor = 1;
                                            $id_penghuni = $_GET['id'];
                                            $query = mysqli_query($connect, "SELECT * FROM keluhan WHERE id_penghuni='$id_penghuni' ");

                                            while ($data = mysqli_fetch_array($query)) { ?>
                                              <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $data["tgl_keluhan"] ?></td>
                                                <td><?= $data["keluhan"] ?></td>
                                                <td><?= $data["status"] ?>
                                                    <a class="text-danger text-decoration-underline" href="penghuni-keluhan-delete.php?id_penghuni=<?= $data['id_penghuni'] ?>&id_keluhan=<?= $data['id_keluhan'] ?>">cancel</a>
                                                </td>
                                                <td><?= $data["proses"] ?></td>

                                                
                                              </tr>
                                                <?php $nomor++; 
                                        }
                                                    if (isset($_GET['message'])) {
                                                        if ($_GET['message'] == "gagalDelete") {
                                                            echo "Delete gagal!";
                                                        } elseif ($_GET['message'] == "berhasilDelete") {
                                                            echo "Delete berhasil";
                                                        } 
                                                    }
                                                ?>
                                      </tbody>
                                    </table>

                                    <section id="complaint">
                                        <form method="POST" action="penghuni-keluhan-process.php">
                                            <div class="mt-5">

                                                <?php  
                                                  include 'connection.php';
                                                  $query = mysqli_query($connect, "SELECT * FROM penghuni WHERE id_penghuni='$id_penghuni' ");
                                                  $id = mysqli_fetch_array($query);
                                                ?>

                                                <input type="hidden" name="id_penghuni" value="<?= $id['id_penghuni'];  ?>">
                                                <label for="exampleFormControlTextarea1" class="form-label">Write your complaint..</label>
                                                <textarea name="keluhan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                <input type="hidden" name="status" value="diajukan">
                                                <textarea name="proses" value="-" hidden></textarea>
                                            </div>
                                            <button class="btn btn-sm btn-primary rounded py-2 px-4 mt-3 mb-3 me-3" style="float: right;">Add</button>
                                        </form>

                                        <?php 
                                            if (isset($_GET['message'])) {
                                                if ($_GET['message'] == "gagal") {
                                                    echo "Input gagal!";
                                                } elseif ($_GET['message'] == "berhasil") {
                                                    echo "Input berhasil";
                                                } 
                                            }
                                        ?>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Keluhan End -->

        <!-- Data Penghuni Start -->
        <section id="datapenghuni">
            <div class="container-xxl py-4">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title text-center text-primary text-uppercase">Our Tenants</h6>
                        <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Tenants</span></h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.3s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="p-4 mt-2">
                                    <table class="table table-bordered  border-dark text-dark">
                                      <thead>
                                        <tr class="table-style text-white text-center" style="background-color: #fea116; font-family: Heebo,sans-serif;">
                                          <th scope="col">No. Kamar</th>
                                          <th scope="col">Nama</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                            include 'connection.php';
                                            $query = mysqli_query($connect, "SELECT * FROM penghuni ORDER BY id_kamar ASC");

                                            while ($data = mysqli_fetch_array($query)) { ?>
                                              <tr>
                                                <td><?= $data["id_kamar"] ?></td>
                                                <td><?= $data["nama_penghuni"] ?></td>
                                              </tr>
                                            <?php 
                                        } ?>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Data Penghuni End -->

        <!-- Footer Start -->
        <div class="container-xl bg-dark text-light fadeIn" data-wow-delay="0.1s">
            <center>
                <div><h1 class="text-primary pt-3">STELLAR HAVEN</h1></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-primary">ABOUT</div>
                        <center>
                        <div class="col-12" style="width: 550px;">Discover the Most Comfortable Place to Rest. We provide a comfortable place to rest in a strategic location close to supermarkets, cafes, laundry, main roads, stationery shops, and many others.<br><br></div>
                        </center>
                        <div class="col-12 text-primary">CONTACT</div>
                        <div>
                            <ul style="inline-block">
                                <i class="fa fa-map-marker-alt me-1"></i>Dirgantara 3 Street, Babarsari&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-phone-alt me-1"></i>+628239109369&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-envelope me-1"></i>stellarhaven@gmail.com&nbsp;&nbsp;&nbsp;
                                <i class="fab fa-instagram me-1"></i>@stellarhaven&nbsp;&nbsp;&nbsp;
                                <i class="fab fa-youtube me-1"></i>Stellar Haven   
                            </ul>
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

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