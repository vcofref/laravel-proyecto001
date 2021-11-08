Vista de Verduras

@foreach($verduras as $verdura)
<p>{{ $verdura }}</p>
@endforeach

<hr>

<a href="{{ action('VerdurasController@agregarVerdura')}}">Agregar</a>
<a href="{{ action('VerdurasController@editarVerdura')}}">Editar</a>
<a href="{{ route('eliminarVerdura') }}">Eliminar</a>