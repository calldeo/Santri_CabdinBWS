<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Santri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('ldg/img/team/logobeka.png') }}" rel="icon">
  <link href="{{ asset('ldg/img/team/logobeka.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Montserrat|Poppins" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('ldg/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('ldg/css/style.css') }}" rel="stylesheet">

  <style>
    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: white;
      border: 1px solid #ddd;
      margin-top: 5px;
      padding: 10px;
      border-radius: 5px;
      min-width: 160px;
      z-index: 1000;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .dropdown-menu.show {
      display: block;
    }

    .dropdown-menu li {
      list-style: none;
      margin: 5px 0;
    }

    .dropdown-menu .dropdown-item {
      text-decoration: none;
      color: #333;
    }

    .dropdown-menu .dropdown-item:hover {
      color: #007bff;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="/"><span>Santri</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Welcome To <span>Santri</span></h1>
            <h2>Be a strong wall in the hard times and be a smiling sun in the good times.</h2>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{ asset('ldg/img/Group 41.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z" />
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)" />
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)" />
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff" />
      </g>
    </svg>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a>
          </div>
          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>About</h3>
            <p>
              Si-Beka adalah situs layanan jejaring sosial berbasis website untuk bimbingan konseling sekolah. Guru dapat mencatat data siswa bermasalah dan berprestasi, serta memberikan penanganan dan penghargaan berdasarkan kategori tertentu.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Check The Features</p>
        </div>

        <div class="row justify-content-center text-center" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="#" id="mutasiDropdown" class="dropdown-toggle">Mutasi</a></h3>
              <ul class="dropdown-menu" id="mutasiMenu">
                <li><a class="dropdown-item" href="/mutasi/masuk">Mutasi Masuk</a></li>
                <li><a class="dropdown-item" href="/mutasi/keluar">Mutasi Keluar</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="/login">MGMP</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="/login">Operasional</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Deo Andreas</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Deo Andreas</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('ldg/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('ldg/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('ldg/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('ldg/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('ldg/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('ldg/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('ldg/js/main.js') }}"></script>

  <script>
    document.getElementById("mutasiDropdown").addEventListener("click", function (event) {
      event.preventDefault();
      let dropdownMenu = document.getElementById("mutasiMenu");
      dropdownMenu.classList.toggle("show");
    });

    document.addEventListener("click", function (event) {
      let dropdownMenu = document.getElementById("mutasiMenu");
      let dropdownToggle = document.getElementById("mutasiDropdown");

      if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.remove("show");
      }
    });
  </script>
</body>

</html>
