<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/imgmain/logo-bio.svg') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/imgmain/logo-bio.svg') }}">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('css/cssmain/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/cssmain/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/cssmain/material-kit.css?v=3.0.4') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/cssmain/tabla.css') }}">
    <head>
    <title>
        BioSoftware
    </title>
</head>
</head>

<body class="about-us bg-gray-100">
@include('includes.panel.nav')

@yield('content')

<!-- Estilos de animacion de texto -->
<style >

        .animate-text {
        letter-spacing: 0.075rem;
        }

        /*Para simular el cursor del teclado usamos la siguiente pseudoclase con una animación que pueden ver en la parte final del código CSS*/
        .animate-text::after {
        content: "|";
        font-size: 1.6rem;
        font-family: "Inconsolata", monospace;
        animation-name: parpadeo;
        animation-duration: 1s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        }
        .zoom {
        animation: zoom 8s 0s;
        }

        /*Esta animación imita el parpadeo del cursor del teclado*/
        @keyframes parpadeo {
        0% {
            opacity: 1;
        }
        20% {
            opacity: 1;
        }
        25% {
            opacity: 0;
        }
        90% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
        }

    </style>
<!-- Escript de animacion de texto -->
    <script>
        //Primero capturamos el elemento del DOM con el id que definimos en el html
        const text1 = document.getElementById("animate-text1");
        let str = text1.innerHTML;
        text1.innerHTML = "";

        //Declaramos una varible en la que asignaremos un valor para que sea el tiempo en ms que durará la función setTimeout
        const speed = 25;
        let i = 0;

        //Esta función recorre todos los caracteres nuestro texto
        const typeWriter = () => {
        if (i < str.length) {
            text1.innerHTML += str.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
        };

        //Acá ejecutamos la función
        setTimeout(typeWriter, speed);

    </script>

</body>


<!--   Core JS Files   -->
<script src="{{ asset('js/jsmain/core/popper.min.js') }} " type="text/javascript"></script>
  <script src="{{ asset('js/jsmain/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jsmain/plugins/perfect-scrollbar.min.js') }}"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="{{ asset('js/jsmain/plugins/countup.min.js') }}"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="{{ asset('js/jsmain/plugins/parallax.min.js') }}"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="{{ asset('js/jsmain/plugins/material-kit.min.js?v=3.0.4') }}"  type="text/javascript"></script>

  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }

    if (document.getElementById('state3')) {
      const countUp1 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }

    if (document.getElementById('state4')) {
      const countUp1 = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }

    if (document.getElementById('state5')) {
      const countUp1 = new CountUp('state5', document.getElementById("state5").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }

    if (document.getElementById('state6')) {
      const countUp1 = new CountUp('state6', document.getElementById("state6").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }

    if (document.getElementById('state7')) {
      const countUp1 = new CountUp('state7', document.getElementById("state7").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }

    if (document.getElementById('state8')) {
      const countUp1 = new CountUp('state8', document.getElementById("state8").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state9')) {
      const countUp2 = new CountUp('state9', document.getElementById("state9").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }

    var el = document.getElementById('navbarPresentationShadow');
    var distance = 58;

    function scrollNavbarShadow() {
      if (this.pageYOffset > distance) {
        el.classList.remove('shadow-none');
        el.classList.add('shadow');
      } else {
        el.classList.add('shadow-none');
        el.classList.remove('shadow');
      }
    }

    window.addEventListener("scroll", function() {
      scrollNavbarShadow();
    });
  </script>
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>
