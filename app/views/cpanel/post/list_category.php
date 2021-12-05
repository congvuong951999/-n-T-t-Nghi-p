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
<p style="text-align:center;">LIỆT KÊ DANH MỤC BÀI VIẾT</p>
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
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Quản lý</th>
  
  </tr>


  <?php
      $i = 0;
      foreach($category as $key => $cate){
        $i++;
       ?>
  <tr style="text-align:center; font-size: 16px; font-weight: normal;">
 
        <td><?php echo $i ?></td>
        <td><?php echo $cate['title_category_post'] ?></td>
        <td><?php echo $cate['desc_category_post'] ?></td>
        <td><a href="<?php echo BASE_URL ?>/post/delete_category/<?php echo $cate['id_category_post'] ?>">Xóa</a> || <a href="<?php echo BASE_URL ?>/post/edit_category/<?php echo $cate['id_category_post'] ?>">Sửa</a></td>
   
  </tr>
  <?php
  } 
  ?>
 </table>
 <div class="clear"></div>
 </div>
  <div class="clear"></div>