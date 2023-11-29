<?php

extract($data);


?>

<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto">
                                        <div class=" mb-4">
                                            <h3>Khách Hàng</h3>
                                        </div>
                                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-4 mb-6">
                                            <div class="card card-border">
                                                <div class="card-body">
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex items-center gap-4">
                                                            <span class="avatar avatar-rounded !bg-indigo-600 text-2xl" data-avatar-size="55">
                                                                <span
                                                                    class="avatar-icon">
                                                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <div>
                                                                <span>Tổng khách hàng</span>
                                                                <h3>
                                                                    <span><?php echo $count_customer?></span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="card card-border">
                                                <div class="card-body">
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex items-center gap-4">
                                                            <span class="avatar avatar-rounded !bg-blue-500 text-2xl" data-avatar-size="55">
                                                                <span class="avatar-icon">
                                                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <div>
                                                                <span>Khách hàng đã xác thực</span>
                                                                <h3>
                                                                    <span><?php echo $count_active_customer ?></span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="card adaptable-card">
                                            <div class="card-body">
                                                <table id="product-list-data-table" class="table-default table-hover data-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Mã Khách hàng</th>
                                                            <th>Tên khách hàng</th>
                                                            <th>Email </th>
                                                            <th>Xác thực</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                        <tbody>
                                                            <?php foreach($data as $row){
                                                                extract($row) ?>
                                                            <tr>

                                                                <td>
                                                                    <?php echo $ma_khach_hang ?>
                                                                </td>
                                                                <td>
                                                                    <div class="flex items-center"><span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                                        <img class="avatar-img avatar-circle" src="../image/<?php echo $avt?>" loading="lazy"></span>
                                                                        <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"href="#"><?php echo $ten_khach_hang ?></a>
                                                                    </div>
                                                                </td>
                                                                
                                                                <td>
                                                                    <?php echo $email ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if($trang_thai == 1){
                                                                        ?>

                                                                        <div class="flex items-center">
                                                                        <span class="badge-dot bg-emerald-500"></span>
                                                                        <span class="ml-2 rtl:mr-2 capitalize">Đã Xác thực</span>
                                                                        </div>
                                                                    
                                                                    <?php 
                                                                    } else {
                                                                        ?>
                                                                         <div class="flex items-center">
                                                                        <span class="badge-dot bg-red-500"></span>
                                                                        <span class="ml-2 rtl:mr-2 capitalize">Chưa xác thực</span>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                                    <a href="admin.php?act=editkh&ma_khach_hang=<?php echo $ma_khach_hang?>">
                                                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                            </svg>
                                                                    
                                                                    </a>
                                                                </span> 
                                                                </td>
                                                                <td>
                                                                <span class="cursor-pointer p-2 hover:text-red-500">
                                                                    <a href="admin.php?act=softdelkh&ma_khach_hang=<?php echo $ma_khach_hang?>" onclick="return confirmDelete()">
                                                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                            </svg>
                                                                    </a>
                                                                </span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
							</main>
                            <!-- Other Vendors JS -->
<script src="vendors/datatables/jquery.dataTables.min.js"></script>
<script src="vendors/datatables/dataTables.custom-ui.min.js"></script>

<!-- Page js -->
<script src="js/pages/product-list.js"></script>
<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa không?');
    }
</script>