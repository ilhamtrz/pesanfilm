<?php
include 'process/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PesanFilm</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pesanfilm-icon.png" rel="icon">
  <link href="assets/img/pesanfilm-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>PesanFilm<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>


          <li><a href="index.php">Home</a></li>

          <li><a class="nav-link scrollto" href="index.php#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="index.php#testimonials">Testimoni</a></li>
          <li><a class="nav-link scrollto" href="index.php#pricing">Harga</a></li>
          <li><a class="nav-link scrollto" href="index.php#daftarFilm">Daftar Film</a></li>
          <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="admin/index.php">Home</a></li>
              <li class="dropdown"><a href="admin/index.php"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="admin/tampil_data.php">Tampil Pesanan</a></li>
                  <li><a href="admin/tambah.php">Tambah Pesanan</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="tambah_user.php">Pesan Sekarang</a>

    </div>
  </header><!-- End Header -->

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/pesanfilm-logo.png" class="img-fluid animated">
      <h2>Welcome to <span>PesanFilm</span></h2>
      <p>Your one-stop destination for movie booking</p>
    </div>
  </section>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Rekomendasi Film</a></h4>
              <p>Dapatkan rekomendasi film yang dipersonalisasi berdasarkan preferensi dan riwayat penontonanmu.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Nikmati Film Favoritmu</a></h4>
              <p>Tonton film favoritmu secara online, tanpa iklan atau gangguan apapun.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Dapatkan Rilisan Terbaru</a></h4>
              <p>Tetap up-to-date dengan rilisan film terbaru dan tonton film-film tersebut secepat mungkin setelah dirilis.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Pesan Tiket dengan Mudah</a></h4>
              <p>Mudahnya pesan tiket film di bioskop terdekat tanpa perlu mengantri dan tanpa biaya tambahan.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Bagian Layanan Unggulan -->


    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Pesan Film Sesuai Keinginanmu dengan Mudah</h3>
            <p>Anda dapat memesan film sendiri melalui formulir pemesanan kami atau menghubungi admin kami untuk memesan film.</p>
            <a class="cta-btn align-self-start" href="tambah_user.php">Pesan Sekarang</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/cta.jpg" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Layanan Kami</h2>
          <p>Nikmati berbagai layanan menarik dari aplikasi kami untuk memenuhi kebutuhan hiburan Anda.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Rekomendasi Film</h3>
                </a>
                <p>Dapatkan rekomendasi film yang dipersonalisasi berdasarkan preferensi dan riwayat penontonanmu.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Nikmati Film Favoritmu</h3>
                </a>
                <p>Tonton film favoritmu secara online, tanpa iklan atau gangguan apapun.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Dapatkan Rilisan Terbaru</h3>
                </a>
                <p>Tetap up-to-date dengan rilisan film terbaru dan tonton film-film tersebut secepat mungkin setelah dirilis.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Pesan Tiket dengan Mudah</h3>
                </a>
                <p>Mudahnya pesan tiket film di bioskop terdekat tanpa perlu mengantri dan tanpa biaya tambahan.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-5.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Beragam Genre Film</h3>
                </a>
                <p>Temukan film-film terbaik dari beragam genre, mulai dari aksi, petualangan, komedi, drama, hingga animasi.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-6.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-chat-square-text"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Dukungan Pelanggan 24/7</h3>
                </a>
                <p>Dapatkan dukungan pelanggan 24/7 dari tim kami untuk membantu kamu dengan segala masalah yang kamu alami pada saat memesan tiket film.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/walter-white.jpg" class="testimonial-img" alt="">
                <h3>Walter White</h3>
                <h4>Guru Kimia</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Saya sangat puas dengan layanan pemesanan film ini. Sangat mudah dan cepat, tidak perlu mengantri lama-lama di bioskop. Terima kasih banyak!
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/jesse-pinkman.jpg" class="testimonial-img" alt="">
                <h3>Jesse Pinkman</h3>
                <h4>Partner Pemasaran</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Aplikasi ini sangat membantu saya dalam mencari jadwal film yang ingin saya tonton. Dan yang terbaik, saya bisa membeli tiket secara online tanpa harus mengantre terlalu lama!
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/saul-goodman.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Pengacara</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Aplikasi pemesanan film ini sangat buruk, saya kesulitan dalam memesan tiket dan tampilan aplikasinya tidak user-friendly. Saya sangat kecewa dengan layanan yang diberikan.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/gustavo-fring.jpg" class="testimonial-img" alt="">
                <h3>Gustavo Fring</h3>
                <h4>Pengusaha Restoran Cepat Saji</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Aplikasi ini sangat membantu saya dalam memesan tiket film secara online. Saya tidak perlu lagi mengantri di bioskop dan bisa langsung memilih kursi yang saya inginkan. Sangat efisien!
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/kim-wexler.jpg" class="testimonial-img" alt="">
                <h3>Kim Wexler</h3>
                <h4>Pengacara</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Aplikasi pemesanan tiket film ini sangat user-friendly dan mudah digunakan. Saya dapat melihat jadwal film dan memilih tempat duduk dengan mudah. Pelayanan customer service juga sangat baik dan responsif.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Harga</h2>
          <p>Kami menjual tiket tanpa biaya adminstrasi</p>
        </div>

        <div class="row gy-4">

          <center>
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="pricing-item featured">

                <div class="pricing-header">
                  <h3>Harga Tiket</h3>
                  <h4><sup>Rp. </sup>25000<span> / tiket</span></h4>
                </div>

                <ul>
                  <li><i class="bi bi-dot"></i> <span>Transaksi cepat dan mudah</span></li>
                  <li><i class="bi bi-dot"></i> <span>Dapat melakukan pembatalan (Sebelum jadwal film ditayangkan)</span></li>
                  <li><i class="bi bi-dot"></i> <span>Menyediakan berbagai pilihan film terbaru</spa>
                  </li>
                  <li><i class="bi bi-dot"></i> <span>Pelayanan pelanggan 24/7</span>
                  </li>
                </ul>

                <div class="text-center mt-auto">
                  <a href="tambah_user.php" class="buy-btn">Pesan Sekarang</a>
                </div>

              </div>
            </div><!-- End Pricing Item -->
          </center>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Pertanyaan yang sering ditanyakan.
              </p>
            </div>

            <div class="accordion accordion-flush px-xl-5" id="faqlist">

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa itu aplikasi PesanFilm?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Aplikasi PesanFilm adalah aplikasi web yang digunakan untuk memesan tiket film secara online. Pengguna dapat memilih film yang ingin ditonton, jumlah tiket yang dipesan, kemudian melakukan pembayaran secara online.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Bagaimana cara memesan tiket film di aplikasi ini?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Untuk memesan tiket film di aplikasi ini, pengguna dapat mengikuti langkah-langkah berikut:
                    <ol>
                      <li>Klik Tombol Pesan Sekarang</li>
                      <li>Isi Identitas diri</li>
                      <li>Pilih Film yang ditonton</li>
                      <li>Isikan jumlah tiket yang dipesan</li>
                      <li>Jangan lupa cek jika data yang diisikan sudah benar</li>
                      <li>Klik tombol konfirmasi pesanan</li>
                    </ol>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apakah saya dapat megganti identitas diri, jumlah tiket yang dipesan dan film yang dipesan?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Ya, pengguna dapat mengganti identitas diri, jumlah tiket yang dipesan ataupun film yang dipesan dengan cara menghubungi admin kami, perlu diperhatikan bahwa pengguna dapat melakukan hal ini 24 jam sebelum jadwal film tayang.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apakah saya dapat membatalkan pesanan saya?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Ya, anda dapat membatalkan pesanan anda dengan cara menghubungi admin kami sebelum jadwal tayang film.
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="daftarFilm" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-header">
          <h2>Daftar Film</h2>
          <p>Berikut adalah daftar film yang dapat dipesan</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-action">Action</li>
            <li data-filter=".filter-horror">Horror</li>
            <li data-filter=".filter-romance">Romance</li>
            <li data-filter=".filter-scifi">Sci-fi</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row g-0 portfolio-container">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-action">
              <img src="assets/img/film/black-adam.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Black Adam</h4>
                <a href="assets/img/film/black-adam.jpg" title="Black Adam" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-horror">
              <img src="assets/img/film/devil-inside.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Devil Inside</h4>
                <a href="assets/img/film/devil-inside.jpg" title="Devil Inside" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-romance">
              <img src="assets/img/film/her.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Her</h4>
                <a href="assets/img/film/her.jpg" title="Her" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-scifi">
              <img src="assets/img/film/dune.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Dune</h4>
                <a href="assets/img/film/dune.jpg" title="Dune" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-action">
              <img src="assets/img/film/morbius.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Morbius</h4>
                <a href="assets/img/film/morbius.jpg" title="Morbius" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-horror">
              <img src="assets/img/film/smile.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Smile</h4>
                <a href="assets/img/film/smile.jpg" title="Smile" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-romance">
              <img src="assets/img/film/your-name.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Your Name</h4>
                <a href="assets/img/film/your-name.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-scifi">
              <img src="assets/img/film/ready-player-one.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ready Player One</h4>
                <a href="assets/img/film/ready-player-one.jpg" title="Ready Player One" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tim Kami</h2>
          <p>Anggota yang berkontribusi dalam pembuatan aplikasi ini.</p>
        </div>

        <div class="row gy-5">

          <center>
            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/team/ilham.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <div class="social">
                    <a href="https://www.facebook.com/ilhamtrzk/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/ilham-triza-kurniawan-249b92172/"><i class="bi bi-linkedin"></i></a>
                  </div>
                  <h4>Ilham Triza Kurniawan</h4>
                  <span>Solo Developer</span>
                </div>
              </div>
            </div><!-- End Team Member -->
          </center>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </div>

        <div class="row">

          <?php
          $data = mysqli_query($koneksi, "SELECT * FROM artikel LIMIT 3");
          while ($d = mysqli_fetch_array($data)) { ?>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
              <div class="post-box">
                <div class="post-img"><img src="assets/img/blog/<?php echo $d['image'] ?>" class="img-fluid" alt=""></div>
                <div class="meta">
                  <span class="post-author"><?php echo $d['penulis'] ?></span>
                </div>
                <h3 class="post-title"><?php echo $d['judul'] ?></h3>
                <p><?php
                    $body = $d['body'];
                    echo substr($body, 0, 70); ?>....</p>
                <a href="blog-details.php?id=<?php echo $d['id'] ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Hubungi Kami</h2>
          <p>Jika anda merasa kesulitan atau ingin menyampaikan sesuatu mengenai aplikasi kami, anda dapat menghubungi kami</p>
        </div>

      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="info">
              <h3>Get in touch</h3>
              <p>Anda dapat menghubungi kami di:</p>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasi</h4>
                  <p>Jl. Bukit, Kota Semarang, Jawa Tengah.</p>
                </div>
              </div><!-- End Info Item -->
              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>ilhamtriza@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telp/WA:</h4>
                  <p>+62 855 8754 9999</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>
          <!-- End Contact Form -->
        </div>
      </div>

      <!-- End Contact Form -->

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>PesanFilm.</h3>
              <p>
                Jl. Bukit, Kota Semarang, <br>
                Jawa Tengah.<br><br>
                <strong>Phone:</strong> +62 855 8754 9999<br>
                <strong>Email:</strong> ilhamtriza@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="blog.php">Blog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="admin/index.php">Admin Page</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>