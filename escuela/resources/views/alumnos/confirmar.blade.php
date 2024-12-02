<form action="{{route('alumnos.destroy',$alumno->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <label for="">Seguro que quieres eliminar a {{$alumno->nombre_ape}}</label><br>
    <button type="submit">Si</button>
    <a href="{{route('alumnos')}}">No</a>
</form>