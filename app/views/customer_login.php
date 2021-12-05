<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>dangnhapdangky</title>
   <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/dangnhapdangky.css">
   <script src="https://kit.fontawesome.com/e72c41f833.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>

<div class="wrapper_dndk">
   <h2>Sign in/up Form</h2>
   <div class="mess">
   <?php
         if(!empty($_GET['msg'])){
            $msg = unserialize(urldecode($_GET['msg']));
            foreach ($msg as $key => $value){
               echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
            }
         }
         ?> 
         </div>
    <div class="container" id="container">

        <div class="form-container sign-up-container">

            <form action="<?php echo BASE_URL ?>/khachhang/insert_dangky" method="POST">
                <h1>Tạo Tài Khoản</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng email của bạn để đăng ký</span>
                <input type="text" placeholder="Name" required name="txtHoTen" />
                <input type="email" placeholder="Email" required name="txtEmail" />
                <input type="password" placeholder="Password" required name="txtPassword" />
                <button name="dangky">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="<?php echo BASE_URL ?>/khachhang/login_customer" method="POST">
                <h1>ĐĂNG NHẬP</h1>
                                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng tài khoản của bạn</span>
                <input type="email" placeholder="Email" required name="username" />
                <input type="password" placeholder="Password" required name="password" />
                <a href="#">Quên mật khẩu ?</a>
                <button name="dangnhap">Đăng Nhập</button>
            
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Để giữ kết nối với chúng tôi và mua hàng, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
                    <button class="ghost" id="signIn">Đăng Nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                  <h1>KING STORE</h1>
                    <h2>Chào bạn!</h2>
                    <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                    <button class="ghost" id="signUp">Đăng Ký</button>
                </div>
            </div>
        </div>
    </div>
   
</div>
   <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });
    </script>


</body>
</html>