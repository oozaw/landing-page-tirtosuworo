<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>{{ $title }} - Desa Tirtosuworo</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="/landing-page/img/favicon.png" rel="icon">
   <link href="/landing-page/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="/landing-page/vendor/aos/aos.css" rel="stylesheet">
   <link href="/landing-page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="/landing-page/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="/landing-page/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="/landing-page/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="/landing-page/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="/landing-page/css/style.css" rel="stylesheet">

   <!-- =======================================================
  * Template Name: Serenity - v4.11.0
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
   @include('landing-page.partials.navbar')

   <!-- ======= Hero Section ======= -->
   <section id="hero">
      <div class="hero-container" data-aos="fade-up">
         <h1>Welcome to Serenity</h1>
         <h2>We are team of talented designers making websites with Bootstrap</h2>
         <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
   </section><!-- End Hero -->

   <main id="main">
      @yield('main')
   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">
      @include('landing-page.partials.footer')
   </footer><!-- End Footer -->

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="/landing-page/vendor/purecounter/purecounter_vanilla.js"></script>
   <script src="/landing-page/vendor/aos/aos.js"></script>
   <script src="/landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="/landing-page/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="/landing-page/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="/landing-page/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="/landing-page/vendor/waypoints/noframework.waypoints.js"></script>
   <script src="/landing-page/vendor/php-email-form/validate.js"></script>

   <!-- Template Main JS File -->
   <script src="/landing-page/js/main.js"></script>

</body>

</html>
