<?php
    if(isset($_SESSION['ma_khach_hang'])){
        $ma_khach_hang = $_SESSION['ma_khach_hang'];
        $data = get_customer_by_id($ma_khach_hang);
        // ShowArray($data);
       extract($data);
    }
?> 
<head>
<title>Thanh toán đơn hàng | Crown store</title>
</head>

<main id="content" class="wrapper layout-page">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <section class="z-index-2 position-relative pb-2 mb-12">
    <div class="bg-body-secondary mb-3">
      <div class="container">
        <nav class="py-4 lh-30px" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center py-1 mb-0">
            <li class="breadcrumb-item">
              <a title="Home" href="index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
              <a title="Shop" href="shop-layout-v2.html">Cửa hàng</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <section class="container pb-14 pb-lg-19">
    <div class="text-center">
      <h2 class="mb-6">Thanh Toán</h2>
    </div>
    <form class="pt-12" action="index.php?act=checkout" method="POST">
      <div class="row">
        <div class="col-lg-4 pb-lg-0 pb-14 order-lg-last">
          <div class="card border-0 rounded-0 shadow">
            <div class="card-header px-0 mx-10 bg-transparent py-8">
              <h4 class="fs-4 mb-8">Tổng quan đơn hàng</h4>
              <?php
              if(isset($_SESSION['cart'])){
                foreach ($cart as $value) {
                  extract($value);
              ?>
              <div class="d-flex w-100 mb-7">
                <div class="me-6">
                  <img src="#" data-src="image/<?php echo $anh?>" class="lazy-image" width="60" height="80" alt="Natural Coconut Cleansing Oil">
                </div>
                <div class="d-flex flex-grow-1">
                  <div class="pe-6">
                    <a href="#" name="ten_san_pham" class><?php echo $ten_san_pham?> <span class="text-body"> x<?php echo $so_luong?></span>
                    </a>
                    </p>
                  </div>
                  <div class="ms-auto">
                    <p class="fs-14px text-body-emphasis mb-0 fw-bold"><?php echo number_format($giam_gia, 0, ',', '.').'đ' ?></p>
                  </div>
                </div>
              </div>
              <?php
                } 
              } else{   
                echo '<p>Giỏ hàng trống</p>'; 
              }
              ?>  
            <div class="card-body px-10 py-8">
              <div class="d-flex align-items-center mb-2">
                <span>Tổng giá:</span>
                <span class="d-block ms-auto text-body-emphasis fw-bold"><?php
          if(isset($total)){
            echo number_format($total, 0, ',', '.') . 'đ';
          } else {
            echo '0đ';
          
          } ?>
          </span>
            </div>
            </div>
              <div class="d-flex align-items-center">
                <span>Mã giảm giá:</span>
                <span class="d-block ms-auto text-body-emphasis fw-bold">0 đ</span>
              </div>
            </div>
            <div class="card-footer bg-transparent py-5 px-0 mx-10">
              <div class="d-flex align-items-center fw-bold mb-6">
                <span class="text-body-emphasis p-0">Tổng:</span>
                <span class="d-block ms-auto text-body-emphasis fs-4 fw-bold"><?php
          if(isset($total)){
            echo number_format($total, 0, ',', '.') . 'đ';
          } else {
            echo '0đ';
          
          } ?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 order-lg-first pe-xl-20 pe-lg-6">
          <div class="checkout">
            <p>Bạn có mã giảm giá? <a data-bs-toggle="collapse" href="#collapsecoupon" role="button" aria-expanded="false" aria-controls="collapsecoupon">Bấm vào đây để áp dụng</a>
            </p>
            <div class="collapse" id="collapsecoupon">
              <div class="card mw-60 border-0">
                <div class="card-body py-10 px-8 my-10 border">
                  <p class="card-text text-body-emphasis mb-8"> Nếu bạn có mã giảm giá hãy nhập nó.</p>
                  <div class="input-group position-relative">
                    <input type="code" class="form-control bg-body rounded-end" placeholder="Mã giảm giá">
                    <button type="submit" name="code" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary"> Áp dụng mã giảm giá </button>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="fs-4 pt-4 mb-7">Thông tin nhân hàng</h4>
           <?php
           if(empty($data)){
           
           ?>
            <div class="mb-7">
              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Họ Và tên</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-7">
                  <input type="text" class="form-control" id="first-name" name="name" placeholder="First Name" required>
                </div>
              </div>
            </div>
            <div class="mb-7">
              <div class="row">
                <div class="col-md-8 mb-md-0 mb-7">
                  <label for="street-address" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Địa Chỉ</label>
                  <input type="text" class="form-control" id="street-address" name="diachi" required>
                </div>
              </div>
            </div>
            <div class="mb-7">
              <div class="row">
                <div class="col-md-4 mb-md-0 mb-7">
                  <label for="city" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Huyện/Xã</label>
                  <input type="text" class="form-control" id="city" name="huyen" required>
                </div>
                <div class="col-md-4 mb-md-0 mb-7">
                  <label for="state" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Tỉnh</label>
                  <input type="text" class="form-control" id="state" name="tinh" required>
                </div>
                <div class="col-md-4">
                  <label for="zip" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Mã bưu chính</label>
                  <input type="text" class="form-control" id="zip" name="zip" required>
                </div>
              </div>
            </div>
            <div class="mb-7">
              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Thông Tin liên hệ</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-7">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control" id="phone" name="sdt" placeholder="Số điện thoại" required>
                </div>
              </div>
            </div>
            <div class="mt-6 mb-5 form-check">
              <input type="checkbox" class="form-check-input rounded-0 me-4" name="customCheck6" id="customCheck5">
              <label class="text-body-emphasis" for="customCheck5">
                <span class="text-body-emphasis">Địa chỉ thanh toán cùng với địa chỉ nhận hàng</span>
              </label>
            </div>
          </div>
            <?php
            }else{
            ?>
            <div class="mb-7">
              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Họ Và tên</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-7">
                  <input type="text" class="form-control" id="first-name" name="name" value="<?php echo $ten_khach_hang ?>" required>
                </div>
              </div>
            </div>  
            <div class="mb-7">
              <div class="row">
                <div class="col-md-8 mb-md-0 mb-7">
                  <label for="street-address" class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Địa Chỉ</label>
                  <input type="text" class="form-control" id="street-address" name="diachi" value="<?php echo $dia_chi ?>" required>
                </div>
              </div>    
            </div>
            <div class="mb-7">
              <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Thông Tin liên hệ</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-7">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email"  value="<?php echo $email?>" >
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control" id="phone" name="sdt" placeholder="Số điện thoại" value="<?php echo $sdt?>">
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control" id="phone" name="makh" placeholder="Số điện thoại" value="<?php echo $ma_khach_hang?>" hidden>
                </div>
              </div>
            </div>
            <div class="mt-6 mb-5 form-check">
              <input type="checkbox" class="form-check-input rounded-0 me-4" name="customCheck6" id="customCheck5">
              <label class="text-body-emphasis" for="customCheck5">
                <span class="text-body-emphasis">Địa chỉ thanh toán cùng với địa chỉ nhận hàng</span>
              </label>
            </div>
        </div>
            <?php
            }
            ?>
<div class="checkout mb-7">
    <div class="mb-7">
      <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Ghi chú</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ghi chú" name="ghichu_kh"></textarea>  
    </div>
</div>
<div class="checkout mb-7">
    <div class="mb-7">
        <h4 class="fs-4 mb-8 mt-12 pt-lg-1">Phương thức thanh toán</h4>
        <div class="nav nav-tabs border-0">
            <select class="form-select" id="payment" name="phuong_thuc">
              <option value="0" selected><a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link" data-bs-toggle="tab" data-bs-target="#cod-tab">
                <svg class="icon icon-paylay fs-32px text-body-emphasis">
                    <use xlink:href="#icon-delivery-1"></use>
                </svg>
                <span class="ms-3 text-body-emphasis fw-semibold fs-6">COD</span>
            </a>
            </option>
            <option value="1">
            <a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link active" data-bs-toggle="tab" data-bs-target="#credit-card-tab">
                <svg class="icon icon-paylay fs-32px text-body-emphasis">
                    <use xlink:href="#icon-card"></use>
                </svg>
                <span class="ms-3 text-body-emphasis fw-semibold fs-6">Thẻ Tín dụng</span>
            </a>
            </option>
            <option value="2"> 
            <a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link" data-bs-toggle="tab" data-bs-target="#vnpay-tab">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6" height="2em">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6.75h.75v.75h-.75v-.75zM6.75 16.5h.75v.75h-.75v-.75zM16.5 6.75h.75v.75h-.75v-.75zM13.5 13.5h.75v.75h-.75v-.75zM13.5 19.5h.75v.75h-.75v-.75zM19.5 13.5h.75v.75h-.75v-.75zM19.5 19.5h.75v.75h-.75v-.75zM16.5 16.5h.75v.75h-.75v-.75z"></path>
                </svg>
                <span class="ms-3 text-body-emphasis fw-semibold fs-6">VNPay QR</span>
    
            </a>
            </option>
            </select>
                <input type="hidden"  name="bankCode" value="">
                <input type="hidden" id="language" name="language" value="vn">
                <input type="hidden" name="amount" value="<?php echo $total?>">
        </div>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary px-11 mt-md-7 mt-4">Đặt Hàng</button>
        </div>
      </div>
      </div>
    </form>
  </section>
</main>
<script>
$(document).ready(function() {
    // Hide all payment-related fields initially
    $(".tab-content .tab-pane").hide();

    // Show the active tab
    $(".tab-content .tab-pane.active").show();

    // Handle tab change event
    $(".nav-tabs .nav-link").on("click", function() {
        // Hide all payment-related fields
        $(".tab-content .tab-pane").hide();

        // Show the selected tab
        var targetTab = $(this).data("bs-target");
        $(targetTab).show(); // Add '#' to form the correct ID selector
    });
});
</script>
