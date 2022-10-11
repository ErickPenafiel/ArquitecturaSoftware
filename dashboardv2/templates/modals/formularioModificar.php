<!-- Button trigger modal -->

<div class="modal fade" id="modal_inventario<?php echo $fila['id'];?>" data-bs-backdrop="#modal_inventario<?php echo $file['id'];?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="../functions/updateDatos.php" >
            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                <div class="modal-body">
                    <label for="label-form">Nombre Producto</label>
                    <input type="text" name="nombre_producto" class="form-control" value="<?php echo $fila["nombre_producto"]; ?>" >
                    
                    <label for="label-form">Cantidad</label>
                    <input type="number" name="cantidad" id="precioUpdate" class="form-control" value="<?php echo $fila["cantidad"];?>">
                    
                    <label for="label-form">Total</label>
                    <input type="number" name="total" id="stockUpdate" class="form-control" value="<?php echo $fila["total"];?>">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success"  name="editar_ventas">Actualizar Datos</button>
                </div>
            </form>
        </div>
    </div>
</div>




