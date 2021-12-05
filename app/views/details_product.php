<?php
  foreach($details_product as $key => $value){
    $name_product = $value['title_product'];
    $name_category_product = $value['title_category_product'];
    $id_cate = $value['id_category_product'];
  } 
?>

  <section>
    <?php
     foreach($details_product as $key => $details){ 
    ?>
         <div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
                 
                  <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $id_cate ?>">
                           <span itemprop="name"><?php echo $name_category_product ?></span></a>
                           <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           <?php echo $name_product ?>
                           </strong>
                           </span>
                           <meta itemprop="position" content="3" />
                        </li>

                     </ol>
                  </div>
                  <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
                     <input type="hidden" value="<?php echo $details['id_product'] ?>" name="product_id">
                        <input type="hidden" value="<?php echo $details['title_product'] ?>" name="product_title">
                        <input type="hidden" value="<?php echo $details['image_product'] ?>" name="product_image">
                        <input type="hidden" value="<?php echo $details['price_product'] ?>" name="product_price">
                        <input type="hidden" value="1" name="product_quantity">
                  <div class="content_page">
                     <div class="content-right-items margin0">
                        <div class="title-pro-des-ct">
                           <h1><?php echo $name_product ?></h1>
                        </div>
                        <div class="slider-galery ">
                         <div id="sync1" class="owl-carousel owl-theme">
                                  <div class="item">
                                      <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $details['image_product'] ?>" width="100%">
                                  </div>
                                  

                                 
                          </div>

                          <div id="sync2" class="owl-carousel owl-theme">
                                     <div class="item">
                                        <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $details['image_product'] ?>" width="100%">
                                  </div>  
                          </div> 
                           
                        </div>
                        <div class="content-des-pro">
                           <div class="content-des-pro_in">
                              <div class="pro-des-sum">
                                 <div class="price">
                                    <p class="code_skin" style="margin-bottom:10px">
                                       <span>Mã hàng: <a href="chitietsp.php">CRW-W06</a> | Thương hiệu: <a href="">Comrack</a></span>
                                    </p>
                                    <div class="status_pro">
                                       <span><b>Đánh Giá:</b>  ☆ ☆ ☆ ☆ ☆</span>
                                    </div>
                                    <div class="status_pro"><span><b>Xuất xứ:</b>  VIỆT NAM</span></div>
                                 </div>

                              </div>
                              <div class="clear"></div>
                           </div>
                           <div class="clear"></div>
                           <div class="content-pro-des">
                              <div class="content_des">
                                 <h3 style="font-weight: bold;">Thông số Kỹ Thuật :</h3>
                                 <?php echo $details['desc_product'] ?>
                              </div>
                           </div>
                           <?php if ($details['quantity_product'] > 0) { ?>
                           <div class="ct">
                              <div class="hangtonkho">
                                 <label>Tồn kho:</label>
                                 <strong><?php echo $details['quantity_product'] ?></strong>
                              </div>
                              <div class="number_price">
                                 <div class="custom pull-left">
                                    <p>Số Lượng mua :</p>
                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                                    <div class="clear"></div>
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              
                              <div class="clear"></div>

                           </div>
                           <div class="color_price">
                                    <span class="title_price bg_green">Giá bán</span> <?php echo number_format($details['price_product'],0,',','.') ?> <span>vnđ</span>
                                    <div class="clear"></div>
                                 </div>
                           <div class="wp_a">
                              <div class="">
                                
                                 <input type="submit" style="box-shadow: none" class="view_duan1" name="addcart" value="THÊM GIỎ HÀNG">
                              </div>
                              
                                 <div class="clear"></div>
                              </div>
                           <?php } else { ?>
                              <div class="hethang">
                               <h3 style="font-size:20px; color: red; font-weight:bold; margin-left: 30px;"> Hết Hàng</h3>
                            </div>
                           <?php } ?>
                          </form>
                           <div class="tags_products prodcut_detail">
                              <div class="tab_link">
                                 <h3 class="title_tab_link">TAGS: </h3>
                                 <div class="content_tab_link"> <a href="tag/"></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="content-des-pro-suport">
                           <div class="box-setup">
                              <div class="title-setup">
                                 <i class="fa fa-tasks" aria-hidden="true"></i> Dịch vụ &amp; Chú ý
                              </div>
                              <div class="info-setup">
                                 <div class="row-setup">
                                    <p style="text-align:justify">Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :</p>
                                    <p><span style="color:#d50100;font-weight: bold;">0778 505 926</span>&nbsp;để biết thêm chi tiết về Phụ kiện sản phẩm.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="info-prod prod-price freeship">
                              <span class="title">
                                 <p>
                                     Bạn sẽ được giao hàng miễn phí trong khu vực nội thành Thành Phố Đà Nẵng khi mua sản phẩm này.
                                 </p>
                              </span>
                              
                           </div>
                        
                        </div>
                        <div class="clear"></div>
                     </div>

                  </div>
               
               </div>

               <div class="wrapper_all_main_right">
               
                
                  <div class="clear"></div>
                  
                
                  <div class="clear"></div>
                  
                   <?php
               } 
               ?> 
                  <!-- <div class="content-brank">
                     <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
                  </div> -->
                 
                  <div class="module_pro_all">
                     <div class="box-title">
                        <div class="title-bar">
                           <h3>Sản phẩm liên quan</h3>
                        </div>
                     </div>
                     <div class="pro_all_gird">
                        <div class="girds_all list_all_other_page ">
                       <?php
                          foreach($related as $key => $relate){ 
                          ?> 
                           <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">

                        <input type="hidden" value="<?php echo $relate['id_product'] ?>" name="product_id">
                        <input type="hidden" value="<?php echo $relate['title_product'] ?>" name="product_title">
                        <input type="hidden" value="<?php echo $relate['image_product'] ?>" name="product_image">
                        <input type="hidden" value="<?php echo $relate['price_product'] ?>" name="product_price">
                        <input type="hidden" value="1" name="product_quantity">

                        <div class="grids">
                       <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="sanpham.php">
                           <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $relate['image_product'] ?>" data-original="image/iphone.png" alt="<?php echo $relate['title_product'] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                           </a>

                           
                        </div>
                        <div class="name-pro-right">
                           <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $relate['id_product'] ?>">
                              <h3> <?php echo $relate['title_product'] ?></h3>
                           </a>
                        </div>
                        
                        <div class="price_old_new">
                           <div class="price">
                              <span class="news_price"><?php echo number_format($relate['price_product'],0,',','.').'VNĐ' ?></span>
                           </div>
                        </div>
                        <!-- <div class="add_card">
                           <a onclick="return giohang(579);" name="addcart">
                            Đặt hàng
                           </a>
                        </div> -->
                        <div>
                                    <input type="submit" style="box-shadow: none" class="btn btn-success btn-sm" name="addcart" value="Đặt hàng">
                                 </div>
                     </div>
                  </div>
                  </div>
                  </form>
                  <?php
                   } 
                   ?> 
                           <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="clear"></div>
                  </div>
               
               </div>
              
               <!--end:left-->
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
       
         <script>
            jQuery(document).ready(function() {
            
            
            
                var div_fixed = jQuery('.product_detail_info').offset().top;
            
                jQuery(window).scroll(function() {
            
                    if (jQuery(window).scrollTop() > div_fixed) {
            
                        jQuery('.tabs-animation').addClass('fix_top');
            
                    } else {
            
                        jQuery('.tabs-animation').removeClass('fix_top');
            
                    }
            
                });
            
                jQuery(window).load(function() {
            
                    if (jQuery(window).scrollTop() > div_fixed) {
            
                        jQuery('.tabs-animation').addClass('fix_top');
            
                    }
            
                });
            
            });
            
         </script>
      </section>