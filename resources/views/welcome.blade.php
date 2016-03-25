@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                   @if (DB::table('users')->get() != null )
                            <a href="{{ url('/login') }}">Inicia sesión</a>
                        @else
                            <a href="{{ url('/register') }}">Registrate</a>
                        @endif  para acceder a la página.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
