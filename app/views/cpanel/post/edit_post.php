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
    <?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
<h3 id="index" class="fl-left" style="text-align: center;">CẬP NHẬT BÀI VIẾT</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
	<?php
foreach($postbyid as $key => $pos) {
?>
 <form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $pos['id_post'] ?>">
	  <div style="display: flex;font-weight: bold;
     font-family: "Poppins", Arial, sans-serif;">
                            <div style="width: 45%; margin-bottom: 20px; float;left">
                                <label for="email">Tên Bài Viết</label>
                                <input type="text" value="<?php echo $pos['title_post'] ?>"  name="title_post" id="title" style="display: block;width: 300px;height: 30px;border-radius: 15px; margin-bottom: 20px; margin-top: 20px;">


                                <label for="email">Danh Mục Bài Viết</label><br>
                                <select class="form-control" name="category_post">
							    	<?php
							    	foreach($category as $key => $cate){ 
							    	?>
							    	<option <?php if($cate['id_category_post']==$pos['id_category_post']){ echo 'selected'; } ?> value="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
							    	<?php
							    	} 
							    	?>
							    </select><br>

                                <label style="margin-top:50px">Hình Ảnh</label><br>
                                <input type="file" name="image_post" id="upload-thumb">
                                
							    <p><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pos['image_post'] ?>" height="100" width="100"></p>
							

                            
                              
                        </div>
                        <div id="uploadFile" style="width: 45%;  margin-left: 40px; float: left;">
                                <label for="pwd" style="margin-bottom:20px">Chi Tiết Bài Viết</label><br>
                        <textarea id="editor" name="content_post" rows="5" class="ckeditor" style="resize: none;" ><?php echo $pos['content_post'] ?></textarea><br>
                            </div>
                        </div>
                          <div class="clear"></div>
                        <input type="submit" name="themsanpham" id="btn-submit" value="Cập Nhật" style="height: 50px; width: 170px; margin-top: 20px; margin-left: 400px; border-radius: 20px; border: none;
                        background-color: #48ad48; color: white;
                             ">
 </form>
 <?php 
}
?>
</table>
<div class="clear"></div>
 </div>
  <div class="clear"></div>