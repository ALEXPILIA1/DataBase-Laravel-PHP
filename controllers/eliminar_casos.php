<?php include '../templates/header.php' ?>

<br><br><br>
<?php 

include '../models/conexion.php';

$Idcasos = $_GET['Id'];

$consulta =$bd->prepare("DELETE FROM casos WHERE Id = ?");
$resultado =$consulta->execute([$Idcasos]);

if ($resultado){
    header("Location ../templates/casos.php");
} else{
    echo "su eliminacion ha fallado";

}


?>



