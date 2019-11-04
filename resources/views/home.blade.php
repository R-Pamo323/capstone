@extends('layout')
@section('title','Home')


@section('content')
    <h1>Holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h1>
    <h1 class="panel-title"> Bienvenido {{ auth()->user()->doc_nombre }}</h1>

    <div class="panel-body">
        <form method= "POST" action="{{ route('logout') }}">
            {{ csrf_field() }}
            <button class="btn btn-danger"> Cerrar Sesión</button>
        </form>
    </div>
@endsection