
        
        <div class="main-dangki">

        <form method="POST" action="index.php?act=dangki" onsubmit="return validateForm()">
        <h1>Tạo tài khoản</h1>

        <div class="login-name">
            <label for="loginname">Email:</label>
            <input id="loginname" type="text" name="email" value="">
            <div id="error-loginname" style="color: red;"></div>
        </div>

        <div class="password">
            <label for="password">Tên đăng nhập:</label>
            <input id="password" type="text" name="user" value="">
            <div id="error-password" style="color: red;"></div>
        </div>

        <div class="password-again">
            <label for="password_again">Mật khẩu:</label>
            <input id="password_again" type="password" name="pass" value="">
            <div id="error-password-again" style="color: red;"></div>
        </div>

        <div class="button-signup">
            <input type="submit" value="Đăng ký" name="dangki">
            <input type="reset" value="Nhập lại">
        </div>
       <div class="thongbao">
       <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
        ?>
       </div>
    </form>

            <div class="image-signup">
                <img src="img/fashion_women.jpg" alt="">
            </div>

        </div>

        <script>
    //     function validateForm() {
    //         var loginname = document.getElementById("loginname").value;
    //         var password = document.getElementById("password").value;
    //         var passwordAgain = document.getElementById("password_again").value;
    //         var isValid = true;

    //         // Kiểm tra và hiển thị thông báo tương ứng với từng trường
    //         if (loginname === "") {
    //             document.getElementById("error-loginname").textContent = "Vui lòng nhập tên đăng nhập.";
    //             isValid = false;
    //         } else {
    //             document.getElementById("error-loginname").textContent = "";
    //         }

    //         if (password === "") {
    //             document.getElementById("error-password").textContent = "Vui lòng nhập mật khẩu.";
    //             isValid = false;
    //         } else {
    //             document.getElementById("error-password").textContent = "";
    //         }

    //         if (passwordAgain === "") {
    //             document.getElementById("error-password-again").textContent = "Vui lòng nhập lại mật khẩu.";
    //             isValid = false;
    //         } else {
    //             document.getElementById("error-password-again").textContent = "";
    //         }

    //         // Kiểm tra xem mật khẩu và nhập lại mật khẩu có khớp nhau không
    //         if (password !== passwordAgain) {
    //             document.getElementById("error-password-again").textContent = "Mật khẩu và nhập lại mật khẩu không khớp.";
    //             isValid = false;
    //         }

    //         return isValid;
    //     }
    // </script>
      