<?php include_once("particiones/head_perfil.php"); ?>
    <?php include_once("claseProducto.php");
                $arrayProducto = producto::seleccionarTodo();     
                // var_dump($arrayUsuario);   
                $nro = 1;   
    ?>
    <?php include_once("particiones/head_perfil2.php"); ?>

    <main class="main__table">

      <h2 class="table-title">LISTA PRODUCTOS</h2>

      <table class="table-list" border="1">
        <thead>
            <tr>
                <th class="td-nro">Nro</th>
                <th class="td-nombre">Nombre</th>
                <th class="td-usuario">Marca</th>
                <th class="td-genero">Precio</th>
                <th class="td-cargo">Cantidad</th>
                <th colspan="2" class="acciones">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($arrayProducto as $producto){?>
                <tr>
                    <td scope="row"><?=$nro?></td>
                    <td class="td-nro"><?=$producto->getNombre()?></td>
                    <td class="td-usuario"><?=$producto->getMarca()?></td>
                    <td class="td-genero"><?=$producto->getPrecio()?></td>
                    <td class="td-cargo"><?php echo $producto->getCantidad(); $nro+=1;?>
                    </td>           
                    
                    <td class="accionBtn">
                        <a name="id" class="btn btn-info" href="modificar-producto.php?id=<?=$producto->getId()?>" role="button"
                            title="Editar"><i class="fas fa-edit"></i></a>
                        <input type="hidden" name="op" value="eliminar">
                        <a name="id" class="btn btn-danger" onclick="return confirmar('Desea eliminar el producto')" href="accionesProducto.php?id=<?=$producto->getId()?>" role="button"
                        title="Eliminar"><i class="fas fa-trash"></i></a>
                    </td>

                </tr>
            <?php }?>
        </tbody>
      </table>  
    </main>
    
    <?php include_once("particiones/footer_perfil.php"); ?>
</body>
</html>