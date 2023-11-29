<?php

extract($data);
?>
<div class="h-full flex flex-auto flex-col justify-between">
							<!-- Content start -->
							<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto">
                                        <div class="card adaptable-card">
                                            <div class="card-body">
                                                <div class="lg:flex items-center justify-between mb-4">
                                                    <h3 class="mb-4 lg:mb-0">Loại hàng đã xóa</h3>
                                                </div>
                                                <label class="form-label mb-2">Loại hạng mà bạn đã xóa có thể lấy lại hoặc xóa vĩnh viễn</label>
                                                <div class="overflow-x-auto">
                                                    <table id="product-list-data-table" class="table-default table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Mã hàng hóa</th>
                                                                <th>Tên Hàng Hóa</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                               <?php
                                                               extract($data);
                                                            //      <td>
                                                            //      <div class="flex items-center">
                                                            //          <span class="ml-2 rtl:mr-2 font-semibold">Luminaire Giotto Headphones</span>
                                                            //      </div>
                                                            //  </td>
                                                            //  <td>
                                                            //      <span class="capitalize">devices</span>
                                                            //  </td>
                                                            //  <td>
                                                            //      <div class="flex justify-end text-lg">
                                                            //          <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                            //              <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            //                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                            //              </svg>
                                                            //          </span>
                                                            //          <span class="cursor-pointer p-2 hover:text-red-500">
                                                            //              <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            //                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                            //              </svg>
                                                            //          </span>
                                                            //      </div>
                                                            //  </td>
                                                            foreach ($data as $list){
                                                                extract($list); 
                                                               
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                    <div class="flex items-center">
                                                                        <input type="checkbox" name="chon[]" value="<?php echo $ma_loai ?>">
                                                                    </div>
                                                                    </td>
                                                                <td>
                                                                    <div class="flex items-center">
                                                                        <span class="ml-2 rtl:mr-2 font-semibold"><?php  echo $ma_loai ?></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="capitalize"><?php  echo $ten_loai ?></span>
                                                                </td>
                                                                <td>
                                                                    <div class="flex justify-end text-lg">
                                                                        <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                                        <a href="admin.php?act=recoverdm&ma_loai=<?php echo $ma_loai ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  aria-hidden="true" class="w-6 h-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"></path>
                                                                        </svg>
                                                                        </a>
                                                                        </span>
                                                                    
                                                                        <span class="cursor-pointer p-2 hover:text-red-500">
                                                                            <a href="admin.php?act=deldm&ma_loai=<?php echo $ma_loai ?>" onclick="return confirmDelete()">
                                                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
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
                            <br>
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