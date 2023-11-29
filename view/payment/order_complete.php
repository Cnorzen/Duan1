<?php
$trang_thai_don = [];

if (isset($_SESSION['ma_don_hang'])) {
    $trang_thai_don = donhang_get_trangthai($_SESSION['ma_don_hang']);
    $ma_don_hang = $_SESSION['ma_don_hang'];
}

if (isset($_GET['ma_don_hang'])) {
    $ma_don_hang = $_GET['ma_don_hang'];
    $trang_thai_don = donhang_get_trangthai($ma_don_hang);
}
?>
<head>
<title>Thanh toán đơn hàng | Crown store</title>
</head>

<main class="h-full d-flex align-items-center justify-content-center">
    <div class="success-message-container">
            <?php
            if (isset($trang_thai_don['trang_thai_don']) && $trang_thai_don['trang_thai_don'] == 0) {
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d2c932" aria-hidden="true" class="w-6 h-6 success-icon" height="300px">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"></path>
                        </svg>

            <div class="text-container">
            <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100">Đơn hàng cần đươc xác nhận</h2>
            <p class="text-gray-700 dark:text-gray-400">Cảm ơn bạn đã mua hàng tại <a href="index.php" class="text-green-600 hover:underline">Shop</a>.</p>
            <p class="text-gray-700 dark:text-gray-400">Mã đơn hàng của bạn là <a href="index.php?act=chitietdh&ma_don_hang=<?php echo $ma_don_hang ?>" class="text-green-600 hover:underline">#<?php echo $ma_don_hang ?></a>.</p>
            <p class="text-gray-700 dark:text-gray-400">Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.</p>
            <button class="btn btn-primary"><a href="index.php?act=chitietdh&ma_don_hang=<?php echo $ma_don_hang ?>">Xem chi tiết đơn hàng</a></button>
            <button class="btn btn-secondary"><a href="index.php">Tiếp tục mua hàng</a></button>
            <?php
            }
            if (isset($trang_thai_don['trang_thai_don']) && $trang_thai_don['trang_thai_don'] == 1) {
            ?>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#4e7661" aria-hidden="true" class="w-6 h-6 success-icon" height="300px">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <div class="text-container">
            <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100">Đặt hàng thành công</h2>
            <p class="text-gray-700 dark:text-gray-400">Cảm ơn bạn đã mua hàng tại <a href="index.php" class="text-green-600 hover:underline">Shop</a>.</p>
            <p class="text-gray-700 dark:text-gray-400">Mã đơn hàng của bạn là <a href="index.php?act=chitietdh&ma_don_hang=<?php echo $ma_don_hang ?>" class="text-green-600 hover:underline">#<?php echo $ma_don_hang ?></a>.</p>
            <button class="btn btn-primary"><a href="index.php?act=chitietdh&ma_don_hang=<?php echo $ma_don_hang ?>">Xem chi tiết đơn hàng</a></button>
            <button class="btn btn-secondary"><a href="index.php">Tiếp tục mua hàng</a></button>
            <?php
            }
            if (isset($trang_thai_don['trang_thai_don']) && $trang_thai_don['trang_thai_don'] == 2) {
               
            ?>
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ca1616" aria-hidden="true" class="w-6 h-6 success-icon" height="300px">
             <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div class="text-container">
            <h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-100">Thanh Toán thất bại</h2>
            <p class="text-gray-700 dark:text-gray-400">Cảm ơn bạn đã mua hàng tại <a href="index.php" class="text-green-600 hover:underline">Shop</a>.</p>
            <button class="btn btn-primary"><a href="index.php?act=retry_payment&ma_don_hang=<?php echo $ma_don_hang ?>">Thanh toán lại </a></button>
            <button class="btn btn-secondary"><a href="index.php?act=chitietdh&ma_don_hang=<?php echo $ma_don_hang ?>">Chi Tiết Đơn hàng</a></button>
            <?php
            }
            ?>
            </div>
    </div>
</main>

<style>
    .success-message-container {
        display: flex;
        align-items: center;
    }

    .success-icon {
        margin-right: 20px;
    }

    .text-container {
        max-width: 600px;
    }

    .btn {
        margin-top: 10px;
    }
</style>
