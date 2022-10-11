<?php
        include("conexion.php");
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $imagen = $_POST['imagen'];
        $sql= " INSERT INTO inventario(nombre, precio_unitario, cantidad, imagen) VALUES ('$nombre', '$precio', '$cantidad', '$imagen')";
        
        $resultado = $conn->query($sql);
    ?>