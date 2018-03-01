@extends('layouts.admin')
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
@section('contenido')
    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url("/home")}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <section class="contenedor">
            <section class="row row-centered">
                <div class="col-md-8 col-xs-12 col-centered">
                    <div class="row">
                        <div class="col-12 col-centered">
                            <form  method = 'get' action = '{{url("/home")}}'>
                                <button class="button-two btn btn-primary" type = 'submit'><span class="texto_blanco">DASHBOARD</span></button>
                            </form>
                        </div>
                        <div class="col-12 col-centered">
                            <form method = 'get' action = '{!!url("nivel")!!}'>
                                <button class = 'btn btn-danger'>Ver todos las Categorias</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 col-centered">
                    <div class='titulo_seccion'>
                        Crear Nivel Educativo
                    </div class='titulo_seccion'>
                </div>
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                <div class="col-xs-12 col-md-8 col-centered formularios">
                    <form method = 'POST' action = '{!!url("nivel")!!}' enctype="multipart/form-data">
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="titulo">Nombre</label>
                            <input id="titulo" name = "titulo" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input id="imagen" name = "imagen" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="icono">Icono</label>
                            <input id="icono" name = "icono" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="poster">Poster Video</label>
                            <input id="poster" name = "poster" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="orden">Subir Galeria</label>
                            <input id="photos" type="file" name="photos[]" multiple class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input id="video" name = "video" type="file" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label for="videomobil">Video Mobiles</label>
                            <input id="videomobil" name = "videomobil" type="file" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label for="brevetesti">Titulo testimonio </label>
                            <input id="brevetesti" name = "brevetesti" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="testimonio">Testimonio </label>
                            <textarea rows="10"  id="testimonio" name = "testimonio" type="text" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion Nivel</label>
                            <textarea rows="10"  id="descripcion" name = "descripcion" type="text" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="orden">orden</label>
                            <input id="orden" name = "orden" type="text" class="form-control"> 
                        </div>
                        <div class="sub-main_crear">
                          <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Crear</span></button>
                        </div>
                    </form>
                </div>

            </section>  
        </section>
    </div>
</div>
@endsection