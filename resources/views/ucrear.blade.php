@extends('layout')

@section('title','Crear Paciente')
    
@section('content')
    <h1>Paciente</h1>
    <form method="POST" action="{{ route('ucrear') }}"> 
        @csrf
        <div>Datos Personales<br>
            @foreach ($usuario as $item)
                <input name="name" placeholder="Nombres..." value="{{ $item->apellidos_pac }}">
                <br>
                <input name="apellidos" placeholder="Apellidos..." value="{{ $item->postas->direccion_pos }}">
                <br>
                <input type="date" name="fecha" value="{{ old('date') }}"><br>
                <input name="numdoc" placeholder="Num. Documento" value="{{ old('numdoc') }}"><br>
            @endforeach
        </div>
        <div>
            Lugar de Residencia <br>
            <input name="pais" placeholder="Pais..." value="{{ old('pais') }}" ><br>
            <input name="departamento" placeholder="Departamento..." value="{{ old('departamento') }}"><br>
            <input name="provincia" placeholder="Provincia..." value="{{ old('provincia') }}"><br>
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