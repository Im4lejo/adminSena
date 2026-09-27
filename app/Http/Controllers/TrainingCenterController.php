<?php

namespace App\Http\Controllers;
use App\Models\Training_center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        return response()->json(Training_center::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        return response()->json(Training_center::create($data), 201);
    }

    public function update(Request $request, int $id)
    {
        $trainingCenter = Training_center::findOrFail($id);
        $trainingCenter->update($request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]));

        return response()->json($trainingCenter);
    }

    public function destroy(int $id)
    {
        Training_center::findOrFail($id)->delete();

        return response()->json(['message' => 'Centro de formación eliminado correctamente.']);
    }
}
