    <?php include_once("particiones/head.php"); ?>
    <?php include_once("claseProducto.php");
                $arrayProducto = producto::seleccionarTodo();     
                // var_dump($arrayUsuario);  
    ?>
    <?php include_once("particiones/head2.php"); ?>
    
        <div class="header-inicio__titulo">
            <h1>PRODUCTOS</h1>
        </div>
    </header>

    <main class="main productos">
        <div class="div__mensaje">
            <img src="img/icon.png" alt="icono">

            <p>En Phawrika Uñas estamos comprometidos con la sociedad, y trabajamos cada día para ofrecer la máxima
                calidad en nuestros productos. Todos nuestros productos, así como sus ingredientes, no han sido testados
                en animales.

                A continuación os presentamos nuestra gama de productos para mantener tus manos y pies siempre
                perfectos.</p>
        </div>

        <hr>

        <div class="div__productos">

            <?php foreach($arrayProducto as $productos){?>
            <div class="div__producto">

                <div class="div__producto__img">
                    <img src="<?=$productos->getImagen()?>" alt="producto">

                    <div class="producto__detalle">
                        <p style="<?php if($productos->getRebaja() == 1) echo 'text-decoration: line-through;'?>" >Precio: <?=$productos->getPrecio()?> Bs.</p>
                        <p>Marca: <?=$productos->getMarca()?></p>
                        <!-- <p>Color: Rosado</p> -->
                        <?php if($productos->getRebaja() == 1) { ?>
                            <p>En oferta: <?=$productos->getNuevoPrecio()?> Bs.</p>
                        <?php }  ?>
                    </div>
                </div>

                <div class="producto__info">
                    <h2><?=$productos->getNombre()?></h2>

                    <p><?=$productos->getInformacion()?></p>
                </div>

                <div class="div__carrito">
                    <a href="<?php if(!isset($_SESSION['usuario'])){ echo 'inicio.php'; } ?>">Comprar</a> <i class="fas fa-shopping-cart"></i>
                </div>
            </div>

            <?php }  ?>
        </div>

        <hr>

        <div class="div__cita__contactos">
            <div class="div__cita">
                <h1>RESERVA SU CITA QUE ESTA ESPERANDO?</h1>

                <a href="#">Reservar Cita</a>
            </div>

            <div class="div__contactos">
                <h1>TIENE DUDAS CONTACTENOS</h1>

                <a href="contactos.html">Contactanos</a>
            </div>
        </div>
    </main>

    <?php include_once("particiones/footer.php"); ?>
    
</body>

</html>