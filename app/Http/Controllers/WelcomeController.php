<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nivel;
use App\Mail\EnviarCorreo;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $niveles = Nivel::with('galeria')->get();
        return view('welcome', compact('niveles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function enviarCorreo(Request $request){
        $rules = [
            'nombre'    => 'required|max:255',
            'correo'    => 'required|email',
            'contenido' => 'required|min:5',
        ];
        $mensaje = [
            'required' => 'El :attribute es necesario.'
        ];

        $this->validate($request, $rules, $mensaje);

        $input = $request->all();
        Mail::to('karoll.rodriguez@elebegraph.com')->send(new EnviarCorreo($input));
        return back()->with('mensaje', 'Su correo fue enviado!');
    }
    public function acerca(){
        return view('acerca');
    }
    public function contacto(){
        return view('contacto');;
    }

    public function nivelesEducativos(){
        
    }
}
