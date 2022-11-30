<?php include '../templates/header.php'?>
<br><br><br>
<?php 
include '../models/conexion.php';

$idEmpleado = $_GET['Id'];

$consulta =$bd->prepare("SELECT * from empleados WHERE Id = ?");

$consulta ->execute([$idEmpleado]);

$empleado = $consulta->fetch(PDO::FETCH_OBJ);
?>

<div class="container mt-4">
<div class="card">
    <div class="card-header">Editar datos del Usuario</div>
        <form action="../templates/update.php" method="POST">
            <div class="mb-2 ml-2 mr-">
                <label for="">Nombre</label>
                <input class="form-control" type="text" placeholder="Ingrese su Nombre completo" name="inputNombre" value="<?php echo $empleado->Nombre?>" require>
   
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Correo</label>
                <input class="form-control" type="text" placeholder="Ingrese su Correo" name="inputCorreo" value="<?php echo $empleado->Correo?>" require>
                
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Edad</label>
                <input class="form-control" type="number" placeholder="Ingrese su Edad" name="inputEdad" value="<?php echo $empleado->Edad?>" require>
                
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">DUI</label>
                <input class="form-control" type="text" placeholder="Ingrese su DUI"  name="inputDUI"  value="<?php echo $empleado->DUI?>" require>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Telefono</label>
                <input class="form-control" type="number" placeholder="Ingrese su Telefono" name="inputTelefono" value="<?php echo $empleado->Telefono?>"  require>
                
            </div>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label for="">Cargo</label>
                <input class="form-control" type="text" placeholder="Ingrese su Cargo"name="inputCargo"  value="<?php echo $empleado->Cargo?>"  require>
               
            </div>
            <div>
                <input type="hidden" name="Id" value="<?php echo $empleado->Id?>">
            <input type="submit" name="btn btn-primary mb-2 ml-2" value="Editar">
            </div>
        </form>
    </div>
    <br><br>
</div>

