<?php 
// function load_static_hanghoa_list(){
//  //thống kê số lượng, giá nhỏ nhất ,giá lớn nhất và giá trung bình
//     $sql = "SELECT hang_hoa.ma_loai, COUNT(*) AS so_luong, MIN(hang_hoa.giam_gia) AS gia_min, MAX(hang_hoa.giam_gia) AS gia_max, AVG(hang_hoa.giam_gia) AS gia_avg, ten_loai
//     FROM hang_hoa
//     JOIN loai_hang ON hang_hoa.ma_loai = loai_hang.ma_loai
//     GROUP BY hang_hoa.ma_loai
//     ORDER BY so_luong DESC
//     ";
//     $result = pdo_query($sql);
//     return $result;
    


// }
function count_hanghoa(){
    $sql = "SELECT loai_hang.ma_loai, COUNT(*) AS so_luong_hang, loai_hang.ten_loai
    FROM san_pham
    JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai
    GROUP BY loai_hang.ma_loai;";
    $result = pdo_query($sql);
    return $result;
}
function toal_all_active_orders(){
    $sql = "SELECT SUM(so_luong * don_gia) AS tong_don_hang_da FROM chi_tiet_don_hang JOIN don_hang ON don_hang.ma_don_hang = chi_tiet_don_hang.ma_don_hang WHERE don_hang.trang_thai_don <> 3";
    $result = pdo_execute_single ($sql);
    return $result;
}
function toal_all_orders(){
    
    $sql = "SELECT SUM(so_luong * don_gia) AS tong_gia_don_hang FROM chi_tiet_don_hang";
    $result = pdo_execute_single ($sql);
    return $result;
}
function count_toal_orders(){
    $sql = "SELECT COUNT(*) AS so_luong_don_hang FROM don_hang;";
    $result = pdo_execute_single ($sql);
    return $result;
}
function count_toal_active_orders(){
    $sql = "SELECT COUNT(*) AS so_luong_don_hang_tra FROM don_hang WHERE trang_thai_don <> 3;";
    $result = pdo_execute_single ($sql);
    return $result;
}
function admin_count_toal_customers(){
    $sql = "SELECT COUNT(*) AS tong_so_luong_khach_hang FROM khach_hang WHERE quyen = '3' AND xoa = '0'";
    $result = pdo_execute_single ($sql);
    return $result;
}
function admin_count_toal_active_customers(){
    $sql = "SELECT COUNT(*) AS so_luong_khach_hang FROM khach_hang WHERE trang_thai = 0;";
    $result = pdo_execute_single ($sql);
    return $result;
}
function admin_count_toal_inactive_customers(){
    $sql = "SELECT COUNT(*) AS so_luong_khach_hang_huy FROM khach_hang WHERE trang_thai = 1;";
    $result = pdo_execute_single ($sql);
    return $result;
}
function price_caculator(){
    $sql="SELECT san_pham.ma_san_pham, MIN(san_pham.giam_gia) AS gia_min, MAX(san_pham.giam_gia) AS gia_max, AVG(san_pham.giam_gia) AS gia_avg, ten_loai
    FROM san_pham
    JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai
    GROUP BY san_pham.ma_loai
    ORDER BY so_luong DESC";
    $result = pdo_query($sql);
    return $result;

}
function list_success_orders(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE don_hang.trang_thai_don = 1";
    $result = pdo_query($sql);
    return $result;
}
function list_cancel_orders(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE don_hang.trang_thai_don = 3";
    $result = pdo_query($sql);
    return $result;
}
function list_pending_orders(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE don_hang.trang_thai_don = 0";
    $result = pdo_query($sql);
    return $result;
}
function list_unpaid_orders(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang WHERE don_hang.trang_thai_don = 2";
    $result = pdo_query($sql);
    return $result;
}
function list_all_new_orders(){
    $sql = "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_khach_hang = khach_hang.ma_khach_hang ORDER BY don_hang.ngay_dat_hang DESC LIMIT 5";
    $result = pdo_query($sql);
    return $result;
}
function count_today_orders(){
    $sql = "SELECT COUNT(*) AS so_luong_don_hang FROM don_hang WHERE ngay_dat_hang = CURDATE();";
    $result = pdo_execute_single ($sql);
    return $result;
}

function top_selling(){
    $sql ="SELECT
    chi_tiet_don_hang.ma_san_pham,
    san_pham.ten_san_pham,
    san_pham.anh,
    san_pham.so_luong,
    san_pham.giam_gia,
    san_pham.don_gia,
    SUM(chi_tiet_don_hang.so_luong) AS so_luong_ban
FROM
    chi_tiet_don_hang
JOIN
    san_pham ON chi_tiet_don_hang.ma_san_pham = san_pham.ma_san_pham
GROUP BY
    chi_tiet_don_hang.ma_san_pham, san_pham.ten_san_pham, san_pham.anh
ORDER BY
    so_luong_ban DESC
LIMIT 5;";
    $result = pdo_query($sql);
    return $result;
}
function top_selling_ten(){
    $sql ="SELECT
    chi_tiet_don_hang.ma_san_pham,
    san_pham.ten_san_pham,
    san_pham.anh,
    san_pham.giam_gia,
    san_pham.don_gia,
    SUM(chi_tiet_don_hang.so_luong) AS so_luong_ban
FROM
    chi_tiet_don_hang
JOIN
    san_pham ON chi_tiet_don_hang.ma_san_pham = san_pham.ma_san_pham
GROUP BY
    chi_tiet_don_hang.ma_san_pham, san_pham.ten_san_pham, san_pham.anh
ORDER BY
    so_luong_ban DESC
LIMIT 10;";
    $result = pdo_query($sql);
    return $result;
}
function list_all_comment (){
    $sql = "SELECT * FROM binh_luan JOIN khach_hang ON binh_luan.ma_khach_hang = khach_hang.ma_khach_hang JOIN san_pham ON binh_luan.ma_san_pham = san_pham.ma_san_pham WHERE binh_luan.trang_thai = '0' LIMIT 5";  
    $data = pdo_query($sql);
   return $data;
}
function admin_count_binhluan(){
    $sql = "SELECT COUNT(*) AS so_luong_binh_luan FROM binh_luan WHERE trang_thai = 0;";
    $result = pdo_execute_single ($sql);
    return $result;
}
function loai_hang_count_selling (){
    $sql ="SELECT
    loai_hang.ma_loai,
    loai_hang.ten_loai,
    SUM(chi_tiet_don_hang.so_luong) AS so_luong_san_pham_ban
FROM
    loai_hang
JOIN
    san_pham ON loai_hang.ma_loai = san_pham.ma_loai
JOIN
    chi_tiet_don_hang ON san_pham.ma_san_pham = chi_tiet_don_hang.ma_san_pham
GROUP BY
    loai_hang.ma_loai, loai_hang.ten_loai
ORDER BY
    so_luong_san_pham_ban DESC LIMIT 5;";
    $result = pdo_query($sql);
    return $result;
}
function list7_day() {
   $sql = "SELECT 
   DATE_FORMAT(don_hang.ngay_dat_hang, '%d/%m/%Y') AS ngay_dat_hang,
   IFNULL(SUM(chi_tiet_don_hang.so_luong * chi_tiet_don_hang.don_gia), 0) AS tong_lgdh
FROM don_hang
LEFT JOIN chi_tiet_don_hang ON don_hang.ma_don_hang = chi_tiet_don_hang.ma_don_hang
WHERE don_hang.ngay_dat_hang BETWEEN DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND CURDATE()
GROUP BY ngay_dat_hang
ORDER BY ngay_dat_hang DESC;";
   $result = pdo_query($sql);
   return $result;
}
function  list_order_by_month(){
    $sql = "SELECT 
    DATE_FORMAT(ngay_dat_hang, '%d/%m/%Y') AS ngay_dat_hang,
    COUNT(*) AS so_luong_don_hang
FROM don_hang
WHERE ngay_dat_hang BETWEEN DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND CURDATE()
GROUP BY ngay_dat_hang
ORDER BY ngay_dat_hang DESC;
";
    $result = pdo_query($sql);
    return $result;
}
function toal_today_revenue(){
    
    $sql = "SELECT 
    COALESCE(SUM(chi_tiet_don_hang.so_luong * chi_tiet_don_hang.don_gia), 0) AS tong_don_hang_da
FROM chi_tiet_don_hang
JOIN don_hang ON don_hang.ma_don_hang = chi_tiet_don_hang.ma_don_hang
WHERE don_hang.trang_thai_don <> 3
    AND DATE(don_hang.ngay_dat_hang) = CURDATE();";
    $result = pdo_execute_single ($sql);
    return $result;
}
function toal_week_revenue(){
    
    $sql = "SELECT 
    COALESCE (SUM(chi_tiet_don_hang.so_luong * chi_tiet_don_hang.don_gia), 0) AS tong_don_hang_da
FROM chi_tiet_don_hang
JOIN don_hang ON don_hang.ma_don_hang = chi_tiet_don_hang.ma_don_hang
WHERE don_hang.trang_thai_don <> 3
    AND don_hang.ngay_dat_hang >= NOW() - INTERVAL 7 DAY;
";
    $result = pdo_execute_single ($sql);
    return $result;
}
function toal_month_revenue(){
    
    $sql = "SELECT 
    COALESCE (SUM(chi_tiet_don_hang.so_luong * chi_tiet_don_hang.don_gia), 0) AS tong_don_hang_da
FROM chi_tiet_don_hang
JOIN don_hang ON don_hang.ma_don_hang = chi_tiet_don_hang.ma_don_hang
WHERE don_hang.trang_thai_don <> 3
    AND don_hang.ngay_dat_hang >= NOW() - INTERVAL 30 DAY;
";
    $result = pdo_execute_single ($sql);
    return $result;
}
function count_week_orders(){
    $sql = "SELECT COUNT(*) AS so_luong_don_hang FROM don_hang WHERE ngay_dat_hang >= NOW() - INTERVAL 7 DAY;";
    $result = pdo_execute_single ($sql);
    return $result;
}
function count_month_orders(){
    $sql = "SELECT COUNT(*) AS so_luong_don_hang FROM don_hang WHERE ngay_dat_hang >= NOW() - INTERVAL 30 DAY;";
    $result = pdo_execute_single ($sql);
    return $result;
}
function count_order_status(){
    $sql = "SELECT 
    SUM(CASE WHEN don_hang.trang_thai_don = 3 THEN 1 ELSE 0 END) AS so_luong_don_hang_huy,
    SUM(CASE WHEN don_hang.trang_thai_don IN (0, 1) THEN 1 ELSE 0 END) AS so_luong_don_hang_thanh_cong,
    SUM(CASE WHEN don_hang.trang_thai_don = 2 THEN 1 ELSE 0 END) AS so_luong_don_hang_chua_thanh_toan
FROM don_hang;";
    $result = pdo_execute_single ($sql);
    return $result;
}
function admin_get_contract(){
    $sql = "SELECT * FROM lien_he";
    $result = pdo_query($sql);
    return $result;
}
function admin_update_contract($ten_doanh_nghiep,$dia_chi,$sdt,$logo,$email){
    $sql = "UPDATE lien_he SET ten_doanh_nghiep = '$ten_doanh_nghiep', dia_chi = '$dia_chi', sdt = '$sdt', logo = '$logo', email = '$email' WHERE id_lien_he = 1";
    pdo_execute($sql);

}
function count_sanpham_by_loai_hang(){
    $sql = "SELECT loai_hang.ma_loai, COUNT(*) AS so_luong_hang, loai_hang.ten_loai, loai_hang.anh_loai
    FROM san_pham
    JOIN loai_hang ON san_pham.ma_loai = loai_hang.ma_loai
    GROUP BY loai_hang.ma_loai, loai_hang.ten_loai
    ORDER BY so_luong_hang DESC
    LIMIT 4;";
    $result = pdo_query($sql);
    return $result;
}
?>