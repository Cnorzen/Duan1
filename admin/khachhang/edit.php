<?php
extract($data);
?>
<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3>Thông tin khách hàng</h3>
                                        </div>
                                        <div class="card adaptable-card">
                                            <div class="card-body">
                                                <div class="tabs">
                                                    <div role="tablist" class="tab-list tab-list-underline">
                                                        <button class="tab-nav tab-nav-underline active" data-bs-toggle="tab" data-bs-target="#tab-profile" role="tab" aria-selected="true" tabindex="0">
                                                            Thông tin cơ bản
                                                        </button>
                                                        <button class="tab-nav tab-nav-underline" data-bs-toggle="tab" data-bs-target="#tab-billing" role="tab" aria-selected="false" tabindex="0">
                                                            Đơn hàng
                                                        </button>
                                                    </div>
                                                    <div class="tab-content px-4 py-6">
                                                        <div class="tab-pane fade show active" id="tab-profile" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                            <form action="admin.php?act=editkh" method="post" enctype="multipart/form-data" >
                                                             <div class="form-container vertical">
                                                                    <div>
                                                                        <h5>Thông tin cơ bản</h5>
                                                                        
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Tên khách hàng</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <span class="input-wrapper">
                                                                                        <div class="input-suffix-start">
                                                                                            <svg
                                                                                                stroke="currentColor"
                                                                                                fill="none"
                                                                                                stroke-width="2"
                                                                                                viewBox="0 0 24 24"
                                                                                                aria-hidden="true"
                                                                                                class="text-xl"
                                                                                                height="1em"
                                                                                                width="1em"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                            >
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="name"
                                                                                            autocomplete="off"
                                                                                            placeholder="Name"
                                                                                            value="<?php echo $ten_khach_hang?>"
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Email</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <span class="input-wrapper">
                                                                                        <div class="input-suffix-start">
                                                                                            <svg
                                                                                                stroke="currentColor"
                                                                                                fill="none"
                                                                                                stroke-width="2"
                                                                                                viewBox="0 0 24 24"
                                                                                                aria-hidden="true"
                                                                                                class="text-xl"
                                                                                                height="1em"
                                                                                                width="1em"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                            >
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="email"
                                                                                            name="email"
                                                                                            autocomplete="off"
                                                                                            placeholder="Email"
                                                                                            value="<?php  echo $email ?>"
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Avatar</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <div class="upload cursor-pointer">
                                                                                        <input
                                                                                            class="upload-input"
                                                                                            type="file"
                                                                                            title=""
                                                                                            name="avt"
                                                                                            value=""
                                                                                            onchange="previewImagesindex(event)"
                                                                                        >
                                                                                        <span class="avatar avatar-circle avatat-lg border-2 border-white dark:border-gray-800 shadow-lg" data-avatar-size="60">
                                                                                            <img class="avatar-img avatar-circle" src="../image/<?php echo $avt?>" loading="lazy">
                                                                                            <img class="avatar-img avatar-circle" id="image-preview-container" loading="lazy">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                                        <div class="font-semibold">Mã khách hàng</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <span class="input-wrapper">
                                                                                        <div class="input-suffix-start">
                                                                                            <svg
                                                                                                stroke="currentColor"
                                                                                                fill="none"
                                                                                                stroke-width="2"
                                                                                                viewBox="0 0 24 24"
                                                                                                aria-hidden="true"
                                                                                                class="text-xl"
                                                                                                height="1em"
                                                                                                width="1em"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                            >
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="makh"
                                                                                            autocomplete="off"
                                                                                            placeholder="Title"
                                                                                            value="<?php echo $ma_khach_hang?>"
                                                                                            readonly
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-8">
                                                                        <h5>Liên lạc</h5>
                                                                        <p>Thông tin liên lạc khách hàng</p>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Địa chỉ</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <span class="input-wrapper">
                                                                                        <div class="input-suffix-start">
                                                                                            <svg
                                                                                                stroke="currentColor"
                                                                                                fill="none"
                                                                                                stroke-width="2"
                                                                                                viewBox="0 0 24 24"
                                                                                                aria-hidden="true"
                                                                                                class="text-xl"
                                                                                                height="1em"
                                                                                                width="1em"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                            >
                                                                                            
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819"></path>
                                                                        </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="diachi"
                                                                                            autocomplete="off"
                                                                                            placeholder="Địa chỉ khách hàng chưa cập nhật"
                                                                                            value="<?php echo $dia_chi?>"

                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Số Điện Thoại</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <span class="input-wrapper undefined">
                                                                                        <div class="input-suffix-start">
                                                                                            <svg
                                                                                                stroke="currentColor"
                                                                                                fill="none"
                                                                                                stroke-width="2"
                                                                                                viewBox="0 0 24 24"
                                                                                                aria-hidden="true"
                                                                                                class="text-xl"
                                                                                                height="1em"
                                                                                                width="1em"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                            >
                                                                                            
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>

                                                                                            </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="sdt"
                        
                                                                                            autocomplete="off"
                                                                                            placeholder="số điện thoại khách hàng chưa cập nhật"
                                                                                            value="<?php echo $sdt?>"
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                                        <div class="font-semibold">Xác thực tài khoản</div>
                                                                        <div class="col-span-2">
                                                                        <div class="form-item vertical mb-0 max-w-[700px]">
                                                                            <select class="form-select" name="trangthai" id="trangthai">
                                                                                <option value="0" <?php if($trang_thai==0) echo "selected";?>>Chưa xác thực</option>
                                                                                <option value="1" <?php if($trang_thai==1) echo "selected";?>>Đã xác thực</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="flex mt-4 ltr:justify-end gap-2">
                                                                        <button class="btn btn-default" type="button">
                                                                            Reset
                                                                        </button>
                                                                        <button class="btn btn-solid" type="submit" name="submit">
                                                                            Chỉnh sửa
                                                                        </button>
                                                                    </div>                                                                                            
                                                                </div>
                                                            </form>
                                                        </div>
                                                        
                                                        <div class="tab-pane fade" id="tab-billing" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                                            <form action="#">
                                                                <div class="form-container vertical">
                                                                    <div>
                                                                        <h5>Thông tin thanh toán</h5>
                                                                        <p>Thông tin thanh toán khách hàng</p>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600">
                                                                        <div class="font-semibold">Thẻ tín dụng</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <div class="rounded-lg border border-gray-200 dark:border-gray-600">
                                                                                        <div class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-600">
                                                                                            <div class="flex items-center">
                                                                                                <img src="img/others/img-8.png" alt="visa">
                                                                                                <div class="ml-3 rtl:mr-3">
                                                                                                    <div class="flex items-center">
                                                                                                        <div class="text-gray-900 dark:text-gray-100 font-semibold">khachhang3 •••• 4242</div>
                                                                                                        <div class="tag bg-sky-100 text-sky-600 dark:bg-sky-500/20 dark:text-sky-100 rounded-md border-0 mx-2">
                                                                                                            <span class="capitalize"> Primary</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <span>Expired Dec 2025</span>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8">
                                                                        <div class="font-semibold">Nguồn thanh toán khác</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <div class="rounded-lg border border-gray-200 dark:border-gray-600">
                                                                                        <div class="flex items-center justify-between p-4">
                                                                                            <div class="flex items-center">
                                                                                                <img src="img/others/img-10.png" alt="visa">
                                                                                                <div class="ml-3 rtl:mr-3 font-semibold">ronnie_vergas@infotech.io</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mt-6">
                                                                        <h5>Lịch sử đơn hàng</h5>
                                                                        <p>Lịch sử đơn hàng mới nhất của khách hàng</p>
                                                                    </div>
                                                                    <div class="mt-4 rounded-lg border border-gray-200 dark:border-gray-600">
                                                                        <div class="overflow-x-auto">
                                                                            <table class="table-default table-hover">
                                                                                <thead class="!bg-transparent">
                                                                                    <tr>
                                                                                        <th>Mã đơn hàng</th>
                                                                                        <th>Phương thức thanh toán</th>
                                                                                        <th>Trạng thái</th>
                                                                                        <th>Ngày đặt</th>
                                                                                        <th>Tổng</th>
                                                                                        <th></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php
                                                                                        foreach($data1 as $key => $value){
                                                                                            extract($value);
                                                                                    
                                                                                    
                                                                                    ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div>
                                                                                                <span class="cursor-pointer">#<?php echo $ma_don_hang?></span>
                                                                                            </div>
                                                                                        </td>
                                                                                        <?php
                                                                                        if($phuong_thuc_thanh_toan == 0){
                                                                                            ?>
                                                                                            <td>
                                                                                                <div class="flex items-center">
                                                                                                <span>COD</span>
                                                                                                </div>
                                                                                            </td>
                                                                                            <?php
                                                                                        }
                                                                                            elseif($phuong_thuc_thanh_toan == 1){
                                                                                                ?>
                                                                                                <td>
                                                                                                        <div class="flex items-center">
                                                                                                            <span>Thẻ tín Dụng</span>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <?php
                                                                                                
                                                                                            } else {
                                                                                                ?>
                                                                                                <td>
                                                                                                <div class="flex items-center">
                                                                                                <span>Ví VNpay</span>
                                                                                                </div>
                                                                                            </td>
                                                                                            <?php
                                                                                            }
                                                                                            ?>
                                                               <?php
                                                        if ($trang_thai_don == 0) {
                                                                ?>
                                                                <td>
                                                                    <div class="flex items-center">
                                                                        <span class="badge-dot bg-yellow-500"></span>
                                                                        <span class="ml-2 rtl:mr-2 capitalize font-semibold text-yellow-500">Cần Xác thực</span>
                                                                    </div>
                                                                </td>
                                                                <?php
                                                            } elseif ($trang_thai_don == 1) {
                                                                ?>
                                                                <td>
                                                                    <div class="flex items-center">
                                                                        <span class="badge-dot bg-emerald-500"></span>
                                                                        <span class="ml-2 rtl:mr-2 capitalize font-semibold text-emerald-500">Đã Thanh Toán</span>
                                                                    </div>
                                                                </td>
                                                                <?php
                                                            } elseif ($trang_thai_don == 2) {
                                                                ?>
                                                                <td>
                                                                    <div class="flex items-center">
                                                                        <span class="badge-dot bg-red-500"></span>
                                                                        <span class="ml-2 rtl:mr-2 capitalize font-semibold text-red-500">Chưa Thanh toán</span>
                                                                    </div>
                                                                </td>
                                                                <?php
                                                            } elseif ($trang_thai_don == 3) {
                                                                ?>
                                                                <td>
                                                                    <div class="flex items-center">
                                                                        <span class="badge-dot bg-red-500"></span>
                                                                        <span class="ml-2 rtl:mr-2 capitalize font-semibold text-red-500">Đã Hủy</span>
                                                                    </div>
                                                                </td>
                                                                <?php
                                                            }
                                                            ?>
                                                            
                                                                                               <td>
                                                                                                <span><?php echo $ngay_dat_hang ?></span>     
                                                                                                </td>
                                                                                             <?php
                                                                                                      $toal = donhang_get_toal_chi_tiet($ma_don_hang);
                                                                                                      extract($toal);
                                                                                                      foreach($toal as $key => $value){
                                                                                                          extract($value);
                                                                                                      }

                                                                                             ?>
                                                                                                 <td>
                                                                                            <div class="flex items-center">
                                                                                                <span><?php echo number_format($tong_gia_don_hang, 0, ',', '.').'đ' ?></span>
                                                                                            </div>
                                                                                            </td>
                                                                                            <td>
                                                                <div class="flex justify-end text-lg">
                                                                    <span class="cursor-pointer p-2 hover:text-indigo-600" data-bs-toggle="tooltip" data-bs-title="Chi tiết">
                                                                       <a href="admin.php?act=ctdonhang&ma_don_hang=<?php echo $ma_don_hang?>">
                                                                       <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                                            </path>
                                                                        </svg>
                                                                       </a>
                                                                    </span>
                                                                </div>
                                                        </td>
                                                                                    </tr>
                                                                                    
                                                        
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
							</main>
                            <script>
    // Sử dụng JavaScript để ngăn chặn việc chọn nhiều checkbox
    // const checkboxes = document.querySelectorAll('input[name="trangthai"]');
    // checkboxes.forEach((checkbox) => {
    //     checkbox.addEventListener('change', () => {
    //         checkboxes.forEach((cb) => {
    //             // Chỉ giữ chọn một checkbox có giá trị
    //             cb.checked = false;
    //         });
    //         checkbox.checked = true;
    //     });
    // });
</script>