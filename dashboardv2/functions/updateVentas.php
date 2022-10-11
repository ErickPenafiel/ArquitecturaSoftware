<?php

include("conexion.php");

    $id= $_REQUEST['id'];
    $fecha = date("Y-m-d H:i:s");
    $nombreProducto = $_REQUEST["nombre_producto"];

    $cantidad=$_REQUEST["cantidad"];

    $total =$_REQUEST["total"];

    $update= ("UPDATE ventas set 
        nombre_producto='" .$nombreProducto. "',
        cantidad='" .$cantidad. "',
        total='" .$total. "'
        WHERE id='$id'
    ");

    $resultado = $conn->query($update);

    echo "<script type='text/javascript'>
        window.location='index.php';
    </script>"
?>