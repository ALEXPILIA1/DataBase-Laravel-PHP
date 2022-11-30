<?php include '../templates/header.php' ?>

<br><br><br>
<?php include '../models/conexion.php';

$Id = $_POST['Id'];
$Nombre = $_POST['input_Nombre'];
$DUI = $_POST['input_DUI'];
$Telefono = $_POST['input_Telefono'];
$Categoria = $_POST['input_Categoria'];
$Detalles = $_POST['input_Detalles'];
$Fecha = $_POST['input_Fecha'];



$consulta = $bd->prepare("UPDATE casos SET Nombre = ?, DUI = ?, Telefono = ?, Categoria = ?, Detalles = ?, Fecha = ? WHERE Id =? ");
$resultado = $consulta->execute([$Nombre,$DUI,$Telefono,$Categoria,$Detalles,$Fecha,$Id]);


if($resultado){
    header("Location ../index.php");
}else{
    echo "Su edicion a fallado";
}


?>



