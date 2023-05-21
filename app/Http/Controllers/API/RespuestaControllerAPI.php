<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Respuesta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RespuestaControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $respuestas = Respuesta::all();

        return response()->json($respuestas);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $respuesta = Respuesta::findOrFail($id);

        return response()->json($respuesta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $respuesta = Respuesta::create($request->all());

        return response()->json($respuesta, 201);
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
        $respuesta = Respuesta::findOrFail($id);
        $respuesta->update($request->all());

        return response()->json($respuesta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $respuesta = Respuesta::findOrFail($id);
        $respuesta->delete();

        return response()->json(['message' => 'Respuesta eliminada']);
    }
}
