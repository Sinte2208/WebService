<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{

    public function index()
    {
        $soal = Soal::all();
        //dd('soal.index');
        return view('soal.index', compact('soal'));
    }

    public function create()
    {
        return view('soal.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
    }

}
