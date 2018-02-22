@extends('layouts.admin')
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
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card-columns">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid w-100"  src="{{asset($nivel->imagen)}}" alt="">
                        </div>
                        <div class="card-body">
                              <h3 class="card-title mb-1">
                                <a  href="/nivel/{!!$nivel->id!!}">{{$nivel->nombre}}</a>
                              </h3>
                              <p class="card-text small">Editar
                                <a href="/nivel/{!!$nivel->id!!}/edit">#surfsup</a>
                              </p>

                              <p class="card-text small">
                                <form action="{{ route('nivel.destroy', ['id' => $nivel->id]) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                  </div>
                                </form>
                              </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-12">
                        @if($nivel->galeria->count() <= 0)
                            <div class="jumbotron text-center">
                                <div class="container">
                                    <h1 class="jumbotron-heading">No hay fotos en esta Galeria</h1>
                                    <div class="card">
                                      <div class="card-block">
                                        <form method='POST' action="{!! url("imagen/cargarGale")!!}" enctype="multipart/form-data">
                                            <input type="hidden" name = '_token' value = '{{Session::token()}}'>
                                            <input type="hidden" name="id_inmueble" value={{$nivel->id}}>
                                            <input type="hidden" name="nombreProdu" value={{$nivel->nombre}}>
                                            <div class="form-group">
                                                <label  class="col-2 col-form-label" for="galeria">Agregar Galeria</label>
                                                <input  class="form-control" type="file" name="galeria[]" multiple>
                                            </div>

                                            <button class='text-right btn btn-primary' type='submit'>Update</button>
                                        </form>
                                      </div> 
                                    </div>
                                </div>
                            </div>

                        @else
                            <div class="jumbotron text-center">
                                <div class="container">
                                    <h1 class="jumbotron-heading">Galeria</h1>
                                    <div class="row">
                                        <div class="card-deck">
                                            @foreach($nivel->galeria as $imagents)
                                            <div class="card">
                                                <img class="card-img-top" src="{{asset($imagents->imagen)}}" alt="">
                                                <div class="card-block">
                                                    <a class="btn btn-primary" href="/imagen/{{$imagents->id}}/edit">Editar</a>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        @endif
                    </div>
            </div>




            <div class="row">
              <div class="col-11">
                <div class="row">
                  @foreach($galerias as $galeria)
                  <div class="col-11 col-sm-3 col-md-4">
                    <div class="card">
                      <img class='w-100' src="{{asset($galeria->imagen)}}" alt="">
                      <div class="card-body">
                        <a href="/galeria/{{$galeria->id}}" class="btn btn-primary">Ver</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection