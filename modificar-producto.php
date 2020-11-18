<?php include_once("particiones/head_perfil.php"); ?>
    <?php include_once("claseProducto.php");
                $arrayProducto=producto::seleccionarPorId($_GET["id"])[0];
    ?>
    <?php include_once("particiones/head_perfil2.php"); ?>

    <div class="perfil__agregar-usuario form__especial">

        <form action="accionesProducto.php" method="post" id="frmModificarP" class="modificar__producto frms" enctype="multipart/form-data">
            <div class="view__register-title">
                <h3><span class="span-primero">REGISTRO</span><span class="span-segundo"> PRODUCTO</span></h3>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-font"></i> Nombre</p>
                <input type="text" class="input" name="nombre"  value="<?=$arrayProducto->getNombre() ?>" maxlength="40" minlength="2" required >
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-exclamation-circle"></i> Marca</p>
                <input type="text" class="input" name="marca" value="<?=$arrayProducto->getMarca() ?>" maxlength="20" minlength="2" required>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-tag"></i> Precio</p>
                <input type="number" class="input" name="precio" value="<?=$arrayProducto->getPrecio() ?>" step="0.01" maxlength="5" required>
            </div>

            <div class="view__register-field--placeholder-gender">
                <p><i class="fas fa-tag"></i> Cuenta con rebaja?</p>
                <select name="rebaja">
                    <option value=0 <?php if ($arrayProducto->getRebaja() == 0) echo 'selected' ?>>NO</option>
                    <option value=1 <?php if ($arrayProducto->getRebaja() == 1) echo 'selected' ?>>SI</option>
                </select>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-tag"></i> Nuevo Precio</p>
                <input type="number" class="input" name="nuevoPrecio" value="<?=$arrayProducto->getNuevoPrecio() ?>" step="0.01" maxlength="5" required>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-sort-amount-up"></i> Cantidad</p>
                <input type="number" class="input" name="cantidad" value="<?=$arrayProducto->getCantidad() ?>" maxlength="5" required>
            </div>

            <div class="view__register-field--placeholder-date">
                <p><i class="fas fa-info"></i> Informacion</p>
                <textarea name="informacion" id="textArea" cols="20" rows="10" maxlength="80"><?=$arrayProducto->getInformacion() ?></textarea>
            </div>

            <div class="view__register-field--placeholder-date">
                <p><i class="fas fa-file-image"></i> Archivo</p>
                <input class="input" type="file" name="foto" id="foto" src="<?=$arrayProducto->getImagen()?>" aria-describedby="fileHelpId" required>
            </div>

            <div class="botones">
                
                <input type="hidden" value="modificar" name="opcion" />
                <input type="hidden" name="id" value="<?=$arrayProducto->getId() ?>">
                <button type="submit" class="btnProducto">Registrar <i class="fas fa-sign-in-alt"></i></button>
            </div>
        </form>
    </div>

    <?php include_once("particiones/footer_perfil.php"); ?>
</body>
</html>