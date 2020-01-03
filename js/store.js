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

// ลบร้านค้าโปรด
$('.shop-box .button-shop .delete button').click(function(){
    alert('111');
});

// เปลี่ยนปุ่ม active ร้านค้า
$('.menu-store .leaf-menu .button-menu button#store-page').click(function(){
    $('.menu-store .leaf-menu .button-menu button').removeClass('active');
    $(this).addClass('active');
});
$('.menu-store .leaf-menu .button-menu button#store-sale').click(function(){
    $('.menu-store .leaf-menu .button-menu button').removeClass('active');
    $(this).addClass('active');
});
$('.menu-store .leaf-menu .button-menu button#store-follow').click(function(){
    $('.menu-store .leaf-menu .button-menu button').removeClass('active');
    $(this).addClass('active');
});

// เปลี่ยนปุ่ม active เติมเงิน
$('.menu-mycart .leaf-menu .button-menu #paypaid').click(function(){
  $('.menu-mycart .leaf-menu .button-menu button').removeClass('active');
  $(this).addClass('active');
});
$('.menu-mycart .leaf-menu .button-menu #withdraw').click(function(){
  $('.menu-mycart .leaf-menu .button-menu button').removeClass('active');
  $(this).addClass('active');
});
$('.menu-mycart .leaf-menu .button-menu #history-paid').click(function(){
  $('.menu-mycart .leaf-menu .button-menu button').removeClass('active');
  $(this).addClass('active');
});

// เปลี่ยนหน้าร้านค้า
$('.storePage .menu-store .leaf-menu #store-page').click(function(){
  $('.menu-store .right-select').show();
  $('.menu-store .head-store-follow').hide();

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
  $('.menu-store .head-store-follow').hide();

  $.ajax({
    url:"template/sale.php",
    success:function(data){
      $('.page-store').html(data);
    },
  });
});
// เปลี่ยนหน้าร้านติดตาม
$('.storePage .menu-store .leaf-menu #store-follow').click(function(){
  $('.menu-store .head-store-follow').show();
  $('.menu-store .right-select').hide();

  $.ajax({
    url:"template/store-follow.php",
    success:function(data){
      $('.page-store').html(data);
    },
  });
});

