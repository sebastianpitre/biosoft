@extends('layouts.panel')

@section('content')
@include('includes.panel.topnav', ['title' => 'Mostar aves'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body ">
                        <h4 class="mb-4">Informacion de la especie </h4>
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 text-center">
                            <img class="w-100 border-radius-lg shadow-lg mx-auto" src="{{ asset('imagenes/aves/' . $ave->imagen) }}" alt="{{ $ave->nombre_comun }}">
                            </div>
                            <div class="col-lg-5 mx-auto">
                                <h3 class="mt-lg-0 mt-4">{{ $ave->nombre_comun }}</h3>
                                <h5 class=" text-success"><em>{{ $ave->nombre_cientifico }}</em></h5>
                                <h6>{{ __('Total de avistamientos:') }} <span class="text-info">{{ $totalAvistamientos }}</span></h6>
                               
                                
                                <hr class="horizontal dark">
                                <h6 class="mb-0 font-weight-bold">Nuevo avistamiento</h6>
                                <div class="row mt-4">
                                    <div class="col-lg-4 mt-lg-0 mt-2">
                                    <form method="POST" action="{{ route('avistamientos.store') }}">
                                    @csrf
                                        <input type="hidden" name="ave_id" value="{{ $ave->id }}">
                                        <label for="area_id">Área</label>
                                        <select class="form-control" id="area_id" name="area_id" required>
                                            <option value="">Selec un área</option>
                                            @foreach ($areas as $area)
                                                <option value="{{ $area->id }}" {{ old('area_id') == $area->id ? 'selected' : '' }}>{{ $area->nombre }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                        <div class="col-lg-4 mt-lg-0 mt-2">
                                        <label>Fecha</label>
                                        <input class="form-control" type="date" id="fecha" name="fecha" value="{{ old('fecha') }}" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Cantidad</label>
                                            <input class="form-control" placeholder="0" type="number" id="numero_avistamientos" name="numero_avistamientos" value="{{ old('numero_avistamientos') }}" required>
                                        </div>
                                        </div>
                                        <div class="col-8 mt-3 mx-auto text-center text-end">
                                            <button class="btn btn-success mb-0" type="submit" href="#"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar</button>

                                        </div>
                                    </form>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Filtrar por año') }}</div>
                        <div class="card-body">
                            <form method="GET" action="{{ route('aves.show', $ave->id) }}">
                                <div class="form-group">
                                    <label for="year">{{ __('Año') }}</label>
                                    <select name="year" id="year" class="form-control">
                                        <option value="">{{ __('Seleccione un año') }}</option>
                                        @foreach($years as $year)
                                            <option value="{{ $year->year }}" {{ request('year') == $year->year ? 'selected' : '' }}>{{ $year->year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">{{ __('Filtrar') }}</button>
                                <a href="{{ route('aves.show', $ave->id) }}" class="btn btn-link">{{ __('Quitar filtro') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered boder-radius">
                            <thead class="text-center bg-gradient-success text-white">
                                <tr>
                                    <th>{{ __('Área') }}</th>
                                    <th>{{ __('Avistamientos') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($areas as $area)
                                    <tr>
                                        <td class="fw-bold">{{ $area->nombre }}</td>
                                        <td class="fw-bold  align-middle text-center area-cell" data-area="{{ $area->id }}" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $area->nombre }}">
                                            <div class="d-flex align-items-center justify-content-center">
                                                @if(request('year'))
                                                    @foreach($avistamientosPorArea as $avistamiento)
                                                        @if($avistamiento['area_id'] == $area->id)
                                                            {{ $avistamiento['total'] }}
                                                        @endif
                                                    @endforeach
                                                @else
                                                    {{ $avistamientosPorArea->where('area_id', $area->id)->first()['total'] ?? 0 }}
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                <tr>
                                    <td class="fw-bold text-center">Total de avistamientos</td>
                                    <td class="fw-bold  align-middle text-center area-cell" href="javascript:;" class="w-100 text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Total de avistamientos">
                                        <div class="d-flex align-items-center justify-content-center">
                                            @if(request('year'))
                                                {{ $totalAvistamientosAnio }}
                                            @else
                                                {{ $totalAvistamientos }}
                                            @endif
                                        </div>
                                    </td>
                                </tr>

       
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
