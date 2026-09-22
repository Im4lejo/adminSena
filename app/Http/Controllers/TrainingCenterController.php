<?php

namespace App\Http\Controllers;
use app\Models\Training_Center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
   public function trainingCenter()
{
    $trainingCenter= Training_Center::all();

    return response()->json($trainingCenter);
}
}
