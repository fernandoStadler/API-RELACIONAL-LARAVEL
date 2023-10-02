<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{

    public function index()
    {
        $funcionarios = Funcionarios::all();
        return response()->json($funcionarios);
    }

    public function store(Request $request)
    {
        $funcionarios = Funcionarios::create($request->all());
        return response()->json($funcionarios, 201);
    }

    public function show($id)
    {
        $funcionarios = Funcionarios::findOrFail($id);
        return response()->json($funcionarios);
    }

    public function update(Request $request, $id)
    {
        $funcionarios = Funcionarios::findOrFail($id);
        $funcionarios->update($request->all());
        return response()->json($funcionarios);
    }
    
    public function destroy($id)
    {
        $funcionarios = Funcionarios::findOrFail($id);
        $funcionarios->delete();
        return response()->json(null, 204);
    }
}
