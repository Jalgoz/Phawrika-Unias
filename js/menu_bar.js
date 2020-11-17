$( () => {
    let XL = window.matchMedia("(max-width: 1200px)");
    let L = window.matchMedia("(max-width: 1024px)");
    let flag = true;
    
    function removerClases(x) {
        if(x.matches) {
            $('.registros').removeClass('active');
        } 
    }

    function menu_desplegable(x) {
        if(x.matches) {
            $('.nav').addClass('nav_bar').removeClass('header-inicio__menu');
            $('.target').removeClass('hide');
            $('.li__inicio').removeClass('hide');
            $('.li__icon').addClass('hide');
            $('.only__manager').addClass('hide').removeClass('ul__problema');
        }
        else {
            $('.nav').addClass('header-inicio__menu').removeClass('nav_bar').removeClass('expansion');
            $('.target').addClass('hide').removeClass('blue');
            $('.li__inicio').addClass('hide');
            $('.li__icon').removeClass('hide');
            $('.only__manager').removeClass('active').removeClass('hide').addClass('ul__problema');
            flag = true;        
        }     
    }

    $('.header-inicio').on("click",".target", function() {
        if(flag){
            $(this).siblings('.nav_bar').addClass('expansion',700);
            $(this).addClass('blue',1000);
            
        } else {
            $(this).siblings('.nav_bar').removeClass('expansion',700);
            $(this).removeClass('blue',1000);  
            
        }
        flag = !flag;
    });

    removerClases(XL);
    XL.addListener(removerClases);

    menu_desplegable(L);
    L.addListener(menu_desplegable);

    $('.hide-user').click( () => {
        $('.registros').toggleClass('active');
    });

    /* $('.target').click( () => {
        $('.target').toggleClass('active');
    }); */
} );
