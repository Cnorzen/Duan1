<?php
// ShowArray($data);

?> 
<head>
<title>Kết quả tìm kiếm | Crown store</title>
</head>

<main id="content" class="wrapper layout-page">
  <section class="page-title z-index-2 position-relative">
    <div class="bg-body-secondary">
      <div class="container">
        <nav class="py-4 lh-30px" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center py-1">
            <li class="breadcrumb-item">
              <a href="index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="text-center py-13">
      <div class="container">
        <h2 class="mb-0">Danh sách sản phẩm</h2>
      </div>
    </div>
  </section>
  <section class="container container-xxl">
    <div class="tool-bar mb-11 align-items-center justify-content-between d-lg-flex">
      <div class="tool-bar-left mb-6 mb-lg-0 fs-18px">Chúng tôi đã tìm thấy sản phẩm dành cho bạn</div>
      <div class="tool-bar-right align-items-center d-lg-flex">
        <ul class="list-unstyled d-flex align-items-center list-inline me-lg-7 me-0 mb-6 mb-lg-0">
          <li class="list-inline-item me-7"></li>
          <li class="list-inline-item d-lg-none ms-auto">
            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" class="btn btn-hover-border-primary btn-hover-bg-primary btn-hover-text-light btn-dark">
              <svg class="icon icon-SlidersHorizontal fs-4 me-4">
                <use xlink:href="#icon-SlidersHorizontal"></use>
              </svg> Bộ Lọc </a>
          </li>
        </ul>
        <ul class="list-unstyled d-flex align-items-center list-inline mb-0">
          <li class="list-inline-item me-0 w-100 w-lg-auto">
            <form action="index.php?act=search" method="POST">
              <select class="form-select w-100 w-lg-auto" name="orderby">
                <option selected="0"> Xếp theo mặc định</option>
                <option value="1">Xếp theo lượt xem</option>
                <option value="2">Xếp theo ngày thêm mới nhất</option>
                <option value="3">Giá từ nhỏ tới lớn</option>
                <option value="4">Giá từ lớn tới nhỏ</option>
              </select>
          </li>
          <li class="list-inline-item d-none d-lg-block ms-7">
            <button data-bs-toggle="offcanvas" role="button" type="submit" name="odercode" class="btn btn-hover-border-primary btn-hover-bg-primary btn-hover-text-light btn-dark">
              <svg class="icon icon-SlidersHorizontal fs-4 me-4">
                <use xlink:href="#icon-SlidersHorizontal"></use>
              </svg> Áp dụng </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <div class="container container-xxl pb-16 pb-lg-18 mb-lg-3">
    <div class="row gy-50px">
        <?php
        foreach($data as $row){
            extract($row);
        
        
        ?>
      <div class="col-sm-6  col-lg-4 col-xl-3">
        <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
          <figure class="card-img-top position-relative mb-7 overflow-hidden ">
            <a href="index.php?act=ctsp&ma_san_pham=<?php echo $ma_san_pham?>" class="hover-zoom-in d-block" title="Shield Conditioner">
              <img src="#" data-src="image/<?php echo $anh?>" class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330" height="440">
            </a>
            <div class="position-absolute product-flash z-index-2 ">
              <span class="badge badge-product-flash on-sale bg-primary"><?php
$phan_tram_giam_gia = round(($don_gia - $giam_gia) / $don_gia * 100); 
echo $phan_tram_giam_gia; // Xuất giá trị đã làm tròn
?>%</span>
            </div>
            <div class="position-absolute d-flex z-index-2 product-actions  horizontal">
            <?php
                if($so_luong == 0){
                  ?>
    


                    <button class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Sản phẩm hết hàng">
                    <svg class="icon icon-shopping-bag-open-light">
                      <use xlink:href="#icon-shopping-bag-open-light"></use>
                    </svg>
                    </button>
                    <?php
                     }else {

                    ?>
                    <form class="add-to-cart-form" action="index.php?act=cart" method="POST">
                    <!-- Hidden input to store product ID -->
                    <input type="hidden" name="ma_san_pham" value="<?php echo $ma_san_pham; ?>">
                    <!-- Hidden input to store product name -->
                    <input type="hidden" name="ten_san_pham" value="<?php echo $ten_san_pham; ?>">
                    <!-- Hidden input to store product price -->
                    <input type="hidden" name="giam_gia" value="<?php echo $giam_gia; ?>">
                    <input type="hidden" name="don_gia" value="<?php echo $don_gia; ?>">
                    <!-- Hidden input to store product quantity -->
                    <input type="hidden" name="so_luong" value="1">
                    <!-- Hidden input to store product image -->
                    <input type="hidden" name="anh" value="<?php echo $anh; ?>">


                    <button type="submit" name="addcart" class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Thêm Vào giỏ hàng">
                    <svg class="icon icon-shopping-bag-open-light">
                      <use xlink:href="#icon-shopping-bag-open-light"></use>
                    </svg>
                  </button>
                </form>
                <?php

                }
                ?>
                <form class="add-to-cart-form" action="index.php?act=wishlist" method="POST">
                    <!-- Hidden input to store product ID -->
                    <input type="hidden" name="ma_san_pham" value="<?php echo $ma_san_pham; ?>">
                    <!-- Hidden input to store product name -->
                    <input type="hidden" name="ten_san_pham" value="<?php echo $ten_san_pham; ?>">
                    <!-- Hidden input to store product price -->
                    <input type="hidden" name="giam_gia" value="<?php echo $giam_gia; ?>">
                    <input type="hidden" name="don_gia" value="<?php echo $don_gia; ?>">
                    <!-- Hidden input to store product quantity -->
                    <input type="hidden" name="so_luong" value="<?php echo $so_luong ?>">
                    <!-- Hidden input to store product image -->
                    <input type="hidden" name="anh" value="<?php echo $anh; ?>">


                    <button type="submit" name="wishlistadd" class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Thêm danh sách ưa thích">
                    <svg class="icon icon-star-light">
                      <use xlink:href="#icon-star-light"></use>
                    </svg>
                    </button>
                </form>
                </div>
          </figure>
          <div class="card-body text-center p-0">
            <span class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
              <del class=" text-body fw-500 me-4 fs-13px"><?php echo number_format($don_gia, 0, ',', '.').'đ' ?></del>
              <ins class="text-decoration-none"><?php echo number_format($giam_gia, 0, ',', '.').'đ' ?></ins>
            </span>
            <h4 class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
              <a class="text-decoration-none text-reset" href="index.php?act=ctsp&ma_san_pham=<?php echo $ma_san_pham?>"><?php echo $ten_san_pham?></a>
            </h4>
            <div class="d-flex align-items-center fs-12px justify-content-center">
              <div class="rating">
                <div class="empty-stars">
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star-o">
                      <use xlink:href="#star-o"></use>
                    </svg>
                  </span>
                </div>
                <div class="filled-stars" style="width: 80%">
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                  <span class="star">
                    <svg class="icon star text-primary">
                      <use xlink:href="#star"></use>
                    </svg>
                  </span>
                </div>
              </div>
              <span class="reviews ms-4 pt-3 fs-14px"><?php echo $luot_xem?> Đã xem</span>
            </div>
          </div>
        </div>
      </div>
      <?php
        }
        ?>
      </div>
    </div>

    
  </div>
</main>