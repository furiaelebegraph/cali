@extends('layouts.template')

@section('content')
	<div class="row m-t-100">
		<div class="col-12 alineado_centro">
			<h2>CONTACTO</h2>
		</div>
	</div>
	<div class="row justify-content-center m-t-20">
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
						<input type="text" name='compania' class="form-control" id="exampleInputText" aria-describedby="companiaHelp" placeholder="COMPAÑIA">
						@if ($errors->has('nombre')) <p class="help-block">{{ $errors->first('compania') }}</p> @endif
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
    <div id="mapa"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHsWmJVjxtKOIjR6wm9cuhDbJDax1XuiU&callback=initMap" async defer></script>
    <script>
      function initMap() {
        var calis = {lat: 21.174289,  lng: -101.738693};
        var map = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 15,
          center: calis,
          styles: [{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]}]
        });
        var marker = new google.maps.Marker({
          position: calis,
          map: map
        });
      }
    </script>
@endsection()