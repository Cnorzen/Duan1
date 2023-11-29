<head>
  <title>Danh sách mong muốn | Crown store</title>
</head>
<main id="content" class="wrapper layout-page">
  <section class="z-index-2 position-relative pb-2 mb-12">
    <div class="bg-body-secondary mb-3">
      <div class="container">
        <nav class="py-4 lh-30px" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center py-1 mb-0">
            <li class="breadcrumb-item">
              <a title="Home" href="index.php">trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách mong muốn</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <?php

    if(isset ($_SESSION['faill_wish'])){
        echo "<div class='alert alert-danger' role='alert'>";
        echo $_SESSION['faill_wish'];
        echo "</div>";
        unset($_SESSION['faill_wish']);
    }
   
  ?>
  <section class="container container-xxl mb-13 mb-lg-15">
    <div class="text-center">
      <h2 class="mb-13">Danh sách mong muốn</h2>
    </div>
    <form class="table-responsive-md" action="index.php?act=wishlist" method="POST">
      <table class="table" style="min-width: 710px">
        <tbody>
            <?php
        if(isset($wish)){
                foreach($wish as $value){
                        extract($value);
                        if($so_luong == 0){
                            ?>
                    <tr class="border">
                        <input type="hidden" name="ma_san_pham" value="<?php echo $ma_san_pham?>">
                        <th scope="row" class=" ps-xl-10 py-6 d-flex align-items-center border-0">
                        <button type="submit" name="dellprod" href="#" class="d-block text-secondary">
                  <i class="fa fa-times"></i>
                </button>
                        <div class="d-flex align-items-center">
                            <div class="ms-6 me-7">
                            <img src="#" data-src="image/<?php echo $anh?>" class="img-fluid lazy-image" height="100" width="75" alt>
                            </div>
                            <div>
                            <p class=" text-body-emphasis fw-semibold mb-5"><?php echo $ten_san_pham?></p>
                            <p class="fw-bold fs-14px mb-4 text-body-emphasis">
                                <span class=" fw-normal fs-13px text-decoration-line-through text-secondary pe-3"><?php echo number_format($don_gia, 0, ',', '.').'đ' ?></span>
                                <span><?php echo number_format($giam_gia, 0, ',', '.').'đ' ?></span>
                            </p>
                            </div>
                        </div>
                        </th>
                        <td class=" align-middle text-end pe-10">
                        <span class="me-6">Hết hàng</span>
                        <a class="btn fs-15px px-9 lh-sm btn-outline-dark" disabled>Sản phẩm hết hàng</a>
                        </td>
                    </tr>
                         <?php
                        
                        }  else  {
                            ?>
                            <tr class="border">
                            <input type="hidden" name="ma_san_pham" value="<?php echo $ma_san_pham?>">
                        <th scope="row" class=" ps-xl-10 py-6 d-flex align-items-center border-0">
                        <button type="submit" name="dellprod" href="#" class="d-block text-secondary">
                  <i class="fa fa-times"></i>
                </button>
                        <div class="d-flex align-items-center">
                            <div class="ms-6 me-7">
                            <img src="#" data-src="image/<?php echo $anh?>" class="img-fluid lazy-image" height="100" width="75" alt>
                            </div>
                            <div>
                            <p class=" text-body-emphasis fw-semibold mb-5"><?php echo $ten_san_pham?></p>
                            <p class="fw-bold fs-14px mb-4 text-body-emphasis">
                                <span class=" fw-normal fs-13px text-decoration-line-through text-secondary pe-3"><?php echo number_format($don_gia, 0, ',', '.').'đ' ?></span>
                                <span><?php echo number_format($giam_gia, 0, ',', '.').'đ' ?></span>
                            </p>
                            </div>
                        </div>
                        </th>
                        <td class=" align-middle text-end pe-10">
                        <span class="me-6">Còn hàng</span>
                        <a href="index.php?act=ctsp&ma_san_pham=<?php echo $ma_san_pham?>" class="btn fs-15px px-9 lh-sm btn-outline-dark">Xem sản phẩm</a>
                        </td>
                    </tr>
                    <?php
                        }
            ?>
           
          <?php
                }
            }   
        ?>
          <tr>
            <td class="border-0 py-8 px-0">
                <a href="index.php" class="btn btn-outline-dark">Tiếp tục mua hàng</a>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </section>
</main