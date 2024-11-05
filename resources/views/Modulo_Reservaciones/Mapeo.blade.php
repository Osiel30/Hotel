<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mapeo de disponibilidad</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/Modulo_Reservaciones/Mapeo.css') }}">
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
    </div>


    <div class="main-content">
    <div class="search-container">
    <!-- Barra de búsqueda principal -->
    <div class="main-search">
        <label for="mainSearch" class="search-label">Buscar</label>
        <input type="text" id="mainSearch" class="search-input" placeholder="Buscar...">
    </div>

    <!-- Filtros de búsqueda -->
    <div class="filters">
        <!-- Tipo de reserva -->
        <div class="filter">
            <label for="reservationType" class="search-label">Tipo de reserva</label>
            <select id="reservationType" class="search-input">
                <option value="">Seleccione</option>
                <option value="grupal">Grupal</option>
                <option value="individual">Individual</option>
            </select>
        </div>

        <!-- Fecha de ingreso -->
        <div class="filter">
            <label for="checkInDate" class="search-label">Fecha de ingreso</label>
            <input type="date" id="checkInDate" class="search-input">
        </div>

        <!-- Fecha de salida -->
        <div class="filter">
            <label for="checkOutDate" class="search-label">Fecha de salida</label>
            <input type="date" id="checkOutDate" class="search-input">
        </div>

        <!-- Tipo de habitación -->
        <div class="filter">
            <label for="roomType" class="search-label">Tipo de habitación</label>
            <select id="roomType" class="search-input">
                <option value="">Seleccione</option>
                <option value="suite">Suite</option>
                <option value="2-camas">2 camas</option>
                <option value="3-camas">3 camas</option>
                <option value="grupo-pequeño">Grupo pequeño (4 camas)</option>
                <option value="grupo-grande">Grupo grande (6 camas)</option>
            </select>
        </div>

        <!-- Hotel -->
        <div class="filter">
            <label for="hotel" class="search-label">Hotel</label>
            <select id="hotel" class="search-input">
                <option value="">Seleccione</option>
                <option value="hotel1">Hotel 1</option>
                <option value="hotel2">Hotel 2</option>
                <option value="hotel3">Hotel 3</option>
            </select>
        </div>

        <!-- Piso -->
        <div class="filter">
            <label for="floor" class="search-label">Piso</label>
            <select id="floor" class="search-input">
                <option value="">Seleccione</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
    </div>
</div>
</div>
</div>

<div class="hotels-container">
    <!-- Recuadro para Hotel 1 -->
    <div class="hotel">
        <div class="hotel-header">
            <span class="hotel-name">Hotel 1</span>
            <span class="hotel-floor">Piso 2</span>
        </div>
        <div class="rooms">
            <div class="room available">101</div>
            <div class="room occupied">102</div>
            <div class="room maintenance">103</div>
            <div class="room available">104</div>
            <div class="room occupied">105</div>
            <div class="room maintenance">106</div>
            <div class="room available">107</div>
            <div class="room occupied">108</div>
            <div class="room maintenance">109</div>
            <div class="room available">110</div>
            <div class="room occupied">111</div>
            <div class="room maintenance">112</div>
            <div class="room available">113</div>
            <div class="room occupied">114</div>
            <div class="room maintenance">115</div>
            <div class="room available">116</div>
            <div class="room occupied">117</div>
            <div class="room maintenance">118</div>
            <div class="room available">119</div>
            <div class="room occupied">120</div>
        </div>
    </div>

    <!-- Recuadro para Hotel 2 -->
    <div class="hotel">
        <div class="hotel-header">
            <span class="hotel-name">Hotel 2</span>
            <span class="hotel-floor">Piso 3</span>
        </div>
        <div class="rooms">
        <div class="room available">101</div>
            <div class="room occupied">102</div>
            <div class="room maintenance">103</div>
            <div class="room available">104</div>
            <div class="room occupied">105</div>
            <div class="room maintenance">106</div>
            <div class="room available">107</div>
            <div class="room occupied">108</div>
            <div class="room maintenance">109</div>
            <div class="room available">110</div>
            <div class="room occupied">111</div>
            <div class="room maintenance">112</div>
            <div class="room available">113</div>
            <div class="room occupied">114</div>
            <div class="room maintenance">115</div>
            <div class="room available">116</div>
            <div class="room occupied">117</div>
            <div class="room maintenance">118</div>
            <div class="room available">119</div>
            <div class="room occupied">120</div>
        </div>
    </div>
</div>
</div>

</body>

</html>
