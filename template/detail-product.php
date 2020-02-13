<!-- ส่วนเนื้อหาบน -->
<div class="top-zone">
  <!-- รูปสไลด์ -->
  <div class="slide-img">
    <div class="show-img slider-for">
      <figure><img src="<?=SITE_URL.$productDetail->img?>" alt=""></figure>
      <!-- <figure><img src="/img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
      <figure><img src="/img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
      <figure><img src="/img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
      <figure><img src="/img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure> -->
    </div>
    <div class="select-img slider-nav">
      <!-- <figure><img src="/img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure> -->
      <?php
      echo '<figure><img src="'.SITE_URL.$productDetail->img.'" alt=""></figure>';
      foreach($productImgOther as $key => $res){
        echo '<figure><img src="'.SITE_URL.$res['img'].'" alt=""></figure>';
      }
      ?>
    </div>
  </div>
  <!-- ส่วนรายละเอียด -->
  <div class="detail">
    <div class="breadcrum">
      <a href="<?=SITE_URL.$cateName."/".$productDetail->pd_cate_name?>"><?=$productDetail->pd_cate_name?></a>/
      <a href="<?=SITE_URL. $cateName."/".$productDetail->pd_cate_name."/".$productDetail->pd_sub_cate_name?>"><?=$productDetail->pd_sub_cate_name?></a>
    </div>
    <!-- ชื่อสินค้า -->
    <div class="title">
      <h1><?=$productDetail->p_name?></h1>
    </div>
    <!-- รายละเอียดวัน ราคา -->
    <div class="detail-bet">
      <div class="day">
        <span>วันประมูลคงเหลือ</span>
        <span>
          <?php
            if($productDetail->mem_id == $_SESSION['client']['member_id']){
              if($productDetail->p_status == 1){ echo "ยังไม่ลงขาย";}
              if($productDetail->p_status == 2){ echo $Helper->calcDateAuction($productDetail->auction_time);}
              if($productDetail->p_status == 3){ echo "ปิดการประมูล";}
              if($productDetail->p_status == 4){ echo "หมดเวลาการประมูล";}
              if($productDetail->p_status == 5){ echo "ซื้อทันที";}
              if($productDetail->p_status == 6){ echo "ซื้อขายเสร็จสิ้น";}
            }else{
              if($productDetail->p_status == 1){ echo "ยังไม่ลงขาย";}
              if($productDetail->p_status == 2){ echo $Helper->calcDateAuction($productDetail->auction_time);}
              if($productDetail->p_status == 3){ echo "ปิดการประมูล";}
              if($productDetail->p_status == 4){ echo "หมดเวลาการประมูล";}
              if($productDetail->p_status == 5){ echo "ที่ซื้อแล้ว";}
              if($productDetail->p_status == 6){ echo "ซื้อขายเสร็จสิ้น";}
            }
          ?>
        </span>
      </div>
      <div class="price">
        <span>ราคาปัจจุบัน</span>
        <span><span id="product_detail_price_current"><?=number_format($productDetail->price_current)?></span> ฿</span>
      </div>
      <div class="buynow">
        <span>ซื้อทันที</span>
        <span><span id="product_detail_price_special"><?=number_format($productDetail->price_special)?></span> ฿</span>
      </div>
    </div>
    <!-- สถานที่ -->
    <div class="distric">
      <span>จังหวัด:</span>
      <span><?=$productDetail->province_name?></span>
    </div>
    <!-- ปุ่มแชร์ -->
    <div class="share">
      <div class="button-share">
        <span>แชร์สินค้า*ยังไม่ทำ</span>
        <a href=""><img src="/img/button/Group 29.png" alt=""></a>
      </div>
      <!-- เพิ่มรายการโปรด -->
      <div class="favorites">
        <span>เพิ่มรายการโปรด</span>
        <a href="#" id="add_product_favorites" data-product="<?=$productDetail->p_id?>"><img src="/img/button/Group 130.png" alt=""></a>
      </div>
    </div>
    <!-- ความต้องการเครดิตในการประมูล -->
    <div class="requirement">
      <span>สินค้าชิ้นนี้ต้องการเครดิต</span>
      <span><?=$productDetail->credit?></span>
      <i class="fas fa-coins"></i>
    </div>
    <!-- อัตราการประมูล -->
    <div class="rate">
      <span>อัตราการประมูล</span>
      <span>1 Bid = <?=number_format($productDetail->bid)?> ฿ , 1 Bid = <?=$Helper->calcCreditByPriceCurrent($productDetail->price_current)?> Credit</span>
    </div>
    <div class="place-coin">
      <span>PLACE COIN YOUR BID</span>
      <div class="button">
        <div class="number">
          <div class="input-number">
            <button id="minus_bid">-</button>
            <input type="number" id="coin-your-bid" value="1" min='1' pattern="^[\d]*$" readonly>
            <button id="plus_bid">+</button>
          </div>
        </div>
        <div class="bid">
          <button id="btn-bid-product" data-product="<?=$productDetail->p_id?>">ประมูล</button>
        </div>
        <div class="buy">
          <button id="btn-buy-product" data-product="<?=$productDetail->p_id?>">ซื้อทันที</button>
        </div>
        <input type="hidden" value="<?=$productDetail->p_id?>" id="product_detail_id">
      </div>
    </div>
  </div>
</div>
<!-- เนื้อหาส่วนผู้บิต -->
<div class="detail-user-bid">
  <!-- จำนวนคนบิต -->
  <div class="total-user">
    <span>จำนวนผู้เข้าประมูล</span>
    <span><span id="total_user_record_bid"><?=number_format($recordBidCount->count)?></span> Users</span>
  </div>
  <!-- คนบิดล่าสุด -->
  <div class="table-bid">
    <div class="last-bid">
      <!-- ตาราง -->
      <div class="table" id="product_detail_record_bid_box">
        <!-- หัวตาราง -->
        <div class="head-table">
          <span>ผู้ประมูลล่าสุด</span>
          <span>คะแนน</span>
          <span>ราคา</span>
          <span>เบอร์โทร</span>
          <span>วันที่ประมูล</span>
        </div>
        
        <!-- แถว1 -->
        <?php
        /*
        <div class="row">
          <span>User 01010</span>
          <span><i class="fas fa-star"></i>10K</span>
          <span>12,000฿</span>
          <span>084-123-XXXX</span>
          <span>21-12-2563</span>
        </div>
        */
        foreach($recordBid as $key => $res){
          echo '
            <div class="row">
              <span>'.$res['name'].'</span>
              <span><i class="fas fa-star"></i>'.$Helper->calcNumber($res['star_red']).'</span>
              <span>'.number_format($res['price']).' ฿</span>
              <span>'.(($productDetail->mem_id == $_SESSION['client']['member_id'])?$res['phone']:$Helper->showPhone($res['phone'])).'</span>
              <span>'.date('d-m-',strtotime($res['date_create'])).''.(date('Y',strtotime($res['date_create']))+543).'</span>
            </div>
          ';
        }
        ?>

      </div>
    </div>
    <!-- ข้อมูลร้านค้า -->
    <div class="shop-detail">
      <div class="table">
        <!-- หัวตาราง -->
        <div class="head-table">
          <span>ชื่อร้าน</span>
          <span>คะแนน</span>
          <span>สินค้าทั้งหมด</span>
          <span>ผู้ติดตาม</span>
          <span>เบอร์โทร</span>
        </div>
        <!-- แถว1 -->
        <div class="row">
          <span><?=$productDetail->member_name?></span>
          <span><i class="fas fa-star star_yellow"></i><span id="Store_star_yellow"><?=$Helper->calcNumber($productDetail->star_yellow)?></span></span>
          <span id="Store_product_count"><?=$Helper->calcNumber($productCount->count)?></span>
          <span id="Store_follower_count"><?=$Helper->calcNumber($followerCount->count)?></span>
          <span><?=$productDetail->phone?></span>
        </div>
      </div>
      <div class="warning-follow">
        <!-- ข้อความเตือน -->
        <div class="warning">
          <p>***ควรเลือกผู้ขาย ที่มีตั้งแต่ 100 คะแนนขึ้นไป</p>
          <P>การซื้อขาย 1,000 บาท = 1 <i class="fas fa-star"></i>/<i class="fas fa-star red"></i></P>
        </div>
        <!-- ปุ่มติดตามร้านค้า -->
        <div class="follow">
          <button><a href="<?=SITE_URL.$cateStore.'/'.$productDetail->member_name?>" style="color:white">ดูร้านค้า</a></button>
          <button id="store_follower" data-store="<?=$productDetail->mem_id?>">ติดตาม</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- รายละเอียดสินค้า -->
<div class="product-detail">
  <div class="title-detail">
    <h2>รายละเอียดสินค้า</h2>
  </div>
  <div class="detail">
    <div class="text">
      <?=$productDetail->detail?>
    </div>
  </div>
</div>



<!-- รายการอื่นๆ -->
<div class="other-product">
  <div class="title-other-product">
    <h2>รายการอื่นๆ</h2>
    <a href=""><span>เพิ่มเติม</span></a>
  </div>
  <div class="grid-box">
    <?php 
    foreach($productOther as $key => $res){
      echo '
      <a href="'.SITE_URL.$res['cate_url'].'/'.$res['pd_cate_name'].'/'.$res['pd_sub_cate_name'].'/'.$res['p_name'].'">
        <div class="box">
          <figure><img src="'.SITE_URL.$res['img'].'" alt=""></figure>
          <div class="title">
            <h2>'.$res['p_name'].'</h2>
          </div>
          <div class="price">
            <span>ราคาปัจจุบัน</span>
            <span>'.number_format($res['price_current']).' ฿</span>
          </div>
          <div class="date">
            <i class="fas fa-calendar-alt"></i>
            <span>วันประมูลคงเหลือ '.$Helper->calcDateAuction($res['auction_time']).' วัน</span>
          </div>
          <!-- ส่วนแสดงเครดิตการกดประมูล -->
          <div class="bet">
            <div class="star">
              <i class="fas fa-star"></i>
              <span>'.$Helper->calcNumber($res['star_yellow']).'</span>
            </div>
            <div class="credit">
              <i class="fas fa-coins"></i>
              <span>'.number_format($res['credit']).'</span>
            </div>
          </div>
        </div>
      </a>
      ';
    }

    /*
    <a href="template/detail-product.html">
      <div class="box">
        <figure><img src="/img/ID00004_26.png" alt=""></figure>
        <div class="title">
          <h2>วันตัวสวยๆตัวที่ 1</h2>
        </div>
        <div class="price">
          <span>ราคาปัจจุบัน</span>
          <span>3200 ฿</span>
        </div>
        <div class="date">
          <i class="fas fa-calendar-alt"></i>
          <span>วันประมูลคงเหลือ 2 วัน</span>
        </div>
        <!-- ส่วนแสดงเครดิตการกดประมูล -->
        <div class="bet">
          <div class="star">
            <i class="fas fa-star"></i>
            <span>10K</span>
          </div>
          <div class="credit">
            <i class="fas fa-coins"></i>
            <span>500</span>
          </div>
        </div>
      </div>
    </a>
    */
    ?>
  </div>
</div>