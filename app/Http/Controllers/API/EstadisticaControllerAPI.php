<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Estadistica;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EstadisticaControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $estadisticas = Estadistica::all();

        return response()->json($estadisticas);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $estadistica = Estadistica::findOrFail($id);

        return response()->json($estadistica);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $estadistica = Estadistica::create($request->all());

        return response()->json($estadistica, 201);
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
        $estadistica = Estadistica::findOrFail($id);
        $estadistica->update($request->all());

        return response()->json($estadistica);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $estadistica = Estadistica::findOrFail($id);
        $estadistica->delete();

        return response()->json(['message' => 'Estadistica eliminada']);
    }
}
