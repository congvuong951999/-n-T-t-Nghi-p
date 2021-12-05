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
  
<p>LIỆT KÊ SẢN PHẨM</p>
<?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }
  ?> 
<!-- <table style="width:100%"; border="1"; table-layout: fixed; >
  <tr style="background-color: greenyellow; ">
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Danh mục</th>
    <th>Giá sp</th>
    <th>Số lượng</th>
    <th>Hot</th>
    <th>Quản lý</th>
  
  </tr>


  <?php
      $i = 0;
      foreach($product as $key => $pro){
        $i++;
       ?>
       <tbody>
  <tr style="text-align:center; font-size: 16px;">
    <td><?php echo $i ?></td>
    <td><?php echo $pro['title_product'] ?></td>
    <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" width="100px"></td>
    <td><?php echo $pro['title_category_product'] ?></td>
    <td><?php echo number_format($pro['price_product'],0,',','.').'vnđ' ?></td>
    <td><?php echo $pro['quantity_product'] ?></td>
    <td><?php 

        if($pro['product_hot']==0){
          echo 'Không có';
        }else{
          echo 'Có';
        }

         ?></td>
    <td >
      <a href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $pro['id_product'] ?>" style="text-decoration: none; color: black;">Xoá</a> | 
      <a href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $pro['id_product'] ?>" style="text-decoration: none; color: black;">Sửa</a> 
    </td>
   
  </tr>
  </tbody>
  <?php
  } 
  ?>
 </table> -->
 <section>
  <div class="container22">
 <table style="height:300px">
      <thead>
        <tr style="background-color: greenyellow; ">
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Danh mục</th>
    <th>Giá sp</th>
    <th>Số lượng</th>
    <th>Hot</th>
    <th>Quản lý</th>
  
  </tr>
      </thead>
      <?php
      $i = 0;
      foreach($product as $key => $pro){
        $i++;
       ?>
       <tbody>
  <tr style="text-align:center; font-size: 16px;">
    <td><?php echo $i ?></td>
    <td><?php echo $pro['title_product'] ?></td>
    <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" width="100px"></td>
    <td><?php echo $pro['title_category_product'] ?></td>
    <td><?php echo number_format($pro['price_product'],0,',','.').'vnđ' ?></td>
    <td><?php echo $pro['quantity_product'] ?></td>
    <td><?php 

        if($pro['product_hot']==0){
          echo 'Không có';
        }else{
          echo 'Có';
        }

         ?></td>
    <td >
      <a href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $pro['id_product'] ?>" style="text-decoration: none; color: black;">Xoá</a> | 
      <a href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $pro['id_product'] ?>" style="text-decoration: none; color: black;">Sửa</a> 
    </td>
   
  </tr>
  </tbody>
  <?php
  } 
  ?>
    </table>
     </div>
</section>
<style type="text/css">
  section {
  position: relative;
  /*border: 1px solid #000;*/
}

.container22 {
  overflow-y: auto;
  height: 620px;
}
  table {
  border-spacing: 0;
  width: 100%;
 
}
td {
  /*border-bottom: 1px solid #eee;*/
  color: #000;
  padding: 5px 15px;
}
td + td {
  /*border-left: 1px solid #eee;*/
}

th {
  /*border-bottom: 1px solid #eee;*/
  /*background: #ddd;*/
  padding: 10px 25px;
  height: 0;
  /*line-height: 0;*/
  padding-top: 0;
  padding-bottom: 0;
  /*color: transparent;*/
  /*border: none;*/
  /*white-space: nowrap;*/
}
th div {
  position: absolute;
  background: transparent;
  color: #fff;
  padding: 9px 25px;
  top: 0;
  margin-left: -25px;
  line-height: normal;
  border-left: 1px solid #800;
}
th:first-child div {
  border: none;
}
</style>
 <div class="clear"></div>
 </div>
  <div class="clear"></div>