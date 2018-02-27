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
        $niveles = Nivel::paginate(10);
        $imagenes = Galeria::all();
        return view('nivel.index', compact('albums', 'niveles','imagenes'));
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
            'titulo' => 'required|unique:nivel|max:255',
            'imagen' => 'required | image | max:2000',
        ]);
            $nivel = new Nivel();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/nivel/'.$filename;
                Image::make($imagen)->resize(null, 800, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);

                $nivel->imagen = 'img/nivel/'.$filename;
            }
            if($request->hasFile('video')){

                $file = $request->file('video');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $path = 'videos/';
                $union = $path.$filename;
                $nivel->video = $union;
                $file->move($path, $filename);
            }
                $nivel->titulo = $request->titulo;
                $nivel->icono = $request->icono;
                $nivel->poster = $request->poster;
                $nivel->descripcion = $request->descripcion;
                $nivel->testimonio = $request->testimonio;
                $nivel->minitestimonio = $request->brevetesti;
                $nivel->save();
                $photos = $request->file('photos');
                if (!empty($photos)) {
                    foreach ($photos as $indexPhoto=>$photo) {
                        $nombre = $nivel->nombre.'_'.$indexPhoto.'_'.$photo->hashName();
                        $path = 'img/imagenes/'.$nombre;
                        $imagenes = new Galeria();
                        Image::make($photo)->resize(null, 800, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->save($path);
                        $imagenes->nivel_id = $nivel->id;
                        $imagenes->imagen = $path;
                        $imagenes->nombre =  $nivel->nombre.'_'.$indexPhoto.'_'.$photo->hashName();
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

                $nivel->nombre = $request->nombre;
                $nivel->subcate_id = $request->id_subcategoria;
                $nivel->cate_id = $request->id_categoria;
                $nivel->descripcion = $request->descrip;
                $nivel->orden = $request->orden;
                $nivel->save();

                return redirect('nivel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nivel $nivel)
    {
        //
    }
    public function nivelEducativo($id,Request $request){
        $title = 'Index - Producto';
        $nivel = Nivel::findOrfail($id);
        $albums = $nivel->with('galeria')->get();
        $imagenes = Galeria::all();
        return view('nivel.nivel-educativo', compact('albums', 'nivel','imagenes'));
    }
}
