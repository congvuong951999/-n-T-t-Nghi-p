<div class="sidebar_right" style="font-size:20px;">
  <div class="header2 ">
        <a href="" title="" id="logo" class="fl-left">KING - STORE</a>
        <div class="box">

                <i class="fa fa-search" aria-hidden="true"></i>

                <input type="text" name="">

        </div>
          <div class="dangxuat">
            <a href="<?php echo BASE_URL ?>/login/logout">Đăng xuất</a>
          </div>
    </div>
    <div class="clear"></div>
<h3 style="text-align: center;">Liệt kê đơn hàng chi tiết</h3>
<table class="table table-striped" style="width:100%; text-align: center;">
    <thead>
      <tr style="background-color: greenyellow; ">
        <th>Id</th>
        <th>Tên người đặt</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Ghi chú</th>
      
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
     
      foreach($order_info as $key => $ord){
       
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['name'] ?></td>
        <td><?php echo $ord['email'] ?></td>
        <td><?php echo $ord['sodienthoai'] ?></td>
        <td><?php echo $ord['diachi'] ?></td>
        <td><?php echo $ord['noidung'] ?></td>
      </tr>
      <?php
      } 
      ?>
     
      
    </tbody>
</table>

<table class="table table-striped" style="width:100%; text-align: center; margin-top: 30px;">
    <thead>
      <tr style="background-color: greenyellow;  ">
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      $total = 0;
      foreach($order_details as $key => $ord){
        $total+=$ord['product_quantity']*$ord['price_product'];
        $i++;
       ?>

      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['title_product'] ?></td>
        <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $ord['image_product'] ?>" height="100" width="100"></td>
        <td><?php echo $ord['product_quantity'] ?></td>
        <td><?php echo number_format($ord['price_product'],0,',','.').'đ' ?></td>
        <td style="color: red;"><?php echo number_format($ord['product_quantity']*$ord['price_product'],0,',','.').'VNĐ' ?></td>
       
      </tr>
      <?php
      } 
      ?>
      <form method="POST" action="<?php echo BASE_URL ?>/order/order_confirm/<?php echo $ord['order_code'] ?>">
      <tr>
        <!-- <td ><input style="width: 170px; height: 50px; background-color: red; border-radius: 50px; border:none;" type="submit" name="update_order" value="Xác Nhận Đơn" class="btn btn-default"></td> -->
        <td align="right" colspan="6" style="color: red;">Tổng tiền : <?php echo number_format($total,0,',','.').'đ' ?></td>
      </tr>
      </form>

      
    </tbody>
  </table>
      <form method="POST" action="<?php echo BASE_URL ?>/order/order_confirm/<?php echo $ord['order_code'] ?>">
        <tr>
          <td ><input style="width: 170px; height: 50px; background-color: #48ad48;
    color: white; border-radius: 50px; border:none; margin-left: 400px; margin-top:50px; margin-bottom: 50px" type="submit" name="update_order" value="Xác Nhận Đơn" class="btn btn-default" ></td>
        </tr>
      </form>
  <div class="clear"></div>
 </div>
  <div class="clear"></div>