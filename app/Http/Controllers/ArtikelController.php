<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $data=DB::select(DB::raw("select * from artikel_mhibatillah"));
    return view('artikel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Gambar_Artikel' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Tanggal_Artikel' => 'required',
            'Kategori_Artikel' => 'required',
            'Status_Artikel' => 'required',
            'Konten_Artikel' => 'required'
        ]);

        // upload image
        $image = $request->file('Gambar_Artikel');
        $image->storeAs('public/artikel', $image->hashName());

        DB::insert("INSERT INTO `artikel_mhibatillah` (`ID_Artikel`, `Gambar_Artikel`, `Tanggal_Artikel`, `Kategori_Artikel`, `Status_Artikel`, `Konten_Artikel`) VALUES (uuid(), ?, ?, ?, ?, ?)",[$image->hashName(), $request->Tanggal_Artikel,$request->Kategori_Artikel,$request->Status_Artikel,$request->Konten_Artikel]);
        return redirect()->route('artikel.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
    public function edit($id)
    {
        //
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
        //
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
