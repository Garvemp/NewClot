@extends('admin.master')

@section('title', 'Clientes')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/clients') }}"><i class="fa-solid fa-person"></i>Clientes</h2></a>
</li>
@endsection 

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-solid fa-person"></i>Clientes</h2>
        </div>

        <div class="inside">
            <div class="btns">
                <a href="{{ url('/admin/client/add') }}" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i>Agregar Cliente
                </a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <td>Cédula</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Celular</td>
                        <td>Email</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->id_c }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->lastname}}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->email }}</td>
                        <td>
                            <div class="opts">

                                <a href="{{ url('/admin/client/'.$client->id_c.'/edit') }}" onclick="return confirm('¿Estás seguro de que quieres editar este registro en la base de datos?')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('/admin/client/'.$client->id_c.'/delete') }}" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro de la basse de datos?')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Eliminar"><i class="fa-solid fa-trash"></i></a>
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
