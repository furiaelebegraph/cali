@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-12">
		<div class="titulo_nivel_edu">
			<h1>{{ $nivel->nombre }}</h1>
		</div>
	</div>
	<div class="col-12">
		<div class="wrap_video_testi">
			<div class="video_testi">
				<video poster='{{ $nivel->poster }}'>
					<source src="{{ asset('video/'.$nivel->video) }}" type="video/mp4" >
				</video>
			</div>
			<div class="wrap_datos_testi">
				<div class="titulo_testi">
					<h2>{{ $nivel->minitestimonio }}</h2>
				</div>
				<div class="texto_testi">
					<p> {{$nivel->testimonio }} </p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="icono_nivel">
			<img src="{{ asset( 'img/'.$nivel->icono ) }}" alt="">
		</div>
	</div>
	<div class="col-12">
		<div class="descrip_nivel">
			<h2> {{ $nivel->nombre }} </h2>
			<p> {{$nivel->descripcion}} </p>
		</div>
	</div>
	<div class="col-12">
		<div class="galeria">
			
			<div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                    	@foreach($nivel->galeria as $key=>$imagenes)
							<a data-fancybox="gallery" class='item carousel-item' data-slide-number="{{$key}}" href="{{asset($imagenes->imagen)}}">
								<img src="{{asset($nivel->imagen)}}" alt="">
							</a>
						@endforeach

                        <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>

                    </div>
                    <!-- main slider carousel nav controls -->


                    <ul class="carousel-indicators list-inline m-t-60">
                    	@foreach($nivel->galeria as $key=>$imagenes)
							<li class='list-inline-item'  data-slide-to="{{$key}}" data-target="#myCarousel" ">
								<a id="carousel-selector-{{$key}}" class="selected" data-slide-to="{{$key}}" data-target="#myCarousel">
	                                <img src="{{asset($imagenes->imagen)}}" class="img-fluid">
	                            </a>
							</li>
						@endforeach
                    </ul>
            </div>
		</div>
	</div>
</div>

@endsection()