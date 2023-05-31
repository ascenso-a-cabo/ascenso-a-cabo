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
<!-- Banner de reglas del examen -->
<div id="cookie-banner" class="text-center">
    <h3>Normativa del examen.</h3>
    <p>El examen consta de 50 preguntas, a responder en 70 minutos como máximo.</p>
    <p>Cada pregunta acertada suma un punto, las preguntas no acertadas resta -0,25 cada una.</p>
    <p>Las preguntas no respondidas, NO cuentan, tampoco aparecerán en la siguiente página de correcciones.</p>
    <h4>Suerte.</h4>
    <button id="cookie-accept" class="btn btn-light">Aceptar</button>
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
    // Función para mostrar el banner de cookies después de 1 segundos
    function showCookieBanner() {
        setTimeout(function () {
            document.getElementById('cookie-banner').style.display = 'block';
        }, 1000);
    }

    // Función para ocultar el banner de cookies al hacer clic en el botón de aceptar
    function acceptCookies() {
        document.getElementById('cookie-banner').style.display = 'none';
        // Aquí puedes agregar tu lógica para guardar la aceptación de cookies en una cookie o en el almacenamiento local si lo deseas
    }

    // Evento de carga de la página
    window.addEventListener('load', function () {
        showCookieBanner();
    });

    // Evento de clic en el botón de aceptar cookies
    document.getElementById('cookie-accept').addEventListener('click', function () {
        acceptCookies();
    });
</script>
<style>
    #cookie-banner {
        position: fixed;
        bottom: 50%;
        left: 0;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        padding: 10px;
        font-family: Arial, sans-serif;
        display: none;
    }

    #cookie-banner p {
        margin: 0;
    }
</style>
