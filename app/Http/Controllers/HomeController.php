<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nivel;
use App\Galeria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $niveles = Nivel::all();
        $galerias = Galeria::all();

        $ultimosniveles = Nivel::orderBy('created_at','desc')->take(5)->get();
        $ultimasgalerias = Galeria::orderBy('created_at','desc')->take(1)->get();
        $ultimonivel = Nivel::orderBy('created_at','desc')->take(3)->get();
        return view('home', compact('niveles', 'galerias','ultimasgalerias', 'ultimosniveles', 'ultimonivel'));
    }
    public function layoutAdmin(){
        $niveles = Nivel::all();
        $galerias = Galeria::all();
        return view('layouts.admin', compact('niveles', 'galerias'));     
    }
}
