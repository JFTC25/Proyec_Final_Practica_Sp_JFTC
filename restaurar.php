<?php
include("conexionbd.php");

if(!$conn){
    die("Conexion Fallida: ".mysqli_connect_error());
}else{
$user = $_POST['user'];
$cor = $_POST['correo']; 

    $sql2="SELECT * FROM usuario WHERE usuario='$user' AND correo='$cor'";
    $consulta2=mysqli_query($conn,$sql2);
    $array2=mysqli_fetch_array($consulta2);
    if(!isset($array2['id'])){
        header("location:resetpw.php?estado=2");

    }else{
        $id=$array2['id'];
        $nueva=randoma();
        $new= base64_encode($nueva);
        $sql="UPDATE usuario SET pass='$new' WHERE id='$id'";
        if (mysqli_query($conn,$sql)) {
            header("location:newpass.php?pass=".$nueva."");
        }else{
            echo "Error".mysqli_error($conn);
        }
    }
}

function randoma(){
    $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdfghijklmnopqrstuvwxyz0123456789';
    $longpalabra=10;
    for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
        $x = rand(0,$n);
        $pass.= $caracteres[$x];
    }
    return ($pass);
}
?>