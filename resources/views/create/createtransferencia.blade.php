@extends('layout')
@section('title','Crear Transferencia')
    
@section('content')

<h1>Crear Translado</h1>

    <form method="POST" action="{{ route('datostransferencia') }}"> 
        @csrf
        <div>Datos Medico<br>
            @foreach($doctor as $user)
                <input type="hidden" name="user_id" value={{$user->id}}> 
                <input type="text" name="doc_nombre" placeholder="Nombre Medico..." class="form-control mb-2" value ="{{$user->doc_nombre}}" >
                <br>
                <input type="text" name="doc_especialidad" placeholder="Especialidad..." class="form-control mb-2" value ="{{$user->doc_especialidad}}">
                <br>
                <input type="text" name="doc_cmp" placeholder="CMP.." class="form-control mb-2" value ="{{$user->doc_cmp}}" >
            @endforeach
        </div>
        <div>Datos Paciente <br>
            @foreach($paciente as $user1)
                <input type="hidden" name="paciente_id" value={{$user1->id}}> 
                <input type="text" name="pac_nombre" placeholder="Nombre..." class="form-control mb-2" value ="{{$user1->pac_nombre}}">
                <br>
                <input type="text" name="pac_apellido" placeholder="Apellido..." class="form-control mb-2" value ="{{$user1->pac_apellido}}">
                <br>
                <input type="text" name="pac_dni" placeholder="DNI..." class="form-control mb-2" value ="{{$user1->pac_dni}}">
                <br>
                <input type="text" name="pac_distrito" placeholder="Distrito..." class="form-control mb-2" value ="{{$user1->pac_distrito}}">
                <br>
                <input type="number" name="pac_asegurado" placeholder="Asegurado?..." class="form-control mb-2" value ={{$user1->pac_asegurado}}>
                <br>
                <input type="text" name="pac_seguro" placeholder="Tipo de Seguro..." class="form-control mb-2" value ="{{$user1->pac_seguro}}">
                <br>
            @endforeach
            
        </div>
        <div>
            Datos Generales <br>
                <input type="date" name="tra_fecha" placeholder="Fecha..." class="form-control mb-2">
                <br>
                <input type="number" name="posta_id" placeholder="Origen..." class="form-control mb-2">
                <br>
                <input type="number" name="clinica_id" placeholder="Destino..." class="form-control mb-2">
                <br>
        </div>
        <div>Resumen Historia Clinica
                <input type="text" name="tra_anamnesis" placeholder="Anamnesis..." class="form-control mb-2">
                <br>
                <input type="text" name="tra_diagnostico" placeholder="Diagnostico..." class="form-control mb-2">
                <br>
                <input type="text" name="tra_tratamiento" placeholder="Tratamiento..." class="form-control mb-2">
                <br>
                <input type="text" name="tra_coordinacion" placeholder="Coordinacion..." class="form-control mb-2">
                <br>
                <input type="number" name="tra_condicion" placeholder="Condicion..." class="form-control mb-2">
                <br>
                <input type="text" name="tra_especialidad" placeholder="Especialidad..." class="form-control mb-2">
                <br>
                <input type="text" name="tra_persona_acompanante" placeholder="Acompañante..." class="form-control mb-2">
                <br>
        </div>
        <div class="form-group row"> Observaciones <br>
                <div class="col-xs-2">
                  <label for="ex1">Presion Arterial</label>
                  <input class="form-control" id="ex1" type="number" step="0.01" name="tra_o_presionarterial">
                </div>
                <div class="col-xs-2">
                  <label for="ex2">Respiracion</label>
                  <input class="form-control" id="ex2" type="number" step="0.01" name="tra_o_respiracion">
                </div>
                <div class="col-xs-2">
                  <label for="ex3">Pulso</label>
                  <input class="form-control" id="ex3" type="number" step="0.01" name="tra_o_pulso">
                </div>
                <div class="col-xs-2">
                    <label for="ex4">Temperatura</label>
                    <input class="form-control" id="ex4" type="number" step="0.01" name="tra_o_temperatura">
                </div>
        </div>
        <div>Recomendaciones
                <input type="text" name="tra_a_recomendacion" placeholder="Recomendacion..." class="form-control mb-2">
                <br>
                <input type="text" name="tra_a_problemas_esperados" placeholder="Problemas Esperados..." class="form-control mb-2">
                <br>
                <input type="number" name="tra_confirmacion" placeholder="Confirmacion..." class="form-control mb-2">
                <br>
        </div>
                
        
        <button class = "btn btn-primary btn-block" type="submit">Guardar</button> 
    </form>


@endsection