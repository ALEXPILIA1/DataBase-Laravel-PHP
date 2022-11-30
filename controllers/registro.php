<?php 
print_r($_POST);

if (empty($_POST['inputNombre']) || empty($_POST['inputCorreo']) || empty($_POST['inputEdad']) || empty($_POST['inputDUI']) || empty($_POST['inputTelefono']) || empty($_POST['inputCargo'])){
    echo "Error complete todo el formulario";
    exit();
}

include '../models/conexion.php';


$Nombre =$_POST['inputNombre'];
$Correo =$_POST['inputCorreo'];
$Edad =$_POST['inputEdad'];
$DUI =$_POST['inputDUI'];
$Telefono =$_POST['inputTelefono'];
$Cargo =$_POST['inputCargo'];

echo $Nombre,$Correo,$Edad,$DUI,$Telefono,$Cargo;

$consulta = $bd-> prepare("INSERT INTO empleados(Nombre,Correo,Edad,DUI,Telefono,Cargo) VALUE (?,?,?,?,?,?)");
$resultado = $consulta->execute([$Nombre,$Correo,$Edad,$DUI,$Telefono,$Cargo]);

if($resultado){
    header("location: ../templates/empleados.php");
}else{
    echo "Su registro a fallado";
}
?>