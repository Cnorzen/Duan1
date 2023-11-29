<?php
//  $ten_khach_hang = $_SESSION['ten_khach_hang'] ;
//  $email = $_SESSION['email'];
//  $ma_khach_hang = $_SESSION['ma_khach_hang'];    
//  $avt = $_SESSION['$avt'];
 $list_banners = banner_list();


?>

<style>
  .size-img{
      width: 400px;


  }
</style>
<head>
<title>Trang chủ | Crown store</title>
</head>
<main id="content" class="wrapper layout-page">
  <section>
    <div class="slick-slider hero hero-header-02 slick-slider-dots-inside" data-slick-options="{&#34;arrows&#34;:false,&#34;autoplay&#34;:true,&#34;autoplaySpeed&#34;:9000,&#34;cssEase&#34;:&#34;ease-in-out&#34;,&#34;dots&#34;:false,&#34;fade&#34;:true,&#34;infinite&#34;:true,&#34;slidesToShow&#34;:1,&#34;speed&#34;:600}">
      
    <?php
        foreach($list_banners as $value){
            extract($value);
    ?>
    <div class="vh-100 d-flex align-items-center">
        <div class="z-index-2 container container-xxl py-21 pt-xl-10 pb-xl-11">
          <div class="hero-content text-start">
            <div data-animate="fadeInDown">
              <h1 class="mb-15 text-white hero-title-2 fw-500"><?php echo $ten_banner?> </h1>
            </div>
            <a href="<?php echo $lien_ket?>" data-animate="fadeInUp" class="pb-2 bg-transparent fw-semibold text-decoration-none hero-link btn btn-link p-0 text-white"> Khám phá ngay <svg class="icon">
                <use xlink:href="#icon-arrow-right"></use>
              </svg>
            </a>
          </div>
        </div>
        <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100  " data-bg-src="image/<?php echo $hinh_anh?>"></div>
        </div>
    <?php
        }
    
    ?>
    </div>
  </section>
  <section id="our_best_sellers_1">
    <div class="pt-14 pb-14 pt-lg-19 pb-lg-16">
      <div class="container container-xxl mb-13 d-xl-flex">
            <div class="flex-grow-1 text-left" data-animate="fadeInUp">
                <h2 class="mb-5">Sản phẩm được bán nhiều nhất</h2>
                <p class="fs-18px mb-0 mw-xl-40 mw-lg-50 mw-md-75">Bạn đang tìm kiếm một cái gì đó cụ thể? Mua sắm theo sản phẩm bán chạy nhất để tìm thấy món đồ hoàn hảo của bạn!</p>
            </div>
        </div>
            <div class="container-fluid mb-4">
                <div class="slick-slider our-best-seller-4" data-slick-options="{&#34;arrows&#34;:true,&#34;centerMode&#34;:true,&#34;centerPadding&#34;:&#34;calc((100% - 1440px) / 2)&#34;,&#34;dots&#34;:true,&#34;infinite&#34;:true,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:576,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:4}">
                    <?php
                  
                   
                    foreach($best_sell as $value){
                        extract($value);
                    ?>
                    <div data-animate="fadeInUp">
            <div class="card card-product grid-1 bg-transparent border-0">
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
                      <span class="star">
                        <svg class="icon star text-primary">
                          <use xlink:href="#star"></use>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <span class="reviews ms-4 pt-3 fs-14px"><?php echo $so_luong_ban?> Đã mua</span>
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
  </section>
  <section class="bg-section-3 ">
<div class="container container-xxl">
<div class="row align-items-end">
<div class="col-lg-4 order-2 order-lg-1 px-xl-6 pb-16 pt-12 py-lg-18 py-xl-22" data-animate="fadeInUp">
<div class="text-left">
<p class="fs-15px mb-6 ls-1 text-body-emphasis fw-semibold">BỘ SƯU TẬP MỚI</p><h2 class="fs-20 w-md-50 w-lg-100 w-xl-80 mb-4 me-7 me-md-25">Dầm & Chân Váy Nữ</h2>
<p class="fs-18px mb-0 text-body-calculate">Khám Phá bộ sưu tập mới, trẻ trung, Phù hợp với mọi lứa tuổi.</p></div>
<a href="index.php?act=listspdm&ma_loai=32" class="mt-10 btn btn-white shadow-sm">Khám phá ngay</a>
</div>
<div class="col-lg-8 order-1 order-lg-2" data-animate="fadeIn">
<img class="lazy-image img-fluid light-mode-img size-img" src="#" data-src="image/hmgoepprod (43).jpg" width="923" height="640" alt="other-01">
<img class="lazy-image dark-mode-img img-fluid size-img" src="#" data-src="image/hmgoepprod (43).jpg" width="923" height="640" alt="other-01">
</div>
</div>
</div>
</section>
  <section class="container container-xxl pt-15 pb-16 pb-lg-18 pt-lg-19">
    <div class="text-center" data-animate="fadeInUp">
      <p class="fs-15px mb-6 ls-1 text-body-emphasis fw-semibold">MUA SẮM THEO DANH MỤC</p>
      <h2 class="mb-6">Bạn còn nhiều thơi gian để mua sắm ? <br></h2>
    </div>
    <div class="row mt-13">
      <?php
      $so_luong = count_sanpham_by_loai_hang();
        foreach($so_luong as $value){
            extract($value);
      ?>
      <div class="col-lg-3 col-md-6 col-12" data-animate="fadeInUp">
        <div class="card border-0">
          <a href="index.php?act=listspdm&ma_loai=<?php echo $ma_loai?>" class="hover-shine img-scale overflow-hidden">
            <img class="lazy-image card-img-top img-scale-change img-fluid light-mode-img" src="#" data-src="image/<?php echo $anh_loai?>" width="545" height="611" alt="Bodycare">
            <img class="lazy-image dark-mode-img card-img-top img-scale-change img-fluid" src="#" data-src="image/<?php echo $anh_loai?>" width="545" height="611" alt="Bodycare">
          </a>
          <div class="card-body text-center px-0 py-7">
            <h4 class="card-title fw-semibold mb-5">
              <a href="index.php?act=listspdm&ma_loai=<?php echo $ma_loai?>"><?php echo $ten_loai?></a>
            </h4>
            <p class="card-text"><?php echo $so_luong_hang?> sản phẩm</p>
          </div>
        </div>
      </div>
        <?php
            }
        ?>
      
    </div>
    <div class="text-center mt-10">
      <a href="index.php?act=listspdm&ma_loai=all" target="_blank" class="btn btn-outline-dark"> Danh sách tất cả loại hàng </a>
    </div>
  </section>
  <section class="bg-section-3">
    <?php
        $data = sanpham_get_byid(6);
        extract($data);
    ?>
    <div class="container container-xxl">
      <div class="row align-items-center">
        <div class="col-lg-7 position-relative" data-animate="fadeIn">
          <img class="lazy-image img-fluid light-mode-img" src="#" data-src="image/<?php echo $anh?>" width="774" height="640" alt="Countdown">
          <img class="lazy-image dark-mode-img img-fluid" src="#" data-src="image/<?php echo $anh?>" width="774" height="640" alt="Countdown">
          
        </div>
        <div class="col-lg-5 py-lg-0 py-13" data-animate="fadeInUp">
          <div class="text-left">
            <p class="fs-15px mb-6 ls-1 text-body-emphasis fw-semibold">KHUYẾN MÃI ĐẶC BIỆT <span class="badge bg-primary fs-15px fw-500 ms-4">-<?php
$phan_tram_giam_gia = ($don_gia - $giam_gia) / $don_gia * 100; 
echo $phan_tram_giam_gia ?>% </span>
            </p>
            <h2 class="mb-6"><?php echo $ten_san_pham?></h2>
          </div>
          <div class="d-flex countdown ms-n4 ms-md-n7" data-countdown="true" data-countdown-end="Jan 27, 2024 18:24:25">
            <div class="countdown-item text-center px-md-7 px-4 fs-1">
              <span class="day fw-semibold text-primary font-primary"></span>
            </div>
            <div class="separate fw-semibold fs-1 text-primary">:</div>
            <div class="countdown-item text-center px-md-7 px-4 fs-1">
              <span class="hour fw-semibold text-primary font-primary"></span>
            </div>
            <div class="separate fw-semibold fs-1 text-primary">:</div>
            <div class="countdown-item text-center px-md-7 px-4 fs-1">
              <span class="minute fw-semibold text-primary font-primary"></span>
            </div>
            <div class="separate fw-semibold fs-1 text-primary">:</div>
            <div class="countdown-item text-center px-md-7 px-4 fs-1">
              <span class="second fw-semibold text-primary font-primary"></span>
            </div>
          </div>
          <a href="index.php?act=ctsp&ma_san_pham=<?php echo $ma_san_pham?>" class="mt-11 btn btn-white shadow-sm">Mua sản phẩm với giá <?php echo number_format($giam_gia, 0, ',', '.').'đ' ?></a>
        </div>
      </div>
    </div>
  </section>
  <!-- <section id="from_our_blog">
    <div class="pt-14 pb-15 py-lg-18 mb-3 mt-1">
      <div class="container">
        <div class="text-center" data-animate="fadeInUp">
          <h2 class="mb-6">From Our Blog</h2>
          <p class="fs-18px mb-0 mw-xl-50 mw-lg-75 ms-auto me-auto">Our bundles were designed to conveniently package your tanning essentials while saving you money.</p>
        </div>
      </div>
      <div class="container container-xxl mt-12 pt-3">
        <div class="slick-slider" data-slick-options="{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;dots&#34;:true,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:768,&#34;settings&#34;:{&#34;dots&#34;:true,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:3}">
          <div>
            <article class="card card-post-grid-3 bg-transparent border-0" data-animate="fadeInUp">
              <figure class="card-img-top mb-8 position-relative">
                <a href="#" class="hover-shine hover-zoom-in d-block" title="How to Plop Hair for Bouncy, Beautiful Curls">
                  <img data-src="./assets/images/blog/post-01-450x290.jpg" class="img-fluid lazy-image w-100" alt="How to Plop Hair for Bouncy, Beautiful Curls" width="450" height="290" src="#">
                </a>
              </figure>
              <div class="card-body p-0">
                <ul class="post-meta list-inline lh-1 d-flex flex-wrap fs-13px text-uppercase ls-1 fw-semibold m-0">
                  <li class="list-inline-item">
                    <a class="text-reset text-decoration-none text-primary-hover" href="#" title="Life style">Life style</a>
                  </li>
                  <li class="border-start ps-5 ms-5 list-inline-item">Jan 19th, 2021</li>
                </ul>
                <h4 class="card-title lh-base mt-5 pt-2 mb-0">
                  <a class="text-decoration-none" href="https://templates.g5plus.net/blog/details-01.html" title="How to Plop Hair for Bouncy, Beautiful Curls">How to Plop Hair for Bouncy, Beautiful Curls</a>
                </h4>
              </div>
            </article>
          </div>
          <div>
            <article class="card card-post-grid-3 bg-transparent border-0" data-animate="fadeInUp">
              <figure class="card-img-top mb-8 position-relative">
                <a href="#" class="hover-shine hover-zoom-in d-block" title="Which foundation formula is right for your skin?">
                  <img data-src="./assets/images/blog/post-05-450x290.jpg" class="img-fluid lazy-image w-100" alt="Which foundation formula is right for your skin?" width="450" height="290" src="#">
                </a>
              </figure>
              <div class="card-body p-0">
                <ul class="post-meta list-inline lh-1 d-flex flex-wrap fs-13px text-uppercase ls-1 fw-semibold m-0">
                  <li class="list-inline-item">
                    <a class="text-reset text-decoration-none text-primary-hover" href="#" title="Life style">Life style</a>
                  </li>
                  <li class="border-start ps-5 ms-5 list-inline-item">Jan 19th, 2021</li>
                </ul>
                <h4 class="card-title lh-base mt-5 pt-2 mb-0">
                  <a class="text-decoration-none" href="https://templates.g5plus.net/blog/details-01.html" title="Which foundation formula is right for your skin?">Which foundation formula is right for your skin?</a>
                </h4>
              </div>
            </article>
          </div>
          <div>
            <article class="card card-post-grid-3 bg-transparent border-0" data-animate="fadeInUp">
              <figure class="card-img-top mb-8 position-relative">
                <a href="#" class="hover-shine hover-zoom-in d-block" title="How To Choose The Right Sofa for your home">
                  <img data-src="./assets/images/blog/post-06-450x290.jpg" class="img-fluid lazy-image w-100" alt="How To Choose The Right Sofa for your home" width="450" height="290" src="#">
                </a>
              </figure>
              <div class="card-body p-0">
                <ul class="post-meta list-inline lh-1 d-flex flex-wrap fs-13px text-uppercase ls-1 fw-semibold m-0">
                  <li class="list-inline-item">
                    <a class="text-reset text-decoration-none text-primary-hover" href="#" title="Life style">Life style</a>
                  </li>
                  <li class="border-start ps-5 ms-5 list-inline-item">Jan 19th, 2021</li>
                </ul>
                <h4 class="card-title lh-base mt-5 pt-2 mb-0">
                  <a class="text-decoration-none" href="https://templates.g5plus.net/blog/details-01.html" title="How To Choose The Right Sofa for your home">How To Choose The Right Sofa for your home</a>
                </h4>
              </div>
            </article>
          </div>
        </div>
        <div class="text-center pt-2" data-animate="fadeInUp">
          <a href="#" class="mt-12 btn btn-outline-dark">View All Posts</a>
        </div>
      </div>
    </div>
  </section> -->
  <section class="bg-section-2 pt-lg-17 pb-lg-17 pt-15 pb-15">
    <div class="container text-center">
      <div class="mx-auto mb-11 text-center" style="max-width:500px" data-animate="fadeInUp">
        <h3 class="mb-6">Luôn cập nhật với tất cả tin tức và ưu đãi độc quyền</h3>
      </div>
      <form class="mx-auto" style="max-width: 546px" data-animate="fadeInUp">
        <div class="text-center">
          <div class=" input-group position-relative mb-11 form-border-transparent">
            <input type="email" class="form-control bg-body rounded-left" placeholder="Enter your email address">
            <button type="submit" class=" btn btn-dark btn-hover-bg-primary btn-hover-border-primary rounded ms-0">Đăng ký ngay</button>
          </div>
          <div class="form-check d-flex justify-content-center">
            <input class="form-check-input me-4 rounded" type="checkbox" value id="flexCheckDefault">
            <label class="form-check-label text-body fs-14px" for="flexCheckDefault"> Tôi đồng ý <a href="#" class="text-decoration-none text border-bottom">điều khoản & dịch vụ</a> và <a href="#" class="text-decoration-none border-bottom">bảo vệ dữ liệu</a>
            </label>
          </div>
        </div>
      </form>
    </div>
  </section>
  <section class="pt-12 pb-lg-13 pb-13">
    <div class="container container-xxl">
      <div class="row">
        <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
          <div class="icon-box icon-box-style-1 card border-0 text-center">
            <div class="icon-box-icon card-img fs-70px text-primary">
              <svg class="icon">
                <use xlink:href="#icon-box-01"></use>
              </svg>
            </div>
            <div class="icon-box-content card-body pt-4">
              <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Miễn phí ship</h3>
              <p class="icon-box-desc card-text fs-18px mb-0">Miễn phí ship từ các đơn hàng 200.000 VND trở lên</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
          <div class="icon-box icon-box-style-1 card border-0 text-center">
            <div class="icon-box-icon card-img fs-70px text-primary">
              <svg class="icon">
                <use xlink:href="#icon-box-02"></use>
              </svg>
            </div>
            <div class="icon-box-content card-body pt-4">
              <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Hoàn trả</h3>
              <p class="icon-box-desc card-text fs-18px mb-0">Với 30 ngày hoàn trả nếu sản phẩm có lỗi.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
          <div class="icon-box icon-box-style-1 card border-0 text-center">
            <div class="icon-box-icon card-img fs-70px text-primary">
              <svg class="icon">
                <use xlink:href="#icon-box-03"></use>
              </svg>
            </div>
            <div class="icon-box-content card-body pt-4">
              <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Online Support</h3>
              <p class="icon-box-desc card-text fs-18px mb-0">24/7</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
          <div class="icon-box icon-box-style-1 card border-0 text-center">
            <div class="icon-box-icon card-img fs-70px text-primary">
              <svg class="icon">
                <use xlink:href="#icon-box-04"></use>
              </svg>
            </div>
            <div class="icon-box-content card-body pt-4">
              <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Thanh Toán dễ dàng</h3>
              <p class="icon-box-desc card-text fs-18px mb-0">Thanh toán COD, Thẻ tín dụng và VNPay</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>