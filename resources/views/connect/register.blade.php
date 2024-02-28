@extends('connect.master')

@section('title', 'Register')

@section('content')
<div class="box box_register shadow">
    <div class="inside">
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/images/NewClot.png') }}" alt="">
            </a>
        </div>
    
    {!! Form::open(['url' => '/register']) !!}

        <label for="name" class="mtop16">Nombre:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
            </div>
            {!! form::text('name', null, ['class' => 'form-control', 'required']) !!}
        </div>
        

        <label for="lastname" class="mtop16">Apellido:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-regular fa-user"></i></div>
            </div>
            {!! form::text('lastname', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <label for="email" class="mtop16">Email Address:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
            </div>
            {!! form::email('email', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <label for="password" class="mtop16">Password:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
            </div>
            {!! form::password('password', ['class' => 'form-control', 'required']) !!}
        </div>

        <label for="cpassword" class="mtop16">Confirm Password:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa-solid fa-lock"></i></div>
            </div>
            {!! form::password('cpassword', ['class' => 'form-control', 'required']) !!}
        </div>


        
        {!! Form::submit('Create Account', ['class' => "btn btn-success mtop16"]) !!}
       

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
            <a href="{{ url('/login') }}">Log In</a>
        </div>
        {!! Form::close() !!}
    </div>
    

</div>
@stop