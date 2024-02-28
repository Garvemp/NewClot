@extends('admin.master')

@section('title', 'Editor Clients')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/clients') }}"><i class="fa-solid fa-person"></i></i>Clientes</h2></a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/clients') }}"><i class="fa-solid fa-plus"></i>Editar Clientes</h2></a>
</li>
@endsection 

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
             <h2 class="title"><i class="fa-solid fa-plus"></i>Editar Clientes</h2>
        </div>

        <div class="inside">
            {!! Form::model($client, ['url' => '/admin/client/'.$client->id_c.'/edit', 'files' => true, 'method' => 'post']) !!}
            

                <div class="content-cl">
                    <div class="content-cl1">
                        <h2 class="title"><i class="fa-solid fa-person"></i>Info Cliente</h2>
                        <div class="row mtop16">
                            <div class="col-md-6 ">
                                <label for="id_c">Cédula:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-keyboard"></i>
                                        </span>
                                        {!! Form::text('id_c', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-md-6">
                                <label for="name">Nombre:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-keyboard"></i>
                                        </span>
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mtop16">
                            <div class="col-md-6">
                                <label for="lastname">Apellido:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-keyboard"></i>
                                        </span>
                                        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="phone">Telefono:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-keyboard"></i>
                                        </span>
                                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mtop16">
                            <div class="col-md-6">
                                <label for="email">Email:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-keyboard"></i>
                                        </span>
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="content-cl2">   
                        <h2 class="title"><i class="fa-solid fa-ruler"></i>Medidas Cliente</h2>

                        <div class="row mtop16">

                            <div class="col-md-2">
                                <label for="contcuello">Contorno Cuello:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('contcuello', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="contbusto">Contorno Busto:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('contbusto', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="contcintura">Contorno Cintura:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('contcintura', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="contcadera">Contorno Cadera:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('contcadera', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="contestraple">Contorno Estraple:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('contestraple', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="contimperio">Contorno Imperio:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('contimperio', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="row mtop16">
        
                            <div class="col-md-2">
                                <label for="ltdelantero">Largo Talle Delantero:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('ltdelantero', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="ltposterior">Largo Talle Posterior:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('ltposterior', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="lcostado">Largo Costado:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('lcostado', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="aespalda">Ancho Espalda:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('aespalda', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="apecho">Ancho Pecho:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('apecho', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="ahombro">Ancho Hombro:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('ahombro', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                        </div>
        
                        <div class="row mtop16">
        
                            <div class="col-md-2">
                                <label for="dbusto">Distancia Busto:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('dbusto', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="adbusto">Alto De Busto:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('adbusto', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="adimperio">Alto De Imperio:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('adimperio', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="adcadera">Alto De Cadera:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('adcadera', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="chdelantero">Caída Hombro Delantero:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('chdelantero', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="chespalda">Caída Hombro Espalda:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('chespalda', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                        </div>
        
                        <div class="row mtop16">
        
                            <div class="col-md-2">
                                <label for="evdelantero">Escote Vertical Delantero:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('evdelantero', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="ehdelantero">Escote Horizontal Delantero:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('ehdelantero', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="evespalda">Escote Vertical Espalda:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('evespalda', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="ehespalda">Escote Horizontal Espalda:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('ehespalda', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="larodilla">Largo A Rodilla:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('larodilla', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="lfcorta">Largo Falda Corta:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('lfcorta', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                        </div>
        
                        <div class="row mtop16">
        
                            <div class="col-md-2">
                                <label for="lflarga">Largo Falda Larga:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('lflarga', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="lvestido">Largo Vestido:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('lvestido', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="bocamanga">Bocamanga:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('bocamanga', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="adcopa">Altura De Copa:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('adcopa', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="ldbrazo">Largo De Brazo:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('ldbrazo', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="lacodo">Largo Al Codo:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('lacodo', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                        </div>
        
                        <div class="row mtop16">
        
                            <div class="col-md-2">
                                <label for="cdpuno">Contorno De Puño:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('cdpuno', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="ltiro">Largo Tiro:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('ltiro', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="arodilla">Ancho Rodilla:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('arodilla', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="abota">Ancho Bota:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('abota', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="crodilla">Contorno Rodiila:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('crodilla', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label for="cbota">Contorno Bota:</label>
                                <div class="input-group"> 
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa-solid fa-tape"></i>
                                        </span>
                                        {!! Form::text('cbota', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mtop16">
                            <div class="col-md-12">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                    </div>
                </div>
        


            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection