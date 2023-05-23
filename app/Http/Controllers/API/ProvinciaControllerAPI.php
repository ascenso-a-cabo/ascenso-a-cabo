<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Provincia;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProvinciaControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $provincias = Provincia::all();

        return response()->json($provincias);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $provincia = Provincia::findOrFail($id);

        return response()->json($provincia);
    }
}
