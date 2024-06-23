@extends('layouts.panel')

@section('content')
@include('includes.panel.topnav', ['title' => 'Editar usuario', 'active' => 'usuarios'])
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-10 mx-auto">
            <form role="form" method="POST" action="{{ route('usuarios.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="card mb-4">
                    <div class="card-header pb-4">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Editar usuario</h6>
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-success mb-0" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Actualizar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Name" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Apellido</label>
                                    <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" id="apellido" name="apellido" value="{{ old('apellido', $user->apellido) }}" required autocomplete="apellido" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Correo electrónico</label>
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" id="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role">Rol</label>
                                    <select name="role" id="role" class="form-control">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" {{ $user->hasRole($role) ? 'selected' : '' }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                             </div> 
                        </div>
                        <hr class="horizontal dark">
                        <div class="row">
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
                </div>
            </form>    
        </div>
    </div>
</div>

@endsection