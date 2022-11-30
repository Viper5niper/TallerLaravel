@extends('layouts.app')

@section('titulo')
Create Todo
@endsection

@section('contenido')

<form action="store" method="post" class="mt-4 p-4">
    @csrf
    <div class="form-group m-3">
        <label for="nombre">Nombre de tarea</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group m-3">
        <label for="descripcion">Descripcion de tarea</label>
        <textarea class="form-control" name="descripcion" rows="3"></textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Guardar">
    </div>
</form>

@endsection