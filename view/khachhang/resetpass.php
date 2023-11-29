<head>
<title>Quên mật khẩu | Crown store</title>
</head>


<main id="content" class="wrapper layout-page">
  <section class="pb-lg-20 pb-16">
    <div class="bg-body-secondary py-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
          <li class="breadcrumb-item">
            <a class="text-decoration-none text-body" href="#">Trang chủ</a>
          </li>
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Đổi Mật Khẩu </li>
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
          <h2 class="fs-36px mb-11 mb-lg-14">Đổi Mật Khẩu</h2>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-10 mx-auto">
          <div class="row no-gutters">
            <div class="col-lg-6 mb-15 mb-lg-0 pe-xl-2">
              <h3 class="fs-4 mb-10">Đổi Mật Khẩu</h3>
              <form class action="index.php?act=resetpass&session=<?php echo $_GET['session']?>" method="post">
              <label for="user_login_password" class="">Bạn vừa yêu cầu đổi mật khẩu</label>
              <br>  
                <div class="form-group mb-6">
                  <label for="user_login_email" class="visually-hidden">Mật khẩu mới</label>
                  <input 
                  type="password" 
                  class="form-control" 
                  id="user_login_email" 
                  name="password" 
                  placeholder="Mật khẩu mới">
                </div>
                <div class="form-group mb-6">
                  <label for="user_login_email" class="visually-hidden">Nhập lại mật khẩu mới</label>
                  <input 
                  type="password" 
                  class="form-control" 
                  id="user_login_email" 
                  name="repassword" 
                  placeholder="Nhập lại mật khẩu mới">
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-7" name="submit">Đổi Mât Khẩu</button>
               
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
</main>