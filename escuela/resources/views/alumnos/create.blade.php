<form method="post" action="{{route('guardar')}}">
    @csrf
    <label for="">Nombre y Apellido: </label>
    <input type="text" name="nombre_ape" value=""><br>
    <label for="">Edad: </label>
    <input type="text" name="edad" value=""><br>
    <label for="">Telefono</label>
    <input type="number" name="telefono" value=""><br>
    <label for="">Direccion</label>
    <input type="text" name="direccion" value=""><br>
    <button type="submit">Crear</button>
</form>
<a href="{{route('alumnos')}}">Volver</a>