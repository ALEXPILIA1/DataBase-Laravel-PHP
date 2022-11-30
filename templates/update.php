<?php include '../templates/header.php' ?>

<br><br><br>
<?php include '../models/conexion.php';

$Id = $_POST['Id'];
$Nombre = $_POST['inputNombre'];
$Correo = $_POST['inputCorreo'];
$Edad = $_POST['inputEdad'];
$DUI = $_POST['inputDUI'];
$Telefono = $_POST['inputTelefono'];
$Cargo = $_POST['inputCargo'];



$consulta = $bd->prepare("UPDATE empleados SET Nombre = ?, Correo = ?, Edad = ?, DUI = ?, Telefono = ?, Cargo = ? WHERE Id =? ");
$resultado = $consulta->execute([$Nombre,$Correo,$Edad,$DUI,$Telefono,$Cargo,$Id]);


if($resultado){
    header("Location ../index.php");
}else{
    echo "Su edicion a fallado";
}


?>



