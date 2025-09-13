let isMobileNavSliderOpen = false;

function toggleNavSlider(){
    if(isMobileNavSliderOpen){
        closeNavslider();
        isMobileNavSliderOpen = false;
    }else{
        showNavslider();
        isMobileNavSliderOpen = true;
    }
}

function showNavslider(){
    $('#mobilenavbtncircle').removeClass('hidden');
    $('#mobilenavbtncircle').removeClass('navbtn-circle-popzooom-out')
    $('#mobilenavbtncircle').addClass('navbtn-circle-popzooom-in')
    $('#hamline1').removeClass('navhamline1-to-hamline')
    $('#hamline1').removeClass('mb-1')
    $('#hamline2').removeClass('navhamline2-to-hamline')
    $('#hamline2').removeClass('mt-1')
    $('#hamline1').addClass('navhamline1-to-cross')
    $('#hamline2').addClass('navhamline2-to-cross')
    $('#slidercontainer').removeClass('hidden');
    $('#slidercontainer').addClass('flex');
    setTimeout(function(){
        removeClassSequentially(0, $('.mobnavitem'), 'hidden');
        addClassSequentially(0, $('.mobnavitem'), 'navmenu-item-slide-right');
        $('#mobnavmenufooterbtn').removeClass('hidden');
        $('#mobnavmenufooterbtn').addClass('navmenu-button-scale-up');
        $('.mobnavmenusocials').removeClass('hidden');
        removeClassSequentially(0, $('.mobnavmenusocials'), 'opacity-0');
        addClassSequentially(0, $('.mobnavmenusocials'), 'navmenu-socials-show-up');
    }, 500);
    $('body').addClass("overflow-hidden");
}
function closeNavslider(){
    $('#mobilenavbtncircle').removeClass('navbtn-circle-popzooom-in')
    $('#mobilenavbtncircle').addClass('navbtn-circle-popzooom-out')
    $('#hamline1').removeClass('navhamline1-to-cross')
    $('#hamline2').removeClass('navhamline2-to-cross')
    $('#hamline1').addClass('navhamline1-to-hamline')
    $('#hamline2').addClass('navhamline2-to-hamline')
    $('#hamline1').addClass('mb-1')
    $('#hamline2').addClass('mt-1')
    removeClassSequentially(0, $('.mobnavitem'), 'navmenu-item-slide-right');
    $('#mobnavmenufooterbtn').addClass('hidden');
    $('#mobnavmenufooterbtn').removeClass('navmenu-button-scale-up');
    $('.mobnavitem').addClass('hidden');
    $('.mobnavmenusocials').addClass('hidden');
    addClassSequentially(0, $('.mobnavmenusocials'), 'opacity-0');
    removeClassSequentially(0, $('.mobnavmenusocials'), 'navmenu-socials-show-up');
    setTimeout(function(){
        $('#mobilenavbtncircle').removeClass('navbtn-circle-popzooom-out')
        $('#mobilenavbtncircle').addClass('hidden');
        $('#slidercontainer').removeClass('flex');
        $('#slidercontainer').addClass('hidden');
    }, 500);
    $('body').removeClass("overflow-hidden");
}

function addClassSequentially(index, elements, className) {
    if (index < elements.length) {
        $(elements[index]).addClass(className);
        setTimeout(function() {
            addClassSequentially(index + 1, elements, className);
        }, 100);
    }
}

function removeClassSequentially(index, elements, className) {
    if (index < elements.length) {
        $(elements[index]).removeClass(className);
        setTimeout(function() {
            removeClassSequentially(index + 1, elements, className);
        }, 100);
    }
}