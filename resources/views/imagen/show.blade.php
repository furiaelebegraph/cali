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
                            <img class="card-img-top img-fluid w-100"  src="{{asset($imagen->imagen)}}" alt="">
                        </div>
                        <div class="card-body">
                              <h6 class="card-title mb-1">
                                <a href="/imagen/{!!$imagen->id!!}">{{$imagen->nombre}}</a>
                              </h6>
                              <p class="card-text small">Editar
                                <a href="/imagen/{!!$imagen->id!!}/edit">#surfsup</a>
                              </p>

                              <p class="card-text small">
                                  <form action="{{ route('imagen.destroy', ['id' => $imagen->id]) }}" method="post">
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
        </div>
    </div>
@endsection