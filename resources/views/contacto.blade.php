@extends('layouts.template')

@section('content')

<style>
       #map {
        height: 400px;
        width: 100%;
       }
</style>

<div class="row no-gutters justify-content-center m-t-100">
	<div class="col-12 col-sm-6 wow slideInLeft">
		<img class='w-100' src="{{ asset('img/biblioteca_cali.jpg') }}" alt="">
	</div>	
	<div class="col-12 col-sm-6 wow slideInRight">
		<img class='w-100' src="{{ asset('img/biblioteca_cali_2.jpg') }}" alt="">
	</div>
</div>


<div class="row justify-content-center m-t-80 m-b-60 wow zoomIn">
	<div class="col-10 col-md-8">
		<h2>Contacto</h2>
	</div>
	@if (count($errors) > 0)
	<div class="col-12">
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			{{ $error }}<br>
			@endforeach
		</div>
	</div>
	@endif
	@if(session()->has('message'))
	<div class="col-12">
		<div class="alert alert-success">
			{{ session()->get('message') }}
		</div>
	</div>
	@endif
	<div class="col-10 col-md-8 col-centered" id='contacto'>
		<form method='POST' action='{{url('enviar_correo')}}'>
			<div class="form-row">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group col-11 col-md-6">
					<input type="text" name='nombre' class="form-control" id="exampleInputText" aria-describedby="nombreHelp" placeholder="NOMBRE">
					@if ($errors->has('nombre')) <p class="help-block">{{ $errors->first('nombre') }}</p> @endif
				</div>
				<div class="form-group col-11 col-md-6">
					<input type="email" name='correo' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e-MAIL">
					@if ($errors->has('correo')) <p class="help-block">{{ $errors->first('correo') }}</p> @endif
				</div>
				<div class="form-group col-11 col-md-6">
					<input type="text" name='asunto' class="form-control" id="exampleInputText" aria-describedby="companiaHelp" placeholder="Asunto">
					@if ($errors->has('asunto')) <p class="help-block">{{ $errors->first('asunto') }}</p> @endif
				</div>
				<div class="form-group col-11 col-md-6">
					<input type="text" name='telefono' class="form-control" id="exampleInputEmail1" aria-describedby="telefonoHelp" placeholder="TELÉFONO">
					@if ($errors->has('telefono')) <p class="help-block">{{ $errors->first('telefono') }}</p> @endif
				</div>
				<div class="form-group col-11 col-md-12">
					<textarea class="form-control" name='contenido' id="exampleTextarea" rows="3" placeholder="mensaje"></textarea>
					@if ($errors->has('contenido')) <p class="help-block">{{ $errors->first('contenido') }}</p> @endif
				</div>
				<div class="form-group col-12 alineado_centro">
					<button type="submit" class="btn_submit texto_bold centrado">ENVIAR</button>
				</div>

			</div>
		</form>

	</div>
</div>
<div class="row wow zoomIn">
	<div class="col-12">
		<div id="map"></div>
	</div>
</div>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRHQCYlbdBFnqvGYQdSAQUck8QAJzIVr0" async defer>
    </script>
    <script>
      function initMap() {
        var uluru = {lat: 21.174192, lng:  -101.738891};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

      initMap();
    </script>
@endsection()