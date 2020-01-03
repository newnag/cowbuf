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
                <input type="text" placeholder="กรอกชื่อผู้ใช้">
            </div>

            <div class="input-login">
                <label>รหัสผ่าน*</label>
                <input id="pass" type="password" placeholder="กรอกรหัสผ่าน">
                <div class="view" onclick="view_password()"><i class="fas fa-eye"></i></div></input>
            </div>

            <div class="input-login">
                <label>ยืนยันรหัสผ่าน*</label>
                <input id="confpass" type="text" placeholder="กรอกยืนยันรหัสผ่าน">
            </div>

            <div class="input-login">
                <label>ชื่อสกุล*</label>
                <input type="text" placeholder="กรอกชื่อ-สกุล">
            </div>

            <div class="input-login">
                <label>เลขบัตรประชาชน*</label>
                <input type="number" placeholder="กรอกเลขบัตรประชาชน">
            </div>

            <div class="input-login">
                <label>จังหวัด*</label>
                <select name="" id="">
                    <option value="">เลือกจังหวัด</option>
                    <option value="">กรุงเทพ</option>
                    <option value="">ขอนแก่น</option>
                </select>
            </div>

            <div class="input-login">
                <label>เบอร์โทร*</label>
                <input type="tel" placeholder="กรอกเบอร์โทรศัพท์">
            </div>

            <div class="input-login">
                <label>ผู้แนะนำ</label>
                <input type="text" placeholder="กรอกชื่อผู้แนะนำ">
            </div>

            <div class="login-page">
                <a href="login">เข้าสู่ระบบ</a>
            </div>

            <div class="login-button">
                <button>ยืนยันการสมัคร</button>
            </div>

        </form>

    </div>
</div>