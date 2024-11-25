<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Disponible</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #000;
            margin-bottom: 20px;
        }

        .report-info {
            text-align: right;
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: #ffffff;
            margin-top: 10px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #000;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(odd) {
            background-color: #f2f2f2; /* Light gray for odd rows */
        }

        tr:nth-child(even) {
            background-color: #ffffff; /* White for even rows */
        }

        td {
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #e0e0e0; /* Light hover effect */
        }

        .empty-message {
            text-align: center;
            font-size: 18px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="report-info">
        <p>Fecha del reporte: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
    </div>
    <h1>Lista de Inventario</h1>
    <table>
        <thead>
        <tr>
            <th>Producto</th>
            <th>Hotel</th>
            <th>Proveedor</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($inventarios as $inventario)
            <tr>
                <td>{{ $inventario->nombre_producto }}</td>
                <td>{{ $inventario->hotel->nombre }}</td>
                <td>{{ $inventario->proveedor->nombre }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="empty-message">No se encontró inventario con esos filtros</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <p style="text-align: right; margin-top: 10px;">Total de resultados: {{ $inventarios->count() }}</p>
</body>
</html>
