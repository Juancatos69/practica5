<?php

// app/Http/Controllers/MesaController.php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return response()->json($mesas);
    }
    





    public function store(Request $request)
{
    $validatedData = $request->validate([
        'material' => 'required|string',
        'dimensiones' => 'required|string',
        'estilo' => 'required|string',
        'color' => 'required|string',
    ]);

    $mesa = Mesa::create($validatedData);
    return response()->json($mesa, 201);
}






    public function show($id)
    {
        return response()->json(Mesa::find($id));
    }

    public function update(Request $request, $id)
    {
        $mesa = Mesa::findOrFail($id);
        $mesa->update($request->all());
        return response()->json($mesa);
    }

    public function destroy($id)
    {
        Mesa::destroy($id);
        return response()->json(null, 204);
    }
}
