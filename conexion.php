<?php
$link = mysqli_connect($_SERVER['SERVER_NAME'], "root", "", "daycare", $_SERVER['SERVER_PORT']);

// Se chequea la conección con la BD
if (mysqli_connect_errno()) {
  echo "Fallo contectando a MySQL: " . mysqli_connect_error();
  exit();
}
