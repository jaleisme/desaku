<?php

namespace App\Http\Controllers;

use App\Models\Hunian;
use Illuminate\Http\Request;

class HunianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hunian = Hunian::all();
        return view('hunian.home', compact(['hunian']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hunian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Hunian;
        $data->nik_kepala_keluarga = $request->nik_kepala_keluarga;
        $data->no_kk = $request->no_kk;
        $data->lokasi = $request->lokasi;
        $data->luas_tanah = $request->luas_tanah;
        $data->luas_bangunan = $request->luas_bangunan;
        $data->save();
        return redirect('/hunian');
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
        $hunian = Hunian::find($id);
        return view('hunian.edit', compact(['hunian']));
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
        $data = Hunian::find($id);
        $data->nik_kepala_keluarga = $request->nik_kepala_keluarga;
        $data->no_kk = $request->no_kk;
        $data->lokasi = $request->lokasi;
        $data->luas_tanah = $request->luas_tanah;
        $data->luas_bangunan = $request->luas_bangunan;
        $data->save();
        return redirect('/hunian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Hunian::find($id);
        if($data->delete()){
            return redirect('/hunian');
        }
    }
}
