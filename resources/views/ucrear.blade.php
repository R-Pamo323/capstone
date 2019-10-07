@extends('layout')

@section('title','Crear Paciente')
    
@section('content')
    <h1>Paciente</h1>
    <form method="POST" action="{{ route('ucrear') }}"> 
        @csrf
        <div>Datos Personales<br>
            @foreach ($paciente as $item)
                <input name="name" placeholder="Nombres..." value="{{ $item->pac_apellido }}">
                <br>
                <input name="apellidos" placeholder="Apellidos..." value="{{ $item->posta->pos_nombre }}">
                <br>
                <input type="date" name="fecha" value="{{ old('date') }}"><br>
                <input name="numdoc" placeholder="Num. Documento" value="{{ old('numdoc') }}"><br>
            @endforeach
        </div>
        <div>
            @foreach($historia as $item2)
                Lugar de Residencia <br>
                <input name="pais" placeholder="Pais..." value="{{ $item2->his_fecha }}" ><br>
            @endforeach

            @foreach($user as $item3)
            <input name="departamento" placeholder="Departamento..." value="{{ $item3->doc_apellido }}"><br>
            @endforeach

            @foreach($traslado as $item4)
            <input name="provincia" placeholder="Provincia..." value="{{ $item4->tra_anamnesis }}"><br>
            @endforeach
            <input name="distrito" placeholder="Distrito" value="{{ old('distrito') }}"><br>
            <input name="direccion" placeholder="Dirección..." value="{{ old('direccion') }}"><br>
            <input name="celular" placeholder="Celular..." value="{{ old('celular') }}"><br>
            <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
        </div>
        <div>
            Otros <br>
            <select name="estudio">
                <option>Primarios</option>
                <option>Secundarios</option>
                <option selected>Superior</option>
                <option>Universitario</option>
            </select>
            <select name="ecivil">
                <option selected>Soltero/a</option>
                <option>Casado/a</option>
                <option>Divorciado/a</option>
                <option>Viudo/a</option>
            </select>
        </div>
        <button>Guardar</button> <button>Cancelar</button>
    </form>


@endsection