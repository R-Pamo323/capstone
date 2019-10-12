@extends('layout')
@section('title','Editar Transferencia')
    
@section('content')

<h1>Editar Transferencia</h1>
    @if (session('mensaje'))
        <div class = "alert alert-success"> {{session('mensaje')}}</div>
    @endif
    <form method="POST" action="{{ route('updatetransferencia' , $transferencia->id) }}"> 
        @method('PUT')
        @csrf
        <div>Datos Medico<br>
                <input type="hidden" name="user_id" value={{$transferencia->user_id}}>
                <input type="text" name="doc_nombre" placeholder="Nombre Medico..." class="form-control mb-2" value ="{{$transferencia->user->doc_nombre}}" disabled >
                <br>
                <input type="text" name="doc_especialidad" placeholder="Especialidad..." class="form-control mb-2" value ="{{$transferencia->user->doc_especialidad}}" disabled>
                <br>
                <input type="text" name="doc_cmp" placeholder="CMP.." class="form-control mb-2" value ="{{$transferencia->user->doc_cmp}}" disabled>
        </div>
        <div>Datos Paciente <br>
                <input type="hidden" name="paciente_id" value={{$transferencia->paciente_id}}>
                <input type="text" name="pac_nombre" placeholder="Nombre..." class="form-control mb-2" value ="{{$transferencia->paciente->pac_nombre}}" disabled>
                <br>
                <input type="text" name="pac_apellido" placeholder="Apellido..." class="form-control mb-2" value ="{{$transferencia->paciente->pac_apellido}}" disabled>
                <br>
                <input type="text" name="pac_dni" placeholder="DNI..." class="form-control mb-2" value ="{{$transferencia->paciente->pac_dni}}" disabled>
                <br>
                <input type="text" name="pac_distrito" placeholder="Distrito..." class="form-control mb-2" value ="{{$transferencia->paciente->pac_distrito}}" disabled>
                <br>
                <input type="number" name="pac_asegurado" placeholder="Asegurado?..." class="form-control mb-2" value ={{$transferencia->paciente->pac_asegurado}} disabled>
                <br>
                <input type="text" name="pac_seguro" placeholder="Tipo de Seguro..." class="form-control mb-2" value ="{{$transferencia->paciente->pac_seguro}}" disabled>
                <br>
            
        </div>
        <div>
            Datos Generales <br>
                <input type="date" name="tra_fecha" placeholder="Fecha..." class="form-control mb-2" value ={{$transferencia->tra_fecha}}>
                <br>
                <input type="number" name="posta_id" placeholder="Origen..." class="form-control mb-2" value ={{$transferencia->posta_id}}>
                <br>
                <input type="number" name="clinica_id" placeholder="Destino..." class="form-control mb-2" value ={{$transferencia->clinica_id}}>
                <br>
        </div>
        <div>Resumen Historia Clinica
                <input type="text" name="tra_anamnesis" placeholder="Anamnesis..." class="form-control mb-2" value ="{{$transferencia->tra_anamnesis}}">
                <br>
                <input type="text" name="tra_diagnostico" placeholder="Diagnostico..." class="form-control mb-2" value ="{{$transferencia->tra_diagnostico}}">
                <br>
                <input type="text" name="tra_tratamiento" placeholder="Tratamiento..." class="form-control mb-2" value ="{{$transferencia->tra_tratamiento}}">
                <br>
                <input type="text" name="tra_coordinacion" placeholder="Coordinacion..." class="form-control mb-2" value ="{{$transferencia->tra_coordinacion}}">
                <br>
                <input type="number" name="tra_condicion" placeholder="Condicion..." class="form-control mb-2" value ={{$transferencia->tra_condicion}}>
                <br>
                <input type="text" name="tra_especialidad" placeholder="Especialidad..." class="form-control mb-2" value ="{{$transferencia->tra_especialidad}}">
                <br>
                <input type="text" name="tra_persona_acompanante" placeholder="Acompañante..." class="form-control mb-2" value ="{{$transferencia->tra_persona_acompanante}}">
                <br>
        </div>
        <div class="form-group row"> Observaciones <br>
                <div class="col-xs-2">
                  <label for="ex1">Presion Arterial</label>
                  <input class="form-control" id="ex1" type="number" step="0.01" name="tra_o_presionarterial" value ={{$transferencia->tra_o_presionarterial}}>
                </div>
                <div class="col-xs-2">
                  <label for="ex2">Respiracion</label>
                  <input class="form-control" id="ex2" type="number" step="0.01" name="tra_o_respiracion" value ={{$transferencia->tra_o_respiracion}}>
                </div>
                <div class="col-xs-2">
                  <label for="ex3">Pulso</label>
                  <input class="form-control" id="ex3" type="number" step="0.01" name="tra_o_pulso" value ={{$transferencia->tra_o_pulso}}>
                </div>
                <div class="col-xs-2">
                    <label for="ex4">Temperatura</label>
                    <input class="form-control" id="ex4" type="number" step="0.01" name="tra_o_temperatura" value ={{$transferencia->tra_o_temperatura}}>
                </div>
        </div>
        <div>Recomendaciones
                <input type="text" name="tra_a_recomendacion" placeholder="Recomendacion..." class="form-control mb-2" value ="{{$transferencia->tra_a_recomendacion}}">
                <br>
                <input type="text" name="tra_a_problemas_esperados" placeholder="Problemas Esperados..." class="form-control mb-2" value ="{{$transferencia->tra_a_problemas_esperados}}">
                <br>
                <input type="number" name="tra_confirmacion" placeholder="Confirmacion..." class="form-control mb-2" value ={{$transferencia->tra_confirmacion}}>
                <br>
        </div>
        <button class = "btn btn-warning btn-block" type="submit">Actualizar</button> 
    </form>


@endsection