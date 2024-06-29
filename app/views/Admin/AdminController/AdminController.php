<?php
include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/boxleft.php";


if (isset($_GET['act']) && ($_GET['act']!="")) {
$act = $_GET['act'];
switch ($act){

    /**Quản trị Danh mục */
                case 'danhmuc':
                        include "../danhmuc/index.php";
                        break;
                case 'adddm':
                        include "../danhmuc/add.php";
                        break;
                case 'xoadm':
                        include "../danhmuc/index.php";
                        break;
                case 'suadm':
                        include "../danhmuc/update.php";
                        break;
                case 'updatedm': 
                            include "../danhmuc/index.php";
                            break;


       /* Quản trị sản phẩm*/ 
                case 'sanpham': 
                        include "../sanpham/index.php";
                        break;          
                case 'addsp':
                        include '../sanpham/add.php';  
                        break;
                    case 'xoasp':
                        include "../sanpham/index.php";
                        break;
                                            
                    case 'suasp':
                        include "../sanpham/update.php";
                        break;                        
                    case 'updatesp':                
                        include "../sanpham/index.php";
                        break; 
                                    

                /**Quản trị banner */
                    case 'banner':
                        include "../banner/index.php";
                        break;
                    case 'addbn':
                        include "../banner/add.php";
                        break;
                    case 'xoabn':
                        include "../banner/index.php";
                        break;

                    case 'suabn':
                        include "../banner/update.php";
                        break;
                    case 'updatebn':    
                        include "../banner/index.php";
                        break;          
                    
                       /** Quản trị bài viết*/

                    case 'baiviet':
                        include "../baiviet/index.php";
                        break;
                
                    case 'addbv':            
                        include '../baiviet/add.php';
                        break;

                    case 'xoabv':
                            include "../baiviet/index.php";
                            break;
                    case 'suabv':
                        include "../baiviet/update.php";
                         break;                     
                
                    case 'updatebv':
                        include '../baiviet/index.php';
                        break;

               

                    /**Quản lý bình luận */
                    case 'binhluan':
                        include "../binhluan/index.php";
                        break;

                    
                    /**Quản Lý khuyến mãi */
                    case 'khuyenmai':
                        include "../khuyenmai/index.php";
                        break;
                    case 'addkm':    
                        include "../khuyenmai/add.php";
                        break;
                    case 'xoakm':
                        include "../khuyenmai/index.php";
                        break;
                        
                    case 'suakm':
                        include "../khuyenmai/update.php";
                        break;
                    case 'updatekm':
                        include "../khuyenmai/index.php";
                        break; 
            


            /**Quản trị khách hàng */
                    case 'khachhang':
                        include '../khachhang/index.php';
                        break;
            
                    case 'addkh':
                        include '../khachhang/add.php';
                        break;
            
                    case 'xoakh':
                        include "../khachhang/index.php";
                        break;
        

                    case 'suakh':
                        include "../khachhang/update.php";
                        break;

                    case 'updatekh':
                        include '../khachhang/index.php';
                        break;
                    

                            /**Quản trị phân quyền */

                    case 'phanquyen':
                        include '../phanquyen/index.php';
                        break; 
                        
                    case 'addpq':
                        include '../phanquyen/add.php';
                        break;
                    case 'xoapq':
                        include "../phanquyen/index.php";
                        break;
                    case 'suapq':
                        include "../phanquyen/update.php";
                        break;
                    case 'uppq':
                        include '../phanquyen/index.php';
                        break;




                     /**quản lý biến thể */

                    case 'bienthe':
                        include '../bienthe/index.php';
                        break;  
                            
                    case 'addbt':
                        include '../bienthe/add.php';
                        break;
                    case 'xoabt':
                        include "../bienthe/index.php";
                        break;
                    case 'suabt':
                        include "../bienthe/update.php";
                        break;
                    case 'updatebt':
                        include '../bienthe/index.php';
                        break;





                /**quản lý đơn hàng */
                case 'donhang':
                    include '../donhang/index.php';
                    break;

                case 'adddh':
                    include '../donhang/add.php';
                    break;
                case 'xoadh':
                    include "../donhang/index.php";
                    break;
                case 'suadh':
                    include "../donhang/update.php";
                    break;
                case 'updatedh':
                    include '../donhang/index.php';
                    break;

                /*đơn hàng chi tiết */

                case 'donhangchitiet':
                    include '../donhangchitiet/index.php';
                    break; 
                                   
                case 'adddhct':
                    include '../donhangchitiet/add.php';
                    break; 
                case 'xoadhct':
                    include "../donhangchitiet/index.php";
                    break;
                case 'suadhct':
                    include '../donhangchitiet/update.php';
                    break;
                case 'updatedhct':
                    include '../donhangchitiet/index.php';
                    break; 


                        /**Quản lý liên hệ */

                case 'lienhe':
                    include '../lienhe/index.php';
                    break;
            
                case 'addlh':
                    include '../lienhe/add.php';
                    break;

                case 'xoalh':
                    include "../lienhe/index.php";
                    break;
                case 'sualh':
                    include '../lienhe/update.php';
                    break;

                case 'updatelh':
                    include '../lienhe/index.php';
                    break;


        /**Quản trị người dùng */

                case 'nguoidung':
                    include '../nguoidung/index.php';
                    break;  

                case 'addnd':
                    include '../nguoidung/add.php';
                    break;

                case 'xoand':
                    include '../nguoidung/index.php';
                    break;
                case 'suand':
                    include '../nguoidung/update.php';
                    break;
                case 'updatend':
                    include '../nguoidung/index.php';
                    break;               

        }
    } else {
        include "../layout/content.php";
    }

    include "../layout/footer.php";
?>
