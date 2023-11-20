<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?= $judul_halaman ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/foody/') ?>img/logo2.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/foody/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/foody/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/foody/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/foody/') ?>css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-phone me-2"></i>
                    <?= $konfig->no_wa; ?>
                </small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>
                    <?= $konfig->email; ?>
                </small>
            </div>

        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a class="navbar-brand" href="<?= base_url('admin/auth') ?>"><img
                    src="<?= base_url('assets/trator/') ?>images/ajibfix.png" width="300" height="75"></a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?= base_url('home/') ?>" class="nav-item nav-link active">Home</a>
                    <a href="<?= base_url('home/about') ?>" class="nav-item nav-link">About Us</a>
                    <a href="<?= base_url('home/produk') ?>" class="nav-item nav-link">Mobil</a>
                    <a href="<?= base_url('home/informasi') ?>" class="nav-item nav-link">Informasi</a>
                    <a href="<?= base_url('home/galeri') ?>" class="nav-item nav-link">Galeri</a>
                    <a href="<?= base_url('home/contact/') ?>" class="nav-item nav-link">Contact Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="<?= base_url('admin/auth') ?>">
                        <small class="fa fa-user text-body"></small>
                    </a>  
                </div>
            </div>
    </div>
    </nav>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Navbar End -->


    <!-- Page Header Start -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Contact Us</h1>
                <p>Address Us from AjibTrans</p>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <div class="row g-5 justify-content-center">
        <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                <h5 class="text-white">Call Us</h5>
                <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>
                    <?= $konfig->no_wa; ?>
                </p>
                <h5 class="text-white">Email Us</h5>
                <p class="mb-5"><i class="fa fa-envelope me-3"></i>
                    <?= $konfig->email; ?>
                </p>
                <h5 class="text-white">Office Address</h5>
                <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>
                    <?= $konfig->alamat; ?>
                </p>
                <h5 class="text-white">Follow Us</h5>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href="<?= $konfig->instagram; ?>"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href="<?= $konfig->facebook; ?>"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-1" href="<?= $konfig->tiktok; ?>"><svg
                            xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path
                                d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                        </svg></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <center>
        <!-- Google Map Start -->
        <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
        <iframe class="w-100" style="height: 450px;"
            src="https://maps.google.com/maps?width=1120&amp;height=450&amp;hl=en&amp;q=ajib trans garage&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- Google Map End -->
    </center>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="fw-bold text-light mb-4">
                        <?= $konfig->judul_website; ?>
                    </h3>
                    <p>
                        <?= $konfig->profile_website; ?>
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1"
                            href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1"
                            href="<?= $konfig->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1"
                            href="<?= $konfig->tiktok; ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #ffffff
                                    }
                                </style>
                                <path
                                    d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                            </svg></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                                class="fab fa-youtube"></i></a>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">About Us</h3>
                    <p><i class="fa fa-map-marker-alt me-3"></i>
                        <?= $konfig->alamat; ?>
                    </p>
                    <p><i class="fa fa-phone-alt me-3"></i>
                        <?= $konfig->no_wa; ?>
                    </p>
                    <p><i class="fa fa-envelope me-3"></i>
                        <?= $konfig->email; ?>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Melayani</h3>
                    <?php foreach ($kategori as $kate) { ?>
                        <a class="btn btn-link" href=""></i>
                            <?= $kate['nama_kategori'] ?>
                        </a>
                    <?php } ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Jam Buka</h3>
                    <p>
                        <?= $konfig->waktu_buka ?>
                    </p>

                </div>

            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">AjibTrans</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/foody/') ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/foody/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/foody/') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/foody/') ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/foody/') ?>js/main.js"></script>
</body>

</html>