@extends('admin.master')

@section('title', 'Add Products')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/products') }}"><i class="fa-solid fa-boxes-stacked"></i>Productos</h2></a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/products/add') }}"><i class="fa-solid fa-plus"></i>Agregar Productos</h2></a>
</li>
@endsection 

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-solid fa-plus"></i>Agregar Productos</h2>
        </div>

        <div class="inside">
            {!! Form::open(['url' => '/admin/product/add', 'files' => true]) !!}
            <div class="row">

                <div class="col-md-3">
                    <label for="name">Nombre del producto:</label>
                    <div class="input-group"> 
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-keyboard"></i>
                            </span>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="category">Categoría:</label>
                    <div class="input-group"> 
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-keyboard"></i>
                            </span>
                            {!! Form::select('category', $categories, null, ['class' => 'form-select']) !!}
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="Foto">Imagen Producto:</label>
                    <div class="input-group">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-image"></i>
                            </span>
                            @if(isset($product->Foto))
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$product->Foto }}" width=100 alt="">
                            @endif
                            {!! Form::file('Foto', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
  
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    <label for="content">Descripción</label>
                    {!! Form::textarea('content', null, ['class' => 'form-control form-control-sm', 'id' => 'editor']) !!}
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                </div>
            </div>


            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection