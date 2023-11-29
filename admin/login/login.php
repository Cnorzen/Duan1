<?php
session_start();
include "../../module/PDO.php";
include "../../module/account.php";
if(isset($_POST['submit'])){
    $email = htmlspecialchars($_POST['email']);
    $mat_khau = htmlspecialchars($_POST['password']);
    $data = admin_login($email,$mat_khau);
    $error = [];
    if(empty($data)){
        $error['login'] = "Tài khoản hoặc mật khẩu không đúng";
    }
    if(empty($error)){
        extract($data);
       if($ten_quyen == "Admin"){
            $_SESSION['admin'] = $ten_quyen;
            $_SESSION['tennv'] = $ten_khach_hang;
            $_SESSION['manv'] = $ma_nhan_vien;
            $_SESSION['anhdaidien'] = $avt;
            $_SESSION['quyen'] = $quyen;
            $_SESSION['email'] = $email;
           header("location:../admin.php?act=dashboard");
        }
        if($ten_quyen == "nhan vien"){
            $_SESSION['admin'] = "Nhân Viên";
            $_SESSION['tennv'] = $ten_khach_hang;
            $_SESSION['manv'] = $ma_nhan_vien;
            $_SESSION['anhdaidien'] = $avt;
            $_SESSION['quyen'] = $quyen;
            $_SESSION['email'] = $email;
            header("location:../admin.php?act=dashboard");
            
        } else {
            $error['login'] = "Bạn không có quyền truy cập vào trang này";
        }            
    }
   
}

?>
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Admin</title>

		<!-- Core CSS -->
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>

<body>
		<!-- App Start-->
		<div id="root">
			<!-- App Layout-->
			<div class="app-layout-blank flex flex-auto flex-col h-[100vh]">
                <div class="h-full flex flex-auto flex-col justify-between">
                    <main class="h-full">
                        <div class="page-container relative h-full flex flex-auto flex-col">
                            <div class="grid lg:grid-cols-3 h-full">
                                <div class="bg-no-repeat bg-cover py-6 px-16 flex-col justify-between hidden lg:flex" style="background-image: url('../img/others/auth-side-bg.jpg');">
                                    <div class="logo">
                                        <img src="../img/logo/logo-dark-full.png" alt="Elstar logo">
                                    </div>
                                    <div>
                                        <div class="mb-6 flex items-center gap-4">
                                            <span class="avatar avatar-circle avatar-md border-2 border-white">
                                                <img class="avatar-img avatar-circle" src="../img/avatars/thumb-10.jpg" loading="lazy">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 flex flex-col justify-center items-center bg-white dark:bg-gray-800">
                                    <div class="xl:min-w-[450px] px-8">
                                        <div>
                                            <h3
                                         class="mb-8">Chào mừng bạn!</h3>
                                            <p>Vui lòng đăng nhập để truy cập trang quản trị!</p>
                                        </div>
                                        <div>
                                            <form action=" " method="POST">
                                                <div class="form-container vertical">
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Email</label>
                                                        <div>
                                                            <input
                                                                class="input"
                                                                type="text"
                                                                name="email"
                                                                autocomplete="off"
                                                                placeholder="Email"
                                                                value=""
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Mật Khẩu</label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <input
                                                                    class="input pr-8"
                                                                    type="password"
                                                                    name="password"
                                                                    autocomplete="off"
                                                                    placeholder="Password"
                                                                    value=""
                                                                >
                                                                <div class="input-suffix-end">
                                                                    <span class="cursor-pointer text-xl">
                                                                        <svg
                                                                            stroke="currentColor"
                                                                            fill="none"
                                                                            stroke-width="2"
                                                                            viewBox="0 0 24 24"
                                                                            aria-hidden="true"
                                                                            height="1em"
                                                                            width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                        >
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between mb-6">
                                                        <label class="checkbox-label mb-0">
                                                            <input class="checkbox" type="checkbox" value="true" checked>
                                                            <span class="ltr:ml-2 rtl:mr-2">Ghi nhớ đăng nhập</span>
                                                        </label>
                                                    </div>
                                                    <button class="btn btn-solid w-full" type="submit" name="submit">Đăng Nhập</button>
                                                   
                                                </div>
                                            </form>
                                            <?php
                                            if(isset($error['login'])){
                                                echo '<div class="alert alert-danger">'.$error['login'].'</div>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>                              
			</div>
		</div>

		<!-- Core Vendors JS -->
		<script src="../js/vendors.min.js"></script>

		<!-- Other Vendors JS -->

		<!-- Page js -->

		<!-- Core JS -->
		<script src="../js/app.min.js"></script>
	</body>
