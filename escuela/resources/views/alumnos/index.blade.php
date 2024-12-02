@extends('Layouts.plantilla')
@section('title', 'Alumnos')
@section('content')
    <h2>LISTADO DE ALUMNOS</h2>
    <table style="border:2px solid red">
        <tr>
            <th>Nombre </th>
            <th>Edad</th>
            <th>Telefono</th>
            <th> </th>
        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td><a href="{{ route('alumnos.show', $alumno->id) }}"> {{ $alumno->nombre_ape }}</a></td>
                <td> {{ $alumno->edad }}</td>
                <td> {{ $alumno->telefono }}</td>
                <td> {{ $alumno->direccion }}</td>
                <td><a href="{{route('edit', $alumno)}}">Edit</a></td>
                <td><a href="{{route('alumnos.confirmar', $alumno->id)}}">Eliminar</a></td>            </tr>
        @endforeach
        {{$alumnos->links()}}
    </table>
    <a href="{{route('alumnos.create')}}">Crear Nuevo Alumno</a>
@endsection
