
    <?php include_once("particiones/head.php"); ?>
    <?php include_once("particiones/head2.php"); ?>
    
        <div class="header-inicio__titulo">
            <h1>CONTACTANOS</h1>
        </div>
    </header>

    <main class="main-contact">
        <div class="div__img--efect-position">
            <div class="img__behind">
                <img src="img/img__atras.jpg" alt="">
            </div>
            <div class="img__medium">
                <img src="img/img__medio.jpg" alt="">
            </div>

            <div class="img__above">
                <img src="img/img__superior.jpg" alt="">
            </div>
        </div>

        <div class="form">
            <form action="">
                <div class="name">
                    <label for="">Nombre: </label>
                    <input type="text">
                </div>

                <div class="phone">
                    <label for="">Telefono: </label>
                    <input type="number">
                </div>

                <div class="email">
                    <label for="">Correo: </label>
                    <input type="email">
                </div>

                <div class="message">
                    <label for="">Mensaje: </label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </form>
        </div>

    </main>

    <?php include_once("particiones/footer.php"); ?>

</body>

</html>