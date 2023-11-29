<?php
function admin_login($email,$mat_khau){
    $sql = "SELECT * FROM khach_hang JOIN quyen ON khach_hang.quyen  = quyen.quyen WHERE email = '$email' AND mat_khau = '$mat_khau' AND xoa = '0'";
    return pdo_execute_single($sql);
}
function account_count_customer(){
    $sql = "SELECT count(*) as tong_khach_hang FROM khach_hang WHERE quyen = '3' AND xoa = '0'";
    return pdo_query_value($sql);
}
function account_count_active_customer(){
    $sql = "SELECT count(*) as tong_khach_hang_kich_hoat FROM khach_hang WHERE quyen = '3' AND trang_thai = '1' AND xoa = '0'";
    return pdo_query_value($sql);
}
function customer_list_all(){
    $sql = "SELECT * FROM khach_hang WHERE quyen = '3' AND xoa = '0'";
    return pdo_query($sql);
}
function get_customer_by_id($ma_khach_hang){
    $sql = "SELECT * FROM khach_hang WHERE ma_khach_hang = '$ma_khach_hang'";
    return pdo_execute_single($sql);
}
function admin_customer_update($ten_khach_hang,$dia_chi,$sdt,$email,$trang_thai,$ma_khach_hang){
    $sql = "UPDATE khach_hang SET ten_khach_hang = '$ten_khach_hang', dia_chi = '$dia_chi', sdt = '$sdt', email = '$email', trang_thai = '$trang_thai' WHERE ma_khach_hang = '$ma_khach_hang'";
    return pdo_execute($sql);   

}
function admin_customer_insert($ten_khach_hang,$dia_chi,$sdt,$email,$mat_khau,$avt,$trang_thai){
    $sql = "INSERT INTO khach_hang(ten_khach_hang,dia_chi,sdt,email,mat_khau,avt,trang_thai) VALUES ('$ten_khach_hang','$dia_chi','$sdt','$email','$mat_khau','$avt','$trang_thai')";
    return pdo_execute($sql);
    
}
function admin_customer_list_softdelete(){
    $sql = "SELECT * FROM khach_hang WHERE quyen = '3' AND xoa = '1'";
    return pdo_query($sql);
}
function admin_customer_softdelete($ma_khach_hang){
    $sql = "UPDATE khach_hang SET xoa=1 WHERE ma_khach_hang = '$ma_khach_hang'"; 
    return pdo_query($sql);
}
function admin_customer_restore($ma_khach_hang){
    $sql = "UPDATE khach_hang SET xoa=0 WHERE ma_khach_hang = '$ma_khach_hang'"; 
    return pdo_query($sql);
}
function admin_customer_delete($ma_khach_hang){
    $sql = "DELETE FROM khach_hang WHERE ma_khach_hang = '$ma_khach_hang'";
    return pdo_query($sql);
}   
function admin_get_nhan_vien_info($ma_nhan_vien){
    $sql = "SELECT * FROM khach_hang WHERE ma_nhan_vien = '$ma_nhan_vien'";
    return pdo_execute_single($sql);

}
function admin_update_info($ten_khach_hang,$email,$avt,$ma_nhan_vien){
    $sql = "UPDATE khach_hang SET ten_khach_hang = '$ten_khach_hang', email = '$email', avt = '$avt' WHERE ma_nhan_vien = '$ma_nhan_vien'";
    return pdo_execute($sql);
}
function admin_update_password($mat_khau,$ma_nhan_vien){
    $sql = "UPDATE khach_hang SET mat_khau = '$mat_khau' WHERE ma_nhan_vien = '$ma_nhan_vien'";
    return pdo_execute($sql);
}
function admin_update_info_noimg($ten_khach_hang,$email,$ma_nhan_vien){
    $sql = "UPDATE khach_hang SET ten_khach_hang = '$ten_khach_hang', email = '$email' WHERE ma_nhan_vien = '$ma_nhan_vien'";
    return pdo_execute($sql);
}
function admin_list_employee(){
    $sql = "SELECT * FROM khach_hang JOIN quyen ON  khach_hang.quyen = quyen.quyen WHERE khach_hang.quyen IN (1, 2) AND xoa = '0'";
    return pdo_query($sql);
}
function admin_update_employee_info($ten_khach_hang, $email, $dia_chi, $sdt, $quyen, $ma_nhan_vien){
    $sql = "UPDATE khach_hang SET ten_khach_hang = '$ten_khach_hang', email = '$email', dia_chi = '$dia_chi', sdt = '$sdt', quyen = '$quyen' WHERE ma_nhan_vien = '$ma_nhan_vien'";
    return pdo_execute($sql);
}
function admin_addnew_employee($ten_khach_hang,$dia_chi,$sdt,$email,$mat_khau,$ma_nhan_vien,$chuc_vu, $avt){
    $sql = "INSERT INTO khach_hang(ten_khach_hang,dia_chi,sdt,email,mat_khau,ma_nhan_vien,quyen,avt) VALUES ('$ten_khach_hang','$dia_chi','$sdt','$email','$mat_khau','$ma_nhan_vien','$chuc_vu','$avt')";
    return pdo_execute($sql);
}
function admin_softdelete_employee($ma_nhan_vien){
    $sql = "UPDATE khach_hang SET xoa=1 WHERE ma_nhan_vien = '$ma_nhan_vien'"; 
    return pdo_query($sql);
}
function admin_restore_employee($ma_nhan_vien){
    $sql = "UPDATE khach_hang SET xoa=0 WHERE ma_nhan_vien = '$ma_nhan_vien'"; 
    return pdo_query($sql);
}
function admin_list_employee_softdelete(){
    $sql = "SELECT * FROM khach_hang WHERE quyen IN (1, 2) AND xoa = '1'";
    return pdo_query($sql);
}
function account_user_login($email,$password){
    $sql = "SELECT * FROM khach_hang JOIN quyen ON khach_hang.quyen  = quyen.quyen WHERE email = '$email' AND mat_khau = '$password' AND xoa = '0'";
    return pdo_execute_single($sql);

}
function account_user_register($email,$password,$hoten,$phonenumber){
    $sql = "INSERT INTO khach_hang(email,mat_khau,ten_khach_hang,sdt,quyen) VALUES ('$email','$password','$hoten','$phonenumber','3')";
    return pdo_execute($sql);
}   
function account_check_email($email){
    $sql = "SELECT * FROM khach_hang WHERE email = '$email'";
    return pdo_query_value($sql);
}
function account_update($ten_khach_hang,$dia_chi,$sdt,$email,$avt,$ma_khach_hang){
    $sql = "UPDATE khach_hang SET ten_khach_hang = '$ten_khach_hang', dia_chi = '$dia_chi', sdt = '$sdt', email = '$email', avt = '$avt' WHERE ma_khach_hang = '$ma_khach_hang'";
    return pdo_execute($sql);
}
function account_update_password($mat_khau,$ma_khach_hang){
    $sql = "UPDATE khach_hang SET mat_khau = '$mat_khau' WHERE ma_khach_hang = '$ma_khach_hang'";
    return pdo_execute($sql);
}
function account_get_password($ma_khach_hang){
    $sql = "SELECT mat_khau FROM khach_hang WHERE ma_khach_hang = '$ma_khach_hang'";
    return pdo_execute_single($sql);
}
function account_update_diachi_sdt($dia_chi,$sdt,$ma_khach_hang){
    $sql = "UPDATE khach_hang SET dia_chi = '$dia_chi', sdt = '$sdt' WHERE ma_khach_hang = '$ma_khach_hang'";
    return pdo_execute($sql);
}
function account_email_info($email){
    $sql = "SELECT * FROM khach_hang WHERE email = '$email'";
    return pdo_execute_single($sql);
}
function  account_set_verified($email){
    $sql = "UPDATE khach_hang SET trang_thai = '1' WHERE email = '$email'";
    return pdo_execute($sql);
}
// function account_admin_delete_byid($ma_khach_hang_list){
//     // Lấy danh sách mã loại từ tham số truyền vào qua URL
//     $ma_khach_hang_list = explode(",", $_GET["ma_khach_hang"]);
//     // Kiểm tra nếu danh sách không rỗng
//        if (!empty($ma_khach_hang_list)) {
//            foreach($ma_khach_hang_list as $ma_loai){
//            //đảm bảo mã loại đúng số nguyên
//            $ma_loai=intval($ma_loai);
//            $sql="DELETE FROM loai_hang WHERE ma_khach_hang='$ma_loai'";
//            pdo_execute($sql);
//       }
//        if (!$sql) {
//         // Xử lý lỗi nếu cần
//         echo "Xóa không thành công cho mã loại $ma_loai";
//         exit(); // Kết thúc kịch bản nếu xóa không thành công
//        }
//     header("Location: index.php?act=listdm");
//     exit();
//    } else {
//      // Xử lý trường hợp không có mã loại nào để xóa
//      echo "Không có mã loại nào để xóa.";
//    }
//    }
?>