<head>
<title>Đăng nhập | Crown store</title>
</head>


<main id="content" class="wrapper layout-page">
  <section class="pb-lg-20 pb-16">
    <div class="bg-body-secondary py-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
          <li class="breadcrumb-item">
            <a class="text-decoration-none text-body" href="#">Trang chủ</a>
          </li>
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Đăng nhập </li>
        </ol>
        
      </nav>
    </div>
    <?php
     if(isset($error)){
        echo "<div class='alert alert-danger' role='alert'>";
        foreach($error as $err){
            echo $err."<br>";
        }
        echo "</div>";
    }
    if(isset ($_SESSION['sussec'])){
        echo "<div class='alert alert-success' role='alert'>";
        echo $_SESSION['sussec'];
        echo "</div>";
        unset($_SESSION['sussec']);
    }
    if(isset ($_SESSION['faill_login'])){
        echo "<div class='alert alert-danger' role='alert'>";
        echo $_SESSION['faill_login'];
        echo "</div>";
        unset($_SESSION['faill_login']);
    }
    
    ?>
    <div class="container">
      <div class=" text-center pt-13 mb-12 mb-lg-15">
        <div class="text-center">
          <h2 class="fs-36px mb-11 mb-lg-14">Đăng nhập</h2>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-10 mx-auto">
          <div class="row no-gutters">
            <div class="col-lg-6 mb-15 mb-lg-0 pe-xl-2">
              <h3 class="fs-4 mb-10">Đăng Nhập</h3>
              <form class action="index.php?act=login" method="post">
                <div class="form-group mb-6">
                  <label for="user_login_email" class="visually-hidden">Địa Chỉ Email</label>
                  <input 
                  type="email" 
                  class="form-control" 
                  id="user_login_email" 
                  name="email" 
                  placeholder="Email Address">
                </div>
                <div class="form-group mb-6">
                  <label for="user_login_password" class="visually-hidden">Mật Khẩu</label>
                  <input 
                  type="password" 
                  class="form-control" 
                  id="user_login_password" 
                  placeholder="Password" 
                  name="password">
                </div>
                <a href="index.php?act=ifogor" class="d-inline-block fs-15 lh-12 mb-7">Quên mật khẩu ?</a>
                <button type="submit" class="btn btn-primary w-100 mb-7" name="submit">Đăng Nhập</button>
                <div class="form-check mb-7 d-flex">
                  <input type="checkbox" class="form-check-input rounded-0" id="customCheck1" name="remember">
                  <label class="form-check-label fs-15 ps-4 text-body-emphasis" for="customCheck1">Luôn luôn đăng nhập</label>
                </div>
              </form>
            </div>
            <div class="col-lg-6 ps-lg-6 ps-xl-12">
              <h3 class="fs-4 mb-8">Khách hàng mới ?</h3>
              <p class="mb-8">Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể thực hiện quy trình thanh toán nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn hàng trong tài khoản của mình</p>
              <a href="index.php?act=register" class="btn btn-primary">Đăng Ký</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
</main>