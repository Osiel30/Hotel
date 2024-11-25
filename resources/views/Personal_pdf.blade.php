<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Personal</title>
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
            margin-bottom: 15px;
            font-size: 20px; /* Título más pequeño */
        }

        .report-info {
            text-align: right;
            font-size: 12px; /* Texto de reporte más pequeño */
            color: #555;
            margin-bottom: 15px;
        }

        .table-container {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        table {
            width: 70%; /* Ancho reducido */
            max-width: 600px; /* Ancho máximo */
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: #ffffff;
            margin-top: 10px;
            font-size: 12px; /* Texto dentro de la tabla más pequeño */
        }

        th, td {
            padding: 6px 8px; /* Padding reducido */
            text-align: left;
        }

        th {
            background-color: #000;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(odd) {
            background-color: #f2f2f2; /* Gris claro para filas impares */
        }

        tr:nth-child(even) {
            background-color: #ffffff; /* Blanco para filas pares */
        }

        td {
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #e0e0e0; /* Efecto hover ligero */
        }

        .empty-message {
            text-align: center;
            font-size: 14px; /* Texto del mensaje vacío reducido */
            color: #888;
        }
    </style>
</head>
<body>
    <div class="report-info">
        <p>Fecha del reporte: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
    </div>
    <h1>Reporte de Personal</h1>
    <div class="table-container">
        <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Turno</th>
                <th>Hotel</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($personal as $persona)
                <tr>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->puesto }}</td>
                    <td>{{ $persona->turno }}</td>
                    <td>{{ $persona->hotel->nombre ?? 'N/A' }}</td>
                    <td>{{ $persona->email }}</td>
                    <td>{{ $persona->telefono }}</td>
                    <td>{{ $persona->estado }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="empty-message">No se encontró personal con esos filtros</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <p style="text-align: right; margin-top: 10px; font-size: 12px;">Total de resultados: {{ $personal->count() }}</p>
</body>
</html>
