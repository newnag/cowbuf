<div class="account">
    <div class="head-text">
        <div class="text">
            <h1>บัญชีของฉัน</h1>
        </div>
    </div>

    <div class="edit-button">
        <button>แก้ไข</button>
    </div>

    <div class="form-login">
        <h2>อัพเดทข้อมูลของฉัน</h2>

        <form action="">
            <div class="input-login">
                <label>ชื่อผู้ใช้*</label>
                <input id="edit-input" type="text" placeholder="กรอกชื่อผู้ใช้" readonly required>
            </div>

            <div class="input-login">
                <label>ชื่อสกุล*</label>
                <input id="edit-input" type="text" placeholder="กรอกชื่อ-สกุล" readonly required>
            </div>

            <div class="input-login">
                <label>เลขบัตรประชาชน*</label>
                <input id="edit-input" type="number" max="11" placeholder="กรอกเลขบัตรประชาชน" readonly required>
            </div>

            <div class="input-login">
                <label>จังหวัด*</label>
                <select name="" id="" required>
                    <option value="">เลือกจังหวัด</option>
                    <option value="">กรุงเทพ</option>
                    <option value="">ขอนแก่น</option>
                </select>
            </div>

            <div class="input-login">
                <label>เบอร์โทร*</label>
                <input id="edit-input" type="tel" placeholder="กรอกเบอร์โทรศัพท์" readonly required>
            </div>

            <div class="login-button">
                <button type="submit" id="edit-data">บันทึก</button>
            </div>
        </form>

        
    </div>

    <!-- เปลี่ยน password -->
    <div class="head-text">
        <div class="text">
            <h1>เปลี่ยนรหัสผ่าน</h1>
        </div>
    </div>

    <div class="form-login">
        <h2>กรอกข้อมูลหากลืมรหัสผ่าน</h2>

        <form action="">
            <div class="input-login">
                <label>รหัสผ่านเดิม*</label>
                <input id="edit-input" type="password" readonly placeholder="กรอกรหัสผ่านเดิม">
            </div>

            <div class="input-login">
                <label>รหัสผ่านใหม่*</label>
                <input id="pass" type="password" readonly placeholder="กรอกรหัสผ่านใหม่">
                <div class="view" onclick="view_password()"><i class="fas fa-eye"></i></div></input>
            </div>

            <div class="input-login">
                <label>ยืนยันรหัสผ่านใหม่*</label>
                <input id="edit-input" type="password" readonly placeholder="กรอกรหัสผ่านใหม่">
            </div>

            <div class="login-button">
                <button type="submit" id="edit-pass">บันทึก</button>
            </div>
        </form>

        
    </div>
</div>

<div class="dialog-forget">
    <div class="newpass-form">
        <div class="box">
            <div class="head-text"><h3>กรอกเลขบัตรประชาชนเพื่อทำการแก้ไขข้อมูล</h3></div>

            <div class="new-pass">
                <div class="input-login">
                    <label>เลขบัตรประชาชน*</label>
                    <input type="number" max="11" placeholder="กรอกเลขบัตรประชาชน" readonly required>
                </div>

                <div class="button">
                    <button id="id-number">ตกลง</button>
                </div>

                <div class="alert">
                    <p>***กรณีกรอกเลขบัตรประชาชนไม่ถูกต้องให้ติดต่อทางเว็บไซต์ ตามนี้</p>
                    <p>โทร 088-830-2315</p>
                    <p>Line ID: 142351254</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-dialog"></div>