<?php

namespace App\Http\Controllers;
use App\Models\Cargos;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargos::all();
        return response()->json($cargos);
    }
    public function store(Request $request)
    {
        $cargos = Cargos::create($request->all());
        return response()->json($cargos, 201);
    }
    public function show($id)
    {
        $cargos = Cargos::findOrFail($id);
        return response()->json($cargos);
    }
    public function update(Request $request, $id)
    {
        $cargos = Cargos::findOrFail($id);
        $cargos->update($request->all());
        $cargos->save();
        return response()->json($cargos);
    }
    public function destroy($id)
    {
        $cargos = Cargos::findOrFail($id);
        $cargos->delete();
        return response()->json(null, 204);
    }
}