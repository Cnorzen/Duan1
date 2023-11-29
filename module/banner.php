<?php
function banner_list(){
    $sql = "SELECT * FROM banner";
    $data = pdo_query($sql);
    return $data;
}
function banner_insert($ten_banner,$anh_banner,$link_banner,$id_banner){
    //UPDATE `banner` SET `ten_banner` = 'banner12', `hinh_anh` = 'nobanne2qr.jpg', `lien_ket` = '-3' WHERE `banner`.`id_banner` = 1;
    $sql = "UPDATE `banner` SET `ten_banner` = ?, `hinh_anh` = ?, `lien_ket` = ? WHERE `banner`.`id_banner` = ?;";
    pdo_query($sql,$ten_banner,$anh_banner,$link_banner,$id_banner);
}



?>