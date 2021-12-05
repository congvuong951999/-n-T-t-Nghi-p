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
<h3 id="index" class="fl-left" style="text-align: center;">CẬP NHẬT SẢN PHẨM</h3>
<table border="1" width="100%" style="border-collapse: collapse;">
	<?php
	foreach($productbyid as $key => $pro){
	?>
 <form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro['id_product'] ?>" method="POST" enctype="multipart/form-data">
	  <div style="display: flex;font-weight: bold;
     font-family: "Poppins", Arial, sans-serif;">
                            <div style="width: 400px; margin-bottom: 20px;">
                                <label for="email">Tên Sản Phẩm</label>
                                <input type="text" value="<?php echo $pro['title_product'] ?>" name="title_product" id="title" style="display: block;width: 300px;height: 30px;border-radius: 15px; margin-bottom: 20px; margin-top: 20px;">


                                <label for="email">Giá Sản Phẩm</label>
                                <input type="text" value="<?php echo $pro['price_product'] ?>" name="price_product" id="title" style="display: block;width: 300px;height: 30px;border-radius: 15px; margin-bottom: 20px; margin-top: 20px;">
                                
                                <label for="pwd">Miêu tả sản phẩm</label><br>
                        <textarea id="editor" name="desc_product" rows="4" class="ckeditor" style="resize: none" ><?php echo $pro['desc_product'] ?></textarea><br>
                            </div>

                            <div id="uploadFile" style="width: 400px; margin-left: 40px;">
                                <label>Hình Ảnh</label>
                                <input type="file" name="image_product" id="upload-thumb">
                                 <p><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" height="100" width="100"></p> <br>
                                <label for="email">Số Lượng</label>
                                <input type="text" value="<?php echo $pro['quantity_product'] ?>" name="quantity_product" id="title" style="display: block;width: 300px;height: 30px;border-radius: 15px; margin-bottom: 20px; margin-top: 20px;">
                            
                        <div>
                            <label for="pwd">Sản phẩm hot</label><br>
                   					         
                                <select name="product_hot">
                                    <?php
							    	 if($pro['product_hot']==0){
							    	?>
							    	<option selected value="0">Không</option>
							    	<option value="1">Có</option>
							    	<?php
							    	}else{ 
							    	?>
							    	<option value="0">Không</option>
							    	<option selected value="1">Có</option>
							    	<?php
							    	} 
							    	?>
                                </select>	
                          </div><br>
                          <div>
                                <label for="pwd">Danh mục sản phẩm</label><br>

                                    <select class="form-control" name="category_product">
							    	<?php
							    	foreach($category as $key => $cate){ 
							    	?>
							    	<option style="height: 50px; width: 30px;" <?php if($pro['id_category_product']==$cate['id_category_product']){ echo 'selected'; }?> value="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
							    	<?php
							    	} 
							    	?>
							    </select>
                              </div>
                              </div>
                            
                        </div>
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