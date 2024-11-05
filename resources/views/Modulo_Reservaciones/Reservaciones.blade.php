<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estadisticas</title>
  <link rel="stylesheet" href="{{ asset('/css/Modulo_Reservaciones/Reservaciones.css') }}">
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
        <img src="img/Facturas.png" alt="Facturas">
        <span>Facturas</span>
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
      <a href="/estadisticas" class="sidebar-title">
        <span>Estadisticas</span>
      </div>

      <div class="sidebar-title">
      <a href="/mapeo" class="sidebar-title">
        <span>Mapeo de disponibilidad</span>
      </div>

      <div class="sidebar-title">
      <a href="/reservaciones" class="sidebar-title">
        <span>Reservaciones</span>
      </div>
      <!-- Aquí puedes añadir más elementos del menú lateral -->
    </div>


    <div class="main-content">
    <h2>Registros de Reservaciones</h2>
    <br></br>
    <!-- Barra de búsqueda principal -->
    <div class="main-search">
        <label for="mainSearch" class="search-label">Buscar</label>
        <input type="text" id="mainSearch" class="search-input" placeholder="Buscar...">
    </div>
      <table>
        <thead>
          <tr>
            <th>ID Reserva</th>
            <th>Nombre del Cliente</th>
            <th>Fecha Ingreso</th>
            <th>Fecha Salida</th>
            <th>Hotel</th>
            <th>Piso</th>
            <th>Habitación</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        <tr>
  <td>001</td>
  <td>Juan Pérez</td>
  <td>2024-11-01</td>
  <td>2024-11-05</td>
  <td>Hotel 1</td>
  <td>2</td>
  <td>105</td>
  <td class="actions">
    <img src="img/Opciones.png" alt="Menu" class="menu-icon">
    <div class="dropdown">
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
    </div>
  </td>
</tr>
<tr>
  <td>002</td>
  <td>Maria García</td>
  <td>2024-11-03</td>
  <td>2024-11-06</td>
  <td>Hotel 2</td>
  <td>3</td>
  <td>202</td>
  <td class="actions">
    <img src="img/Opciones.png" alt="Menu" class="menu-icon">
    <div class="dropdown">
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
    </div>
  </td>
</tr>
<tr>
  <td>003</td>
  <td>Carlos López</td>
  <td>2024-11-02</td>
  <td>2024-11-07</td>
  <td>Hotel 3</td>
  <td>1</td>
  <td>305</td>
  <td class="actions">
    <img src="img/Opciones.png" alt="Menu" class="menu-icon">
    <div class="dropdown">
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
    </div>
  </td>
</tr>
<tr>
  <td>004</td>
  <td>Laura Hernández</td>
  <td>2024-11-05</td>
  <td>2024-11-10</td>
  <td>Hotel 1</td>
  <td>4</td>
  <td>403</td>
  <td class="actions">
    <img src="img/Opciones.png" alt="Menu" class="menu-icon">
    <div class="dropdown">
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
    </div>
  </td>
</tr>
<tr>
  <td>005</td>
  <td>Andrés Torres</td>
  <td>2024-11-06</td>
  <td>2024-11-09</td>
  <td>Hotel 2</td>
  <td>5</td>
  <td>509</td>
  <td class="actions">
    <img src="img/Opciones.png" alt="Menu" class="menu-icon">
    <div class="dropdown">
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
    </div>
  </td>
</tr>
<tr>
  <td>006</td>
  <td>Sofia Martínez</td>
  <td>2024-11-08</td>
  <td>2024-11-12</td>
  <td>Hotel 3</td>
  <td>3</td>
  <td>301</td>
  <td class="actions">
    <img src="img/Opciones.png" alt="Menu" class="menu-icon">
    <div class="dropdown">
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
    </div>
  </td>
</tr>
<tr>
  <td>007</td>
  <td>Pedro Ortiz</td>
  <td>2024-11-10</td>
  <td>2024-11-13</td>
  <td>Hotel 1</td>
  <td>2</td>
  <td>210</td>
  <td class="actions">
    <img src="img/Opciones.png" alt="Menu" class="menu-icon">
    <div class="dropdown">
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
    </div>
  </td>
</tr>
<tr>
  <td>008</td>
  <td>Lucía Fernández</td>
  <td>2024-11-11</td>
  <td>2024-11-14</td>
  <td>Hotel 2</td>
  <td>1</td>
  <td>102</td>
  <td class="actions">
    <img src="img/Opciones.png" alt="Menu" class="menu-icon">
    <div class="dropdown">
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
    </div>
  </td>
</tr>
<tr>
  <td>009</td>
  <td>Diego Sánchez</td>
  <td>2024-11-12</td>
  <td>2024-11-16</td>
  <td>Hotel 3</td>
  <td>2</td>
  <td>204</td>
  <td class="actions">
    <img src="img/Opciones.png" alt="Menu" class="menu-icon">
    <div class="dropdown">
      <a href="#">Editar</a>
      <a href="#">Borrar</a>
    </div>
  </td>
</tr>

        </tbody>
      </table>
    </div>
    </div>
</body>
</html>
