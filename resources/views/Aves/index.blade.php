@extends('layouts.panel')

@section('CSS')
<link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
@include('includes.panel.topnav', ['title' => 'Aves'])
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-4">
                <div class="row ">
                  <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0">Listado de especies</h6>
                  </div>
                  @can('aves.create')
                  <div class="col-6 text-end">
                    <a class="btn btn-success mb-0" href="{{ route('aves.create') }}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Nueva Ave</a>
                  </div>
                  @endcan

                  @if(session('notificacion'))
                    <div class="alert alert-success alert-dismissible fade show text-white mt-3" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        {{ session('notificacion')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  @endif
                </div>
            </div>
            <div class="card-body">

              <div class="table-responsive p-0">
                <table id="aves" class="table align-items-center justify-content-center mb-0">
                    <thead>
                        <tr>
                            <th></th>
                        <th class="col-md-2 text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">Foto</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">Nombre Común</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-4">Nombre Científico</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-4">Avistamientos totales</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($aves as $ave)
                          <tr>
                              <td>{{ $ave->id }}</td>
                              <td>
                                  <div class="d-flex px-2">
                                      <img src="{{ asset('imagenes/aves/'.$ave->imagen) }}" style="width: 120px; height:100px; " class="avatar me-3" alt="{{ $ave->nombre_comun }}">
                                  </div>
                              </td>
                              <td class="text-sm font-weight-bold mb-0 text-capitalize text-center">{{ $ave->nombre_comun }}</td>
                              <td class="text-sm font-weight-bold mb-0 text-capitalize text-center"><em>{{ $ave->nombre_cientifico }}</em></td>
                              <td class="text-sm font-weight-bold mb-0 text-capitalize text-center">{{ $ave->avistamientos_totales }}</td> 
                              <td class="align-middle  text-center">

                                @can('aves.show')
                                <a class="btn btn-link text-dark px-2 mb-0" href="{{ route('aves.show', $ave->id) }}"><i class="fas fa-eye"></i></a>
                                @endcan

                                @can('aves.edit')
                                <a class="btn btn-link text-dark px-2 mb-0" href="{{ route('aves.edit', $ave->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>
                                @endcan
                                
                                @can('aves.destroy')
                                <a class="btn btn-link text-danger text-gradient px-2 mb-0" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $ave->id }}" href="#">
                                  <i class="far fa-trash-alt me-2"></i>
                                </a>
                                @endcan

                                  <div class="modal fade" id="deleteModal{{ $ave->id }}" tabindex="-1" aria-labelledby="deleteModal{{ $ave->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered align-items-center">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="deleteModal{{ $ave->id }}Label">Confirmar eliminación</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          ¿Estás seguro que deseas eliminar esta ave?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
                                          <form id="delete-form-{{ $ave->id }}" action="{{ route('aves.destroy', $ave->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn bg-gradient-danger">Eliminar</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>





                              </td>
                          </tr>
                      @endforeach
                    </tbody>

                </table>

              </div>
            </div>
            <!-- <div class="card-footer text-muted">
              2 days ago
            </div> -->
            @section('js')
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
                <script>
                  $(document).ready(function () {
                      $('#aves').DataTable();
                  });
                </script>

            @endsection
          </div>
        </div>
    </div>

</div>
@endsection
