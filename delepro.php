<?php
include("conexionbd.php");
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{

$id = $_GET['id'];
$eliminar ="DELETE FROM producto WHERE id = '$id'";

$resultadoEliminar = mysqli_query($conn, $eliminar);

if($resultadoEliminar){
    header("Location: verpro.php");
}else{
    echo"Error en eliminar registro ".mysqli_error($conn);
}}
?> 