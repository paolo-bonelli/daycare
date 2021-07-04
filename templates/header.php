<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto PHP1 de Vincenzo Bonelli</title>
  <?php $home = "/daycare/"; ?>
  <link rel="stylesheet" href="<?php echo $home . "estilos.css" ?>">
</head>

<body>
  <header class="cabecera-principal">
    <div class="logo-contenedor">
      <img class="logo-imagen" src="<?php echo $home . 'imagenes/pet.png' ?>" alt="Logo">
    </div>
    <nav class="nav-principal">
      <ul>
        <li><a href="<?php echo $home ?>">Home</a></li>
        <li><a href="<?php echo $home . "registrar/" ?>">Registrar</a></li>
      </ul>
      <form id="barra-busqueda" action="<?php echo $home . 'buscar/' ?>" method="get">
        <input type="submit" id="busca" value="">
        <input type="search" name="busqueda" id="busqueda">
        <label for="busca">
          <img src="<?php echo $home . 'imagenes/lupa.png' ?>" alt="Busca la mascota">
        </label>
      </form>
    </nav>
  </header>
  <section id="contenido-principal">