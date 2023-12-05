<div class="form-tillte">
                    <h3>Thêm loại hàng</h3>
                </div>
                <div class="form-input">
                    <form action="index.php?act=adddm" method="post">
                        <div class="row">
                            <h5>Mã loại</h5>
                            <input type="text" name="maloai">
                            
                        </div>
                        <div class="row">
                           
                            <h5>Tên loại</h5>
                            <input type="text" name="tenloai">
                        </div>
                        <div class="row">
                            <input type="submit" name="themmoi" value="Thêm">
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