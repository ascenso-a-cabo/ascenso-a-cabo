<x-app-layout>
    <div class="container">
        <h1 class="display-4 text-white text-center font-weight-bold py-4 bg-dark">Respuestas</h1>

        
        @foreach ($preguntas as $pregunta)
        <div class="card my-3 mx-auto w-75">
            <div class="card-body">
                <h3 class="card-title">{{$loop->iteration}}.- {{$pregunta->enunciado }}</h3>
                @foreach ($pregunta->respuestas as $respuesta)
                    <div class="form-check"
                         style="background-color: 
                            {{ (isset($respuestasUsuario[$pregunta->id]) && $respuesta->id == $respuestasUsuario[$pregunta->id]) ? ($resultados[$pregunta->id] ? 'green' : 'red') : ($respuesta->valor ? 'green' : 'none') }}">
                        <input class="form-check-input" type="radio" name="respuesta[{{ $pregunta->id }}]"
                            value="{{ $respuesta->id }}" id="{{ $respuesta->id }}"
                            {{ (isset($respuestasUsuario[$pregunta->id]) && $respuesta->id == $respuestasUsuario[$pregunta->id]) ? 'checked' : '' }}>
                        <label class="form-check-label"
                            for="{{ $respuesta->id }}">{{ $respuesta->texto }}</label>
                    </div>
                @endforeach
                @if (!isset($respuestasUsuario[$pregunta->id]))
                    <div class="form-check">
                        @foreach ($pregunta->respuestas as $respuesta)
                            <input class="form-check-input" type="radio" name="respuesta[{{ $pregunta->id }}]"
                                value="{{ $respuesta->id }}" id="{{ $respuesta->id }}">
                            <label class="form-check-label" for="{{ $respuesta->id }}">{{ $respuesta->texto }}</label>
                            <br>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        @if (!isset($respuestasUsuario[$pregunta->id]))
            <input type="hidden" name="respuesta[{{ $pregunta->id }}]" value="">
        @endif
    @endforeach
    </div>
    <div class="text-center text-white py-2">
        <h2>Nota final Examen: {{ $notaFinal }} /50</h2>
        <h2>Nota final Ponderada: {{ $notaFinalPonderada }} /10</h2>
        <a href="{{ route('examenes.index')}}" class="btn btn-danger mr-2">Finalizar corrección</a>
    </div>
</x-app-layout>
