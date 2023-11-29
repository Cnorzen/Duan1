<?php
session_start();
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include "../module/PDO.php";
include "../module/loai.php";
include "../module/sanpham.php";
include "../module/account.php";
include "../module/comment.php";
include "../module/order.php";
include "../module/banner.php";
include "../module/static.php";
require '../module/PHPMailer/src/Exception.php';
require '../module/PHPMailer/src/PHPMailer.php';
require '../module/PHPMailer/src/SMTP.php';

if(!isset($_SESSION['admin'])){
   header("Location:login/login.php");

} else {
include "head.php";
$ten_nhan_vien= $_SESSION['tennv'];
$ma_nhan_vien = $_SESSION['manv'];
$avt = $_SESSION['anhdaidien'];
$quyen = $_SESSION['admin'];
$email = $_SESSION['email'];
$ma_quyen = $_SESSION['quyen'];
									

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
            case 'listdm':{
                $data=loai_list();
                include "loaihang/list.php";
                break;
            }
            case 'adddm':{
                if(isset($_POST['submit'])){
                    $ten_loai=$_POST['ten_loai'];
                    loai_insert($ten_loai); 
                    $_SESSION['success']="Sửa thành công";   
                    header("Location: admin.php?act=listdm");       

                }   
                include "loaihang/add.php";
                break;
            }
            case 'editdm':{
                if(isset($_GET['ma_loai'])){
                    $ma_loai=$_GET['ma_loai'];
                    $data=loai_get_byid($ma_loai);          
                    extract($data);
                } 
                if(isset($_POST['submit'])){
                    $ma_loai=$_POST['ma_loai'];
                    $ten_loai=$_POST['ten_loai'];
                    loai_update($ma_loai,$ten_loai); 
                    header("Location: admin.php?act=listdm");
                    $_SESSION['success']="Sửa thành công";       

                }   
                include "loaihang/edit.php";
                break;
            }
            case 'sdeldm':{
                $ma_loai=$_GET['ma_loai'];
                loai_soft_delete($ma_loai);
                header("Location: admin.php?act=listdm");
                break;
            }
                case 'softdell':{
                $data=loai_soft_delete_list();
                include "loaihang/listsdell.php";
                break;

            }
            case 'recoverdm':{
                $ma_loai=$_GET['ma_loai'];
                loai_recover($ma_loai);
                header("Location: admin.php?act=softdell");
                break;
            }
            case 'deldm':{
                $ma_loai=$_GET['ma_loai'];
                loai_delete($ma_loai);
                header("Location: admin.php?act=listdm");
                break;
            }
            case '404':{
                include "404.php";
                break;
            }
            case 'addsp':{
                $data=loai_list();
                if(isset($_POST['submit'])){
                    //validate
                    $error = [];
                    if(empty($_POST['tensp'])){
                        $error['ten_san_pham']="Tên sản phẩm không được để trống";
                    }
                    if(empty($_POST['description1'])){
                        $error['mo_ta']="Mô tả không được để trống";
                    }
                    if(empty($_POST['soluong'])){
                        $error['so_luong']="Số lượng không được để trống";
                    }
                    if(empty($_POST['dongia'])){
                        $error['don_gia']="Đơn giá không được để trống";
                    }
                    if(empty($_POST['giamgia'])){
                        $error['giam_gia']="Giảm giá không được để trống";
                    }
                    if($_POST['loaihang'] == 'concac'){
                        $error['ma_loai']="Loại hàng không được để trống";
                    }
                    if(empty($_POST['thuonghieu'])){
                        $error['thuong_hieu']="Thương hiệu không được để trống";
                    }
                    if(empty($_POST['ngaythem'])){
                        $error['ngay_nhap']="Ngày nhập không được để trống";
                    }
        
                                // Kiểm tra ảnh đại diện
                    if (empty($_FILES['anh']['name'])) {
                        $error['anh'] = "Phải có ảnh đại diện sản phẩm.";
                    } else {
                        $target_dir = "../image/";
                        $target_file = $target_dir . basename($_FILES["anh"]["name"]);

                        if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                            echo "File " . htmlspecialchars(basename($_FILES["anh"]["name"])) . " đã được tải lên.";
                        } else {
                            
                            echo "Có lỗi xảy ra khi tải ảnh lên.";
                            $error['anh'] = "Lỗi khi tải ảnh đại diện lên.";
                        }
                    }
                    $anh1 = $anh2 = $anh3 = $anh4 = "noimage.jpg";
                    // Khởi tạo các biến với giá trị mặc định
                    for ($i = 1; $i <= 4; $i++) {
                        $input_name = "anh$i";
                        if (isset($_FILES[$input_name]['name'])) {
                            $file_name = $_FILES[$input_name]['name'];
                            $target_file = $target_dir . basename($file_name);
                            if (move_uploaded_file($_FILES[$input_name]['tmp_name'], $target_file)) {
                                // Nếu ảnh được tải lên thành công, cập nhật giá trị biến tương ứng
                                ${"anh$i"} = $_FILES[$input_name]['name'];
                            }
                        }
                    }
                    // Kiểm tra và xử lý thông tin sản phẩm nếu không có lỗi ảnh
                    if (empty($error)) {
                        echo 'added';
                        $ten_san_pham = $_POST['tensp'];
                        $mo_ta = $_POST['description1'];
                        $so_luong = $_POST['soluong'];
                        $don_gia = $_POST['dongia'];
                        $giam_gia = $_POST['giamgia'];
                        $ngay_them_raw = $_POST['ngaythem'];
                        $ngay_them = date("Y-m-d", strtotime($ngay_them_raw));
                        $ma_loai = $_POST['loaihang'];
                        $thuong_hieu = $_POST['thuonghieu'];
                        $luot_xem = $_POST['luotxem'];
                        $anh = $_FILES['anh']['name'];
                        echo "$ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, $anh, $anh1, $anh2, $anh3, $anh4";
                        sanpham_insert($ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, $anh, $anh1, $anh2, $anh3, $anh4);
                        header("Location: admin.php?act=listsp");
                       
                
                    }
                }
                include "sanpham/add.php";
                break;
            
        }
            case 'listsp':{
                $data=sanpham_list();
                include "sanpham/list.php";
                break;
            }   
            case 'editsp': {
                if (isset($_GET['ma_san_pham'])) {
                    $ma_san_pham = $_GET['ma_san_pham'];
                    $data = sanpham_get_byid($ma_san_pham);
                    extract($data);
                } else {
               
                }
            
                if (isset($_POST['submit'])) {
                    $error = [];
                    $target_dir = "../image/";
                
                    // Kiểm tra xem ảnh đại diện có được thay đổi hay không
                    if (!empty($_FILES['anh']['name'])) {
                        $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                
                        if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                            echo "File " . htmlspecialchars(basename($_FILES["anh"]["name"])) . " đã được tải lên.";
                        } else {
                            echo "Có lỗi xảy ra khi tải ảnh lên.";
                            $error['anh'] = "Lỗi khi tải ảnh đại diện lên.";
                        }
                    }
                
                    // Khởi tạo các biến với giá trị mặc định
                    $anh1 = $anh2 = $anh3 = $anh4 = "noimage.jpg";
                    for ($i = 1; $i <= 4; $i++) {
                        $input_name = "anh$i";
                        if (!empty($_FILES[$input_name]['name'])) {
                            $file_name = $_FILES[$input_name]['name'];
                            $target_file = $target_dir . basename($file_name);
                            if (move_uploaded_file($_FILES[$input_name]['tmp_name'], $target_file)) {
                                // Nếu ảnh được tải lên thành công, cập nhật giá trị biến tương ứng
                                ${"anh$i"} = $_FILES[$input_name]['name'];
                            }
                        }
                    }
                
                    if (empty($error)) {
                        $ten_san_pham = $_POST['tensp'];
                        $ma_san_pham = $_POST['masp'];
                        $mo_ta = $_POST['description1'];
                        $so_luong = $_POST['soluong'];
                        $don_gia = $_POST['dongia'];
                        $giam_gia = $_POST['giamgia'];
                        $ngay_them_raw = $_POST['ngaythem'];
                        $ngay_them = date("Y-m-d", strtotime($ngay_them_raw));
                        $ma_loai = $_POST['maloai'];
                        $thuong_hieu = $_POST['thuonghieu'];
                        $luot_xem = $_POST['luotxem'];
                        echo "$ngay_them | $ngay_them_raw";
                
                        // Kiểm tra xem ảnh đại diện có được thay đổi hay không
                        if (!empty($_FILES['anh']['name'])) {
                            // Nếu có thay đổi ảnh đại diện, cập nhật chỉ ảnh đại diện
                            sanpham_update($ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, $_FILES['anh']['name'], $anh1, $anh2, $anh3, $anh4, $ma_san_pham);
                        } else {
                            // Nếu không có thay đổi ảnh đại diện, giữ nguyên ảnh phụ
                            sanpham_noimg($ten_san_pham, $ma_loai, $mo_ta, $ngay_them, $don_gia, $giam_gia, $so_luong, $thuong_hieu, $luot_xem, $ma_san_pham);
                        }
                        header("Location: admin.php?act=listsp");
                    }
                }
                
                include "sanpham/edit.php";
                break;
                

            }
            
            
            case 'softdellsp':{
               
                    $ma_san_pham=$_GET['ma_san_pham'];
                    sanpham_softdel($ma_san_pham);
                    header("Location: admin.php?act=listsoftdellsp");
            
                break;
            }
            case 'listsoftdellsp':{
                $data=sanpham_softdel_list();
                include "sanpham/listdell.php";
                break;
            }   
            case 'chitietsp':{
                if(isset($_GET['ma_san_pham'])){
                    $ma_san_pham=$_GET['ma_san_pham'];
                    $data=sanphamct_get_byid($ma_san_pham);
                    $listbl = sanpham_load_ctbl($ma_san_pham);
                } else {
                    header("Location: admin.php?act=404");
                }
                include "sanpham/chitet.php";
                break;
            }
            case 'recoversp':{
                $ma_san_pham=$_GET['ma_san_pham'];
                sanpham_recover($ma_san_pham);
                header("Location: admin.php?act=listsoftdellsp");
                break;
            }
            case 'listkh':{
                $count_customer = account_count_customer();
                $count_active_customer = account_count_active_customer();
                $data=customer_list_all();
                include "khachhang/list.php";
                break;
            }     
            case 'editkh':{
                if(isset($_GET['ma_khach_hang'])){
                    $ma_khach_hang=$_GET['ma_khach_hang'];
                    $data=get_customer_by_id($ma_khach_hang);  
                    $data1=donhang_list_by_customer($ma_khach_hang);        

                } else {
                    header("Location: admin.php?act=404");
                  
                }
                if(isset($_POST['submit'])){
                    $ten_khach_hang=$_POST['name'];
                    $dia_chi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $email=$_POST['email'];
                    $trang_thai=$_POST['trangthai'];
                    $ma_khach_hang=$_POST['makh'];
                    admin_customer_update($ten_khach_hang,$dia_chi,$sdt,$email,$trang_thai,$ma_khach_hang);
                    header("Location: admin.php?act=listkh");

                }
                include "khachhang/edit.php";
                break;
            }    
        case 'addkh':{
            if(isset($_POST['submit'])){
                //do validate
                $error = [];
                if(empty($_POST['name'])){
                    $error['ten_khach_hang']="Tên khách hàng không được để trống";
                }
                if(empty($_POST['email'])){
                    $error['email']="Email không được để trống";
                }
                if(empty($_POST['matkhau'])){
                    $error['mat_khau']="Mật khẩu không được để trống";
                }
                if(empty($error)){
                    $ten_khach_hang=$_POST['name'];
                    $dia_chi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $email=$_POST['email'];
                    $mat_khau=$_POST['matkhau'];
                    $trang_thai=$_POST['trangthai'];
                    $avt = $_FILES['avt']['name'];
                    $target_dir = "../image/";  
                    $target_file = $target_dir . basename($_FILES["avt"]["name"]);
                    if (move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file)) {
                        // echo "File " . htmlspecialchars(basename($_FILES["avt"]["name"])) . " đã được tải lên.";
                    } else {
                        // echo "deafut = noimage.jpg";
                    }

                    admin_customer_insert($ten_khach_hang,$dia_chi,$sdt,$email,$mat_khau,$avt,$trang_thai);
                    header("Location: admin.php?act=listkh");
                    
                
                }


            }
            include "khachhang/add.php";
            break;
        }
        case 'softdelkh':{
            $ma_khach_hang=$_GET['ma_khach_hang'];
            admin_customer_softdelete($ma_khach_hang);
            header("Location: admin.php?act=listsoftdellkh");   
            break;
        
        }
        case 'listsoftdellkh':{
            $data=admin_customer_list_softdelete();
            include "khachhang/delete.php";
            break;
        }
        case 'recoverkh':{
            $ma_khach_hang=$_GET['ma_khach_hang'];
            admin_customer_restore($ma_khach_hang);
            header("Location: admin.php?act=listsoftdellkh");
            break;
        }
        case 'dellkh':{
            $ma_khach_hang=$_GET['ma_khach_hang'];
            admin_customer_delete($ma_khach_hang);
            header("Location: admin.php?act=listkh");
            break;
        }
        case 'listbl':{
            $data=comment_list();
            include "binhluan/list.php";
            break;
        
        }
        case 'softdellbl':{
            $ma_binh_luan=$_GET['ma_binh_luan'];
            comment_softdel($ma_binh_luan);
            header("Location: admin.php?act=listbl");
            break;
        }
        case 'listsoftdellbl':{
            $ma_binh_luan=$_GET['ma_binh_luan'];
            comment_softdel($ma_binh_luan);
            header("Location: admin.php?act=listsoftdellbl");
            break;
        }
        case 'account':{
            $data = admin_get_nhan_vien_info($ma_nhan_vien);

            if(isset($_POST['submit'])){
                $ten_khach_hang=$_POST['name'];
                $email=$_POST['email'];
                $avt = $_FILES['avt']['name'];
        //check image
                if(empty($_FILES['avt']['name'])){
                    $avt = $data['avt'];
                } else {
                    $target_dir = "../image/";  
                    $target_file = $target_dir . basename($_FILES["avt"]["name"]);
                    if (move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file)) {
                        // echo "File " . htmlspecialchars(basename($_FILES["avt"]["name"])) . " đã được tải lên.";
                    } else {
                        // echo "deafut = noimage.jpg";
                    }
                }

                admin_update_info($ten_khach_hang,$email,$avt,$ma_nhan_vien);
                header("Location: admin.php?act=account");
            }
            if(isset($_POST['updatepass'])){
                //do validate
                $error = [];
                if(empty($_POST['password'])){
                    $error['password']="Mật khẩu cũ không được để trống";
                }
                if(empty($_POST['newpassword'])){
                    $error['newpassword']="Mật khẩu mới không được để trống";
                }
                if(empty($_POST['confirmNewPassword'])){
                    $error['confirmNewPassword']="Nhập lại mật khẩu không được để trống";
                }
                if($_POST['newpassword'] != $_POST['confirmNewPassword']){
                    $error['renewpass']="Nhập lại mật khẩu không khớp";
                }
                //check old pass
                $oldpass = $_POST['password'];
                $data = admin_get_nhan_vien_info($ma_nhan_vien);
                extract($data);
                if($oldpass != $mat_khau){
                    $error['oldpass']="Mật khẩu cũ không đúng";
                }
                if(empty($error)){
                    $newpass = $_POST['newpass'];
                    admin_update_password($newpass,$ma_nhan_vien);
                    header("Location: admin.php?act=account");
                }
            }
            include "account/edit.php";
            break;
        }
        case 'listdonhang':{
            $data = donhang_list();
            if(isset($_POST['submit'])){
                $fliter = $_POST['filter'];
                if($fliter == 0){
                    $data = donhang_list();
                } elseif($fliter == 1){
                    $data = donhang_list_paid();
                } elseif($fliter == 2){
                    $data = donhang_list_unpaid();
                } elseif($fliter == 3){
                    $data = donhang_list_deleted();
                } elseif($fliter == 4){
                    $data = donhang_list_verify();
                } elseif($fliter == 5){
                    $data = donhang_list_by_date();
                }

            }
            include "donhang/list.php";
            break;
        
        }
        case 'ctdonhang':{
            if(isset($_GET['ma_don_hang'])){
                $ma_don_hang=$_GET['ma_don_hang'];
                $data = donhang_get_chi_tiet($ma_don_hang);
            } else {
                header("Location: admin.php?act=404");
            }   
            include "donhang/chitiet.php";
            break;
        
        }
        case 'setthanhtoan':{
            if(isset($_GET['ma_don_hang'])){
                $ma_don_hang=$_GET['ma_don_hang'];
                donhang_set_paid($ma_don_hang);
                header("Location: admin.php?act=ctdonhang&ma_don_hang=$ma_don_hang");
            } else {
                header("Location: admin.php?act=404");
            }
            break;
        
        }
        case 'setchuathanhtoan':{
            if(isset($_GET['ma_don_hang'])){
                $ma_don_hang=$_GET['ma_don_hang'];
                donhang_set_unpaid($ma_don_hang);
                header("Location: admin.php?act=ctdonhang&ma_don_hang=$ma_don_hang");
            } else {
                header("Location: admin.php?act=404");
            }
            break;
        
        }
        case 'setxacthuc':{
            if(isset($_GET['ma_don_hang'])){
                $ma_don_hang=$_GET['ma_don_hang'];
                donhang_set_verify($ma_don_hang);
                header("Location: admin.php?act=ctdonhang&ma_don_hang=$ma_don_hang");
            } else {
                header("Location: admin.php?act=404");
            }
            break;
        
        }
        case 'sethuydon':{
            if(isset($_GET['ma_don_hang'])){
                $ma_don_hang=$_GET['ma_don_hang'];
                $data = donhang_get_chi_tiet($ma_don_hang);
            }
            if(isset($_POST['submit'])){
                $ma_don_hang=$_POST['ma_don_hang'];
                $ghi_chu=$_POST['ghichu'];
                extract($data);
                // ShowArray($data);
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                            try {
                                //Server settings
                                $mail->SMTPDebug = 0;                               // Enable verbose debug output
                                $mail->isSMTP();                                      // Set mailer to use SMTP
                                $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                $mail->Username = 'akonda4543@outlook.com';           // Your Outlook email address
                                $mail->Password = 'B@2004.com';              // Your Outlook email password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
                                $mail->Port = 587;  
                                $mail->CharSet = 'UTF-8';                                    // TCP port to connect to
                                //Recipients
                                $mail->setFrom("akonda4543@outlook.com", 'Crown Store');
                                $mail->addAddress("$email");     // Add a recipient
                                // Content
                                $mail->isHTML(true);                                  // Set email format to HTML
                                $mail->Subject = 'Đơn hàng của bạn đã bị hủy';
                                $mail->Body    = "Đơn hàng của bạn đã bị hủy. Lý do: $ghi_chu <br> <a href='http://localhost/DU_AN_1/index.php?act=chitietdh&ma_don_hang=$ma_don_hang'>Bấm vào đây để xem chi tiết</a>";
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                                $mail->send();
                            } catch (Exception $e) {
                                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                            }
                donhang_set_ghichu($ma_don_hang,$ghi_chu);
                donhang_set_cancel($ma_don_hang);
                header("Location: admin.php?act=ctdonhang&ma_don_hang=$ma_don_hang");
                
            } 

            include "donhang/conrfimhuy.php";
            break;
        
        }
        case 'addghichu':{
            if(isset($_POST['submit'])){
                $ma_don_hang=$_POST['ma_don_hang'];
                $ghi_chu=$_POST['ghichu'];
                donhang_set_ghichu($ma_don_hang,$ghi_chu);

                header("Location: admin.php?act=ctdonhang&ma_don_hang=$ma_don_hang");
            } else {
                header("Location: admin.php?act=404");
            }
            break;
        
        
        }
        case 'listhuydon':{
            $data = donhang_list_deleted();
            include "donhang/delete.php";
            break;
    
        
        
        }
        case 'listnv':{
            $data = admin_list_employee();
            include "nhanvien/list.php";
            break;
        }
        case 'editnv':{
            if(isset($_GET['ma_nhan_vien'])){
                $ma_nhan_vien=$_GET['ma_nhan_vien'];
                $data=admin_get_nhan_vien_info($ma_nhan_vien);        

            } else {
                header("Location: admin.php?act=404");
              
            }
            if(isset($_POST['submit'])){
                $ten_khach_hang = $_POST['name'];
                $dia_chi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $quyen = $_POST['quyen'];
                $ma_nhan_vien = $_POST['manv'];
                echo "$ten_khach_hang, $dia_chi, $sdt, $email, $quyen, $ma_nhan_vien";
                admin_update_employee_info($ten_khach_hang, $email, $dia_chi, $sdt, $quyen, $ma_nhan_vien);
               header("Location: admin.php?act=listnv");
            }
            include "nhanvien/edit.php";
            break;
        }
        case 'logout':{
            session_destroy();
            header("Location: admin.php");
            break;
        }
        case 'addnv':{
            if(isset($_POST['submit'])){
                //do validate
                $error = [];
                if(empty($_POST['name'])){
                    $error['ten_khach_hang']="Tên nhân viên không được để trống";
                }
                if(empty($_POST['email'])){
                    $error['email']="Email không được để trống";
                }
                if(empty($_POST['matkhau'])){
                    $error['mat_khau']="Mật khẩu không được để trống";
                }
                if(empty($_POST['manv'])){
                    $error['manv']="Mã nhân viên không được để trống";
                }
                if($_POST['chuc_vu'] == 'concac'){
                    $error['ma_loai']="Chức vụ không được để trống";
                }
                if(empty($error)){
                    $ten_khach_hang=$_POST['name'];
                    $dia_chi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $email=$_POST['email'];
                    $mat_khau=$_POST['matkhau'];
                    $ma_nhan_vien=$_POST['manv'];
                    $chuc_vu=$_POST['chuc_vu'];
                    $avt = $_FILES['avt']['name'];
                    $target_dir = "../image/";  
                    $target_file = $target_dir . basename($_FILES["avt"]["name"]);
                    if (move_uploaded_file($_FILES["avt"]["tmp_name"], $target_file)) {
                        // echo "File " . htmlspecialchars(basename($_FILES["avt"]["name"])) . " đã được tải lên.";
                    } else {
                        // echo "deafut = noimage.jpg";
                    }

                   admin_addnew_employee($ten_khach_hang,$dia_chi,$sdt,$email,$mat_khau,$ma_nhan_vien,$chuc_vu, $avt);
                    header("Location: admin.php?act=listnv");
                    
                
                }


            }
            include "nhanvien/add.php";
            break;
        }
        case 'softdellnv':{
           if(isset($_GET['ma_nhan_vien'])){
                $ma_nhan_vien=$_GET['ma_nhan_vien'];
                admin_softdelete_employee($ma_nhan_vien);
                header("Location: admin.php?act=listnv");
            } else {
                header("Location: admin.php?act=404");
            }
            break;
        }
        case 'recovernv':{
            if(isset($_GET['ma_nhan_vien'])){
                $ma_nhan_vien=$_GET['ma_nhan_vien'];
                admin_restore_employee($ma_nhan_vien);
                header("Location: admin.php?act=listsoftdellnv");
            } else {
                header("Location: admin.php?act=404");
            }
            break;
        }
        case'listsoftdellnv':{
            $data = admin_list_employee_softdelete();
            include "nhanvien/delete.php";
            break;
        }
        case'banner':{
            $data = banner_list();
            if(isset($_POST['submit'])){

                    $ten_banner = $_POST['tieudebanner'];
                    $link_banner = $_POST['lienketbanner'];
                    $anh_banner = $_FILES['anh']['name'];
                    $id_banner = $_POST['idbanner'];
                    $target_dir = "../image/";  
                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                    if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                        // echo "File " . htmlspecialchars(basename($_FILES["avt"]["name"])) . " đã được tải lên.";
                    } else {
                        echo "deafut = noimage.jpg";
                        // echo "$ten_banner, $link_banner, $anh_banner, $id_banner";
                    }
                    // echo "$ten_banner, $link_banner, $anh_banner, $id_banner";
                    banner_insert($ten_banner,$anh_banner,$link_banner,$id_banner);
          
            }
            include "banner/list.php";
            break;
        }
        case 'dashboard':{
            $today_order = count_today_orders();
            $list_new_order = list_all_new_orders();
            $list_comment = list_all_comment();
            $toal_customer = toal_today_revenue();
            $toal_order = count_week_orders();
            $toal_comment = admin_count_binhluan();
            $ord_stat = count_order_status();
            $ord_list30 = list_order_by_month();    
            include "thongke/dash.php";
            break;
        }
        case 'salestat':{
            $toal_oder_revenue = toal_week_revenue();
            $purchases = toal_month_revenue();
            $toal_order = count_week_orders();
            $list_new_order = list_all_new_orders();
            $count_loai_hang_selled = loai_hang_count_selling();
            $top_selling = top_selling();
            $days = list7_day();
        
            include "thongke/order.php";
            break;
        }
        case 'contract':{
            $data = admin_get_contract();
            if(isset($_POST['submit'])){
                $ten_doanh_nghiep = $_POST['ten_doanh_nghiep'];
                $dia_chi = $_POST['dia_chi'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $logo = $_FILES['logo']['name'];
                $target_dir = "../image/";
                $target_file = $target_dir . basename($_FILES["logo"]["name"]);
                if(empty($_FILES['logo']['name'])){
                    $logo = $data['logo'];
                } else {
                    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
                        // echo "File " . htmlspecialchars(basename($_FILES["avt"]["name"])) . " đã được tải lên.";
                    } else {
                        // echo "deafut = noimage.jpg";
                    }
                }
                admin_update_contract($ten_doanh_nghiep,$dia_chi,$sdt,$logo,$email);
                header("Location: admin.php?act=contract");
                

            }
            include "lienhe/edit.php";
            break;
        
        }
        default:{
                include "404.php";
                break;
            }
        }
    } else {
        include "body.php";
    }
}
ob_end_flush();
?>