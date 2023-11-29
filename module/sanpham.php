<?php
function sanpham_insert($ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, $anh, $anh1, $anh2, $anh3, $anh4) {
    $sql = "INSERT INTO san_pham (ten_san_pham, ma_loai, mo_ta, ngay_them, don_gia, giam_gia, so_luong, thuong_hieu, luot_xem, trang_thai, anh, anh1, anh2, anh3, anh4) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    pdo_execute($sql, $ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, 0, $anh, $anh1, $anh2, $anh3, $anh4);
}
function sanpham_list(){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.trang_thai = 0";
    $data = pdo_query($sql);
    return $data;
}
function sanpham_get_byid($ma_san_pham){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE ma_san_pham=?";
    $data = pdo_execute_single($sql, $ma_san_pham);
    return $data;
}
function sanphamct_get_byid($ma_san_pham){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE ma_san_pham=?";
    $data = pdo_query($sql, $ma_san_pham);
    return $data;
}

function sanpham_update($ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, $anh, $anh1, $anh2, $anh3, $anh4, $ma_san_pham){
    $sql = "UPDATE san_pham SET ten_san_pham=?, ma_loai=?, mo_ta=?, ngay_them=?, don_gia=?, giam_gia=?, so_luong=?, thuong_hieu=?, luot_xem=?, anh=?, anh1=?, anh2=?, anh3=?, anh4=? WHERE ma_san_pham=?";
    try {
        pdo_execute($sql, $ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, $anh, $anh1, $anh2, $anh3, $anh4, $ma_san_pham);
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

}
function sanpham_noimg($ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, $ma_san_pham){    
    $sql = "UPDATE san_pham SET ten_san_pham=?, ma_loai=?, mo_ta=?, ngay_them=?, don_gia=?, giam_gia=?, so_luong=?, thuong_hieu=?, luot_xem=? WHERE ma_san_pham=?";
    pdo_query($sql, $ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, $ma_san_pham);
}
function sanpham_softdel($ma_san_pham){
    $sql = "UPDATE san_pham SET trang_thai=1 WHERE ma_san_pham=?";
   pdo_query($sql, $ma_san_pham);
   


}
function  sanpham_load_ctbl($ma_san_pham){
    $sql = "SELECT * FROM binh_luan JOIN khach_hang ON binh_luan.ma_khach_hang = khach_hang.ma_khach_hang WHERE ma_san_pham=? AND binh_luan.trang_thai = 0";
    $data = pdo_query($sql, $ma_san_pham);
    return $data;
}
function sanpham_recover($ma_san_pham){
    $sql = "UPDATE san_pham SET trang_thai=? WHERE ma_san_pham=?";
    pdo_execute($sql, 0, $ma_san_pham);
}       
function sanpham_delete($ma_san_pham){
    $sql = "DELETE FROM san_pham WHERE ma_san_pham=?";
    pdo_execute($sql, $ma_san_pham);
}
function sanpham_softdel_list(){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.trang_thai = 1";
    $data = pdo_query($sql);
    return $data;
}
function sanpham_count_ctbl($ma_san_pham){
    $sql = "SELECT COUNT(*) FROM binh_luan WHERE ma_san_pham=? AND trang_thai = 0";
    $data = pdo_query_value($sql, $ma_san_pham);
    return $data;
}
function sanpham_load_by_dm($ma_loai){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ma_loai = ? AND san_pham.trang_thai = 0 LIMIT 10";
    $data = pdo_query($sql, $ma_loai);
    return $data;

}
function sanpham_add_luotxem($ma_san_pham){
    $sql = "UPDATE san_pham SET luot_xem = luot_xem + 1 WHERE ma_san_pham = ?";
    pdo_execute($sql, $ma_san_pham);

}
function list_sanpham_by_danhmuc($ma_loai){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ma_loai = ? AND san_pham.trang_thai = 0";
    $data = pdo_query($sql, $ma_loai);
    return $data;

}
function list_sanpham_by_danhmuc_by_luotxem($ma_loai){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ma_loai = ? AND san_pham.trang_thai = 0 ORDER BY san_pham.luot_xem DESC";
    $data = pdo_query($sql, $ma_loai);
    return $data;


}
function list_sanpham_by_danhmuc_by_gia_hightolow($ma_loai){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ma_loai = ? AND san_pham.trang_thai = 0 ORDER BY san_pham.giam_gia DESC";
    $data = pdo_query($sql, $ma_loai);
    return $data;
}
function list_sanpham_by_danhmuc_by_gia_lowtohigh($ma_loai){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ma_loai = ? AND san_pham.trang_thai = 0 ORDER BY san_pham.giam_gia ASC";
    $data = pdo_query($sql, $ma_loai);
    return $data;
} 
function list_sanpham_by_danhmuc_by_new($ma_loai){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ma_loai = ? AND san_pham.trang_thai = 0 ORDER BY san_pham.ngay_them DESC";
    $data = pdo_query($sql, $ma_loai);
    return $data;
}
function san_pham_search($key){
    if(empty($key)){
        return sanpham_list();
    }
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ten_san_pham LIKE '%$key%' AND san_pham.trang_thai = 0";
    $data = pdo_query($sql);
    return $data;
}
function san_pham_fliter_by_luotxem($key){
    if(empty($key)){
        return sanpham_list();
    }
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ten_san_pham LIKE '%$key%' AND san_pham.trang_thai = 0 ORDER BY san_pham.luot_xem DESC";
    $data = pdo_query($sql);
    return $data;
}
function san_pham_fliter_by_gia_higtolow($key){
    if(empty($key)){
        return sanpham_list();
    }
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ten_san_pham LIKE '%$key%' AND san_pham.trang_thai = 0 ORDER BY san_pham.giam_gia DESC";
    $data = pdo_query($sql);
    return $data;
}
function san_pham_fliter_by_gia_lowtohigh($key){
    if(empty($key)){
        return sanpham_list();
    }
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ten_san_pham LIKE '%$key%' AND san_pham.trang_thai = 0 ORDER BY san_pham.giam_gia ASC";
    $data = pdo_query($sql);
    return $data;
}
function san_pham_fliter_by_view($key){
    if(empty($key)){
        return sanpham_list();
    }
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ten_san_pham LIKE '%$key%' AND san_pham.trang_thai = 0 ORDER BY san_pham.luot_xem DESC";
    $data = pdo_query($sql);
    return $data;
}
function san_pham_fliter_by_new($key){
    if(empty($key)){
        return sanpham_list();
    }
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ten_san_pham LIKE '%$key%' AND san_pham.trang_thai = 0 ORDER BY san_pham.ngay_them DESC";
    $data = pdo_query($sql);
    return $data;
}
function san_pham_fliter_by_luot_mua($key){
    if(empty($key)){
        return sanpham_list();
    }
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai JOIN chi_tiet_don_hang ON san_pham.ma_san_pham = chi_tiet_don_hang.ma_san_pham WHERE san_pham.ten_san_pham LIKE '%$key%' AND san_pham.trang_thai = 0 GROUP BY san_pham.ma_san_pham ORDER BY SUM(chi_tiet_don_hang.so_luong) DESC";
    $data = pdo_query($sql);
    return $data;
}

function list_sanpham_by_danhmuchot($ma_loai){
   if(is_numeric($ma_loai)){
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.ma_loai = ? AND san_pham.trang_thai = 0 LIMIT 10";
   } else{
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai WHERE san_pham.trang_thai = 0";
   }
    $data = pdo_query($sql, $ma_loai);
    return $data;

}
function drop_so_luong($ma_san_pham, $so_luong){
    $sql = "UPDATE san_pham SET so_luong = so_luong - ? WHERE ma_san_pham = ?";
    pdo_execute($sql, $so_luong, $ma_san_pham);
}
// function hanghoa_delete_byid($ma_hanghoa_list){
//  // Lấy danh sách mã loại từ tham số truyền vào qua URL
//     $ma_hanghoa_list = explode(',', $ma_hanghoa_list);
//     foreach ($ma_hanghoa_list as $ma_hanghoa) {
//         $sql = "DELETE FROM hang_hoa WHERE ma_hang_hoa=?";
//         if(is_numeric($ma_hanghoa)){
//             pdo_execute($sql, $ma_hanghoa);
//         }
        
//     }
//     header('location:index.php?act=listhh');   
   
// }


?>