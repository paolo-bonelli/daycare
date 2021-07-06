<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto PHP1 de Vincenzo Bonelli</title>
  <link rel="stylesheet" href="./estilos/estilos.css">
</head>

<body>
  <header class="cabecera-principal">
    <div class="logo-contenedor">
      <img class="logo-imagen" src="./imagenes/pet.png" alt="logo">
    </div>
    <nav class="nav-principal">
      <ul>
        <li><a href="./">Home</a></li>
        <li><a href="./registrar.php">Registrar</a></li>
      </ul>
      <form id="barra-busqueda" action="./buscar.php" method="get">
        <input type="submit" id="busca" value="">
        <input type="search" name="busqueda" id="busqueda">
        <label for="busca">
          <img src="./imagenes/lupa.png" alt="Busca mascota">
        </label>
      </form>
    </nav>
  </header>
  <section id="contenido-principal">