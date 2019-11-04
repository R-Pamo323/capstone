@extends('layout')

@section('title','Historias')
    
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                @foreach ($historia as $item)
                <a href="{{ route('crearhistoria', $item->paciente_id) }}" class="btn btn-outline-info btn-lg">Agregar Historia</a>
                    <div class="card mb-3">
                        <div class="card-header">{{$item->his_fecha}}</div>
    
                        <div class="card-body">
                            <h3>{{$item->his_diagnostico}}</h3>
                            <p>Sintomas: {{ $item->his_sintomas }}</p>
                            <p>Tratamiento: {{ $item->his_tratamiento }}</p>
                            <p>Tratamiento: {{ $item->paciente_id }}</p>
                            <p> 
                                <a href="{{ route('editarhistorias', $item->id) }}" class="btn btn-outline-warning btn-lg">Editar</a>   
                                <form action="{{ route('deletehistorias', $item->id) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class = "btn btn-outline-danger btn-sm" type="submit">
                                    Eliminar</button>
                                </form> 
                            
                            
                            </p>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>

@endsection