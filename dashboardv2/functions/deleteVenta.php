<?php
include("conexion.php");

    $id= $_GET['id'];
  
    $update= ("DELETE FROM ventas 
        WHERE id='$id'
    ");

    $conn->query($update);
    if($conn->query($update)){
        Location: "ventasCodigo.php";
    }
?>