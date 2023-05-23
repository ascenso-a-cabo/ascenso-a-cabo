<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Examen;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExamenControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $examenes = Examen::all();

        return response()->json($examenes);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $examen = Examen::findOrFail($id);

        return response()->json($examen);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $examen = Examen::create($request->all());

        return response()->json($examen, 201);
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
        $examen = Examen::findOrFail($id);
        $examen->update($request->all());

        return response()->json($examen);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $examen = Examen::findOrFail($id);
        $examen->delete();

        return response()->json(['message' => 'Examen eliminado']);
    }
}
