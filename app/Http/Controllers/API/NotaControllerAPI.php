<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Nota;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotaControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $notas = Nota::all();

        return response()->json($notas);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $nota = Nota::findOrFail($id);

        return response()->json($nota);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $nota = Nota::create($request->all());

        return response()->json($nota, 201);
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
        $nota = Nota::findOrFail($id);
        $nota->update($request->all());

        return response()->json($nota);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $nota = Nota::findOrFail($id);
        $nota->delete();

        return response()->json(['message' => 'Nota eliminada']);
    }
}
