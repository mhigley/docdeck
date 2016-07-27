'use strict';

$('.deck-select label').on('click', function(e){
    e.preventDefault();
    e.stopPropagation();
    if(!this.firstElementChild.disabled){
        this.firstElementChild.checked = true;
    }
});

function getCourse(e){
    e.preventDefault();
    var $inputs = $('input[type="radio"]');
    $.each($inputs, function(){
        if(this.checked === true){
            var course = $('.deck-select').serialize();
            course = course.split('=').join('-');
            course += '/lesson01.php';

            window.location.replace(course);
        }else{
            var $warn = $('#warn'),
                msg = '<p class="warn">Please select your course to proceed.</p>';
            $warn.html(msg);
        }
    });
}

var $body = $('body'),
    $btn = $('#asideToggle'),
    $aside = $('aside'),
    $slick = $('.sections'),
    $asideToggleIcons = $('.fa-close, .fa-bars'),
    $nav = $('.navigation'),
    $tip = $('.tip');

$slick.slick({
    speed: 350,
    useCSS: true,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    initialSlide: 0,
    dots: true,
    appendDots: $nav,
    customPaging: asideNav,
    infinite: false,
    adaptiveHeight: true,
    draggable: true,
    nextArrow: '<button type="button" class="btn"><i class="fa fa-angle-right"></i></button>',
    prevArrow: '<button type="button" class="btn"><i class="fa fa-angle-left"></i></button>'
});

function asideNav(slider, index){
    var slides = $(slider.$slides[index])[0];
    var text = $(slides).find('h2')[0].textContent;
    return text;
}

$btn.on('click', function(){
    $body.toggleClass('padify');
    $asideToggleIcons.toggleClass('asideToggle');
});

$('.logout').on('click', function(){
    eraseCookie('page');
    window.location.replace('http://demo.matthewhigley.com/');
    //window.location.replace('http://localhost/');
});

function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}
