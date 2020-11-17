<?php include_once("particiones/head_perfil.php"); ?>

    <div class="perfil__agregar-usuario form__especial">

        <form action="acciones/accionesUsuarios.php" method="post" id="frmInsertar">
            <div class="view__register-title">
                <h3><span class="span-primero">REGISTRO</span><span class="span-segundo"> USUARIO</span></h3>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-font"></i> Nombre Completo</p>
                <input type="text" class="input" name="nombre" maxlength="30" minlength="2" required >
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-user"></i> Usuario</p>
                <input type="text" class="input" name="usuario" maxlength="20" minlength="4" required>
            </div>

            <div class="view__register-field--placeholder-date">
                <p><i class="far fa-calendar-alt"></i> Fecha nacimiento</p>
                <input type="date" name="edad" value="1995-01-01" min="1920-01-01" max="2015-01-01" required>
            </div>

            <div class="view__register-field--placeholder-gender">
                <p><i class="fas fa-venus-mars"></i> Genero</p>
                <select name="genero">
                    <option value="M" selected>Mujer</option>
                    <option value="H">Hombre</option>
                    <option value="O">Otro</option>
                </select>
            </div>

            <div class="view__register-field--placeholder-privilage">
                <p><i class="fas fa-briefcase"></i> Cargo</p>
                <select name="privilegio">
                    <option value=1 selected>Gerente</option>
                    <option value=2>Empleado</option>
                    <option value=3>Usuario</option>
                </select>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="far fa-envelope"></i> Correo</p>
                <input class="input" type="email" name="correo" maxlength="50" required>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-key"></i> Contraseña</p>
                <input class="input" type="password" name="clave" maxlength="25" minlength="8"  required>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-key"></i> Verificar Contraseña</p>
                <input class="input" type="password" name="clave2" maxlength="25" minlength="8" required>
            </div>

            <div class="botones">
                <input type="hidden" value="insertar" name="opcion" />
                <button type="submit" class="btnEnviar">Registrar <i class="fas fa-sign-in-alt"></i></button>
            </div>
        </form>
    </div>
    
<?php include_once("particiones/footer_perfil.php"); ?>
</body>
</html>