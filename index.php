<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
    $url = explode('/',$_SERVER['REQUEST_URI']);

    $slug = urldecode($url[1]);

    //echo $slug;

    include('template/header.php'); 
?>

    <!-- เนื้อหา -->
    <main>
        <div class="container grid-body">
            <!-- ฝั่งซ้ายมือ -->
            <?php include('template/sidebar.php'); ?>

            <!-- ฝั่งขวามือ -->
            <div class="main-side">
                <!-- ข้อความเลื่อน -->
                <div class="marquee">
                    <marquee>Test text. Test text. Test text. Test text. Test text.</marquee>
                </div>

                <?php 
                    switch ($slug){
                        case '':
                            @include "template/home.php";
                            break;

                        case 'home':
                            @include "template/home.php";
                            break;

                        case 'contact':
                            @include "template/contact.php";
                            break;

                        case 'detail-product':
                            @include "template/detail-product.php";
                            break;

                        case 'registration-job':
                            @include "template/registration-job.php";
                            break;

                        case 'article':
                            @include "template/article.php";
                            break;

                        case 'article-page':
                            @include "template/article-page.php";
                            break;

                        case 'about':
                            @include "template/about.php";
                            break;

                        case 'login':
                            @include "page_member/login.php";
                            break;

                        case 'register':
                            @include "page_member/register.php";
                            break;

                        case 'forget':
                            @include "page_member/forgetPass.php";
                            break;

                        case 'account':
                            @include "page_member/account.php";
                            break;

                        case 'store':
                            @include "template/store.php";
                            break;

                        case 'mycart':
                            @include "template/mycart.php";
                            break;

                        case 'paypaid':
                            @include "template/paypaid.php";
                            break;

                        case 'detail-product-end':
                            @include "template/detail-product-end.php";
                            break;
                    }
                ?>

            </div>
        </div>
    </main>

<!-- ส่วนท้าย -->
<?php include('template/footer.php'); ?>
