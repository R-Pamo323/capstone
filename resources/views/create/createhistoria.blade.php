@extends('layout')
@section('title','Crear Historia')
    
@section('content')

<h1>Crear Historia</h1>

    <form method="POST" action="{{ route('datoshistoria') }}"> 
        @csrf
        <div>Datos Historia<br>
                <input type="hidden" name="paciente_id" value="{{$historia->paciente_id}}"> 
                <input type="text" name="pac_nombre" placeholder="Nombre Paciente..." class="form-control mb-2" value ="{{$historia->paciente->pac_nombre }}" >
                <br>
                <input type="date" name="his_fecha" placeholder="Fecha de Historia..." class="form-control mb-2">
                <br>
                <input type="text" name="his_diagnostico" placeholder="Diagnostico.." class="form-control mb-2">
                <br>
                <input type="text" name="his_tratamiento" placeholder="Tratamiento..." class="form-control mb-2">
                <br>
                <input type="text" name="his_sintomas" placeholder="Tratamiento.." class="form-control mb-2">
            
        </div>

        <button class = "btn btn-primary btn-block" type="submit">Guardar</button> 
    </form>
@endsection