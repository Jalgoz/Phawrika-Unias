<?php include_once("particiones/head_perfil.php"); ?>
<?php include_once("particiones/head_perfil2.php"); ?>

    <div class="perfil__agregar-usuario form__especial">

        <form action="accionesProducto.php" method="post" id="frmInsertarP" class="insertar__usuario" enctype="multipart/form-data">
            <div class="view__register-title">
                <h3><span class="span-primero">REGISTRO</span><span class="span-segundo"> PRODUCTO</span></h3>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-font"></i> Nombre</p>
                <input type="text" class="input" name="nombre" maxlength="40" minlength="2" required >
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-exclamation-circle"></i> Marca</p>
                <input type="text" class="input" name="marca" maxlength="20" minlength="2" required>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-tag"></i> Precio</p>
                <input type="number" class="input" name="precio" step="0.01" maxlength="5" required>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-sort-amount-up"></i> Cantidad</p>
                <input type="number" class="input" name="cantidad" maxlength="5" required>
            </div>

            <div class="view__register-field--placeholder-date">
                <p><i class="fas fa-info"></i> Informacion</p>
                <textarea name="informacion" id="textArea" cols="20" rows="10" maxlength="80"></textarea>
            </div>

            <div class="view__register-field--placeholder-date">
                <p><i class="fas fa-file-image"></i> Archivo</p>
                <input class="input" type="file" name="foto" id="foto" aria-describedby="fileHelpId" required>
            </div>

            <div class="botones">
                <input type="hidden" value="0" name="rebaja">
                <input type="hidden" value="0.0" name="nuevoPrecio">
                <input type="hidden" value="insertar" name="opcion" />
                <button type="submit" class="btnProducto">Registrar <i class="fas fa-sign-in-alt"></i></button>
            </div>
        </form>
    </div>
    
<?php include_once("particiones/footer_perfil.php"); ?>

</body>
</html>