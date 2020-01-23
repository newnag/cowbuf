
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>วัวงามควายงาม</title>

    <?php include('template/css.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</head>
<body>
    <!-- ส่วนหัวเว็บ -->
    <header>
        <div class="main-head">
            <div class="left-head">
                <div class="logo-head">
                    <!-- โลโก้หัวเว็บ -->
                    <a href=""><img src="img/logo_ora.png" alt=""></a>
                </div>
            </div>

            <div class="bugger">
                <i class="fas fa-bars"></i>
            </div>

            <div class="right-head">
                <!-- ปุ่มกดเข้าสู่ระบบ/สมัคร -->
                <div class="member-head">
                    <a href="login">
                        <div class="login-regis">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>เข้าสู่ระบบ/สมัครสมาชิก</span>
                        </div>
                    </a>
                </div>

                <?php //เมื่อเข้าสู่ระบบแล้วจะเปลี่ยนไปใช้ element นี้ ?>
                <div class="member-login" style="display:block">
                    <div class="user-login">
                        <i class="fas fa-user"></i>
                        <span>User0001</span>
                    </div>
                </div>

                <!-- ไอค่อนที่หัวเว็บ -->
                <div class="icon-head">
                    <i class="fas fa-search"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-line"></i>
                    <i class="fas fa-mobile-alt"></i>
                </div>
            </div>

            <div class="head-menu-mobile">
                <ul>
                    <li><a href="home" class="active">หน้าหลัก</a></li>
                    <li><a href="registration-job">สมัครงานด่วน</a></li>
                    <li><a href="article">บทความ</a></li>
                    <li><a href="about">เกี่ยวกับเรา</a></li>
                    <li><a href="contact">ติดต่อเรา</a></li>
                </ul>

                <div class="line-keed"></div>

                <div class="member-head">
                    <a href="login">
                        <div class="login-regis">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>เข้าสู่ระบบ/สมัครสมาชิก</span>
                        </div>
                    </a>
                </div>

                <div class="line-keed"></div>

                <!-- ส่วนนี้จะแสดงต่อเมื่อเข้าสู่ระบบ -->
                <div class="status-credit">
                    <div class="red-star">
                        <span>1000K</span>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="star">
                        <span>1000K</span>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="coin">
                        <span>9999K</span>
                        <i class="fas fa-coins"></i>
                    </div>
                </div>

                <div class="line-keed"></div>

                <!-- ไอค่อนที่หัวเว็บ -->
                <div class="icon-head">
                    <i class="fas fa-search"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-line"></i>
                    <i class="fas fa-mobile-alt"></i>
                </div>

                <div class="close-menu-mobile">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- เมนูสมาชิก -->
    <div class="member-menu">
        <ul>
            <li><a href="account">บัญชีของฉัน</a></li>
            <li><a href="store">ร้านค้าของฉัน</a></li>
            <li><a href="mycart">การซื้อของฉัน</a></li>
            <li><a href="paypaid">การเติมเงิน</a></li>
            <li><a href="<?php $_SERVER['SERVER_NAME'] ?>" id="logout">ออกจากระบบ</a></li>
        </ul>
    </div>

    <!-- เมนูบน -->
    <nav>
        <ul>
            <li><a href="home" class="active">หน้าหลัก</a></li>
            <li><a href="registration-job">สมัครงานด่วน</a></li>
            <li><a href="article">บทความ</a></li>
            <li><a href="about">เกี่ยวกับเรา</a></li>
            <li><a href="contact">ติดต่อเรา</a></li>
        </ul>

        <!-- ส่วนนี้จะแสดงต่อเมื่อเข้าสู่ระบบ -->
        <div class="status-credit">
            <div class="red-star">
                <span>1000K</span>
                <i class="fas fa-star"></i>
            </div>

            <div class="star">
                <span>1000K</span>
                <i class="fas fa-star"></i>
            </div>

            <div class="coin">
                <span>9999K</span>
                <i class="fas fa-coins"></i>
            </div>
        </div>
    </nav>