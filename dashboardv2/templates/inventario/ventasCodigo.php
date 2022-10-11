<?php
    include("conexion.php");
    $sql="SELECT * FROM ventas";
    $resultado=$conn->query($sql);
?>

<div class="container-fluid px-4">
    <div class="row">
        <div class="card mb-4 ">
            
            <!-- Mes -->
            <div class="col-md-5">
                <select class="form-select" name="meses" id="meses" value="mes" >
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
            </div>
            <!-- Titulo -->
            <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Informe de ventas
            </div>
            <!-- Tabla -->
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <td>NombreProducto</td>
                        <td>Cantidad</td>
                        <td>Total</td>
                        <td>fecha</td>
                        <td>Acciones</td>
                    </tr>
                    
                        <?php
                    
                        while($fila=$resultado->fetch_assoc()){
                        ?>
                    <tr>
                        <td> <?php echo $fila["nombre_producto"]; ?> </th>
                        <td> <?php echo $fila["cantidad"]; ?> </td>
                        <td> <?php echo $fila["total"]; ?> </td>
                        <td> <?php echo $fila["fecha"]; ?> </td> 
                        <td> 
                            <div class="btn-group">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_inventario<?php echo $fila['id'];?>"  >Editar</button>
                                <button type="button" class="btn btn-danger " data-bs-toggle="modal"  data-bs-target="#modal_eliminar<?php echo $fila['id'];?>">Eliminar</button>
                            </div>

                        </td>
                        
                    </tr>
                    <!-- modificar -->
                    <input type="hidden" value="<?php echo $fila["id"]?>">
                    
                    <?php include("../modals/formularioModificar.php") ?>
                    <?php include("../modals/formularioEliminar.php") ?>
                    
                    <?php } ?>
                </table>          
            </div>
        </div>
    </div>
</div>

<script src="js/formulario.js"></script>