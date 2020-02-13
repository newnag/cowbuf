<div class="account">
  <div class="head-text">
    <div class="text">
      <h1><?=$cateName_Acc?></h1>
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
        <input  class="acc-edit-username" type="text" placeholder="กรอกชื่อผู้ใช้" value="<?=$myAccount->username?>" disabled>
      </div>
      <div class="input-login">
        <label>ชื่อสกุล*</label>
        <input  class="acc-edit-name" type="text" placeholder="กรอกชื่อ-สกุล" value="<?=$myAccount->name?>" readonly>
      </div>
      <div class="input-login">
        <label>เลขบัตรประชาชน*</label>
        <input  class="acc-edit-identification" type="text" max="11" placeholder="กรอกเลขบัตรประชาชน" value="<?=$Helper->showIdentification($myAccount->identification)?>" readonly >
      </div>
      <div class="input-login">
        <label>จังหวัด*</label>
        <select name="" id="" class="acc-edit-province">
          <option value="">เลือกจังหวัด</option>
          <?php
          foreach ($Helper->getProvince() as $key => $res) {
            echo '<option value="' . $res['id'] . '" '.(($myAccount->province_id == $res['id'])?"selected":"").'>' . $res['province_name'] . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="input-login">
        <label>เบอร์โทร*</label>
        <input  type="tel" class="acc-edit-phone" placeholder="กรอกเบอร์โทรศัพท์" value="<?=$myAccount->phone?>" readonly >
      </div>
      <div class="login-button" >
        <button type="submit" id="edit-data">บันทึก</button>
      </div>
    </form>
  </div>


  <!-- เปลี่ยน password -->
  <div class="head-text">
    <div class="text">
      <h1><?=$cateName_ChangePass?></h1>
    </div>
  </div>
  <div class="form-login">
    <h2>กรอกข้อมูลหากลืมรหัสผ่าน</h2>
    <form action="" id="formChangePassword">
      <div class="input-login">
        <label>รหัสผ่านเดิม*</label>
        <input  type="password" id="changepass_passOld" placeholder="กรอกรหัสผ่านเดิม">
      </div>
      <div class="input-login">
        <label>รหัสผ่านใหม่*</label>
        <input id="pass" type="password" placeholder="กรอกรหัสผ่านใหม่">
        <div class="view" onclick="view_password()"><i class="fas fa-eye"></i></div></input>
      </div>
      <div class="input-login">
        <label>ยืนยันรหัสผ่านใหม่*</label>
        <input  type="password" id="changepass_passNewConf" placeholder="กรอกรหัสผ่านใหม่">
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
      <div class="head-text">
        <h3>กรอกเลขบัตรประชาชนเพื่อทำการแก้ไขข้อมูล</h3>
      </div>
      <div class="new-pass">
        <div class="input-login">
          <label>เลขบัตรประชาชน*</label>
          <input type="number" id="check_identification" placeholder="กรอกเลขบัตรประชาชน" required style="width:100%">
        </div>
        <div class="button">
          <button id="id-number">ตกลง</button>
        </div>
        <div class="alert">
          <p>***กรณีกรอกเลขบัตรประชาชนไม่ถูกต้องให้ติดต่อทางเว็บไซต์ ตามนี้</p>
          <p>โทร <?=$myContact->phone?></p>
          <p>Line ID: <?=$myContact->line?></p>
        </div>
      </div>
      <div class="button-close">
        <i class="fas fa-times"></i>
      </div>
    </div>
  </div>
</div>
<div class="bg-dialog"></div>