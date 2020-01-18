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
  function showDialog_forget(){
    $('.login-button #forget-button').click(function(){
      $('.dialog-forget').fadeIn();
      $('.bg-dialog').show();
    });
  }

  //ปิดกล่องก็อปปี้รหัสผ่านใหม่
  $('.new-pass .button #copy-newpass').click(function(){
    var copy = $('.new-pass .input-form #newpass');
    copy.select();
    document.execCommand("copy");
    $('.dialog-forget').fadeOut();
    $('.bg-dialog').hide();
  });


  //สลับเมนูหัวบนเมื่อเข้าสู่ระบบ
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

  // เปลี่ยนหน้าสินค้าโปรด
  $('.mycart .menu-mycart .leaf-menu #my-fav').click(function(){
    $.ajax({
      url:"template/page-myfav.php",
      success:function(data){
        $('.page-mycart').html(data);
      },
    });
  });
  // เปลี่ยนหน้ารายการซื้อสินค้าของฉัน
  $('.mycart .menu-mycart .leaf-menu #my-cart').click(function(){
    $.ajax({
      url:"template/page-mycart.php",
      success:function(data){
        $('.page-mycart').html(data);
      },
    });
  });
  // เปลี่ยนหน้ารายการซื้อสินค้าของฉัน
  $('.mycart .menu-mycart .leaf-menu #my-bid').click(function(){
    $.ajax({
      url:"template/page-mybid.php",
      success:function(data){
        $('.page-mycart').html(data);
      },
    });
  });

  // เปลี่ยนหน้าเติมเงิน
  $('.paypaid .menu-mycart .leaf-menu #paypaid').click(function(){
    $.ajax({
      url:"template/paid-page.php",
      success:function(data){
        $('.page-paypaid').html(data);
      },
    });
  });
  // เปลี่ยนหน้าถอนเงิน
  $('.paypaid .menu-mycart .leaf-menu #withdraw').click(function(){
    $.ajax({
      url:"template/paid-withdraw.php",
      success:function(data){
        $('.page-paypaid').html(data);
      },
    });
  });
  // เปลี่ยนหน้าประวัติเติมเงิน
  $('.paypaid .menu-mycart .leaf-menu #history-paid').click(function(){
    $.ajax({
      url:"template/paid-history.php",
      success:function(data){
        $('.page-paypaid').html(data);
      },
    });
  });

//----------------ส่วนเช็คแจ้งเตือนฟอร์มสมาชิก------------------//

$('.login .form-login form').submit(function(e){
  // สมาชิกกรอกข้อมูลว่าง
  if($('.login .form-login .input-login input[name="user"]').val() == ''){
    e.preventDefault();
    swal({
      text: "กรุณากรอกชื่อผู้ใช้งาน",
      icon: "warning",
    });
    return false;
  }
  if($('.login .form-login .input-login input[name="pass"]').val() == ''){
    swal({
      text: "กรุณากรอกรหัสผ่าน",
      icon: "warning",
    });
    return false;
  }

  // สมาชิกกรอกข้อมูลผิด
  if($('.login .form-login .input-login input[name="user"]').val() != 'admin'){
    e.preventDefault();
    swal({
      text: "กรอกชื่อผู้ใช้ผิด",
      icon: "error",
    });
    return false;
  }
  if($('.login .form-login .input-login input[name="pass"]').val() != 'pass'){
    swal({
      text: "กรอกรหัสผ่านผิด",
      icon: "error",
    });
    return false;
  }

  // กรอกถูกต้อง
  else{
    return true;
  } 
});

// ฟอร์มสมัครสมาชิก
$('.register-page .form-register form').submit(function(e){
  $(this).find('.input-login input').each(function(){
    var pass = $('.register-page .form-register form .input-login #pass').val();
    var confpass = $('.register-page .form-register form .input-login #confpass').val();

    if(!$(this).val()){
      e.preventDefault();
      swal({
        text: "กรุณากรอกข้อมูลให้ครบถ้วน",
        icon: "warning",
      });
      return false;
    }
    // เช็คยืนยันรหัสผ่าน
    if(pass !== confpass){
      e.preventDefault();
      swal({
        text: "กรุณากรอกรหัสผ่านให้ตรงกัน",
        icon: "error",
      });
      return false;
    }
    // เช็คพาส6ตัว
    if(pass.length < 6){
      e.preventDefault();
      swal({
        text: "กรุณากรอกรหัสผ่าน 6 ตัวขึ้นไป",
        icon: "warning",
      });
      return false;
    }

    // กรอกข้อมูลถูกต้อง
    else{
      return true;
    }
  });
});

// ฟอร์มลืมรหัส
$('.forget .form-forget form').submit(function(e){
  $(this).find('.input-login input').each(function(){
    if(!$(this).val()){
      e.preventDefault();
      swal({
        text: "กรุณากรอกข้อมูลให้ครบถ้วน",
        icon: "warning",
      });
      return false;
    }

    // เช็คชื่อผู้ใช้
    var forget_user = $('.forget .form-forget form .input-login #forget-user').val();
    if(forget_user !== 'admin'){
      e.preventDefault();
      swal({
        text: "ไม่มีชื่อผู้ใช้นี้",
        icon: "error",
      });
      return false;
    }

    // เช็คเลขบัตร
    var forget_idnumber = $('.forget .form-forget form .input-login #idnubmer').val();
    if(forget_idnumber !== '12345678910'){
      e.preventDefault();
      swal({
        text: "ไม่มีเลขบัตรประชาชนนี้",
        icon: "error",
      });
      return false;
    }

    // กรอกครบถ้วน
    else{
      e.preventDefault();
      showDialog_forget();
      return false;
    }
  });
});

//----------------จบส่วนเช็คแจ้งเตือนฟอร์มสมาชิก------------------//

//---------------- ส่วนชี้แจงข้อกำหนดการใช้สมาชิก ----------------//

// ยึดหน้าไว้จนกว่าจะกดปิดกล่อง
if($('.dialog-privacy').is(':visible')){
  $('body').css({'position':'fixed','width':'100%'});
}

// ปิดกล่องคำชี้แจง
$('.dialog-privacy .box-privacy .confirm-ok button').click(function(){
  if($('.check-confirm #check-confirm').is(':checked')){
    $('.dialog-privacy').fadeOut();
    $('body').css({'position':'unset','width':'unset'});
  }
  else{
    swal({
      text: "กรุณากดยินยอมเงื่อนไขก่อนกดรับทราบข้อตกลง",
      icon: "warning",
    });
  }
  
});

//---------------- จบส่วนชี้แจงข้อกำหนดการใช้สมาชิก ----------------//

// เปิดปุ่มเมนู header
$('.main-head .bugger i').click(function(){
  $('.head-menu-mobile').slideDown('slow');
  $('body').css('position','fixed');
});
$('.head-menu-mobile .close-menu-mobile').click(function(){
  $('body').css('position','unset');
  $('.head-menu-mobile').slideUp('slow');
});

// ปุ่มเมนูข้าง
$('.grid-body .bar-mobile').click(function(){
  $('.grid-body .left-side').fadeToggle();
});