<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::all();
        return view('matkul.index', compact('matkul'));
    }
}