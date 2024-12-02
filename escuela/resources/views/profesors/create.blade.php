<form method="post" action="{{ route('profesors.guardar') }}">
    @csrf
    <label for="nombre_ape">Nombre y Apellido: </label>
    <input type="text" name="nombreApellido" value=""><br>

    <label for="profesion">Profesión: </label>
    <select name="profesion" id="profesion">
        <option value="">Selecciona una profesión</option>
        @foreach ($profesiones as $profesion)
            <option value="{{ $profesion }}">{{ $profesion }}</option>
        @endforeach
    </select><br>
    <label for="gradoAcademico">Grado Academico</label>
    <input type="number" name="gradoAcademico"/><br>
    <label for="Telefono">Numero Telefono</label>
    <input type="number" name="telefono" id=""><br>
    <button type="submit">Crear</button>
</form>

<a href="{{ route('profesors') }}">Volver</a>
