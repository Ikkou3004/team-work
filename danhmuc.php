<?php
    function insert_danhmuc($tenloai) {
        $sql = "INSERT INTO catagory(tenloai) values ('$tenloai')";
                    pdo_execute($sql);
    }
    function delete_danhmuc($id) {
        $sql ="delete from catagory where id=".$_GET['id'];
                    pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql = "select * from catagory order by id desc";
                $listdanhmuc = pdo_query($sql);
                return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql ="select * from catagory where id=".$_GET['id'];
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$tenloai){
        $sql = "update catagory set tenloai='".$tenloai."' where id=".$id;
                            pdo_execute($sql);
    }
?>