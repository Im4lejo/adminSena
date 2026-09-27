<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        return response()->json(Computer::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
        ]);

        return response()->json(Computer::create($data), 201);
    }

    public function update(Request $request, int $id)
    {
        $computer = Computer::findOrFail($id);
        $computer->update($request->validate([
            'number' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
        ]));

        return response()->json($computer);
    }

    public function destroy(int $id)
    {
        Computer::findOrFail($id)->delete();

        return response()->json(['message' => 'Computador eliminado correctamente.']);
    }
}
