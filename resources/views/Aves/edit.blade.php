@extends('layouts.panel')

@section('content')
@include('includes.panel.topnav', ['title' => 'Editar aves'])
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-10 mx-auto">
            <form method="POST" action="{{ route('aves.update', $ave->id) }}" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               
                <div class="card mb-4">
                    <div class="card-header pb-4">
                        <div class="row ">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Editar ave</h6>
                        </div>
                        <div class="col-6 text-end">
                        <button class="btn btn-success mb-0" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar</button>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 text-center position-relative">
                                <div class="image-container position-relative">
                                    <img class="border-radius-lg shadow-lg mx-auto d-block img-fluid ave-image" src="{{ asset('imagenes/aves/' . $ave->imagen) }}" alt="">
                                    <label for="file-input" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                        <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Image" aria-label="Edit Image"></i>
                                        <span class="sr-only">Edit Image</span>
                                        <input type="file" name="imagen" id="imagen" style="display:none"  value="{{ $ave->imagen }}">
                                    </label>
                                </div>
                            </div>
                            <script>
                                const fileInput = document.getElementById('imagen');
                                const profileImage = document.querySelector('.ave-image');

                                document.querySelector('.fa-pen').addEventListener('click', () => {
                                    fileInput.click();
                                });

                                fileInput.addEventListener('change', () => {
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        profileImage.src = e.target.result;
                                    };
                                    reader.readAsDataURL(fileInput.files[0]);
                                });
                            </script>

                            <div class="col-lg-5 mx-auto"> 
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nombre común</label>
                                        <input class="form-control" type="text" name="nombre_comun" id="nombre_comun" placeholder="Nombre común" value="{{ old('nombre_comun', $ave->nombre_comun) }}">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nombre cientifíco</label>
                                        <input class="form-control" type="text" name="nombre_cientifico" id="nombre_cientifico" placeholder="Nombre cientifíco" value="{{ old('nombre_cientifico', $ave->nombre_cientifico) }}">
                                    </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Descripción</label>
                                        <textarea class="form-control" type="text-area" name="descripcion" id="descripcion" placeholder="Descripción" value="">{{ old('descripcion', $ave->descripcion) }}</textarea>
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