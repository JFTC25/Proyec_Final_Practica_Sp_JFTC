<?php
include("conexionbd.php");

if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$nit = $_POST['nit'];
$cliente = $_POST['cliente'];
$direc = $_POST['direc'];
$pro = $_POST['pro'];
$total = $_POST['total'];
$sql = "INSERT INTO factura(nit,cliente,direccion,descripcion,total) VALUES ('$nit','$cliente','$direc','$pro','$total')";
if(mysqli_query($conn,$sql)){
    header("Location: verfac.php");
}else{
     echo "Error en registro: ".mysqli_error($conn);
}

}
