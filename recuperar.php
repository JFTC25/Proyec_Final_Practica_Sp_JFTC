<?php
include("conexionbd.php");
if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$id = $_POST['id'];
$pass1 = $_POST['pass1']; 
$pass2 = $_POST['pass2'];

if($pass1 == $pass2){
    $pass1 = base64_encode($pass1);
    $sql = "UPDATE usuario SET  pass='$pass1' WHERE id='$id'";;
      
        if(mysqli_query($conn,$sql)){
            header("Location:home.php");
        }else{
            echo "ERROR AL REGISTRARSE";
        } 
    }else {
       header("Location:perfil.php");
    }
}
?>