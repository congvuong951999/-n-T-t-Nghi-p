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
                    <h3 id="index" class="fl-left" style="text-align: center;">THÊM MỚI DANH MỤC SẢN PHẨM</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">


                    <form action="<?php echo BASE_URL ?>/product/insert_category" method="POST">
                        <div style="display: flex;font-weight: bold;
     font-family: "Poppins", Arial, sans-serif;">
                            <div style="width: 400px; margin-bottom: 20px;">
                                <label for="email">Tên danh mục</label>
                                <input type="text" required name="title_category_product" id="title" style="display: block;width: 300px;height: 30px;border-radius: 15px; margin-bottom: 20px; margin-top: 20px;">

                                <label for="pwd">Miêu Tả</label>
                                 <textarea required name="desc_category_product" rows="5" id="editor" class="form-control"></textarea>
                                
                                
                            </div>
                           
                        </div>
                                
                        
                        <input type="submit" name="themdanhmuc" id="btn-submit" value="Thêm Mới" style="height: 50px; width: 170px; margin-top: 20px; margin-left: 400px; border-radius: 20px; border: none;
                        background-color: #48ad48; color: white;
                             ">
                    </form>

                </div>
            </div>
        </div>
<div class="clear"></div>
 </div>
  <div class="clear"></div>