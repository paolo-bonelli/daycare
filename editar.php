<?php include('./templates/header.php'); ?>

<?php include('./conexion.php'); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $id_mascota = htmlspecialchars($_POST['id_mascota']);
  $nombre = htmlspecialchars($_POST['nombre']);
  $tipo = htmlspecialchars($_POST['tipo']);
  $raza = htmlspecialchars($_POST['raza']);
  $sexo = htmlspecialchars($_POST['sexo']);
  $cliente = htmlspecialchars($_POST['cliente']);
  $nacimiento = htmlspecialchars($_POST['nacimiento']);

  $sql = "UPDATE mascotas SET nombre_mascota='{$nombre}',tipo_de_mascota={$tipo},raza='{$raza}',sexo='{$sexo}',nombre_del_cliente='{$cliente}',nacimiento='{$nacimiento}' WHERE id_mascota={$id_mascota}";

  if (!mysqli_query($link, $sql)) {
    echo "Fallo guardando el registro: " . mysqli_error($link);
  } else {
    echo "<meta http-equiv='refresh' content='0;URL=./'>";
  }
} else {
?>

  <?php

  $sql = 'SELECT * FROM mascotas WHERE id_mascota=' . $_GET["id_mascota"];
  $mascotas = mysqli_query($link, $sql); //se ejecuta la consulta

  if ($mascota = mysqli_fetch_array($mascotas)) { ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

      <label for="nombre ">Nombre</label>
      <input type="text" name="nombre" id="nombre" value=<?php echo $mascota[1]; ?>>

      <label for="tipo">Tipo de mascota</label>
      <select name="tipo" id="tipo">
        <?php
        $sql = 'SELECT * FROM tipos_de_mascota';
        $tipos = mysqli_query($link, $sql);

        while ($tipo = mysqli_fetch_array($tipos)) { ?>

          <option value="<?php echo $tipo[0]; ?>" <?php
                                                  if ($tipo[0] === $mascota[2]) {
                                                    echo "selected";
                                                  }
                                                  ?>><?php echo $tipo[1]; ?></option>

        <?php } ?>
      </select>

      <label for="raza">Raza</label>
      <input type="text" name="raza" id="raza" value="<?php echo $mascota[3]; ?>">

      <label for="sexo">sexo</label>
      <div>
        <label>
          <?php if ($mascota[4] == 'H') { ?>
            <input type="radio" name="sexo" value="H" checked />
          <?php } else { ?>
            <input type="radio" name="sexo" value="H" />
          <?php } ?>
          Hembra
        </label>
        <label>
          <?php if ($mascota[4] == 'M') { ?>
            <input type="radio" name="sexo" value="M" checked />
          <?php } else { ?>
            <input type="radio" name="sexo" value="M" />
          <?php } ?>
          Macho
        </label>
      </div>

      <label for="cliente">Nombre del cliente</label>
      <input type="text" name="cliente" id="cliente" value="<?php echo $mascota[5]; ?>">

      <label for="nacimineto">Nacimiento</label>
      <input type="date" name="nacimiento" id="macimiento" value="<?php echo $mascota[6]; ?>">
      <input type="hidden" name="id_mascota" value="<?php echo $mascota[0]; ?>">
      <input type="submit" value="Guardar">
      <input type="reset" value="Limipar">
    </form>
<?php }
} ?>

<?php include('./templates/footer.php'); ?>