<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Dawuan | HOME</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="top">
        <div class="container d-flex align-items-center">

            <a href="/" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="/">HOME</a></li>
                    <li class="dropdown"><a href="/profil"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link" href="/sejarah">Sejarah Desa</a></li>
                            <li><a class="nav-link" href="/visimisi">Visi dan Misi</a></li>
                            <li><a class="nav-link" href="/sotk">Struktur Organisasi dan Tata Kerja</a></li>
                            <li><a class="nav-link" href="/kelembagaan">Kelembagaan</a></li>
                            <li><a class="nav-link" href="/potensi">Potensi Desa</a></li>
                            <li><a class="nav-link" href="/asetdesa">Aset Desa</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="/datadesa">Data Desa</a></li>
                    <li class="dropdown"><a href="/informasi"><span>INFORMASI LAYANAN</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/ktp">Pembuatan KTP</a></li>
                            <li><a href="/kk">Pembuatan KK</a></li>
                            <li><a href="/aktekelahiran">Pembuatan Akte Kelahiran</a></li>
                            <li><a href="/aktekematian">Pembuatan Akte Kematian</a></li>
                            <li><a href="/pindahdomisili">Prosedur Pindah Domisili</a></li>
                            <li><a href="/izinkeramaian">Pembuatan Surat Izin Keramaian</a></li>
                            <li><a href="https://pbb.majalengkakab.go.id/" target="_blank">Cek PBB</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="/event">EVENT</a></li>
                    <li><a class="nav-link scrollto" href="/berita">BERITA</a></li>
                    <li><a class="nav-link scrollto" href="/galeri">GALERI</a></li>
                    <li><a class="nav-link scrollto" href="/umkm">POJOK UMKM</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Slide 1 -->
                <div class="carousel-item <?php echo e($index === 0 ? 'active' : ''); ?>"
                    style="background-image: url(image/<?php echo e($slider->image); ?>)">
                    <div class="container">
                        <h2><?php echo e($slider->title); ?></h2>
                        <p><?php echo e($slider->description); ?></p>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Berita Desa Dawuan</h2>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="/image/<?php echo e($news->image); ?>" alt="" class="img-fluid">
                            </div>
                            <br>
                            <div class="text-center">
                                <h4><?php echo e($news->title); ?></h4>
                            </div>
                            <p class="description"><?php echo e($news->description); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Perangkat Desa Dawuan</h2>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $perangkat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="/image/<?php echo e($perangkat->image); ?>" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4><?php echo e($perangkat->title); ?></h4>
                                <span><?php echo e($perangkat->description); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>

            </div>
        </section><!-- End Doctors Section -->


        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Sejarah Desa Dawuan</h3>
                    <p> Sejarah Desa Dawuan di Majalengka berawal dari penemuan kawasan oleh dua pemuda Cirebon, dengan nama berasal dari kata "dawu" (membendung), karena lokasinya membendung anak sungai Cimanuk</p>
                    <a class="cta-btn scrollto" href="/sejarah">Lihat detail</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <?php $__currentLoopData = $sambutan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sambutan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="section-title">
                    <h2>Sambutan Kepala Desa</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="/image/<?php echo e($sambutan->image); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3><?php echo e($sambutan->title); ?></h3>
                        <br>
                        <p>
                            <?php echo e($sambutan->description); ?>

                        </p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Data Desa Dawuan</h2>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon">
                                <img src="/image/<?php echo e($data->image); ?>" alt="" class="img-fluid" width="80">
                            </div>
                            <h4><?php echo e($data->title); ?></h4>
                            <p class="description"><?php echo e($data->description); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Features Section ======= -->

        <section id="visimisi" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Visi, Misi dan Motto</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                        <div class="icon-box mt-5 mt-lg-0">
                            <i class="bx bx-receipt"></i>
                            <h4>Visi</h4>
                            <p>“Terwujudnya Desa Dawuan yang Mandiri, Maju, Sejahtera, dan Berdaya Saing Berlandaskan Kebersamaan dan Potensi Lokal.”</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Misi</h4>
                            <p>Meningkatkan kualitas tata kelola pemerintahan desa yang transparan, akuntabel, dan profesional.Mendorong pembangunan infrastruktur desa yang merata dan berkelanjutan.”</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bx bx-images"></i>
                            <h4>Motto</h4>
                            <p>“Bersama Membangun Dawuan yang Mandiri dan Sejahtera.”</p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2"
                        style='' data-aos=""></div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Informasi Layanan Desa Dawuan</h2>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <img src="/image/<?php echo e($service->image); ?>" alt="" class="img-fluid" width="100">
                        <h4><?php echo e($service->title); ?></h4>
                        <p><?php echo e($service->description); ?></p>
                        <a class="cta-btn scrollto" href="/informasi">Lihat detail</a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>UMKM Desa Dawuan</h2>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $umkm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $umkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <img src="/image/<?php echo e($umkm->image); ?>" alt="" class="img-fluid" width="100">
                        <h4><?php echo e($umkm->title); ?></h4>
                        <p><?php echo e($umkm->description); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Galeri Desa Dawuan</h2>
                </div>

                <div class="gallery-slider swiper">

                    <div class="swiper-wrapper align-items-center">
                        <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide<?php echo e($index === 0 ? 'active' : ''); ?>">
                            <a class="gallery-lightbox" href="image/<?php echo e($galeri->image); ?>"> <img
                                    src="image/<?php echo e($galeri->image); ?>" class="img-fluid" alt=""> </a>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="swiper-pagination">

                    </div>


                </div>

            </div>
        </section><!-- End Gallery Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Dawuan</h3>
                            <p>
                                Kec. Dawuan <br>
                                Kab. Majalengka<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/profil">Profil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/informasi">Informasi Layanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/berita">Berita</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/galeri">Galeri</a></li>
                            </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Layanan Desa</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/kk">Pembuatan KTP</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/ktp">Pembuatan Kartu Keluarga</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/aktekelahiran">Pembuatan Akte
                                    Kelahiran</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/aktekematian">Pembuatan Akte Kematian</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/pindahdomisili">Prosedur Pindah
                                    Domisili</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/izinkeramaian">Pembuatan Surat Izin
                                    Keramaian</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Kelompok 8</span></strong>.
            </div>
            <div class="credits"></div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html><?php /**PATH D:\laragon\www\Kelompok 8 Web Desa\resources\views/home/index.blade.php ENDPATH**/ ?>