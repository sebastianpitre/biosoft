@extends('layouts.panel')

@section('content')
@include('includes.panel.topnav', ['title' => 'Crear aves'])
<!-- <div class="container-fluid py-4">
      <div class="row">
        <div class="col-10 mx-auto">
            <form method="POST" action="{{ route('aves.store') }}" enctype="multipart/form-data">
               @csrf
                <div class="card mb-4">
                    <div class="card-header pb-4">
                        <div class="row ">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Agregar nueva ave</h6>
                        </div>
                        <div class="col-6 text-end">
                        <button class="btn btn-success mb-0" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar</button>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nombre común</label>
                            <input class="form-control" type="text" name="nombre_comun" id="nombre_comun" placeholder="Nombre común" value="{{ old('nombre_comun') }}">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nombre cientifíco</label>
                            <input class="form-control" type="text" name="nombre_cientifico" id="nombre_cientifico" placeholder="Nombre cientifíco" value="{{ old('nombre_cientifico') }}">
                        </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Imagen</label>
                            <input class="form-control" type="file" name="imagen" id="imagen">
                        </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </form>    
        </div>
    </div>
      
</div>   -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-10 mx-auto">
            <form method="POST" action="{{ route('aves.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card mb-4">
                    <div class="card-header pb-4">
                        <div class="row ">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Agregar nueva ave</h6>
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-success mb-0" type="submit">
                                    <i class="fas fa-save"></i>&nbsp;&nbsp;Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 text-center position-relative">
                                <div class="image-container position-relative">
                                    <img class="border-radius-lg shadow-lg mx-auto d-block img-fluid ave-image" src="{{ asset('img/Image-upload.svg') }}" alt="">
                                    <div class="col-8  mx-auto">
                                        <label for="imagen" class="btn btn-success mt-4">
                                        <i class="fas fa-camera"></i>&nbsp;&nbsp;Subir imagen
                                        </label>
                                        <input type="file" name="imagen" id="imagen" style="display:none">
                                    </div>
                                </div>
                            </div>
                            <script>
                                const fileInput = document.getElementById('imagen');
                                const profileImage = document.querySelector('.ave-image');

                                fileInput.addEventListener('change', () => {
                                    const file = fileInput.files[0];
                                    if (file) {
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        profileImage.src = e.target.result;
                                    };
                                    reader.readAsDataURL(file);
                                    }
                                });
                            </script>
                            <div class="col-lg-5 mx-auto"> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre_comun" class="form-control-label">Nombre común</label>
                                            <input class="form-control" type="text" name="nombre_comun" id="nombre_comun" placeholder="Nombre común" value="{{ old('nombre_comun') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre_cientifico" class="form-control-label">Nombre científico</label>
                                            <input class="form-control" type="text" name="nombre_cientifico" id="nombre_cientifico" placeholder="Nombre científico" value="{{ old('nombre_cientifico') }}">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="descripcion" class="form-control-label">Descripción</label>
                                            <textarea class="form-control" type="text-area" name="descripcion" id="descripcion" placeholder="Descripción" value="{{ old('descripcion') }}">{{ old('descripcion') }}</textarea>
                                        </div>
                                    </div>
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