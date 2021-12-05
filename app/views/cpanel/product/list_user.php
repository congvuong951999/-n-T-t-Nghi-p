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
<p>LIỆT KÊ Tài Khoản Đã Đăng Ký</p>
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
    <th>Tên User</th>
    <th>Số điện Thoại</th>
    <th>Email</th>
    <th>Địa Chỉ</th>
  
  </tr>


  <?php
      $i = 0;
      foreach($customer as $key => $pro){
        $i++;
       ?>
  <tr style="text-align:center; font-size: 16px;">
    <td><?php echo $i ?></td>
    <td><?php echo $pro['customer_name'] ?></td>
    <td><?php echo $pro['customer_phone'] ?></td>
    <td><?php echo $pro['customer_email'] ?></td>
    <td><?php echo $pro['customer_address'] ?></td>

          <a href="<?php echo BASE_URL ?>/usduct/delete_usduct/<?php echo $pro['customer_id'] ?>" style="text-decoration: none; color: black;">Xoá</a>
    </td>
   
  </tr>
  <?php
  } 
  ?>
 </table>
 <div class="clear"></div>
 </div>
  <div class="clear"></div>