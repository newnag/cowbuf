// เปิดปิดหมวดหมู่
$('.head-menu').click(function(){
    $(this).next().slideToggle();
})

// เปิดปิดเมนูซ้าย
$('.menu-left li').click(function(){
    $(this).find('.sub-menu').slideToggle();
    if($(this).hasClass('open')){
        $(this).removeClass('open');
        $(this).find('i').css('transform','rotate(0deg)')
    }
    else{
        $(this).addClass('open');
        $(this).find('i').css('transform','rotate(90deg)')
    }
});

// สไลด์รูป
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

// สไลด์รูปแบบที่ 2
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    arrows:false,
    autoplay:false
  });