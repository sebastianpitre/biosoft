
@extends('layouts.panel')

<!-- Incluir jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Incluir jQuery UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

@section('CSS')
<link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection



@section('content')
@include('includes.panel.topnav', ['title' => 'Avistamientos'])
<div class="container-fluid py-4">
    <div class="d-sm-flex justify-content-between">
    <div>

    </div>
    <div class="d-flex">
        <a href="{{ route('avistamientos.pdf', ['ave_id' => $ave_id, 'area_id' => $area_id, 'year' => $year]) }}" class="btn btn-icon btn-white ms-2 export" data-type="csv" type="button">
            <span class="btn-inner--icon"><i class="fas fa-file-pdf"></i></span>
            <span class="btn-inner--text">Exportar PDF</span>
        </a>
        <a href="{{ route('exportar.avistamientos', ['ave_id' => $ave_id, 'area_id' => $area_id, 'year' => $year]) }}" class="btn btn-icon btn-white ms-2 export" data-type="csv" type="button">
            <span class="btn-inner--icon"><i class="ni ni-archive-2"></i></span>
            <span class="btn-inner--text">Exportar CSV</span>
        </a>

    </div> 
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h3>Avistamientos</h3>
                </div>
                <div class="card-body">
                <form method="GET" action="{{ route('avistamientos.index') }}">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <label for="ave_id">Seleccionar especie</label>
                            <input type="text" class="form-control" name="nombre_comun" id="nombre_comun" placeholder="Escriba el nombre común del ave">
                            <input type="hidden" name="ave_id" id="ave_id" value="{{ $ave_id }}">

                            @section('js')
                                <script>
                                    $(function() {
                                        // Configurar la función de autocompletado
                                        $("#nombre_comun").autocomplete({
                                            source: function(request, response) {
                                                $.ajax({
                                                    url: "{{ route('buscar-aves') }}",
                                                    data: {
                                                        term: request.term
                                                    },
                                                    dataType: "json",
                                                    success: function(data) {
                                                        response($.map(data, function(ave) {
                                                            return {
                                                                label: ave.nombre_comun,
                                                                value: ave.nombre_comun,
                                                                id: ave.id
                                                            };
                                                        }));
                                                    }
                                                });
                                            },
                                            minLength: 2,
                                            select: function(event, ui) {
                                                // Actualizar el campo oculto con el ID de la especie seleccionada
                                                $("#ave_id").val(ui.item.id);
                                            }
                                        });
                                    });
                                </script>
                            @endsection

                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="area_id">Seleccionar área</label>
                            <select class="form-control" name="area_id" id="area_id">
                                <option value="">Seleccionar área</option>
                                @foreach ($areas as $area)
                                <option value="{{ $area->id }}" {{ $area_id == $area->id ? 'selected' : '' }}>
                                    {{ $area->nombre }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="year">Seleccionar año</label>
                            <select class="form-control" name="year" id="year">
                                <option value="">Seleccionar año</option>
                                @foreach ($years as $y)
                                <option value="{{ $y->year }}" {{ $year == $y->year ? 'selected' : '' }}>
                                    {{ $y->year }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="">

                            <button type="submit" class="align-items-end btn bg-gradient-success">Filtrar</button>
                            <a href="{{ route('avistamientos.index') }}" class="btn btn-link">{{ __('Quitar filtro') }}</a>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
    
    <div class="card mt-4">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-md-12">
                @if ($ave_id)
                    <h4>Avistamientos de la especie</h4>
                @elseif ($area_id)
                    <h4>Avistamientos en {{ $area->nombre }}</h4>
                @elseif ($year)
                    <h4>Avistamientos en el año {{ $year }}</h4>
                @else
                    <h4>Avistamientos</h4>
                @endif
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                   <div class="table-responsive p-0">
                        @if(!empty($avistamientos))
                            <table id="avistamiento" class="table align-items-center justify-content-center mb-0 ">
                                <thead>
                                    <tr  class="text-center">
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder text-center opacity-7 ps-4">Especie</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder text-center opacity-7 ps-4">Área</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder text-center opacity-7 ps-4">N° avistamiento</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder text-center opacity-7 ps-4">Fecha</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder text-center opacity-7 ps-4">Registrado por</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($avistamientos as $avistamiento)
                                    <tr class="text-center">
                                        <td>{{ $avistamiento->ave->nombre_comun }}</td>
                                        <td>{{ $avistamiento->area->nombre }}</td>
                                        <td>{{ $avistamiento->numero_avistamiento }}</td>
                                        <td>{{ $avistamiento->fecha }}</td>
                                        <td>{{ $avistamiento->nombre_usuario }}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        @else
                            <p>No se encontraron resultados para esta búsqueda.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
        <div class="d-flex justify-content-center">
          {{ $avistamientos->appends(['ave_id' => $ave_id, 'area_id' => $area_id, 'year' => $year])->links() }}

        </div>
        </div>
    </div> 
</div>
@endsection 


