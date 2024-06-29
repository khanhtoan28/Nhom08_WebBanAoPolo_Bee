<?php

include "../layout/header.php";
include "../layout/header2.php";
include "../layout/header1.php";
include "../layout/menu.php";

include "../layout/banner.php";
if (!isset($_SESSION["mycart"]))
    $_SESSION["mycart"] = [];
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
        case 'sp':
            break;
        case 'sanpham1':
            break;
        case 'sanpham2':
            break;
        case 'sanpham3':
            break;
        case 'sanpham4':
            break;
        case 'sanpham5':
            break;
        case 'chitietsp':
            break;
        case 'tintuc':
            break;
        case 'baiviet':
            break;
        case 'lienhe':
            include "../lienhe/lienhe.php";
            break;
        case "dangnhap":
            include "../taikhoan/dangnhap.php";
            break;
        case "dangky":
            include "../taikhoan/dangky.php";
            break;
        case 'suathongtin':
            include "../taikhoan/suathongtin.php";
            break;
        case 'addcart':
            include "../giohang/giohang.php";
            break;
        case 'delcart':
            break;
        case 'thanhtoan':
            include '../donhang.php';
            break;
        case 'showdh':
            include '../lichsudh.php';
            break;
        case 'showdhct':
            include '../lichsudhct.php';
            break;
        case 'bill':
            include '../bill.php';
            break;
        case 'dangxuat':
            break;

    }
} else {
    include '../layout/index.php';
}

include "../layout/footer.php";


ob_end_flush();

?>