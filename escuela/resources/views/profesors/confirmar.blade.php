<form action="{{route('profesors.destroy',$profesor->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <label for="">Seguro que quieres eliminar a {{$profesor->nombreApellido}}</label><br>
    <button type="submit">Si</button>
    <a href="{{route('profesors')}}">No</a>
</form>