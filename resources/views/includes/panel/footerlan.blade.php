<footer class="footer border-top pt-5 mt-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-2 mb-4 ms-auto">
                <div>
                    <a href="index.html">
                    <img src="{{ asset('img/imgmain/logo-bio.svg') }}" class="mb-3" alt="main_logo" style="width:40px; margin-left:32px">
                    </a>
                    <h5 class="font-weight-bolder mb-4"><span class="text-dark font-weight-bold"><span class="text-success">Bio</span>Software</span></h5>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Contacto</h6>
                    <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                        <a class="nav-link" href="" target="_blank">
                        Centro Biotecnológico del Caribe (CBC). 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" target="_blank">
                        Km 7 via la paz 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" target="_blank">
                        Valledupar - Cesar
                        </a>
                    </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Paginas</h6>
                    <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">
                        Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome.especies') }}">
                        Explorar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome.learm') }}">
                        Aprender más
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome.nosotros') }}">
                        Acerca de
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mb-4 d-flex flex-column justify-content-center align-items-center">
                <h6 class="text-sm text-success">Eres usuario o administrador</h6>
                <a href="{{ route('login') }}" class="btn btn-sm bg-gradient-success mb-0 me-1 mt-2 mt-md-0">Iniciar Sesion</a>
            </div>

        </div>
    </div>
</footer>
