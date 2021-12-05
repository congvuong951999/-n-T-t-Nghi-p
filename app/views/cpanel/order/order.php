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
<p style="text-align:center;">ĐƠN HÀNG</p>
<?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }
  ?> 
<table style="width:100%" border="1"  >
  <tr style="background-color: greenyellow; ">
        <th>Id</th>
        <th>Code đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
  
  </tr>


  <?php
      $i = 0;
      foreach($order as $key => $ord){
        $i++;
       ?>
  <tr style="text-align:center; font-size: 16px; font-weight: normal;">
        <td><?php echo $i ?></td>
        <td><?php echo $ord['order_code'] ?></td>
        <td><?php echo $ord['order_date'] ?></td>
        <td><?php if($ord['order_status']==0){echo 'đơn hàng mới';}else{ echo 'đã xử lý';} ?></td>
        <td><a href="<?php echo BASE_URL ?>/order/order_details/<?php echo $ord['order_code'] ?>">Xem đơn hàng</a></td>
  </tr>
  <?php
  } 
  ?>
 </table>
 <div class="clear"></div>
 </div>
  <div class="clear"></div>