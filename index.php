<?php
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";

//controler danh muc
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "../admin/danhmuc/add.php";
            break;
        case 'listdm':

            $listdanhmuc = loadall_danhmuc();
            include "../admin/danhmuc/list.php";
            break;


        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }


            $listdanhmuc = loadall_danhmuc();
            include "../admin/danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {;
                $dm = loadone_danhmuc($_GET['id']);
            }
            include '../admin/danhmuc/update.php';
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "../admin/danhmuc/list.php";
            break;

            // controler san pham
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $motasp = $_POST['motasp'];
                $anhsp = $_FILES['anhsp']['name'];
                $target_dir = "../uploads";
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_sanpham($tensp, $giasp, $anhsp, $motasp, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            // var_dump($listdanhmuc);
            include "../admin/sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['clickgo']) && ($_POST['clickgo'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "../admin/sanpham/list.php";
            break;


        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }


            $listsanpham = loadall_sanpham("", 0);
            include "../admin/sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include '../admin/sanpham/update.php';
            break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $anhsp = $_FILES['anhsp']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {

                } else {
                }
                
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $anhsp);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "../admin/sanpham/list.php";
            break;
    }
} else {
    include 'home.php';
}

include "footer.php";
