<?php include '../templates/header.php' ?>

<br><br><br>
<?php 

include '../models/conexion.php';

$IdEmpleados = $_GET['Id'];

$consulta =$bd->prepare("DELETE FROM empleados WHERE Id = ?");
$resultado =$consulta->execute([$IdEmpleados]);

if ($resultado){
    header("Location ../templates/empleados.php");
} else{
    echo "su eliminacion ha fallado";

}


?>



