
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('welcome') }}" target="_blank">
                <img src="{{ asset('img/logo.svg') }}" class="navbar-brand-img h-100" alt="main_logo">
            </a>
            </div>
            <hr class="horizontal dark mt-0">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                @can('home')
                <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
                </li>
                @endcan

                @can('aves')
                <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'aves' ? 'active' : '' }}" href="{{ route('aves') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-dove text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Aves</span>
                </a>
                </li>
                @endcan

                @can('avistamientos.index')
                <li class="nav-item">
                <a class="nav-link  {{ Route::currentRouteName() == 'avistamientos.index' ? 'active' : '' }}" href="{{ route('avistamientos.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-eye text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Avistamientos</span>
                </a>
                </li>
                @endcan
                
                <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'perfil' ? 'active' : '' }}" href="{{ route('perfil') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profil</span>
                </a>
                </li>
                @can('usuarios')
                <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'usuarios' ? 'active' : '' }}" href="{{ route('usuarios') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-users text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Usuarios</span>
                </a>
                </li>
                @endcan
            </ul>
        </div>
      </div>
    </div>
  </aside>
