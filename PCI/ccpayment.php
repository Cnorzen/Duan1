<?php
session_start();
include "../module/PDO.php";
include "../module/order.php";
if(!isset($_SESSION['ten_khach_hang'])){
    $_SESSION['faill_login'] = "Bạn chưa đăng nhập";
    header("location:../index.php?act=login");

}
// unset($_SESSION['ma_don_hang']);
// if(isset($_SESSION['ma_don_hang'])){
//     $ma_don_hang = $_SESSION['ma_don_hang'];
//     $toal = donhang_get_toal_chi_tiet($ma_don_hang);
//     $trang_thai_don = donhang_get_trangthai($ma_don_hang);
//     foreach($toal as $t){
//        extract($t);
//     }

// }

if(isset($_GET['ma_don_hang'])){
    $ma_don_hang = $_GET['ma_don_hang'];
    $toal = donhang_get_toal_chi_tiet($ma_don_hang);
    $trang_thai_don = donhang_get_trangthai($ma_don_hang);
    foreach($toal as $t){
       extract($t);
    }
}  

if(empty($toal)){
    header("location: ../index.php?act=404");
}
if($trang_thai_don['trang_thai_don'] == 1){
    header("location: ../index.php");

}



function GetStr($string, $start, $end) {
    $str = explode($start, $string);

    // Check if the start delimiter exists in the string
    if (count($str) < 2) {
        return false;
    }

    $str = explode($end, $str[1]);

    // Check if the end delimiter exists in the string
    if (count($str) < 1) {
        return false;
    }

    return $str[0];
}

if(isset($_POST['submit'])){
    $error = [];
    $card_holder_name = htmlspecialchars($_POST['card_holder_name']);
    $card_number = htmlspecialchars($_POST['card_number']);
    $month = htmlspecialchars($_POST['month']);
    $year = htmlspecialchars($_POST['year']);
    $card_cvc = htmlspecialchars($_POST['card_cvc']);
    $ma_don_hang = $_GET['ma_don_hang'];
    $tong = $_POST['tong'];
    $pk = 'pk_test_51OG5GjKXLBUZPNQwacFN3wDunhk8kCCnwMrS7EtL9DJFu4eRQEbKPNTTJnUozvSOfwdfIY2hnQX9MQv2Rp083Hws00fyvuzISu';
    $sk = 'sk_test_51OG5GjKXLBUZPNQwT9v3zl7V6NTdhYr0z3QMaJZMPZqBKUNa1LcY4BplNCPQNRicCAGMKJ62Z1HUmwICvZoSJwUK00wM6nyZM1';
    
    // Create token
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $pk. ':' . '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]='.$card_number.'&card[exp_month]='.$month.'&card[exp_year]='.$year.'&card[cvc]='.$card_cvc.'&card[name]='.$card_holder_name.'');
    $result1 = curl_exec($ch);
    $tok1 = GetStr($result1, '"id": "', '"');
    $msg1 = GetStr($result1, '"message": "', '"');

    // Check for errors in token creation
    if (!empty($msg1)) {
        $error['token_creation'] = $msg1;

    }

    // If there are no token creation errors, proceed to charge creation
    if (empty($error['token_creation'])) {
        // Create charge
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$tong.'&currency=vnd&source='.$tok1.'');
        $result3 = curl_exec($ch);
        $jsonData = json_decode($result3);
    
        // Check for errors in charge creation
        if (isset($jsonData->error)) {
            $errorDetails = $jsonData->error;
    
            // Extract decline_code, code, and other relevant information
            $declineCode = isset($errorDetails->decline_code) ? $errorDetails->decline_code : ' ';
            $errorCode = isset($errorDetails->code) ? $errorDetails->code : ' ';
            $chargeId = isset($errorDetails->charge) ? $errorDetails->charge : 'N/A';
    
            // Construct a more informative error message
            $errorMessage = "Thẻ của bạn bị từ chối: $errorCode $declineCode (Charge ID: $chargeId)";
            $errorapi = "$errorCode $declineCode";
            $_SESSION['error'] =  $errorapi;
            $_SESSION['charge_id'] = $chargeId;
            $_SESSION['decline_code'] = $declineCode;
            $error['charge_creation'] = $errorMessage;
        }
    }

    // If there are errors, display them
    if (!empty($error)) {
         echo"";
    } else {
                // Lấy thông tin từ payment_method_details
                $id = GetStr($result3, '"id": "', '"');
                $last4 = GetStr($result3, '"last4": "', '"');
                $brand = GetStr($result3, '"brand": "', '"');
                header("location: ../index.php?act=order_complete&status=success&ma_don_hang=$ma_don_hang&cong_thanh_toan=stripe&phuong_thuc_thanh_toan=2&charge_id=$id&last4=$last4&brand=$brand&error=");
    }
}
if(isset($_POST['cancel'])){
    $order_id = $_SESSION['ma_don_hang'];
    header("location: ../index.php?act=order_complete&status=cancel&ma_don_hang=$ma_don_hang&cong_thanh_toan=stripe&phuong_thuc_thanh_toan=2&charge_id={$_SESSION['charge_id']}&error={$_SESSION['error']}&decline_code=$declineCode&last4=&brand=");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Payment gate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Core CSS
    <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body class="h-full">
    <div class="container-fluid h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto h-full">
                <h3>Payment gate</h3>
                <br>
                <div class="card card-border">
                    <div class="card-body">
                        <?php
                        if (isset($error)) {
                            foreach ($error as $err) {
                                ?>
                                <div class="alert alert-danger">
                                    <div class="alert-content">
                                        <span class="alert-icon">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <div><?php echo $err; ?></div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>

                        <h5>Đơn hàng sẽ tự động hủy sau: </h5> <h5 id="countdown" class="cut"></h5>
                        <p>Mã đơn hàng: <?php echo $ma_don_hang; ?></p>
                        <p>Giá trị đơn hàng phải thanh toán: <?php echo number_format($tong_gia_don_hang, 0, ',', '.').'đ'?> </p>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="card_holder_name" class="font-weight-bold">Tên chủ thẻ</label>
                                    <input type="text" class="form-control" id="card_holder_name" name="card_holder_name" placeholder="NGUYEN VAN A">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="card_number" class="font-weight-bold">Số Thẻ</label>
                                    <input type="number" class="form-control" id="card_number" name="card_number" placeholder="XXXX XXXX XXXX XXXX" oninput="this.value = this.value.slice(0, 16)">
                                    <input type="number" name="tong" autocomplete="off" value="<?php echo $tong_gia_don_hang?>" hidden>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="month" class="font-weight-bold">Tháng Hết Hạn</label>
                                    <input type="number" class="form-control" id="month" name="month" placeholder="MM" oninput="this.value = this.value.slice(0, 2)">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="year" class="font-weight-bold">Năm hết Hạn</label>
                                    <input type="number" class="form-control" id="year" name="year" placeholder="YY" oninput="this.value = this.value.slice(0, 2)">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="card_cvc" class="font-weight-bold">CVV</label>
                                    <input type="number" class="form-control" id="card_cvc" name="card_cvc" placeholder="XXX" maxlength="3" oninput="this.value = this.value.slice(0, 3)">
                                </div>
                            </div>

                            <br>
                            <!-- Add other form fields similarly -->
                            <button type="submit" name="submit" class="btn btn-primary mx-auto">Thanh toán</button>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#dialogBasic">Hủy</button>

                            <!-- Modal -->
                            <div class="modal fade" id="dialogBasic" tabindex="-1" role="dialog" aria-labelledby="dialogBasicLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="dialogBasicLabel">Xác nhận hủy</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Nếu bạn hủy thanh toán thì đơn hàng của bạn sẽ về trạng thái chưa thanh toán và có thể dẫn tới bị hủy đơn</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger" name="cancel">Hủy thanh toán</button>
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Tiếp tục thanh toán</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<script>
    let endTime = new Date();
endTime.setMinutes(endTime.getMinutes() + 15);

let timer = setInterval(function() {

  let now = new Date();
 let timeRemaining = endTime - now;

if (timeRemaining <= 0) {
  clearInterval(timer);
 document.getElementById("countdown").innerHTML = "Time Out";
 submitButton.disabled = true;
 window.location.href = "../index.php";


} else {
 let hours = Math.floor(timeRemaining / 3600000);
 let minutes = Math.floor((timeRemaining % 3600000) / 60000);
 let seconds = Math.floor((timeRemaining % 60000) / 1000);
let countdown = hours + ":" + minutes + ":" + seconds;
 document.getElementById("countdown").innerHTML = countdown;
  }
}, 1000);
</script>

	<!-- Core Vendors JS -->
    <script src="js/vendors.min.js"></script>

<!-- Core JS -->
<script src="js/app.min.js"></script>
</html>

