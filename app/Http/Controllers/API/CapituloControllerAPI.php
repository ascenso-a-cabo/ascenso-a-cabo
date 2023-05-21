<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Capitulo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CapituloControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $capitulos = Capitulo::all();

        return response()->json($capitulos);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $capitulo = Capitulo::findOrFail($id);

        return response()->json($capitulo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $capitulo = Capitulo::create($request->all());

        return response()->json($capitulo, 201);
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
        $capitulo = Capitulo::findOrFail($id);
        $capitulo->update($request->all());

        return response()->json($capitulo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $capitulo = Capitulo::findOrFail($id);
        $capitulo->delete();

        return response()->json(['message' => 'Capitulo eliminado']);
    }
}
