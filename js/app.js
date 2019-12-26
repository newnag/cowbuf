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

  // เปิดกล่องสร้างรหัสผ่านใหม่
  $('.login-button #forget-button').click(function(){
    $('.dialog-forget').fadeIn();
    $('.bg-dialog').show();
  });

  //ปิดกล่องก็อปปี้รหัสผ่านใหม่
  $('.new-pass .button #copy-newpass').click(function(){
    $('.dialog-forget').fadeOut();
    $('.bg-dialog').hide();
  });

  // สลับเมนูหัวบนเมื่อเข้าสู่ระบบ
  $('.form-login .login-button').click(function(){
    $('.member-head').hide();
    $('.member-login').show();
  });

  // เปิดปิดเมนูสมาชิก
  $('.user-login').click(function(){
    $('.member-menu').slideToggle();
  });

  // เปิดกล่องยืนยันการแก้ไขข้อมูลสมาชิก
  $('.edit-button button').click(function(){
    $('.dialog-forget').fadeIn();
    $('.bg-dialog').show();
  });
  // ปิดกล่องเพื่อแก้ไขข้อมูลสมาชิก
  $('.new-pass .button #id-number').click(function(){
    $('.account .form-login .input-login input').prop('readonly', false);
    $('.dialog-forget').fadeOut();
    $('.bg-dialog').hide();
  });

  // ปุ่มลบสินค้าในหน้าร้านค้า
  $('.storePage-all .grid-store .box .delete-button').click(function(){
    $(this).parent().fadeOut(function(){
      $(this).remove();
    });
  });

  // เลือกสถานะสินค้า
  $('.right-select select').change(function(){
    var text = 'storePage-' + $(this).val();

    $('.storePage-all').hide();
    $('.storePage-notbuy').hide();
    $('.storePage-buynow').hide();
    $('.storePage-success').hide();
    $('.storePage-timeout').hide();
    $('.storePage-now').hide();
    $('.'+text).fadeIn();
  });


  // เปลี่ยนปุ่ม active
  $('.menu-store .leaf-menu .button-menu button#store-page').click(function(){
      $(this).addClass('active');
      $('.menu-store .leaf-menu .button-menu button#store-sale').removeClass('active');
  });
  $('.menu-store .leaf-menu .button-menu button#store-sale').click(function(){
    $(this).addClass('active');
    $('.menu-store .leaf-menu .button-menu button#store-page').removeClass('active');
  });


  // เปลี่ยนหน้าร้านค้า
  $('.storePage .menu-store .leaf-menu #store-page').click(function(){
    $('.menu-store .right-select').show();

    $.ajax({
      url:"template/store-page.php",
      success:function(data){
        $('.page-store').html(data);
      },
    });
  });
  // เปลี่ยนหน้าลงสินค้า
  $('.storePage .menu-store .leaf-menu #store-sale').click(function(){
    $('.menu-store .right-select').hide();

    $.ajax({
      url:"template/sale.php",
      success:function(data){
        $('.page-store').html(data);
      },
    });
  });