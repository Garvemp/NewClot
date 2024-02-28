@extends('admin.master')

@section('title', 'Products')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/products') }}"><i class="fa-solid fa-boxes-stacked"></i>Productos</h2></a>
</li>
@endsection 

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-solid fa-boxes-stacked"></i>Productos</h2>
        </div>

        <div class="inside">
            <div class="btns">
                <a href="{{ url('/admin/product/add') }}" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i>Agregar producto
                </a>
            </div>
            <table class="table">
                <thead>
                    <tr>

                        <td>ID</td>
                        <td>Imagen</td>
                        <td>Nombre</td>
                        <td>Categoría</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>


                    
                    
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <img class="img-thumbnail img-fluid" src=" {{ asset('storage').'/'.$product->Foto }}" width="100" alt="">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name}}</td>
                

                        <td>
                            <div class="opts">

                                <a href="{{ url('/admin/product/'.$product->id.'/edit') }}" onclick="return confirm('¿Estás seguro de que quieres editar este registro en la base de datos?')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('/admin/product/'.$product->id.'/delete') }}" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro de la basse de datos?')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Eliminar"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection