<script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/app.js?v=<?=date('his'); ?>"></script>

<?php 
    switch ($slug){
        case 'register':
            echo "<script src='js/distric.js?v=".date('his')."'></script>";
            break;

        case 'store' || 'mycart' || 'paypaid':
            echo "<script src='js/store.js?v=".date('his')."'></script>";
            break; 
    }
?>