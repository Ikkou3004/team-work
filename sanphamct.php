<title>Chi tiết sản phẩm</title>

<style>
    .chitietsanpham {
        margin: 0 140px;


    }

    .vertical-div1 {
        width: 1200px;
        /* Set the width to 100% */
        height: 300px;
        /* Set the height as per your requirement */

        margin-bottom: 10px;
        /* Add some margin between the divs */
        border: 1px solid #ccc;
        /* Add a border for better visibility */
    }

    .vertical-div .boxtillte {
        background-color: antiquewhite;
    }

    .boxcontent img {
        width: 490px;
        height: 650px;
    }

    .boxcontent {
        display: flex;
    }
</style>





<div class="move">
    <h5> <a href="index.php">Trang chủ</a> <span>|</span><?= $name ?></h4>

</div>
<div id="ctsp_page">
    <div class="chitietsanpham">

        <div class="vertical-div-1">
            <?php
            extract($onesp);
            ?>
            <div class="boxtillte"><?= $name ?></div>
            <div class="boxcontent">
                <?php
                $hinh = $img_path . $img;
                echo '<img src="' . $hinh . '" alt=""><br>';
                echo '  <p>' . $price . '</p>
                                    <p>' . $mota . '</p>';
                ?>
            </div>
        </div>
        <div class="vertical-div">
            <div class="boxtillte">Bình luận</div>
        </div>
        <div class="vertical-div">
            <div class="boxtillte">Sản phẩm cùng loại</div>
            <div class="boxcontent">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
        <p></p>
        <p></p>

    </div>
</div>