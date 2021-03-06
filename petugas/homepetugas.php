<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../animate/animate.css" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="homepetugas.php">
                    <img src="../desamas.png" class="icon animate__animated animate__fadeInDown" height="50" width="50">
                </a>
                <a class="navbar-brand js-scroll-trigger animate__animated animate__fadeInDown" href="homepetugas.php">
                    Desa Mas - Ubud
                </a>

                <div class="collapse navbar-collapse animate__animated animate__fadeInDown" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0 nav">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Kontak</a></li>
                        <li class="nav-item bg"><a class="nav-link js-scroll-trigger text-uppercase" href="petugas.php"><?= $_SESSION['username'];?></a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <img src="../desamas.png" align="center"> <br><br>
                        <h1 class="text-uppercase text-white font-weight-bold animate__animated animate__fadeInDown">Selamat Datang!</h1>
                        <h2 class="text-uppercase text-white font-weight-bold animate__animated animate__slideInLeft">Web Pelaporan Pengaduan Masyarakat <br> Desa Mas - Ubud</h2>
                        <hr class="divider my-4"/>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">M A S - Masyarakat Aman Sejahtera</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Ketahui lebih lanjut !</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0 animate__animated animate__fadeInUp">Ayo laporkan pengaduan anda !</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Pengaduan Pelaporan Masyarakat berbasis web adlah Sebuah wadah bagi masyarakat untuk memberikan pengaduan, masukan, kritikan, saran kepada aparat Desa Mas - Ubud. Silahkan laporkan apapun tentang masukan, krikitan, saran, keluhan anda dengan bahasa yang baik, sopan dan santun. Kami akan melayani dengan setulus hati.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#">Mulai !</a>
                    </div>
                </div>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f4623a" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,224C480,224,549,128,617,80C685.7,32,754,32,823,42.7C891.4,53,960,75,1029,101.3C1097.1,128,1166,160,1234,165.3C1302.9,171,1371,149,1406,138.7L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Layanan kami</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-user text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Daftar/Login</h3>
                            <p class="text-muted mb-0">Silahkan membuat akun terlebih dahulu dan login.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Tulis Laporan</h3>
                            <p class="text-muted mb-0">Tuliskan laporan anda pada menu tulis laporan pada dashboard.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Verifikasi/Tanggapan</h3>
                            <p class="text-muted mb-0">Silahkan tunggu untuk mendapatkan tanggapan.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Cek Tanggapan</h3>
                            <p class="text-muted mb-0">Silahkan cek tanggapan dari laporan yang sudah anda kirim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../1.jpeg">
                            <img class="img-fluid" src="../1.jpeg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Desa Mas</div>
                                <div class="project-name">Kegiatan bersih-bersih bersama Trash Hero.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../2.jpg">
                            <img class="img-fluid" src="../2.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Desa Mas</div>
                                <div class="project-name">Kegiatan membersihkan sungai.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../3.jpg">
                            <img class="img-fluid" src="../3.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Desa Mas</div>
                                <div class="project-name">Rapat di balai desa.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../4.jpg">
                            <img class="img-fluid" src="../4.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Desa Mas</div>
                                <div class="project-name">Kerja sama persahabatan Desa Mas-Misato Cho.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../5.jpg">
                            <img class="img-fluid" src="../5.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Desa Mas</div>
                                <div class="project-name">Halaman depan kantor Desa Mas.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../6.jpg">
                            <img class="img-fluid" src="../6.jpg" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Desa Mas</div>
                                <div class="project-name">Kerajinan topeng dari para maestro Desa Mas.</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Saatnya Anda Berkontribusi Membangun Desa!</h2>
                <a class="btn btn-light btn-xl" href="#">Buat Laporan Sekarang !</a>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#343a40" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,224C384,213,480,139,576,133.3C672,128,768,192,864,181.3C960,171,1056,85,1152,58.7C1248,32,1344,64,1392,80L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Hubungi Kami</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Ada kendala dalam pengaplikasian pengaduan masyarakat berbasis web? Hubungi kami melalui kontak dibawah ini !</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-home fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <div>Jalan Raya Mas Ubud</div>
                    </div>                    
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="desamas@gmail.com">desamas@gmail.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright &copy; Gusmasdev2021</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
