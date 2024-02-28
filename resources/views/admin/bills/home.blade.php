@extends('admin.master')
@section('title', 'Facturas')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/bills') }}"><i class="fa-solid fa-money-bill"></i>Facturas</h2></a>
</li>
@endsection 

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-solid fa-money-bill"></i>Facturas</h2>
        </div>

        <div class="inside">
            <div class="btns">
                <a href="{{ url('/admin/bill/add') }}" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i>Generar Factura
                </a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Código Producto</td>
                        <td>Cedula cliente</td>
                        <td>Fecha factura</td>
                        <td>Estado de Factura</td>
                        <td>Fecha entrega</td>
                        <td>total</td>
        
                        <td></td>
                    </tr>
                </thead>
                <tbody>  
                    @foreach($bills as $bill)
                    <tr>
                        <td>{{ $bill->id }}</td>
                        <td>{{ $bill->id_product }}</td>
                        <td>{{ $bill->id_client }}</td>
                        <td>{{ $bill->date }}</td>
                        <td>{{ $bill->facest}}</td>
                        <td>{{ $bill->date_e }}</td>
                        <td>{{ $bill->total}}</td>
                        <td>
                            <div class="opts">
                                <a href="{{ url('/admin/bill/'.$bill->id.'/edit') }}" onclick="return confirm('¿Estás seguro de que quieres editar este registro en la base de datos?')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('/admin/bill/'.$bill->id.'/delete') }}" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro de la basse de datos?')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Eliminar"><i class="fa-solid fa-trash"></i></a>
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