  <section>
         <div class="bg_in">
            <div class="content_page cart_page" >
               <div class="breadcrumbs">
                  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo BASE_URL ?>">
                        <span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1" />
                     </li>
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                        <strong itemprop="name">
                        Giỏ hàng
                        </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                     </li>
                  </ol>
               </div>
               <div class="box-title">
                  <div class="title-bar">
                     <h1>Giỏ hàng của bạn</h1>
                  </div>
               </div>
               <?php
                  if(!empty($_GET['msg'])){
                     $msg = unserialize(urldecode($_GET['msg']));
                     foreach ($msg as $key => $value){
                        echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
                     }
                  }
                  ?> 
               <div class="content_text">
                  <div class="container_table">
                     <table class="table table-hover table-condensed">
                        <thead>
                           <tr class="tr tr_first">
                              <th >Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                             
                              <th >Giá</th>
                              <th style="width:100px;">Số lượng</th>
                              <th>Thành tiền</th>
                              <th style="width:50px; text-align:center;"></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                                 if(isset($_SESSION['shopping_cart'])){
                           ?>
                           <form action="<?php echo BASE_URL ?>/giohang/updategiohang" method="POST">
                               <?php
                                    // $total = 0;
                                    // foreach($_SESSION['shopping_cart'] as $key => $value){
                                    // $subtotal = $value['product_quantity']*$value['product_price'];
                                    // $total+=$subtotal; 
                                 if(isset($_SESSION['shopping_cart'])){
                                    $i = 0;
                                    $total = 0;
                                    foreach($_SESSION['shopping_cart'] as $value){
                                       $subtotal = $value['product_quantity']*$value['product_price'];
                                       $total+=$subtotal;
                                       $i++;
                                 ?>
                              <tr class="tr">
                                 <td data-th="Hình ảnh">
                                    <div class="col_table_image col_table_hidden-xs"><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['product_image'] ?>" alt="<?php echo $value['product_title'] ?>" class="img-responsive"/></div>
                                 </td>
                                 <td data-th="Sản phẩm">
                                    <div class="col_table_name">
                                       <h4 class="nomargin"><?php echo $value['product_title'] ?></h4>
                                    </div>
                                 </td>
                              
                                 <td data-th="Giá"><span class="color_red font_money"><?php echo number_format($value['product_price'],0,',','.').'đ' ?></span></td>

                                 <td data-th="Số lượng">
                                    <div class="clear margintop5">
                                       <div class="floatleft">

                                        <input type="number" min="1" class="inputsoluong" name="qty[<?php echo $value['product_id'] ?>]"  value="<?php echo $value['product_quantity'] ?>"></div>

                                       <!-- <a href=""
                                          value="<?php echo $value['product_id'] ?>" name="cong">
      <i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
      <?php echo $value['product_quantity']; ?>
      <a href="<?php echo BASE_URL ?>/app/controllers/giohang.php?tru=<?php echo $value['product_id'] ?>">
      <i class="fa fa-minus fa-style" aria-hidden="true"></i></a> -->
                                    </div>
                                    <div class="clear"></div>
                                 </td>

                                 <td data-th="Thành tiền" class="text_center"><span class="color_red font_money"><?php echo number_format($subtotal,0,',','.').'đ' ?></span></td>

                                 <td class="actions aligncenter">
                                    
                                    <button type="submit" style="box-shadow: none;" value="<?php echo $value['product_id'] ?>" name="delete_cart" class="btn btn-sm btn-warning">Xóa</button>

                                   <button type="submit" style="box-shadow: none;" value="<?php echo $value['product_id'] ?>" name="update_cart" class="btn btn-sm btn-primary">Cập nhật</button>              
                                 </td>

                              </tr>
                              <?php  
                              } 
                              ?>
                           </form>
                           <tr style="border: none;">
                              <td colspan="7" class="textright_text">
                                 <div class="sum_price_all" style="border: none;>
                                    <span class="text_price">Tổng tiền thanh toán</span>: 
                                    <span class="text_price color_red"><?php echo number_format($total,0,',','.').'VNĐ' ?></span>
                                 </div>
                              </td>
                           </tr>
                           <?php 
                           }else{
                           ?>
                           <tr>
                              <td colspan="7">
                                 <div class="sum_price_all">
                                    <span class="text_price">Giỏ hàng trống</span>
                                 </div>
                              </td>
                           </tr>
                           <?php
                           } 
                           ?>
                        </tbody>
                        <tfoot>
                           <tr class="tr_last">
                              <td colspan="7">
                                 <a href="<?php echo BASE_URL ?>" class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua hàng</a>
                                 <div class="clear"></div>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  <?php
                        if(Session::get('customer')==true){
                  ?> 
                  <div class="contact_form" >
                     <h2 style="text-align: center; font-size: 20px; font-weight:bold">NHẬP THÔNG TIN ĐỂ MUA HÀNG</h2>
                     <div class="contact_left">
                        <div class="ch-contacts-details" style="height:600px; background-color: white;">
                           <ul class="contact-list">
                              <li class="addr">
                                 <strong class="title">Địa chỉ của chúng tôi</strong>
                                 <p><em><strong>KING-STORE</strong></em><br />
                                 <p>Trung Tâm Bán Hàng:</p>
                                 <p>Cơ sở 1: 566 Núi Thành, Quận Hải Châu, TP Đà Nẵng</p>
                                 <p>Cơ sở 2: 74 Hồ Biểu Chánh, Quận Hải Châu, TP Đà Nẵng</p>
                                 <p>Cơ sở 3: 297 Quảng Xương, Hòa Phong, Hòa Vang, TP ĐÀ Nẵng</p>
                                 <p> Cơ sở 4: 52 Nguyễn Văn Linh, Quận Hải Châu, TP Đà Nẵng</p>
                                 <p> Hotline: 1800 1090 - 0778 505 926(zalo)</p>
                                 </p>
                              </li>
                           </ul>
                           <div class="hiring-box">
                              <strong class="title">Chào bạn!</strong>
                              <p style="margin-left:30px; text-align: center;">Mọi thắc mắc bạn hãy gửi về mail của chúng tôi <strong>dangcongvuong9599@gmail.com</strong> chúng tôi sẽ giải đáp cho bạn.</p>
                              <p style="margin-left:30px;"><a href="." class="arrow-link"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Về trang chủ</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="contact_right">
                        <div class="form_contact_in">
                           <div class="box_contact">
                              <form name="FormDatHang" method="POST" autocomplete="off" action="<?php echo BASE_URL ?>/giohang/dathang">
                                 <div class="content-box_contact">
                                    <div class="row">
                                       <div class="input">
                                          <label>Họ và tên: <span style="color:red;">*</span></label>
                                          <input type="text" name="name" required class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Số điện thoại: <span style="color:red;">*</span></label>
                                          <input type="text" name="sodienthoai" required onkeydown="return checkIt(event)" class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Địa chỉ: <span style="color:red;">*</span></label>
                                          <input type="text" name="diachi" required class="clsip" >
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Email: <span style="color:red;">*</span></label>
                                          <input type="text" name="email" onchange="return KiemTraEmail(this);" required class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Nội dung: <span style="color:red;">*</span></label>
                                          <textarea type="text" name="noidung" class="clsipa"></textarea>
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row btnclass">
                                       <div class="input ipmaxn ">
                                          <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Gửi đơn hàng">
                                          <input type="reset" class="btn-gui" value="Nhập lại">
                                       </div>
                                       <div class="clear"></div>
                                    </div>

                                    <!---row---->
                                    <div class="clear"></div>
                                 </div>

                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                                       }else{
                                        ?>   
                                        <li class='dndx1'><a href='<?php echo BASE_URL ?>/khachhang/dangnhap'>Đăng nhập để mua hàng</a></li>
                                        <?php 
                                    }
                                    ?>
               </div>
            </div>
         </div>
      </section>
      <div class="clear"></div>
<?php
}
?>