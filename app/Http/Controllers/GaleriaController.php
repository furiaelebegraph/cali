<?php

namespace App\Http\Controllers;

use App\Galeria;
use Illuminate\Http\Request;
use App\Nivel;
use Image;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - Imagenes';
        $imagenes = Galeria::paginate(10);
        return view('galeria.index', compact('imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, Request $request)
    {
        $title = 'Crear Imagen';
        $nivel = Nivel::findOrfail($id);
        return view('galeria.create', compact('title', 'nivel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $imagen = new Galeria();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/ima/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $imagen->imagen = 'img/ima/'.$filename;
            }

                $imagen->nombre = $request->nombre;

                $imagen->nivel_id = $request->id_nivel;

                $imagen->save();

                return redirect('galeria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Mostrar Imagenes';

        if($request->ajax())
        {
            return URL::to('imagen/'.$id);
        }

        $imagen = Galeria::findOrfail($id);
        return view('galeria.show',compact('title','imagen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $imagen = Galeria::findOrfail($id);
        $nivel = Nivel::all();
        return view('galeria.edit',compact('imagen', 'nivel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {

            $imagen = new Galeria();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/ima/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $imagen->imagen = 'img/ima/'.$filename;
            }

                $imagen->nombre = $request->nombre;

                $imagen->Nivel_id = $request->id_nivel;

                $imagen->save();

                return redirect('galeria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
        //
    }    
    public function cargarGaleria( Request $request){
                $this->validate($request, [
                    'galeria.*' => 'required | image',
                ],[   
                    'galeria'    => 'Por favor agrega imagenes.'
                ]);
                $photos = $request->file('galeria');
                if (!empty($photos)) {
                    foreach ($photos as $indexPhoto=>$photo) {
                        $nombre = $request->nombreNivel.'_'.$indexPhoto.'_'.$photo->hashName();
                        $path = 'img/ima/'.$nombre;
                        $imagenes = new Galeria();
                        Image::make($photo)->resize(null, 400, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->save($path);
                        $imagenes->Nivel_id = $request->id_nivel;
                        $imagenes->imagen = $path;
                        $imagenes->nombre =  $request->nombreNivel.'_'.$indexPhoto.'_'.$photo->hashName();
                        $imagenes->orden = $indexPhoto;
                        $imagenes->save();
                    }
                }else{
                    return back()->with('info', 'No se cargaron imagenes :(');
                }

                return redirect('nivel');
    }
}
