<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/front/'); ?>img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/front/'); ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/front/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/front/'); ?>css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="index.html" class="navbar-brand">
                    <h2 class="text-white">
                        <?= $konfig->judul_website; ?>
                    </h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
                    </div>
                    <a href="#" class="nav-item nav-link" data-bs-toggle="dropdown">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-item nav-link" data-bs-toggle="dropdown">Kategori</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <?php foreach ($kategori as $kate) { ?>
                                <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="dropdown-item">
                                    <?= $kate['nama_kategori'] ?>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <a href="<?= base_url('auth') ?>" class="btn btn-dark py-2 px-4 d-none d-lg-inline-block">Keluar</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <div class="container-fluid py-5">
        <div id="carouselExampleControls" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $no = 0;
                foreach ($carousel as $aa) : ?>
                    <div class="carousel-item <?= $no !== 0 ? '' : 'active'; ?>">
                        <div style="height: 100vh; width: 100vw; overflow: hidden;">
                            <img src="<?= base_url('assets/upload/carousel/') . $aa['foto']; ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                <?php $no++;
                endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container">
            <div class="row g-4">
                <?php if (isset($contens)) {
                    foreach ($contens as $konten) { ?>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="blog-item border h-100 p-4">
                                <img class="img-fluid mb-4" src="<?= base_url('assets/upload/konten/' . $konten['foto']) ?>" alt="foto">
                                <a href="" class="h5 lh-base d-inline-block"><?= $konten['judul'] ?></a>
                                <div class="d-flex text-black-50 mb-2">
                                    <div class="pe-3">
                                        <small class="fa fa-user me-1"></small>
                                        <small>Author: <?= $konten['username'] ?></small>
                                    </div>
                                    <div class="pe-3">
                                        <small class="fa fa-date me-1"></small>
                                        <small>Tanggal: <?= $konten['tanggal'] ?></small>
                                    </div>
                                </div>
                                <a href="<?= base_url('index_dashboard/artikel/' . $konten['id_konten']) ?>" class="btn btn-outline-primary px-3">Baca selengkapnya</a>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>


    <!-- Newsletter Start -->
    <div class="container-fluid newsletter bg-primary py-5 my-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"><span class="fw-light text-dark">Support terus</span> Saya akan semangat</h1>
                <p class="text-white mb-4">Support terus website saya || Rahmadi</p>
            </div>

        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-white footer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-primary"><?= $konfig->judul_website; ?></h1>
                    </a>
                    <p class="mb-0"><?= $konfig->profil_website; ?></p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="mb-4">Contact Us</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i><?= $konfig->alamat; ?></p>
                    <p><i class="fa fa-phone-alt me-3"></i><?= $konfig->no_wa; ?></p>
                    <p><i class="fa fa-envelope me-3"></i><?= $konfig->email; ?></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-primary me-1" href="<?= $konfig->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="mb-4">Links</h5>
                    <a class="btn btn-link" href="<?= base_url() ?>">Home</a>
                    <?php foreach ($kategori as $kate) { ?>
                        <a class="btn btn-link" href="<?php base_url('home/kategori/' . $kate['id_kategori']) ?>">
                            <?= $kate['nama_kategori'] ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#"></a>semoga sukses.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        terbuat dari <a class="border-bottom" href="https://htmlcodex.com">HTML coodinganku</a> dari template
                        <a href="https://themewagon.com"></a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/front/'); ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/front/'); ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/front/'); ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/front/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/front/'); ?>js/main.js"></script>
</body>

</html>