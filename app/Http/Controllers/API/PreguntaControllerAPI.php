<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pregunta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PreguntaControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $preguntas = Pregunta::all();

        return response()->json($preguntas);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $pregunta = Pregunta::findOrFail($id);

        return response()->json($pregunta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $pregunta = Pregunta::create($request->all());

        return response()->json($pregunta, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param string $id
     * @return JsonResponse
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->update($request->all());

        return response()->json($pregunta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->delete();

        return response()->json(['message' => 'Pregunta eliminada']);
    }
}
