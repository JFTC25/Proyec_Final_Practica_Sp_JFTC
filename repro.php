<?php
include("conexionbd.php");

if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$pro = $_POST['pro']; 
$des = $_POST['des'];
$pre = $_POST['pre'];
$can = $_POST['can'];
    $sql = "INSERT INTO producto(producto, descripcion, precio, cantidad) VALUES ('".$pro."','".$des."','".$pre."','".$can."')";
       if(mysqli_query($conn,$sql)){
           header("Location: verpro.php");
    }else{
            echo "Error en registro: ".mysqli_error($conn);
    }
}
?>
?>