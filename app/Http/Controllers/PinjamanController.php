<?php

namespace App\Http\Controllers;

use App\Models\pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pinjaman.index')->with([
            'pinjaman' =>pinjaman::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pinjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenisbarang' => 'required',
            'tglpinjaman' => 'required',
            'tglkembali' => 'required',
        ]);

        $pinjaman = new Pinjaman;
        $pinjaman->nama = $request->nama;
        $pinjaman->jenisbarang = $request->jenisbarang;
        $pinjaman->tglpinjaman = $request->tglpinjaman;
        $pinjaman->tglkembali = $request->tglkembali;
        $pinjaman->save();

        //create post
        // Pinjaman::create($request->all());


        return redirect()->route('pinjaman.index')
        ->with('success','Student created successfully.');
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
        return view('pinjaman.edit')->with([
            'pinjaman' => Pinjaman::find($id),
        ]);
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
        $request->validate([
            'nama' => 'required',
            'jenisbarang' => 'required',
            'tglpinjaman' => 'required',
            'tglkembali' => 'required',
        ]);

        $pinjaman = Pinjaman::find($id);
        $pinjaman->nama = $request->nama;
        $pinjaman->jenisbarang = $request->jenisbarang;
        $pinjaman->tglpinjaman = $request->tglpinjaman;
        $pinjaman->tglkembali = $request->tglkembali;
        $pinjaman->save();
        return redirect()->route('pinjaman.index')
        ->with('success','Has Been updated successfully');
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinjaman $pinjaman)
    {
        $pinjaman->delete();
        return redirect()->route('pinjaman.index') ->with('success','Company has been deleted successfully');
    }
}
