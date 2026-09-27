<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
        public function index()
        {
                return response()->json(Teacher::all());
        }

        public function store(Request $request)
        {
                $data = $request->validate([
                        'name' => ['required', 'string', 'max:255'],
                        'email' => ['required', 'email', 'max:255'],
                        'area_id' => ['nullable', 'integer', 'exists:areas,id'],
                        'training_center_id' => ['nullable', 'integer', 'exists:training_centers,id'],
                ]);

                return response()->json(Teacher::create($data), 201);
        }

        public function update(Request $request, int $id)
        {
                $teacher = Teacher::findOrFail($id);
                $teacher->update($request->validate([
                        'name' => ['required', 'string', 'max:255'],
                        'email' => ['required', 'email', 'max:255'],
                        'area_id' => ['nullable', 'integer', 'exists:areas,id'],
                        'training_center_id' => ['nullable', 'integer', 'exists:training_centers,id'],
                ]));

                return response()->json($teacher);
        }

        public function destroy(int $id)
        {
                Teacher::findOrFail($id)->delete();

                return response()->json(['message' => 'Instructor eliminado correctamente.']);
        }
}
