<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\Nota;
use App\Models\Examen;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function realizarTest($bloque)
     {
         $preguntas = Pregunta::where('bloque_id', $bloque)
         ->inRandomOrder()
         ->take(50)
         ->with('respuestas')
         ->get();

         $respuestas = Respuesta::all();
         
     
         return view('test', compact('preguntas', 'respuestas'));
     }

    public function submitTest(Request $request)
    {
        // Obtén las respuestas enviadas por el usuario desde el formulario
        $respuestasUsuario = $request->input('respuesta');

        // Obtén todas las respuestas de la base de datos
        $todasRespuestas = Respuesta::all();

        // Obtén todas las preguntas relacionadas con las respuestas
        $preguntas = Pregunta::whereIn('id', array_keys($respuestasUsuario))->get();

        // Realiza la comparación de respuestas y obtén los resultados en un arreglo
        $resultados = [];
        $notaFinal = 0;

        foreach ($respuestasUsuario as $preguntaId => $respuestaId) {
            // Busca la respuesta correspondiente en la base de datos
            $respuesta = $todasRespuestas->find($respuestaId);

            // Verifica si la respuesta existe y si su valor indica que es correcta
            $resultado = ($respuesta && $respuesta->valor) ? true : false;
            $resultados[$preguntaId] = $resultado;

            // Calcula la nota
            if ($resultado) {
                $notaFinal += 1; // Respuesta correcta suma 1 punto
            } elseif ($respuestaId === null) {
                // Respuesta no contestada, no suma puntos ni resta
            } else {
                $notaFinal -= 0.25; // Respuesta incorrecta resta 0.25 puntos
            }
        }

        // Guarda la nota final en la base de datos en base de 10
        $notaFinalPonderada = ($notaFinal * 2)/10;
        $nota = new Nota();
        $nota->usuario_id = $request->user()->id;
        $nota->nota = $notaFinalPonderada;
        $nota->bloque_id = $preguntas[0]->bloque_id;
        $nota->save();

        // Renderiza la vista 'respuestas' y pasa los resultados, la nota final, las preguntas y las respuestas del usuario como datos a la vista
        return view('submit', compact('resultados', 'notaFinal', 'preguntas', 'respuestasUsuario', 'notaFinalPonderada'));

    }     

}
