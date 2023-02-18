<!DOCTYPE html>
<html>
    <head>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="estilos/estilos.css">
    <!-- CUSTOM JS -->
    <script src="scripts/app.js" defer></script>
    <link rel="stylesheet" href="estilos/estilos admin.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<body>
    
<div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="./img/logo.svg" alt="">
                <span>MENU</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span>Dashboard</span>
            </div>

            <div class="enlace">
                <i class="bx bx-user"></i>
                <span>Usuarios</span>
            </div>

            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span>Analíticas</span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span>Archivos</span>
            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span>Pedidos</span>
            </div>
            <div class="enlace" href="index.php">
                <i class="bx bx-cog" href="index.php"></i>
                <a class="nav-link" href="index.php">Cerrar sesion</a>
            </div>
        </div>
    </div>
    <canvas id="myChart" style="width:100%;max-width:800px"></canvas>

<script>
var xValues = ["salones rentados", "mesas rentada", "meseros rentados", "canselaciones", "total_dinero"];
var yValues = [3000, 8300, 14434, 5224, 15315];
var barColors = ["red", "purple","blue","orange","green"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "DATOS DE LOS ULTIMOS 6 MESES "
    }
  }
});
</script>
</body>
</html>