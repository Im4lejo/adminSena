<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
{
    $apprentice = Apprentice::all();

    return response()->json($apprentice);

}
}