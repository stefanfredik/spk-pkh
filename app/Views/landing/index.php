<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title><?= WEBTITLE ?></title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css" />
  <link href="/landing/css/style.css" rel="stylesheet" />
</head>

<body>
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="index.html"><?= WEBTITLE ?></a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
          <li>
            <?php if (!logged_in()) : ?>
              <a class="getstarted scrollto" href="/login">LOGIN</a>
            <?php else : ?>
              <a class="getstarted scrollto" href="/dashboard">Dashboard</a>
            <?php endif; ?>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <section id="home" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1 class="fw-bold">Selamat Datang di <?= WEBTITLE ?></h1>
            <h2>
              <?php
              $lower = strtolower(WEBNAME);
              echo ucwords($lower);
              ?>
            </h2>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="/assets/img/pkh.png" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="tentang" class="features">
      <div class="container">
        <div class="section-title">
          <h2>Tentang PKH</h2>
          <h5>Apa itu PKH?</h5>
          <p>
            PKH adalah program pemberian uang tunai kepada Keluarga Penerima Manfaat (KPM) berdasarkan persyaratan dan ketentuan yang telah ditetapkan dengan melaksanakan kewajibannya.
          </p>
          <br>
          <h5>Siapa peserta PKH?</h5>
          <p>Peserta PKH adalah Ibu Rumah Tangga dari keluarga yang terpilih melalui mekanisme pemilihan oleh BPS sesuai kriteria yang ditetapkan (Ibu Hamil/Nifas, memiliki bayi s.d. Usia prasekolah dan anak usia sekolah dasar – SMP).</p>
        </div>

        <hr>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-12 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>Manfaat</h4>
                  <p>Merubah perilaku keluarga sangat miskin untuk memberikan perhatian yang besar kepada pendidikan dan kesehatan anaknya</p>
                  <p>Untuk jangka pendek memberikan income effect kepada rumah tangga miskin melalui pengurangan beban pengeluaran rumah tangga sangat miskin</p>
                  <p>Untuk jangka panjang dapat memutus ratai kemiskinan antar generasi melalui: Peningkatan kualitas kesehata/nutrisi, pendidikan dan kapasitas pendapatan anak dimasa depan (price effect anak keluarga sangat miskin).Memberikan kepastian kepada si anak akan masa depannya (insurance effect)</p>
                  <p>Mengurangi pekerja anak</p>
                  <p>Mempercepat pencapaian MDGs (melalui peningkatan akses pendidikan, peningkatan kesehatan ibu hamil, pengurangan kematian balita, dan peningkatan kesetaraan jender)</p>
                </div>
                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-app-indicator"></i>

                  <h4>Tujuan</h4>
                  <p>Meningkatkan kemampuan Keluarga Penerima Manfaat (KPM) untuk mengakses/memanfaatkan pelayanan pendidikan dan kesehatan </p>
                  <p>Meningkatkan status kesehatan dan gizi ibu hamil/nifas dan anak dibawah 6 tahun dari KPM </p>
                  <p>Meningkatkan angka partispasi pendidikan anak – anak (usia wajib belajar SD/SMP) KPM </p>
                  <p>>Meningkatkan kondisi sosial ekonomi KPM </p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="/landing/img/features.svg" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        <strong><span><?= WEBTITLE ?></span></strong>
      </div>
      <div class="credits">
        &copy; Copyright 2022
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
  <script src="/landing/js/main.js"></script>
</body>

</html>