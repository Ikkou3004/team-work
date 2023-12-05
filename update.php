<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="form-tillte">
                    <h3>Cập nhật sản phẩm</h3>
                </div>
                <div class="form-input">
                    <form action="index.php?act=updatedm" method="post">
                        <div class="row">
                            <h5>Mã loại</h5>
                            <input type="text" name="maloai" >
                            
                        </div>
                        <div class="row">
                           
                            <h5>Tên loại</h5>
                            <input type="text" name="tenloai" value="<?php if(isset($tenloai) && ($tenloai!="")) echo $tenloai; ?>">
                        </div>
                        <div class="row">
                            <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id; ?>">
                            <input type="submit" name="capnhat" value="Cập nhật">
                            <input type="reset"  name="lammoi" value="Làm mới">
                            <a href="index.php?act=listdm"><input type="button" name="listdm" value="Danh sách"></a>
                        </div>
                        <?php
                            if(isset($thongbao) && $thongbao!="" ){
                                echo $thongbao;
                            }
                        ?>
                    </form>
                </div>