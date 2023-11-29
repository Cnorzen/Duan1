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
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Quên mật khẩu </li>
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
          <h2 class="fs-36px mb-11 mb-lg-14">Quên mật khẩu</h2>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-10 mx-auto">
          <div class="row no-gutters">
            <div class="col-lg-6 mb-15 mb-lg-0 pe-xl-2">
              <h3 class="fs-4 mb-10">Quên mật khẩu</h3>
              <form class action="index.php?act=ifogor" method="post">
              <label for="user_login_password" class="">Nếu địa chỉ email này tồn tại chúng tôi sẽ gửi một liên kết đổi mật khẩu</label>
              <br>  
                <div class="form-group mb-6">
                  <label for="user_login_email" class="visually-hidden">Địa Chỉ Email</label>
                  <input 
                  type="email" 
                  class="form-control" 
                  id="user_login_email" 
                  name="email" 
                  placeholder="Email Address">
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-7" name="submit">Gửi liên kết</button>
               
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
</main>