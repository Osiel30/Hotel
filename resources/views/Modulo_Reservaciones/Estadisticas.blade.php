<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estadisticas</title>
  <link rel="stylesheet" href="{{ asset('/css/Modulo_Reservaciones/Estadisticas.css') }}">
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
      <!-- Sección de Gráficas de Crecimiento y Disponibilidad -->
      <div class="top-charts">
        <div class="chart-container">
          <h2>Ganancias Totales</h2>
          <canvas id="revenueChart"></canvas>
        </div>
        <div class="chart-container">
          <h2>Disponibilidad en Hoteles</h2>
          <canvas id="availabilityChart"></canvas>
        </div>
      </div>

      <!-- Sección de Gráficas Circulares por Hotel -->
      <div class="circular-charts">
        <div class="hotel-chart">
          <h3>Hotel 1</h3>
          <canvas id="hotel1"></canvas>
          <button class="manage-button">Gestionar Hotel</button>
        </div>
        <div class="hotel-chart">
          <h3>Hotel 2</h3>
          <canvas id="hotel2"></canvas>
          <button class="manage-button">Gestionar Hotel</button>
        </div>
        <div class="hotel-chart">
          <h3>Hotel 3</h3>
          <canvas id="hotel3"></canvas>
          <button class="manage-button">Gestionar Hotel</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Gráfico de Línea: Ganancias Totales
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
      type: 'line',
      data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        datasets: [{
          label: 'Ganancias ($)',
          data: [12000, 15000, 18000, 22000, 26000, 28000, 30000, 32000, 35000, 38000, 40000, 42000],
          borderColor: '#FFE605',
          backgroundColor: 'rgba(255, 230, 5, 0.2)',
          fill: true,
        }]
      },
      options: {
        plugins: {
          legend: { display: false }
        },
        scales: {
          x: { beginAtZero: true, grid: { color: '#333' } },
          y: { beginAtZero: true, grid: { color: '#333' } }
        }
      }
    });

    // Gráfico de Barras: Disponibilidad en Hoteles
    const availabilityCtx = document.getElementById('availabilityChart').getContext('2d');
    new Chart(availabilityCtx, {
      type: 'bar',
      data: {
        labels: ['Hotel 1', 'Hotel 2', 'Hotel 3'],
        datasets: [{
          label: 'Disponibilidad (%)',
          data: [75, 60, 85],
          backgroundColor: ['#FF05C8', '#00FFF5', '#FFA500']
        }]
      },
      options: {
        plugins: {
          legend: { display: false }
        },
        scales: {
          x: { grid: { color: '#333' } },
          y: { beginAtZero: true, max: 100, grid: { color: '#333' } }
        }
      }
    });

    // Gráficos Circulares de Ocupación
    function drawCircularChart(id, percentage, color) {
      const ctx = document.getElementById(id).getContext('2d');
      const endAngle = (percentage / 100) * 2 * Math.PI;

      ctx.clearRect(0, 0, 200, 200);
      ctx.lineWidth = 20;

      // Fondo del gráfico
      ctx.beginPath();
      ctx.arc(100, 100, 80, 0, 2 * Math.PI);
      ctx.strokeStyle = "#333";
      ctx.stroke();

      // Gráfico de porcentaje
      ctx.beginPath();
      ctx.arc(100, 100, 80, -0.5 * Math.PI, endAngle - 0.5 * Math.PI);
      ctx.strokeStyle = color;
      ctx.stroke();

      // Texto de porcentaje
      ctx.font = "20px Arial";
      ctx.fillStyle = "#FFF";
      ctx.textAlign = "center";
      ctx.fillText(percentage + "%", 100, 110);
    }

    drawCircularChart("hotel1", 75, "#FFE605"); // Hotel 1
    drawCircularChart("hotel2", 60, "#FF05C8"); // Hotel 2
    drawCircularChart("hotel3", 85, "#00FFF5"); // Hotel 3
  </script>
</body>
</html>
