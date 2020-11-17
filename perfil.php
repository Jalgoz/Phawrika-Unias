
    <?php include_once("particiones/head_perfil.php"); ?>

    <div class="bienvenida">
        <img src="img/icon.png" alt="">
        <h2 class="bienvenida__banner">BIENVENID@ <strong><?php echo ($_SESSION['usuario']); ?>.</strong></h2>
        <p>Esperamos que tengas una bonita experiencia !!!</p>
    </div>

    <?php include_once("particiones/footer_perfil.php"); ?>
</body>
</html>