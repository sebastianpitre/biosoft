@extends('layouts.main')

@section('content')

<body class="about-us bg-gray-100">

@include('includes.panel.nav')

  <header>
    <div class="page-header min-vh-90" style="background-image: url(&quot;{{ asset('img/imgmain/fondos/fondo8.jpg') }}&quot;); background-position-y: 55%">
      <span class="mask bg-dark opacity-6"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-white text-center">
            <h1 class="text-white">Bienvenido a BioSofware</h1>
            <p class="lead animate-text" id="animate-text1">"Descrubre el canto de la naturaleza en un clic"</p>
            <a href="{{ route('welcome.especies') }}" class="btn btn-success">Explorar</a>
            <a href="{{ route('welcome.learm') }}"><button type="button" class="btn btn-outline-white">Aprender más</button>
          </div>
        </div>
        <div class="mx-auto">
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <div class="card card-body ">
    <div class="container">
      <div class="row bg-white shadow mt-n6 border-radius-lg mx-sm-0 mx-1 position-relative">

        <section class="" id="count-stats">
            <div class="row justify-content-center text-center">
            <div class="col-md-3">
                <h1 class="text-gradient text-success"><span id="state3" countTo="{{ $avistamientosTotales }}">0</span></h1>
                <h6>Observaciones</h6>
              </div>
              <div class="col-md-3">
                <h1 class="text-gradient text-success"> <span id="state1" countTo="{{ $aveCount }}">0</span></h1>
                <h6>Especies Registradas</h6>
              </div>
              <div class="col-md-3">
                <h1 class="text-gradient text-success"><span id="state2" countTo="7">0</span></h1>
                <h6>Areas Caracterizadas</h6>
              </div>
            </div>
        </section>
    </div>
  </div>

  <section class="py-4">
    <div class="container">
      <h3 class="font-weight-bolder text-center mb-0 mt-3">Especie recomendada</h3>
      <div class="col-md-4 mx-auto">
        <div class="card card-profile card-plain mt-4 mx-auto">
          <div class="row">
            <div class="col-lg-6">
              <a href="javascript:;">
                <div class="position-relative">
                  <div class="blur-shadow-image  mx-auto">
                    <div class="rounded-circle overflow-hidden border border-2 mx-auto" style="width: 200px; height: 200px;">
                      <img class="w-100 rounded-circle" src="{{ asset('imagenes/aves/'.$aveAleatoria->imagen) }}" style="object-fit: cover; height: 100%;" />
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-6 ps-0 my-auto">
              <div class="card-body text-center">
                <div class="p-md-0 pt-3">
                  <h5 class="font-weight-bolder mb-0">{{ $aveAleatoria->nombre_comun }}</h5>
                  <p class="text-success text-sm font-weight-bold mb-2">{{ $aveAleatoria->nombre_cientifico }}</p>
                </div>
                <a href="{{ route('especies.show', ['ave' => $aveAleatoria->id]) }}" class="btn btn-sm bg-gradient-success mt-2">Saber más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>

  
    <!-- Section with four success areas left & one card right with image and waves -->

    <!-- END Section with four success areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative mx-n3" style="background:#344767 ;">
        <div class="container">
            <div class="row">
            <div class="col-md-8 text-start mt-5">
                <h3 class="text-white z-index-1 position-relative">Descubre especies</h3>
            </div>
            </div>
            <section class="py-4">
              <div class="container">
              <div class="row justify-content-center">
              
                <div class="card my-2 col-lg-4 col-md-6 move-on-hover">
                    <div class="card card-blog card-plain">
                    @if($aveMayorAvistamientos)
                        <div class="position-relative">
                          
                            <a href="{{ route('especies.show', ['ave' => $aveMayorAvistamientos->id]) }}" class="d-block">
                              <img src="{{ asset('imagenes/aves/'.$aveMayorAvistamientos->imagen) }}" alt="img-blur-shadow" class="mt-2 img-fluid shadow border-radius-lg" style="width:400px; height: 300px; max-height: 300px;">
                            </a>
                        </div>
                        <div class="card-body px-1">
                              <span class="badge bg-gradient-success">Mayor avistamiento</span>
                              <a href="javascript:;">
                              <h5 class="mt-2">
                              {{ $aveMayorAvistamientos->nombre_comun }}
                              </h5>
                              </a>
                              <p class="text-success">
                                  <em>{{ $aveMayorAvistamientos->nombre_cientifico }}</em>
                              </p>
                        </div>
                      @endif
                    </div>
                </div>
                
                <div class="card mx-3 my-2 col-lg-4 col-md-6 move-on-hover">
                  <div class="card card-blog card-plain">
                  <div class="position-relative">
                    @if($aveMenorAvistamientos)
                      <a  href="{{ route('especies.show', ['ave' => $aveMenorAvistamientos->id]) }}" class="d-block">
                      <img src="{{ asset('imagenes/aves/'.$aveMenorAvistamientos->imagen) }}" alt="img-blur-shadow" class="mt-2 img-fluid shadow border-radius-lg" style="width:400px; height: 300px; max-height: 300px;">
                      </a>
                      </div>
                      <div class="card-body px-1 pt-3">
                      <span class="badge bg-gradient-danger">Menor avistamiento</span>
                      
                      <h5 class="mt-2">
                      {{ $aveMenorAvistamientos->nombre_comun }}
                      </h5>
                      
                      <p class="text-success">
                          <em>{{ $aveMenorAvistamientos->nombre_cientifico }}</em>
                      </p>
                      </a>
                    @endif
                  </div>
                  </div>
                </div>
                </div>
              </div>
          </section>
        </div>
    </section>
    <section class="py-8">
      <div class="container">
        <div class="row justify-space-between py-2">
          <div class="card card-plain card-blog mt-5">
            <div class="row">
              <div class="col-md-4">
                <div class="card-image position-relative border-radius-lg cursor-pointer">
                <a class="d-block blur-shadow-image">
                  <img src="{{ asset('img/lupa.jpg') }}" alt="img-blur-shadow" class="img-fluid border-radius-lg" >
                </a>

                </div>
              </div>
              <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                <p class="text-xs text-uppercase font-weight-bold text-gradient text-success mb-2">Identificación</p>
                <h3 class="text-dark cursor-pointer">Has avistado un ave, pero desconoces su especie.</h3>
                <p>
                Si has avistado un ave y no sabes de qué especie se trata, no te preocupes, puedes utilizar el modelo hecho por Google de reconocimiento de aves para identificarla. Este modelo utiliza la inteligencia artificial y el aprendizaje automático para reconocer las características únicas de cada especie y ofrecerte una lista de posibles opciones. Solo necesitas subir una foto del ave y recibirás una respuesta inmediata.
                </p>
                <div class="author">
                <a href="https://storage.googleapis.com/tfhub-visualizers/visualizers/vision/index.html?modelMetadataUrl=https%3A%2F%2Fstorage.googleapis.com%2Ftfhub-visualizers%2Fgoogle%2Faiy%2Fvision%2Fclassifier%2Fbirds_V1%2F1%2Fmetadata.json&publisherName=Google&publisherThumbnailUrl=https%3A%2F%2Fwww.gstatic.com%2Faihub%2Fgoogle_logo_120.png" class="btn btn-success sm" target="_blank">Identificar aves</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="position-relative mx-n3">
      <div class="container">
        <!-- <div class="row">
          <div class="col-md-6  m-auto">
            <h4>Descarga Biosoftware para Android YÁ !</h4>
            <p class="mb-4 col-8">
              Your company may not be in the software business,
              but eventually, a software company will be in your business.
            </p>
            <div class="row">
              <div class="col-4">
                <h5 class="text-info">Biosoftware.apk</h5>
              </div>
              <div class="col-4 ps-0">
                <a src="{{ asset('apk/biosoftware.apk') }}"class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Descargar</a>
              </div>
            </div>
          </div>
          <div class="col-md-5 ms-auto">
            <div class="position-relative">
              <img class="max-width-20 w-40 position-relative z-index-2" src="{{ asset('img/codigoqr.png') }}" alt="QR">
            </div>
          </div>
        </div> -->

        <div class="accordion-1">
          <div class="container">
            <div class="row my-5">
              <div class="col-md-6 mx-auto text-center">
                <h2>Datos curiosos</h2>
                <p>Descubre datos interesantes sobre el fasinate mundo de las aves </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="accordion" id="accordionRental">
                  <div class="accordion-item mb-3">
                    <h5 class="accordion-header" id="headingOne">
                      <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        ¿Cúal es el ave más grande del mundo?
                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                      </button>
                    </h5>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                      <div class="accordion-body text-sm opacity-8" style="color: #172b4d;">
                      El ave más grande del mundo es el avestruz (Struthio camelus). Esta especie de ave no voladora puede medir hasta 2,7 metros de altura y pesar más de 150 kilogramos. El avestruz tiene un cuerpo grande y fuerte adaptado para correr a alta velocidad, con patas largas y poderosas. Las alas del avestruz son demasiado pequeñas para permitir el vuelo, pero son útiles para el equilibrio y la estabilidad durante la carrera. Los avestruces se encuentran principalmente en África, y son criados por su carne, piel y plumas.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item mb-3">
                    <h5 class="accordion-header" id="headingTwo">
                      <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ¿Cuál es el ave que tiene el período de incubación más largo?
                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                      </button>
                    </h5>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                      <div class="accordion-body text-sm opacity-8" style="color: #172b4d;">
                      El ave que más demora en nacer es el elefante del casco (Balaeniceps rex), también conocido como picozapato o shoebill. El período de incubación para los huevos de esta especie puede durar entre 50 y 60 días, lo que es relativamente largo en comparación con otras especies de aves. Una vez que los huevos eclosionan, los polluelos tardan aproximadamente tres meses en desarrollarse y abandonar el nido. El picozapato es una especie de ave endémica de las zonas pantanosas de África oriental, y se caracteriza por su pico largo y grueso, que se asemeja a un zapato gigante.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item mb-3">
                    <h5 class="accordion-header" id="headingThree">
                      <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ¿Cuál es la especie de ave más abundante en el mundo?
                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                      </button>
                    </h5>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                      <div class="accordion-body text-sm opacity-8" style="color: #172b4d;">
                      La especie de ave más abundante en el mundo es la gallina doméstica (Gallus gallus domesticus). Se estima que hay más de 20 mil millones de gallinas en todo el mundo, lo que las convierte en una de las aves más comunes y ampliamente distribuidas en la Tierra. Las gallinas se crían para la producción de carne y huevos, y son una fuente importante de proteínas en la dieta humana. Además, la gallina doméstica también se utiliza como animal de compañía y en la industria de la avicultura para la producción de plumas y otros productos.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item mb-3">
                    <h5 class="accordion-header" id="headingFour">
                      <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      ¿Cuál es la especie de ave con el periodo de vida más largo?
                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                      </button>
                    </h5>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                      <div class="accordion-body text-sm opacity-8" style="color: #172b4d;">
                      La especie de ave con el periodo de vida más largo es el albatros de Laysan (Phoebastria immutabilis). Se sabe que algunos individuos de esta especie han vivido más de 60 años en la naturaleza. Los albatros en general tienen una vida larga, pero el albatros de Laysan es uno de los más longevos de todas las aves. 
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item mb-3">
                    <h5 class="accordion-header" id="headingFifth">
                      <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                      ¿Cuál es la especie de ave voladora más rápida?
                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                      </button>
                    </h5>
                    <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionRental">
                      <div class="accordion-body text-sm "  style="color: #172b4d;">
                      La especie de ave voladora más rápida es el halcón peregrino (Falco peregrinus). Es un ave rapaz que puede alcanzar velocidades de más de 320 kilómetros por hora (200 millas por hora) durante su típico vuelo en picado. Esta velocidad le permite capturar presas en el aire, que a menudo son otras aves. El halcón peregrino es considerado uno de los animales más rápidos del planeta y es admirado por su habilidad de cazar a gran velocidad.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('includes.panel.footerlan')
</body>
@endsection
