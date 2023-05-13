<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="d-flex justify-content-center align-items-center bg-warning">
                    <h1 class="text-center text-dark">EXÁMENES</h1>
                </div>
                <div class="d-flex justify-content-center align-items-center py-4 bg-warning">
                    <div class="col-sm-4 d-flex justify-content-around align-items-center hover">
                        <div class="card w-75 text-dark bg-light text-center">
                            <h5 class="card-header">Simulacro de Examen</h5>
                            <div class="card-body">
                                <p class="card-text">Examen de todos los temas, de 50 preguntas que se asemeja al examen oficial</p>
                                <a href="#" class="btn btn-outline-dark">Realizar Simulacro</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex justify-content-around align-items-center hover">
                        <div class="card w-75 text-white bg-dark text-center">
                            <h5 class="card-header">Simulacro Negro</h5>
                            <div class="card-body">
                                <p class="card-text">Examen de todos los temas, de 50 preguntas, las cuales son las que mas fallan nuestros usuarios</p>
                                <a href="#" class="btn btn-outline-warning">Realizar Simulacro</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    @foreach ($capitulos as $capitulo)
                        <div class="bg-secondary text-white text-center pb-5">
                                <h2>{{ $capitulo->nombre }}</h2>
                                @foreach ($capitulo->bloques as $bloque)
                                    <div class="container bg-dark text-white mb-3 border border-5 rounded border-warning">
                                        <h4>{{ $bloque->nombre }}</h4>
                                        <div class="d-flex justify-content-around flex-wrap">
                                            @foreach ($bloque->temas as $tema)
                                                <div class="col col-md-4 card text-center border-dark mb-3 hover text-dark"  style="width: 18rem;">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3">{{ $tema->nombre }}</h5>
                                                        <a href="#" class="btn btn-outline-secondary">Realizar Test</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    @endforeach
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-footer/>