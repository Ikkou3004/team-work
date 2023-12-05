<div class="main-dangnhap">
   <?php
       
        
        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $role=checkuser($user,$pass);
            // var_dump($user,$pass);
            // $_SESSION['role']=$role;
            // if($role==1) header('location: index.php');
            if($user="phuc" && $pass="123"){
                include 'index.php';
            }
            

        }
   ?>
       
        <form method="POST" action="" >
            <h1>Đăng nhập</h1>

            <div class="login-name">
                <label for="loginname">Tên đăng nhập:</label>
                <input id="" type="text" name="user" value="">
            </div>

            <div class="password">
                <label for="password">Mật khẩu:</label>
                <input id="" type="password" name="pass" value="">
            </div>

            <div class="remember-pass">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ghi nhớ mật khẩu</label>
            </div>

            <div class="button-login">
                <input type="submit" value="Đăng nhập" name="dangnhap">
            </div>
            <p>Bạn chưa có tài khoản? <a href="index.php?act=dangki">Đăng kí ngay!</a></p>

        </form>
    
    <div class="image-signup">
        <img src="img/fashion_women.jpg" alt="">
    </div>


</div>

<script>
    
</script>