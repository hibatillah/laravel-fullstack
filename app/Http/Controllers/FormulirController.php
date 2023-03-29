<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select(DB::raw("select * from formulir"));
        return view('formulir.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulir.create');
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
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'due_date' => 'required',
            'cost' => 'required',
            'description' => 'required'
        ]);

        // upload image
        $image = $request->file('photo');
        $image->storeAs('public/formulir', $image->hashName());

        DB::insert("INSERT INTO `formulir` (`id`, `photo`, `due_date`, `description`, `cost`) VALUES (uuid(), ?, ?, ?, ?)",[$image->hashName(), $request->due_date,$request->description,$request->cost]);
        return redirect()->route('formulir.index')->with(['success' => 'Data berhasil disimpan!']);
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
        $data=DB::table('formulir')->where('id', $id)->first();
        return view('formulir.edit', compact('data'));
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
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'due_date' => 'required',
            'cost' => 'required',
            'description' => 'required'
        ]);

        // cek update foto atau tidak
        if($request->file('photo')){

            $image = $request->file('photo');
            $image->storeAs('public/formulir', $image->hashName());

            DB::update("UPDATE `formulir` set `photo`=?, `due_date`=?, `description`=?, `cost`=? WHERE id=?",
            [$image->hashName(),$request->due_date,$request->description,$request->cost,$id]);
        }else{
            DB::update("UPDATE `formulir` set `due_date`=?, `description`=?, `cost`=? WHERE id=?",
            [$request->due_date,$request->description,$request->cost,$id]);

        }
        return redirect()->route('formulir.index')->with(['success'=> 'Data berhasil diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('formulir')->where('id', $id)->delete();

        // redirect to index
        return redirect()->route('formulir.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
