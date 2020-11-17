$( () => {
    //Efecto input ayuda

    let singIn = true;
    let logIn = true;

    // Efectos formulario registro
    $('.form__especial input').focusout( function() {
        if($(this).val().length <= 0 && singIn ) {
            $(this).siblings('p').animate({top:'2px'},400);
        } 
    }); 
    $('.form__especial input').focus( function() {
        $(this).siblings('p').animate({top:'-19px'},400);
        singIn = true;
    }); 


    $('.form__especial input').change( function () {   
        if($(this).val().length <= 0) {
            $(this).siblings('p').animate({top:'2px'},400);
            singIn = false;
        } else {
            $(this).siblings('p').animate({top:'-19px'},400);
            singIn = true;
        } 
    });

    $('.btnCerrar').click( function () {
        $(this).parent().parent().parent().addClass('hide',200);
        $(this).parent().parent()[0].reset();
    });

    $('.sign-in').click( () => {
        $('.view__register').removeClass('hide',200);

    });

    $('.log-in').click( () => {
        $('.view__log-in').removeClass('hide',200);
    });

    //Efecto menu pagina perfil
    $('.bar').click( function () {
        $(this).siblings('ul').toggleClass('active', 200);
    });
});