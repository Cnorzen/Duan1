<?php
function hanghoa_insert($ten_hang_hoa, $don_gia, $giam_gia, $img, $ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai){
    $sql = "INSERT INTO hang_hoa(ten_hang_hoa, don_gia, giam_gia, img, ngay_nhap, mo_ta, dac_biet, so_luot_xem, ma_loai) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten_hang_hoa, $don_gia, $giam_gia, $img, $ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai);
}
function hanghoa_delete_byid($ma_hanghoa_list){
 // Lấy danh sách mã loại từ tham số truyền vào qua URL
    $ma_hanghoa_list = explode(',', $ma_hanghoa_list);
    foreach ($ma_hanghoa_list as $ma_hanghoa) {
        $sql = "DELETE FROM hang_hoa WHERE ma_hang_hoa=?";
        if(is_numeric($ma_hanghoa)){
            pdo_execute($sql, $ma_hanghoa);
        }
        
    }
    header('location:index.php?act=listhh');   
   
}

function hanghoa_get_byid($ma_hang_hoa){
    $sql= "SELECT * FROM hang_hoa JOIN loai_hang ON hang_hoa.ma_loai=loai_hang.ma_loai WHERE ma_hang_hoa='$ma_hang_hoa'";
    return pdo_execute_single($sql);
}
function hang_hoa_list(){
    $sql = "SELECT * FROM hang_hoa JOIN loai_hang ON hang_hoa.ma_loai=loai_hang.ma_loai ORDER BY ma_hang_hoa DESC";
    return pdo_execute($sql);
}
function hangghoa_loadall($keywords, $ma_loai) {
    $sql = "SELECT * FROM hang_hoa
            JOIN loai_hang ON hang_hoa.ma_loai = loai_hang.ma_loai
            WHERE 1";

    if ($keywords != "") {
        $sql .= " AND hang_hoa.ten_hang_hoa LIKE '%$keywords%'";
    }

    if ($ma_loai > 0) {
        $sql .= " AND hang_hoa.ma_loai = '$ma_loai'";
    }

    $sql .= " ORDER BY hang_hoa.ma_hang_hoa ASC";

    return pdo_execute($sql);
}

function hanghoa_delete($ma_hang_hoa){
    $sql="DELETE FROM hang_hoa WHERE ma_hang_hoa='$ma_hang_hoa'";
    pdo_execute($sql);
}
function hang_hoa_update($ma_hang_hoa,$ten_hang_hoa,$don_gia,$giam_gia,$img,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai){
    $sql="UPDATE hang_hoa SET ten_hang_hoa='$ten_hang_hoa',don_gia='$don_gia',giam_gia='$giam_gia',img='$img',ngay_nhap='$ngay_nhap',mo_ta='$mo_ta',dac_biet='$dac_biet',so_luot_xem='$so_luot_xem',ma_loai='$ma_loai' WHERE ma_hang_hoa='$ma_hang_hoa'";
    pdo_execute($sql);
}
function hang_hoa_update_noimg($ma_hang_hoa,$ten_hang_hoa,$don_gia,$giam_gia,$ngay_nhap,$mo_ta,$dac_biet,$so_luot_xem,$ma_loai){
    $sql="UPDATE hang_hoa SET ten_hang_hoa='$ten_hang_hoa',don_gia='$don_gia',giam_gia='$giam_gia',ngay_nhap='$ngay_nhap',mo_ta='$mo_ta',dac_biet='$dac_biet',so_luot_xem='$so_luot_xem',ma_loai='$ma_loai' WHERE ma_hang_hoa='$ma_hang_hoa'";
    pdo_execute($sql);
}
function hang_hoa_loadsp_home(){
   $sql="SELECT * FROM hang_hoa ORDER BY ma_hang_hoa DESC LIMIT 0,9";
   $listsp = pdo_execute($sql);
    return $listsp;
}
function hang_hoa_by10_view(){
    $sql="SELECT * FROM hang_hoa ORDER BY so_luot_xem DESC LIMIT 0,10";
    $listsp = pdo_execute($sql);
     return $listsp;
}
function sanpham_add_view($ma_hang_hoa){
    $sql="UPDATE hang_hoa SET so_luot_xem=so_luot_xem+1 WHERE ma_hang_hoa='$ma_hang_hoa'";
    pdo_execute($sql);
}
function get_hanghoa_by_ma_loai($ma_loai){
    $sql="SELECT * FROM hang_hoa WHERE ma_loai='$ma_loai'";
    return pdo_execute($sql);
}
function hanghoa_loaddm($ma_loai){
    if($ma_loai > 0){
        $sql="SELECT * FROM hang_hoa WHERE ma_loai='$ma_loai'";
        $iddm = pdo_query($sql);
        return $iddm;
    } else {
        return "";
    }
}
?>