@extends('Layouts.plantilla')
@section('title', 'Profesores')
@section('content')
    <h2>LISTADO DE PROFESORES</h2>
    <table style="border:2px solid red; text-align:center">
        <tr>
            <th>Nombre</th>
            <th>Profesión</th>
            <th>Grado Académico</th>
            <th>Teléfono</th>
            <th></th>
        </tr>
        @foreach ($profesores as $profesor)
            <tr>
                <td> {{ $profesor->nombreApellido }} </td>
                <td> {{ $profesor->profesion }}</td>
                <td> {{ $profesor->gradoAcademico }}</td>
                <td> {{ $profesor->telefono }}</td>
                <td><a href="{{route('profesors.confirmar', $profesor->id)}}">Eliminar</a></td>

            </tr>
        @endforeach
        {{ $profesores->links() }}
    </table>
    <a href="{{route('profesors.create')}}">Crear Nuevo Profesor</a>
@endsection
