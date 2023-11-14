<?php

include('db.php');

if (isset($_POST['saveTask'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $domicilio = $_POST['domicilio'];
  $fechanacimiento = $_POST['fechanacimiento'];
  $antidoping = $_POST['antidoping'];
  $query = "INSERT INTO empleado(nombre, apellido,telefono, correo,domicilio, fechanacimiento,antidoping) VALUES ('$nombre', '$apellido','$telefono', '$correo','$domicilio', '$fechanacimiento','$antidoping')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>