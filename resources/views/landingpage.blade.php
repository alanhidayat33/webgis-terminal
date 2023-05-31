<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logh.png" class="rounded-image">
  <link rel="icon" type="image/png" href="../assets/img/logh.png" class="rounded-image">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>GIS TERMINAL</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.scss">
  <link rel="stylesheet" href="util.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .buttonmap {
        border-radius: 50px;
        background-color: #ff0000;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
    }

    .bg-orange {
        background-color: #ff0000;
    }

    .div-container {
      margin-right: 20px;
    }
  </style>
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Informasi Bus</a>
          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#busAModal">Bus A</a>
          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#busBModal">Bus B</a>
          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#busCModal">Bus C</a>
        </div>
      </div>
      <div class="div-container">
        <img src="../assets/img/logh.png" width="50" height="50" class="rounded-image">
      </div>
      <div class="navbar-translate justify-content-end">
        <h3>
            <a class="navbar-brand" rel="tooltip" title="Made by GIS Team"  target="_blank">
                G-TERMINAL
              </a>
        </h3>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <!--Biar content end-->
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/terminal.jpg');"></div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Map Terminal Se-Jawa Timur</h1>
          <button class="buttonmap" type="button" onclick="redirectToPage()">Masuk Map</button>
          <script>
            function redirectToPage() {
                window.location.href = "/map";
            }
          </script>
        </div>
      </div>
    </div>
    <!--Tata Cara Pendaftaran-->
    <div class="section text-center" id="carousel">
      <div class="container">
        <h2>Informasi Menarik</h2>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <a href="#" target=blank>
                        <img class="d-block" src="assets/img/info1.png" alt="Slide 1">
                    </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 1</h5>
                  </div>
                </div>
                <div class="carousel-item">
                    <a href="#" target=blank>
                        <img class="d-block" src="assets/img/info2.png" alt="Slide 2">
                    </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 2</h5>
                  </div>
                </div>
                <div class="carousel-item">
                    <a href="https://www.detik.com/jatim/berita/d-6676711/praktis-dan-antiribet-kini-bayar-bus-transjatim-bisa-pakai-qris" target=blank>
                        <img class="d-block" src="assets/img/info3.png" alt="Slide 3">
                    </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 3</h5>
                  </div>
                </div>
                <div class="carousel-item">
                    <a href="https://www.detik.com/jatim/berita/d-6674357/armada-bus-trans-jatim-tambah-10-karena-makin-banyak-peminat" target=blank>
                        <img class="d-block" src="assets/img/info4.png" alt="Slide 4">
                    </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 4</h5>
                  </div>
                </div>
                <div class="carousel-item">
                    <a href="https://kominfo.jatimprov.go.id/berita/pemprov-jatim-siapkan-tambahan-armada-bus-transjatim" target=blank>
                        <img class="d-block" src="assets/img/info5.png" alt="Slide 5">
                    </a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 5</h5>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="now-ui-icons arrows-1_minimal-left"></i>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="now-ui-icons arrows-1_minimal-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->
    <footer class="footer footer-default">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="">
                GIS Team 2
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by GIS Team
        </div>
      </div>
    </footer>
  </div>

  <!-- Modal untuk Bus A -->
  <div class="modal fade" id="busAModal" tabindex="-1" role="dialog" aria-labelledby="busAModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="busAModalLabel">Bus A</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Informasi mengenai Bus A -->
              <p>Terminal penumpang Tipe A, yaitu yang berfungsi melayani kendaraan penumpang umum untuk angkutan antar kota antar propinsi (AKAP),
                 dan angkutan lintas batas antar negara, angkutan antar kota dalam propinasi (AKDP), angkutan kota (AK) serta angkutan pedesaan 
                 (ADES).
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal untuk Bus B -->
      <div class="modal fade" id="busBModal" tabindex="-1" role="dialog" aria-labelledby="busBModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="busBModalLabel">Bus B</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Informasi mengenai Bus B -->
              <p>Terminal penumpang Tipe B, yaitu yang berfungsi melayani kendaraan penumpang umum untuk angkutan antar kota dalam provinsi (AKDP),
                angkutan kota (AK) serta angkutan pedesaan (ADES).
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal untuk Bus C -->
      <div class="modal fade" id="busCModal" tabindex="-1" role="dialog" aria-labelledby="busCModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="busCModalLabel">Bus C</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Informasi mengenai Bus C -->
              <p>Terminal penumpang Tipe C, yaitu yang berfungsi melayani kendaraan penumpang umum  untuk angkutan pedesaan (ADES).</p>
            </div>
          </div>
        </div>
      </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="path/to/bootstrap.js"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>