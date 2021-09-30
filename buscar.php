<?php 
include("conexionbd.php");

$bus=$_POST['buscar']; 

$resul1 = "SELECT * FROM producto WHERE producto LIKE '%".$bus."%' ";
$resul2 = "SELECT * FROM factura WHERE cliente LIKE '%".$bus."%' ";

$ver1= mysqli_query($conn,$resul1);
$ver2= mysqli_query($conn,$resul2);

?>