<div class="register-page">
    <div class="head-text">
        <div class="text">
            <h1>สมัครสมาชิก</h1>
        </div>
    </div>

    <div class="form-register">
        <h2>กรอกข้อมูลเพื่อเข้าสู่ระบบ</h2>

        <form action="">
            <div class="input-login">
                <label>ชื่อผู้ใช้*</label>
                <input type="text" placeholder="กรอกชื่อผู้ใช้" required>
            </div>

            <div class="input-login">
                <label>รหัสผ่าน*</label>
                <input id="pass" type="password" placeholder="กรอกรหัสผ่าน" required>
                <div class="view" onclick="view_password()"><i class="fas fa-eye"></i></div></input>
            </div>

            <div class="input-login">
                <label>ยืนยันรหัสผ่าน*</label>
                <input type="pass" placeholder="กรอกยืนยันรหัสผ่าน" required>
            </div>

            <div class="input-login">
                <label>ชื่อสกุล*</label>
                <input type="text" placeholder="กรอกชื่อ-สกุล" required>
            </div>

            <div class="input-login">
                <label>เลขบัตรประชาชน*</label>
                <input type="number" max="11" placeholder="กรอกเลขบัตรประชาชน" required>
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
                <input type="tel" placeholder="กรอกเบอร์โทรศัพท์" required>
            </div>

            <div class="input-login">
                <label>ผู้แนะนำ</label>
                <input type="text" placeholder="กรอกชื่อผู้แนะนำ">
            </div>
        </form>

        <div class="login-page">
           <a href="login">เข้าสู่ระบบ</a>
        </div>

        <div class="login-button">
            <button>ยืนยันการสมัคร</button>
        </div>
    </div>
</div>