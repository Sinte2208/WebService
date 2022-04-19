<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaC extends Controller
{
    public function index()
    {
        
       $data = Mahasiswa::all();

        // dd($data);

        return view('mahasiswa/index', compact('data'));
    }

    public function create()
    {
        return view('mahasiswa/add');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
            'nim' => 'required|unique:mahasiswa',
            'nama_mahasiswa' => 'required|min:10',
            'semester' => 'required|numeric',
        ]);

        Mahasiswa::create($request->all());
        return redirect(url('data-mahasiswa'));
    }

    public function destroy(Mahasiswa $id)
    {
        $id->delete();
        return redirect(url('data-mahasiswa'));
    }
}
