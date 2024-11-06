<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('/css/Modulo_Facturas/facturas.css') }}">
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
        <span>Hacer factura</span>
      </div>

      <div class="sidebar-title">
      <a href="{{ route('listar') }}">
        <span>Listar facturas</span>
      </a> 
      </div>
    </div>

    <!-- formulario para esa vaina de la factura :) -->
    <div class="main-content">
            <section>
                <h2>Datos del cliente</h2>
                <form>
                    <label>Nombre del cliente:</label>
                    <input type="text" name="nombre_cliente">
                    
                    <label>Apellido paterno:</label>
                    <input type="text" name="apellido_paterno">
                    
                    <label>Apellido materno:</label>
                    <input type="text" name="apellido_materno">
                    
                    <label>Nombre adicional:</label>
                    <input type="text" name="nombre_adicional">
                    
                    <label>Número de teléfono:</label>
                    <input type="tel" name="telefono">
                    
                    <label>Correo electrónico:</label>
                    <input type="email" name="correo_electronico">
                </form>
            </section>

            <section>
                <h2>Datos de la reservación</h2>
                <form>
                    <label>ID de la reservación:</label>
                    <input type="text" name="id_reservacion">
                    
                    <label>Fecha de check-in:</label>
                    <input type="date" name="fecha_checkin">
                    
                    <label>Fecha de check-out:</label>
                    <input type="date" name="fecha_checkout">
                    
                    <label>Nombre del hotel:</label>
                    <input type="text" name="nombre_hotel">
                    
                    <label>Dirección del hotel:</label>
                    <input type="text" name="direccion_hotel">
                </form>
            </section>

            <section>
                <h2>Costos</h2>
                <form>
                    <label>Tipo de habitación:</label>
                    <input type="text" name="tipo_habitacion">
                    
                    <label>Costo por noche:</label>
                    <input type="text" name="costo_por_noche">
                    
                    <label>Noches en el hotel:</label>
                    <input type="number" name="noches">
                    
                    <label>IVA total:</label>
                    <input type="text" name="iva">
                    
                    <label>Descuento:</label>
                    <input type="text" name="descuento">
                    
                    <label>Total a pagar:</label>
                    <input type="text" name="total_a_pagar" readonly>
                </form>
            </section>

            <div class="buttons">
                <button class="confirm-button">Confirmar datos</button>
                <button class="pay-button">Pagar</button>
            </div>
        </div>
</body>
</html>
