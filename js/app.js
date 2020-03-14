// เปิดปิดหมวดหมู่
$('.head-menu').click(function () {
  $(this).next().slideToggle();
})

// เปิดปิดเมนูซ้าย
$('.menu-left li').click(function () {
  $(this).find('.sub-menu').slideToggle();
  if ($(this).hasClass('open')) {
    $(this).removeClass('open');
    $(this).find('i').css('transform', 'rotate(0deg)')
  }
  else {
    $(this).addClass('open');
    $(this).find('i').css('transform', 'rotate(90deg)')
  }
});

// สไลด์รูป
$('.slide-head').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
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
  dots: true,

  arrows: false,
});

// บวกลบจำนวนบิด
function add_num() {
  var bid = $('.place-coin .button .number .input-number input').val();
  num = parseInt(bid) + 1;
  $('.place-coin .button .number .input-number input').val(num);
  return num;
}
function minus_num() {
  var bid = $('.place-coin .button .number .input-number input').val();
  num = parseInt(bid) - 1;
  $('.place-coin .button .number .input-number input').val(num);
  return num;
}
$('.place-coin .button .number .input-number #plus_bid').click(function () {
  if ($('.place-coin .button .number .input-number input').val() < 9) {
    add_num();
  }
});
$('.place-coin .button .number .input-number #minus_bid').click(function () {
  if ($('.place-coin .button .number .input-number input').val() > 1) {
    minus_num();
  }
});

// ดู password
function view_password() {
  var see_pass = document.getElementById("pass");
  if (see_pass.type === "password") {
    see_pass.type = "text";
  } else {
    see_pass.type = "password";
  }
};

// เปิดกล่องสร้างรหัสผ่านใหม่
function showDialog_forget() {
  $('.dialog-forget').fadeIn();
  $('.bg-dialog').show();
}

//ปิดกล่องก็อปปี้รหัสผ่านใหม่
$('.new-pass .button #copy-newpass').click(function () {
  var copy = $('.new-pass .input-form #newpass');
  copy.select();
  document.execCommand("copy");
  $('.dialog-forget').fadeOut();
  $('.bg-dialog').hide();

  $('#newpass').val('')
  $('#forget-user').val('')
  $('#idnubmer').val('')

  setTimeout(()=> window.location = "/เข้าสู่ระบบ",1000)
});


//สลับเมนูหัวบนเมื่อเข้าสู่ระบบ
$('.form-login .login-button').click(function () {
  // $('.member-head').hide();
  // $('.member-login').show();
});

// เปิดปิดเมนูสมาชิก
$('.user-login').click(function () {
  $('.member-menu').slideToggle();
});

// เปิดกล่องยืนยันการแก้ไขข้อมูลสมาชิก
$('.edit-button button').click(function () {
  $('.dialog-forget').fadeIn();
  $('.bg-dialog').show();
});


// ปิดกล่องเพื่อแก้ไขข้อมูลสมาชิก
$('.new-pass .button #id-number').click(function () {

  if ($('#check_identification').val().trim().length != 13) {
    swal({
      text: "กรุณากรอกเลขบัตรประชนให้ครบ 13 หลัก",
      icon: "error",
    });
    return false;
  }

  grecaptcha.ready(function () {
    grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'checkidentification' }).then(function (token) {
      let data = {
        gRecaptchaToken: token,
        action: "checkidentification",
        identification: $('#check_identification').val().trim()
      }
      $.ajax({
        url: "/ajax/ajax.register.php",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
          if (response.message == "Success") {
            swal({
              text: "เลขบัตรประชาชนถูกต้อง",
              icon: "success",
            }).then(() => {
              $('.account .form-login .input-login input').prop('readonly', false);
              $('.dialog-forget').fadeOut();
              $('.bg-dialog').hide();
              $('.acc-edit-identification').val($('#check_identification').val())
              $('#edit-data').data('active', 'true')
            });
          } else {
            swal({
              text: "เลขบัตรประชาชนไม่ถูกต้อง",
              icon: "error",
            });
          }
        }
      })
    });
  });
});

// ปุ่มลบสินค้าในหน้าร้านค้า
$('body').on('click', '.storePage-all .grid-store .box .delete-button .btn-del-product', function () {
  let self = $(this)
  swal({
    text: "ต้องการลบสินค้าใช่หรือไม่",
    icon: "warning",
    buttons: {
      cancel: true,
      confirm: true,
    },
  }).then((e) => {
    if (e) {
      grecaptcha.ready(function () {
        grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'remove_my_product' }).then(function (token) {
          let data = {
            gRecaptchaToken: token,
            action: "remove_my_product",
            product_id: self.data('product') 
          }
          $.ajax({
            url: "/ajax/ajax.bid.php",
            type: "POST",
            dataType: "json",
            data: data,
            success: function (response) {
              if (response.message == "success") {
                self.closest('.box').fadeOut(function () {
                  console.log('aaaaaa')
                  self.remove();
                });
              }
            }
          })
        });
      });
    }
  })
});

$(function () {
  $.ajax({
    url: "template/page-mycart.php",
    success: function (data) {
      $('.page-mycart').html(data);
    },
  });
})
// เปลี่ยนหน้าสินค้าโปรด
$('.mycart .menu-mycart .leaf-menu #my-fav').click(function () {
  $.ajax({
    url: "template/page-myfav.php",
    success: function (data) {
      $('.page-mycart').html(data);
    },
  });
});
// เปลี่ยนหน้ารายการซื้อสินค้าของฉัน
$('.mycart .menu-mycart .leaf-menu #my-cart').click(function () {
  $.ajax({
    url: "template/page-mycart.php",
    success: function (data) {
      $('.page-mycart').html(data);
    },
  });
});
// เปลี่ยนหน้ารายการซื้อสินค้าของฉัน
$('.mycart .menu-mycart .leaf-menu #my-bid').click(function () {
  $.ajax({
    url: "template/page-mybid.php",
    success: function (data) {
      $('.page-mycart').html(data);
    },
  });
});


// เปลี่ยนหน้าเติมเงิน
$('.paypaid .menu-mycart .leaf-menu #paypaid').click(function () {
  $.ajax({
    url: "template/paid-page.php",
    success: function (data) {
      $('.page-paypaid').html(data);
    },
  });
});
// เปลี่ยนหน้าถอนเงิน
$('.paypaid .menu-mycart .leaf-menu #withdraw').click(function () {
  $.ajax({
    url: "template/paid-withdraw.php",
    success: function (data) {
      $('.page-paypaid').html(data);
    },
  });
});
// เปลี่ยนหน้าประวัติเติมเงิน
$('.paypaid .menu-mycart .leaf-menu #history-paid').click(function () {
  $.ajax({
    url: "template/paid-history.php",
    success: function (data) {
      $('.page-paypaid').html(data);
    },
  });
});

//----------------ส่วนเช็คแจ้งเตือนฟอร์มสมาชิก------------------//

// form-log submit
$('.login .form-login form').submit(function (e) {
  e.preventDefault();
  // สมาชิกกรอกข้อมูลว่าง
  if ($('.login .form-login .input-login input[name="user"]').val() == '') {
    e.preventDefault();
    swal({
      text: "กรุณากรอกชื่อผู้ใช้งาน",
      icon: "warning",
    });
    return false;
  }
  if ($('.login .form-login .input-login input[name="pass"]').val() == '') {
    swal({
      text: "กรุณากรอกรหัสผ่าน",
      icon: "warning",
    });
    return false;
  }

  grecaptcha.ready(function () {
    grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'login' }).then(function (token) {
      let data = {
        gRecaptchaToken: token,
        action: "login",
        username: $('.login .form-login .input-login input[name="user"]').val().trim(),
        password: $('.login .form-login .input-login input[name="pass"]').val().trim()
      }
      $.ajax({
        url: "/ajax/ajax.register.php",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
          if (response.message == "Success") {
            $('#newpass').val(response.newpass)
            swal({
              text: "ยินดีต้อนรับเข้าสู่เว็บไซต์",
              icon: "success",
            }).then(() => {
              // window.location = `/${response.url}`
              window.location = `/`
            });
          } else if (response.message == "Block") {
            swal({
              text: "user have been banned !!",
              icon: "error",
            });
          } else {
            swal({
              text: "กรอกชื่อผู้ใช้ หรือ กรอกรหัสผ่านผิด",
              icon: "error",
            });
          }
        }
      })
    });
  });
});

// ฟอร์มสมัครสมาชิก
$('.register-page .form-register form').submit(function (e) {
  e.preventDefault();
  $(this).find('.input-login input').each(function () {
    let pass = $('.register-page .form-register form .input-login #pass').val().trim();
    let confpass = $('.register-page .form-register form .input-login #confpass').val().trim();
    let identification_ = $('#register_identification').val().trim();
    if (!$(this).val()) {
      e.preventDefault();
      swal({
        text: "กรุณากรอกข้อมูลให้ครบถ้วน",
        icon: "warning",
      });
      return false;
    }
    // เช็คพาส6ตัว
    if (pass.length < 8) {
      e.preventDefault();
      swal({
        text: "กรุณากรอกรหัสผ่าน 8 ตัวขึ้นไป",
        icon: "warning",
      });
      return false;
    }
    // เช็คยืนยันรหัสผ่าน
    if (pass !== confpass) {
      e.preventDefault();
      swal({
        text: "กรุณากรอกรหัสผ่านให้ตรงกัน",
        icon: "error",
      });
      return false;
    }
    // บัตรประชาชนต้อง 13 หลัก
    if (identification_.length !== 13) {
      e.preventDefault();
      swal({
        text: "กรุณากรอกเลขบัตรประชนให้ครบ 13 หลัก",
        icon: "error",
      });
      return false;
    }

    // กรอกข้อมูลถูกต้อง
    else {
      grecaptcha.ready(function () {
        grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'register' }).then(function (token) {
          let data = {
            gRecaptchaToken: token,
            action: "register",
            username: $('#register_username').val().trim(),
            password: $('.register-page .form-register form .input-login #pass').val().trim(),
            name: $('#register_name').val().trim(),
            identification: $('#register_identification').val().trim(),
            province: $('#register_province').val().trim(),
            phone: $('#register_phone').val().trim(),
            adviser: $('#register_adviser').val().trim(),
          }

          $.ajax({
            url: "/ajax/ajax.register.php",
            type: "POST",
            dataType: "json",
            data: data,
            success: function (response) {
              console.log(response)
              if (response.message == "Success") {
                swal({
                  text: "สมัครสมาชิก สำเร็จ",
                  icon: "success",
                }).then(() => {
                  location.reload()
                });
              } else if (response.message == "userNotDupicate") {
                swal({
                  text: "ไม่สามารถใช้ชื่อผู้ใช้นี้ได้",
                  icon: "error",
                });
              } else {
                swal({
                  text: "ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง",
                  icon: "error",
                });
              }
            }
          })
        });
      });
      return false;
    }
  });
});



// ฟอร์มลืมรหัส
$('.forget .form-forget form').submit(function (e) {
  e.preventDefault();
  $(this).find('.input-login input').each(function () {
    if (!$(this).val()) {
      swal({
        text: "กรุณากรอกข้อมูลให้ครบถ้วน",
        icon: "warning",
      });
      return false;
    }

  });

  grecaptcha.ready(function () {
    grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'forgetpassword' }).then(function (token) {
      let data = {
        gRecaptchaToken: token,
        action: "fotgot_password",
        username: $('#forget-user').val().trim(),
        identification: $('#idnubmer').val().trim()
      }
      $.ajax({
        url: "/ajax/ajax.register.php",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
          if (response.message == "Success") {
            $('#newpass').val(response.newpass)
            showDialog_forget();
          } else {
            swal({
              text: "ไม่มี ชื่อผู้ใช้ หรือ เลขบัตรประชาชนนี้",
              icon: "error",
            });
          }
        }
      })
    });
  });
});


//ฟอร์มแก้ไขข้อมูลส่วนตัว
$('.account .form-login form').submit(function (e) {
  e.preventDefault();
  let data = {
    username: $('.acc-edit-username').val().trim(),
    name: $('.acc-edit-name').val().trim(),
    identification: $('.acc-edit-identification').val().trim(),
    province: $('.acc-edit-province').val().trim(),
    phone: $('.acc-edit-phone').val().trim()
  }

  if ($('#edit-data').data('active') === "true") {
    // console.log('True')
    // if(data.username.length < 1){ swal({text: "กรุณากรอกชื่อผู้ใช้",icon: "warning",}); return false;}
    if (data.name.length < 1) { swal({ text: "กรุณากรอกชื่อนามสกุล", icon: "warning", }); return false; }
    if (data.identification.length < 1) { swal({ text: "กรุณากรอกเลขบัตรประชาชน", icon: "warning", }); return false; }
    if (data.identification.length < 13) { swal({ text: "กรุณากรอกเลขบัตรประชาชนให้ครบ 13 หลัก", icon: "warning", }); return false; }
    if (data.province.length < 1) { swal({ text: "กรุณาเลือกจังหวัด", icon: "warning", }); return false; }
    if (data.phone.length < 10) { swal({ text: "กรุณากรอกเบอร์โทรศัพท์", icon: "warning", }); return false; }

    grecaptcha.ready(function () {
      grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'updateAccount' }).then(function (token) {
        data.gRecaptchaToken = token
        data.action = "updateAccount"

        $.ajax({
          url: "/ajax/ajax.register.php",
          type: "POST",
          dataType: "json",
          data: data,
          success: function (response) {
            if (response.message == "Success") {
              swal({
                text: "แก้ไขข้อมูลสำเร็จ",
                icon: "success",
              }).then(() => {
                location.reload()
              });
            } else {
              swal({
                text: "แก้ไขข้อมูลไม่สำเร็จ",
                icon: "error",
              });
            }
          }
        })
      });
    });
  }

})

//ฟอร์มแก้ไขรหัสผ่าน

$('#formChangePassword').submit(function (e) {
  e.preventDefault();
  let data = {
    pass_old: $('#changepass_passOld').val().trim(),
    pass_new: $('#pass').val().trim(),
    pass_conf: $('#changepass_passNewConf').val().trim(),
  }

  if (data.pass_old.length < 1) { swal({ text: "กรุณากรอกรหัสผ่านเดิม", icon: "warning", }); return false; }
  if (data.pass_new.length < 1) { swal({ text: "กรุณากรอกรหัสผ่านใหม่", icon: "warning", }); return false; }
  if (data.pass_new.length < 8) { swal({ text: "กรุณากรอกรหัสผ่านอย่างน้อย 8 ตัวอักษร", icon: "warning", }); return false; }
  if (data.pass_new !== data.pass_conf) { swal({ text: "กรุณากรอกรหัสผ่านไม่ตรงกัน", icon: "warning", }); return false; }


  grecaptcha.ready(function () {
    grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'updatePassword' }).then(function (token) {
      data.gRecaptchaToken = token
      data.action = "updatePassword"

      $.ajax({
        url: "/ajax/ajax.register.php",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
          if (response.message == "Success") {
            swal({
              text: "แก้ไขรหัสผ่านสำเร็จ",
              icon: "success",
            }).then(() => {
              location.reload()
            });
          } else if (response.message == "passwordOld_not_equals") {
            swal({
              text: "รหัสผ่านเดิมไม่ถูกต้อง",
              icon: "error",
            });
          } else {
            swal({
              text: "แก้ไขรหัสผ่านไม่สำเร็จ",
              icon: "error",
            });
          }
        }
      })
    });
  });


})



//----------------จบส่วนเช็คแจ้งเตือนฟอร์มสมาชิก------------------//

//---------------- ส่วนชี้แจงข้อกำหนดการใช้สมาชิก ----------------//

// ยึดหน้าไว้จนกว่าจะกดปิดกล่อง
if ($('.dialog-privacy').is(':visible')) {
  $('body').css({ 'position': 'fixed', 'width': '100%' });
}

// ปิดกล่องคำชี้แจง
$('.dialog-privacy .box-privacy .confirm-ok button').click(function () {
  if ($('.check-confirm #check-confirm').is(':checked')) {
    $('.dialog-privacy').fadeOut();
    $('body').css({ 'position': 'unset', 'width': 'unset' });
  }
  else {
    swal({
      text: "กรุณากดยินยอมเงื่อนไขก่อนกดรับทราบข้อตกลง",
      icon: "warning",
    });
  }

});

//---------------- จบส่วนชี้แจงข้อกำหนดการใช้สมาชิก ----------------//


// เปิดปุ่มเมนู header
$('.main-head .bugger i').click(function () {
  $('.head-menu-mobile').slideDown('slow');
  $('body').css('position', 'fixed');
});
$('.head-menu-mobile .close-menu-mobile').click(function () {
  $('body').css('position', 'unset');
  $('.head-menu-mobile').slideUp('slow');
});

// ปุ่มเมนูข้าง
$('.grid-body .bar-mobile').click(function () {
  $('.grid-body .left-side').fadeToggle();
});


//---------------------สไลด์เนื้อหามือถือ------------------------//

// สไลด์หน้าแรก
$('.slide-article').owlCarousel({
  loop: false,
  margin: 0,
  nav: true,
  dots: false,
  items: 2,
  slideBy: 2,
})

// สไลด์หน้ารายละเอียดสินค้า
$('.slide-mobile-detail').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
})

//---------------------จบสไลด์เนื้อหามือถือ------------------------//

// active เมนูบน
$(document).ready(function () {
  let path = window.location.pathname.split("/")[1];
  let slug = $('nav ul li[data-menu-slug=home] a');

  // console.log(path)

  if (path == '') {
    slug = $('nav ul li[data-menu-slug=home] a');
    $('nav ul li a').removeClass('active');
    slug.addClass('active');
  }
  else {
    try {
      slug = $('nav ul li[data-menu-slug=' + path + '] a');
      $('nav ul li a').removeClass('active');
      slug.addClass('active');
    } catch (err) {
      $('nav ul li a').removeClass('active');
    }
  }
});


//-------------------------- ปุ่มค้นหา Header ------------------ //
$('.btnToggleSearch').click(()=>$('.box-search').toggleClass('active'))

// ------------------------ ส่ง Email รับข่าวสาร ----------------- //
$('#footerEmailSubmit').on('submit', function (e) {
  e.preventDefault();
  let email = $('#inputEmailFooter').val().trim();
  if (email.length < 1) {
    //ถ้า ไม่มีข้อมูล ใน inputEmail
    swal({
      text: "กรุณากรอกอีเมล",
      icon: "warning",
    });
  } else {
    grecaptcha.ready(function () {
      grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'receivenews' }).then(function (token) {
        $.ajax({
          url: "/ajax/ajax.contact.php",
          type: "POST",
          dataType: "json",
          data: { action: "receiveNews", email, gRecaptchaToken: token },
          success: function (response) {
            if (response.message == "success") {
              swal({
                text: "บันทึกข้อมูลสำเร็จ",
                icon: "success",
              }).then(() => {
                $('#inputEmailFooter').val('')
              })
            }
          }
        })
      });
    });
  }
})


// ------------------------ Shared Facebook -------------------------
function shareSocial(e) {
  e.preventDefault();
  window.open(e.target.closest('a').href, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=600,width=560,height=600");
}

// ------------------------ end Shared Facebook -------------------------

// ปุ่มปิดกล่องแก้ไขข้อมูลสมาชิก
$('.dialog-forget .newpass-form .box .button-close i').click(function () {
  $(this).closest('.dialog-forget').fadeOut();
  $('.bg-dialog').hide();
});



// --------------------------- product favorites -------------------------
$('#add_product_favorites').click(function (e) {
  e.preventDefault();
  grecaptcha.ready(function () {
    grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'addProductFavorites' }).then(function (token) {
      let data = {
        gRecaptchaToken: token,
        action: "addProductFavorites",
        p_id: $('#add_product_favorites').data('product')
      }
      $.ajax({
        url: "/ajax/ajax.bid.php",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
          if (response.message == "Success") {
            swal({
              text: "เพิ่มรายการโปรดเรียบร้อย",
              icon: "success",
              timer: 1500
            }).then(() => {
              location.reload()
            });
          }
          else if (response.message == "member_null") {
            swal({
              text: "ไม่สามารถเพิ่มรายการโปรดได้ ต้องเป็นสมาชิกเว็บเท่านั้น",
              icon: "warning",
            });
          }
          else {
            swal({
              text: "เพิ่มรายการโปรดไม่สำเร็จ",
              icon: "error",
            });
          }
        }
      })
    });
  });
})


// --------------------------- store follower -------------------------
$('#store_follower , #store_follower_').click(function (e) {
  e.preventDefault();
  let store_id = $(this).data('store')
  grecaptcha.ready(function () {
    grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'addStoreFollower' }).then(function (token) {
      let data = {
        gRecaptchaToken: token,
        action: "addStoreFollower",
        store_id
      }
      $.ajax({
        url: "/ajax/ajax.bid.php",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
          if (response.message == "Success") {
            swal({
              text: "ติดตามร้านค้าเรียบร้อย",
              icon: "success",
              timer: 1500
            }).then(() => {
              location.reload()
            });
          }
          else if (response.message == "member_null") {
            swal({
              text: "ไม่สามารถติดตามร้านค้าได้ ต้องเป็นสมาชิกเว็บเท่านั้น",
              icon: "warning",
            });
          }
          else {
            swal({
              text: "ติดตามร้านไม่สำเร็จ",
              icon: "error",
            });
          }
        }
      })
    });
  });
});
//------------------------------- unfollow ---------------------------
// ลบร้านค้าโปรด
$('#store_unfollower_').on('click', function () {
  let storeFollowerID = $(this).data('follower');
  swal({
    text: "ต้องการลบร้านที่คุณติดตามใช่หรือไม่",
    icon: "warning",
    buttons: {
      cancel: true,
      confirm: true,
    },
  }).then((v)=>{
    if(v == true){
      grecaptcha.ready(function () {
        grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'deleteStoreFollower' }).then(function (token) {
          let data = {
            gRecaptchaToken: token,
            action: "deleteStoreFollower",
            id: storeFollowerID,
          }
          $.ajax({
            url: "/ajax/ajax.bid.php",
            type: "POST",
            dataType: "json",
            data: data,
            success: function (response) {
              if (response.message == "Success") {
                swal({
                  text: "ลบร้านที่คุณติดตามเรียบร้อย",
                  icon: "success",
                  timer: 1500
                }).then(()=>{
                  // $('.shop-box .button-shop .delete button').closest('.shop-box').fadeOut(function(){
                  //   $('.shop-box .button-shop .delete button').closest('.shop-box').remove();
                  // });
                  window.location.reload();
                });
              } else {
                swal({
                  text: "ไม่สามารถลบได้",
                  icon: "error",
                });
              }
            }
          })
        });
      });
    }
  })
  // $(this).closest('.shop-box').fadeOut(function(){
  //   $(this).closest('.shop-box').remove();
  // });
});

// --------------------------- กดประมูล ---------------------------------
$('#btn-bid-product').click(function (e) {
  e.preventDefault();
  // $('#coin-your-bid').val()
  grecaptcha.ready(function () {
    grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'yourBidProduct' }).then(function (token) {
      let data = {
        gRecaptchaToken: token,
        action: "yourBidProduct",
        coin_your_bid: $('#coin-your-bid').val(),
        product_id: $('#btn-bid-product').data('product'),
      }
      $.ajax({
        url: "/ajax/ajax.bid.php",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
          if (response.message == "Success") {
            swal({
              text: "ประมูลเรียบร้อย",
              icon: "success",
              timer: 1500
            }).then(() => { location.reload() });
          }
          else if (response.message == "status_invalid") {
            swal({
              text: "ไม่สามารถประมูลรายการนี้ได้ ต้องจ่ายเงินก่อน ทดสอบ",
              icon: "warning",
            });
          }
          else if (response.message == "member_null") {
            swal({
              text: "ไม่สามารถประมูลรายการนี้ได้ ต้องเป็นสมาชิกเว็บเท่านั้น",
              icon: "warning",
            });
          }
          else if (response.message == "buy") {
            swal({
              text: "ไม่สามารถประมูลรายการนี้ได้ รายการนี้ถูกกดซื้อไปแล้ว",
              icon: "warning",
            });
          }
          else if (response.message == "credit_invalid") {
            swal({
              text: "credit ไม่พอสำหรับการประมูลนี้",
              icon: "warning",
            });
          }
          else if (response.message == "time_out") {
            swal({
              text: "หมดเวลาการประมูลแล้ว",
              icon: "warning",
            });
          }
          else if (response.message == "stauts_not") {
            swal({
              text: "ไม่สามารถประมูลรายการนี้ได้",
              icon: "warning",
            });
          }
          else {
            swal({
              text: "เกิดข้อผิดพลาดบางอย่าง ไม่สามารถประมูลรายการนี้ได้",
              icon: "error",
            });
          }
        }
      })
    });
  });
})

// --------------------------- กดซื้อทันที ---------------------------------
$('#btn-buy-product').click(function (e) {
  e.preventDefault();
  // $('#coin-your-bid').val()
  grecaptcha.ready(function () {
    grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'youButProductNow' }).then(function (token) {
      let data = {
        gRecaptchaToken: token,
        action: "youButProductNow",
        coin_your_bid: $('#coin-your-bid').val(),
        product_id: $('#btn-buy-product').data('product'),
      }
      $.ajax({
        url: "/ajax/ajax.bid.php",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
          if (response.message == "Success") {
            swal({
              text: "ซื้อเรียบร้อย",
              icon: "success",
              timer: 1500
            }).then(() => { location.reload() });
          }
          else if (response.message == "status_invalid") {
            swal({
              text: "ไม่สามารถประมูลรายการนี้ได้ ต้องจ่ายเงินก่อน ทดสอบ",
              icon: "warning",
            });
          }
          else if (response.message == "member_null") {
            swal({
              text: "ไม่สามารถประมูลรายการนี้ได้ ต้องเป็นสมาชิกเว็บเท่านั้น",
              icon: "warning",
            });
          }
          else if (response.message == "buy") {
            swal({
              text: "ไม่สามารถประมูลรายการนี้ได้ รายการนี้ถูกกดซื้อไปแล้ว",
              icon: "warning",
            });
          }
          else if (response.message == "credit_invalid") {
            swal({
              text: "credit ไม่พอสำหรับการซื้อรายการนี้",
              icon: "warning",
            });
          }
          else if (response.message == "time_out") {
            swal({
              text: "หมดเวลาการซื้อแล้ว",
              icon: "warning",
            });
          }
          else if (response.message == "stauts_not") {
            swal({
              text: "ไม่สามารถซื้อรายการนี้ได้",
              icon: "warning",
            });
          }
          else {
            swal({
              text: "เกิดข้อผิดพลาดบางอย่าง ไม่สามารถซื้อรายการนี้ได้",
              icon: "error",
            });
          }
        }
      })
    });
  });
});


$('.searchProductDesktop').on("keyup",function(e){
  e.preventDefault(); if(e.keyCode == 13 || e.which == 13) searchProduct('Desktop')
});
$(".btnSearchProductDesktop").on('click',function(e){
  e.preventDefault(); searchProduct('Desktop');
})

$('.searchProductMobile').on("keyup",function(e){
  e.preventDefault(); if(e.keyCode == 13 || e.which == 13) searchProduct('Mobile')
});
$(".btnSearchProductMobile").on('click',function(e){
  e.preventDefault(); searchProduct('Mobile');
})

function searchProduct(type){
  let searchValue = ''
  if(type == "Desktop"){
    searchValue = $('.searchProductDesktop').val().trim()
  }else{
    searchValue = $('.searchProductMobile').val().trim()
  }
  
  if(searchValue.length == 0){
    swal({
      text: "กรุณากรอกคำที่จะค้นหาด้วย",
      icon: "warning",
    });
  }
  grecaptcha.ready(function () {
    grecaptcha.execute('6Lf24NUUAAAAACoehs9XAp0bph79xrV0VarMqg7L', { action: 'getSearchURL' }).then(function (token) {
      let data = {
        gRecaptchaToken: token,
        action: "getSearchURL",
        search: searchValue
      }
      $.ajax({
        url: "/ajax/ajax.bid.php",
        type: "POST",
        dataType: "json",
        data: data,
        success: function (response) {
          if (response.message == "success") {
            window.location = response.url
          }
        }
      })
    });
  });
}