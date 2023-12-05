 <!-- Các mục trong sidebar -->
 <style>
    
    .sanphamyeuthich h4 {
        width: 170px;
        
        padding-bottom: 5px;
    }
    .sanphamyeuthich h4 a {
        color: black;
    }
    .sanphamyeuthich a img{
        width: 40px;
        height: 50px;
        padding-bottom: 5px;
    }
    .spyeuthich{
        display: flex;
    }
    .spyeuthich p{
        margin-top: 10px;
        color: black;
        font-size: small;
    }
 </style>
 
 
                <?php
                    foreach ($dsdm as $danhmuc) {
                        extract($danhmuc);
                        $linkdm = "index.php?act=sanpham&iddm=".$id;
                        echo '<div class="category";
                        
                        <h4><a href="'.$linkdm.'">'.$tenloai.'</a></h4>
                        
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

                </div> -->
                <div class="sanphamyeuthich">
                    <h4><a href="">Sản phẩm yêu thích</a></h4>
                    <?php
                    // foreach ($dstop10 as $sp) {
                    //     extract($sp);
                    //     $linksp = "index.php?act=sanphamct&idsp=".$id;
                    //     $hinh = $img_path.$img;
                    //     echo '<!-- <div class="spyeuthich">
                    //    <img src="'.$hinh.'" alt="">
                    //     <a href="'.$linksp.'"><p>'.$name.'</p></a>
                    //     </div> -->';
                    // }
                    foreach ($dstop10 as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        $hinh = $img_path.$img;
                        echo '<div class="spyeuthich">
                        
                        <a href=""><img src="'.$hinh.'" alt="Ảnh Sản Phẩm" class="product-image" width="300px"></a>
                        <a href="'.$linksp.'"><p class="product-name">'.$name.'</p></a>
                        
                        
                    </div>';
                    }
                    ?>
                    <!-- <div class="spyeuthich">
                    <a href=""><img src="/img/jean.jpg" alt=""></a>
                    <a href=""><p>Quần jean</p></a>
                    </div> -->
                </div>
                <a href=""></a>