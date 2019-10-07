@extends('layout')
@section('title','Buscar Paciente')
    
@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>
                            Búsqueda de Pacientes
                            {{ Form::open(['route' => 'users', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                <div class="form-group">
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Bio']) }}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            {{ Form::close() }}
                        </h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table table-hover table-striped">
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->bio }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
            </div>
        </div>

@endsection