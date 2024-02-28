<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{ url('/static/images/NewClot.png')}}" alt="img-fluid">
        </div>

        <div class="user">
            <spam class="subtitle">Hola:</spam>
            <div class="name">
                {{ Auth::user()->name}} {{ Auth::user()->lastname}}
                <a href="{{ url('/logout')}}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Log Out">
                    <i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
            <div class="email">{{ Auth::user()->email}}</div>
        </div>
    </div>
    <div class="main">
        <ul>
            <li>
                <a href="{{ url('/admin') }}"><i class="fa-solid fa-house"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ url('/admin/users') }}"><i class="fa-solid fa-users"></i>Usuarios</a>
            </li>
            <li>
                <a href="{{ url('/admin/products') }}"><i class="fa-solid fa-boxes-stacked"></i>Productos</a>
            </li>
            <li>
                <a href="{{ url('/admin/categories/0') }}"><i class="fa-solid fa-list"></i>Categorías:</a>
            </li>
            <li>
                <a href="{{ url('/admin/clients') }}"><i class="fa-solid fa-person"></i>Clientes</a>
            </li>
            <li>
                <a href="{{ url('/admin/bills') }}"><i class="fa-solid fa-money-bill"></i>Facturas</a>
            </li>
        </ul>
    </div>
</div>





