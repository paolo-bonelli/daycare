<?php include('./templates/header.php'); ?>

<?php include('./conexion.php'); ?>

<?php
if (isset($_GET["busqueda"]) && $_GET["busqueda"] !== "") {
  $sql_query = "SELECT * FROM mascotas WHERE nombre_mascota LIKE '%{$_GET['busqueda']}%'";
  $mascotas = mysqli_query($link, $sql_query);

  if (mysqli_num_rows($mascotas) > 0) { ?>
    <table>
      <tr>
        <td>id</td>
        <td>Nombre</td>
        <td>Tipo de mascota</td>
        <td>Raza</td>
        <td>Sexo</td>
        <td>Cliente</td>
        <td>Nacimiento</td>
      </tr>
      <?php
      while ($mascota = mysqli_fetch_array($mascotas)) {
      ?>
        <tr class="">
          <td><?php print $mascota[0]; ?></td>
          <td><?php print $mascota[1]; ?></td>
          <td><?php print $mascota[2]; ?></td>
          <td><?php print $mascota[3]; ?></td>
          <td><?php print $mascota[4]; ?></td>
          <td><?php print $mascota[5]; ?></td>
          <td><?php print $mascota[6]; ?></td>
          <td><a href="./editar.php?id_mascota='<?php echo htmlspecialchars($mascota[0]) ?>'">Editar</a></td>
          <td><a href="./eliminar.php?id_mascota='<?php echo htmlspecialchars($mascota[0]) ?>'">Eliminar</a></td>
        </tr>
      <?php } ?>

    </table>

  <?php } else {
  ?>
    <h2>No se econtró ninguna mascota</h2>
  <?php
  }
} else {
  ?>
  <h2>Debe ingresar un resultado</h2>
<?php
}
?>

<?php include('./templates/footer.php'); ?>