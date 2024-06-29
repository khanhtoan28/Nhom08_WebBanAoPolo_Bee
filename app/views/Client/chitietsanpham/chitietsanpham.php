<!--product details start-->
<form action="../ClientController/ClientController.php?act=addcart" method="post">
    <div class="product_details mt-20">
        <div class="container">
            <div class="row">
            <div class="section_title">
                        <h2><span> <strong>Chi Tiết</strong>Sản Phẩm</span></h2>
                </div>
                   
          <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
               
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="<?= $hinhct ?>" data-zoom-image="<?= $hinhct ?>" alt="big-1">
                            </a>
                        </div>

                        <div class="single-zoom-thumb">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h1><?= $ten_sp ?></h1>
                            <div class=" product_ratting">
                                <ul>
                                   <p>Hàng chuẩn quảng châu</p>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price"><?= $gia_sp ?>VNĐ</span>

                            </div>
                            <div class="product_desc">
                                <p><?= $mota_sp ?></p>
                            </div>
                            <div class="quantity_progress">
                                    <p class="product_sold">Ngày Nhập:<br> <span><?= $ngay_nhap ?></span></p> 
                                    <p class="product_available">Số Lượng Sản Phẩm:<br> <span><?= $soluong_sp ?></span></p>
                                </div>
                            <div class="product_variant quantity">
                                <label>Số Lượng</label>
                                <input type="number" min="1" max="100" value="1" name="soluongsp">
                                <input type="hidden" value="<?=$id_sp?>" name="idsp">
                                <input type="hidden" value="<?=$ten_sp?>" name="tensp">
                                <input type="hidden" value="<?=$hinhct?>" name="imgsp">
                                <input type="hidden" value="<?=$gia_sp?>" name="giasp">
                                <input type="submit" value=" Thêm Giỏ Hàng" name="addtocard">
                               
                            </div>
                            <div class="product_variant quantity">
                                <button class="button" type="submit">Mua Ngay</button>
                            </div>
                            <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="Add to wishlist">*Sản Phẩm Chúng Tôi Mang Đến Với Tất CẢ Mọi Người </a></li>
                                    <li><a href="#" title="Add to wishlist">*Hãy Yên Tâm Về Chất Lượng</a></li>
                                    <li><a href="#" title="Add to wishlist">*Ngần Ngại Gì HÃy Đặt Hàng Ngay Thôi</a></li>
                                </ul>
                            </div>
                            <div class="product_meta">
                                <span style="color: red;"> <strong> Tính Năng Sắp Ra Mắt:</strong></span>
                            </div>

                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
          
            </div>
       
        </div>
    </div>
    </form>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Bình Luận</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="reviews_wrapper">
                                    <h2>Bình Luận Trước Đó</h2>
                                    <style>
                                    .binhluan table{
                                        width: 90%;
                                        margin-left: 5%;
                                    }
                                    .binhluan table td:nth-child(1){
                                        width: 50%;
                                    }
                                    .binhluan table td:nth-child(2){
                                        width: 20%;
                                    }
                                    .binhluan table td:nth-child(3){
                                        width: 30%;
                                    }
                                    </style>

                                    <div class="boxcontent2 binhluan">
                                    <table>
          
                                    </table>
                                    </div>
                                
                                    <div class="product_ratting mb-10">
                                        <h3>Bình Luận Của Bạn</h3>
                                    </div>
                                   

                                    <div class="boxfooter binhluanform">
                                        <form action="" method="post">
                                            <input type="hidden" name="id_sp" value="">
                                            <input type="text" name="noidung">
                                            <input type="submit" name="guibinhluan" value="Gửi bình luận">
                                        </form>
                                    </div>

                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

  

    <!--product area start-->
    <style>
    .owl-carousel .owl-item img{
        width: 250px;
        height: 250px;
    }
    .haha{
      padding-top: 15px;
    }
    .haha input{
        background-color: #FFCC66;
        border-radius: 8px;
    }
</style>

<section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Sản Phẩm</strong>Khác:</span></h2>
                    </div>
<div class="product_carousel product_column4 owl-carousel">

                    </div>
</div>
            </div>

        </div>
    </section>
  
    <!--product area end-->


 <?php

 include "../layout/body7.php";

   
?>