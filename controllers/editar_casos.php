<?php include '../templates/header.php'?>
<br><br>
<?php 
include '../models/conexion.php';

$idcasos = $_GET['Id'];

$consulta =$bd->prepare("SELECT * from casos WHERE Id = ?");

$consulta ->execute([$idcasos]);

$casos = $consulta->fetch(PDO::FETCH_OBJ);
?>

<div class="container mt-4">
<div class="card">
    <div class="card-header">Editar datos del Usuario</div>
        <form action="../templates/update_casos.php" method="POST">
            <div class="mb-2 ml-2 mr-">
                <label for="">Nombre</label>
                <input class="form-control" type="text" placeholder="Ingrese su Nombre completo" name="input_Nombre" value="<?php echo $casos->Nombre?>" require>
   
            <div class="mb-2 ml-2 mr-2">
                <label for="">DUI</label>
                <input class="form-control" type="text" placeholder="Ingrese su DUI"  name="input_DUI"  value="<?php echo $casos->DUI?>" require>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Telefono</label>
                <input class="form-control" type="number" placeholder="Ingrese su Telefono" name="input_Telefono" value="<?php echo $casos->Telefono?>"  require>
                
            </div>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Categoria</label>
                <input class="form-control" type="text" placeholder="Ingrese su Cargo"name="input_Categoria"  value="<?php echo $casos->Categoria?>"  require>
               
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Fecha</label>
                <input class="form-control" type="date" placeholder="Ingrese Fecha" name="input_Fecha" value="<?php echo $casos->Fecha?>" require>

            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Detalles</label>
                <div class="col=8" >
                <input class="form-control" type="text" placeholder="Ingrese Detalles"name="input_Detalles"  value="<?php echo $casos->Detalles?>"  require>
               </div>
            </div>
            <div>
                <input type="hidden" name="Id" value="<?php echo $casos->Id?>">
            <input type="submit" name="btn btn-primary mb-2 ml-2" value="Editar">
            </div>
        </form>
    </div>
    <br><br>
</div>

