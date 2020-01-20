    <!-- สไลด์รูป -->
    <div class="slide-head owl-carousel owl-theme">
        <div class="item">
            <img src="img/hidcote_manor_1254X700_Hidcote.png" alt="">
            <div class="detail-post">
                <p>ก่อนหน้าซูโม่ปักขคณนาวัจนะแมมโบ้ ไหร่สเตชั่นจิ๊กซอว์ ซูม เซ็นเซอร์วอฟเฟิลดยุกแต๋ว ดีมานด์อัตลักษณ์วอล์กสี่แยก ติ๋มทับซ้อน เนอะแรลลี่ ซิ่งแฟนซี 
                    เอเซียโค้ช สุนทรีย์คลับ เปปเปอร์มินต์ ทอร์นาโดพาร์ทเนอร์ภคันทลาพาธโซนี่โฮป 
                    หลวงตาเทียมทานซังเต ศิรินทร์ น็อคโดมิโนว้อดก้านู้ด แหม็บเวณิกา
                </p>
                <a href=""><button>View</button></a>
            </div>
        </div>
        <div class="item">
            <img src="img/hidcote_manor_1254X700_Hidcote.png" alt="">
            <div class="detail-post">
                <p>ก่อนหน้าซูโม่ปักขคณนาวัจนะแมมโบ้ ไหร่สเตชั่นจิ๊กซอว์ ซูม เซ็นเซอร์วอฟเฟิลดยุกแต๋ว ดีมานด์อัตลักษณ์วอล์กสี่แยก ติ๋มทับซ้อน เนอะแรลลี่ ซิ่งแฟนซี 
                    เอเซียโค้ช สุนทรีย์คลับ เปปเปอร์มินต์ ทอร์นาโดพาร์ทเนอร์ภคันทลาพาธโซนี่โฮป 
                    หลวงตาเทียมทานซังเต ศิรินทร์ น็อคโดมิโนว้อดก้านู้ด แหม็บเวณิกา
                </p>
                <a href=""><button>View</button></a>
            </div>
        </div>
        <div class="item">
            <img src="img/hidcote_manor_1254X700_Hidcote.png" alt="">
            <div class="detail-post">
                <p>ก่อนหน้าซูโม่ปักขคณนาวัจนะแมมโบ้ ไหร่สเตชั่นจิ๊กซอว์ ซูม เซ็นเซอร์วอฟเฟิลดยุกแต๋ว ดีมานด์อัตลักษณ์วอล์กสี่แยก ติ๋มทับซ้อน เนอะแรลลี่ ซิ่งแฟนซี 
                    เอเซียโค้ช สุนทรีย์คลับ เปปเปอร์มินต์ ทอร์นาโดพาร์ทเนอร์ภคันทลาพาธโซนี่โฮป 
                    หลวงตาเทียมทานซังเต ศิรินทร์ น็อคโดมิโนว้อดก้านู้ด แหม็บเวณิกา
                </p>
                <a href=""><button>View</button></a>
            </div>
        </div>
    </div>

    <!-- วัวงาม -->
    <article>
        <div class="head-text">
            <div class="text">
                <h1>วัวงาม</h1>
                <a href=""><span>เพิ่มเติม</span></a>
            </div>
        </div>

        <!-- กล่องสินค้า -->
        <div class="grid-box">

            <?php for($i=0; $i<=9; $i++): ?>
                <a href="detail-product">
                    <div class="box">
                        <figure><img src="img/ID00004_26.png" alt=""></figure>
                        <div class="title"><h2>วัวตัวสวยๆตัวที่ 1</h2></div>
                        <div class="price">
                            <span>ราคาปัจจุบัน</span>
                            <span>3200 ฿</span>
                        </div>
                        <div class="date">
                            <i class="fas fa-calendar-alt"></i>
                            <span>วันประมูลคงเหลือ 2 วัน</span>
                        </div>
                        <!-- ส่วนแสดงเครดิตการกดประมูล -->
                        <div class="bet">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <span>10K</span>
                            </div>
                            <div class="credit">
                                <i class="fas fa-coins"></i>
                                <span>500</span>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endfor; ?>
            
        </div>

        <!-- ส่วนมือถือ -->
        <div class="mobile-gridbox">
            <div class="slide-article owl-carousel owl-theme">
                <?php for($i=0; $i<=9; $i++): ?>
                    <a href="detail-product">
                        <div class="box">
                            <figure><img src="img/ID00004_26.png" alt=""></figure>
                            <div class="title"><h2>วันตัวสวยๆตัวที่ 1</h2></div>
                            <div class="price">
                                <span>ราคาปัจจุบัน</span>
                                <span>3200 ฿</span>
                            </div>
                            <div class="date">
                                <i class="fas fa-calendar-alt"></i>
                                <span>วันประมูลคงเหลือ 2 วัน</span>
                            </div>
                            <!-- ส่วนแสดงเครดิตการกดประมูล -->
                            <div class="bet">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <span>10K</span>
                                </div>
                                <div class="credit">
                                    <i class="fas fa-coins"></i>
                                    <span>500</span>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    </article>

    <!-- ควายงาม -->
    <article>
        <div class="head-text">
            <div class="text">
                <h1>ควายงาม</h1>
                <a href=""><span>เพิ่มเติม</span></a>
            </div>
        </div>

        <!-- กล่องสินค้า -->
        <div class="grid-box">
            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                    <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- ส่วนมือถือ -->
        <div class="mobile-gridbox">
            <div class="slide-article owl-carousel owl-theme">
                <?php for($i=0;$i<=9;$i++): ?>
                    <a href="">
                        <div class="box">
                            <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_in.png" alt=""></figure>
                            <div class="title"><h2>ควายตัวสวยๆตัวที่ 1</h2></div>
                            <div class="price">
                                <span>ราคาปัจจุบัน</span>
                                <span>3200 ฿</span>
                            </div>
                            <div class="date">
                                <i class="fas fa-calendar-alt"></i>
                                <span>วันประมูลคงเหลือ 2 วัน</span>
                            </div>
                            <!-- ส่วนแสดงเครดิตการกดประมูล -->
                            <div class="bet">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <span>10K</span>
                                </div>
                                <div class="credit">
                                    <i class="fas fa-coins"></i>
                                    <span>500</span>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    </article>

    <!-- รายการอื่นๆ -->
    <article>
        <div class="head-text">
            <div class="text">
                <h1>รายการอื่นๆ</h1>
                <a href=""><span>เพิ่มเติม</span></a>
            </div>
        </div>

        <!-- กล่องสินค้า -->
        <div class="grid-box">
            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="box">
                    <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                    <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                    <div class="price">
                        <span>ราคาปัจจุบัน</span>
                        <span>3200 ฿</span>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <span>วันประมูลคงเหลือ 2 วัน</span>
                    </div>
                    <!-- ส่วนแสดงเครดิตการกดประมูล -->
                    <div class="bet">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <span>10K</span>
                        </div>
                        <div class="credit">
                            <i class="fas fa-coins"></i>
                            <span>500</span>
                        </div>
                    </div>
                </div>
            </a>

        </div>

        <!-- ส่วนมือถือ -->
        <div class="mobile-gridbox">
            <div class="slide-article owl-carousel owl-theme">
                <?php for($i=0; $i<=9; $i++): ?>
                    <a href="">
                        <div class="box">
                            <figure><img src="img/ID4fa1e2ab_024a_42ef_bede_658a_l.png" alt=""></figure>
                            <div class="title"><h2>รถไถสวยๆตัวที่ 1</h2></div>
                            <div class="price">
                                <span>ราคาปัจจุบัน</span>
                                <span>3200 ฿</span>
                            </div>
                            <div class="date">
                                <i class="fas fa-calendar-alt"></i>
                                <span>วันประมูลคงเหลือ 2 วัน</span>
                            </div>
                            <!-- ส่วนแสดงเครดิตการกดประมูล -->
                            <div class="bet">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <span>10K</span>
                                </div>
                                <div class="credit">
                                    <i class="fas fa-coins"></i>
                                    <span>500</span>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    </article>