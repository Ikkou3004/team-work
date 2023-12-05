<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Lienhe.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!------------------------------------------------------------header-------------------------------------------------------------------------->
    <div class="container-fluid">
        
    <div class="move">
            <h5> <a href="index.php">Trang chủ</a> <span>|</span>Khuyến mãi</h4>
                

        </div>
        <!------------------------------------------------------------Body-------------------------------------------------------------------------->
        <h3>Viết cho chúng tôi</h3>
        <h3>Nếu bạn có thắc mắc hay lưu ý gì với chúng tôi nhé!</h3>
        <div class="form-container">
            <div>
                <form method="POST" action="authenticate.php">
                    <div id="fb-splits">
                        <div class="top">
                            <div class="name">
                                <label for="name">Tên:</label>
                                <input id="name" type="text" name="name" value="">
                            </div>
    
                            <div class="email">
                                <label for="email">Email:</label>
                                <input id="email" type="text" name="email" value="">
                            </div>
                        </div>
    
                        <div class="bot">
                            <div class="phone-num">
                                <label for="phone-num">Số điện thoại</label>
                                <input type="text" name="phone-num" value="">
                            </div>
    
                            <div class="question">
                                <label for="question">Bạn đang nghĩ gì?</label>
                                <input type="text" name="question" value="">
                            </div>
                        </div>
                    </div>
    
                    <div class="button-send">
                        <input type="submit" value="Gửi">
                    </div>
                </form>
            </div>

            <div>
                <h3>Văn phòng</h3>
                <h3>Hotline: 1900.1009</h3>
                <h3>VP Trường Đại học Quy Nhơn</h3>
            </div>
        </div>

        <!-------------------------------------------------------footer----------------------------------------------------------->
        <div class="footer">
            <div class="contact">
                <div class="info">
                    <div class="logo">
                        <a href="#"><img src="img/logo.png" alt="logo-cs-shops" width="64px" height="58px"></a>
                        <p>Công ty thời trang Clothes-Shop</p>
                        <p>Hotline: 1900 8079</p>
                        <p>8:30 - 19:00 tất cả các ngày trong tuần</p>
                    </div>
                </div>
                <div class="help">
                    <h3>Hỗ trợ khách hàng</h3>
                    <a href="">
                        <p>Hỏi đáp</p>
                    </a>
                    <a href="">
                        <p>Hướng dẫn khách hàng</p>
                    </a>
                </div>
                <div class="connect">
                    <h3>Kết nối</h3>
                    <div class="social">
                        <a href="">
                            <p> <i class="fab fa-facebook" color="black"></i></p>
                        </a>
                        <a href="">
                            <p><i class="fab fa-instagram"></i></p>
                        </a>
                        <a href="">
                            <p><i class="fab fa-youtube"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        function changePlaceholder(input) {
            input.placeholder = "Nhập từ khóa tìm kiếm";
        }

        function restorePlaceholder(input) {
            input.placeholder = "Bạn tìm gì";
        }
    </script>


</body>

</html>