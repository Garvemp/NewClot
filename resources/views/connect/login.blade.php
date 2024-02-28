@extends('connect.master')

@section('title', 'Login')

@section('content')
<div class="box box_login shadow">
    <div class="inside">
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/images/NewClot.png') }}" alt="">
            </a>
        </div>
    
    {!! Form::open(['url' => '/login', 'id' => 'loginForm']) !!}
    <label for="email" class="mtop16">Email Address:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
            </div>
            {!! form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <label for="email" class="mtop16">Password:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
            </div>
            {!! form::password('password', ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('Log in', ['class' => "btn btn-success mtop16"]) !!}
        {!! Form::close() !!}

        @if(Session::has('message'))
            <div class="container">
                <div class="mtop16 alert alert-{{ Session::get('typealert') }}" style="display:none;">
                    {{ Session::get('message') }}
                    @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <script>
                        $('.alert').slideDown();
                        setTimeout(function(){ $('.alert').slideUp(); }, 10000);
                    </script>
                </div>
            </div>
        @endif

        <div class=" footer mtop16">
            <a href="{{ url('/register') }}">Sign up</a>
            <a href="{{ url('/recover') }}">Forgot Password?</a>
        </div>

    </div>
    

</div>
    <script>
        // Función para validar el formulario antes de enviarlo
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if (!email || !password) {
                alert('Por favor, ingrese tanto su correo electrónico como su contraseña.');
                event.preventDefault(); // Evita que se envíe el formulario si la validación falla
            }
        });
    </script>

@stop