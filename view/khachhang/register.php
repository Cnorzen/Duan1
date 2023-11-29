<head>
<title>Đăng ký | Crown store</title>
</head>

<main id="content" class="wrapper layout-page">
  <section class="pb-lg-20 pb-16">
    <div class="bg-body-secondary py-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
          <li class="breadcrumb-item">
            <a class="text-decoration-none text-body" href="#">Trang chủ</a>
          </li>
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Đăng Ký </li>
        </ol>
      </nav>
    </div>
    <div class="container">
      <?php
       if(isset($error)){
        echo "<div class='alert alert-danger' role='alert'>";
        foreach($error as $err){
            echo $err."<br>";
        }
        echo "</div>";
    }
      
      ?>
      <div class=" text-center pt-13 mb-12 mb-lg-15">
        <div class="text-center">
          <h2 class="fs-36px mb-11 mb-lg-14">Đăng Ký</h2>
        </div>
      </div>
      <div class="col-lg-5 col-md-8 mx-auto">
        <form action="index.php?act=register" method="post">
          <div class="mb-6">
            <label for="first_name" >Địa chỉ email</label>
            <input name="email" id="email" type="email" class="form-control" placeholder="email" >
          </div>
          <div class="mb-6">
            <label for="last_name" >Số điện thoại</label>
            <input name="phonenumber" id="" type="number" class="form-control" placeholder="Số điện Thoại" >
          </div>
          <div class="mb-6">
            <label for="email" >Họ Và Tên</label>
            <input name="hoten" id="" type="text" class="form-control" placeholder="họ và tên" >
          </div>
          <div class="mb-7">
            <label for="password" >Mật Khẩu</label>
            <input name="password" id="password" type="password" class="form-control" placeholder="Password" >
          </div>
          <div class="mb-7">
            <label for="password" > Nhập lại mật Khẩu</label>
            <input name="repassword" id="password" type="password" class="form-control" placeholder="Password" >
          </div>
          <div class="form-check mb-7">
            <input name="agree" type="checkbox" class="form-check-input rounded-0" id="agree_terms">
            <label class="form-check-label text-secondary" for="agree_terms" required> Tôi đồng ý <a href="#" class="text-decoration-underline">Điều khoản</a> Và <a href="#" class="text-decoration-underline">Dịch Vụ</a>
            </label>
          </div>
          <input type="submit" name="submit" class="btn btn-primary w-100" value="Đăng ký">
          <div class="border-bottom mt-10"></div>
          <div class="text-center mt-n4 lh-1 mb-7"></div>
        </form>
      </div>
    </div>
  </section>
</main>