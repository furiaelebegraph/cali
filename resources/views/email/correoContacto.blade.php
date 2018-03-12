@component('mail::message')
# Hola, tienes un **correo nuevo**

@component('mail::panel')
	Asunto: {{$data['asunto']}}<br>
	Correo: {{$data['correo']}}<br>
	Nombre: {{$data['nombre']}}<br>
	Telefono: {{$data['telefono']}}<br>
	Contenido: {{$data['contenido']}}<br>
@endcomponent

Gracias,<br>
**Colegio Cali**
@endcomponent