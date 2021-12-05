<section>
        <div class="bg_in">
            <style type="text/css">
                .grids.home_product {
                        height: 372px;
                    }
            </style>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sản phẩm HOT</h1>

                        
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">

                         <?php
                     foreach($product_home as $key => $product){ 
                        if($product['product_hot']==1){
                     ?>
                       <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">

                        <input type="hidden" value="<?php echo $product['id_product'] ?>" name="product_id">
                        <input type="hidden" value="<?php echo $product['title_product'] ?>" name="product_title">
                        <input type="hidden" value="<?php echo $product['image_product'] ?>" name="product_image">
                        <input type="hidden" value="<?php echo $product['price_product'] ?>" name="product_price">
                        <input type="hidden" value="1" name="product_quantity">
                       
                        <div class="grids home_product">

                           <div class="grids_in">
                              <div class="content">
                                  
                                 <div class="img-right-pro">
                                   
                                    <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product['id_product'] ?>">
                                    <img class="lazy img-pro content-image pic" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['image_product'] ?>" data-original="image/iphone.png" alt="<?php echo $product['title_product'] ?>" />
                                    </a>
                                  
                                    
                                 </div>

                                 <div class="name-pro-right">
                                    <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product['id_product'] ?>">
                                       <h3> <?php echo $product['title_product'] ?></h3>
                                    </a>
                                 </div>
                                 <div class="price_old_new">
                                    <div class="price">
                                       <span class="news_price">Giá:<?php echo number_format($product['price_product'],0,',','.').'VNĐ' ?></span>
                                    </div>
                                 </div>
                                 <div>
                                    <input type="submit" style="box-shadow: none" class="btn btn-success btn-sm" name="addcart" value="Đặt hàng">
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                        </form>
                        <?php
                            }
                        } 
                        ?>

                        <div class="clear"></div>

                    </div>
                    <div class="clear"></div>
                    <div class="title-bar2">
                        <a class="read_more" href="<?php echo BASE_URL ?>/sanpham/sanphamhot">
                          Xem thêm
                        </a>
                    </div>
                </div>
                
                <div class="clear"></div>

            </div>
            <div class="shop-big-img-box">
                <div class="shop-big-img" style="background-image: url(https://tonycongmmo.com/wp-content/themes/flatsome/assets/img/effects/snow1.png),url(https://tonycongmmo.com/wp-content/themes/flatsome/assets/img/effects/snow2.png);"></div>
                <div class="shop-big-img-box-content">
                    <div class="shop-big-img-content">
                        <div class="shop-big-img-content-header">
                            <span>Sale Sập Sàn</span>
                        </div>
                        <div class="shop-big-img-content-main">
                            <span>BLACK FRIDAY</span>
                        </div>
                        <div class="shop-big-img-content-end">
                            <span>OFF 20% TOÀN BỘ CỬA HÀNG</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            foreach($category as $key => $cate){ 
               
            ?>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1><?php echo $cate['title_category_product'] ?></h1>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php
                         foreach($product_home as $key => $pro_cate){
                             if($cate['id_category_product']==$pro_cate['id_category_product']){ 
                        ?>
                     <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
                        <input type="hidden" value="<?php echo $pro_cate['id_product'] ?>" name="product_id">
                        <input type="hidden" value="<?php echo $pro_cate['title_product'] ?>" name="product_title">
                        <input type="hidden" value="<?php echo $pro_cate['image_product'] ?>" name="product_image">
                        <input type="hidden" value="<?php echo $pro_cate['price_product'] ?>" name="product_price">
                        <input type="hidden" value="1" name="product_quantity">
                       <div class="grids home_product">

                           <div class="grids_in">
                              <div class="content">

                                 <div class="img-right-pro">

                                    <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $pro_cate['id_product'] ?>">
                                    <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro_cate['image_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                    </a>
                                    
                                 </div>
                                 <div class="name-pro-right">
                                    <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $pro_cate['id_product'] ?>">
                                       <h3> <?php echo $pro_cate['title_product'] ?></h3>
                                    </a>
                                 </div>
                                 <div class="price_old_new">
                                    <div class="price">
                                       <span class="news_price">Giá:<?php echo number_format($pro_cate['price_product'],0,',','.').'vnđ' ?></span>
                                    </div>
                                 </div>
                                  <div>
                                    <input type="submit" style="box-shadow: none" class="btn btn-success btn-sm" name="addcart" value="Đặt hàng">
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                    </form>
                        <?php
                           }
                        } 
                        ?>

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="title-bar2">
                        <a class="read_more" href="<?php echo BASE_URL ?>/sanpham/sanphamhot">
                          Xem thêm
                        </a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <?php 
                 
            } 
            ?>
           

    </section>

   	<!--end:body-->
    <div class="clear"></div>

   