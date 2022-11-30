<?php include './header.php' ?>

<?php include '../models/conexion.php';

$sentencia = $bd->query("SELECT * from casos");

$casos = $sentencia-> fetchAll(PDO::FETCH_OBJ);
// print_r($casos);
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
      <th scope="col">DUI</th>
      <th scope="col">Telefono</th>
      <th scope="col">Categoria</th>
      <th scope="col">Fecha</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($casos as $dato){?>
<tr>
      <td scope="row"><?php echo $dato->Id?></td>
      <td><?php echo $dato->Nombre?></td>
      <td><?php echo $dato->DUI?></td>
      <td><?php echo $dato->Telefono?></td>
      <td><?php echo $dato->Categoria?></td>
      <td><?php echo $dato->Fecha?></td>
      <td><a href="../controllers/editar_casos.php?Id=<?php echo $dato->Id?>" class="btn btn-primary">Editar</a>
        <a href="../controllers/eliminar_casos.php?Id=<?php echo $dato->Id?>" class="btn btn-danger">Eliminar</a>
        </td>
</div>
    </tr>
    <?php   }?>
  </tbody>
</table>
</div>


