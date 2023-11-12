<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>منصة آفاق</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap">
 <!-- CSS Files -->
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/footers/footer-3/assets/css/footer-3.css" />
  <!-- Bootstrap CSS File -->
  <link href="{{asset('front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- Libraries CSS Files -->
  <link href="{{asset('front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<style>
  body {
   font-family: 'Tajawal', sans-serif;
 font-weight: 700; /* استخدام النمط السميك */  }

 .navbar-b.navbar-reduce .nav-link {
    color: #0257b7;
}



 </style>
<body id="page-top" >

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
<a class="navbar-brand js-scroll" href="{{route('index')}}">
      <img src="{{asset('front/img/afaaq.png')}}" alt="" width="100px">
      </a>      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav" style="direction: rtl;">
          <li class="nav-item">
            <a class="nav-link js-scroll " href="{{route('index')}}">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{route('training_route')}}">مسار التدريب</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{route('education_route')}}">مسار التعليم</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{route('job_route')}}">مسار التوظيف</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{route('get_articles')}}">المقالات  </a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{route('contact')}}">تواصل معنا</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->
 
  @yield('content')
  <!--/ Section Contact-Footer Star /-->
  <!-- Footer -->
  <footer
  class="text-center text-lg-start text-white"
  style="background-color: #007bff"
  >
<!-- Grid container -->
<div class="container p-4 pb-0">
<!-- Section: Links -->


<hr class="my-3">

<!-- Section: Copyright -->
<section class="p-3 pt-0">
<div class="row d-flex align-items-center">
  <!-- Grid column -->
  <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
    <!-- Facebook -->
    <a
       class="btn btn-outline-light btn-floating m-1"
       class="text-white"
       role="button"
       ><i class="fab fa-facebook-f"></i
      ></a>

    <!-- Twitter -->
    <a
       class="btn btn-outline-light btn-floating m-1"
       class="text-white"
       role="button"
       ><i class="fab fa-twitter"></i
      ></a>

    <!-- Google -->
    <a
       class="btn btn-outline-light btn-floating m-1"
       class="text-white"
       role="button"
       ><i class="fab fa-google"></i
      ></a>

    <!-- Instagram -->
    <a
       class="btn btn-outline-light btn-floating m-1"
       class="text-white"
       role="button"
       ><i class="fab fa-instagram"></i
      ></a>
  </div>
  <div class="col-md-7 col-lg-8 text-center text-md-start">
    <!-- Copyright -->
    <div class="p-3">
      ©
     الكلية التقنية للاتصالات والمعلومات بجدة – منصة آفاق 
    </div>
    <!-- Copyright -->
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  
  <!-- Grid column -->
</div>
</section>
<!-- Section: Copyright -->
</div>
<!-- Grid container -->
</footer>
<!-- Footer -->
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{asset('front/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('front/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('front/lib/popper/popper.min.js')}}"></script>
  <script src="{{asset('front/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('front/lib/counterup/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('front/lib/counterup/jquery.counterup.js')}}"></script>
  <script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('front/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('front/lib/typed/typed.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  {{-- <script src="{{asset('front/contactform/contactform.js')}}"></script> --}}

  <!-- Template Main Javascript File -->
  <script src="{{asset('front/js/main.js')}}"></script>


  <!--<script>-->
  <!--  window.onload = function() {-->
  <!--    var allAnchorTags = document.querySelectorAll('a');-->
  <!--    for (var i = 0; i < allAnchorTags.length; i++) {-->
  <!--      allAnchorTags[i].setAttribute('target', '_blank');-->
  <!--    }-->
  <!--  };-->
  <!--</script>-->


</body>
</html>
