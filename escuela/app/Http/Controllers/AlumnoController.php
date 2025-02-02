<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::orderBy('id', 'desc')->simplePaginate();
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request -> validate([
            'nombre_ape' => 'required|min:5',
            'edad' => 'required|numeric',
        ]);
        $alumno = new Alumno();
        $alumno->nombre_ape = $request->nombre_ape;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->route('alumnos.show',$alumno);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $alumno)
    {
    $alumno = Alumno::find($alumno);
    return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $alumno)
    {
    $alumno = Alumno::find($alumno);
    return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->nombre_ape = $request->nombre_ape;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        return redirect()->route('alumnos.show', $alumno);
    }

    /**
     * Remove the specified resource from storage.
     */
    
     public function confirmar(string $id)
     {
        $alumno = Alumno::find($id);
        return view('alumnos.confirmar', compact('alumno'));
    }
    public function destroy($id)
    {
        Alumno::find($id)->delete();
        return redirect()->route('alumnos');
    }
}
