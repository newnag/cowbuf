
<div class="dialog-privacy">
  <div class="box-privacy">
    <div class="box-text">
      <p>
        ยินดีต้อนรับสู่ www. วัวงามควายงาม.com ก่อตั้งเพื่อเป็นสื่อกลาง แลกเปลี่ยน แหล่งความรู้ และพัฒนาอาชีพเกษตรกรรมให้เกิดความมั่นคง ไม่จำกัดเพศ อายุ วุฒิการศึกษา อาชีพ หรือประสบการณ์ มีคำแนะนำสำหรับสมาชิกดังนี้
      </p>
      <p>1) ชื่อที่ใช้ควรเป็นชื่อที่เป็นมงคล บ่งบอกถึงความเจริญก้าวหน้า ไม่สั้นหรือยาวเกินไป</p>
      <p>2) ข้อมูลที่ใช้เป็นข้อเท็จจริง</p>
      <p>3) มีเจตนาที่จะใช้ www.วัวงามควายงาม.com พัฒนาตนเอง ขยายกิจการ เผยแพร่ผลงานและแบ่งปันแก่สมาชิก ชุมชนและสังคมให้เกิดความเจริญก้าวหน้า</p>
      <p>4) ไม่แสดงเจตนา โพสต์ ข้อความ รูปภาพ ที่ผิดกฎหมาย สร้างความแตกแยก และขัดกับศีลธรรมอันดี</p>
      <p>5) สมาชิกต้องเข้าใจและตระหนักถึงบทบาท หน้าที่ ความรับผิดชอบ ต่อสาธารณะ </p>
      <p>6) ข้อความรูปภาพ การกระทำใดๆ ที่ www.วัวงามควายงาม.com ตรวจสอบแล้วมีลักษณะผิดกฏหมาย หรือมีลักษณะ ก่อกวน ยุยง ส่งเสริม ให้ร้าย ต่อบุคคลที่สาม หรือขัดต่อข้อตกลงและเงือนไขการให้บริการ สามารถลบข้อมูลนั้นได้ทั้งสิ้นโดยไม่จำเป็นต้องบอกกล่าวหรือแจ้งให้ทราบ</p>
    </div>
    <div class="check-confirm">
      <input type="checkbox" id="check-confirm" name="check-confirm">
      <label for="check-confirm">ข้าพเจ้ายินยอมเงื่อนไขและข้อกำหนด</label>
    </div>
    <div class="confirm-ok">
      <button>รับทราบข้อกำหนด</button>
    </div>
  </div>
</div>

<div class="login" id="formLogin">
  <div class="head-text">
    <div class="text">
      <h1><?=$cate_login['cate_name']?></h1>
    </div>
  </div>
  <div class="form-login">
    <h2>กรอกข้อมูลเพื่อเข้าสู่ระบบ</h2>
    <form action="">
      <div class="input-login">
        <label>ชื่อผู้ใช้*</label>
        <input name="user" type="text" id="login_username" placeholder="กรอกชื่อผู้ใช้" maxlength="32">
      </div>
      <div class="input-login">
        <label>รหัสผ่าน*</label>
        <input name="pass" id="pass" type="password" placeholder="กรอกรหัสผ่าน" maxlength="32">
        <div class="view" onclick="view_password()"><i class="fas fa-eye"></i></div></input>
      </div>
      <div class="forget-register">
        <div class="forget">
          <a href="<?=SITE_URL.$cate_forgetPassword['url']?>"><?=$cate_forgetPassword['cate_name']?></a>
        </div>
        <div class="register">
          <a href="<?=SITE_URL.$cate_register['url']?>"><?=$cate_register['cate_name']?></a>
        </div>
      </div>
      <div class="login-button">
        <button>เข้าสู่ระบบ</button>
      </div>
    </form>
  </div>
</div>