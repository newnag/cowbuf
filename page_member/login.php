<div class="login">
    <div class="head-text">
        <div class="text">
            <h1>เข้าสู่ระบบ</h1>
        </div>
    </div>

    <div class="form-login">
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
        </form>

        <div class="forget-register">
            <div class="forget">
                <a href="forget">ลืมรหัสผ่าน</a>
            </div>

            <div class="register">
                <a href="register">สมัครสมาชิก</a>
            </div>
        </div>

        <div class="login-button">
            <button>เข้าสู่ระบบ</button>
        </div>
    </div>
</div>