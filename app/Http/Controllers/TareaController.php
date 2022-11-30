<?php

namespace App\Http\Controllers;
use App\Models\Tarea;
use Exception;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();

        return view('index')->with('tareas', $tareas);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        Tarea::create($validated);

        session()->flash('success', 'Tarea creada correctamente');

        return redirect('/');
    }
    public function show(Tarea $tarea)
    {
        return view('show')->with('tarea', $tarea);
    }

    public function edit(Tarea $tarea)
    {
        return view('edit')->with('tarea', $tarea);
    }

    public function update(Request $request, Tarea $tarea)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $tarea->update($validated);

        session()->flash('success', 'Tarea editada correctamente');

        return redirect('/');
    }

    public function delete(Tarea $tarea)
    {
        $tarea->delete();

        session()->flash('success', 'Tarea eliminada correctamente');

        return redirect('/');
    }
}
