<!DOCTYPE html>
<html>
<head>
    <title>Panel del Domiciliario</title>
    <style>
        body{
            background-image: url(https://www.arpaindustriale.com/sites/default/files/decors_fiches_default/new/0660_r.jpg);
         
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Pedidos Pendientes</h1>
    <table>
        <tr>
            <th>Cliente</th>
            <th>Dirección de entrega</th>
            <th>Detalles del pedido</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>Juan Pérez</td>
            <td>123 Calle Principal</td>
            <td>Pedido #123: 2 pizzas, 1 refresco</td>
            <td><button>Marcar como entregado</button></td>
        </tr>
        <tr>
            <td>Maria González</td>
            <td>456 Calle Secundaria</td>
            <td>Pedido #124: 1 hamburguesa, 2 papas fritas</td>
            <td><button>Marcar como entregado</button></td>
        </tr>
        <!-- Agrega más filas para más pedidos pendientes -->
    </table>
    <img src="../Views/img/Imagen1.png"width="300" height="300">
</body>
</html>
