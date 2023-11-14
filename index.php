<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="saveTask.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
          </div>
          
          <div class="form-group">
            <input type="text" name="apellido" class="form-control" placeholder="apellido" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="telefono" class="form-control" placeholder="telefono" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="correo" class="form-control" placeholder="correo" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="domicilio" class="form-control" placeholder="domicilio" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="fechanacimiento" class="form-control" placeholder="fechanacimiento" autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="antidoping" class="form-control" placeholder="antidoping" autofocus>
          </div>

         
          <input type="submit" name="saveTask" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>telefono</th>
            <th>correo</th>
            <th>domicilio</th>
            <th>fechanacimiento</th>
            <th>antidoping</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM empleado";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['domicilio']; ?></td>
            <td><?php echo $row['fechanacimiento']; ?></td>
            <td><?php echo $row['antidoping']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="deleteTask.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>