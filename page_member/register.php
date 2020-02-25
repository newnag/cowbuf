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
        <input type="text" id="register_username" placeholder="กรอกชื่อผู้ใช้">
      </div>
      <div class="input-login">
        <label>รหัสผ่าน*</label>
        <input id="pass" type="password" placeholder="กรอกรหัสผ่าน">
        <div class="view" onclick="view_password()"><i class="fas fa-eye"></i></div></input>
      </div>
      <div class="input-login">
        <label>ยืนยันรหัสผ่าน*</label>
        <input id="confpass" type="password" placeholder="กรอกยืนยันรหัสผ่าน">
      </div>
      <div class="input-login">
        <label>ชื่อสกุล*</label>
        <input type="text" id="register_name" placeholder="กรอกชื่อ-สกุล">
      </div>
      <div class="input-login">
        <label>เลขบัตรประชาชน*</label>
        <input type="number" id="register_identification" placeholder="กรอกเลขบัตรประชาชน" max="13">
      </div>
      <div class="input-login">
        <label>จังหวัด*</label>
        <select name="" id="register_province">
          <option value="">เลือกจังหวัด</option>
          <?php
          foreach ($Helper->getProvince() as $key => $res) {
            echo '<option value="' . $res['id'] . '">' . $res['province_name'] . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="input-login">
        <label>เบอร์โทร*</label>
        <input type="tel" id="register_phone" placeholder="กรอกเบอร์โทรศัพท์">
      </div>
      <div class="input-login">
        <label>ผู้แนะนำ</label>
        <input type="text" id="register_adviser" placeholder="กรอกชื่อผู้แนะนำ">
      </div>
      <div class="login-page">
        <a href="<?=SITE_URL.$urllogin['url']?>">เข้าสู่ระบบ</a>
      </div>
      <!-- <div class="login-page">
        <a href="#" id="btn-register_test">กรอกข้อมูลทดสอบ</a>
      </div> -->
      <div class="login-button">
        <button>ยืนยันการสมัคร</button>
      </div>
    </form>
  </div>
</div>