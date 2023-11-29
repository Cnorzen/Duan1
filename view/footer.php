<footer class="pt-15 pt-lg-20 pb-16 footer bg-section-4">
<div class="container container-xxl pt-4">
<div class="row">
<?php
$data = admin_get_contract();
foreach ($data as $value) {
    extract($value);
}?>
<div class="col-lg col-md-4 col-12 mb-11 mb-lg-0 fs-14px">
<h3 class="fs-5 mb-6 ">Công Ty</h3>
<p class="pe-xl-18 lh-2">
Tên công ty: <a class href="#"><u class="fw-medium"><?=$ten_doanh_nghiep?></u></a>
</p>
<p class="pe-xl-18 lh-2">
Địa chỉ: <a class href="#"><u class="fw-medium"><?=$dia_chi?></u></a>
</p>
<p class="mb-0 lh-2"><strong class="text-body-emphasis">+84 (0)<?=$sdt?></strong>
<br>
<?=$email?>
</p>
</div>
<div class="col-lg col-md-4 col-12 mb-11 mb-lg-0">
<h3 class="fs-5 mb-6 ">Trang</h3>
<ul class="list-unstyled mb-0 fw-medium ">
<li class="pt-3 mb-4">
<a href="#" title="New Products" class="text-body">New Products</a>
</li>
<li class="pt-3 mb-4">
<a href="#" title="Best Sellers" class="text-body">Best Sellers</a>
</li>
<li class="pt-3 mb-4">
<a href="#" title="Bundle &amp; Save" class="text-body">Bundle &amp; Save</a>
</li>
<li class="pt-3 mb-4">
<a href="#" title="Online Gift Card" class="text-body">Online Gift Card</a>
</li>
</ul>
</div>
<div class="col-lg col-md-4 col-12 mb-11 mb-lg-0">
<h3 class="fs-5 mb-6 ">Thông Tin</h3>
<ul class="list-unstyled mb-0 fw-medium ">
<li class="pt-3 mb-4">
<a href="#" title="Start a Return" class="text-body">Start a Return</a>
</li>
<li class="pt-3 mb-4">
<a href="#" title="Contact Us" class="text-body">Contact Us</a>
</li>
<li class="pt-3 mb-4">
<a href="#" title="Shipping FAQ" class="text-body">Shipping FAQ</a>
</li>
<li class="pt-3 mb-4">
<a href="#" title="Terms &amp; Conditions" class="text-body">Terms &amp; Conditions</a>
</li>
<li class="pt-3 mb-4">
<a href="#" title="Privacy Policy" class="text-body">Privacy Policy</a>
</li>
</ul>
</div>
<div class="col-lg-5 col-12 mb-11 mb-lg-0">
<h3 class="mb-4 ">Good emails.</h3>
<p class="lh-2 ">Nhập Email Để Nhận Thông Tin Của Chúng Tôi.</p>
<form class=" pt-8">
<div class="input-group position-relative">
<input type="email" class="form-control bg-body rounded-left" placeholder="Enter your email address">
<button type="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary ms-0">
Đăng Ký
</button>
</div>
</form>
</div>
</div>
<div class="row align-items-center mt-0 mt-lg-20 pt-lg-4">
<div class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-center order-2 order-lg-1 fs-6 mt-8 mt-lg-0">
<p class="mb-0">© Crow store 2023</p>
<ul class="list-inline fs-18px ms-6 mb-0">
<li class="list-inline-item me-8">
<a href="#"><i class="fab fa-twitter"></i></a>
</li>
<li class="list-inline-item me-8">
<a href="#"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="list-inline-item me-8">
<a href="#"><i class="fab fa-instagram"></i></a>
</li>
<li class="list-inline-item">
<a href="#"><i class="fab fa-youtube"></i></a>
</li>
</ul>
</div>
</div>
</div>
</footer>