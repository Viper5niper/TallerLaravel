@extends('layouts.app')
@section('titulo')
    Editar tarea
@endsection
@section('contenido')

    <form action="/update/{{$tarea->id}}" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="nombre">Nombre de tarea</label>
            <input type="text" class="form-control" name="nombre" value="{{$tarea->nombre}}">
        </div>
        <div class="form-group m-3">
            <label for="descripcion">Descripcion de tarea</label>
            <textarea class="form-control" rows="3" name="descripcion">{{$tarea->descripcion}}</textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Actualizar">
        </div>
    </form>

@endsection