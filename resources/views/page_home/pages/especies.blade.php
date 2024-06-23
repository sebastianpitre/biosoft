@extends('layouts.main')

@section('content')

<body class="about-us bg-gray-100">

    <header>
        <div class="page-header min-vh-25" style="background-image: url(&quot;{{ asset('img/imgmain/especies1.jpg') }}&quot;); background-position-y: 28%">
        <span class="mask bg-dark opacity-4"></span>
        <div class="container">
        <div class="row">
        <div class="col-lg-7 mx-auto text-white text-center"><br><br><br>
        <h3 class="text-white" id="animate-text1">Listado de especies vistas en el CBC</h3>
        </div>
        </div>
        </div>
        </div>
    </header>
    <section class="card position-relative  mx-n3">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="card-header">
                        <h2>listado de aves</h2>
                    </div>
                <div class="card-body">

                    <div class="table-responsive p-0">
                        <table id="aves" class="table align-items-center justify-content-center mb-0">
                            <thead class="bg-success text-white">
                                <tr>
                                    <th></th>
                                <th class="col-md-2 text-uppercase text-xxs font-weight-bolder text-center">Foto</th>
                                <th class="text-uppercase text-xxs font-weight-bolder text-center ">Nombre Común</th>
                                <th class="text-uppercase text-xxs font-weight-bolder text-center ps-4">Nombre Científico</th>
                                <th class="text-uppercase text-xxs font-weight-bolder text-center ps-4">Avistamientos totales</th>
                                <th class="text-uppercase text-xxs font-weight-bolder text-center ps-4"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($aves as $ave)
                                <tr>
                                    <td>{{ $ave->id }}</td>
                                    <td>
                                    <div class="d-flex px-2">
                                    <a href="{{ route('especies.show', $ave->id) }}"><img src="{{ asset('imagenes/aves/'.$ave->imagen) }}" style="width: 120px; height:100px; border-radius:10px; " class=" me-3" alt="{{ $ave->nombre_comun }}"></a>
                                    </div>
                                    </td>

                                    <td class="text-sm font-weight-bold mb-0 text-capitalize text-center">{{ $ave->nombre_comun }}</td>
                                    <td class="text-sm font-weight-bold mb-0 text-capitalize text-center"><em>{{ $ave->nombre_cientifico }}</em></td>
                                    <td class="text-sm font-weight-bold mb-0 text-success text-center">{{ $ave->avistamientos_totales }}</td>
                                    <td class="align-middle  text-center">
                                    <a href="{{ route('especies.show', $ave->id) }}"><button type="button" class="btn btn-outline-success btn-sm mt-3">Ver</button>

                                        <!-- <a class="btn btn-link text-dark px-2 mb-0" href="{{ route('especies.show', $ave->id) }}"><i class="fas fa-eye"></i></a> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.panel.footerlan')


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
                        <script src="{{ asset('js/jsmain/tabla.js') }}"></script>
                        <script>
                        $(document).ready(function () {
                            $('#aves').DataTable();
                        });</script>
</body>

@endsection
