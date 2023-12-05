<div class="form-tillte">
                    <h3>Quản lý danh mục</h3>
                </div>
                <div class="form-input">
                    <form action="" method="post">
                       
                        <div class="row">
                           
                           <table>
                                <tr>
                                    <th></td>
                                    <th>Mã loại</td>
                                    <th>Tên loại</td>
                                    <th></td>

                                </tr>
                                <?php
                                    foreach ($listdanhmuc as $catagory) {
                                        extract($catagory);
                                        $suadm="index.php?act=suadm&id=".$id;
                                        $xoadm="index.php?act=xoadm&id=".$id;


                                        echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$tenloai.'</td>
                                        <td> <a href="'.$suadm.'"><input type="button" value="Sửa"></a>    <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
    
                                    </tr>';
                                    }
                                ?>
                                <a href=""></a>
                           </table>
                        </div>
                        <div class="row">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="bỏ chọn tất cả">
                            <a href=""><input type="button" value="Xóa danh mục"></a>
                            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                        </div>
                    </form>
                </div>