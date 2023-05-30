@php
    use App\Models\Estadistica;use Carbon\Carbon;
    $estadisticas = Estadistica::find(1);
    $fecha = Carbon::now();
    $fecha = $fecha->format('d/m/Y');
@endphp
<x-app-layout>
    @include('layouts.navigation')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-warning d-flex justify-content-center">
                    <h1 class="text-dark text-center">Bienvenido: {{ Auth::user()->name }}</h1>
                </div>
                <div class="d-flex justify-content-around align-items-center pt-4 pb-4 bg-warning form-floating">
                    <div>
                        <h1 class="text-dark">Fecha:</h1>
                        <h2 id="fecha">{{ $fecha }}</h2>
                    </div>
                    <div class="end-0">
                        <img src="img/aspaBorgona.gif" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="bg-warning">
                    <div class="container text-center">
                        <div class="row justify-content-around">
                            <div class="card text-dark bg-light mb-3 text-center col-4 hover" style="max-width: 18rem;">
                                <div class="card-header"><b>Fecha de Renovacioin de la subscripción</b></div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <p class="card-text">Tu subscripción se renovará automáticamente.</p>
                                </div>
                            </div>
                            <div class="card text-dark bg-light mb-3 text-center col-4 hover" style="max-width: 18rem;">
                                <div class="card-header"><b>Fecha del examen:</b></div>
                                <div class="card-body">
                                    <h5 class="card-title">Febrero 2024</h5>
                                    <p class="card-text">Animo, ya queda poco!.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="card text-dark bg-light mb-3 text-center col-4 hover" style="max-width: 18rem;">
                                <div class="card-header"><b>Media nacional de notas</b></div>
                                <div class="card-body">
                                    <h5 id="mediaNacional" class="card-title">{{ $estadisticas->media_total_nota }}</h5>
                                    <p class="card-text">A contar desde la fecha de publicacion de la presente
                                        convocatoria</p>
                                </div>
                            </div>
                            <div class="card text-dark bg-light mb-3 text-center col-4 hover" style="max-width: 18rem;">
                                <div class="card-header"><b>Media de {{ Auth::user()->name }}</b></div>
                                <div class="card-body">
                                    @if (Auth::user()->media_notas > $estadisticas->media_total_nota)
                                        <h5 class="card-title text-sucess"> {{ Auth::user()->media_notas }} / 10</h5>
                                    @else
                                        <h5 class="card-title text-danger"> {{ Auth::user()->media_notas }} / 10</h5>
                                    @endif
                                    <p class="card-text">A contar desde la fecha de publicacion de la presente
                                        convocatoria</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="card text-dark bg-light mb-3 text-center col-4 hover" style="max-width: 18rem;">
                                <div class="card-header"><b>Media nacional de Examenes realizados por usuario</b></div>
                                <div class="card-body">
                                    <h5 id="mediaExamenesNacional"
                                        class="card-title">{{ $estadisticas->media_examenes_realizados }}</h5>
                                    <p class="card-text">A contar desde la fecha de publicacion de la presente
                                        convocatoria</p>
                                </div>
                            </div>
                            <div class="card text-dark bg-light mb-3 text-center col-4 hover" style="max-width: 18rem;">
                                <div class="card-header"><b>Nº de examenes realizados</b></div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ Auth::user()->total_examenes }}</h5>
                                    <p class="card-text">A contar desde la fecha de publicacion de la presente
                                        convocatoria</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-footer/>
