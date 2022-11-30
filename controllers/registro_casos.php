<?php 
print_r($_POST);

if (empty($_POST['input_Nombre']) ||   empty($_POST['input_DUI']) || empty($_POST['input_Telefono']) || empty($_POST['input_Categoria'] || empty($_POST['input_Detalles']))){
    echo "Error complete todo el formulario";
    exit();
}

include '../models/conexion.php';


$Nombre =$_POST['input_Nombre'];
$DUI =$_POST['input_DUI'];
$Telefono =$_POST['input_Telefono'];
$Categoria =$_POST['input_Categoria'];
$Detalles =$_POST['input_Detalles'];

echo $Nombre,$DUI,$Telefono,$Categoria,$Detalles;

$consulta = $bd-> prepare("INSERT INTO casos(Nombre,DUI,Telefono,Categoria,Detalles) VALUE (?,?,?,?,?)");
$resultado = $consulta->execute([$Nombre,$DUI,$Telefono,$Categoria,$Detalles]);

if($resultado){
    header("location: ../templates/casos.php");
}else{
    echo "Su registro a fallado";
}
?>