<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('siswa.index', [
            'siswas' => Siswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nis' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'tempat_lahir' => 'required',
        ]);
    
        Siswa::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'tempat_lahir' => $request->tempat_lahir
    
        ]);
    
        // Atau jika seluruh data input akan dimasukkan langsung ke db bisa dengan perintah
        // Medicine::create($request->all());
    
        return redirect()->back()->with('success', 'Berhasil menambahkan data siswa!');
    
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
        $siswa = Siswa::find($id);

        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'nis' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'tempat_lahir' => 'required',
        ]);
    
        $siswa = Siswa::where('id', $id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'tempat_lahir' => $request->tempat_lahir
        ]);

        return redirect()->route('siswas.index')->with('success', 'Berhasil mengupdate data siswa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Siswa::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data siswa!');
    }
}
