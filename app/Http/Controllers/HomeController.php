<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Hunian;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landing()
    {
        $tp = count(Penduduk::get());
        $th = count(Hunian::get());
        $tf = count(Fasilitas::get());
        return view('welcome', compact(['tp', 'th', 'tf']));
    }
}
