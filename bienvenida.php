<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido - CBTis 205</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: #f4f4f4;
      color: #333;
      text-align: center;
    }

    nav {
      background: #1e3c72;
      color: white;
      padding: 10px 20px;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      z-index: 1000;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .menu-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .menu {
      list-style: none;
      display: flex;
      gap: 20px;
      padding: 0;
      margin: 0;
    }

    .menu li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .menu li a:hover {
      color: #ffcc00;
    }

    .logout {
      margin-left: auto;
    }

    .logout a {
      color: white;
      text-decoration: none;
      background-color: red;
      padding: 6px 12px;
      border-radius: 8px;
    }

    .content {
      margin-top: 120px;
      padding: 20px;
    }

    .imagenes {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .imagenes img {
      width: 200px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transition: transform 0.3s;
    }

    .imagenes img:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <nav>
    <div class="menu-container">
      <h2>CBTis 205</h2>
      <ul class="menu">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Alumnos</a></li>
        <li><a href="#">Docentes</a></li>
        <li><a href="#">Especialidades</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
      <div class="logout">
        <a href="logout.php">Cerrar sesión</a>
      </div>
    </div>
  </nav>

  <div class="content">
    <h1>BIENVENIDO AL CBTis 205</h1>
    <p>Hola, <?php echo $_SESSION['username']; ?>. ¡Qué bueno verte!</p>

    <div class="imagenes">
      <img src="img/logo.png" alt="Logo CBTis">
      <img src="img/logo.png" alt="Otra imagen CBTis">
    </div>
  </div>
</body>
</html>
