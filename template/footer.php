<?php

$productCateFooter = $Helper->getProductCate_Footer(); // list menu สินค้า 
?>
<footer style="margin-top:3%;">
  <div class="footer-section">
    <div class="help-foot">
      <div class="head-foot"><span><?=$ArticleName?></span></div>
      <div class="menu">
        <?php /*
        <li><a href="">การสมัครสมาชิก</a></li>
        <li><a href="">วิธีเติมเงินเครดิต</a></li>
        <li><a href="">วิธีการประมูล</a></li>
        <li><a href="">วิธีการจัดส่ง</a></li>
        <li><a href="">คำถามที่พบบ่อย</a></li>
        <li><a href="">วิธีเรตดาว</a></li>
        */ 
        foreach($postContentSideBar as $key => $res){
          echo '<li><a href="'.SITE_URL.$cateArticleURL['url'].'/'.$res['slug'].'">'.$res['title'].'</a></li>';
        }
        ?>
      </div>
    </div>

    <div class="cate-foot">
      <div class="head-foot"><span><?= $cateName ?></span></div>
      <div class="grid-cat-foot">
        <?php /*
        <li><a href="">วัว</a></li>
        <li><a href="">ควาย</a></li>
        <li><a href="">ข้าว</a></li>
        <li><a href="">อาหารทะเล</a></li>
        <li><a href="">เครื่องดื่ม</a></li>
        <li><a href="">บรรจุภัณฑ์</a></li>
        <li><a href="">อุปกรณ์</a></li>
        <li><a href="">ระบบจัดการฟาร์ม</a></li>
        <li><a href="">สินค้า OTOP</a></li>
        <li><a href="">เทคโนโลยี</a></li>
        <li><a href="">พืชอาหารสัตว์</a></li>
        <li><a href="">เครื่องปรุงอาหาร</a></li>
        <li><a href="">หินธรรมชาติ</a></li>
        <li><a href="">ที่ดิน</a></li>
        <li><a href="">กล้าไม้</a></li>
        <li><a href="">หมวดสินค้าเพื่อกิจกรรม</a></li>
        <li><a href="">การกุศล</a></li>
        */
        foreach ($productCateFooter as $key => $res) {
          echo '<li><a href="'.SITE_URL.$res['url']."/".$res['name'].'">' . $res['name'] . '</a></li>';
        }
        ?>
      </div>
    </div>

    <div class="social-foot">
      <div class="social">
        <div class="head-foot"><span><?=$socialCateName?></span></div>
        <div class="icon">
          <a href="<?=$myContact->facebook?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="http://line.me/ti/p/~<?=$myContact->line?>" target="_blank"><i class="fab fa-line"></i></a>
          <a href="tel:<?=$myContact->phone?>" target="_blank"><i class="fas fa-mobile-alt"></i></a>
        </div>
      </div>
      <div class="receive-news">
        <div class="head-foot"><span><?=$receiveNewName?></span></div>
        <form id="footerEmailSubmit">
          <div class="input">
            <input type="email" id="inputEmailFooter">
            <button type="submit"><i class="fas fa-paper-plane"></i></button>
          </div>
        </form>
      </div>
    </div>
    <div class="info">
      <figure>
        <img src="<?=SITE_URL.$headerLogo->ad_image?>" alt="">
      </figure>
      <div class="detail">
        <p><?=$myContact->address?></p>
        <p><?=$myContact->email?> Tel:<?=$myContact->phone?></p>
        <p>Line ID: <?=$myContact->line?></p>
      </div>
    </div>
  </div>
</footer>

<div class="copyright"><a href="">วัวงามควายงาม.com</a></div>



<?php include('template/js.php'); ?>
</body>

</html>