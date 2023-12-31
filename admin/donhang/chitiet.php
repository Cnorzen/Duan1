<?php
foreach($data as $value){
    extract($value);
}
// ShowArray($data);
?>
<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto">
                                        <div class="mb-6">
                                     
                                            <div class="flex items-center mb-2">
                                                <h3>
                                                    <span>Mã Đơn hàng:</span>
                                                    <span class="ltr:ml-2 rtl:mr-2">#<?php echo $ma_don_hang?></span>
                                                </h3>
                                                <?php
                                                            if ($trang_thai_don == 0) {
                                                                ?>
                                                       <div class="tag border-0 rounded-md ltr:ml-2 rtl:mr-2 bg-yellow-100 text-yellow-600 dark:bg-yellow-500/20 dark:text-yellow-100">
                                                                   Cần Xác Thực
                                                                </div>
                                                                <?php
                                                            } elseif ($trang_thai_don == 1) {
                                                                ?>
                                                               <div class="tag border-0 rounded-md ltr:ml-2 rtl:mr-2 bg-emerald-100 text-emerald-600 dark:bg-emerald-500/20 dark:text-emerald-100">
                                                                                Đã thanh toán
                                                                                </div>
                                                                <?php
                                                            } elseif ($trang_thai_don == 2) {
                                                                ?>
                                                               <div class="tag border-0 rounded-md ltr:ml-2 rtl:mr-2 bg-red-100 text-red-600 dark:bg-red-500/20 dark:text-red-100">
                                                                                    Chưa Thanh toán
                                                                            </div>
                                                                <?php
                                                            } elseif ($trang_thai_don == 3) {
                                                                ?>
                                                                <td>
                                                                <div class="tag border-0 rounded-md ltr:ml-2 rtl:mr-2 bg-red-100 text-red-600 dark:bg-red-500/20 dark:text-red-100">
                                                                                           Đã Hủy
                                                                                        </div>
                                                                </td>
                                                                <?php
                                                            }
                                                            ?>
                                            </div>
                                            <span class="flex items-center">
                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"  aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                <span class="ltr:ml-1 rtl:mr-1"><?php echo $ngay_dat_hang ?></span>
                                            </span>
                                        </div>
                                        <div class="xl:flex gap-4">
                                            <div class="w-full">
                                                <div class="card adaptable-card">
                                                    <div class="card-body">
                                                        <div class="overflow-x-auto">
                                                            <table class="table-default table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sản Phẩm</th>
                                                                        <th>Đơn Giá</th>
                                                                        <th>Số lượng</th>
                                                                        <th>Tổng tiền</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php   
                                                                    foreach($data as $value){
                                                                        extract($value);     
                                                                     
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="flex">
                                                                                <span class="avatar avatar-rounded avatar-lg" data-avatar-size="90">
                                                                                    <img class="avatar-img avatar-rounded" src="../image/<?php echo $anh?>" loading="lazy">
                                                                                </span>
                                                                                <div class="ltr:ml-2 rtl:mr-2">
                                                                                    <h6 class="mb-2"><?php echo $ten_san_pham?></h6>
                                                                                    <div class="mb-1"><span class="capitalize">thương hiệu: <?php echo $thuong_hieu?> </span>
                                                                                    
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <span><?php echo number_format($don_gia, 0, ',', '.').'đ'?></span>
                                                                        </td>
                                                                        <td><?php echo $so_luong?></td>
                                                                        <td>
                                                                            <span><?php echo number_format($tong_gia_san_pham, 0, ',', '.').'đ'?></span>
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
                                                <div class="xl:grid grid-cols-2 gap-4">
                                                    <div class="card-layout-frame">
                                                        <div class="card-body">
                                                            <h5 class="mb-4">Phương thức thanh toán</h5>
                                                                <?php
                                                               if($phuong_thuc_thanh_toan == 0){
                                                                    ?>
                                                                    
                                                                         <div class="flex items-center justify-between mb-6">
                                                                         <div class="flex items-center">
                                                                             <span class="avatar avatar-rounded avatar-lg" data-avatar-size="60">
                                                                                 <img class="avatar-img avatar-rounded" src="img/others/cod.png" loading="lazy">
                                                                             </span>
                                                                             <div class="ltr:ml-2 rtl:mr-2">
                                                                                 <h6>COD</h6><span>Thanh Toán Khi nhận Hàng</span>
                                                                             </div>
                                                                         </div>
                                                                     </div> 
                                                                     <?php      
                                                                  } elseif($phuong_thuc_thanh_toan == 1){?>
                                                                         <div class="flex items-center justify-between mb-6">
                                                                         <div class="flex items-center">
                                                                             <span class="avatar avatar-rounded avatar-lg" data-avatar-size="60">
                                                                                 <img class="avatar-img avatar-rounded" src="img/others/cc.png" loading="lazy">
                                                                             </span>
                                                                             <div class="ltr:ml-2 rtl:mr-2">
                                                                                 <h6>CC</h6><span>Thẻ Tín Dụng <?php echo $brand?> &#x2022;&#x2022;&#x2022;&#x2022;<?php echo $last4?></span>

                                                                             </div>
                                                                         </div>
                                                                     </div> 
                                                                    
                                                                  <?php
                                                                   } else {
                                                                    ?>
                                                                     <div class="flex items-center justify-between mb-6">
                                                                         <div class="flex items-center">
                                                                             <span class="avatar avatar-rounded avatar-lg" data-avatar-size="60">
                                                                                 <img class="avatar-img avatar-rounded" src="img/others/vnpay.png" loading="lazy">
                                                                             </span>
                                                                             <div class="ltr:ml-2 rtl:mr-2">
                                                                                 <h6>VNpay</h6><span>VNpay QR</span>
                                                                             </div>
                                                                         </div>
                                                                     </div> 
                                                                    

                                                                   <?php
                                                                    }
                                                               
                                                                   ?>
                                                                  
                                                                
                                                                
                                                              
                                                        </div>
                                                    </div>
                                                    <div class="card-layout-frame">
                                                        <div class="card-body">
                                                            <h5 class="mb-4">Tông Tiền Đơn hàng</h5>
                                                            <ul>
                                                                <li class="flex items-center justify-between mb-3">
                                                                    <span>Tổng tiền sản phảm</span>
                                                                    <span class="font-semibold">
                                                                    <?php
                                                                            $toal = donhang_get_toal_chi_tiet($ma_don_hang);
                                                                            foreach($toal as $value){
                                                                                extract($value);
                                                                            }
                                                                    
                                                                    ?>
                                                                        <span><?php echo number_format($tong_gia_don_hang, 0, ',', '.').'đ' ?></span>
                                                                    </span>
                                                                </li>
                                                                
                                                                <hr class="mb-3">
                                                                <li class="flex items-center justify-between">
                                                                    <span>Tổng</span>
                                                                    <span class="font-semibold">
                                                                        <span><?php echo number_format($tong_gia_don_hang, 0, ',', '.').'đ' ?></span>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-layout-frame">
                                                    <div class="card-body">
                                                        <h5 class="mb-4">Ghi chú đơn hàng</h5>
                                                        <?php echo $ghi_chu ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="card card-layout-frame">
                                                    <div class="card-body">
                                                        <h5 class="mb-4">Ghi chú khách hàng</h5>
                                                        <?php echo $ghi_chu_kh ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:max-w-[360px] w-full">
                                                <div class="card card-layout-frame" role="presentation">
                                                    <div class="card-body">
                                                        <h5 class="mb-4">Thông tin khách hàng đặt hàng</h5>
                                                  
                                                        <a class="group flex items-center justify-between" href="#">
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-circle avatar-md">
                                                                    <img class="avatar-img avatar-circle" src="../image/<?php echo $avt?>" loading="lazy">
                                                                </span>
                                                                <div class="ltr:ml-2 rtl:mr-2">
                                                                    <div class="font-semibold group-hover:text-gray-900 group-hover:dark:text-gray-100">
                                                                    <?php echo $ten_khach_hang?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" class="text-xl hidden group-hover:block" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"> </path>
                                                                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
                                                            </svg>
                                                        </a>
                                                        <hr class="my-5">
                                                        <span class="flex items-center gap-2 mb-4">
                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" class="text-xl opacity-70" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                                            </svg>
                                                            <span class="font-semibold"><?php echo $email?></span>
                                                        </span>
                                                        <span class="flex items-center gap-2">
                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" class="text-xl opacity-70" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                                            </svg>
                                                            <span class="font-semibold"><?php echo $sdt?></span>
                                                        </span>
                                                        <hr class="my-5">
                                                        <h6 class="mb-4">Địa Chỉ nhận hàng</h6>
                                                        <address class="not-italic">
                                                        <?php echo $dia_chi?>
                                                        </address>
                                                        <hr class="my-5">
                                                        <h6 class="mb-4">Địa Chỉ thanh Toán</h6>
                                                        <address class="not-italic">
                                                        <?php echo $dia_chi?>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <button data-bs-toggle="modal" data-bs-target="#drawerBasic" class=" btn btn-solid">
                                    Chỉnh Sửa trạng thái đơn hàng
                                </button>
                                <div class="modal fade" id="drawerBasic" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog drawer drawer-end">
                                        <div class="drawer-content">
                                            <div class="drawer-header">
                                                <h4>Trạng thái đơn hàng</h4>
                                                <span class="close-btn" role="button" data-bs-dismiss="modal">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="drawer-body">
                                               trạng thái đơn hàng hiện tại :  <?php
                                                            if ($trang_thai_don == 0) {
                                                                ?>
                                                       <div class="tag border-0 rounded-md ltr:ml-2 rtl:mr-2 bg-yellow-300 text-yellow-600 dark:bg-yellow-300 dark:text-yellow-100">
                                                                   Cần Xác Thực
                                                                </div>
                                                                <?php
                                                            } elseif ($trang_thai_don == 1) {
                                                                ?>
                                                               <div class="tag border-0 rounded-md ltr:ml-2 rtl:mr-2 bg-emerald-100 text-emerald-600 dark:bg-emerald-500/20 dark:text-emerald-100">
                                                                                Đã thanh toán
                                                                                </div>
                                                                <?php
                                                            } elseif ($trang_thai_don == 2) {
                                                                ?>
                                                               <div class="tag border-0 rounded-md ltr:ml-2 rtl:mr-2 bg-red-100 text-red-600 dark:bg-red-500/20 dark:text-red-100">
                                                                                    Chưa Thanh toán
                                                                            </div>
                                                                <?php
                                                            } elseif ($trang_thai_don == 3) {
                                                                ?>
                                                                <td>
                                                                <div class="tag border-0 rounded-md ltr:ml-2 rtl:mr-2 bg-red-100 text-red-600 dark:bg-red-500/20 dark:text-red-100">
                                                                                           Đã Hủy
                                                                                        </div>
                                                                </td>
                                                                <?php
                                                            }
                                                            ?>
                                                                <div class="grid grid-flow-row auto-rows-max">
                                                    <a href="admin.php?act=setthanhtoan&ma_don_hang=<?php echo $ma_don_hang?>">
                                                    <button class="btn btn-two-tune">Chỉnh Thành đã thanh toán</button>
                                                    </a>
                                                    <br>
                                                    <a href="admin.php?act=setchuathanhtoan&ma_don_hang=<?php echo $ma_don_hang?>">
                                                    <button class="btn btn-two-tune">Chỉnh thành chưa thanh toán</button>
                                                    </a>
                                                    <br>
                                                    <a href="admin.php?act=setxacthuc&ma_don_hang=<?php echo $ma_don_hang?>">
                                                    <button class="btn btn-two-tune">Chỉnh thành cần xác thực</button>
                                                    </a>
                                                    <br>
                                                    <a href="admin.php?act=sethuydon&ma_don_hang=<?php echo $ma_don_hang?>">
                                                    <button class="btn btn-two-tune">Hủy đơn hàng này</button>
                                                    </a>
                                                </div>
                                                <br>
                                                   <form action="admin.php?act=addghichu" method="post">
                                                        <p>Ghi chú đơn hàng:</p>
                                                        <textarea class="input input-textarea" placeholder="thêm ghi chú cho đơn hàng" name="ghichu"><?php echo $ghi_chu ?></textarea>
                                                        <input type="hidden" name="ma_don_hang" value="<?php echo $ma_don_hang?>">
                                                        <button class="btn btn-two-tune" type="submit" name="submit">ghi chú</button>
                                                   </form>
                                                                                                </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>   
                                     
                                </div>
                               
							</main>
                            <!-- Core Vendors JS -->
		<script src="js/vendors.min.js"></script>
<!-- Other Vendors JS -->
<script src="vendors/datatables/jquery.dataTables.min.js"></script>
<script src="vendors/datatables/dataTables.custom-ui.min.js"></script>

<!-- Page js -->
<script src="js/pages/order-list.js"></script>
<!-- Other Vendors JS -->

<!-- Page js -->

                            