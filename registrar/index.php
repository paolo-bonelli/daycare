<?php include('./../templates/header.php'); ?>

<?php include('./../conexion.php'); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $nombre = htmlspecialchars($_POST['nombre']);
  $tipo = htmlspecialchars($_POST['tipo']);
  $raza = htmlspecialchars($_POST['raza']);
  $sexo = htmlspecialchars($_POST['sexo']);
  $cliente = htmlspecialchars($_POST['cliente']);
  $nacimiento = htmlspecialchars($_POST['nacimiento']);

  $sql = "INSERT INTO mascotas(nombre_mascota,tipo_de_mascota,raza,sexo,nombre_del_cliente,nacimiento) VALUES ('{$nombre}',$tipo,'{$raza}','{$sexo}','{$cliente}','{$nacimiento}');";

  if (mysqli_query($link, $sql)) {
    echo "Fallo guardando el registro: " . mysqli_error($link);
  }

  echo "<meta http-equiv='refresh' content='0;URL=" . $home . "'>";
} else { ?>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <label for="nombre ">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="tipo">Tipo de mascota</label>
    <select name="tipo" id="tipo">
      <?php
      $sql = 'SELECT * FROM tipos_de_mascota';
      $tipos = mysqli_query($link, $sql);

      while ($tipo = mysqli_fetch_array($tipos)) { ?>

        <option value="<?php echo $tipo[0]; ?>"><?php echo $tipo[1]; ?></option>

      <?php } ?>
    </select>

    <label for="raza">Raza</label>
    <input type="text" name="raza" id="raza">

    <label for="sexo">Sexo</label>
    <div id="opciones-sexo">
      <label>
        <input type="radio" name="sexo" value="H" />
        Hembra
      </label>
      <label>
        <input type="radio" name="sexo" value="M" />
        Macho
      </label>
    </div>

    <label for="cliente">Nombre del cliente</label>
    <input type="text" name="cliente" id="cliente">

    <label for="nacimineto">Nacimiento</label>
    <input type="date" name="nacimiento" id="macimiento">
    <input type="submit" value="Guardar">
    <input type="reset" value="Limipar">
  </form>
<?php } ?>
<?php include('./../templates/footer.php'); ?>