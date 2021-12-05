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
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left" style="text-align: center;">CẬP NHẬT DANH MỤC BÀI VIẾT</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">

                	<?php
	foreach($categorybyid as $key => $cate){ 
	?>
                    <form action="<?php echo BASE_URL ?>/post/update_category_post/<?php echo $cate['id_category_post'] ?>" method="POST">
                        <div style="display: flex;font-weight: bold;
     font-family: "Poppins", Arial, sans-serif;">
                            <div style="width: 400px; margin-bottom: 20px;">
                                <label for="email">Tên danh mục</label>
                                <input type="text"  value="<?php echo $cate['title_category_post'] ?>" name="title_category_post" id="title" style="display: block;width: 300px;height: 30px;border-radius: 15px; margin-bottom: 20px; margin-top: 20px;">

                                <label for="pwd">Miêu Tả</label>
                                 <textarea name="desc_category_post" rows="5" id="editor" class="form-control"><?php echo $cate['desc_category_post'] ?></textarea>   
                            </div>
                           
                        </div>
                        <input type="submit" name="themdanhmuc" id="btn-submit" value="Cập Nhật" style="height: 50px; width: 170px; margin-top: 20px; margin-left: 400px; border-radius: 20px; border: none;
                        background-color: #48ad48; color: white;
                             ">
                    </form>
<?php
	} 
	?>
                </div>
            </div>
        </div>
<div class="clear"></div>
 </div>
  <div class="clear"></div>