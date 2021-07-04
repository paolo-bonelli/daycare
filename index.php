<?php include('./templates/header.php'); ?>

<?php include('./conexion.php'); ?>

<?php

$sql = 'SELECT mascotas.id_mascota, mascotas.nombre_mascota,tipos_de_mascota.nombre_tipo,mascotas.raza,mascotas.sexo,mascotas.nombre_del_cliente,mascotas.nacimiento  FROM mascotas LEFT JOIN tipos_de_mascota ON mascotas.tipo_de_mascota=tipos_de_mascota.id_tipo';
$mascotas = mysqli_query($link, $sql); //se ejecuta la consulta

if (mysqli_num_rows($mascotas) > 0) {
?>

  <table>
    <tr>
      <td>ID</td>
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
        <td><a href="<?php echo htmlspecialchars('editar/?id_mascota=' . $mascota[0]) ?>"><img src="" alt="">Editar</a></td>
        <td><a href="<?php echo htmlspecialchars('eliminar/?id_mascota=' . $mascota[0]) ?>"><img src="" alt="">Eliminar</a></td>
      </tr>
    <?php } ?>
  </table>
<?php } else {
?>
  <h2>No hay mascotas registradas aun</h2>
<?php
} ?>

<?php include('./templates/footer.php'); ?>