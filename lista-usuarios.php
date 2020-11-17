<?php include_once("particiones/head_perfil.php"); ?>
    <?php include_once("clases/claseUsuario.php");
                $arrayUsuario = usuarios::seleccionarTodo();     
                // var_dump($arrayUsuario);      
    ?>
    <?php include_once("particiones/head_perfil2.php"); ?>

    <main class="main__table">
      <table class="table-list" border="1">
        <thead>
            <tr>
                <th>Nro id</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Genero</th>
                <th>Cargo</th>
                <th colspan="2" class="acciones">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($arrayUsuario as $usuario){?>
                <tr>
                    <td scope="row"><?=$usuario->getId()?></td>
                    <td><?=$usuario->getNombre()?></td>
                    <td><?=$usuario->getUsuario()?></td>
                    <td><?php if($usuario->getGenero() == 'M') echo 'Mujer'; 
                              if($usuario->getGenero() == 'H') echo 'Hombre'; 
                              if($usuario->getGenero() == 'O') echo 'Otro' ?>
                    </td>
                    <td><?php if($usuario->getPrivilegios() == 1) echo 'Gerente'; 
                              if($usuario->getPrivilegios() == 2) echo 'Empleado'; 
                              if($usuario->getPrivilegios() == 3) echo 'Usuario' ?>
                    </td>           
                    
                    <td class="accionBtn">
                        <a name="id" class="btn btn-info" href="modificarCelular.php?id=<?=$usuario->getId()?>" role="button"
                            title="Editar"><i class="fas fa-edit"></i></a>

                        <a name="id" class="btn btn-danger" href="eliminar.php?id=<?=$usuario->getId()?>" role="button"
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