<?php
//add san pham admin
function insert_sanpham($tensp, $giasp, $anhsp, $motasp, $iddm)
{
    $sql = "insert into sanpham(name,price,img,mota,iddm) values ('$tensp','$giasp','$anhsp','$motasp','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}

function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,4";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// home san pham moi
function loadall_sanpham_hangmoi()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,4";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw = "", $iddm = 0)
{


    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '̀$" . $kyw . "$' ";
    }
    if ($iddm > 0) {
        $sql .= " and iddm='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm)
{
    if($iddm > 0){
    $sql = "select * from catagory where id=".$iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $tenloai;
    }else{
        return "";
    }
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id,$iddm)
{
    $sql = "select * from sanpham where iddm=".$iddm." AND id <>".$id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $anhsp)
{
    if ($anhsp != "") {
        $sql = "update sanpham set iddm='" . $iddm . "',name='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "',img='" . $anhsp . "' where id= " . $id;
    } else {
        $sql = "update sanpham set iddm='" . $iddm . "',name='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "' where id= " . $id;
        pdo_execute($sql);
    }
}
