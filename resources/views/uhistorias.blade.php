@extends('layout')

@section('title','Historias')
    
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-outline-info btn-lg">Agregar Historia</a> </p>
                @foreach ($historia as $item)
                    <div class="card mb-3">
                        <div class="card-header">{{$item->his_fecha}}</div>
    
                        <div class="card-body">
                            <h3>{{$item->his_diagnostico}}</h3>
                            <p>Sintomas: {{ $item->his_sintomas }}</p>
                            <p>Tratamiento: {{ $item->his_tratamiento }}</p>
                            <p> <a href="{{ route('editarhistorias', $item->id) }}" class="btn btn-outline-warning btn-lg">Editar</a> <a class="btn btn-outline-danger btn-lg">Eliminar</a> </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection