@extends('layouts.panel')

@section('content')
@include('includes.panel.topnav', ['title' => 'Perfil'])
    <div class="card shadow-lg mx-4 mt-4">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <form method="POST" action="{{ route('perfil.update') }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="avatar avatar-xl position-relative">
                @if ($user->imagen)
                  <img src="{{ asset('imagenes/avatars/' . $user->imagen) }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" id="profile_image">
                  @else
                  <img src="{{ asset('imagenes/avatars/user.jpg') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" id="profile_image">
                @endif
                  
    

                  <label for="file-input" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Image" aria-label="Edit Image"></i>
                      <span class="sr-only">Edit Image</span>
                      <input id="file-input" style="display:none">
                  </label>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select an avatar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                        <div class="modal-body">
                            <div class="row">
                            @foreach($avatars as $avatar)
                                <div class="col-md-3">
                                    <label for="{{ $avatar }}">
                                        <img src="{{ asset('imagenes/avatars/'.$avatar) }}" class="img-thumbnail" alt="{{ $avatar }}">
                                    </label>
                                    <input type="radio" name="imagen" id="{{ $avatar }}" value="{{ $avatar }}" class="form-check-input" {{ Auth::user()->avatar == $avatar ? 'checked' : '' }}>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn bg-gradient-success">Guardar</button>
                        </div>
                    </div>
                  </div>
                </div>
            </from>    
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
              {{ auth()->user()->name }}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                @if(auth()->user()->roles->count() > 0)
                    {{ auth()->user()->getRoleNames()->first() }}
                @else
                    Sin rol asignado
                @endif
                </p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
              <form role="form" method="POST" action="{{ route('perfil.update') }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card-header pb-0">
                      @if(session('notificacion'))
                        <div class="alert alert-success alert-dismissible fade show text-white mt-3" role="alert">
                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            {{ session('notificacion')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      @endif
                  <div class="d-flex align-items-center">
                      <p class="mb-0">Editar perfil</p>
                      <button type="submit" class="btn btn-success btn-sm ms-auto">Guardar</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="text-uppercase text-sm">Información del usuario</p>
                        <div class="row">
                        <div class="form-group">
                        </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nombre</label>
                                <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name) }}">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Apellido</label>
                                <input class="form-control" type="text" id="apellido" name="apellido" value="{{ old('apellido', $user->apellido) }}">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Correo electronico</label>
                                <input class="form-control" type="text" id="email" name="email" value="{{ old('email', $user->email) }}">
                              </div>
                            </div>
                          
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Cambiar contraseña</p>
                       
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password" class="form-control-label">Contraseña</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" aria-label="Password"  name="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password_confirmation" class="form-control-label">Confirmar contraseña</label>
                            <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmar contraseña" aria-label="Password" name="password_confirmation">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        </div>
                  </div>
              </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="{{ asset('img/centro/plaza.jpg') }}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                @if ($user->imagen)
                 <a href="">
                    <img src="{{ asset('imagenes/avatars/' . $user->imagen) }}" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                  @else
                  <a href="">
                    <img src="{{ asset('imagenes/avatars/user.jpg') }}" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                  
                @endif
                  
                </div>
              </div>
            </div>
            
            <div class="card-body pt-2">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">  
                  </div>
                </div>
              </div>
              <div class="text-center mt-4">
                <h5>
                {{ auth()->user()->name }}
                </h5>
                <div class="h6 font-weight-300">
                   <i class="far fa-envelope p-1"></i>{{ auth()->user()->email }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select an avatar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
            <img src="{{ asset('imagenes/avatars/avatar1.jpg') }}" class="img-thumbnail" alt="Avatar 1">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('imagenes/avatars/avatar9.jpg') }}" class="img-thumbnail" alt="Avatar 2">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('imagenes/avatars/avatar3.jpg') }}" class="img-thumbnail" alt="Avatar 3">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('imagenes/avatars/avatar6.jpg') }}" class="img-thumbnail" alt="Avatar 4">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('imagenes/avatars/avatar4.jpg') }}" class="img-thumbnail" alt="Avatar 4">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('imagenes/avatars/avatar8.jpg') }}" class="img-thumbnail" alt="Avatar 4">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('imagenes/avatars/avatar10.jpg') }}" class="img-thumbnail" alt="Avatar 4">
          </div>
          <div class="col-md-3">
            <img src="{{ asset('imagenes/avatars/avatar7.jpg') }}" class="img-thumbnail" alt="Avatar 4">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn bg-gradient-success">Guardar</button>
      </div>
    </div>
    </div>
    </div> -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select an avatar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{ route('perfil.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <div class="row">
            @foreach($avatars as $avatar)
                <div class="col-md-3">
                    <label for="{{ $avatar }}">
                        <img src="{{ asset('imagenes/avatars/'.$avatar) }}" class="img-thumbnail" alt="{{ $avatar }}">
                    </label>
                    <input type="radio" name="imagen" id="{{ $avatar }}" value="{{ $avatar }}" class="form-check-input" {{ Auth::user()->avatar == $avatar ? 'checked' : '' }}>
                </div>
            @endforeach
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn bg-gradient-success">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
