<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM empleado WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $telefono = $row['telefono'];
    $correo = $row['correo'];
    $domicilio = $row['domicilio'];
    $fechanacimiento = $row['fechanacimiento'];
    $antidoping = $row['antidoping'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $domicilio = $_POST['domicilio'];
  $fechanacimiento = $_POST['fechanacimiento'];
  $antidoping = $_POST['antidoping'];

  $query = "UPDATE empleado set nombre = '$nombre', apellido = '$apellido',  telefono = '$telefono', correo = '$correo',  domicilio = '$domicilio', fechanacimiento = '$fechanacimiento',  antidoping = '$antidoping' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update nombre">
        </div>

          <div class="form-group">
          <input name="apellido" type="text" class="form-control" value="<?php echo $apellido; ?>" placeholder="Update apellido">
        </div>

        <div class="form-group">
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Update telefono">
        </div>

        <div class="form-group">
          <input name="correo" type="text" class="form-control" value="<?php echo $correo; ?>" placeholder="Update correo">
        </div>

        <div class="form-group">
          <input name="domicilio" type="text" class="form-control" value="<?php echo $domicilio; ?>" placeholder="Update domicilio">
        </div>

        <div class="form-group">
          <input name="fechanacimiento" type="text" class="form-control" value="<?php echo $fechanacimiento; ?>" placeholder="Update fechanacimiento">
        </div>

        <div class="form-group">
          <input name="antidoping" type="text" class="form-control" value="<?php echo $antidoping; ?>" placeholder="Update antidoping">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>