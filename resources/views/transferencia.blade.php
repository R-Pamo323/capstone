@extends('layout')

@section('title','Transferencias')
    
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($transferencia as $item)
                    <div class="card mb-3">
                        <div class="card-header">{{$item->tra_fecha}}</div>
    
                        <div class="card-body">
                            <h3>{{$item->tra_coordinacion}}</h3>
                            <p>Especialidad: {{ $item->tra_especialidad }}</p>
                            <p>Paciente: {{ $item->paciente->pac_nombre }} {{ $item->paciente->pac_apellido }}</p>
                            <p>Proveniente De: {{ $item->posta->pos_nombre }}</p>
                            <p> <a href="{{ route('detailstransferencia', $item->id) }}" class="btn btn-outline-info btn-lg">Detalles</a>   <a href="{{ route('editartransferencia', $item->id) }}" class="btn btn-outline-warning btn-lg">Editar</a>   <a class="btn btn-outline-danger btn-lg">Atendido</a> </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection