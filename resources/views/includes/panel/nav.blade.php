<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">



<!-- Navbar Transparent -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
      <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid px-0">
          <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('welcome') }}" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
            <img class="material-icons w-15 ps-1" src="{{ asset('img/imgmain/logo-bio.svg') }}" alt="">
            <span class="text-dark font-weight-bold"><span class="text-success">Bio</span>Software</span>
          </a>
          <button class="navbar-toggler shadow-none ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">

              <li class="nav-item dropdown dropdown-hover mx-2">
                <a href="{{ route('welcome') }}" class="font-weight-bolder nav-link ps-2 d-flex cursor-pointer align-items-center">
                  <i class="material-icons opacity-6 me-2 text-md"></i>
                  Inicio
                </a>
              </li>

              <li class="nav-item dropdown dropdown-hover mx-2">
                <a href="{{ route('welcome.especies') }}" class="font-weight-bolder nav-link ps-2 d-flex cursor-pointer align-items-center">
                  <i class="material-icons opacity-6 me-2 text-md"></i>
                  Explorar
                </a>
              </li>

              <li class="nav-item dropdown dropdown-hover mx-2">
                <a href="{{ route('welcome.learm') }}" class="font-weight-bolder nav-link ps-2 d-flex cursor-pointer align-items-center">
                  <i class="material-icons opacity-6 me-2 text-md"></i>
                  Aprender más
                </a>
              </li>

              <li class="nav-item dropdown dropdown-hover mx-2">
                <a href="{{ route('welcome.nosotros') }}" class="font-weight-bolder nav-link ps-2 d-flex cursor-pointer align-items-center">
                  <i class="material-icons opacity-6 me-2 text-md"></i>
                  Acerca de
                </a>
              </li>

              <div class="row text-center mx-2">
                <div class="mx-auto">
                    <form action="{{ route('aves.search') }}" method="GET">
                        <div class="input-group input-group-dynamic">
                            <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input class="form-control" placeholder="Buscar aves" type="text" name="q" >
                        </div>
                    </form>
                </div> 
              </div>


               <!-- <div class="row text-center mx-2">
                <div class="mx-auto">
                  <div class="input-group input-group-dynamic">
                    <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input class="form-control" placeholder="Buscar aves" type="text">
                  </div>
                </div>
              </div> 
           -->
              

              <li class="nav-item my-auto ms-3 ms-lg-0">

                <a href="{{ route('login') }}" class="btn btn-sm bg-gradient-success mb-0 me-1 mt-2 mt-md-0">Iniciar Sesion</a>

              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      </div></div></div>
    <!-- End Navbar -->
