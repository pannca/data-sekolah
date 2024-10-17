<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $gurus = Guru::all();
       return view('guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'umur' => 'required',    
            'nuptk' => 'required',
            'mapel' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        Guru::create([
            'name' => $request->name,
            'umur' => $request->umur,
            'nuptk' => $request->nuptk,
            'jenis_kelamin' => $request->jenis_kelamin,
            'mapel' => $request->mapel
        ]);

        return redirect()->back()->with('success', 'Berhasil menambahkan data guru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $guru = Guru::find($id);

        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'umur' => 'required',    
            'nuptk' => 'required',
            'mapel' => 'required',
            'jenis_kelamin' => 'required',
        ]);
    
        $guru = Guru::where('id', $id)->update([
            'name' => $request->name,
            'umur' => $request->umur,
            'nuptk' => $request->nuptk,
            'mapel' => $request->mapel,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        return redirect()->route('gurus.index')->with('success', 'Berhasil mengupdate data siswa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Guru::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data siswa!');
    }
}
