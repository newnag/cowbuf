<div class="form-sale">
    <h2>ชื่อสินค้า</h2>

    <form action="">
        <div class="input-form">
            <input type="text" placeholder="กรอกชื่อสินค้า" required>
        </div>
    

        <div class="upload-img">
            <div class="button-upload">
                <button><i class="fas fa-upload"></i><span>ลงรูปภาพ</span></button>    
            </div>
            
            <div class="pre-img">
                <?php for($i=0;$i<=4;$i++): ?>
                <figure>
                    <img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt="">
                    <i class="fas fa-trash-alt"></i>
                </figure>
                <?php endfor; ?>
            </div>
        </div>

        <h2 style="margin-top:3%">ลิ้ง VDO</h2>
        <div class="input-form">
            <input type="url" placeholder="VDO">
        </div>

        <div class="cat">
            <div class="left">
                <h2>หมวดหมู่หลัก</h2>
                <div class="input-form">
                    <select name="" id="">
                        <option value="">เลือกหมวดหมู่หลัก</option>
                        <option value="">เลือกหมวดหมู่หลัก</option>
                        <option value="">เลือกหมวดหมู่หลัก</option>
                        <option value="">เลือกหมวดหมู่หลัก</option>
                    </select>
                </div>
            </div>

            <div class="right">
                <h2>หมวดหมู่รอง</h2>
                <div class="input-form">
                    <select name="" id="">
                        <option value="">เลือกหมวดหมู่หลัก</option>
                        <option value="">เลือกหมวดหมู่หลัก</option>
                        <option value="">เลือกหมวดหมู่หลัก</option>
                        <option value="">เลือกหมวดหมู่หลัก</option>
                    </select>
                </div>
            </div>
        </div>

        <h2>ราคาสินค้าและอัตราประมูล</h2>
        <div class="input-form">
            <label>ราคาเริ่มต้นของสินค้า</label>
            <input type="number" placeholder="กรอกราคาเริ่มต้นของสินค้า" required>
        </div>

        <div class="input-form">
            <label>ยอดของสินค้าที่ต้องการ</label>
            <input type="number" placeholder="กรอกยอดสินค้า" required>
        </div>

        <div class="input-form">
            <label>ระยะเวลาที่ประมูล</label>
            <input type="date" placeholder="ใส่วันที่" required>
        </div>

        <div class="input-form">
            <label>สินค้าชิ้นนี้ต้องการเครดิต</label>
            <input type="number" placeholder="ใส่จำนวนเครดิตที่ต้องการ" required>
        </div>

        <div class="input-form">
            <label>อัตราการประมูลต่อ 1 Bid</label>
            <input type="number" max="11" placeholder="กรอกจำนวนเงินในการประมูลแต่ละครั้ง" required>
        </div>

        <h2 style="margin-top:3%">รายละเอียดสินค้า</h2>
        <div class="input-form">
            <textarea name="" id="" cols="30" rows="1" placeholder="กรอกรายละเอียด"></textarea>
        </div>

        <div class="button-post">
            <button>ลบรายละเอียด</button>
            <button>บันทึก/ยังไม่ขาย</button>
            <button>ขายทันที</button>
        </div>

    </form>
</div>