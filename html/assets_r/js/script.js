

jQuery(document).ready(function($){'use strict';

    $('.hdr-srch-btn').on('click',function(){$('.hdr-srch').addClass('active');return false;});$('.srch-cls').on('click',function(){$('.hdr-srch').removeClass('active');return false;});$('.crt-lst > a').on('click',function(){$('.crt-lst').toggleClass('active');return false;});$('.crt-itm .remove').on('click',function(){$(this).parent().parent().parent().fadeOut('slow');return false;});$('.dnt-pp').on('click',function(){$('.popup-wrp').addClass('active');$('html').addClass('pp-br');return false;});$('.pp-cls').on('click',function(){$('.popup-wrp').removeClass('active');$('html').removeClass('pp-br');return false;});$('.rs-mu-btn').on('click',function(){$('.rs-mnu').addClass('slidein');return false;});$('.rs-mnu-cls-btn').on('click',function(){$('.rs-mnu').removeClass('slidein');return false;});$('.rs-mnu li.menu-item-has-children > a').on('click',function(){$(this).parent().siblings().children('ul').slideUp();$(this).parent().siblings().removeClass('active');$(this).parent().children('ul').slideToggle();$(this).parent().toggleClass('active');return false;});var menu_height=$('header').height();$(window).scroll(function(){var scroll=$(window).scrollTop();if(scroll>=menu_height){$('.stick').addClass('sticky');}else{$('.stick').removeClass('sticky');}});if($('header').hasClass('stick')){$('.theme-layout').css({'padding-top':menu_height});}
// if($.isFunction($.fn.select2)){$('select').select2();}

if($.isFunction($.fn.select2)){$('.select').select2();}
if($.isFunction($.fn.downCount)){$('.countdown').downCount({date:'12/3/2019 12:00:00',offset:+5});}
if($.isFunction($.fn.slimScroll)){$('').slimScroll({height:'550px',size:'2px',position:'right',color:'#000',});}
if($.isFunction($.fn.poptrox)){var foo=$('.lightbox');foo.poptrox({usePopupCaption:true,usePopupNav:true});}
if($.isFunction($.fn.fullCalendar)){$('#sidebar-calendar').fullCalendar({header:{left:'prev',center:'title',right:'next'},defaultDate:'2017-04-19',buttonIcons:false,editable:true,eventLimit:true,today:true});$('#clndr').fullCalendar({header:{left:'prev',center:'title',right:'next'},defaultDate:'2017-04-19',buttonIcons:false,editable:true,eventLimit:true,today:true,events:[{title:'Primary, Secondary Schools & Adult...',start:'2017-04-01'},{title:'Primary, Secondary Schools & Adult...',start:'2017-04-10'},{title:'Primary, Secondary Schools & Adult...',start:'2017-04-13'},{title:'Primary, Secondary Schools & Adult...',start:'2017-04-29'}]});}
if($.isFunction($.fn.datepicker)){$('.dt-slc > input').datepicker();}
if($.isFunction($.fn.vide)){$('#bg-video').vide('video/charity');}
$('#contactform').submit(function(){var action=$(this).attr('action');var msg=$('#message');$(msg).hide();var data='name='+$('#name').val()+'&email='+$('#email').val()+'&phone='+$('#phone').val()+'&comments='+$('#comments').val()+'verify='+$('#verify').val()+'captcha='+$(".g-recaptcha-response").val();$.ajax({type:'POST',url:action,data:data,beforeSend:function(){$('#submit').attr('disabled',true);$('img.loader').fadeIn('slow');},success:function(data){$('#submit').attr('disabled',false);$('img.loader').fadeOut('slow');$(msg).empty();$(msg).html(data);$('#message').slideDown('slow');if(data.indexOf('success')>0){$('#contactform').slideUp('slow');}}});return false;});var dnt_btn=$(".dnt-fgr-lst li a");$(".dnt-fgr-lst li a").on("click",function(){$(dnt_btn).removeClass("active");$(this).addClass("active");var amount_val=$(this).html();$(".amunt-bx").html(amount_val);return false;});if($.isFunction($.fn.TouchSpin)){$(".cus-sty,.prd-qt > input").TouchSpin({});}
if($.isFunction($.fn.owlCarousel)){$('.sponsors-carousel').owlCarousel({autoplay:false,smartSpeed:600,loop:true,items:5,dots:false,slideSpeed:2000,nav:false,margin:30,responsive:{0:{items:2},480:{items:3},768:{items:4},1200:{items:5}}});$('.twitter-reviews').owlCarousel({autoplay:true,smartSpeed:600,loop:true,items:1,dots:false,slideSpeed:2000,nav:false,margin:30,animateIn:'fadeInDown',animateOut:'fadeOutDown'});$('.feat-img-car').owlCarousel({autoplay:true,smartSpeed:600,loop:true,items:1,dots:false,slideSpeed:2000,nav:false,margin:0,animateIn:'fadeIn',animateOut:'fadeOut'});$('.projects-detail').owlCarousel({items:1,loop:false,center:true,margin:10,URLhashListener:true,startPosition:'URLHash'});$('.projects-nav').owlCarousel({items:5,loop:false,margin:0,responsive:{0:{items:2},480:{items:3},768:{items:4},980:{items:4},1200:{items:5}}});$(".projects-nav a").on("click",function(){$(".projects-nav a").removeClass("clicked");$(this).addClass("clicked");});$('.hig-pri-carousel').owlCarousel({autoplay:true,smartSpeed:600,loop:true,items:1,dots:false,slideSpeed:2000,nav:true,margin:0,animateIn:'fadeIn',animateOut:'fadeOut',navText:["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"]});$('.projects-carousel2').owlCarousel({autoplay:true,smartSpeed:600,loop:true,items:3,dots:false,slideSpeed:2000,center:true,margin:0,nav:true,navText:["<i class='flaticon-back'></i>","<i class='flaticon-next'></i>"],responsive:{0:{items:1,nav:false},480:{items:1,nav:false},768:{items:2,nav:false},980:{items:2},1200:{items:3}}});$('.custmr-reviws-carousel').owlCarousel({autoplay:true,smartSpeed:600,loop:true,items:1,dots:false,slideSpeed:2000,nav:false,margin:0,animateIn:'fadeIn',animateOut:'fadeOut'});$('.tem-carousel').owlCarousel({autoplay:true,smartSpeed:600,loop:true,items:4,dots:false,slideSpeed:2000,margin:30,nav:true,navText:["<i class='flaticon-back'></i>","<i class='flaticon-next'></i>"],responsive:{0:{items:1,nav:false},480:{items:2,nav:false},768:{items:3,nav:false},980:{items:3},1200:{items:4}}});$('.carousel').owlCarousel({autoplay:true,smartSpeed:600,loop:true,items:3,dots:false,slideSpeed:2000,margin:30,nav:true,navText:["<i class='flaticon-back'></i>","<i class='flaticon-next'></i>"],responsive:{0:{items:1,nav:false},480:{items:1,nav:false},768:{items:2,nav:false},980:{items:2},1200:{items:3}}});}
if($.isFunction($.fn.slick)){$('.prd-img-gl').slick({slidesToShow:1,slidesToScroll:1,arrows:false,fade:false,slide:'li',asNavFor:'.prd-gl-nav'});$('.prd-gl-nav').slick({slidesToShow:4,slidesToScroll:1,asNavFor:'.prd-img-gl',dots:false,arrows:false,centerMode:true,slide:'li',centerPadding:'0px',focusOnSelect:true});}});$(window).scroll(function(){});jQuery(window).on('load',function(){"use strict";$(".pageloader").fadeOut("slow");});
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: true,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
