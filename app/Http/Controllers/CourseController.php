<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return response()->json(Course::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'couser number' => ['required', 'integer'],
            'day' => ['required', 'string', 'max:255'],
            'area_id' => ['nullable', 'integer', 'exists:areas,id'],
            'training_center_id' => ['nullable', 'integer', 'exists:training_centers,id'],
        ]);

        return response()->json(Course::create($data), 201);
    }

    public function update(Request $request, int $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->validate([
            'couser number' => ['required', 'integer'],
            'day' => ['required', 'string', 'max:255'],
            'area_id' => ['nullable', 'integer', 'exists:areas,id'],
            'training_center_id' => ['nullable', 'integer', 'exists:training_centers,id'],
        ]));

        return response()->json($course);
    }

    public function destroy(int $id)
    {
        Course::findOrFail($id)->delete();

        return response()->json(['message' => 'Curso eliminado correctamente.']);
    }
}
