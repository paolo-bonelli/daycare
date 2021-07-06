<?php include('./templates/header.php'); ?>

<?php include('./conexion.php'); ?>

<?php

$id_mascota = htmlspecialchars($_GET["id_mascota"]);

$sql = 'DELETE FROM mascotas WHERE id_mascota=' . $id_mascota;

if (!mysqli_query($link, $sql)) { ?>
  <h2>No se pudo eliminar la mascota</h2>
<?php } else { ?>
  <meta http-equiv='refresh' content='0;URL=./'>
<?php } ?>
<?php include('./templates/footer.php'); ?>