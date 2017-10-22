function deliveryAddressCheck(element){

    if($(element).is(':checked')){
        $('.deliveryAddress').slideDown();
    }else{
        $('.deliveryAddress').slideUp();
    }

}

$(document).ready(function (){

    $('body').on('click' , 'aside.leftMenu > ul li.dropdown > a' , function (e){

        e.preventDefault();
        e.stopImmediatePropagation();

        var ele = $(this);
        ele.parents('li.dropdown').find('ul').slideToggle();

    });

    // BLADE TOGGLE

    $('body').on('click' , 'a[data-bladetoggle="yes"]' , function (e){

        e.preventDefault();
        e.stopImmediatePropagation();

        var ele = $(this);
        var url = ele.data('url');

        var bladeOverlay = $('.bladeOverlay');
        var blade = bladeOverlay.find('.blade');

        bladeOverlay.fadeIn();
        setTimeout(function (){
           blade.animate({right:'0px'});
        } , 300);

        blade.load(url);

    });

});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})