<?php include_once("particiones/head_perfil.php"); ?>
    <?php include_once("claseUsuario.php");
                $arrayUsuario=usuarios::seleccionarPorId($_GET["id"])[0];
    ?>
    <?php include_once("particiones/head_perfil2.php"); ?>


    <div class="perfil__agregar-usuario form__especial">

        <form action="accionesUsuarios.php" method="post" id="frmModificar" class="modificar__usuario frms">
            <div class="view__register-title">
                <h3><span class="span-primero">MODIFICAR</span><span class="span-segundo"> USUARIO</span></h3>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-font"></i> Nombre Completo</p>
                <input type="text" class="input" name="nombre"  value="<?=$arrayUsuario->getNombre() ?>" maxlength="30" minlength="2" required >
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-user"></i> Usuario</p>
                <input type="text" class="input" name="usuario" id="usuario" value="<?=$arrayUsuario->getUsuario() ?>" maxlength="20" minlength="4" required>
            </div>

            <div class="view__register-field--placeholder-date">
                <p><i class="far fa-calendar-alt"></i> Fecha nacimiento</p>
                <input type="date" name="edad" min="1920-01-01" value="<?php echo date('Y-m-d', strtotime($arrayUsuario->getEdad())) ?>" max="2015-01-01" required>
            </div>

            <div class="view__register-field--placeholder-gender">
                <p><i class="fas fa-venus-mars"></i> Genero</p>
                <select name="genero">
                    <option value="M" <?php if ($arrayUsuario->getGenero()=='M') echo 'selected' ?>>Mujer</option>
                    <option value="H" <?php if ($arrayUsuario->getGenero()=='H') echo 'selected' ?>>Hombre</option>
                    <option value="O" <?php if ($arrayUsuario->getGenero()=='O') echo 'selected' ?>>Otro</option>
                </select>
            </div>

            <div class="view__register-field--placeholder-privilage">
                <p><i class="fas fa-briefcase"></i> Cargo</p>
                <select name="privilegio">
                    <option value=1 <?php if ($arrayUsuario->getPrivilegios()==1) echo 'selected' ?>>Gerente</option>
                    <option value=2 <?php if ($arrayUsuario->getPrivilegios()==2) echo 'selected' ?>>Empleado</option>
                    <option value=3 <?php if ($arrayUsuario->getPrivilegios()==3) echo 'selected' ?>>Usuario</option>
                </select>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="far fa-envelope"></i> Correo</p>
                <input class="input" type="email" name="correo" value="<?=$arrayUsuario->getCorreo() ?>" maxlength="50" required>
            </div>

            <div class="botones">
                <input type="hidden" value="modificar" name="opcion" />
                <input type="hidden" name="id" value="<?=$arrayUsuario->getId() ?>">
                <input type="hidden" name="clave" value="<?=$arrayUsuario->getPass() ?>">
                <button type="submit" class="btnEnviar">Modificar <i class="fas fa-sign-in-alt"></i></button>
            </div>
        </form>
    </div>

    <?php include_once("particiones/footer_perfil.php"); ?>
</body>
</html>