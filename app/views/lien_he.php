<section>
	<div class="gioithieucontainer">
		<div class="bg_in">
				<div class="breadcrumbs">
                  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo BASE_URL ?>">
                        <span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1" />
                     </li>
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                        <strong itemprop="name">
                        Liên hệ
                        </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                     </li>
                  </ol>
                </div>
                <div class="lienhe_left" style="width: 65%;
    height: auto;
    float: left;">
    			<h2> THÔNG TIN LIÊN HỆ</h2>
                	<div class="thongtinlienhe">
     
                		<div class="docs">
                			<b>CÔNG TY TNHH KING - STORE</b>
                		</div>
                		<div class="docs_diachi">
                			<i class="fa fa-map-marker"></i>
                			<b>Địa chỉ:</b>
                			"566/ Núi thành, quận hải châu , Tp. Đà Nẵng"
                		</div>
                		<div class="dos_diachi">
                			<i class="fa fa-phone"></i>
                			<b>Điện Thoại</b>"(08) 66 85 85 38"
                		</div>
                		<div class="dos_diachi">
                			<i class="fa fa-mobile"></i>
                			<b>Holine</b>"0778505926"
                		</div>
                		<div class="dos_diachi">
                			<i class="fa fa-fax"></i>
                			<b>Fax</b>"(08) 66 85 85 38"
                		</div>
                		<div class="dos_diachi">
                			<i class="fa fa-envelope"></i>
                			<b>Gmail</b>"dangcongvuong9599@gmail.com"
                		</div>
                	</div>
                	<hr class="hr">
                	<h3 class="gttlh">Gửi Thông tin Liên Hệ</h3>
                	<p>Xin vui lòng điền các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!</p>
                </div>
                <div class="lienhe_right" style="width: 35%;
    height: auto;
    float: right;">
                	<h1>HỔ TRỢ TRỰC TUYẾN</h1>
                	<p>HOTLINE</p>
                	<p>0778 505 926</p>
                </div>
                <div class="clear"></div>
                <div class="dienthongtin_container">
                	<div class="dtt_left" style="width: 50%; float: left;">
                		<div class="box_contact">
                              <form name="FormDatHang" method="POST" autocomplete="off" action="<?php echo BASE_URL ?>/giohang/dathang">
                                 <div class="content-box_contact">
                                    <div class="row">
                                       <div class="input">

                                          <label><i class="glyphicon glyphicon glyphicon-user"></i> -Họ và tên: <span style="color:red;">*</span></label>
                                          <input placeholder="Họ Tên" type="text" name="name" required class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Số điện thoại: <span style="color:red;">*</span></label>
                                          <input placeholder="số điện thoại" type="text" name="sodienthoai" required onkeydown="return checkIt(event)" class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Email: <span style="color:red;">*</span></label>
                                          <input type="text" name="email" onchange="return KiemTraEmail(this);" required class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Nội dung: <span style="color:red;">*</span></label>
                                          <textarea type="text" name="noidung" class="clsipa"></textarea>
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row btnclass">
                                       <div class="input ipmaxn ">
                                          <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Gửi phản hồi">
                                       </div>
                                       <div class="clear"></div>
                                    </div>

                                    <!---row---->
                                    <div class="clear"></div>
                                 </div>

                              </form>
                           </div>
                	</div>
                	<div class="dtt_right" style="width: 40%; float: left;">
                		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.64100975123!2d108.21987141416949!3d16.032192644689513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219ee598df9c5%3A0xaadb53409be7c909!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaeG6v24gdHLDumMgxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1636292340475!5m2!1svi!2s" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                	</div>
                </div>
        </div>
	</div>
	<style type="text/css">
		.dienthongtin_container{
			margin-top: 20px;
			height: auto;
		}
		.ddt_left{
			width: 50%;
			height: auto;
			float: left;
		}
		.lienhe_left h2{
			font-size: 25px;
			font-weight: bold;
		}
		.lienhe_right h1{
			font-size: 25px;
			font-weight: bold;
		}
		.lienhe_left hr{
			margin: 15px 0;
		}
		.hr{
		border-style: dotted;
    	border-color: #7e7e7e;
        border: 0;
    	border-top: 1px solid #eee;
		}
		.lienhe_left h3.gttlh {
    text-transform: uppercase;
    margin-bottom: 10px;
    font-size: 14px;
    color: #429a9d;
    font-weight: bold;
}
	</style>
	<div class="clear"></div>
</section>
<!-- http://runecom27.runtime.vn/lien-he.html -->