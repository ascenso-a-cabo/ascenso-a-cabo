<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tema;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TemaControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $temas = Tema::all();

        return response()->json($temas);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $tema = Tema::findOrFail($id);

        return response()->json($tema);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $tema = Tema::create($request->all());

        return response()->json($tema, 201);
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
        $tema = Tema::findOrFail($id);
        $tema->update($request->all());

        return response()->json($tema);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $tema = Tema::findOrFail($id);
        $tema->delete();

        return response()->json(['message' => 'Tema eliminado']);
    }
}
