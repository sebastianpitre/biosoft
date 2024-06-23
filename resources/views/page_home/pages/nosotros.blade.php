@extends('layouts.main')

@section('content')

<body class="about-us bg-gray-200">

  <!-- -------- START HEADER 7 w/ text and video ------- -->
    <!-- <header class="bg-gradient-dark">
      <div class="page-header min-vh-25" style="background-image: url(&quot;{{ asset('img/imgmain/especies1.jpg') }}&quot;); background-position-y: 49%">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto">
              <br><br>
              <h3 class="text-white" id="animate-text1">Conocenos</h3>
            </div>
          </div>
        </div>
      </div>
    </header> -->
  <!-- -------- END HEADER 7 w/ text and video ------- -->

  <div class="bg-white card-body">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
      <div class="container">
      
        <!-- <div class="row">
          <div class="col-md-6">
          <img class="border-radius-lg shadow-lg  d-block img-fluid" src="{{ asset('img/Centro/plazoleta.jpg') }}" alt="Descripción de la imagen" width="400" height="300">

          </div>
          <div class="col-md-6">
            <h1>Biosoftware</h1>
            <p>Biosoftware es una herramienta de consulta con fines de investigación y educación. El objetivo del Biosoftware es mejorar el conocimiento y la valoración de las aves del CBC. Para ello pretende facilitar la integración de información, personas y organizaciones que están trabajando en el tema. En el mediano plazo esperamos que se posicione como un recurso de gran valor para los interesados en las aves del centro. Lo invitamos a conocer esta herramienta y a contribuir con fotografía, video y registro sobre la ecología, comportamiento y Biología de las aves del CBC.</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-6 ">
          <h3>Misión:</h3>
          <p>Despertar el interés por las aves y su conservación, a través de información confiable y actualizada de cada especie de aves que se ha registrado en el Centro biotecnologico del caribe. Esta información se obtendrá de la informacíon recolectada por los aprendizes del area de recursos naturales o de cualquier area.</p>

          <h3>Visión:</h3>
          <p>Ser un referente en todas las regionales del sena para la búsqueda de información y la educación de todos aquellos que estén interesados en aprender más sobre las aves y su conservación. Sintetizar la información científica de una manera sencilla y dinámica para promover el aprendizaje. Con el fin de convertirse en una enciclopedia abierta de las aves que habitan en el centro biotecnologico del caribe.</p>
          </div>
          <div class="col-md-6">
            <div style="position:relative;width:400px;height:300px;">
                <img class="border-radius-lg shadow-lg mx-auto d-block img-fluid" src="{{ asset('img/Centro/plazoleta.jpg') }}" alt="Descripción de la imagen">
                <div style="position:absolute;top:100%;left:0;right:0;background-color:rgba(0,0,0,0.5);padding:5px;color:white;font-size:10px;">
                    <p class="text-end" style="margin:0;">© Jhonatan Camelo</p>
                </div>
            </div>
          </div> -->
          <!-- -------- START CONTENT 7 w/ card over right bg image ------- -->
            <!-- <div class="page-header min-vh-85">
            <div class="position-absolute fixed-top ms-auto w-75 h-75 border-radius-xl z-index-1 d-none d-sm-none d-md-block me-n4" style="background-image: url('{{ asset('img/Centro/plazoleta.jpg') }}'); background-size: cover;">

                <span class="mask bg-gradient-dark opacity-7"></span>
              </div>
              <div class="container">
                <div class="row mt-7 mb-5">
                  <div class="col-lg-6 d-flex justify-content-center flex-column">
                    <div class="card card-body d-flex justify-content-center shadow-lg border-radius-xl p-5 blur align-items-center z-index-2 shadow-blur">
                      <h2 class="text-dark mb-4">Biosoftware</h2>
                      <p class="text-lg-start text-center mb-0">Biosoftware es una herramienta de consulta con fines de investigación y educación. El objetivo del Biosoftware es mejorar el conocimiento y la valoración de las aves del CBC. Para ello pretende facilitar la integración de información, personas y organizaciones que están trabajando en el tema. En el mediano plazo esperamos que se posicione como un recurso de gran valor para los interesados en las aves del centro. Lo invitamos a conocer esta herramienta para apreder y sobre todo conservar la biodiversidad</p>
                      <br>
                      <div class="buttons w-100">
                        <button type="button" class="btn bg-gradient-dark mb-0">Contact Us</button>
                        <button type="button" class="btn btn-outline-dark mb-0 ms-1">Read More</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

          <!-- -------- END CONTENT 10 w/ card over right bg image ------- -->
          <!-- -------- START HEADER 8 w/ two background colors ------- -->
            <header class="header-rounded-images">
              <div class="page-header min-vh-90">
                <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" src="{{ asset('img/Centro/plazoleta.jpg') }}" alt="image" loading="lazy">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-7 d-flex">
                      <div class="card card-body blur text-md-start text-center px-sm-5 shadow-lg mt-sm-5 py-sm-5">
                        <h2 class="text-dark mb-4">Biosoftware</h2>

                        <p class="text-lg-start text-dark pe-md-5 me-md-5  ">
                        Biosoftware es una herramienta de consulta con fines de investigación y educación. El objetivo del Biosoftware es mejorar el conocimiento y la valoración de las aves del CBC. Para ello pretende facilitar la integración de información, personas y organizaciones que están trabajando en el tema. En el mediano plazo esperamos que se posicione como un recurso de gran valor para los interesados en las aves del centro. Lo invitamos a conocer esta herramienta para apreder y sobre todo conservar la biodiversidad.
                        </p>
                        <!-- <div class="buttons">
                          <button type="button" class="btn bg-gradient-primary mt-4">Contact Us</button>
                          <button type="button" class="btn btn-outline-secondary mt-4 ms-2">Read More</button>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>
          
          <!-- -------- END HEADER 9 w/ two background colors ------- -->

        
      </div>
    </section>
    <!-- -------- equipo de trabajo -------- -->
    <section class="pb-5 position-relative bg-gradient-success mx-n3">
      <div class=" container">

      <h1 class="text-white text-center mb-3 mt-3">Nuestro equipo</h1>
          <div class="row justify-content-center">
            <!-- card area -->
            <div class="card mx-3 my-2 col-lg-2 col-md-6">
              <div class="card card-blog card-plain">
                <div class="position-relative">
                    <a class="d-block">
                        <img src="{{ asset('img/imgmain/team-4.jpg') }}" alt="img-blur-shadow" class="mt-2 img-fluid shadow border-radius-lg">
                    </a>
                </div>
                <div class="card-body px-1 pt-3">
                    <h6 class="text-gradient text-dark mb-2 text-xxl text-center" id="animate-text3">Sebastián Andrés Pitre Diaz</h6>
                    <h6 class="text-gradient text-success" id="animate-text3"> Desarrollador Front end</h6>
                    <ul class="d-flex flex-row ms-n3 nav">
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                          <i class="fab fa-facebook text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                          <i class="fab fa-twitter text-lg opacity-8"></i>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                          <i class="fab fa-github text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                          <i class="fab fa-youtube text-lg opacity-8"></i>
                        </a>
                      </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card mx-3 my-2 col-lg-2 col-md-6">
              <div class="card card-blog card-plain">
                <div class="position-relative">
                    <a class="d-block">
                        <img src="{{ asset('img/jhonatan.png') }}" alt="img-blur-shadow" class="mt-2 img-fluid shadow border-radius-lg">
                    </a>
                </div>
                <div class="card-body px-1 pt-3">
                    <h6 class="text-gradient text-dark mb-2 text-xxl text-center" id="animate-text3">Jhonatan David Camelo Paredes</h6>
                    <h6 class="text-gradient text-success" id="animate-text3"> Desarrollador Back end</h6>
                    <ul class="d-flex flex-row ms-n3 nav">
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                          <i class="fab fa-facebook text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                          <i class="fab fa-twitter text-lg opacity-8"></i>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                          <i class="fab fa-github text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                          <i class="fab fa-youtube text-lg opacity-8"></i>
                        </a>
                      </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card mx-3 my-2 col-lg-2 col-md-6">
              <div class="card card-blog card-plain">
                <div class="position-relative">
                    <a class="d-block">
                        <img src="{{ asset('img/jhoan.png') }}" alt="img-blur-shadow" class="mt-2 img-fluid shadow border-radius-lg"  style="width:400px; height: 194px; max-height: 200px;">
                    </a>
                </div>
                <div class="card-body px-1 pt-3">
                    <h6 class="text-gradient text-dark mb-2 text-xxl text-center" id="animate-text3">Jhoan Andrés Ortega Martínez</h6>
                    <h6 class="text-gradient text-success" id="animate-text3"> Desarrollador Back end</h6>
                    <ul class="d-flex flex-row ms-n3 nav">
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                          <i class="fab fa-facebook text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                          <i class="fab fa-twitter text-lg opacity-8"></i>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                          <i class="fab fa-github text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                          <i class="fab fa-youtube text-lg opacity-8"></i>
                        </a>
                      </li>
                  </ul>
                </div>
              </div>
            </div>


          </div>
<!-- card area -->
          <div class="row justify-content-center">


            <div class="card mx-3 my-2 col-lg-2 col-md-6">
              <div class="card card-blog card-plain">
                <div class="position-relative">
                    <a class="d-block">
                        <img src="{{ asset('img/keller.png') }}" alt="img-blur-shadow" class="mt-2 img-fluid shadow border-radius-lg" style="width:400px; height: 194px; max-height: 200px;">
                    </a>
                </div>
                <div class="card-body px-1 pt-3">
                <h6 class="text-gradient text-dark mb-2 text-xxl text-center" id="animate-text3">Keller Karolay Brieva Kerguelen</h6>
                    <h6 class="text-gradient text-success" id="animate-text3">Experiencia de usuario</h6>
                    <ul class="d-flex flex-row ms-n3 nav">
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                          <i class="fab fa-facebook text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                          <i class="fab fa-twitter text-lg opacity-8"></i>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                          <i class="fab fa-github text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                          <i class="fab fa-youtube text-lg opacity-8"></i>
                        </a>
                      </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card mx-3 my-2 col-lg-2 col-md-6">
              <div class="card card-blog card-plain">
                <div class="position-relative">
                    <a class="d-block">
                        <img src="{{ asset('img/yuliana.png') }}" alt="img-blur-shadow" class="mt-2 img-fluid shadow border-radius-lg" style="width:400px; height: 194px; max-height: 200px;">
                    </a>
                </div>
                <div class="card-body px-1 pt-3">
                <h6 class="text-gradient text-dark mb-2 text-xxl text-center" id="animate-text3">Yuliana Sofia Miranda tapias</h6>
                    <h6 class="text-gradient text-success" id="animate-text3">Asistente de modelo UX</h6>
                    <ul class="d-flex flex-row ms-n3 nav">
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                          <i class="fab fa-facebook text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                          <i class="fab fa-twitter text-lg opacity-8"></i>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                          <i class="fab fa-github text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                          <i class="fab fa-youtube text-lg opacity-8"></i>
                        </a>
                      </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card mx-3 my-2 col-lg-2 col-md-6">
              <div class="card card-blog card-plain">
                <div class="position-relative">
                    <a class="d-block">
                        <img src="{{ asset('img/imgmain/montesino.jpg') }}" alt="img-blur-shadow" class="mt-2 img-fluid shadow border-radius-lg" style="width:400px; height: 194px; max-height: 200px;">
                    </a>
                </div>
                <div class="card-body px-1 pt-3">
                <h6 class="text-gradient text-dark mb-2 text-xxl text-center" id="animate-text3">Jose David Montesino hoyos.</h6>
                    <h6 class="text-gradient text-success" id="animate-text3">Instructor Guia</h6>
                    <ul class="d-flex flex-row ms-n3 nav">
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                          <i class="fab fa-facebook text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                          <i class="fab fa-twitter text-lg opacity-8"></i>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                          <i class="fab fa-github text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                          <i class="fab fa-youtube text-lg opacity-8"></i>
                        </a>
                      </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card mx-3 my-2 col-lg-2 col-md-6">
              <div class="card card-blog card-plain">
                <div class="position-relative">
                    <a class="d-block">
                        <img src="{{ asset('img/imgmain/team-3.jpg') }}" alt="img-blur-shadow" class="mt-2 img-fluid shadow border-radius-lg">
                    </a>
                </div>
                <div class="card-body px-1 pt-3">
                <h6 class="text-gradient text-dark mb-2 text-xxl text-center" id="animate-text3">Diana zuleyi cruz gónzales.</h6>
                    <h6 class="text-gradient text-success" id="animate-text3">Instructora Lider</h6>
                    <ul class="d-flex flex-row ms-n3 nav">
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                          <i class="fab fa-facebook text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                          <i class="fab fa-twitter text-lg opacity-8"></i>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                          <i class="fab fa-github text-lg opacity-8"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                          <i class="fab fa-youtube text-lg opacity-8"></i>
                        </a>
                      </li>
                  </ul>
                </div>
              </div>
            </div>


          </div>
        </div>
   </section>
    
  </div>


</body>

@endsection


