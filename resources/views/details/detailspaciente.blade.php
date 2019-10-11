@extends('layout')

@section('title','Paciente')
    
@section('content')

    <div>Datos Paciente <br>
            @foreach($paciente as $user1)
                <input type="hidden" name="paciente_id" value={{$user1->id}}> 
                <input type="text" name="pac_nombre" placeholder="Nombre..." class="form-control mb-2" value ={{$user1->pac_nombre}}>
                <br>
                <input type="text" name="pac_apellido" placeholder="Apellido..." class="form-control mb-2" value ={{$user1->pac_apellido}}>
                <br>
                <input type="text" name="pac_dni" placeholder="DNI..." class="form-control mb-2" value ={{$user1->pac_dni}}>
                <br>
                <input type="text" name="pac_sexo" placeholder="Sexo..." class="form-control mb-2" value ={{$user1->pac_sexo}}>
                <br>
                <input type="email" name="pac_email" placeholder="Sexo..." class="form-control mb-2" value ={{$user1->pac_email}}>
                <br>
                <input type="text" name="pac_distrito" placeholder="Distrito..." class="form-control mb-2" value ={{$user1->pac_distrito}}>
                <br>
                <input type="number" name="pac_asegurado" placeholder="Asegurado?..." class="form-control mb-2" value ={{$user1->pac_asegurado}}>
                <br>
                <input type="text" name="pac_seguro" placeholder="Tipo de Seguro..." class="form-control mb-2" value ={{$user1->pac_seguro}}>
                <br>
                <input type="date" name="pac_nacimiento" placeholder="Nacimiento..." class="form-control mb-2" value ={{$user1->pac_nacimiento}}>
                <br>
            @endforeach
        <p> <a href="{{ route('ubuscar') }}" class="btn btn-outline-warning btn-lg">Regresar</a></p>
    </div>


@endsection