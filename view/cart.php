<main id="content" class="wrapper layout-page">
  <section class="z-index-2 position-relative pb-2 mb-12">
    <div class="bg-body-secondary mb-3">
      <div class="container">
        <nav class="py-4 lh-30px" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center py-1 mb-0">
            <li class="breadcrumb-item">
              <a title="Home" href="index.html">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
              <a title="Shop" href="index.html">Cửa hàng</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="shopping-cart">
      <h2 class="text-center fs-2 mt-12 mb-13">Giỏ hàng</h2>
      <form class="table-responsive-md pb-8 pb-lg-10" action="index.php?act=cartupdate" method="POST">
        <table class="table border">
          <thead class="bg-body-secondary">
            <tr class="fs-15px letter-spacing-01 fw-semibold text-uppercase text-body-emphasis">
              <th scope="col" class="fw-semibold border-1 ps-11">Giỏ hàng</th>
              <th scope="col" class="fw-semibold border-1">Số lượng</th>
              <th colspan="2" class="fw-semibold border-1">Tổng giá</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(isset($cart)){
                foreach($cart as $value){
                        extract($value);
            ?>
            <tr class="position-relative">
              <th scope="row" class="pe-5 ps-8 py-7 shop-product">
                <div class="d-flex align-items-center">
                  <div class="form-check">
                    <input class="form-check-input rounded-0" type="checkbox" name="check-product" value="checkbox">
                  </div>
                  <div class="ms-6 me-7">
                    <img src="#" data-src="image/<?php echo $anh?>" class="lazy-image" width="75" height="100" alt="Natural Coconut Cleansing Oil">
                  </div>
                  <div class>
                    <p class="fw-500 mb-1 text-body-emphasis"><?php echo $ten_san_pham?></p>
                    <p class="card-text">
                      <span class="fs-13px fw-500 text-decoration-line-through pe-3"><?php echo number_format($don_gia, 0, ',', '.').'đ' ?></span>
                      <span class="fs-15px fw-bold text-body-emphasis"><?php echo number_format($giam_gia, 0, ',', '.').'đ' ?></span>
                    </p>
                  </div>
                </div>
              </th>
              <td class="align-middle">
                <div class="input-group position-relative shop-quantity">
                  <a href="#" class="shop-down position-absolute z-index-2">
                    <i class="far fa-minus"></i>
                  </a>
                 <input name="so_luong[]" type="number" class="form-control form-control-sm px-10 py-4 fs-6 text-center border-0" value="<?php echo $so_luong ?>" required>
                <input name="ma_san_pham" type="hidden" value="<?php echo $ma_san_pham?>" hidden>  
                  <a href="#" class="shop-up position-absolute z-index-2">
                    <i class="far fa-plus"></i>
                  </a>
                </div>
              </td>
              
              <td class="align-middle">
                <p class="mb-0 text-body-emphasis fw-bold mr-xl-11"><?php
                $tong_gia = $so_luong * $giam_gia;
                echo number_format($tong_gia, 0, ',', '.').'đ' 
                ?></p>
              </td>
              <td class="align-middle text-end pe-8">

                <button type="submit" name="dellprod" href="#" class="d-block text-secondary">
                  <i class="fa fa-times"></i>
                </button>
              </td>
            </tr>
            <?php
                }
            } else {
            ?>
            <tr>
                <td colspan="4" class="text-center py-10">
                    <p class="fs-15px text-body-emphasis mb-0">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                    <a href="index.php" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary mt-5" title="Countinue Shopping">Tiếp tục mua sắm</a>
                </td>
            </tr>
            <?php
            }   
            ?>      
            <tr>
              <td class="pt-5 pb-10 position-relative bg-body ps-0 left">
                <a href="index.php" title="Countinue Shopping" class="btn btn-outline-dark me-8 text-nowrap my-5"> Tiếp tục mua sắm </a>
                <button type="submit" name="clearallcart" value="Clear Shopping Cart" class="btn btn-link p-0 border-0 border-bottom border-secondary text-decoration-none rounded-0 my-5 fw-semibold ">
                  <i class="fa fa-times me-3"></i> Xóa giỏ hàng  </button>
              </td>
              <td colspan="3" class="text-end pt-5 pb-10 position-relative bg-body right pe-0">
                <button type="submit" name="updatecart" value="Update Cart" class="btn btn-outline-dark my-5">Cập nhật giỏ hàng </button>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
      <div class="row pt-8 pt-lg-11 pb-16 pb-lg-18">
        <div class="col-lg-4 pt-2">
          <h4 class="fs-24 mb-6">Mã giảm giá</h4>
          <p class="mb-7">Nhập mã giảm giá nhếu như bạn có nó.</p>
          <form action="index.php?act=coupon" method="POST">
            <input type="text" class="form-control mb-7" placeholder="Enter coupon code here">
            <button type="submit" name="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary"> Áp dụng mã </button>
          </form>
        </div>
        <div class="col-lg-4 pt-lg-0 pt-11">
          <div class="card border-0" style="box-shadow: 0 0 10px 0 rgba(0,0,0,0.1)">
            <div class="card-body px-9 pt-6">
              <div class="d-flex align-items-center justify-content-between mb-5">
                <span>Tổng ban đầu:</span>
                <span class="d-block ml-auto text-body-emphasis fw-bold"><?php if(isset($total)){
            echo number_format($total, 0, ',', '.') . 'đ';
          } else {
            echo '0đ';
          
          }  ?></span>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <span>Giảm giá:</span>
                <span class="d-block ml-auto text-body-emphasis fw-bold">$0</span>
              </div>
            </div>
            <div class="card-footer bg-transparent px-0 pt-5 pb-7 mx-9">
              <div class="d-flex align-items-center justify-content-between fw-bold mb-7">
                <span class="text-secondary text-body-emphasis">Tổng tiền:</span>
                <span class="d-block ml-auto text-body-emphasis fs-4 fw-bold"><?php if(isset($total)){
            echo number_format($total, 0, ',', '.') . 'đ';
          } else {
            echo '0đ';
          
          }  ?></span>
              </div>
              <a href="index.php?act=checkout" class="btn w-100 btn-dark btn-hover-bg-primary btn-hover-border-primary" title="Check Out">Thanh toán</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>