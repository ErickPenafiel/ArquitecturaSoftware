<?php
  include("functions/conexion.php");

  // insertar formulario en la base de datos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $telefono = $_POST['telefono'];
    $genero = $_POST['genero'];
    $clave = $_POST['clave'];
    $clave_r = $_POST['clave_r'];

    $insertar = "INSERT INTO registro(nombre, apellidos, email, fecha_nacimiento, telefono, genero, clave, r_password) VALUES ('$nombre', '$apellido', '$email', '$fecha', '$telefono', '$genero', '$clave', '$clave_r')";

    $ejecutar = $conn->query($insertar);

    if ($ejecutar) {
      echo "<h2>Insertado correctamente</h2>";
      
    }
?>