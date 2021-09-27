<?php
include("conexionbd.php");

session_start(); 
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$correo = $_POST['correo'];
$pass = $_POST['pass'];
        $pass = base64_encode($pass);
        $sql = "SELECT COUNT(*) as contar FROM usuario WHERE correo ='$correo' AND pass ='$pass'";
        $consulta=mysqli_query($conn,$sql);
        $array=mysqli_fetch_array($consulta);
        if($array['contar'] > 0){
            $_SESSION['usuario']=$user;
            header("Location:inicio.php");
        }else{
       header("Location:index.php?estado=2");
    }
}


?>