@extends('layout')

@section('title','Transferencia')
    
@section('content')

    <div>Datos Transferencia <br>
            @foreach($transferencia as $user1)
                <input type="hidden" name="paciente_id" value={{$user1->id}}> 
                <input type="text" name="tra_anamnesis" placeholder="Nombre..." class="form-control mb-2" value ={{$user1->tra_anamnesis}}>
                <br>
                <input type="text" name="tra_diagnostico" placeholder="Apellido..." class="form-control mb-2" value ={{$user1->tra_diagnostico}}>
                <br>
                <input type="text" name="tra_tratamiento" placeholder="DNI..." class="form-control mb-2" value ={{$user1->tra_tratamiento}}>
                <br>
                <input type="text" name="pac_nombre" placeholder="Sexo..." class="form-control mb-2" value ={{$user1->paciente->pac_nombre}}>
                <br>
                <input type="email" name="pos_nombre" placeholder="Sexo..." class="form-control mb-2" value ={{$user1->posta->pos_nombre}}>
                <br>
                <input type="date" name="tra_fecha" placeholder="Nacimiento..." class="form-control mb-2" value ={{$user1->tra_fecha}}>
                <br>
            @endforeach
        <p> <a href="{{ route('transferencia') }}" class="btn btn-outline-warning btn-lg">Regresar</a></p>
    </div>


@endsection