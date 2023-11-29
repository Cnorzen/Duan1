<?php

?>

<div id="shoppingCart" data-bs-scroll="false" class="offcanvas offcanvas-end">
      <div class="offcanvas-header fs-4">
        <h4 class="offcanvas-title fw-semibold">Giỏ hàng</h4>
        <button type="button" class="btn-close btn-close-bg-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="far fa-times"></i>
        </button>
      </div>
      <div class="offcanvas-body me-xl-auto pt-0 mb-2 mb-xl-0">
        <form class="table-responsive-md shopping-cart pb-8 pb-lg-10" action="index.php?act=cartupdate" method="POST">
          <table class="table table-borderless">
            <!-- <thead>
              <tr class="fw-500">
                <td colspan="3" class="border-bottom pb-6">
                  <i class="far fa-check fs-12px border me-4 px-2 py-1 text-body-emphasis border-dark rounded-circle"></i> Your cart is saved for the next <span class="text-body-emphasis">4m34s</span>
                </td>
              </tr>
            </thead> -->
            <tbody>
              <?php
               if(isset($cart)){
                foreach($cart as $value){
                  extract($value);
                
            ?>
              <tr class="position-relative">
                <td class="align-middle text-center">
                <button type="submit" name="dellprod" href="#" class="d-block text-secondary">
                  <i class="fa fa-times"></i>
                </button>
                </td>
                <td class="shop-product">
                  <div class="d-flex align-items-center">
                    <div class="me-6">
                      <img src="image/<?php echo $anh?>" width="60" height="80" alt="natural coconut cleansing oil">
                    </div>
                    <div class>
                      <p class="card-text mb-1">
                        <span class="fs-13px fw-500 text-decoration-line-through pe-3"><?php echo number_format($don_gia, 0, ',', '.').'đ' ?></span>
                        <span class="fs-15px fw-bold text-body-emphasis"><?php echo number_format($giam_gia, 0, ',', '.').'đ' ?></span>
                      </p>
                      <p class="fw-500 text-body-emphasis"><?php echo $ten_san_pham?></p>
                    </div>
                  </div>
                </td>
                <td class="align-middle p-0">
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
              </tr>
              <?php
                }
              } else {
                echo '<tr><td colspan="3" class="text-center">Không có sản phẩm nào trong giỏ hàng</td></tr>';
              }
              ?>
            </tbody>
          </table>
        </form>
      </div>
      <div class="offcanvas-footer flex-wrap">
        <div class="d-flex align-items-center justify-content-between w-100 mb-5">

          <span class="text-body-emphasis">Tổng giá:</span>
          <span class="cart-total fw-bold text-body-emphasis"><?php
          if(isset($total)){
            echo number_format($total, 0, ',', '.') . 'đ';
          } else {
            echo '0đ';
          
          } ?></span>
        </div>
        <a href="index.php?act=checkout" class="btn btn-dark w-100 mb-7" title="Check Out">Thanh toán</a>
        <a href="index.php?act=cart" class="btn btn-outline-dark w-100" title="View shopping cart">Xem giỏ hàng</a>
      </div>
    </div>