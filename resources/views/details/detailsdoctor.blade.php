@extends('layout')

@section('title','Doctor')
<main>
    

@section('content')

        <div>Datos Medico<br>
            @foreach($doctor as $user)
                <input type="hidden" name="user_id" value={{$user->id}}> 
                <input type="text" name="doc_nombre" placeholder="Nombre Medico..." class="form-control mb-2" value ={{$user->doc_nombre}} >
                <br>
                <input type="text" name="doc_apellido" placeholder="Apellido Medico..." class="form-control mb-2" value ={{$user->doc_apellido}} >
                <br>
                <input type="text" name="doc_especialidad" placeholder="Especialidad..." class="form-control mb-2" value ={{$user->doc_especialidad}}>
                <br>
                <input type="text" name="doc_cmp" placeholder="CMP.." class="form-control mb-2" value ={{$user->doc_cmp}} >
                <br>
                <input type="text" name="doc_dni" placeholder="DNI.." class="form-control mb-2" value ={{$user->doc_dni}} >
                <br>
                <input type="text" name="doc_email" placeholder="Email..." class="form-control mb-2" value ={{$user->doc_email}}>
                <br>
            @endforeach
            <p> <a href="{{ route('home') }}" class="btn btn-outline-warning btn-lg">Regresar</a></p>
        </div>
</main>
@endsection