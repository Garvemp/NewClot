@extends('admin.master')

@section('title', 'Usuarios')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ url('/admin/users') }}"><i class="fa-solid fa-users"></i>Usuarios</h2></a>
</li>
@endsection 

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fa-solid fa-users"></i>Usuarios</h2>
        </div>
        <script>
            $(document).ready( function(){
                $('table').DataTable({
                    "pageLength":3,
                    LengthMenu:[
                        [3,10,25,50],
                        [3,10,25,50]
                    ],
                    "language":{
                        "url":"https://cdn.datatables.net/plug-ins/2.0.5/i18n/es-MX.json"
                    }
                });
            });
        </script>

        <div class="inside">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Email</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="opts">
                                
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