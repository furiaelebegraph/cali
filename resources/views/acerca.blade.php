@extends('layouts.template')

@section('content')

<div class="row justify-content-center align-items-center">
	<div class="col-12 alineado_centro wow bounceInUp">
		<div class="titulo_acerca m-t-90 m-b-50">
			<h1><span>Acerca</span> de Cali</h1>
		</div>
	</div>
	<div class="col-12">
		<div class="texto_asi_apredemos">
			<h3>Así aprendemos en Cali</h3>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque eros nec nunc pharetra rutrum. Aenean ut sem gravida, elementum nibh ut, varius erat. Proin aliquet bibendum leo eget tincidunt. Morbi ac dictum quam. Aenean eu rutrum erat. Cras elementum urna urna, eu sodales eros commodo et. Mauris iaculis, nunc quis iaculis rhoncus, nulla elit aliquam augue, id gravida massa ante non erat. Suspendisse sit amet aliquet lacus. Sed eleifend diam vitae lectus bibendum malesuada vitae id urna.
			</p>
		</div>
	</div>
	<div class="col-12 m-t-80 m-b-80">
		<div class="row justify-content-center align-items-center no-gutters">
			<div class="col-11 col-sm-6 wow slideInLeft">
				<img class='w-100' src="{{ asset('img/fachada_colegio_cali.jpg') }}" alt="">
			</div>
			<div class="col-11 col-sm-6 wow slideInRight">
				<img class='w-100' src="{{ asset('img/secundaria_cali_1.jpg') }}" alt="">
			</div>
		</div>
	</div>
	<div class="col-12 alineado_centro">
		<div class="titulo_acerca m-t-70  m-b-50">
			<h1><span>Proyecto</span> Cali</h1>
		</div>
	</div>
	<div class="col-12">
		<div class="texto_asi_apredemos">
			<h3>Como comenzamos</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque eros nec nunc pharetra rutrum. Aenean ut sem gravida, elementum nibh ut, varius erat. Proin aliquet bibendum leo eget tincidunt. Morbi ac dictum quam. Aenean eu rutrum erat. Cras elementum urna urna, eu sodales eros commodo et. Mauris iaculis, nunc quis iaculis rhoncus, nulla elit aliquam augue, id gravida massa ante non erat. Suspendisse sit amet aliquet lacus. Sed eleifend diam vitae lectus bibendum malesuada vitae id urna.
			</p>
		</div>
	</div>
	<div class="col-12 m-t-80 m-b-80 wow slideInLeft">
		<img class='w-100' src="{{ asset('img/secundaria_cali_2.jpg') }}" alt="">
	</div>
</div>

@endsection()