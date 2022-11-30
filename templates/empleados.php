<?php include './header.php' ?>
<?php include '../models/conexion.php';

$sentencia = $bd->query("SELECT * from empleados");

$empleados = $sentencia-> fetchAll(PDO::FETCH_OBJ);
// print_r($empleados);
?>
<br><br><br>
<div>
<table class="table">
</style>
  <thead>
    <tbody>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Edad</th>
      <th scope="col">DUI</th>
      <th scope="col">Telefono</th>
      <th scope="col">Cargo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($empleados as $dato){?>
    <tr>
      <th scope="row"><?php echo $dato->Id?></th>
      <td><?php echo $dato->Nombre?></td>
      <td><?php echo $dato->Correo?></td>
      <td><?php echo $dato->Edad?></td>
      <td><?php echo $dato->DUI?></td>
      <td><?php echo $dato->Telefono?></td>
      <td><?php echo $dato->Cargo?></td>
      <td><a href="../controllers/editar.php?Id=<?php echo $dato->Id?>" class="btn btn-primary">Editar</a><a href="../controllers/eliminar.php?Id=<?php echo $dato->Id?>" class="btn btn-danger">Eliminar</a></td>
    </tr>
    <?php   }?>
  </tbody>
</table>
</div>

