<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::all();
        return view('penduduk.home', compact(['penduduk']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Penduduk;
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->ttl = $request->ttl;
        $data->alamat = $request->alamat;
        $data->agama = $request->agama;
        $data->status = $request->status;
        $data->pekerjaan = $request->pekerjaan;
        $data->kewarganegaraan = $request->kewarganegaraan;
        $data->save();
        return redirect('/penduduk');
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
        $penduduk = Penduduk::find($id);
        return view('penduduk.edit', compact(['penduduk']));
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
        $data = Penduduk::find($id);
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->ttl = $request->ttl;
        $data->alamat = $request->alamat;
        $data->agama = $request->agama;
        $data->status = $request->status;
        $data->pekerjaan = $request->pekerjaan;
        $data->kewarganegaraan = $request->kewarganegaraan;
        $data->save();
        return redirect('/penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Penduduk::find($id);
        if($data->delete()){
            return redirect('/penduduk');
        }
    }
}
