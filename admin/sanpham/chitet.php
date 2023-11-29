<?php
    extract($data);
foreach ($data as $list){
    extract($list); 
 }  

?>
<main class="h-full">
<style>
        .product-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .main-image {
            width: 100%;
            max-width: 400px;
            height: auto;
            margin-bottom: 20px;
        }

        .thumbnail-container {
            display: flex;
            justify-content: space-between;
            max-width: 400px;
        }

        .thumbnail {
            width: 24%;
            cursor: pointer;
        }
    </style>
    
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <div class="card adaptable-card">
                    <div class="card-body">
                        <div class="lg:flex items-center justify-between mb-4">
                            <h3 class="mb-4 lg:mb-0">Chi tiết sản phẩm</h3>
                        </div>
                        <div class="flex flex-col gap-4 xl:flex-row">
                            <div class="flex flex-col flex-auto">
                                <div class="card card-layout-frame">
                                    <div class="card-body">
                                        <!-- Hiển thị ảnh chính -->
                                        <img class="main-image" src="../image/<?php echo $anh?>" alt="Main Image">
                                        
                                        <!-- Hiển thị 4 ảnh phụ nhỏ -->
                                        <div class="thumbnail-container">
                                            <img class="thumbnail" src="../image/<?php echo $anh1?>" alt="Thumbnail 1">
                                            <img class="thumbnail" src="../image/<?php echo $anh2?>" alt="Thumbnail 2">
                                            <img class="thumbnail" src="../image/<?php echo $anh3?>" alt="Thumbnail 3">
                                            <img class="thumbnail" src="../image/<?php echo $anh4?>" alt="Thumbnail 4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 flex-auto">
                                <div class="card card-layout-frame">
                                    <div class="card-body">
                                    <div class="lg:flex items-center justify-between mb-4">
                                    <h3 class="mb-4 lg:mb-0"><?php echo $ten_san_pham?></h3>
                                    </div>
                                    </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <h3 style="color: red; margin-bottom: 0;">Giá: <?php echo number_format($giam_gia, 0, ',', '.').'đ' ?></h3>
                                    <s>
                                    <p style=" margin-top: 0;">Giá gốc: <?php echo number_format($don_gia, 0, ',', '.').'đ' ?></p>
                                    </s>
                                </div>
                                    <hr>
                                    <div class="grid grid-cols-2 gap-4">
                                    <p>Lượt xem: <?php echo $luot_xem ?></p>
                                    <p>Thương hiệu: <?php echo $thuong_hieu ?></p>
                                    <p>Số lượng: <?php echo $so_luong ?></p>
                                    </div>
                                    <br>
                                    <div>
                                    <div class="card-body">
                                    <div class="card card-layout-frame">
                                    <article class="prose dark:prose-invert mx-auto">
                                    <p><?php echo $mo_ta ?></p>
                                    </article>
                                    </div>
                                    </div> 
                                    </div> 
                                </div>
                               
                            </div>
                        
                        </div>

                    </div>
            <br>
            <div class="card card-layout-frame">    
        <div class="card-body">
            <div class="lg:flex items-center justify-between mb-4">
                <h3 class="mb-4 lg:mb-0">Bình luận sản phẩm</h3>
            </div>  
                                <div class="container mx-auto">
                                    <div class="card adaptable-card">
                                         <div class="overflow-x-auto">
                                                    <table id="product-list-data-table" class="table-default table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Mã bình luận</th>
                                                                <th>Nội dung bình luận</th>
                                                                <th>Ngày bình luận</th>
                                                                <th>Tên khách hàng</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                                extract($listbl);
                                                                foreach ($listbl as $list){
                                                                    extract($list); 
                                                                
                                                               ?>
                                                            <tr>
                                                              
                                                                 <td>
                                                                    <?php echo $ma_binh_luan ?> 
                                                                </td>
                                                                <td>
                                                                    <?php echo $noi_dung ?> 
                                                                <td>
                                                                    <?php echo $ngay_binh_luan ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $ten_khach_hang ?>
                                                                </td>
                                                                <td>                                                    
                                                                    <span class="cursor-pointer p-2 hover:text-red-500">
                                                                        <a href="admin.php?act=softdellbl&ma_binh_luan=<?php echo $ma_binh_luan?>">

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
                                            </div>
                                    </div>
                                    
                                </div>  

        </div>
        

        </div>     
        <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
             <div class="md:flex items-center">
                <a href="admin.php?act=softdellsp&ma_san_pham=<?php echo $ma_san_pham ?>">
                <button class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2"
                    type="button"  
                    name="back">Xóa sản phẩm này</button>
                </a>
                <a href="admin.php?act=editsp&ma_san_pham=<?php echo $ma_san_pham ?>">
                                                        <button class="btn btn-solid btn-sm">
                                                            <span class="flex items-center justify-center">
                                                               
                                                                <span class="ltr:ml-1 rtl:mr-1">Sửa sản phẩm</span>
                                                            </span>
                                                        </button>
               </a>
                                                    </div>
            </div>          
	
                        
            




    </main>
    <!-- Other Vendors JS -->
<script src="vendors/datatables/jquery.dataTables.min.js"></script>
<script src="vendors/datatables/dataTables.custom-ui.min.js"></script>
<!-- Page js -->
<script src="js/pages/product-list.js"></script>