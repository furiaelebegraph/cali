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
				Atención personalizada, el conocimiento no es adquirido a través de materias sino de
				experiencias.
			</p>
			 <br>
			<p>
				Exploración de diferentes roles orientado al trabajo multidisciplinario.
				Cero tolerancia al bullying, centrados en el respeto, el perdón y la paz.
			</p>
			 <br>
			 <br>


				<h3>Beneficios</h3>
			<p>
				Contamos con excelentes espacios educativos, ambientes inteligentes que cuentan con todo lo necesario,
				cada detalle está construido para que disfruten cada etapa de aprendizaje, desde los más pequeños hasta
				nuestros alumnos más avanzados.
			</p>
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
Objetivos Prioritarios
Objetivos prioritarios de nuestra pedagogía "Personalista y Comunitaria"
			</p>
			 <br>
			 <br>
			<p>
 <h4> + DEFINIRSE:</h4>
Es tomar conciencia de las propias y grandes potencialidades. La educación del carácter es vital. De la misma manera en que la escuela tiene que desarrollar aptitudes físicas, intelectuales, afectivas, tiene que esforzarse en hacer aparecer rasgos positivos de comportamiento: el esmero, la puntualidad, el espíritu de equipo, el dominio de sí, etc.
			</p>
			 <br>
			 <br>
			<p>	
 <h4>+ SITURARSE:</h4>
 			<p>
El hombre ser en situación
Implica establecer lazos estrechos entre la escuela y la vida, descubrir el mundo en el que vive. Implica adquirir una noción clara de las estructuras del tiempo histórico y el espacio geográfico. "A mayor sea su conciencia del momento en que vive, mayor será su entorno". Pierre Faure.
			</p>
			 <br>
			 <br>

			<h4> + ACCEDER A LA AUTONOMÍA:</h4>
			<p>
"Ayúdame a hacerlo solo" (María Montessori). De esta forma cuando el niño se convierte en un joven o adulto va a ser capaz de hacerle frente a las exigencias diarias de su existencia, ejercer su juicio crítico y proteger su autonomía. El niño se preparará mejor a la autonomía cuando haya asumido responsabilidades importantes.
			</p>
			 <br>
			 <br>

			<h4> + ESTAR ABIERTO AL CAMBIO:</h4>
			<p>
Hay que ayudarle al alumno a transformarce en función de los cambios que se producen a su alrededor y hay que llevarle a concebir y a conducir este cambio en el sentido de la mejora constante de la condición humana.
			</p>
		</div>
	</div>
	<div class="col-12 m-t-80 m-b-80 wow slideInLeft">
		<img class='w-100' src="{{ asset('img/secundaria_cali_2.jpg') }}" alt="">
	</div>
</div>

@endsection()