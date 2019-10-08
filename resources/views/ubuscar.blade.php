@extends('layout')
@section('title','Buscar Paciente')
    
@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>
                            Busqueda de Pacientes
                            
                            {{ Form::open(['route' => 'ubuscar', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                <div class="form-group">
                                    {{ Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'DNI']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellidos']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombres']) }}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                                <div>
                                    <a href="{{ route('crearpaciente') }}" class="btn btn-outline-success">+ Nuevo Paciente</a>
                                </div>
                                
                                
                            {{ Form::close() }}
                            
                        </h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table table-hover table-striped">
                        <tbody>
                            @foreach($paciente as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->pac_dni }}</td>
                                <td>{{ $user->pac_apellido }}</td>
                                <td>{{ $user->pac_nombre }}</td>
                                <td>{{ $user->pac_sexo }}</td>
                                <td>{{ $user->pac_email }}</td>
                                <td>{{ $user->pac_nacimiento }}</td>
                                <td><button type="button" class="btn btn-outline-info btn-lg">Historias</button> </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $paciente->render() }}
                </div>
            </div>
        </div>

@endsection