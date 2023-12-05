<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/phukien.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/script.js"></script>

    <title>Hàng mới</title>
</head>

<body>
    <div class="container-fluid">


        <div class="move">
            <h5> <a href="index.php">Trang chủ</a> <span>|</span>Hàng mới</h4>


        </div>
        <div class="banner">
            <img src="img/anh-slide-1.jpg" alt="" width="1235px" height="500px">
        </div>
        <div class="hangmoive">
            <h5><a href="index.php?act=hangmoi">Hàng mới về</a></h5>
            <h5>Bộ lọc</h5>
            <div class="bars-icon">&#9776;</div>
        </div>
        <div class="ao">
            <div id="sidebar">
                <!-- Các mục trong sidebar -->
                <?php
                    foreach ($dsdm as $danhmuc) {
                        extract($danhmuc);
                        $linkdm = "index.php?act=sanpham&iddm=".$id;
                        $khuyenmai = "Khuyến mãi";
                        echo '<div class="category";
                       
                        <li><a href="'.$linkdm.'">'.$tenloai.'</a></li>
                        
                    </div>';
                    }
                ?>
                <!-- <div class="category">
                    <h4><a href="">Khuyến mãi</a></h4>
                    <ul class="subcategory">
                        <li><a href="#">Áo Sơ Mi</a></li>
                        <li><a href="#">Áo Polo-T shirt</a></li>
                        <li><a href="#">Quần Kaki</a></li>
                        <li><a href="#">Áo Sơmi</a></li>

                    </ul>
                </div>

                <div class="category">
                    <h4><a href="">Áo</a></h4>
                    <ul class="subcategory">
                        <li><a href="#">Blazer</a></li>
                        <li><a href="#">Áo Thun</a></li>
                        <li><a href="#">Áo Sơ Mi</a></li>
                        <li><a href="#">Áo T-shirt</a></li>

                    </ul>
                </div>

                <div class="category">
                    <h4><a href="">Quần</a></h4>
                    <ul class="subcategory">
                        <li><a href="#">Quần Short</a></li>
                        <li><a href="#">Quần Kaki</a></li>
                        <li><a href="#">Quần Jeam</a></li>
                        <li><a href="#">Quần jogger</a></li>

                    </ul>
                </div>

                <div class="category">
                    <h4><a href="">Phụ kiên</a></h4>
                    <ul class="subcategory">
                        <li><a href="#">Nhẫn</a></li>
                        <li><a href="#">Lắc Tay</a></li>
                        <li><a href="#">Thắt lưng</a></li>
                        <li><a href="#">Cà vạt</a></li>
                        <li><a href="#">Ví da</a></li>

                    </ul>

                </div>
                <div class="sanphambanchay">
                    <h4><a href="">Sản phẩm bán chạy</a></h4>
                </div> -->
            </div>

            <div id="products">
                <!-- Danh sách sản phẩm -->
                <ul class="slide-product">
                <?php
                    foreach ($sanphammoi as $sp) {
                        extract($sp);
                        $hinh = $img_path.$img;
                        echo '<div class="product">
                        
                        <a href=""><img src="'.$hinh.'" alt="Ảnh Sản Phẩm" class="product-image" width="300px"></a>
                        <p class="product-name">'.$name.'</p>
                        <pc class="product-price"> '.$price.'đ</p>
                    </div>';
                    }
                ?>
                    <!-- <li>
                        <div class="product">
                            <img src="img/quan-jean-rach-nam-5-1.jpg" alt="Ảnh Sản Phẩm" class="product-image" width="300px">
                            <div class="component">
                                <p class="product-name">Quần JEAN </p>
                                <p class="heart-icon" onclick="toggleHeart(event)">&#10084;</p>
                            </div>
                            <p class="product-price">1.300.000 ₫</p>
                        </div>
                    </li>
                    <li>
                        <div class="product">
                            <img src="img/quan-jean-rach-nam-5-1.jpg" alt="Ảnh Sản Phẩm" class="product-image" width="300px">
                            <div class="component">
                                <p class="product-name">Quần JEAN </p>
                                <p class="heart-icon" onclick="toggleHeart(event)">&#10084;</p>
                            </div>
                            <p class="product-price">1.300.000 ₫</p>
                        </div>
                    </li>

                    <li>
                        <div class="product">
                            <img src="img/quan-jean-rach-nam-5-1.jpg" alt="Ảnh Sản Phẩm" class="product-image" width="300px">
                            <div class="component">
                                <p class="product-name">Quần JEAN </p>
                                <p class="heart-icon" onclick="toggleHeart(event)">&#10084;</p>
                            </div>
                            <p class="product-price">1.300.000 ₫</p>
                        </div>
                    </li>

                    <li>
                        <div class="product">
                            <img src="img/quan-jean-rach-nam-5-1.jpg" alt="Ảnh Sản Phẩm" class="product-image" width="300px">
                            <div class="component">
                                <p class="product-name">Quần JEAN </p>
                                <p class="heart-icon" onclick="toggleHeart(event)">&#10084;</p>
                            </div>
                            <p class="product-price">1.300.000 ₫</p>
                        </div>
                    </li>

                    <li>
                        <div class="product">
                            <img src="img/quan-jean-rach-nam-5-1.jpg" alt="Ảnh Sản Phẩm" class="product-image" width="300px">
                            <div class="component">
                                <p class="product-name">Quần JEAN </p>
                                <p class="heart-icon" onclick="toggleHeart(event)">&#10084;</p>
                            </div>
                            <p class="product-price">1.300.000 ₫</p>
                        </div>
                    </li>

                    <li>
                        <div class="product">
                            <img src="img/quan-jean-rach-nam-5-1.jpg" alt="Ảnh Sản Phẩm" class="product-image" width="300px">
                            <div class="component">
                                <p class="product-name">Quần JEAN </p>
                                <p class="heart-icon" onclick="toggleHeart(event)">&#10084;</p>
                            </div>
                            <p class="product-price">1.300.000 ₫</p>
                        </div>
                    </li>

                    <li>
                        <div class="product">
                            <img src="img/quan-jean-rach-nam-5-1.jpg" alt="Ảnh Sản Phẩm" class="product-image" width="300px">
                            <div class="component">
                                <p class="product-name">Quần JEAN </p>
                                <p class="heart-icon" onclick="toggleHeart(event)">&#10084;</p>
                            </div>
                            <p class="product-price">1.300.000 ₫</p>
                        </div>
                    </li>

                    <li>
                        <div class="product">
                            <img src="img/quan-jean-rach-nam-5-1.jpg" alt="Ảnh Sản Phẩm" class="product-image" width="300px">
                            <div class="component">
                                <p class="product-name">Quần JEAN </p>
                                <p class="heart-icon" onclick="toggleHeart(event)">&#10084;</p>
                            </div>
                            <p class="product-price">1.300.000 ₫</p>
                        </div>
                    </li>

                    <li>
                        <div class="product">
                            <img src="img/quan-jean-rach-nam-5-1.jpg" alt="Ảnh Sản Phẩm" class="product-image" width="300px">
                            <div class="component">
                                <p class="product-name">Quần JEAN </p>
                                <p class="heart-icon" onclick="toggleHeart(event)">&#10084;</p>
                            </div>
                            <p class="product-price">1.300.000 ₫</p>
                        </div>
                    </li> -->



                </ul>
                <div class="phantrang">
                    <p>1 2 3 4 5 ></p>
                </div>
            </div>

        </div>

    </div>

</body>
<script>
    
</script>

</html>