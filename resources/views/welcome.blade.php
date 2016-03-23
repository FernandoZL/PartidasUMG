@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                    <a href="{{ url('/login') }}">Inicia sesión</a> para acceder a la aplicación.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
