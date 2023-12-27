
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="./css/fontsgoogleapis.css">
    <!-- bosstrap 4 -->
    <link rel="stylesheet" href="./css/bootstrap4.min.css">
    <!-- font owsome -->
    <link rel="stylesheet" href="./css/fontsowesome.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./css/fontsgoogleapis-rubik.css">

    <!-- css -->
    <link rel="stylesheet" href="./css/navbar.css">
    <title>
    <?php
      $p = $_GET['page'];
      if ($p == 'beranda') {
        echo 'Halaman beranda';
      } elseif ($p == 'profil') {
        echo 'Halaman profil';
      } elseif ($p == 'direktori') {
        echo 'Halaman direktori';
      } elseif ($p == 'berita') {
        echo 'Halaman berita';
      } elseif ($p == 'galery') {
        echo 'Halaman akademik';
      } elseif ($p == 'hubungi') {
        echo 'Halaman hubungi';
      }
    ?>
    </title>
  </head>
  <body style="font-family: 'Poppins', sans-serif;">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- ======= Header ======= -->
    <header class="fixed-top">
      <nav class="navbar navbar-expand-custom navbar-mainbg">
      <div class="container">
        <a class="navbar-brand" href=""><h6 class="fw-bold text-white"><img src="./gambar/logo-sekolah.png" alt="logo-sekolah" width="50">Baitul Qur'an Mardhotillah</h6></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" href="?page=beranda"><i class="fas fa-tachometer-alt"></i> Beranda</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="?page=profil"><i class="fas fa-home"></i> Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=direktori"><i class="fas fa-users"></i> Direktori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=berita"><i class="fas fa-newspaper"></i> Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=galery"><i class="fas fa-image"></i> Galery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=akademik"><i class="fas fa-puzzle-piece"></i> Akademik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=hubungi"><i class="fas fa-phone" href="?page=hubungi"></i> Hubungi</a>
                </li>
            </ul>
        </div>
    </nav><!-- End Header -->
    </div>
    </header>
  <!-- End Header -->

    <!-- Hero section start -->
    <div>
    <?php
      if (isset($_GET['page']))
        $page = $_GET['page'];
      else {
        $_GET['page'] = 1;
        $page = $_GET['page'];
      }
    ?>
    </div>

        <!-- Footer end -->
<div id="slide">
<?php
@$page = $_GET['page'];

if (!empty($page)) {
  switch ($page) {
    case 'beranda';
      include './page/beranda.php';
      break;

    case 'profil';
      include './page/profil.php';
      break;

    case 'direktori';
      include './page/direktori.php';
      break;

    case 'berita';
      include './page/berita.php';
      break;

    case 'galery';
      include './page/galery.php';
      break;

    case 'akademik';
      include './page/akademik.php';
      break;

    case 'hubungi';
      include './page/hubungi.php';
      break;

    default;
      include './page/beranda.php';
      break;
  }
} else {
  include './page/beranda.php';
}
?>
</div>
<!-- My Javascript -->
 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="./js/javascript.js"></script>  
</body>
</html>
