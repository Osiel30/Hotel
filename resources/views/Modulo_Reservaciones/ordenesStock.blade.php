<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('/css/Modulo_Reservaciones/ordenesStock.css') }}">
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

  <div class="content">
        <div class="sidebar">
            <div class="sidebar-content">Stock</div>
            <div class="sidebar-content" id="omg">Ordenes</div>
        </div>
        <div class="main">
            <div class="main-content">
                <img src="img/pdf.png" alt="pdf">
                <div id="info-art">
                    <p>Fecha: 01/11/2024</p>
                    <p>Estado: En Camino</p>
                    <p>Proveedor: Proveedor XYZ</p>
                    <p>Tipo de Producto: Jabón</p>
                    <p>ID: 75657</p>
                </div>
            </div>
            <div class="main-content">
                <img src="img/pdf.png" alt="pdf">
                <div id="info-art">
                    <p>Fecha: 01/11/2024</p>
                    <p>Estado: Recibida</p>
                    <p>Proveedor: Proveedor XYZ</p>
                    <p>Tipo de Producto: Jabón</p>
                    <p>ID: 75657</p>
                </div>
            </div>
            <div class="main-content">
                <img src="img/pdf.png" alt="pdf">
                <div id="info-art">
                    <p>Fecha: 01/11/2024</p>
                    <p>Estado: Recibida</p>
                    <p>Proveedor: Proveedor XYZ</p>
                    <p>Tipo de Producto: Jabón</p>
                    <p>ID: 75657</p>
                </div>
            </div>
            <div class="main-content">
                <img src="img/pdf.png" alt="pdf">
                <div id="info-art">
                    <p>Fecha: 01/11/2024</p>
                    <p>Estado: Cancelada</p>
                    <p>Proveedor: Proveedor XYZ</p>
                    <p>Tipo de Producto: Jabón</p>
                    <p>ID: 75657</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">&raquo;</a>
    </div>

    <div class="main-content">


    </div>
      
  </div>

</body>
</html>
