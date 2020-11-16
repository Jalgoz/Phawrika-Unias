<footer>
        <div class="footer__map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d956.3949439597732!2d-68.13472302080346!3d-16.496802549288617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0x915f214e73de7279%3A0xf45e635602dfb0c5!2sOvio%20Jeans%20La%20Paz%2C%20Galeria%20Carvajal%2C%20Calle%20Potosi%20%C2%B71156%2C%20La%20Paz!3m2!1d-16.4968884!2d-68.1341458!4m3!3m2!1d-16.496785499999998!2d-68.1343!5e0!3m2!1ses!2sbo!4v1600635154708!5m2!1ses!2sbo"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>

        <div class="footer__make">
            <h3>Que hacemos?</h3>

            <ul>
                <li>Manicure</li>
                <li>Pedicure</li>
                <li>Uñas Acrilicas</li>
                <li>Pintados</li>
            </ul>
        </div>

        <div class="footer__contact">
            <h3>Contactanos</h3>

            <div class="footer__contact-info">
                <span><span class="icon"><i class="fas fa-phone"></i></span> 78853112</span>
                <span><span class="icon"><i class="fas fa-envelope-square"></i></span> esmeralda@gmail.com</span>
                <span><span class="icon"><i class="fas fa-home"></i></span> Calle potosi #2645</span>

                <div class="footer__contact-networks">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="rights">
            <strong>Todos los derechos reservados <a href="#">PhawrikaUñas</a> &copy;</strong>
        </div>
    </footer>

    <div class="view__register hide">
        <div class="overlay"></div>

        <form action="">
            <div class="view__register-title">
                <h3><span class="span-primero">REGISTRO</span><span class="span-segundo"> USUARIO</span></h3>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-font"></i> Nombre</p>
                <input type="text" class="input" name="nombre" id="nombre">
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fab fa-black-tie"></i> Apellidos</p>
                <input type="text" class="input" name="apellido" id="apellido">
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-user"></i> Usuario</p>
                <input type="text" class="input" name="usuario" id="usuario">
            </div>

            <div class="view__register-field--placeholder-date">
                <p><i class="far fa-calendar-alt"></i> Fecha nacimiento</p>
                <input type="date" id="fecha" name="fecha" value="1995-01-01" min="1920-01-01" max="2015-01-01">
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="far fa-envelope"></i> Correo</p>
                <input class="input" type="email" name="correo" id="correo">
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-key"></i> Contraseña</p>
                <input class="input" type="current-password" name="clave" id="clave">
            </div>

            <div class="botones">
                <a class="btnCerrar">Cerrar <i class="far fa-window-close"></i></a>
                <button type="submit" class="btnEnviar">Registrar <i class="fas fa-sign-in-alt"></i></button>
            </div>
        </form>
    </div>

    <div class="view__log-in hide">
        <div class="overlay"></div>

        <form action="">
            <div class="view__register-title">
                <h3><span class="span-primero">INICIAR</span><span class="span-segundo"> SESION</span></h3>
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-user"></i> Usuario</p>
                <input type="text" class="input" name="usuario" id="usuario">
            </div>

            <div class="view__register-field--placeholder">
                <p><i class="fas fa-key"></i> Contraseña</p>
                <input class="input" type="current-password" name="clave" id="clave">
            </div>

            <div class="botones">
                <a class="btnCerrar">Cerrar <i class="far fa-window-close"></i></a>
                <button type="submit" class="btnEnviar">Iniciar sesion <i class="fas fa-sign-in-alt"></i></button>
            </div>
        </form>
    </div>

    <script src="js/jquery-3.5.1.min.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/jquery-ui.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/menu_bar.js?v=<?php echo(rand()); ?>"></script>
    <script src="js/efectos.js?v=<?php echo(rand()); ?>"></script>