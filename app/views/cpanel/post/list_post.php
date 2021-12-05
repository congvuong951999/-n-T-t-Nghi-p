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
<p>DANH SÁCH BÀI VIẾT</p>
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
        <th>Tên </th>
        <th>Hình Ảnh </th>
        <th>Danh mục </th>
        <th>Quản lý</th>
  
  </tr>


  <?php
      $i = 0;
      foreach($post as $key => $pos){
        $i++;
       ?>
  <tr style="text-align:center; font-size: 16px;">
        <td><?php echo $i ?></td>
        <td style="width: 350px;"><?php echo $pos['title_post'] ?></td>
        <td style="width: 250px;"><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pos['image_post'] ?>" height="100" width="100"></td>
        <td><?php echo $pos['title_category_post'] ?></td>
   
        <td><a onclick="confirm('Bạn có muốn xóa bài viết ?')" href="<?php echo BASE_URL ?>/post/delete_post/<?php echo $pos['id_post'] ?>">Xóa</a> || <a href="<?php echo BASE_URL ?>/post/edit_post/<?php echo $pos['id_post'] ?>">Sửa</a></td>
  </tr>
  <?php
  } 
  ?>
 </table>
 <div class="clear"></div>
 </div>
  <div class="clear"></div>