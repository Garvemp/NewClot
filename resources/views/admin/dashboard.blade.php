@extends('admin.master')

@section('title', 'Dashboard')

@section('content') 
<div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title"><i class="fa-solid fa-magnifying-glass"></i></i> Busqueda</h2>
                        </div>
                        <div class="inside">
                            {!! Form::open(['url' => 'admin/User/dashboard']) !!}
                            
                            
                            <div class="input-group"> 
                                <label>Busque producto:</label>
                                <input type="text" id="product_id">
                                <button onclick="searchProduct()">Buscar</button>
                            </div>

                            <div class="input-group">
                                <label>Busque cliente:</label>
                                <input type="text" id="client_id">
                                <button onclick="searchClient()">Buscar</button>
                            </div>

                            <div class="input-group">
                                <label>Busque factura:</label>
                                <input type="text" id="bill_id">
                                <button onclick="searchBill()">Buscar</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


       
                            
                



    </div>
</div>
@endsection
