<x-app-layout>
    <div class="container">
        <h1 class="display-4 text-white text-center font-weight-bold py-4 bg-dark">Examen</h1>
        <div class="sticky-top bg-dark text-white rounded">
            <div class="container">
                <p id="contador" class="fs-3 py-3 text-center"></p>
            </div>
        </div>
        <form action="{{ route('test.submit') }}" method="POST">
            @csrf

            @foreach ($preguntas as $pregunta)
                <div class="card my-3 mx-auto w-75">
                    <div class="card-body">
                        <h3 class="card-title">{{$loop->iteration}}.- {{$pregunta->enunciado }}</h3>
                        @foreach ($pregunta->respuestas as $respuesta)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="respuesta[{{ $pregunta->id }}]"
                                       value="{{ $respuesta->id }}" id="{{ $respuesta->id }}">
                                <label class="form-check-label"
                                       for="{{ $respuesta->id }}">{{ $respuesta->texto }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="text-center py-2">
                <a href="{{ route('examenes.index')}}" class="btn btn-danger mr-2">Volver Atrás</a>
                <button class="btn btn-success" type="submit">Enviar respuestas</button>
            </div>
        </form>
    </div>
</x-app-layout>
<!-- SCRIPT PARA EL CONTADOR DE 70 MINUTOS -->
<script>
    // Obtén el formulario y el botón de envío
    var form = document.getElementById('mi-formulario');
    var submitButton = document.getElementById('mi-submit');

    // Establece el tiempo inicial en 70 minutos (4200 segundos)
    var tiempoInicial = 4200;
    var tiempoRestante = tiempoInicial;

    // Actualiza el contador de tiempo cada segundo
    var intervalo = setInterval(actualizarContador, 1000);

    function actualizarContador() {
        // Calcula los minutos y segundos restantes
        var minutos = Math.floor(tiempoRestante / 60);
        var segundos = tiempoRestante % 60;

        // Actualiza el contador de tiempo en el HTML
        document.getElementById('contador').innerHTML = "Tiempo restante: " + minutos + " min " + segundos + " seg";

        // Verifica si se ha alcanzado el tiempo límite
        if (tiempoRestante <= 0) {
            // Detiene el intervalo
            clearInterval(intervalo);

            // Deshabilita el formulario
            form.disabled = true;

            // Envía el formulario
            form.submit();
        } else {
            // Reduce el tiempo restante en 1 segundo
            tiempoRestante--;
        }
    }
</script>
