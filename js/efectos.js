$( () => {
    //Efecto input ayuda

    let controlador = true;
    $('.view__register input').focusout( function() {
        if($(this).val().length <= 0 && controlador ) {
            $(this).siblings('p').animate({top:'2px'},400);
        } 
    }); 
    $('.view__register input').focus( function() {
        $(this).siblings('p').animate({top:'-19px'},400);
        controlador = true;
    }); 


    $('.view__register input').change( function () {   
        if($(this).val().length <= 0) {
            $(this).siblings('p').animate({top:'2px'},400);
            controlador = false;
        } else {
            $(this).siblings('p').animate({top:'-19px'},400);
            controlador = true;
        } 
    });

    $('.btnCerrar').click( function () {
        $(this).parent().parent().parent().addClass('hide',200);
    });

    $('.sign-in').click( () => {
        $('.view__register').removeClass('hide',200);

    });

    $('.log-in').click( () => {
        $('.view__log-in').removeClass('hide',200);
    });
});