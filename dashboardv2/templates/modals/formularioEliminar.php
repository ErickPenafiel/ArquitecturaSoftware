

<!-- Modal -->
<div class="modal fade" id="modal_eliminar<?php echo $fila['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>¿Deseas Eliminar a <?php echo $fila["nombre_producto"]?>?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
        <a href="functions/eliminarVenta.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger" id="eliminar">Eliminar</a>
      </div>
    </div>
  </div>
</div>


