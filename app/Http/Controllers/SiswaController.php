<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasiswa = Siswa::all();
        return view('index', ['siswa' => $datasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // mengisi data siswa dengan isisan form_tambah dengan parameter $request
        Siswa::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'tgl_lahir' => $request->tgl_lahir
        ]);

        // setelah menambah data browser akan diarahkan ke route siswa.index
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        return view('profile_siswa', ['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data siswa sesuai id
        $datasiswa = Siswa::find($id);

        return view('form_ubah', ['siswa' => $datasiswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // memanggil data siswa sesuai id
        $siswa = Siswa::find($id);

        // mengubah nama,nis,tgl_lahir sesuai value diform ubah (value disimpan dalam variabel $request)
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->save();

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->route('siswa.index');
    }
}
