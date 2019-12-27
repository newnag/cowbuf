<div class="storePage">
    <div class="head-text">
        <div class="text">
            <h1>ร้านค้าของฉัน</h1>
        </div>
    </div>

    <!-- เมนูเลือกหน้าร้าน -->
    <div class="menu-store">
        <div class="leaf-menu">
            <div class="button-menu"><button id="store-page" class="active">ร้านค้า</button></div>
            <div class="button-menu"><button id="store-sale">ลงสินค้า</button></div>
            <div class="button-menu"><button id="store-follow">ร้านค้าที่คุณติดตาม</button></div>
        </div>

        <div class="right-select">
            <span>เลือกสถานะ</span>
            <select name="" id="">
                <option value="all">ทั้งหมด</option>
                <option value="notbuy">ยังไม่ขาย</option>
                <option value="buynow">ซื้อทันที</option>
                <option value="success">ประมูลเสร็จสิ้น</option>
                <option value="timeout">หมดเวลาขาย</option>
                <option value="now">กำลังขาย</option>
            </select>
        </div>

        <div class="head-store-follow">
            <p>***ควรเลือกผู้ขาย ที่มีตั้งแต่ 100 คะแนนขึ้นไป</p>
            <p>การซื้อขาย 1,000 บาท = 1<i class="fas fa-star"></i>/<i class="fas fa-star red"></i></p>
        </div>
    </div>

    <div class="page-store">

        <?php include('template/store-page.php') ?>

    </div>

</div>