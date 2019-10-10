@extends('layout')
@section('title','Crear Transferencia')
    
@section('content')

<h1>Crear Translado</h1>

    <form method="POST" action="{{ route('datostransferencia') }}"> 
        @csrf
        <div>Datos Medico<br>
            @foreach($doctor as $user)
                <input type="hidden" name="doc_id" value={{$user->id}}> 
                <input type="text" name="doc_nombre" placeholder="Nombre Medico..." class="form-control mb-2" value ={{$user->doc_nombre}} >
                <br>
                <input type="text" name="doc_especialidad" placeholder="Especialidad..." class="form-control mb-2" value ={{$user->doc_especialidad}}>
                <br>
                <input type="text" name="doc_cmp" placeholder="CMP.." class="form-control mb-2" value ={{$user->doc_cmp}} >
            @endforeach
        </div>
        <div>Datos Paciente <br>
            @foreach($paciente as $user1)
                <input type="text" name="pac_nombre" placeholder="Nombre..." class="form-control mb-2" value ={{$user1->pac_nombre}}>
                <br>
                <input type="text" name="pac_apellido" placeholder="Apellido..." class="form-control mb-2" value ={{$user1->pac_apellido}}>
                <br>
                <input type="text" name="pac_dni" placeholder="DNI..." class="form-control mb-2" value ={{$user1->pac_dni}}>
                <br>
                <input type="text" name="pac_distrito" placeholder="Distrito..." class="form-control mb-2" value ={{$user1->pac_distrito}}>
                <br>
                <input type="number" name="pac_asegurado" placeholder="Asegurado?..." class="form-control mb-2" value ={{$user1->pac_asegurado}}>
                <br>
                <input type="text" name="pac_seguro" placeholder="Tipo de Seguro..." class="form-control mb-2" value ={{$user1->pac_seguro}}>
                <br>
            @endforeach
            
        </div>
        <div>
            Otros <br>
            <select name="pac_estudio">
                <option>Primarios</option>
                <option>Secundarios</option>
                <option selected>Superior</option>
                <option>Universitario</option>
            </select>
            <select name="pac_estcivil">
                <option selected>Soltero/a</option>
                <option>Casado/a</option>
                <option>Divorciado/a</option>
                <option>Viudo/a</option>
            </select>
        </div>
        <button class = "btn btn-primary btn-block" type="submit">Guardar</button> <button>Cancelar</button>
    </form>


@endsection