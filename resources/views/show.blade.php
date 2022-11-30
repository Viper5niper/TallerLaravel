@extends('layouts.app')

@section('titulo')
    Detalles
@endsection

@section('contenido')

    <div class="card text-center mt-5">
        <div class="card-header">
            <b>Detalles de la tarea</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$tarea->nombre}}</h5>
            <p class="card-text">{{$tarea->descripcion}}</p>
            <a href="/edit/{{$tarea->id}}"><span class="btn btn-primary">Editar</span></a>
            <a href="/delete/{{$tarea->id}}"><span class="btn btn-danger">Eliminar</span></a>
        </div>
    </div>

@endsection