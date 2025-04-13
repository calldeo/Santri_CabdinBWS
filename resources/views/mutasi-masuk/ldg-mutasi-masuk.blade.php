<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Santri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ asset('ldg/img/team/logobeka.png') }}" rel="icon">
  <link href="{{ asset('ldg/img/team/logobeka.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Montserrat|Poppins" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('ldg/css/style.css') }}" rel="stylesheet">
  
  <!-- SweetAlert2 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.min.js"></script>

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

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="/"><span>Santri</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <section id="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Mutasi Masuk</h1>
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
      <g class="wave1"><use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)" /></g>
      <g class="wave2"><use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)" /></g>
      <g class="wave3"><use xlink:href="#wave-path" x="50" y="9" fill="#fff" /></g>
    </svg>
  </section>

  <main id="main">
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
              <h3><a href="/MGMP">MGMP</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="/ijin-operasional">Operasional</a></h3>
            </div>
          </div>
        </div>
  @if(session('success'))
        <script>
          document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
              icon: 'success',
              title: 'Berhasil!',
              text: "{{ session('success') }}",
              footer: '<span style="font-size: 14px;">Simpan atau screenshot ID Mutasi ini untuk memudahkan pencarian di masa mendatang.</span>',
              confirmButtonText: 'OK'
            });
          });
        </script>
        @endif

        @if(session('update_success'))
        <script>
          document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
              icon: 'warning',
              title: 'Perubahan Tersimpan!',
              text: "{{ session('update_success') }}",
              footer: '<span style="font-size: 16px;">Simpan atau screenshot ID Mutasi ini untuk memudahkan pencarian di masa mendatang.</span>',
              confirmButtonText: 'OK'
            });
          });
        </script>
        @endif

        <div class="container mt-4">
          <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="input-group w-50">
              <input id="searchInput" type="text" class="form-control" placeholder="Cari ID Mutasi...">
              <span class="input-group-text bg-primary text-white">
                <i class="bi bi-search"></i>
              </span>
            </div>

            <a href="/add/mutasi/masuk" class="btn btn-success" title="Tambah Data">
              <i class="fa fa-plus"></i> Tambah Mutasi
            </a>
          </div>
        </div>

        <div class="container mt-2" id="tabelContainer" style="display: none;">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="mutasiTable">
              <thead class="thead-dark">
                <tr>
                  <th><strong>No Mutasi</strong></th>
                  <th><strong>File SKK</strong></th>
                  <th><strong>File NISN</strong></th>
                  <th><strong>File Raport</strong></th>
                  <th><strong>File SKM</strong></th>
                  <th><strong>Status</strong></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mutasi as $m)
                <tr>
                  <td>{{ $m->id_mut_masuk }}</td>
                  <td>
                    @if($m->file_skk)
                    <a href="{{ asset('storage/' . $m->file_skk) }}" target="_blank">Lihat SKK</a>
                    @else
                    <span class="text-danger">Tidak ada file</span>
                    @endif
                  </td>
                  <td>
                    @if($m->file_nisn)
                    <a href="{{ asset('storage/' . $m->file_nisn) }}" target="_blank">Lihat NISN</a>
                    @else
                    <span class="text-danger">Tidak ada file</span>
                    @endif
                  </td>
                  <td>
                    @if($m->file_raport)
                    <a href="{{ asset('storage/' . $m->file_raport) }}" target="_blank">Lihat Raport</a>
                    @else
                    <span class="text-danger">Tidak ada file</span>
                    @endif
                  </td>
                  <td>
                    @if($m->file_skm)
                    <a href="{{ asset('storage/' . $m->file_skm) }}" target="_blank">Lihat SKM</a>
                    @else
                    <span class="text-danger">Tidak ada file</span>
                    @endif
                  </td>
                  <td>
                    <span class="badge 
                      {{ $m->status == 'proses' ? 'badge-warning' : ($m->status == 'gagal' ? 'badge-danger' : 'badge-success') }} text-dark fs-6">
                      {{ $m->status }}
                    </span>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </section>
  </main>

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="{{ asset('ldg/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('ldg/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('ldg/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('ldg/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('ldg/vendor/swiper/swiper-bundle.min.js') }}"></script>
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

 <script>
  document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById('searchInput');
    const tableRows = document.querySelectorAll('#mutasiTable tbody tr');
    const tabelContainer = document.getElementById('tabelContainer');

    searchInput.addEventListener('input', function () {
      const searchValue = this.value.toLowerCase();
      let found = false;

      tableRows.forEach(row => {
        const idMutasi = row.cells[0].textContent.toLowerCase();
        if (idMutasi.includes(searchValue) && searchValue !== '') {
          row.style.display = "";
          found = true;
        } else {
          row.style.display = "none";
        }
      });

      if (searchValue !== '' && found) {
        tabelContainer.style.display = "block";
      } else {
        tabelContainer.style.display = "none";
      }
    });
  });
</script>
</body>

</html>
