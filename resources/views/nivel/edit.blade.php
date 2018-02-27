@extends('layouts.admin')

    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
@section('contenido')
    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>

        <!-- Icon Cards -->
        <div class="row">
          <div class="col-12 mb-12">
                    <h1>
                        Editar nivel
                    </h1>
                    <form method = 'get' action = '{!!url("nivel")!!}'>
                        <button class = 'btn btn-danger'>Ver nivels</button>
                    </form>
                    <br>
                    <form method = 'POST' action = '{!! url("nivel")!!}/{!!$nivel->id!!}/update' enctype="multipart/form-data"> 
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="titulo">Nombre</label>
                            <input id="titulo" name = "titulo" type="text" class="form-control" value="{{$nivel->titulo}}">
                        </div>
                        <div class="form-group">
                            <label for="imagen">imagen</label>
                            <img src="{!! asset($nivel->imagen)!!}" alt="">
                            <input id="imagen" name = "imagen" type="file" class="form-control" value="{{$nivel->imagen}}"> 
                        </div>

                        <div class="form-group">
                            <label for="icono">Icono</label>
                            <img src="{{ asset($nivel->icono)}}" alt="">
                            <input id="icono" name = "icono" type="file" class="form-control" value="{{$nivel->icono}}"> 
                        </div>
                        <div class="form-group">
                            <label for="imagen">Video</label>
                            <video controls >
                                <source src="src="{!! asset($nivel->video)!!}" type="video/mp4"></source>
                            </video>
                            <input id="video" name = "video" type="file" class="form-control" value="{!!$nivel->video!!}"> 
                        </div>
                        <div class="form-group">
                            <label for="testimonio">Testimonio </label>
                            <textarea rows="10"  id="testimonio" name = "testimonio" type="text" class="form-control" value="{{$nivel->testimonio}}"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="brevetesti">Testimonio Corto </label>
                            <textarea rows="10"  id="brevetesti" name = "brevetesti" type="text" class="form-control" value="{{$nivel->minitestimonio}}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion Nivel</label>
                            <textarea rows="10"  id="descripcion" name = "descripcion" type="text" class="form-control" value="{{$nivel->descripcion}}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="orden">orden</label>
                            <input id="orden" name = "orden" type="text" class="form-control" value="{{$nivel->orden}}"> 
                        </div>
                        <div class="form-group">
                            <label for="orden">Activo</label>
                            <select  class="form-control" name="activo">
                                <option selected="selected" value="{{$nivel->activo}}">{{$nivel->activo}}</option>
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <button class = 'btn btn-primary' type ='submit'>Update</button>
                    </form>
            </div>
        </div>
    </div>
@endsection