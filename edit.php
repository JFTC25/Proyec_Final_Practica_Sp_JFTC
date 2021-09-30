<?php
include("conexionbd.php");
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{

$id = $_POST['id'];
$pro = $_POST['pro']; 
$des = $_POST['des'];
$pre = $_POST['pre'];
$can = $_POST['can'];
$actualizar = "UPDATE producto SET producto='$pro', descripcion='$des', precio='$pre', cantidad='$can' WHERE id='$id'";

$resul=mysqli_query($conn, $actualizar);

if ($resul){
   header("Location: verpro.php");
}else{
    echo "Error en registro: ".mysqli_error($conn);
}
}
?>