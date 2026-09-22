<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function computer()
{
    $computer = Computer::all();

    return response()->json($computer);
}
}
