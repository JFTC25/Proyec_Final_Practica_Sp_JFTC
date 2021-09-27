<?php
include("conexionbd.php");

if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$correo = $_POST['correo'];
$usuario = $_POST['user']; 
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

    if($pass1 == $pass2){
        $pass1 = base64_encode($pass1);
        $sql = "INSERT INTO usuario(usuario, correo, pass) VALUE ('".$usuario."','".$correo."','".$pass1."')";

        if(mysqli_query($conn,$sql)){
            header("Location:index.php?estado=1");
        }else{
            echo "ERROR AL REGISTRARSE";
        } 
    }else {
       header("Location:register.php?estado=1");
    }
}
?>
