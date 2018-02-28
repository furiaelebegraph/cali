@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-12">
		<div class="titulo_nivel_edu m-t-70  m-b-50">
			<h1>{{ $nivel->titulo }}</h1>
		</div>
	</div>
	<div class="col-12">
		<div class="wrap_video_testi">
			<div class="video_testi video_testimonial">
				<video id='video_1' controls poster='{{ asset($nivel->poster) }}'>
					<source src="{{ asset($nivel->video) }}" type="video/mp4" >
				</video>
			</div>
			<div class="wrap_datos_testi">
				<div class="titulo_testi">
					<h2>{!! $nivel->minitestimonio !!}</h2>
				</div>
				<div class="texto_testi">
					<p> {!!$nivel->testimonio !!} </p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="icono_nivel">
			<img src="{{ asset($nivel->icono) }}" alt="">
		</div>
	</div>
	<div class="col-12">
		<div class="descrip_nivel">
			<h2> {{ $nivel->titulo }} </h2>
			<div class="wrap_descripcion">
				{!!$nivel->descripcion!!}
				
			</div>
		</div>
	</div>
	<div class="col-12">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  	@foreach($nivel->galeria as $key=>$imagenes)
			  		<li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"></li>
			  	@endforeach
			</ol>
			<div class="carousel-inner">
			  	@foreach($nivel->galeria as $key=>$imagenes)
				  	<div class="carousel-item">
						<img class="d-block w-100" src="{{asset($imagenes->imagen)}}" alt="">	    
				  	</div>
			  	@endforeach
			</div>
				 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
		</div>
	</div>
</div>

@endsection()