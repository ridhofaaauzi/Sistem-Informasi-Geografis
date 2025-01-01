<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function index()
    {
        $list_provinsi = Province::all();
        return view('peta.index', ['list_provinsi' => $list_provinsi]);
    }
}