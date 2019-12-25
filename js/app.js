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

  // บวกลบจำนวนบิด
  function add_num(){
    var bid = $('.place-coin .button .number .input-number input').val();
    num = parseInt(bid)+1;
    $('.place-coin .button .number .input-number input').val(num);
    return num;
  }
  function minus_num(){
    var bid = $('.place-coin .button .number .input-number input').val();
    num = parseInt(bid)-1;
    $('.place-coin .button .number .input-number input').val(num);
    return num;
}
  $('.place-coin .button .number .input-number #plus_bid').click(function(){
    if($('.place-coin .button .number .input-number input').val()<9){
        add_num();
    }
  });
  $('.place-coin .button .number .input-number #minus_bid').click(function(){
    if($('.place-coin .button .number .input-number input').val()>1){  
        minus_num();  
    }
  });

  // ดู password
  function view_password(){
    var see_pass = document.getElementById("pass");
    if (see_pass.type === "password") {
        see_pass.type = "text";
    } else {
        see_pass.type = "password";
    }
  };