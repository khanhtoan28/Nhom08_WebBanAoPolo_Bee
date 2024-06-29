<style>

    th{
        border:1px solid black;
        text-align: center;
        background-color: gold;
    }

</style>
<div class="shopping_cart_area mt-32">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Xoá</th>
                                            <th class="product_thumb">Ảnh</th>
                                            <th class="product_name">Tên</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product_quantity">Số Lượng</th>
                                            <th class="product_total">Thành Tiền</th>
                                         <th class="product_total">Thao Tác</th> 
                                        </tr>
                                    </thead>
                                    <div class="cart_submit">
                                <button type="submit"><a href="../ClientController/ClientController.php?act=sanpham">Quay lại sản phẩm</a></button> 
                                   </div> <hr>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
           
                <!--coupon code area end-->
            </form>
        </div>
    </div>
<?php
include "../layout/body7.php";