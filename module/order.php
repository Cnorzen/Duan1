<?php
function donhang_get_chi_tiet($ma_don_hang){
    $sql = "SELECT 
    chi_tiet_don_hang.ma_don_hang,
    san_pham.ten_san_pham,
    san_pham.thuong_hieu,
    san_pham.anh,
    don_hang.ngay_dat_hang,
    don_hang.trang_thai_don,
    don_hang.ma_khach_hang,
    don_hang.ghi_chu,
    don_hang.brand,
    don_hang.last4,
    don_hang.id_ch,
    don_hang.ghi_chu_kh,
    don_hang.phuong_thuc_thanh_toan,
    chi_tiet_don_hang.ma_san_pham,
    chi_tiet_don_hang.so_luong,
    chi_tiet_don_hang.don_gia,
    khach_hang.ten_khach_hang,
    khach_hang.dia_chi,
    khach_hang.sdt,
    khach_hang.email,
    khach_hang.avt,
    SUM(chi_tiet_don_hang.so_luong * chi_tiet_don_hang.don_gia) AS tong_gia_san_pham
    FROM chi_tiet_don_hang
    JOIN don_hang ON chi_tiet_don_hang.ma_don_hang = don_hang.ma_don_hang
    JOIN san_pham ON chi_tiet_don_hang.ma_san_pham = san_pham.ma_san_pham
    JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang
    WHERE chi_tiet_don_hang.ma_don_hang = ?
    GROUP BY chi_tiet_don_hang.ma_san_pham;";
    $data = pdo_query($sql, $ma_don_hang);
    return $data;
}
function donhang_get_toal_chi_tiet($ma_don_hang){
    $sql = "SELECT 
    chi_tiet_don_hang.ma_don_hang,
    SUM(chi_tiet_don_hang.so_luong * chi_tiet_don_hang.don_gia) AS tong_gia_don_hang
    FROM chi_tiet_don_hang
    WHERE chi_tiet_don_hang.ma_don_hang = ?
    GROUP BY chi_tiet_don_hang.ma_don_hang;";
    $data = pdo_query($sql, $ma_don_hang);
    return $data;
}
function donhang_list(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang";
    $data = pdo_query($sql);
    return $data;
}
function donhang_list_by_customer($ma_khach_hang){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE don_hang.ma_khach_hang = ? ORDER BY don_hang.ngay_dat_hang DESC";
    $data = pdo_query($sql, $ma_khach_hang);
    return $data;
}  
function donhang_set_cancel($ma_don_hang){
    $sql = "UPDATE don_hang SET trang_thai_don = '3' WHERE ma_don_hang = ?";
    pdo_execute($sql, $ma_don_hang);
} 
function donhang_set_paid($ma_don_hang){
    $sql = "UPDATE don_hang SET trang_thai_don = '1' WHERE ma_don_hang = ?";
    pdo_execute($sql, $ma_don_hang);
}
function donhang_set_unpaid($ma_don_hang){
    $sql = "UPDATE don_hang SET trang_thai_don = '2' WHERE ma_don_hang = ?";
    pdo_execute($sql, $ma_don_hang);
}
function donhang_set_verify($ma_don_hang){
    $sql = "UPDATE don_hang SET trang_thai_don = '0' WHERE ma_don_hang = ?";
    pdo_execute($sql, $ma_don_hang);
}
function donhang_set_ghichu($ma_don_hang, $ghi_chu){
    $sql = "UPDATE don_hang SET ghi_chu = ? WHERE ma_don_hang = ?";
    pdo_execute($sql, $ghi_chu, $ma_don_hang);
}
function donhang_list_deleted(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE don_hang.trang_thai_don = '3'";
    $data = pdo_query($sql);
    return $data;
}
function donhang_list_paid(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE don_hang.trang_thai_don = '1'  ORDER BY don_hang.ma_don_hang DESC  ";
    $data = pdo_query($sql);
    return $data;
}
function donhang_list_unpaid(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE don_hang.trang_thai_don = '2'  ORDER BY don_hang.ma_don_hang DESC  ";
    $data = pdo_query($sql);
    return $data;
}
function donhang_list_verify(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE don_hang.trang_thai_don = '0'  ORDER BY don_hang.ma_don_hang DESC ";
    $data = pdo_query($sql);
    return $data;
}
function donhang_list_by_date(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang ORDER BY don_hang.ngay_dat_hang DESC";
    $data = pdo_query($sql);
    return $data;
}
function donhang_list_by_month($month){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE MONTH(don_hang.ngay_dat_hang) = ?";
    $data = pdo_query($sql, $month);
    return $data;
}
function donhang_list_by_year($year){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE YEAR(don_hang.ngay_dat_hang) = ?";
    $data = pdo_query($sql, $year);
    return $data;
}   

function donhang_create($ma_khach_hang, $ghi_chu_kh, $phuong_thuc_thanh_toan){
    $sql = "INSERT INTO don_hang(ma_khach_hang, ghi_chu_kh, phuong_thuc_thanh_toan) VALUES (?, ?, ?)";
    pdo_execute($sql, $ma_khach_hang, $ghi_chu_kh, $phuong_thuc_thanh_toan);
}
function donhang_insert_ctdonhang($ma_don_hang, $ma_san_pham, $so_luong, $don_gia){
    $sql = "INSERT INTO chi_tiet_don_hang(ma_don_hang, ma_san_pham, so_luong, don_gia) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $ma_don_hang, $ma_san_pham, $so_luong, $don_gia);
}
function donhang_update_trangthai($ma_don_hang, $trang_thai_don){
    $sql = "UPDATE don_hang SET trang_thai_don = ? WHERE ma_don_hang = ?";
    pdo_execute($sql, $trang_thai_don, $ma_don_hang);
}
function donhang_get_trangthai($ma_don_hang){
    $sql = "SELECT trang_thai_don FROM don_hang WHERE ma_don_hang = ?";
    $data = pdo_execute_single($sql, $ma_don_hang);
    return $data;
}
function donhang_update_idch($ma_don_hang, $id_ch){
    $sql = "UPDATE don_hang SET id_ch = ? WHERE ma_don_hang = ?";
    pdo_execute($sql, $id_ch, $ma_don_hang);
}
function donhang_update_brand($ma_don_hang, $brand){
    $sql = "UPDATE don_hang SET brand= ? WHERE ma_don_hang = ?";
    pdo_execute($sql, $brand, $ma_don_hang);
}
function donhang_update_last4($ma_don_hang, $brand){
    $sql = "UPDATE don_hang SET last4= ? WHERE ma_don_hang = ?";
    pdo_execute($sql, $brand, $ma_don_hang);
}
?>