<?php

namespace App\Http\Controllers;

use App\Nivel;
use Illuminate\Http\Request;
use Image;
use App\Galeria;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - Producto';
        $albums = Nivel::with('galeria')->get();
        $potatos = Nivel::paginate(10);
        $imagenes = Galeria::all();
        return view('nivel.index', compact('potatos','imagenes','albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear Nivel';
        return view('nivel.create', compact('title'));
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
            'titulo' => 'required|max:255',
            'imagen' => 'required | image | max:2000',
        ]);
            $nivel = new Nivel();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = $file->getClientOriginalName().time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/nivel/'.$filename;
                Image::make($imagen)->resize(null, 800, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $nivel->imagen = 'img/nivel/'.$filename;
            }
            if($request->hasFile('video')){

                $file = $request->file('video');
                $filename = $file->getClientOriginalName().time().'.'.$file->getClientOriginalExtension();
                $path = 'video/';
                $union = $path.$filename;
                $nivel->video = $union;
                $file->move($path, $filename);
            }
            if($request->hasFile('videomobil')){

                $file = $request->file('videomobil');
                $filename = $file->getClientOriginalName().time().'.'.$file->getClientOriginalExtension();
                $path = 'videomobil/';
                $union = $path.$filename;
                $nivel->videomobil = $union;
                $file->move($path, $filename);
            }
            if($request->hasFile('icono')){

                $file = $request->file('icono');
                $filename = $file->getClientOriginalName().time().'.'.$file->getClientOriginalExtension();
                $path = 'img/icono/';
                $union = $path.$filename;
                $nivel->icono = $union;
                $file->move($path, $filename);
            }
            if($request->hasFile('poster')){

                $file = $request->file('poster');
                $filename = $file->getClientOriginalName().time().'.'.$file->getClientOriginalExtension();
                $path = 'img/poster/';
                $union = $path.$filename;
                $nivel->poster = $union;
                $file->move($path, $filename);
            }
                $nivel->titulo = $request->titulo;
                $nivel->descripcion = $request->descripcion;
                $nivel->testimonio = $request->testimonio;
                $nivel->minitestimonio = $request->brevetesti;
                $nivel->orden = $request->orden;
                $nivel->save();
                $photos = $request->file('photos');
                if (!empty($photos)) {
                    foreach ($photos as $indexPhoto=>$photo) {
                        $path = 'img/ima/'.$photo->getClientOriginalName().time().'.'.$photo->getClientOriginalExtension();
                        $imagenes = new Galeria();
                        Image::make($photo)->resize(null, 800, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->save($path);
                        $imagenes->nivel_id = $nivel->id;
                        $imagenes->imagen = $path;
                        $imagenes->orden = $indexPhoto;
                        $imagenes->save();
                    }
                }

                return redirect('nivel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $nivel = Nivel::with('Ima')->findOrfail($id);
        return view('nivel.show',compact('nivel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $nivel = Nivel::findOrfail($id);
        return view('nivel.edit',compact('nivel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
            $nivel = Nivel::findOrfail($id);
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/nivel/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $nivel->imagen = 'img/nivel/'.$filename;
            }
            if($request->hasFile('icono')){

                $file = $request->file('icono');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = 'img/icono/';
                $union = $path.$filename;
                $nivel->icono = $union;
                $file->move($path, $filename);
            }
            if($request->hasFile('videomobil')){

                $file = $request->file('videomobil');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = 'videomobil/';
                $union = $path.$filename;
                $nivel->videomobil = $union;
                $file->move($path, $filename);
            }
            if($request->hasFile('poster')){

                $file = $request->file('poster');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = 'img/poster/';
                $union = $path.$filename;
                $nivel->poster = $union;
                $file->move($path, $filename);
            }
            if($request->hasFile('video')){

                $file = $request->file('video');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = 'video/';
                $union = $path.$filename;
                $nivel->video = $union;
                $file->move($path, $filename);
            }

                $nivel->titulo = $request->titulo;
                $nivel->descripcion = $request->descripcion;
                $nivel->testimonio = $request->testimonio;
                $nivel->orden = $request->orden;
                $nivel->minitestimonio = $request->brevetesti;
                $nivel->save();

                return redirect('nivel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $nivel = Nivel::findOrfail($id);
        $nivel->delete();
         return redirect('nivel');
    }
    public function nivelEducativo($id,Request $request){
        $title = 'Index - Producto';
        $nivel = Nivel::findOrfail($id);
        $albums = $nivel->with('galeria')->get();
        $imagenes = Galeria::all();
        return view('nivel.nivel-educativo', compact('albums', 'nivel','imagenes'));
    }
}
