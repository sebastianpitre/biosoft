@extends('layouts.main')

@section('content')


<body class="about-us bg-gray-100">

    <header>
        <div class="page-header min-vh-30" style="background-image: url(&quot;{{ asset('img/centro/ganaderia.jpg') }}&quot;); background-position-y: 49%">
        <span class="mask bg-dark opacity-4"></span>
        <div class="container">
        <div class="row">
        <div class="col-lg-7 mx-auto text-white text-center"><br><br><br>
        <h3 class="text-white" id="animate-text1">Descubre las aves que habitan nuestro centro</h3>
        </div>
        </div>
        </div>
        </div>
    </header>

    
    <section class="pb-5 position-relative mt-5 mx-n3">
    <div class="container card py-5">
        <div class="row">
            <!-- Columna para la imagen -->
            <div class="col-md-6 my-auto">
                <div class="card p-0 rounded-3 move-on-hover">
                    <img src="{{ asset('imagenes/aves/' . $ave->imagen) }}" alt="fotografia" class="img-fluid  shadow rounded-3">
                </div>
            </div>
            <!-- Columna para los detalles del ave -->
            <div class="col-md-6 mb-md-0 mb-4">
                <h3>{{ $ave->nombre_comun }}</h3>
<p>Nombre Común.</p>
                <h5 class="text-success font-italic">{{ $ave->nombre_cientifico }}</h5>
                <p>Nombre Científico.</p>
                
                <h6 class="mb-1">Descripción.</h6>
                <p class="font-weight-bold"><small>{{ $ave->descripcion }}</small></p>
                
                <!-- Campo oculto para el nombre científico del ave -->
                <input type="text" id="bird-name" value="{{ $ave->nombre_cientifico }}" name="bird-name" style="display: none;">
                
                <!-- Div para mostrar el reproductor de audio -->
                <div id="results">
                  <img src="{{ asset('img/cargando.gif') }}" alt="">
                </div>
                
                <!-- Script para buscar y reproducir automáticamente el audio -->
                <script>
                    // Espera a que la página se cargue completamente
                    window.addEventListener('load', () => {
                        // Llama a la función para buscar y reproducir el audio de ave automáticamente
                        searchAndPlayAudio();
                    });
                    
                    // Función para buscar y reproducir el audio de ave
                    function searchAndPlayAudio() {
                        const birdName = encodeURIComponent(document.getElementById('bird-name').value);
                        const url = `https://xeno-canto.org/api/2/recordings?query=${birdName}`;

                        // Realiza una solicitud de búsqueda utilizando la API de Xeno-canto
                        fetch(url)
                            .then(response => response.json())
                            .then(data => {
                                // Verifica si se encontraron grabaciones
                                if (data.recordings.length > 0) {
                                    // Toma la primera grabación de la lista
                                    const recording = data.recordings[0];
                                    
                                    // Crea un reproductor de audio
                                    const audio = document.createElement('audio');
                                    
                                    // Establece los controles y autoplay para reproducir automáticamente
                                    audio.setAttribute('controls', '');
                                    audio.setAttribute('autoplay', '');
                                    
                                    // Establece la fuente del audio a la URL de la grabación
                                    const source = document.createElement('source');
                                    source.setAttribute('src', recording.file);
                                    audio.appendChild(source);
                                    
                                    // Agrega el reproductor de audio a un elemento div con id 'results'
                                    const resultsDiv = document.getElementById('results');
                                    resultsDiv.innerHTML = '';
                                    resultsDiv.appendChild(audio);
                                } else {
                                    // Si no se encuentran grabaciones, muestra un mensaje en 'results'
                                    const resultsDiv = document.getElementById('results');
                                    resultsDiv.innerHTML = 'No se encontraron resultados.';
                                }
                            })
                            .catch(error => {
                                // Si ocurre un error, muestra un mensaje de error en 'results'
                                const resultsDiv = document.getElementById('results');
                                resultsDiv.innerHTML = `Ha ocurrido un error: ${error.message}`;
                            });
                    }
                </script>
            </div>
        </div>
    </div>
</section>

    
    @include('includes.panel.footerlan')


</body>

@endsection
