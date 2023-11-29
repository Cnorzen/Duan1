<?php

extract($data);


?>

<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto">
                                        <div class=" mb-4">
                                            <h3>Nhân Viên</h3>
                                        </div>
                                        <div class="card adaptable-card">
                                            <div class="card-body">
                                            <table id="product-list-data-table" class="table-default table-hover data-table">
                                            <thead>
                                                <tr>
                                                    <th>Mã Nhân Viên</th>
                                                    <th>Tên Nhân Viên</th>
                                                    <th>Email </th>
                                                    <th>Chức Vụ</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $row) {
                                                    extract($row); ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $ma_nhan_vien ?>
                                                        </td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                                    <img class="avatar-img avatar-circle" src="../image/<?php echo $avt ?>" loading="lazy">
                                                                </span>
                                                                <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#"><?php echo $ten_khach_hang ?></a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php echo $email ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($quyen == 1) {
                                                                echo '<span>Admin</span>';
                                                            } else {
                                                                echo '<span>Nhân Viên</span>';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                                <a href="admin.php?act=editnv&ma_nhan_vien=<?php echo $ma_nhan_vien ?>">
                                                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                    </svg>
                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="cursor-pointer p-2 hover:text-red-500">
                                                            <a href="admin.php?act=softdellnv&ma_nhan_vien=<?php echo $ma_nhan_vien; ?>" onclick="return confirmDelete()">
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
                                <script>
    function deleteEmployee(ma_nhan_vien) {
        // Chuyển hướng đến trang xóa với mã nhân viên tương ứng
        window.location.href = "admin.php?act=softdellnv&ma_nhan_vien=" + ma_nhan_vien;
    }
</script>
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