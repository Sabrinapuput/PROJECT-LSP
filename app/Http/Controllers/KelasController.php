<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mengajar;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelas.index', [
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create', [
            'jurusan' => Jurusan::all()

        ]);
    }

    public function store(Request $request)
    {
        $data_kelas = $request->validate([
            'nama_kelas' => ['required'],
            'jurusan_id' => ['required'],
        ]);
        kelas::create($data_kelas);
        return redirect('/kelas/index')->width('success', 'data berhasil di tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kelas)
    {
        return view('kelas.edit', [
            'kelas' => ['required'],
            'jurusan' => ['required'],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kelas)
    {
        $siswa = siswa:: where('kelas_id', $kelas->id)->first();
        $mengajar = Mengajar::where('kelas_id', $kelas->id)->first();
        
        if (siswa) {
            return back()->with('error')
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
