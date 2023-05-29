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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/bus.png" class="rounded-image">
  <link rel="icon" type="image/png" href="../assets/img/bus.png" class="rounded-image">
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
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.scss">
  <link rel="stylesheet" href="util.css">
  <link rel="stylesheet" href="main.css">

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
  <nav class="navbar navbar-expand-lg bg-orange fixed-top navbar-transparent" color-on-scroll="250">
    <div class="container">
      <!-- <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">One more separated link</a>
        </div>
      </div> -->
      <div class="div-container">
        <img src="../assets/img/bus.png" width="50" height="50" class="rounded-image">
      </div>
      <div class="navbar-translate justify-content-end">
        <a class="navbar-brand" rel="tooltip" title="Made by GIS Team" data-placement="bottom" target="_blank">
          GIS TERMINAL
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">Pengumuman</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="">Home</a>
          </li> -->
        </ul>
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
        <h2>Informasi Fitur</h2>
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
                  <img class="d-block" src="assets/img/bg1.jpg" alt="Slide 1">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 1</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/bg3.jpg" alt="Slide 2">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 2</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/bg4.jpg" alt="Slide 3">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 3</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/bg5.jpg" alt="Slide 4">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 4</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/bg6.jpg" alt="Slide 5">
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
                GIS Team
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
</body>

</html>
