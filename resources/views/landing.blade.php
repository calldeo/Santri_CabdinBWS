<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Santri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('ldg/img/team/logobeka.png')}}" rel="icon">
  <link href="{{asset('ldg/img/team/logobeka.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('ldg/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('ldg/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('ldg/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('ldg/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('ldg/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('ldg/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('ldg/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('ldg/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/"><span>Santri</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="ldg/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul> --}}
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Welcome To <span>Santri</span></h1>
            <h2>Be a strong wall in the hard times and be a smiling sun in the good times.</h2>
            <div class="text-center text-lg-start">
              {{-- <a href="/login" class="btn-get-started scrollto">Login</a> --}}
              {{-- <a href="" class="btn-get-started scrollto">Get Started To Mobile</a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{asset('ldg/img/Group 41.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>About</h3>
            <p>Si-Beka situs layanan jejaring sosial berbasis website di mana para user bisa memasukkan data-data yang di butuhkan dalam bimbingan konseling sekolah dan juga user bisa mengoperasikan terkait hal yang di butuhkan dalam Bimbingan konseling sekolah. Si-Beka menyimpan data-data terkait siswa yang bermasalah dan berprestasi. Guru bisa memberikan penangan pada siswa yang bermasalh atau melakukan pelanggaran di nilai dari kategorinya dan juga guru bisa memberikan penghargaan kepada siswa yang berprestasi di nilai dari segi kategorinya juga.</p>

            {{-- <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div> --}}

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Check The Features</p>
        </div>

        <div class="row" data-aos="fade-left">

          
          
   <div class="container">
  <div class="row justify-content-center text-center">
   <div class="col-lg-3 col-md-4">
  <div class="icon-box text-center" data-aos="zoom-in" data-aos-delay="50">
   <i class="ri-store-line" style="color: #ffbb2c;"></i>

    <!-- Link sebagai tombol dropdown -->
    <h3>
      <a href="#" id="mutasiDropdown" class="dropdown-toggle">Mutasi</a>
    </h3>

    <!-- Dropdown Menu -->
    <ul class="dropdown-menu text-center" id="mutasiMenu">
      <li><a class="dropdown-item" href="/mutasi/pegawai">Mutasi Masuk</a></li>
      <li><a class="dropdown-item" href="/mutasi/siswa">Mutasi Keluar</a></li>
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


         
       
         
        
          
          
        </div>

      </div>
    </section><!-- End Features Section -->



          

        </div>

      </div>
    </section> 
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

  

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <footer id="footer">
   

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Deo Andreas</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
     
        Designed by <a href="">Deo Andreas</a>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->


  <script>
  document.getElementById("mutasiDropdown").addEventListener("click", function(event) {
      event.preventDefault();
      let dropdownMenu = document.getElementById("mutasiMenu");
      dropdownMenu.classList.toggle("show");
  });

  // Menutup dropdown jika klik di luar
  document.addEventListener("click", function(event) {
      let dropdownMenu = document.getElementById("mutasiMenu");
      let dropdownToggle = document.getElementById("mutasiDropdown");

      if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
          dropdownMenu.classList.remove("show");
      }
  });
</script>
  <script src="{{asset('ldg/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('ldg/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('ldg/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('ldg/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('ldg/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('ldg/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('ldg/js/main.js')}}"></script>

</body>

</html>