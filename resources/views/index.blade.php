@extends('layouts.app')
@section('titulo')
    Mi primer app laravel
@endsection
@section('contenido')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($tareas as $tarea)
                    <li class="list-group-item"><a href="show/{{$tarea->id}}" style="color: cornflowerblue">{{$tarea->nombre}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection