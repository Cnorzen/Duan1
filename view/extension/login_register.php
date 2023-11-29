<div class="modal" id="signInModal" tabindex="-1" aria-labelledby="signInModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header text-center border-0 pb-0">
            <button type="button" class="btn-close position-absolute end-5 top-5" data-bs-dismiss="modal" aria-label="Close"></button>
            <h3 class="modal-title w-100" id="signInModalLabel">Đăng Nhập</h3>
          </div>
          <div class="modal-body px-sm-13 px-8">
            <p class="text-center fs-16 mb-10">Bạn chưa có tài khoản? <a href="#" data-bs-toggle="modal" data-bs-target="#signUpModal" class="text-black">Đăng ký ngay</a></p>
            <form action="index.php?act=login" method="POST">
              <input name="email" type="email" class="form-control mb-5" placeholder="Email của bạn" >
              <input name="password" type="password" class="form-control" placeholder="Mật khẩu">
              <div class="d-flex align-items-center justify-content-between mt-8 mb-7">
                <div class="custom-control d-flex form-check">
                  <input name="stay-signed-in" type="checkbox" class="form-check-input rounded-0 me-3" id="staySignedIn">
                  <label class="custom-control-label text-body" for="staySignedIn">Giữ đăng nhặp</label>
                </div>
                <a href="index.php?act=ifogor" class="text-secondary">Quêm mật khẩu ?</a>
              </div>
              <button type="submit" value="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary w-100">Đăng Nhập</button>
            </form>
          </div>

        </div>
      </div>
    </div>
    <div class="modal" id="signUpModal" tabindex="-1" aria-labelledby="signUpModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header text-center border-0 pb-0">
            <button type="button" class="btn-close position-absolute end-5 top-5" data-bs-dismiss="modal" aria-label="Close"></button>
            <h3 class="modal-title w-100" id="signUpModalLabel">Đăng ký</h3>
          </div>
          <div class="modal-body px-sm-13 px-8">
            <p class="text-center fs-16 mb-10">Bạn đã có tài khoản ? <a href="#" data-bs-toggle="modal" data-bs-target="#signInModal" class="text-black">Đăng nhập</a>
            </p>
            <form action="index.php?act=register" method="POST">
              <input name="hoten" type="text" class="form-control border-1 mb-5" placeholder="Họ và Tên">
              <input name="email" type="email" class="form-control border-1 mb-5" placeholder="Email Của bạn " >
              <input name="phonenumber" type="text" class="form-control border-1 mb-5" placeholder="Số Điện Thoại">
              <input name="password" type="password" class="form-control border-1" placeholder="Mật khẩu">
              <input name="repassword" type="password" class="form-control border-1" placeholder="Nhập lại mật khẩu">
              <div class="d-flex align-items-center mt-8 mb-7">
                <div class="form-check">
                  <input name="agree" type="checkbox" class="form-check-input rounded-0 me-3" id="agreePolicyTerm">
                  <label class="custom-control-label text-body" for="agreePolicyTerm">Tôi đồng ý với <a href="#" class="text-black">Điều khoản</a> và <a href="#" class="text-black">dịch vụ</a>
                  </label>
                </div>
              </div>
              <button type="submit" value="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary w-100">Đăng Ký</button>
            </form>
          </div>
          
        </div>
      </div>
    </div>