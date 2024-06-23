<?php
    $id=$_GET['id'];
    include "crud/config/bd.php";
    $datos=ListarunAlumno($id);
    $nombre_comun=$datos['nombre_comun'];
    $nombre_cientifico=$datos['nombre_cientifico'];
    $descripcion=$datos['descripcion'];
    $foto=$datos['foto'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo-bio.svg">
  <link rel="icon" type="image/png" href="../assets/img/logo-bio.svg">
  <title>
    Biosofware
  </title>
  <link rel="stylesheet" href="tabla.css">

  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>
<body class="about-us bg-gray-100">
    <?php
    include 'includes/nav.php';
    ?>

    <header>
      <div class="page-header min-vh-25" style="background-image: url(&quot;../assets/img/estrellas.jpg&quot;); background-position-y: 28%">
      <span class="mask bg-dark opacity-4"></span>
      <div class="container">
      <div class="row">
      <div class="col-lg-7 mx-auto text-white text-center"><br><br><br>
      <h1 class="text-white" id="animate-text1">Inventario de las aves del Centro Biotenológico Del Caribe.</h1>
      </div>
      </div>
      </div>
      </div>
      </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
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

        /*Esta animación crea un zoom con la imagen de fondo del hero*/
        @keyframes zoom {
          0% {
            opacity: 0;
            transform: scale(1.1);
          }
          8% {
            opacity: 1;
          }
          60% {
            opacity: 1;
          }
          70% {
            opacity: 1;
            transform: scale(1);
          }
          100% {
            opacity: 1;
          }
        }

    </style>
<!-- Escript de animacion de texto -->

    <div class="card bg-gray-100 card-body ">
        <section class="pb-5 position-relative  mx-n3">
        <div class="container card py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
            <div class="card p-0 rounded-3">
            <img src="data:image/jpg;base64,<?=base64_encode($foto)?>" alt="fotografia" class="img-fluid shadow rounded-3">
            </div>
            </div>
        <div class="col-md-6 mb-md-0 mb-4">
        <p >Nombre Científico.</p>
        <h3><span class="me-2">•</span><em><?=$nombre_cientifico?></em></h3>
        <p>Nombre Común.</p>
            <h5><span class="me-2">•</span><?=$nombre_comun?></h3>
            <p class="mb-1">Descripción.</p>
            <p><small><?=$descripcion?></small></p>
        <div id="results"></div>

        <script>
        const resultsDiv = document.getElementById('results');

        function searchBird(birdName) {
            const url = `https://xeno-canto.org/api/2/recordings?query=${birdName}`;

            fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.recordings.length > 0) {
                const recording = data.recordings[0];
                resultsDiv.innerHTML = '';

                const audio = document.createElement('audio');
                audio.setAttribute('controls', '');
                const source = document.createElement('source');
                source.setAttribute('src', recording.file);
                audio.appendChild(source);
                resultsDiv.appendChild(audio);

                } else {
                resultsDiv.innerHTML = 'No se encontraron resultados.';
                }
            })
            .catch(error => {
                resultsDiv.innerHTML = `Ha ocurrido un error: ${error.message}`;
            });
        }

        // Obtén el nombre científico del ave de tu base de datos y asígnalo a la variable 'birdName'
        const birdName = '<?=$nombre_cientifico?>';

        // Busca automáticamente el sonido del ave al cargar la página
        window.addEventListener('load', () => {
            searchBird(encodeURIComponent(birdName));
        });
        </script>
        </div>
        </div>
        </div>
        </section>
    </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="../assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="tabla.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>

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
    <script>
    let temp = $("#btn1").clone();
    $("#btn1").click(function(){
      $("#btn1").after(temp);
    });

    $(document).ready(function(){
      var table = $('#example').DataTable({
      orderCellsTop: true,
      fixedHeader: true
      });

      //Creamos una fila en el head de la tabla y lo clonamos para cada columna
      $('#example thead td').clone(true).appendTo( '#example thead' );

      $('#example thead tr:eq(1) th').each( function (i) {
          var title = $(this).text(); //es el nombre de la columna
          $(this).html( '<input type="text" placeholder="Filtrar.. '+title+'" />' );

          $( 'input', this ).on( 'keyup change', function () {
              if ( table.column(i).search() !== this.value ) {
                  table
                      .column(i)
                      .search( this.value )
                      .draw();
              }
          } );
      } );
    });
    </script>

</body>
</html>
