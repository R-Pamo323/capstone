@extends('layout')
@section('title','Crear Paciente')
    
@section('content')

<h1>Crear Paciente</h1>

    <form method="POST" action="{{ route('datospaciente') }}"> 
        @csrf
        <div>Datos Personales<br>
                <input type="text" name="pac_nombre" placeholder="Nombres..." class="form-control mb-2">
                <br>
                <input type="text" name="pac_apellido" placeholder="Apellidos..." class="form-control mb-2">
                <br>
                <input type="text" name="pac_dni" placeholder="DNI.." class="form-control mb-2">
                <br>
                <input type="text" name="pac_sexo" placeholder="Sexo..." class="form-control mb-2">
                <br>
                <input type="date" name="pac_nacimiento" placeholder="Fecha Nacimiento..." class="form-control mb-2">
                <br>
                <input type="number" name="posta_id" placeholder="Posta..." class="form-control mb-2">
                <br>
        </div>
        <div>Lugar de Residencia <br>
            <input type="text" name="pac_pais" placeholder="Pais..." class="form-control mb-2">
            <br>
            <input type="text" name="pac_departamento" placeholder="Departamento..." class="form-control mb-2">
            <br>
            <input type="text" name="pac_provincia" placeholder="Provincia..." class="form-control mb-2">
            <br>
            <input type="text" name="pac_distrito" placeholder="Distrito..." class="form-control mb-2">
            <br>
            <input type="text" name="pac_direccion" placeholder="Direccion..." class="form-control mb-2">
            <br>
            <input type="number" name="pac_asegurado" placeholder="Asegurado?..." class="form-control mb-2">
            <br>
            <input type="text" name="pac_seguro" placeholder="Tipo de Seguro..." class="form-control mb-2">
            <br>
            <input type="email" name="pac_email" placeholder="Email..." class="form-control mb-2">
            <br>
            
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