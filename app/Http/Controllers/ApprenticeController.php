<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApprenticeController extends Controller
{
    public function index()
    {
        return response()->json(Apprentice::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'cell number' => ['required', 'integer'],
            'course_id' => ['nullable', 'integer', 'exists:courses,id'],
            'computer_id' => ['required', 'integer', 'exists:computers,id', 'unique:apprentices,computer_id'],
        ]);

        return response()->json(Apprentice::create($data), 201);
    }

    public function update(Request $request, int $id)
    {
        $apprentice = Apprentice::findOrFail($id);
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'cell number' => ['required', 'integer'],
            'course_id' => ['nullable', 'integer', 'exists:courses,id'],
            'computer_id' => ['required', 'integer', 'exists:computers,id', Rule::unique('apprentices', 'computer_id')->ignore($apprentice->id)],
        ]);

        $apprentice->update($data);

        return response()->json($apprentice);
    }

    public function destroy(int $id)
    {
        Apprentice::findOrFail($id)->delete();

        return response()->json(['message' => 'Aprendiz eliminado correctamente.']);
    }
}
