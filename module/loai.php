<?php
function loai_insert($ten_loai){
    $sql="INSERT INTO loai_hang(ten_loai) VALUES('$ten_loai')";
    pdo_execute($sql);
}
function loai_update($ma_loai,$ten_loai){
    $sql="UPDATE loai_hang SET ten_loai='$ten_loai' WHERE ma_loai='$ma_loai'";
    pdo_execute($sql);
}
function loai_delete($ma_loai){
    $sql="DELETE FROM loai_hang WHERE ma_loai='$ma_loai'";
    pdo_execute($sql);
}
function loai_soft_delete($ma_loai){
    $sql="UPDATE loai_hang SET trang_thai=1 WHERE ma_loai='$ma_loai'";
    pdo_execute($sql);
}
function loai_recover($ma_loai){
    $sql="UPDATE loai_hang SET trang_thai=0 WHERE ma_loai='$ma_loai'";
    pdo_execute($sql);
}
function loai_delete_byid($ma_loai_list){
 // Lấy danh sách mã loại từ tham số truyền vào qua URL
    $ma_loai_list = explode(",", $_GET["ma_loai"]);
 // Kiểm tra nếu danh sách không rỗng
    if (!empty($ma_loai_list)) {
        foreach($ma_loai_list as $ma_loai){
        //đảm bảo mã loại đúng số nguyên
        $ma_loai=intval($ma_loai);
        $sql="DELETE FROM loai_hang WHERE ma_loai='$ma_loai'";
        pdo_execute($sql);
   }
    if (!$sql) {
     // Xử lý lỗi nếu cần
     echo "Xóa không thành công cho mã loại $ma_loai";
     exit(); // Kết thúc kịch bản nếu xóa không thành công
    }
 header("Location: index.php?act=listdm");
 exit();
} else {
  // Xử lý trường hợp không có mã loSại nào để xóa
  echo "Không có mã loại nào để xóa.";
}
}
function loai_get_byid($ma_loai){
    $sql= "SELECT * FROM loai_hang WHERE ma_loai='$ma_loai'";
    return pdo_execute_single($sql);
}
function loai_list(){
    $sql="SELECT * FROM loai_hang WHERE trang_thai=0";
    $list=pdo_query($sql);
    return $list;
}
function loai_list_five(){
    $sql="SELECT * FROM loai_hang WHERE trang_thai=0 LIMIT 0,5";
    $list=pdo_query($sql);
    return $list;
}
function loai_soft_delete_list(){
    $sql="SELECT * FROM loai_hang WHERE trang_thai=1";
    $list=pdo_query($sql);
    return $list;
}
function loai_list_limit(){
    $sql="SELECT * FROM loai_hang ORDER BY ten_loai DESC LIMIT 0,5";
    return pdo_execute($sql);
}
function don_hang_moi($ma_san_pham,$so_luong,$don_gia,$ma_khach_hang,$ngay_lap){
    //tạo đơn hàng 
    $sql= "INSERT INTO don_hang(ngay_dat,ma_khach_hang) VALUES('$ngay_lap','$ma_khach_hang')";
    pdo_execute($sql);
    //kiểm tra đơn hàng vừa tạo và lấy mã sản phẩm để tạo chi tiết đơn hàng
    $sql = "SELECT * FROM don_hang WHERE ma_khach_hang='$ma_khach_hang' ORDER BY ma_don_hang DESC LIMIT 1";
    $don_hang=pdo_execute_single($sql);
    extract($don_hang);
    //tạo chi tiết đơn hàng
    foreach($ma_san_pham as $key=>$ma_sp){
        $sql="INSERT INTO chi_tiet_don_hang(ma_don_hang,ma_san_pham,so_luong,don_gia) VALUES('$ma_don_hang','$ma_sp','$so_luong[$key]','$don_gia[$key]')";
        pdo_execute($sql);
    }
  

}
?>