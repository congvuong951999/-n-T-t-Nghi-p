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
<h3 id="index" class="fl-left" style="text-align: center;">THÊM MỚI BÀI VIẾT</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
 <form action="<?php echo BASE_URL ?>/post/insert_post" method="POST" enctype="multipart/form-data">
	  <div style="display: flex;font-weight: bold;
     font-family: "Poppins", Arial, sans-serif;">
                            <div style="width: 45%; margin-bottom: 20px; float;left">
                                <label for="email">Tên Bài Viết</label>
                                <input type="text" required name="title_post" id="title" style="display: block;width: 300px;height: 30px;border-radius: 15px; margin-bottom: 20px; margin-top: 20px;">


                                <label for="email">Danh Mục Bài Viết</label><br>
                                <select class="form-control"  name="category_post">
							    	<?php
							    	foreach($category as $key => $cate){ 
							    	?>
							    	<option value="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
							    	<?php
							    	} 
							    	?>
							    </select><br>

                                <label style="margin-top:50px">Hình Ảnh</label><br>
                                <input type="file" required name="image_post" id="upload-thumb"></input><br>
                                <img src="<?php echo BASE_URL ?>/public/images/uploadanh.png" style="margin-top: 5px;" >
                              
                        </div>
                        <div id="uploadFile" style="width: 45%;  margin-left: 40px; float: left;">
                                <label for="pwd" style="margin-bottom:20px">Chi Tiết Bài Viết</label><br>
                        <textarea id="editor" required name="content_post" rows="5" class="ckeditor" style="resize: none;" ></textarea><br>
                            </div>
                        </div>
                          <div class="clear"></div>
                        <input type="submit" name="themsanpham" id="btn-submit" value="Thêm Mới" style="height: 40px; width: 150px; margin-top: 20px; margin-bottom: 20px; margin-left: 400px; border-radius: 20px; border: none;
                        background-color: #48ad48; color: white;
                             ">
 </form>
</table>
<div class="clear"></div>
 </div>
  <div class="clear"></div>