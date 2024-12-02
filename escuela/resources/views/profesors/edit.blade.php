<form action="{{ route('profesors.update', $alumno) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nombre_ape">Nombre apellidos:</label>
        <input type="text" id="nombre_ape" name="nombre_ape" value="{{ $alumno->nombre_ape }}">
    </div>
    <br>
    
    <div>
        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad" value="{{ $alumno->edad }}">
    </div>
    <br>
    
    <div>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ $alumno->telefono }}">
    </div>
    <br>
    
    <div>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="{{ $alumno->direccion }}">
    </div>
    <br>
    
    <button type="submit">Guardar cambios</button>
</form>

<a href="{{ route('alumnos') }}">Volver</a>