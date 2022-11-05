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
            <a class="getstarted scrollto" href="/login">LOGIN</a>
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
            <h1>Selamat Datang di <?= WEBTITLE ?></h1>
            <h2>
              <?php
              $lower = strtolower(WEBNAME);
              echo ucwords($lower);
              ?>
            </h2>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="/landing/img/hero-img.png" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="tentang" class="features">
      <div class="container">
        <div class="section-title">
          <h2>Bantuan PKH</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur
            ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
            quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
            Quia fugiat sit in iste officiis commodi quidem hic quas.
          </p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>
                    Consequuntur sunt aut quasi enim aliquam quae harum
                    pariatur laboris nisi ut aliquip
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>
                    Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                    maiores omnis facere
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>
                    Expedita veritatis consequuntur nihil tempore laudantium
                    vitae denat pacta
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-atom"></i>
                  <h4>Molestiae dolor</h4>
                  <p>
                    Et fuga et deserunt et enim. Dolorem architecto ratione
                    tensa raptor marte
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-id-card"></i>
                  <h4>Explicabo consectetur</h4>
                  <p>
                    Est autem dicta beatae suscipit. Sint veritatis et sit
                    quasi ab aut inventore
                  </p>
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