<?php
session_start();
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include "module/PDO.php";
include "module/loai.php";
include "module/sanpham.php";
include "module/account.php";
include "module/comment.php";
include "module/order.php";
include "module/banner.php";
include "module/static.php";
include "view/header.php";
require 'module/PHPMailer/src/Exception.php';
require 'module/PHPMailer/src/PHPMailer.php';
require 'module/PHPMailer/src/SMTP.php';

if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
    // ShowArray($cart);
    //tính tổng
    function calculateTotal() {
        $total = 0;
    
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product) {
                $total += $product['so_luong'] * $product['giam_gia'];
                // Nếu bạn muốn tính tổng theo giá không giảm giá, thay $product['giam_gia'] bằng $product['don_gia']
            }
        }
    
        return $total;
    }
    function count_cart(){
        $count = 0;
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $product){
                $count += $product['so_luong'];
            }
        }
        return $count;
    }
    $total = calculateTotal();
    $_SESSION['count_cart'] = count_cart();     
}

if(isset($_SESSION['wishlist'])){
    $wish = $_SESSION['wishlist'];
    // ShowArray($wish);
    //tính tổng
    function count_wish(){
        $count = 0;
        if(isset($_SESSION['wishlist'])){
            foreach($_SESSION['wishlist'] as $product){
                $count = count($_SESSION['wishlist']);
            }
        }
        return $count;
    }
    $_SESSION['count_wish'] = count_wish();     
}
include "view/extension/cart.php";
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act){
        case 'ctsp':{
            if(isset($_GET['ma_san_pham'])){
                $ma_san_pham = $_GET['ma_san_pham'];
                $data = sanphamct_get_byid($ma_san_pham);
                $data1 = sanpham_load_ctbl($ma_san_pham);
                $data2 = sanpham_count_ctbl($ma_san_pham);
                sanpham_add_luotxem($ma_san_pham);
             
            }
            if(isset($_POST['binhluan'])){
                $ma_san_pham=$_POST['masp'];
                $ma_khach_hang=$_SESSION['ma_khach_hang'];
                $noi_dung=$_POST['message'];
                $ngay_binh_luan= date('Y-m-d');
                $anhbl=$_FILES['img']['name'];
                $target_dir = "image/";
                  $target_file = $target_dir . basename($_FILES['img']['name']);
                  if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
  
                 }else{
                    $anhbl=" ";
                 }
                          comment_insert($ma_san_pham,$ma_khach_hang,$noi_dung,$ngay_binh_luan,$anhbl);
            }
            include "view/chitietsp/chitetsp.php";
            break;
        }
        case 'cart': {
            if (isset($_POST['addcart'])) {
                $ma_san_pham = $_POST['ma_san_pham'];
                $so_luong = $_POST['so_luong'];
                $ten_san_pham = $_POST['ten_san_pham'];
                $don_gia = $_POST['don_gia'];
                $giam_gia = $_POST['giam_gia'];
                $anh = $_POST['anh'];
        
                // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                $product_exists = false;
                
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $product) {
                        if ($product['ma_san_pham'] == $ma_san_pham) {
                            // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên
                            $_SESSION['cart'][$key]['so_luong'] += $so_luong;
                            $product_exists = true;
                            header("location:index.php?act=cart");
                            break;
                        }
                    }
                }
        
                // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
                if (!$product_exists) {
                    $product = array(
                        'ma_san_pham' => $ma_san_pham,
                        'so_luong' => $so_luong,
                        'ten_san_pham' => $ten_san_pham,
                        'don_gia' => $don_gia,
                        'giam_gia' => $giam_gia,
                        'anh' => $anh
                    );
        
                    if (!isset($_SESSION['cart'])) {
                        $_SESSION['cart'] = array($product);
                        header("location:index.php?act=cart");
                    } else {
                        $_SESSION['cart'][] = $product;
                        header("location:index.php?act=cart");
                    }
                }
            }
        
            include "view/cart.php";
            break;
        }
        case'wishlist':{
            if (isset($_POST['wishlistadd'])) {
                $ma_san_pham = $_POST['ma_san_pham'];
                $so_luong = $_POST['so_luong'];
                $ten_san_pham = $_POST['ten_san_pham'];
                $don_gia = $_POST['don_gia'];
                $giam_gia = $_POST['giam_gia'];
                $anh = $_POST['anh'];
        
                // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                $product_exists = false;
                //kiểm tra có trong wishlist chưa
                if (isset($_SESSION['wishlist'])) {
                    foreach ($_SESSION['wishlist'] as $key => $product) {
                        if ($product['ma_san_pham'] == $ma_san_pham) {
                            // Nếu sản phẩm đã tồn tại trong giỏ hàng, bỏ qua
                            $product_exists = true;
                           header("location:index.php?act=wishlist");
                           $_SESSION['fall_wish'] = "Sản phẩm đã có trong danh sách mong muốn";
                            break;
                        }
                    }
                }
                // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
                if (!$product_exists) {
                    $product = array(
                        'ma_san_pham' => $ma_san_pham,
                        'so_luong' => $so_luong,
                        'ten_san_pham' => $ten_san_pham,
                        'don_gia' => $don_gia,
                        'giam_gia' => $giam_gia,
                        'anh' => $anh
                    );
                    if (!isset($_SESSION['wishlist'])) {
                        $_SESSION['wishlist'] = array($product);
                        header("location:index.php?act=wishlist");
                    } else {
                        $_SESSION['wishlist'][] = $product;
                        header("location:index.php?act=wishlist");
                    }

                }
            }      
            if(isset($_POST['dellprod'])){
                $ma_san_pham_xoa = $_POST['ma_san_pham'];
            
                // Tìm kiếm và xóa sản phẩm khỏi giỏ hàng trong $_SESSION
                if (isset($_SESSION['wishlist'])) {
                    foreach ($_SESSION['wishlist'] as $key => $product) {
                        if ($product['ma_san_pham'] == $ma_san_pham_xoa) {
                            unset($_SESSION['wishlist'][$key]);
                            header("location:index.php?act=wishlist");
                        }
                    }
                }
            }
            include "view/wishlist.php";
            break;
    
     }
        case 'ifogor':{
            if(isset($_POST['submit'])){
                //do validate   
                $error = [];
                if(empty($_POST['email'])){
                    $error['email'] = "Bạn chưa nhập email";
                }
                //check vaild email
                if(empty($error)){
                    $email = htmlspecialchars($_POST['email']);
                    $data = account_check_email($email);
                    if(empty($data)){
                        $error['email'] = "Email không tồn tại";
                    } else {
                        $data = account_email_info($email);
                        if($data){
                            extract($data);
                            $encrypted_session = base64_encode($email);
                            $link = "act=resetpass&session=$encrypted_session";
                            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                            try {
                                //Server settings
                                $mail->SMTPDebug = 2;                               // Enable verbose debug output
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
                                $mail->Subject = 'Bạn vừa yêu cầu đổi mật khẩu  ';
                                $mail->Body    = "<h2>Bạn vừa yêu cầu đổi mật khẩu</h2> <br> <b>Đây là liên kết để đổi mật khẩu qua email. Link này có hiệu lực 24h kể từ lúc email này được gửi</b><br> http://localhost/DU_AN_1/index.php?$link <br>nếu không phải bạn ? vui lòng bỏ qua email này";
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                                $mail->send();
                            } catch (Exception $e) {
                                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                            }
                            
                                $_SESSION['sussec'] = "Gửi liên kết thành công";
                         
                                                      
                    }                          

            }
                }
            }

                include "view/khachhang/ifogor.php";
                break;

       
    }
    case 'resetpass':{
        $session_param = $_GET['session'];
        $decrypted_session = base64_decode($session_param);
        if(!isset($_SESSION['veri_email'])){
            $_SESSION['faill_login'] = "Đường dẫn không hợp lệ";
            unset($_SESSION['ten_khach_hang']);
            unset($_SESSION['email']);  
            unset($_SESSION['ma_khach_hang']);      
            unset($_SESSION['$avt']);   
            unset($_SESSION['veri_email']);
            header("location:index.php?act=login");
        } else {
        if ($decrypted_session === $_SESSION['veri_email']) {
            $email = $_SESSION['veri_email'];
            $data =  account_email_info($email);
            extract($data);
            ShowArray($data);
          
            if($data){
                extract($data);
                if(isset($_POST['submit'])){
                    $error = [];
                    if(empty($_POST['password'])){
                        $error['password'] = "Bạn chưa nhập mật khẩu";
                    }
                    if(empty($_POST['repassword'])){
                        $error['repassword'] = "Bạn chưa nhập lại mật khẩu";
                    }
                    if(empty($error)){
                        $password = $_POST['password'];
                        $repassword = $_POST['repassword'];
                        if($password != $repassword){
                            $error['repassword'] = "Mật khẩu không trùng khớp";
                        } else {
                            $data = account_update_password($password,$ma_khach_hang);
                            if($data){
                                $_SESSION['sussec'] = "Đổi mật khẩu thành công";
                                unset($_SESSION['veri_email']);
                                header("location:index.php?act=login");
                            }
                        }
                    }
                }
            }
        }
        else {
            echo "Lỗi";
        }

    }
        include "view/khachhang/resetpass.php";
        break;
    }
        case'cartupdate':{
            if (isset($_POST['dellprod'])) {
                $ma_san_pham_xoa = $_POST['ma_san_pham'];
            
                // Tìm kiếm và xóa sản phẩm khỏi giỏ hàng trong $_SESSION
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $product) {
                        if ($product['ma_san_pham'] == $ma_san_pham_xoa) {
                            unset($_SESSION['cart'][$key]);
                            header("location:index.php?act=cart");
                        }
                    }
                }
            }
            
            // Xử lý khi người dùng ấn nút "Xóa toàn bộ giỏ hàng"
            if (isset($_POST['clearallcart'])) {
                // Xóa toàn bộ giỏ hàng trong $_SESSION
                unset($_SESSION['cart']);
                header("location:index.php?act=cart");
            }
            
                    // Chỉ xử lý khi người dùng nhấn nút "Cập nhật giỏ hàng" từ trang cart
                    if (isset($_POST['updatecart'])) {
                        // Lặp qua sản phẩm trong giỏ hàng và cập nhật số lượng
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $product) {
                                $new_quantity = $_POST['so_luong'][$key];
                                
                                // Kiểm tra nếu số lượng mới là 0, thì xóa sản phẩm khỏi giỏ hàng
                                if ($new_quantity == 0) {
                                    unset($_SESSION['cart'][$key]);
                                    header("location:index.php?act=cart");
                                } else {
                                    // Cập nhật số lượng
                                    $_SESSION['cart'][$key]['so_luong'] = $new_quantity;
                                    header("location:index.php?act=cart");
                                }
                            }
                        }
                    }
            include "view/cart.php";
            break;
    
        }
        case 'order':{
            include "view/order.php";
            break;
        }
        case 'login':{
            if(isset($_POST['submit'])){
                $error = [];
                if(empty($_POST['email'])){
                    $error['email'] = "Bạn chưa nhập email";
                }
                if(empty($_POST['password'])){
                    $error['password'] = "Bạn chưa nhập mật khẩu";
                }
                if(empty($error)){
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $data = account_user_login($email,$password);
            if($data){
                   extract($data);
                if($email == $email && $mat_khau == $password){
                    $_SESSION['ten_khach_hang'] = $ten_khach_hang;
                    $_SESSION['email'] = $email;
                    $_SESSION['ma_khach_hang'] = $ma_khach_hang;    
                    $_SESSION['$avt'] = $avt;
                    header("location:index.php");
                } else {
                    $error['login'] = "Mật khẩu hoặc tài khoản không đúng";
                }
            } else {
                $error['login'] = "Mật khẩu hoặc tài khoản không đúng";
            }
        
                }
            }   
            include "view/khachhang/login.php";
            break;
        }
        case 'register':{
            if(isset($_POST['submit'])){
                $error = [];
                if(empty($_POST['email'])){
                    $error['email'] = "Bạn chưa nhập email";
                }
                if(empty($_POST['password'])){
                    $error['password'] = "Bạn chưa nhập mật khẩu";
                }
                if(empty($_POST['repassword'])){
                    $error['repassword'] = "Bạn chưa nhập lại mật khẩu";
                }
                if(empty($_POST['hoten'])){
                    $error['hoten'] = "Bạn chưa nhập họ tên";
                }
                if(empty($_POST['phonenumber'])){
                    $error['phonenumber'] = "Bạn chưa nhập số điện thoại";
                }
                if(empty($_POST['agree'])){
                    $error['agree'] = "Bạn chưa đồng ý điều khoản";
                }
                if(empty($error)){
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $repassword = $_POST['repassword'];
                    $hoten = $_POST['hoten'];
                    $phonenumber = $_POST['phonenumber'];
                    $data = account_check_email($email);
                    if($data){
                        $error['email'] = "Email đã tồn tại";
                    } else {
                        if($password != $repassword){
                            $error['repassword'] = "Mật khẩu không trùng khớp";
                        } else {
                            $data = account_user_register($email,$password,$hoten,$phonenumber);
                            $_SESSION['veri_email'] = $email;
                            $encrypted_session = base64_encode($email);
                            $link = "act=verified&session=$encrypted_session";
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
                                $mail->Subject = 'Xác thực tài khoản';
                                $mail->Body    = "<h2>Bạn vừa yêu đăng ký tài khoản mới website</h2> <br> <b>Đây là liên kết để xác thực tài khoản qua email. Link này có hiệu lực 24h kể từ lúc email này được gửi</b><br> http://localhost/DU_AN_1/index.php?$link <br>nếu không phải bạn ? vui lòng bỏ qua email này";
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                                $mail->send();
                            } catch (Exception $e) {
                                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                            }
                            if($data){
                                $_SESSION['sussec'] = "Đăng ký thành công";
                                header("location:index.php?act=login");
                            }
                        }
                           
                        }
                    }
                 
                }
            
            include "view/khachhang/register.php";
            break;
        }
        case 'account':{
            if(!isset($_SESSION['ten_khach_hang'])){
                $_SESSION['faill_login'] = "Bạn chưa đăng nhập";
                header("location:index.php?act=login");

            }
            if(isset($_POST['submit'])){
                $error = [];
                if(empty($_POST['name'])){
                    $error['hoten'] = "Bạn chưa nhập họ tên";
                }
                if(empty($_POST['sdt'])){
                    $error['phonenumber'] = "Bạn chưa nhập số điện thoại";
                }
                if(empty($_POST['diachi'])){
                    $error['diachi'] = "Bạn chưa nhập địa chỉ";
                }
                if(empty($_POST['email'])){
                    $error['email'] = "Bạn chưa nhập email";
                }
                if(empty($error)){
                    $ten_khach_hang = $_POST['name'];
                    $sdt = $_POST['sdt'];
                    $dia_chi = $_POST['diachi'];
                    $email = $_POST['email'];
                    $ma_khach_hang = $_POST['makh'];;
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
                        account_update($ten_khach_hang,$dia_chi,$sdt,$email,$avt,$ma_khach_hang);
                  
                        $_SESSION['sussec'] = "Cập nhật thành công";
                        header("location:index.php?act=account");
                }
                

            }

            if(isset($_POST['updatepassword'])){
                $error = [];
                if(empty($_POST['oldpass'])){
                    $error['password'] = "Bạn chưa nhập mật khẩu";
                }   
                if(empty($_POST['newpass'])){
                    $error['newpassword'] = "Bạn chưa nhập mật khẩu mới";
                }
                if(empty($_POST['repass'])){
                    $error['repassword'] = "Bạn chưa nhập lại mật khẩu";
                }
                if(empty($error)){
                    $oldpass = $_POST['oldpass'];
                    $newpassword = $_POST['newpass'];
                    $repassword = $_POST['repass'];
                    $ma_khach_hang = $_SESSION['ma_khach_hang'];
                    $data = account_get_password($ma_khach_hang);
                    if($data){
                        extract($data);
                        if($oldpass == $mat_khau){
                            if($newpassword != $repassword){
                                $error['repassword'] = "Mật khẩu không trùng khớp";
                            } else {
                                $data = account_update_password($newpassword,$ma_khach_hang);
                                if($data){
                                    $_SESSION['sussec'] = "Cập nhật thành công";
                                    header("location:index.php?act=account");
                                }
                            }
                        } else {
                            $error['oldpass'] = "Mật khẩu không đúng";
                        }
                    }
                }

            }

            include "view/khachhang/account.php";
            break;
        }
        case 'veriacc':{
            if(isset($_GET['email'])){
                $email = $_GET['email'];            
                $_SESSION['veri_email'] = $email;
                $encrypted_session = base64_encode($email);
                $link = "act=verified&session=$encrypted_session";
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
                    $mail->Subject = 'Xác thực tài khoản';
                    $mail->Body    = "<h2>Bạn vừa yêu đăng ký tài khoản mới website</h2> <br> <b>Đây là liên kết để xác thực tài khoản qua email. Link này có hiệu lực 24h kể từ lúc email này được gửi</b><br> http://localhost/DU_AN_1/index.php?$link <br>nếu không phải bạn ? vui lòng bỏ qua email này";
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    $mail->send();
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
               
                    $_SESSION['sussecc'] = "chúng tôi đã gửi liên kết xác thực tài khoản qua email của bạn";    
                    header("location:index.php?act=account");
                    
    
            }
         
            break;
        }
        case 'verified':{
            $session_param = $_GET['session'];
            $decrypted_session = base64_decode($session_param);
            if(!isset($_SESSION['veri_email'])){
                $_SESSION['faill_login'] = "Đường dẫn không hợp lệ";
                unset($_SESSION['ten_khach_hang']);
                unset($_SESSION['email']);  
                unset($_SESSION['ma_khach_hang']);      
                unset($_SESSION['$avt']);   
                unset($_SESSION['veri_email']);
                header("location:index.php?act=login");
            } else {
            if ($decrypted_session === $_SESSION['veri_email']) {
                $email = $_SESSION['veri_email'];
                $data =  account_email_info($email);
            if(is_array($data)){
                account_set_verified($email);
                unset($_SESSION['ten_khach_hang']);
                unset($_SESSION['email']);  
                unset($_SESSION['ma_khach_hang']);      
                unset($_SESSION['$avt']);   
                unset($_SESSION['veri_email']);
                $_SESSION['sussec'] = "Xác thực thành công vui lòng đăng nhập lại";
                header("location:index.php?act=login");
            }
            } else {
                echo "Lỗi";
            }
    
    }
    
        break;
    
    }
        case 'chitietdh':{
            if(!isset($_SESSION['ten_khach_hang'])){
                $_SESSION['faill_login'] = "Bạn chưa đăng nhập";
                header("location:index.php?act=login");

            }
            if(isset($_GET['ma_don_hang'])){
                $ma_don_hang=$_GET['ma_don_hang'];
                $data = donhang_get_chi_tiet($ma_don_hang);
            }
            include "view/khachhang/ctdonhang.php";
            break;  
        }
        case 'search': {
        
            if (isset($_POST['submit'])) {
                $key = $_POST['key'];
                $_SESSION['kwords'] = $key;
                $data = san_pham_search($key);
            }
        
            if (isset($_POST['odercode'])) {
                $odercode = $_POST['orderby'];
                $key = $_SESSION['kwords'];

                if($odercode == 1){
                    $data = san_pham_fliter_by_view($_SESSION['kwords']);
                } else if($odercode == 2){
                    $data = san_pham_fliter_by_new($_SESSION['kwords']);
                } else if($odercode == 3){
                    $data =  san_pham_fliter_by_gia_lowtohigh($_SESSION['kwords']);
                } elseif($odercode == 4){
                    $data = san_pham_fliter_by_gia_higtolow($_SESSION['kwords']);  
                }
                 else {
                    $data = san_pham_search($_SESSION['kwords']);
                }
            } 
        
            include "view/search/list.php";
            break;
        }
        case 'listspdm':{
            if(isset($_GET['ma_loai'])){
                if(is_numeric($_GET['ma_loai'])){
                    $ma_loai = $_GET['ma_loai'];
                    $data = list_sanpham_by_danhmuchot($ma_loai);
                } else {
                   $data = sanpham_list();
                }
            }
            if (isset($_POST['odercode'])) {
                $odercode = $_POST['orderby'];
                if($odercode == 1){
                    $data = list_sanpham_by_danhmuc_by_luotxem($ma_loai);
                } else if($odercode == 2){
                    $data = list_sanpham_by_danhmuc_by_new($ma_loai);
                } else if($odercode == 3){
                    $data =  list_sanpham_by_danhmuc_by_gia_lowtohigh($ma_loai);
                } elseif($odercode == 4){
                    $data = list_sanpham_by_danhmuc_by_gia_hightolow($ma_loai);  
                }
                 else {
                    $data = sanpham_list();
                }
                
            } 
        
            include "view/listsanpham/list.php";
            break;
        }
        case 'checkout':{
            if(!isset($_SESSION['ten_khach_hang'])){
                $_SESSION['faill_login'] = "Bạn chưa đăng nhập";
                header("location:index.php?act=login");

            }
            if(isset($_POST['submit'])){
                //do validate
                $error = [];
                if(empty($_POST['name'])){
                    $error['hoten'] = "Bạn chưa nhập họ tên";
                }
                if(empty($_POST['sdt'])){
                    $error['sdt'] = "Bạn chưa nhập số điện thoại";
                }
                if(empty($_POST['diachi'])){
                    $error['diachi'] = "Bạn chưa nhập địa chỉ";
                }   
                if(empty($error)){
                    $ten_khach_hang = $_POST['name'];
                    $sdt = $_POST['sdt'];
                    $dia_chi = $_POST['diachi'];
                    $email = $_SESSION['email'];
                    $ma_khach_hang = $_SESSION['ma_khach_hang'];
                    $phuong_thuc_thanh_toan = $_POST['phuong_thuc'];
                    $ghi_chu_kh = $_POST['ghichu_kh'];
                    account_update_diachi_sdt($dia_chi,$sdt,$ma_khach_hang);

                    if($phuong_thuc_thanh_toan == 0){
                        donhang_create($ma_khach_hang, $ghi_chu_kh, $phuong_thuc_thanh_toan);
                        $ma_don_hang = pdo_get_insert_id();
                        $_SESSION['ma_don_hang'] = $ma_don_hang;
                        foreach($_SESSION['cart'] as $value){
                            extract($value);
                            donhang_insert_ctdonhang($ma_don_hang, $ma_san_pham, $so_luong, $giam_gia);
                            drop_so_luong($ma_san_pham, $so_luong);
                        }
                            $don_hang_ct = donhang_get_chi_tiet($_SESSION['ma_don_hang']);
                            $toal = donhang_get_toal_chi_tiet($_SESSION['ma_don_hang']);
                            foreach($toal as $value){
                                extract($value);
                            }
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
                            $mail->Subject = 'Cảm ơn bạn đã mua hàng tại Crown Store mã đơn hàng của bạn là: #'.$ma_don_hang.'';
                            $mail->Body = '
                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Chi tiết đơn hàng</title>
                                <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    line-height: 1.6;
                                }
                            
                                .container {
                                    max-width: 600px;
                                    margin: 0 auto;
                                }
                            
                                .header {
                                    background-color: #4CAF50;
                                    color: #fff;
                                    text-align: center;
                                    padding: 20px;
                                }
                            
                                .order-details {
                                    margin-top: 20px;
                                }
                            
                                table {
                                    width: 100%;
                                    border-collapse: collapse;
                                    margin-bottom: 20px;
                                }
                            
                                th, td {
                                    border: 1px solid #ddd;
                                    padding: 8px;
                                    text-align: left;
                                }
                            
                                th {
                                    background-color: #4CAF50;
                                    color: white;
                                }
                            
                                .footer {
                                    margin-top: 20px;
                                    text-align: center;
                                    padding: 10px;
                                    background-color: #f1f1f1;
                                }
                            </style>
                            </head>
                            <body>
                                <div class="container">
                                    <div class="header">
                                        <h2>Chi tiết đơn hàng</h2>
                                    </div>
                                                    
                                                    <div class="order-details">
                                                <h3>Đơn hàng #'.$ma_don_hang.'</h3>
                                                <p>Cảm ơn bạn đã đặt hàng. Dưới đây là chi tiết đơn hàng của bạn:</p>

                                                <div class="product">
                                                    <table>
                                                        <tr>
                                                            <th>Tên Sản Phẩm</th>
                                                            <th>Số Lượng</th>
                                                            <th>Giá</th>
                                                        </tr>';
                            
                                                        foreach ($don_hang_ct as $item) {
                                                            $mail->Body .= '
                                                                <tr>
                                                                    <td>'.$item['ten_san_pham'].'</td>
                                                                    <td>'.$item['so_luong'].'</td>
                                                                    <td>'.number_format($item['don_gia'], 0, ',', '.').'đ</td>
                                                                </tr>';
                                                        }
                                                        
                                        $mail->Body .= '
                                        <p><strong>Tổng cộng:</strong> '.number_format($tong_gia_don_hang, 0, ',', '.').'đ</p>
                                        <p><strong>Phương thức thanh toán:</strong>Giao tiền khi nhận hàng (COD)</p>
                                    </div>
                            
                                    <div class="footer">
                                        <p>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất. Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.</p>
                                       <button><a href="http://localhost/DU_AN_1/index.php?act=chitietdh&ma_don_hang='.$ma_don_hang.'">Xem chi tiết đơn hàng</a></button>
                                        
                                    </div>
                                </div>
                            </body>
                            </html>';
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                            $mail->send();
                        } catch (Exception $e) {
                            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                        }

                        unset($_SESSION['cart']);
                        extract($don_hang_ct);  
                    //    ShowArray($don_hang_ct);   
                    //    ShowArray($toal);   
                    //    echo number_format($toal['tong_gia_don_hang'], 0, ',', '.');
                        $_SESSION['sussecc'] = "Đặt hàng thành công! cảm ơn bạn đã mua hàng của chúng tôi";
                        header("location:index.php?act=order_complete");        

                        
                    } 
                    if($phuong_thuc_thanh_toan == 1){
                        donhang_create($ma_khach_hang, $ghi_chu_kh, $phuong_thuc_thanh_toan);
                        $ma_don_hang = pdo_get_insert_id();
                        $_SESSION['ma_don_hang'] = $ma_don_hang;
                        foreach($_SESSION['cart'] as $value){
                            extract($value);
                            donhang_insert_ctdonhang($ma_don_hang, $ma_san_pham, $so_luong, $giam_gia);
                            drop_so_luong($ma_san_pham, $so_luong);
                        }
                        donhang_update_trangthai($ma_don_hang, 2);  
                        $don_hang_ct = donhang_get_chi_tiet($_SESSION['ma_don_hang']);
                        $toal = donhang_get_toal_chi_tiet($_SESSION['ma_don_hang']);
                        foreach($toal as $value){
                            extract($value);
                        }
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
                        $mail->Subject = 'Cảm ơn bạn đã mua hàng tại Crown Store mã đơn hàng của bạn là: #'.$ma_don_hang.'';
                        $mail->Body = '
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Chi tiết đơn hàng</title>
                            <style>
                            body {
                                font-family: Arial, sans-serif;
                                line-height: 1.6;
                            }
                        
                            .container {
                                max-width: 600px;
                                margin: 0 auto;
                            }
                        
                            .header {
                                background-color: #4CAF50;
                                color: #fff;
                                text-align: center;
                                padding: 20px;
                            }
                        
                            .order-details {
                                margin-top: 20px;
                            }
                        
                            table {
                                width: 100%;
                                border-collapse: collapse;
                                margin-bottom: 20px;
                            }
                        
                            th, td {
                                border: 1px solid #ddd;
                                padding: 8px;
                                text-align: left;
                            }
                        
                            th {
                                background-color: #4CAF50;
                                color: white;
                            }
                        
                            .footer {
                                margin-top: 20px;
                                text-align: center;
                                padding: 10px;
                                background-color: #f1f1f1;
                            }
                        </style>
                        </head>
                        <body>
                            <div class="container">
                                <div class="header">
                                    <h2>Chi tiết đơn hàng</h2>
                                </div>
                                                
                                                <div class="order-details">
                                            <h3>Đơn hàng #'.$ma_don_hang.'</h3>
                                            <p>Cảm ơn bạn đã đặt hàng. Dưới đây là chi tiết đơn hàng của bạn:</p>

                                            <div class="product">
                                                <table>
                                                    <tr>
                                                        <th>Tên Sản Phẩm</th>
                                                        <th>Số Lượng</th>
                                                        <th>Giá</th>
                                                    </tr>';
                        
                                                    foreach ($don_hang_ct as $item) {
                                                        $mail->Body .= '
                                                            <tr>
                                                                <td>'.$item['ten_san_pham'].'</td>
                                                                <td>'.$item['so_luong'].'</td>
                                                                <td>'.number_format($item['don_gia'], 0, ',', '.').'đ</td>
                                                            </tr>';
                                                    }
                                                    
                                    $mail->Body .= '
                                    <p><strong>Tổng cộng:</strong> '.number_format($tong_gia_don_hang, 0, ',', '.').'đ</p>
                                    <p><strong>Phương thức thanh toán:</strong> Thẻ tín dụng</p>
                                </div>
                        
                                <div class="footer">
                                    <p>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất. Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.</p>
                                   <button><a href="http://localhost/DU_AN_1/index.php?act=chitietdh&ma_don_hang='.$ma_don_hang.'">Xem chi tiết đơn hàng</a></button>
                                    
                                </div>
                            </div>
                        </body>
                        </html>';
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                        $mail->send();
                    } catch (Exception $e) {
                        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                    }
                        unset($_SESSION['cart']);
                       header("location:PCI/ccpayment.php?ma_don_hang=$ma_don_hang");
                    } 
                    if($phuong_thuc_thanh_toan == 2){
                        $vnp_Amount = $_POST['amount']*100;
                        $vnp_Locale = $_POST['language'];
                        $vnp_BankCode = $_POST['bankCode'];
                        donhang_create($ma_khach_hang, $ghi_chu_kh, $phuong_thuc_thanh_toan);
                        $ma_don_hang = pdo_get_insert_id();
                        $_SESSION['ma_don_hang'] = $ma_don_hang;
                        foreach($_SESSION['cart'] as $value){
                            extract($value);
                            donhang_insert_ctdonhang($ma_don_hang, $ma_san_pham, $so_luong, $giam_gia);
                            drop_so_luong($ma_san_pham, $so_luong);
                        }
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
                            $mail->Subject = 'Cảm ơn bạn đã mua hàng tại Crown Store mã đơn hàng của bạn là: #'.$ma_don_hang.'';
                            $mail->Body = '
                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Chi tiết đơn hàng</title>
                                <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    line-height: 1.6;
                                }
                            
                                .container {
                                    max-width: 600px;
                                    margin: 0 auto;
                                }
                            
                                .header {
                                    background-color: #4CAF50;
                                    color: #fff;
                                    text-align: center;
                                    padding: 20px;
                                }
                            
                                .order-details {
                                    margin-top: 20px;
                                }
                            
                                table {
                                    width: 100%;
                                    border-collapse: collapse;
                                    margin-bottom: 20px;
                                }
                            
                                th, td {
                                    border: 1px solid #ddd;
                                    padding: 8px;
                                    text-align: left;
                                }
                            
                                th {
                                    background-color: #4CAF50;
                                    color: white;
                                }
                            
                                .footer {
                                    margin-top: 20px;
                                    text-align: center;
                                    padding: 10px;
                                    background-color: #f1f1f1;
                                }
                            </style>
                            </head>
                            <body>
                                <div class="container">
                                    <div class="header">
                                        <h2>Chi tiết đơn hàng</h2>
                                    </div>
                                                    
                                                    <div class="order-details">
                                                <h3>Đơn hàng #'.$ma_don_hang.'</h3>
                                                <p>Cảm ơn bạn đã đặt hàng. Dưới đây là chi tiết đơn hàng của bạn:</p>

                                                <div class="product">
                                                    <table>
                                                        <tr>
                                                            <th>Tên Sản Phẩm</th>
                                                            <th>Số Lượng</th>
                                                            <th>Giá</th>
                                                        </tr>';
                            
                                                        foreach ($don_hang_ct as $item) {
                                                            $mail->Body .= '
                                                                <tr>
                                                                    <td>'.$item['ten_san_pham'].'</td>
                                                                    <td>'.$item['so_luong'].'</td>
                                                                    <td>'.number_format($item['don_gia'], 0, ',', '.').'đ</td>
                                                                </tr>';
                                                        }
                                                        
                                        $mail->Body .= '
                                        <p><strong>Tổng cộng:</strong> '.number_format($tong_gia_don_hang, 0, ',', '.').'đ</p>
                                        <p><strong>Phương thức thanh toán:</strong>Ví điện tử VNPAY</p>
                                    </div>
                            
                                    <div class="footer">
                                        <p>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất. Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.</p>
                                       <button><a href="http://localhost/DU_AN_1/index.php?act=chitietdh&ma_don_hang='.$ma_don_hang.'">Xem chi tiết đơn hàng</a></button>
                                        
                                    </div>
                                </div>
                            </body>
                            </html>';
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                            $mail->send();
                        } catch (Exception $e) {
                            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                        }

                        unset($_SESSION['cart']);
                        header("Location:module/vnpay_php/vnpay_create_payment.php?vnp_Amount=$vnp_Amount&vnp_Locale=$vnp_Locale&vnp_BankCode=$vnp_BankCode&ma_don_hang=$ma_don_hang");
                        exit();
                    } 

                }
            }

            
        
            include "view/payment/checkout.php";
            break;
        }
        case 'retry_payment':{
            if(isset($_GET['ma_don_hang'])){
                $ma_don_hang = $_GET['ma_don_hang'];
                $data = donhang_get_trangthai($ma_don_hang);
                header("location:PCI/ccpayment.php?ma_don_hang=$ma_don_hang");
            } else {
                header("location:404.php");
            }
           
            break;
        }
        case 'order_complete':{
            if(isset($_GET['cong_thanh_toan'])){
               if($_GET['cong_thanh_toan'] == "stripe"){
                $status = $_GET['status'];
                $ma_don_hang = $_GET['ma_don_hang'];
                $chagreid = $_GET['charge_id'];
                $error = " ";    
                $error = $_GET['error'];
                $last4 = $_GET['last4'];
                $brand = $_GET['brand'];
                if($status == 'cancel'){
                    donhang_update_trangthai($ma_don_hang, 2);  
                    if(!empty($chagreid)){
                        donhang_update_idch($ma_don_hang, $chagreid);
                    }
                    if(!empty($error)){
                        donhang_update_brand($ma_don_hang, $error);  
                    }
                    unset($_SESSION['error']);   
                    unset($_SESSION['charge_id']);
                    unset($_SESSION['decline_code']);   
                }
                if($status == 'success'){
                    donhang_update_trangthai($ma_don_hang, 1);  
                    if(!empty($chagreid)){
                        donhang_update_idch($ma_don_hang, $chagreid);
                    }
                    if(!empty($brand)){
                        donhang_update_brand($ma_don_hang, $brand);  
                    }
                    if(!empty($last4)){
                        donhang_update_last4($ma_don_hang, $last4);  
                    }   
                }
               } 
               
               
               if($_GET['cong_thanh_toan'] == "vnpay"){

                        $ma_don_hang = $_GET['vnp_TxnRef'];
                        $trang_thai = $_GET ['vnp_ResponseCode'];
                        $loai_the = $_GET['vnp_CardType'] ;
                        $ngan_hang = $_GET['vnp_BankCode'];
                        if($trang_thai == "00"){
                            donhang_update_trangthai($ma_don_hang, 1);  
                            if(!empty($loai_the)){
                                donhang_update_brand($ma_don_hang, $loai_the);  
                            }           
                        } else {
                            donhang_update_trangthai($ma_don_hang, 2);  
                            if(!empty($loai_the)){
                                donhang_update_brand($ma_don_hang, $loai_the);
                                donhang_update_idch($ma_don_hang, $ngan_hang);
                            }
                        }

               }
            }
        
            include "view/payment/order_complete.php";
            break;
        }   
        case 'logout':{
            unset($_SESSION['ten_khach_hang']);
            unset($_SESSION['email']);  
            unset($_SESSION['ma_khach_hang']);      
            unset($_SESSION['$avt']);   
            header("location:index.php");
            break;
        }
        case '404':{
            include "view/404.php";
            break;
        
        }
        default:{
            include "view/body.php";
            break;
        }   
    }
} else {
    include "view/body.php";
}
include "view/footer.php";
ob_end_flush();
?>