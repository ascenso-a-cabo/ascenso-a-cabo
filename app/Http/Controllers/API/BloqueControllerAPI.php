<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ApiModelFunctions;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BloqueControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $bloques = ApiModelFunctions::all();

        return response()->json($bloques);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $bloque = ApiModelFunctions::findOrFail($id);

        return response()->json($bloque);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $bloque = ApiModelFunctions::create($request->all());

        return response()->json($bloque, 201);
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
        $bloque = ApiModelFunctions::findOrFail($id);
        $bloque->update($request->all());

        return response()->json($bloque);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $bloque = ApiModelFunctions::findOrFail($id);
        $bloque->delete();

        return response()->json(['message' => 'Bloque eliminado']);
    }
}
