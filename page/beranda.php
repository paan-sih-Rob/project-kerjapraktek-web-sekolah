<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- bosstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font owsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>beranda</title>
    <!--css-->
    <link rel="stylesheet" href="./css/beranda.css">
    
  </head>

<body style="font-family: 'Poppins', sans-serif;">
  <div class="container-fluid bg-success py-5 bg-header">
    <div class="row p-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn fw-bold">Beranda</h1>
            <a href="" class="h5 text-white fw-semibold text-decoration-none">Profil</a>
            <i class="far fa-circle text-white px-2"></i>
        </div>
    </div>
</div>
  <main>
    <header>
        <!--Main layout-->
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./gambar/acara-banner-1.jpg" alt="acara-banner-1" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" focusable="false">
              <div class="container">
                <div class="carousel-caption text-center">
                  <h1 class="position-absolute bottom-100 start-50 translate-middle mt-1">Baitul Qur'an Mardhotillah</h1>
                  <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                  <div class="d-grid gap-2">
                    <p><a class="btn btn-lg btn-success" href="#">lihat Profile</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./gambar/acara-2-1.jpg" alt="" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
              <div class="container">
                <div class="carousel-caption">
                  <h1 class="position-absolute bottom-100 start-50 translate-middle">Kegiatan</h1>
                  <p>Some representative placeholder content for the second slide of the carousel.</p>
                  <div class="d-grid gap-2">
                    <p><a class="btn btn-lg btn-success" href="#">Lihat Kegiatan</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./gambar/acara-3.jpg" alt="foto-anak" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
              <div class="container">
                <div class="carousel-caption text-center">
                  <h1 class="position-absolute bottom-100 start-50 translate-middle mt-1">Galery</h1>
                  <p>Some representative placeholder content for the third slide of this carousel.</p>
                  <div class="d-grid gap-2">
                    <p><a class="btn btn-lg btn-success" href="#">Lihat Galery</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
         <!--Section: Content-->
         <section class="container-sm bg-success border-tentang mx-left-5 p-3">
          <div class="row featurette">
            <div class="col-md-7 text-white">
              <h2 class="featurette-heading fw-normal lh-1">Apa itu MDTA ?</h2>
              <p>Madrasah Diniyah Takmiliyah Awaliyah, yang biasa disingkat MDTA adalah satuan pendidikan keagamaan Islam non formal yang menyelenggarakan Pendidikan Agama Islam sebagai pelengkap pengajaran pendidikan</p>
              
            </div>
            <div class="col-md-5 py-4 px-2">
              <img src="./gambar/logo-sekolah.png" class="img-fluid" width="300" height="300" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"/>
            </div>
          </div>
         </section>
         <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="container">
          <h4 class="mb-5"><strong>Berita Terbaru!</strong></h4>

          <div class="album py-5 bg-body-tertiary">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                
                <div class="col">
                  <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="./gambar/berita-1.jpg" width="100%" height="100%" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" class="fw-bold">
                      Pawai Obor menyambut Tahun Baru Islam</text></img>
                    <div class="card-body">
                      <p class="card-text text-start">Dalam memperingati hari kemerdekaan indonesia, Baitul Quran Mardhatillah setiap tahun mengadakan Lomba 17 Agustus untuk memeriahkan kemerdekaan Indonesia dan lomba ini terdiri untuk kelas TKQ,TPQ dan MDTA.  Alhamdulillah para santriwan/santriwati sangat antusias sekali mengikuti perlombaan ini.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">Baca Selengkapnya</button>
                        </div>
                        <small class="text-body-secondary">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="./gambar/berita-2.jpg" width="100%" height="100%" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" class="fw-bold">
                      Lomba 17 Agustus 2023</text></img>
                    <div class="card-body">
                      <p class="card-text text-start"> Dalam rangka menyambut Tahun Baru Islam 1 Muharam 1445 H, Baitul Qur'an Mardhatillah bersama santri MDTA, walisantri dan warga sekitar pondok miri menggelar pawai obor pada malam tahun baru islam, Selasa (18/07/2023)</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">Baca Selengkapnya</button>
                        </div>
                        <small class="text-body-secondary">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="./gambar/berita-3.jpg" width="100%" height="100%" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" class="fw-bold">
                      Santri BQM Bermain Hadroh</text></img>
                    <div class="card-body">
                      <p class="card-text text-start">Santri BQM bermain hadroh di masjid Al Ittihad Permata Pamulang dalam merayakan kelahiran Rasulullah SAW.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">Baca Selengkapnya</button>
                        </div>
                        <small class="text-body-secondary">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
        <!--Section: Content-->
        
<footer class="text-center text-body-secondary">
      <hr class="m-0" />

      <div class="text-center py-4 align-items-center">
        <p>Baitul Qur'an Mardhotillah</p>
        <a
          href="#"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-youtube"></i>
        </a>
        <a
          href="#"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-facebook-f"></i>
        </a>
        <a
          href="#"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-instagram"></i>
        </a>
      </div>

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        follows
        <a class="text-dark" href="https://mdbootstrap.com/">web-site</a>
      </div>
      <!-- Copyright -->
    <!--Footer-->
</footer>
</main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>