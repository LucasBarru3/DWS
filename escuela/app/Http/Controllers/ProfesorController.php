<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesor::simplePaginate(10); 
        return view('profesors.index', compact('profesores'));
    }

    // Muestra el formulario para crear un nuevo profesor
    public function create()
    {
        $profesiones = Profesor::distinct()->pluck('profesion');
       
        return view('profesors.create', compact('profesiones'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombreApellido' => 'required|string|max:75',
            'profesion' => 'required|string|max:35',
            'gradoAcademico' => 'required|string|max:35',
            'telefono' => 'nullable|string|max:35',
        ]);

        Profesor::create($request->all());

        return redirect()->route('profesors');
    }
    public function confirmar(string $id)
    {
       $profesor = Profesor::find($id);
       return view('profesors.confirmar', compact('profesor'));
   }
    public function destroy($id)
    {
        Profesor::find($id)->delete();
        return redirect()->route('profesors');
    }
}