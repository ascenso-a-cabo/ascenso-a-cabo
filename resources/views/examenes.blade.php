<x-app-layout>
    @include('layouts.navigation')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="d-flex justify-content-center align-items-center bg-warning">
                    <h1 class="text-center text-dark">EXÁMENES</h1>
                </div>
                <div class="d-flex justify-content-center align-items-center py-4 bg-warning">
                    <div class="col-sm-4 d-flex justify-content-around align-items-center hover">
                        <div class="card w-75 text-dark bg-light text-center">
                            <h5 class="card-header">Simulacro de Examen</h5>
                            <div class="card-body">
                                <p class="card-text">Examen de todos los temas, de 50 preguntas que se asemeja al examen
                                    oficial</p>
                                <a href="#" class="btn btn-outline-dark">Realizar Simulacro</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex justify-content-around align-items-center hover">
                        <div class="card w-75 text-white bg-dark text-center">
                            <h5 class="card-header">Simulacro Negro</h5>
                            <div class="card-body">
                                <p class="card-text">Examen de todos los temas, de 50 preguntas, las cuales son las que
                                    mas fallan nuestros usuarios</p>
                                <a href="#" class="btn btn-outline-warning">Realizar Simulacro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    @foreach ($capitulos as $capitulo)
                        <div class="bg-secondary text-white">
                            <h2>Capitulo: {{ $capitulo->nombre }}</h2>
                            @foreach ($capitulo->bloques as $bloque)
                                <h4>Bloque: {{ $bloque->nombre }}</h4>
                                <ul style="list-style-type: disc;">
                                    @foreach ($bloque->temas as $tema)
                                        <li style="margin: 0;">{{ $tema->nombre }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn btn-danger"><a class="text-white"
                                                                                href="{{ route('test.realizar', $bloque->id) }}">Realizar
                                        Test</a></button>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-footer/>
