@extends('layout')
@section('title','Editar Historia')
    
@section('content')

<h1>Editar Historia</h1>
    @if (session('mensaje'))
        <div class = "alert alert-success"> {{session('mensaje')}}</div>
    @endif
    <form method="POST" action="{{ route('updatehistorias' , $historia->id) }}"> 
        @method('PUT')
        @csrf
        <div>Datos de Historia<br>
                <input type="date" name="his_fecha" placeholder="Fecha..." class="form-control mb-2" value={{$historia->his_fecha}}>
                <br>
                <input type="text" name="his_diagnostico" placeholder="Diagnostico..." class="form-control mb-2" value="{{$historia->his_diagnostico}}">
                <br>
                <input type="text" name="his_tratamiento" placeholder="Tratamiento.." class="form-control mb-2" value="{{$historia->his_tratamiento}}">
                <br>
                <input type="text" name="his_sintomas" placeholder="Sintomas..." class="form-control mb-2" value="{{$historia->his_sintomas}}">
                <br>
        </div>
        <button class = "btn btn-warning btn-block" type="submit">Actualizar</button> 
    </form>


@endsection