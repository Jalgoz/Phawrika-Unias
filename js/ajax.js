$(() => {
    // AJAX registro
    $('#frmInsertar').submit( function (e) {
        if($('#clave').val() === $('#clave2').val()) {
            e.preventDefault();
            $.ajax('accionesUsuarios.php', {
                data: $(this).serialize(),
                success: function (data) {
                    // console.log(data);
                    if (data == 'ERROR'){
                        $('#usuario').val('');
                        alert('Usuario existente');
                    }else {
                        $('#frmInsertar')[0].reset();
                        $('.view__register #frmInsertar').parent().addClass('hide',200);
                        alert('Usuario registrado satisfactoriamente');
                    }   
                }
            });
        } else {
            e.preventDefault();
            alert('Las contraseñas no coinciden !!!')
            $('#clave').val('');
            $('#clave2').val('');
        }
    });

    //AJAX log in
   $('#frmLogIn').submit( function (e) {
        if($('#frmLogIn #logUsuario').val().length <= 0 || $('#frmLogIn #logClave').val().length <= 0) {
           e.preventDefault();
           alert('Llene todos los campos por favor');
        } else {
            e.preventDefault();
            $.ajax('validar.php', {
                data: $(this).serialize(),
                success: function (data) {
                    console.log(data);
                    let d = data;
                    if (d.includes('PASS')){
                        alert('Contraseña incorrecta');
                        $('#frmLogIn #logClave').val('');
                    } else if (d.includes('USUARIO')) {
                        alert('Usuario incorrecta');
                        $('#frmLogIn #logUsuario').val('');
                    } else if (d.includes('OK')) {
                        $('#frmLogIn')[0].reset();
                        $('#frmLogIn').parent().addClass('hide',200);
                        location.reload();
                    }
                }
            });
        }
    }); 

    // AJAX Modificar
    $('#frmModificar').submit( function (e) {
        e.preventDefault();
        $.ajax('accionesUsuarios.php', {
            data: $(this).serialize(),
            success: function (data) {
                if (data == 'ERROR'){
                    $('#usuario').val('');
                    alert('Usuario existente');
                }else {
                    alert('Usuario modificado satisfactoriamente');
                    location.reload();
                    $(location).attr('href','lista-usuarios.php');
                }   
            }
        });
    });

    // AJAX registro producto
    /* $('#frmInsertarP').submit( function (e) {
        e.preventDefault();
        $.ajax('accionesProducto.php', {
            data: $(this).serialize(),
            success: function (data) {
                console.log(data);
                if (data == 'ERROR'){
                    alert('Se producto un error');
                }else {
                    $('#frmInsertarP')[0].reset();
                    alert('Producto registrado satisfactoriamente');
                }   
            }
        });
    }); */

    /* $(".btnProducto").on('click', function() {
        let formData = new FormData();
        let files = $('#foto')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'accionesProducto.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $('#frmInsertarP')[0].reset();
                    alert('Producto registrado satisfactoriamente');
                } else {
                    alert('Se producto un error');
                }
            }
        });
        return false;
    }); */
});