<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>
    Cables y Vias S.A.S.
  </title>
  <meta name="description" content="Empresa con 30 años de experiencia, dedicada a la fabricación e instalación del sistemas de transporte por cable para sector
  agroindustrial, nuestra empresa ofrece servicios de primera calidad, profesionalismo y comprometidos con la calidad de nuestros productos.">
  <meta name="keywords" content="cables, vias, cables y vias, fabricación, ferreteria, galvanizado, transporte, transporte por cable aereo, cable aereo, bananeras, agroindustria, garruchas, puentes, puentes colgantes">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/argon-design-system.min.css?v=1.0.2') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/master.css') }}" rel="stylesheet" />
    <!-- Carousel -->
        <!-- Css Carousel -->
            <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <!-- Script Carousel -->
            <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
            <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <!-- End Carousel -->

  <style type="text/css">
        .btn_whatsapp, btn_whatsapp:active {
        position: fixed;
        z-index: 999;
        bottom: 20px;
        right: 10px;
        background-color: #25d366;
        color: #fff;
        padding: 10px 25px;
        font-size: 13px;
        border-radius: 50px;
        font-weight: bold;
        max-width: 70px !important;
        min-width: 70px !important;
        max-height: 70px !important;
        min-height: 70px !important;
        padding-top: 12px !important;
        padding-left: 17px !important;
        padding-right: 17px !important;
      }

      ::-webkit-scrollbar-thumb {
          background: #9e9e9e!important;
          border-radius: 10px;
      }

      ::-webkit-scrollbar {
          width: 11px;
          border-radius: 10px;
      }
  </style>
</head>

<body class="index-page">

<div class="wrapper">
  @yield('content')
</div>

  @include('components.footer')

  @yield('js')
   <a href="https://api.whatsapp.com/send?phone=573016245760&amp;text=Hola,%20estoy%20interesado%20en%20el%20producto" class="btn_whatsapp" target="_blank">
        <i class="fab fa-whatsapp fa-3x mt-1 mb-1" aria-hidden="true"></i>
   </a>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap-datepicker.min.js') }}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="{{ asset('assets/js/argon-design-system.min.js?v=1.2.0') }}" type="text/javascript"></script>
  <script type="text/javascript">
        /* Demo purposes only */
      var snippet = [].slice.call(document.querySelectorAll('.hover'));
      if (snippet.length) {
      snippet.forEach(function (snippet) {
        snippet.addEventListener('mouseout', function (event) {
          if (event.target.parentNode.tagName === 'figure') {
            event.target.parentNode.classList.remove('hover')
          } else {
            event.target.parentNode.classList.remove('hover')
          }
        });
      });
      }
  </script>
</body>

</html>
