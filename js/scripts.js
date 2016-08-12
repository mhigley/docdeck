'use strict';

var chaps = $('select'),
    myForm = $('#myForm');
chaps.on('change', getChap);

function getChap(e){
    var $thisOptUrl = $(this.selectedOptions).data('url');
    window.location.href = $thisOptUrl;
}

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
            switch(course){
                case 'course-bc1':
                    course += '/01.variables/01.what is a variable.php';
                    break;
                case 'course-bc2':
                    course += '/01.variables/01.what is a variable.php';
                    break;
                case 'course-js1':
                    course += '/01.variables/01.what is a variable.php';
                    break;
                default:
                    course += 'Good luck if this ever proves true. You\'ve screwed the pooch then!';
            }
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
    $asideToggleIcons = $('.mi-close, .mi-menu'),
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
    nextArrow: '<button type="button" class="btn"><i class="material-icons">chevron_right</i></button>',
    prevArrow: '<button type="button" class="btn"><i class="material-icons">chevron_left</i></button>'
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

function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

$('.logout').on('click', function(){
    eraseCookie('page');
    //window.location.replace('http://docdeck.matthewhigley.com/');
    window.location.replace('http://localhost/');
});

function eraseCookie(name) {
    createCookie(name,"",-1);
}
