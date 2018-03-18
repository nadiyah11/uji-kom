<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Klik n Klik</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{!! asset('Avilon/img/favicon.png') !!}" rel="icon">
  <link href="{!! asset('Avilon/img/apple-touch-icon.png') !!}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{!! asset('Avilon/lib/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{!! asset('Avilon/lib/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('Avilon/lib/ionicons/css/ionicons.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('Avilon/lib/aos/aos.css') !!}" rel="stylesheet">
  <link href="{!! asset('Avilon/lib/magnific-popup/magnific-popup.css') !!}" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="{!! asset('Avilon/css/style.css') !!}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>


<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">KliknK</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="{!! asset('Avilon/img/logo.png') !!}" alt="" title="" /></img></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="#menu-has-children"><a href="#kategori">Kategori</a>
            <ul>
              @foreach($tampil1 as $data)
              <li>
                <a href="{{route('showperkategori',$data->id)}}">{{($data->kategori)}}</a> 
              </li>
              @endforeach
            </ul>
          </li>
          <li><a href="#features">Barang</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li class="menu-has-children"><a href="">Masuk</a>
            <ul>
              <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>Welcome to Klik N Klik</h2>
      <p>Perangkat Komputer</p>
    </div>

    <div class="product-screens">

      <div class="product-screen-1" data-aos="fade-up" data-aos-delay="400">
        <img src="{!! asset('Avilon/img/product-screen-1.png') !!}" alt="">
      </div>

      <div class="product-screen-2" data-aos="fade-up" data-aos-delay="200">
        <img src="{!! asset('Avilon/img/product-screen-2.png') !!}" alt="">
      </div>

      <div class="product-screen-3" data-aos="fade-up">
        <img src="{!! asset('Avilon/img/product-screen-3.png') !!}" alt="">
      </div>

    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="kategori" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title"></h3>
          <span class="section-divider"></span>
          <p class="section-description">
              @yield('kategori')
          </p>
        </div>
      </section>
        <section id="about" class="section-bg">
        <div class="row">
          <div class="col-lg-6 about-img" data-aos="fade-right">
            <img src="{!! asset('Avilon/img/about-img.jpg') !!}" alt="">
          </div>

          <div class="col-lg-6 content" data-aos="fade-left">
            <h2>Klik n Klik</h2>
            <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>

            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Libero justo laoreet sit amet cursus sit amet dictum sit. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec
            </p>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header" data-aos="fade" data-aos-duration="1000">
              <h3 class="section-title"> Barang Terbaru</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="{!! asset('Avilon/img/product-features.png') !!}" alt="" data-aos="fade-right" data-aos-easing="ease-out-back">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              @yield('content')

            </div>

          </div>

        </div>

      </div>

    </section><!-- #features -->

    <!--==========================
      Product Advanced Featuress Section
    ============================-->
    <section id="advanced-features">
    </section><!-- #advanced-features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
    </section><!-- #call-to-action -->

    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">More Features</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>
    </section><!-- #more-features -->

    <!--==========================
      Clients
    ============================-->
    <section id="clients">
      <div class="container">
        <div class="row">
          @yield('contentt')
        </div>
      </div>
    </section><!-- #more-features -->

    <!--==========================
      Pricing Section
    ============================-->


    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      
    </section><!-- #faq -->

    <!--==========================
      Our Team Section
    ============================-->

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
    </section><!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Klik n Klik</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Jl.GegerKalong<br>Blok 4a</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>www.kliknklik.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+6289 6629 79668</p>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>SMK Assalaam</strong>. Bandung
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{!! asset('Avilon/lib/jquery/jquery.min.js') !!}"></script>
  <script src="{!! asset('Avilon/lib/jquery/jquery-migrate.min.js') !!}"></script>
  <script src="{!! asset('Avilon/lib/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! asset('Avilon/lib/easing/easing.min.js') !!}"></script>
  <script src="{!! asset('Avilon/lib/aos/aos.js') !!}"></script>
  <script src="{!! asset('Avilon/lib/superfish/hoverIntent.js') !!}"></script>
  <script src="{!! asset('Avilon/lib/superfish/superfish.min.js') !!}"></script>
  <script src="{!! asset('Avilon/lib/magnific-popup/magnific-popup.min.js') !!}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{!! asset('Avilon/contactform/contactform.js') !!}"></script>

  <!-- Template Main Javascript File -->
  <script src="{!! asset('Avilon/js/main.js') !!}"></script>

</body>
</html>
