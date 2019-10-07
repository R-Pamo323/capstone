@extends('layout')

@section('title','Crear Paciente')
    
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @foreach ($historia as $item)
                    <div class="card mb-3">
                        <div class="card-header">{{$item->his_fecha}}</div>
    
                        <div class="card-body">
                            <h3>{{$item->his_diagnostico}}</h3>
                            <p>Sintomas: {{ $item->his_sintomas }}</p>
                            <p>Tratamiento: {{ $item->his_tratamiento }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection