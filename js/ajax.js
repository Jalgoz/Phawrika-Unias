$(() => {
    $('#frmInsertar').submit( function (e) {
        if($('#clave').val() === $('#clave2').val()) {
            e.preventDefault();
            $.ajax('acciones/accionesUsuarios.php', {
            data: $(this).serialize(),
            success: function (data) {
                if (data == 'Error'){
                    $('#usuario').val('');
                    alert('Usuario existente');
                }else {
                    $('#frmInsertar')[0].reset();
                    $('#frmInsertar').parent().addClass('hide',200);;
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
});