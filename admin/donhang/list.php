<?php
if(is_array($data)){
    extract($data);
}



?>
<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="card adaptable-card">
                                        <h3 class="mb-4">Đơn hàng</h3>
                                        <div class="overflow-x-auto">
                                        <div class="grid grid-cols-4 gap-4">
                                            <form action="admin.php?act=listdonhang" method="POST" class="flex items-left">
                                                <label for="filter" class="form-label mr-2">Lọc theo trạng thái</label>
                                                <div class="relative">
                                                    <select name="filter" id="filter" class="input">
                                                        <option value="0">Tất cả</option>
                                                        <option value="1">Đã Thanh Toán</option>
                                                        <option value="2">Chưa Thanh Toán</option>
                                                        <option value="3">Đã Hủy</option>
                                                        <option value="4">Cần Xác thực</option>
                                                        <option value="5">Theo ngày mới nhất</option>          
                                                    </select>
                                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                                        <svg class="h-4 w-4 fill-current text-gray-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                                            <path fill-rule="evenodd" d="M0 10a1 1 0 011-1h18a1 1 0 010 2H1a1 1 0 01-1-1z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-default">Lọc</button>
                                            </form>
                                            
                                        </div>
                                            <table id="order-list-table" class="table-default table-hover">
                                                <thead>
                                                    <th>
                                                        <label class="checkbox-label mb-0">
                                                            <input id="indeterminate-checkbox" class="checkbox" type="checkbox" value="">
                                                        </label>
                                                    </th>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Ngày Đặt</th>
                                                    <th>Khách hàng</th>
                                                    <th>Trạng Thái</th>
                                                    <th>Phương thức</th>
                                                    <th>Tổng</th>
                                                    <th></th>
                                                </thead>
                                                <tbody>
                                                <?php
                                                            foreach ($data as $key => $value) {
                                                                extract($value);
                                                                $toal = donhang_get_toal_chi_tiet($ma_don_hang);
                                                                extract($toal);
                                                                foreach ($toal as $key => $value) {
                                                                    extract($value);
                                                                }


                                                ?>
                                                    <tr>
                                                        <td>
                                                                <label class="checkbox-label mb-0">
                                                                    <input class="checkbox order-checkbox" type="checkbox" value="">
                                                                </label>
                                                        </td>
                                                        <td>
                                                             <span class="cursor-pointer select-none font-semibold hover:text-indigo-600">#<?php echo $ma_don_hang?></span>
                                                        </td>
                                                        <td>
                                                            <span><?php echo $ngay_dat_hang ?></span>
                                                        </td>
                                                        <td>
                                                                <?php echo $ten_khach_hang ?>
                                                        </td>
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
                                                        <td>
                                                            <span class="font-semibold"><?php echo number_format($tong_gia_don_hang, 0, ',', '.').'đ' ?></span>  
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
                                                                    <?php
                                                                        if ($trang_thai_don == 3) {
                                                                            ?>
                                                                            <span class="cursor-pointer p-2 hover:text-red-500" data-bs-toggle="tooltip" data-bs-title="Đơn hàng đã được hủy">
                                                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path>

                                                                                </svg>
                                                                            </span>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                            <span class="cursor-pointer p-2 hover:text-red-500" data-bs-toggle="tooltip" data-bs-title="Hủy và xóa đơn hàng này">
                                                                                <a href="admin.php?act=sethuydon&ma_don_hang=<?php echo $ma_don_hang?>">
                                                                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                                    </svg>
                                                                                </a>
                                                                            </span>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    
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
                                
							</main>
                            <!-- Core Vendors JS -->
		<script src="js/vendors.min.js"></script>

<!-- Other Vendors JS -->
<script src="vendors/datatables/jquery.dataTables.min.js"></script>
<script src="vendors/datatables/dataTables.custom-ui.min.js"></script>

<!-- Page js -->
<script src="js/pages/order-list.js"></script>

