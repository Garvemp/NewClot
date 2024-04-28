<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            text-align: left;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Factura</h2>
    <table>
        
        <tr>
            <th>ID</th>
            <td>{{ $bill->id }}</td>
        </tr>
        <h1>newcloth</h1>
        <hr>
        <tr>
            <th>Fecha</th>
            <td>{{ $bill->date }}</td>
        </tr>
        <tr>
            <th>Fecha de entrega</th>
            <td>{{ $bill->date_e }}</td>
        </tr>
        <hr>
        <tr>
            <th>ID Producto</th>
            <td>{{ $bill->id_product }}</td>
        </tr>
        <tr>
            <th>ID Cliente</th>
            <td>{{ $bill->id_client }}</td>
        </tr>
        <hr>
        <tr>
            <th>Precio</th>
            <td>{{ $bill->price }}</td>
        </tr>
        <tr>
            <th>Descuento</th>
            <td>{{ $bill->discount }}</td>
        </tr>
        <tr>
            <th>Valor descuento</th>
            <td>{{ $bill->indiscount }}</td>
        </tr>
        <hr>
        <tr>
            <th>Estado de la factura</th>
            <td>{{ $bill->facest }}</td>
        </tr>
        <tr>
            <th>Método de pago</th>
            <td>{{ $bill->payment }}</td>
        </tr>
        <hr>
        <tr>
            <th>Subtotal</th>
            <td>{{ $bill->subtotal }}</td>
        </tr>
        <tr>
            <th><strong>Total</strong></th>
            <td>{{ $bill->total }}</td>
        </tr>
    </table>
</body>
</html>