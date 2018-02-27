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

        <!-- Icon Cards -->
            <div class="row">
                <div class="col-md-8 col-xs-12 col-centered">
                    <div class="col-xs-12 col-centered">
                        <div class="row">
                            <div class="col-xs-6 col-centered">
                                <form  method = 'get' action = '{{url("/home")}}'>
                                    <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN</span></button>
                                </form>
                            </div>
                            <div class="col-xs-6 col-centered">
                                <form class = 'col s3' method = 'get' action = '{!!url("nivel")!!}/create'>
                                    <div class="sub-main">
                                      <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nuevo Nivel Educativo</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-12 col-centered">
                        <div class="table-responsive">
                            <table class='table table-striped' cellpadding="10">
                                <thead>
                                    <tr>
                                        <td>Nivel</td>
                                        <td>Imagen</td>
                                        <td>Video</td>
                                        <td>Descripcion</td>
                                        <td>testimonio</td>
                                        <td>minitestimonio</td>
                                        <td>icono</td>
                                        <td>Imagen</td>
                                        <td>BORRAR</td>
                                        <td>EDITAR</td>
                                        <td>INFO</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($potatos as $nivel) 
                                    <tr>
                                        <td>{!!$nivel->nombre!!}</td>
                                        <td> 
                                            <img class='al_100' src="{!!$nivel->imagen!!}" alt=""> 
                                        </td>
                                        <td>
                                            {{$nivel->video}}
                                        </td>
                                        <td>
                                            {{substr(strip_tags($nivel->descripcion),0,50)}}{{strlen(strip_tags($nivel->descripcion)) > 50 ? "...":""}}
                                        </td>
                                        <td>
                                            {{substr(strip_tags($nivel->testimonio),0,50)}}{{strlen(strip_tags($nivel->testimonio)) > 50 ? "...":""}}
                                        </td>
                                        <td>
                                            {{$nivel->minitestimonio}}
                                        </td>
                                        <td>
                                            <img class='al_100' src="{!!$nivel->icono!!}" alt=""> 
                                        </td>
                                        <td>
                                            <form action="{{ route('nivel.destroy', ['id' => $nivel->id]) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('nivel.edit', $nivel->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/nivel/{!!$nivel->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                        </td>
                                        <td>
                                            <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/nivel/{!!$nivel->id!!}'><i class = 'material-icons'>info</i></a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>    
                        </div>    
                    </div>
                    {!! $potatos->links() !!}
                </div>

            </div>
    </div>
</div>
</section>
@endsection