@extends('layouts.panel')

@section('content')
@include('includes.panel.topnav', ['title' => 'Dashboard'])

    @section('CSS')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css' rel='stylesheet' />
    @endsection

    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Avistamientos</p>
                        <h5 class="font-weight-bolder">
                        {{ $avistamientosTotales }}
                        </h5>
                        <p class="mb-0">
                        Total
                        </p>
                    </div>
                    </div>
                    <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-info shadow-success text-center rounded-circle">
                        <i class="fas fa-eye text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Especies</p>
                        <h5 class="font-weight-bolder">
                        {{ $aveCount }}
                        </h5>
                        <p class="mb-0">
                        Total
                        </p>
                    </div>
                    </div>
                    <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                        <i class="fas fa-crow text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Areas</p>
                        <h5 class="font-weight-bolder">
                        7
                        </h5>
                        <p class="mb-0">
                        Total
                        </p>
                    </div>
                    </div>
                    <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                        <i class="fas fa-globe-americas text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                    <div class="numbers">
                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Usuarios</p>
                        <h5 class="font-weight-bolder">
                        {{ $userCount }}
                        </h5>
                        <p class="mb-0">
                        Total
                        </p>
                    </div>
                    </div>
                    <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                        <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Avistamientos por area</h6>
                <p class="text-sm mb-0">
                    <i class="fa fa-arrow-up text-success"></i>
                    Total
                </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                    
                    
                </div>
                
            </div>
            </div>
            <div class="col-lg-5">
                <div class="card card-carousel overflow-hidden h-100 p-0">
                    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner border-radius-lg h-100">
                            @foreach($aves as $ave)
                            <div class="carousel-item h-100 @if($loop->first) active @endif" style="background-image: url('{{ asset('imagenes/aves/'.$ave->imagen) }}');
                                background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">{{ $ave->nombre_comun }}</h5>
                                    <p><em>{{ $ave->nombre_cientifico }}</em></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Especies más vista</h6>
                            </div>
                        </div>
                        </div>
                    <div class="table-responsive">
                        <table class="table align-items-center ">
                            <tbody>
                            <tr>
                                @if($aveMayorAvistamientos)
                                    <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                        <img src="{{ asset('imagenes/aves/'.$aveMayorAvistamientos->imagen) }}" class="avatar avatar-xl  me-3 ">
                                        </div>
                                        <div class="ms-4">
                                        <p class="text-xs font-weight-bold mb-0">Nombre común:</p>
                                        <h6 class="text-sm mb-0">{{ $aveMayorAvistamientos->nombre_comun }}</h6>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <!-- <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Nombre cientifico</p>
                                        <h6 class="text-sm mb-0">{{ $aveMayorAvistamientos->nombre_cientifico }}</h6>
                                    </div> -->
                                    </td>
                                    <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Avistamientos:</p>
                                        <h6 class="text-sm mb-0 text-success">{{ $aveMayorAvistamientos->total_avistamientos }}</h6>
                                    </div>
                                    </td>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Especies menos vista</h6>
                            </div>
                        </div>
                        </div>
                    <div class="table-responsive">
                        <table class="table align-items-center ">
                            <tbody>
                            <tr>
                                @if($aveMenorAvistamientos)
                                    <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                        <img src="{{ asset('imagenes/aves/'.$aveMenorAvistamientos->imagen) }}" class="avatar avatar-xl  me-3 ">
                                        </div>
                                        <div class="ms-4">
                                        <p class="text-xs font-weight-bold mb-0">Nombre común:</p>
                                        <h6 class="text-sm mb-0">{{ $aveMenorAvistamientos->nombre_comun }}</h6>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <!-- <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Nombre cientifico</p>
                                        <h6 class="text-sm mb-0">{{ $aveMenorAvistamientos->nombre_cientifico }}</h6>
                                    </div> -->
                                    </td>
                                    <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Avistamientos:</p>
                                        <h6 class="text-sm mb-0 text-danger"> {{ $aveMenorAvistamientos->total_avistamientos }}</h6>
                                    </div>
                                    </td>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
            <div class="card">
                <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Areas</h6>
                </div>
                <div class="card-body p-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                        <div class="icon icon-shape icon-sm me-3 bg-gradient-info shadow text-center">
                        <i class="fas fa-users text-white opacity-10"></i>
                        </div>
                        <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Antrópica</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                        <div class="icon icon-shape icon-sm me-3 bg-gradient-warning shadow text-center">
                        <i class="fas fa-fish text-white opacity-10"></i>
                        </div>
                        <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Acuicultura</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex align-items-center">
                        <div class="icon icon-shape icon-sm me-3 bg-gradient-success shadow text-center">
                        <i class="fas fa-paw text-white opacity-10"></i>
                        </div>
                        <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Esp. Menores</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                    <div class="d-flex align-items-center">
                        <div class="icon icon-shape icon-sm me-3 bg-gradient-danger shadow text-center">
                        <i class="fas fa-horse text-white opacity-10"></i>
                        </div>
                        <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Ganadería</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                    <div class="d-flex align-items-center">
                        <div class="icon icon-shape icon-sm me-3 bg-gradient-secondary shadow text-center">
                        <i class="fas fa-seedling text-white opacity-10"></i>
                        </div>
                        <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Vivero</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                    <div class="d-flex align-items-center">
                        <div class="icon icon-shape icon-sm me-3 bg-gradient-primary shadow text-center">
                        <i class="fas fa-tractor text-white opacity-10"></i>
                        </div>
                        <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Cultivo</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                    <div class="d-flex align-items-center">
                        <div class="icon icon-shape icon-sm me-3 bg-gradient-success shadow text-center">
                        <i class="fas fa-tree text-white opacity-10"></i>
                        </div>
                        <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark text-sm">Bosque</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-14 mx-auto">

                <div class="card" id="map" style="height: 400px; boder-radius: 30px;"></div>

            </div>
        </div>
    </div>
    @section('js')
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiamNhbWVsbzYyNSIsImEiOiJjbGR1enBwM24wNXRyM29ubzBjZmY5aXdvIn0.hzI9ZFtUSUhqIm_dWoSJrg';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/jcamelo625/clemt2qhk000601s4prht0a9e',
        center: [-73.234350, 10.400134],
        zoom: 14
        });

        var geojson = {
        "type": "FeatureCollection",
        "features": [
            {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [-73.239792, 10.407340]
            },
            "properties": {
                "type": "Antropica"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [-73.238472, 10.402830]
            },
            "properties": {
                "type": "Ganaderia"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [-73.239494, 10.404364]
            },
            "properties": {
                "type": "Acuicultura"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [-73.238536, 10.403799]
            },
            "properties": {
                "type": "Especies menores"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [-73.236235, 10.403190]
            },
            "properties": {
                "type": "Vivero"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [-73.234209, 10.403841]
            },
            "properties": {
                "type": "Cultivo"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [-73.229505, 10.397721]
            },
            "properties": {
                "type": "Bosque"
            }
            }
        ]
        };


        map.on('load', function() {
        map.addLayer({
            "id": "puntos-de-cultivo",
            "type": "circle",
            "source": {
            "type": "geojson",
            "data": geojson
            },
            "paint": {
            "circle-color": [
                "match",
                ["get", "type"],
                "Antropica", "#11cdef",
                "Ganaderia", "#f5365c",
                "Acuicultura", "#fb6340",
                "Especies menores", "#172b4d",
                "Vivero", "#f4f5f7",
                "Cultivo", "#5e72e4",
                "Bosque", "#2dce89",
                /* other */ "#ccc"
            ],
            "circle-radius": 6,
            "circle-stroke-width": 1,
            "circle-stroke-color": "#fff"
            }
        });
        });

    </script>
      <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
    
       <script type="text/javascript">
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);
        gradientStroke1.addColorStop(1, '#2dce89');
        gradientStroke1.addColorStop(0.2, 'rgba(45, 206, 137, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(45, 206, 137, 0)');

        // Obtener los totales de avistamientos de cada área en un arreglo
        var totales = {!! json_encode($avistamientosArea->pluck('total')) !!};

        // Crear la gráfica con los totales
        new Chart(ctx1, {
        type: "bar",
        data: {
            labels: ["Antropica", "Acuicultura", "Esp. Menores", "Ganadería", "Vivero", "Cultivo", "Bosque"],
            datasets: [{
            borderRadius: 5,
            label: "Avistamientos",
            backgroundColor: '#2dce89',
            borderWidth: 0,
            data: totales,
            maxBarThickness: 20
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                padding: 10,
                color: '#fbfbfb',
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#ccc',
                padding: 20,
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });
    </script>
@endsection


@endsection
