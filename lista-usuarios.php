<?php include_once("particiones/head_perfil.php"); ?>
    <?php include_once("claseUsuario.php");
                $arrayUsuario = usuarios::seleccionarTodo();     
                // var_dump($arrayUsuario);   
                $nro = 1;   
    ?>
    <?php include_once("particiones/head_perfil2.php"); ?>

    <main class="main__table">
      <table class="table-list" border="1">
        <thead>
            <tr>
                <th class="td-nro">Nro</th>
                <th class="td-nombre">Nombre</th>
                <th class="td-usuario">Usuario</th>
                <th class="td-genero">Genero</th>
                <th class="td-cargo">Cargo</th>
                <th colspan="2" class="acciones">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($arrayUsuario as $usuario){?>
                <tr>
                    <td scope="row"><?=$nro?></td>
                    <td class="td-nro"><?=$usuario->getNombre()?></td>
                    <td class="td-usuario"><?=$usuario->getUsuario()?></td>
                    <td class="td-genero"><?php if($usuario->getGenero() == 'M') echo 'Mujer'; 
                              if($usuario->getGenero() == 'H') echo 'Hombre'; 
                              if($usuario->getGenero() == 'O') echo 'Otro' ?>
                    </td>
                    <td class="td-cargo"><?php if($usuario->getPrivilegios() == 1) echo 'Gerente'; 
                              if($usuario->getPrivilegios() == 2) echo 'Empleado'; 
                              if($usuario->getPrivilegios() == 3) echo 'Usuario';
                              $nro+=1;?>
                    </td>           
                    
                    <td class="accionBtn">
                        <a name="id" class="btn btn-info" href="modificarCelular.php?id=<?=$usuario->getId()?>" role="button"
                            title="Editar"><i class="fas fa-edit"></i></a>
                        <input type="hidden" name="op" value="eliminar">
                        <a name="id" class="btn btn-danger" href="accionesUsuarios.php?id=<?=$usuario->getId()?>" role="button"
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