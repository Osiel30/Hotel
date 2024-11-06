<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('/css/Modulo_Facturas/Listar.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="header">
    <div class="logo">
      <img src="img/logo.png" class="logo-image" alt="Logo">
      <span>HUPV</span>
    </div>
    <div class="menu-items">
      <div class="menu-item">
        <img src="img/Mis_reservas.png" alt="Reservaciones">
        <span>Reservaciones</span>
      </div>
      <div class="menu-item">
        <img src="img/Clientes.png" alt="Clientes">
        <span>Clientes</span>
      </div>
      <div class="menu-item">
        <img src="img/Habitaciones1.png" alt="Habitaciones">
        <span>Habitaciones</span>
      </div>
      <div class="menu-item">
        <img src="img/Personal.png" alt="Personal">
        <span>Personal</span>
      </div>
      <div class="menu-item">
        <a href="{{ route('facturacion')}}"> 
          <img src="img/Facturas.png" alt="Facturas">
          <span>Facturas</span>
        </a>
      </div>
      <div class="menu-item">
        <img src="img/Marketing.png" alt="Marketing">
        <span>Marketing</span>
      </div>
      <div class="menu-item">
        <img src="img/Inventario.png" alt="Inventario">
        <span>Inventario</span>
      </div>
    </div>
    <div class="profile-icons">
      <img src="img/Calendario.png" alt="Calendar">
      <img src="img/Notificacion.png" alt="Notifications">
      <img src="img/Usuario.png" alt="User">
    </div>
  </div>

  <div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="sidebar-title">
      <a href="{{ route('facturacion') }}">
        <span>Hacer factura</span>
      </a>
      </div>

      <div class="sidebar-title">
        <span>Listar facturas</span>
      </div>
    </div>

    <div class="container2">
    <input type="text" class="facturas-search" placeholder="Buscar por ID" id="search-id">
    
    <table class="facturas-table">
        <thead class="facturas-thead">
            <tr>
                <th class="facturas-th">ID de Factura</th>
                <th class="facturas-th">Nombre del Cliente</th>
                <th class="facturas-th">Fecha de Check-out</th>
                <th class="facturas-th">Monto Total</th>
                <th class="facturas-th">Modo de Pago</th>
                <th class="facturas-th">Acción</th>
            </tr>
        </thead>
        <tbody>
    <tr class="facturas-tr">
        <td class="facturas-td">1</td>
        <td class="facturas-td">Juan Perez</td>
        <td class="facturas-td">2024-11-01</td>
        <td class="facturas-td">$150.00</td>
        <td class="facturas-td">PayPal</td>
        <td class="facturas-td">
            <a class="facturas-link" href="#">Ver</a>
            <a class="facturas-link" href="#">Eliminar</a>
            <a class="facturas-link" href="#">Imprimir</a>
        </td>
    </tr>

    <tr class="facturas-tr">
        <td class="facturas-td">2</td>
        <td class="facturas-td">Maria Lopez</td>
        <td class="facturas-td">2024-11-02</td>
        <td class="facturas-td">$200.00</td>
        <td class="facturas-td">PayPal</td>
        <td class="facturas-td">
            <a class="facturas-link" href="#">Ver</a>
            <a class="facturas-link" href="#">Eliminar</a>
            <a class="facturas-link" href="#">Imprimir</a>
        </td>
    </tr>

    <tr class="facturas-tr">
        <td class="facturas-td">3</td>
        <td class="facturas-td">Carlos Garcia</td>
        <td class="facturas-td">2024-11-03</td>
        <td class="facturas-td">$250.00</td>
        <td class="facturas-td">PayPal</td>
        <td class="facturas-td">
            <a class="facturas-link" href="#">Ver</a>
            <a class="facturas-link" href="#">Eliminar</a>
            <a class="facturas-link" href="#">Imprimir</a>
        </td>
    </tr>

    <tr class="facturas-tr">
        <td class="facturas-td">4</td>
        <td class="facturas-td">Ana Torres</td>
        <td class="facturas-td">2024-11-04</td>
        <td class="facturas-td">$300.00</td>
        <td class="facturas-td">PayPal</td>
        <td class="facturas-td">
            <a class="facturas-link" href="#">Ver</a>
            <a class="facturas-link" href="#">Eliminar</a>
            <a class="facturas-link" href="#">Imprimir</a>
        </td>
    </tr>

    <tr class="facturas-tr">
        <td class="facturas-td">5</td>
        <td class="facturas-td">Luis Martinez</td>
        <td class="facturas-td">2024-11-05</td>
        <td class="facturas-td">$350.00</td>
        <td class="facturas-td">PayPal</td>
        <td class="facturas-td">
            <a class="facturas-link" href="#">Ver</a>
            <a class="facturas-link" href="#">Eliminar</a>
            <a class="facturas-link" href="#">Imprimir</a>
        </td>
    </tr>
    <!-- Más filas -->
</tbody>

    </table>

    <div class="facturas-pagination">
        <!-- Paginación aquí -->
    </div>
</div>

      <!-- <div class="pagination">
          <a href="#">« Anterior</a>
          <a href="#">1</a>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">Siguiente »</a>
      </div> -->
    </div>
  </div>
</body>
</html>
