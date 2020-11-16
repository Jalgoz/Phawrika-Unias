$( () => {
    //Efecto input ayuda

    let singIn = true;
    let logIn = true;

    // Efectos formulario registro
    $('.view__register input').focusout( function() {
        if($(this).val().length <= 0 && singIn ) {
            $(this).siblings('p').animate({top:'2px'},400);
        } 
    }); 
    $('.view__register input').focus( function() {
        $(this).siblings('p').animate({top:'-19px'},400);
        singIn = true;
    }); 


    $('.view__register input').change( function () {   
        if($(this).val().length <= 0) {
            $(this).siblings('p').animate({top:'2px'},400);
            singIn = false;
        } else {
            $(this).siblings('p').animate({top:'-19px'},400);
            singIn = true;
        } 
    });

    //Efectos formulario log in
    $('.view__log-in input').focusout( function() {
        if($(this).val().length <= 0 && logIn ) {
            $(this).siblings('p').animate({top:'2px'},400);
        } 
    }); 
    $('.view__log-in input').focus( function() {
        $(this).siblings('p').animate({top:'-19px'},400);
        logIn = true;
    }); 


    $('.view__log-in input').change( function () {   
        if($(this).val().length <= 0) {
            $(this).siblings('p').animate({top:'2px'},400);
            logIn = false;
        } else {
            $(this).siblings('p').animate({top:'-19px'},400);
            logIn = true;
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
});