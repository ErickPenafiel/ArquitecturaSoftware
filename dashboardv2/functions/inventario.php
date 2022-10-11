<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<body>

    <?php
        include("conexion.php");

        $sql= " SELECT * FROM stock";
        /* if (isset($_GET['orden'])) {
            $sql .= " ORDER BY " . $_GET['orden'];
        } */
        $resultado = $conn->query($sql);

        
    ?>
    <h2>Inventario</h2>
    
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Nombre:</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Opciones</th>
        </tr>

        <?php while ($fila=$resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila["nombre"] ?></td>
                <td><?php echo $fila["precio_unitario"] ?></td>
                <td><?php echo $fila["cantidad"] ?></td>
                <td><?php echo $fila["imagen"] ?></td>
                
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-pen-to-square"></i> Editar</button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <label for="label-form">Nombre</label>
                                    <input type="text" name="nombreUpdate" value="<?php echo $fila["nombre"]; ?>" class="form-control">
                                    <label for="label-form">Precio</label>
                                    <input type="number" name="precioUpdate" value="<?php echo $fila["precio_unitario"]; ?>" id="precioUpdate" class="form-control">
                                    <label for="label-form">Cantidad</label>
                                    <input type="number" name="cantidadUpdate" value="<?php echo $fila["cantidad"]; ?>" id="cantidadUpdate" class="form-control">
                                    <label for="label-form">Imagen</label>
                                    <input type="file" name="imagenUpdate" value="<?php echo $fila["imagen"]; ?>" id="imagenUpdate" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Actualizar Datos</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- Boton Eliminar -->
                    <button class="btn btn-danger" id="eliminar" data-bs-toggle="modal"  data-bs-target="#modal_eliminar<?php echo $fila['id'];?>">Eliminar</button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal_eliminar<?php echo $fila['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3>¿Deseas Eliminar a <?php echo $fila["nombre"]; ?>?</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                                    <a href="functions/eliminarVenta.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger" id="eliminar">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>