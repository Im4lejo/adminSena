<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
   public function teacher()
{
        $teacher = Teacher::all();

        return response()->json($teacher);
}
}