<td>Nombre apellidos: {{ $alumno->nombre_ape }}</td><br>
<td>Edad:</strong> {{ $alumno->edad }}</td><br>
<td>Telefono:</strong> {{ $alumno->telefono }}</td><br>
<td>Dirección:</strong> {{ $alumno->direccion }}</td><br>
<a href="{{ route('alumnos') }}">Volver</a>