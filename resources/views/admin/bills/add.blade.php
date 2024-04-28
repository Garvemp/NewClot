@extends('admin.master')

@section('title', 'Add Bills')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/bills') }}"><i class="fa-solid fa-money-bill"></i></i>Factura</h2></a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/bills/add') }}"><i class="fa-solid fa-plus"></i>Generar Factura</h2></a>
</li>
@endsection 


@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-solid fa-plus"></i>Generar Factura</h2>
        </div>


        <div class="inside">
            {!! Form::open(['url' => '/admin/bill/add']) !!}

            <div class="content-cl">
                <div class="content-cl1">
                    <h2 class="title"><i class="fa-solid fa-person"></i>Info Compra</h2>
                    
                    <div class="row mtop16">
                        <div class="col-md-3 ">
                            <label for="id_product">Id Producto:</label>
                            <div class="input-group"> 
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa-solid fa-keyboard"></i>
                                    </span>
                                    {!! Form::text('id_product', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-3">
                            <label for="id_client">Cédula Cliente:</label>
                            <div class="input-group"> 
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa-solid fa-keyboard"></i>
                                    </span>
                                    {!! Form::text('id_client', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="date_e">Fecha entrega:</label>
                            <div class="input-group">
                                <input type="date" name="date_e" id="date_e" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mtop16">
                        <div class="col-md-3">
                            <label for="price">Precio:</label>
                            <div class="input-group"> 
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa-solid fa-keyboard"></i>
                                    </span>
                                    {!! Form::number('price', null, ['class' => 'form-control', 'min' =>0.00, 'step' => 'any']) !!}
                                </div> 
                            </div>
                        </div>
        
                        <div class="col-md-3">
                            <label for="indiscount">¿En Descuento?</label>
                            <div class="input-group"> 
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa-solid fa-keyboard"></i>
                                    </span>
                                    {!! Form::select('indiscount',  ['0' => 'No', '1' => 'Si'], 0, ['class' => 'form-select']) !!}
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <label for="discount">Descuento:</label>
                            <div class="input-group"> 
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fa-solid fa-keyboard"></i>
                                    </span>
                                    {!! Form::number('discount',  0.00, ['class' => 'form-control', 'min' =>0.00, 'step' => 'any']) !!}
                                </div>
                            </div>
                        </div>

                    <div class="row mtop16">
                        <div class="col-md-3">
                            <label for="date">Fecha de la factura:</label>
                            <div class="input-group">
                                <input type="date" name="date" id="date" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="payment">Método de pago:</label>
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <select name="payment" id="payment" class="form-select">
                                    <option value="efectivo">Efectivo</option>
                                    <option value="transferencia_bancaria">Transferencia bancaria</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                        
                        

                        <div class="col-md-3">
                            <label for="facest">Estado de la factura:</label>
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <select name="facest" id="facest" class="form-select">
                                        <option value="pendiente">pendiente</option>
                                        <option value="pagada">pagada</option>
                                        <option value="vencida">vencida</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                    </div> 
                     
                    <div class="row mtop16">
                        <div class="col-md-12">
                            <label for="content">Detalles adicionales</label>
                            {!! Form::textarea('content', null, ['class' => 'form-control form-control-sm', 'id' => 'editor']) !!}
                        </div>
                    </div>

                
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
    @section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function calcularTotales() {
        var price = parseFloat($('#price').val());
        var indiscount = $('#indiscount').val() === '1' ? true : false;
        var discount = parseFloat($('#discount').val());

        var subtotal = price + (indiscount ? discount : 0);
        var total = subtotal + (subtotal * 0.19); // Asumiendo un impuesto del 19%

        $('#subtotal').val(subtotal.toFixed(2)); // Mostrar el subtotal con dos decimales
        $('#total').val(total.toFixed(2)); // Mostrar el total con dos decimales

        $('.form-control#subtotal').val(subtotal.toFixed(2));
        $('.form-control#total').val(total.toFixed(2));

    }

    // Ejecutar la función al cargar la página
    $(document).ready(function() {
        calcularTotales();

        $('#price').on('input', function() {
            calcularTotales();
        });

        // Calcular nuevamente al cambiar el precio, el descuento o si está en descuento
        $('#price, #indiscount, #discount').change(function() {
            calcularTotales();
        });
    });
    </script>
    @endsection
@endsection    
