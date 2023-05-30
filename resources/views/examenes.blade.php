<x-app-layout>
    @include('layouts.navigation')
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-warning text-center py-4 rounded">
                        <h1 class="text-dark">EXÁMENES</h1>
                    </div>
                    <div class="d-flex justify-content-center align-items-center py-4 bg-warning">
                        <div class="col-sm-4">
                            <div class="card text-dark bg-light text-center">
                                <h5 class="card-header">Simulacro de Examen</h5>
                                <div class="card-body">
                                    <p class="card-text">Examen de todos los temas, de 50 preguntas que se asemeja al
                                        examen oficial</p>
                                    <a href="#" class="btn btn-outline-dark">Realizar Simulacro</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card text-white bg-dark text-center">
                                <h5 class="card-header">Simulacro Negro</h5>
                                <div class="card-body">
                                    <p class="card-text">Examen de todos los temas, de 50 preguntas, las cuales son las
                                        que más fallan nuestros usuarios</p>
                                    <a href="#" class="btn btn-outline-warning">Realizar Simulacro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($capitulos as $capitulo)
                        <div class="bg-secondary text-white p-4 my-4 text-center rounded">
                            <h2 class="mb-3">Capítulo {{ $loop->iteration }} : {{ $capitulo->nombre }}</h2>
                            <div class="row">
                                @foreach ($capitulo->bloques as $bloque)
                                    <div class="col-12 col-md-6 mb-4">
                                        <div class="card bg-dark text-white h-100 position-relative">
                                            <div class="card-header py-2">
                                                <h5 class="mb-0">Bloque {{ $loop->iteration }} : {{ $bloque->nombre }}</h5>
                                            </div>
                                            <div class="card-body text-left px-4">
                                                @foreach ($bloque->temas as $tema)
                                                    <div
                                                        class="bg-secondary-dark text-white mb-2">· {{ $tema->nombre }}</div>
                                                @endforeach
                                            </div>
                                            <div
                                                class="card-footer bg-dark text-center position-absolute bottom-0 start-0 end-0">
                                                <a class="btn btn-outline-warning"
                                                   href="{{ route('test.realizar', $bloque->id) }}">Realizar Test</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-footer/>
