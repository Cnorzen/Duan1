<?php
$ten_nhan_vien= $_SESSION['tennv'];
$ma_nhan_vien = $_SESSION['manv'];
$avt = $_SESSION['anhdaidien'];
$quyen = $_SESSION['admin'];
$email = $_SESSION['email'];
$ma_quyen = $_SESSION['quyen'];

?>
<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <h4 class="mb-1">Xin chào, <?php echo $ten_nhan_vien?>!</h4>
                                            <p>Hôm nay bạn có <?php echo $today_order['so_luong_don_hang'] ?> đơn hàng mới hôm nay.</p>
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
                                                                <span>Tổng doanh thu trong ngày</span>
                                                                <h3>
                                                                    <span><?php echo number_format($toal_customer['tong_don_hang_da'], 0, ',', '.').'đ' ?></span>
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
                                                                    
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3"></path>
                                                                        
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <div>
                                                                <span>Đơn hàng mới hôm nay</span>
                                                                <h3>
                                                                    <span><?php echo $today_order['so_luong_don_hang']  ?></span>
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
                                                            <span class="avatar avatar-rounded !bg-emerald-500 text-2xl" data-avatar-size="55">
                                                                <span class="avatar-icon">
                                                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                   
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z"></path>
                                                                        
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <div>
                                                                <span>Số lượng đơn hàng được đặt 7 ngày</span>
                                                                <h3>
                                                                    <span><?php echo $toal_order['so_luong_don_hang'] ?></span>
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
                                                                    
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                                                                      
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <div>
                                                                <span>Tổng bình luận</span>
                                                                <h3>
                                                                    <span><?php echo $toal_comment['so_luong_binh_luan']  ?></span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card card-layout-frame">
                                                    <div class="card-body">
                                                        <div class="flex sm:flex-row flex-col md:items-center justify-between mb-6 gap-4">
                                                            <h4>Bảng thống kê số lượng đơn hàng</h4>
                                                        </div>
                                                        <div id="basic-chart"></div>
                                                    </div>
                                        </div>                  
                                        <div class="flex flex-col xl:flex-row gap-4">
                                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                                <div class="card card-layout-frame lg:col-span-2">
                                                    <div class="card-body">
                                                        <div class="flex items-center justify-between mb-6">
                                                            <h4>Đơn hàng mới nhất</h4>
                                                            <a href="admin.php?act=listdonhang">
                                                            <button class="btn btn-default btn-sm">Xem Tất cả</button>
                                                            </a>
                                                        </div>
                                                        <div class="overflow-x-auto">
                                                            <table class="table-default table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Mã đơn hàng</th>
                                                                        <th>Ngày Đặt</th>
                                                                        <th>Khách hàng</th>
                                                                        <th>Trạng Thái</th>
                                                                        <th>Phương thức</th>
                                                                        <th>Tổng</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                            foreach ($list_new_order as $key => $value) {
                                                                extract($value);
                                                                $toal = donhang_get_toal_chi_tiet($ma_don_hang);
                                                                extract($toal);
                                                                foreach ($toal as $key => $value) {
                                                                    extract($value);
                                                                }


                                                ?>
                                                    <tr>
 
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
                                                    <div class="card card-layout-frame">
                                                <div class="card-body">
                                                    <h4>Tỉ lệ thanh toán đơn</h4>
                                                    <div class="mt-6">
                                                    <div id="simple-donut"></div>
                                                </div>
                                           
                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                <div class="card card-layout-frame">
                                                    <div class="card-body">
                                                    <div class="flex items-center justify-between mb-6">
                                                            <h4>Bình luận mới nhất</h4>
                                                            <a href="admin.php?act=listbl">
                                                            <button class="btn btn-default btn-sm">Xem Tất cả</button>
                                                            </a>
                                                        </div>
                                                    <div class="overflow-x-auto">
                                                    <table id="product-list-data-table" class="table-default table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Mã Bình luận</th>
                                                                <th>Nội dung Bình luận</th>
                                                                <th>Tên khách hàng</th>
                                                                <th>Sản phẩm bình luận</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php
                                                           foreach($list_comment as $key => $value){
                                                            extract($value);
                                                           ?>
                                                             <tr>
                                                                <td>
                                                                <span class="capitalize"><?php echo $ma_binh_luan?></span>
                                                                </td>
                                                                <td>
                                                                    <span class="capitalize"><?php echo $noi_dung ?></span>
                                                                </td>
                                                                <td><?php  echo $ten_khach_hang ?></td>
                                                                <td>
                                                                <div class="flex items-center">
                                                                        <span class="avatar avatar-rounded avatar-md">
                                                                            <img class="avatar-img avatar-rounded" src="../image/<?php echo $anh?>" loading="lazy">
                                                                        </span>
                                                                        <span class="ml-2 rtl:mr-2 font-semibold"><?php echo $ten_san_pham?></span>
                                                                    </div>
                                                                </td>
                                                                
                                                                <td>
                                                                    <div class="flex justify-end text-lg">
                                                                        <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                                            <a href="admin.php?act=chitietsp&ma_san_pham=<?php echo $ma_san_pham ?>" >
                                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                            </svg>
                                                                            </a>
                                                                        </span>
                                                                        <span class="cursor-pointer p-2 hover:text-red-500">
                                                                        <a href="admin.php?act=softdellbl&ma_binh_luan=<?php echo $ma_binh_luan ?>" onclick="return confirmDelete()">
                                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                            </svg>
                                                                        </a>
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                                    
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
<script src="vendors/apexcharts/apexcharts.js"></script>

<script>
      const ApexChartDefault = {
    toolbar: {
        show: true,
        tools: {
            download: false, // Vô hiệu hóa chức năng tải xuống CSV
        },
    },
    zoom: {
        enabled: false,
    },
};

const ApexBarDefault = {
    bar: {
        horizontal: false,
        columnWidth: "50%",
        endingShape: "rounded",
    },
};

const ApexDataLabelDefault = {
    enabled: true,
};

const ApexDonutChartDefault = {
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    total: {
                        formatter: () => 'Sản phẩm đã bán',
                    },
                },
            },
        },
    },
};
const ApexStrokeDefault = {
    show: true,
    curve: "smooth",
    lineCap: "butt",
    colors: undefined,
    width: 2,
    dashArray: 0,
};
const simpleDonutOption = {
    series: [ <?php echo $ord_stat['so_luong_don_hang_thanh_cong']?>, <?php echo $ord_stat['so_luong_don_hang_chua_thanh_toan']?>, <?php echo $ord_stat['so_luong_don_hang_huy']?>],    
    chart: {
        ...ApexChartDefault,
        width: 400,
        type: "donut",
    },
    labels: ["Đã Thanh Toán", "Chưa Thanh Toán", "Đã Hủy"],
    responsive: [
        {
            breakpoint: 280,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    position: "bottom",
                },
            },
        },
    ],
};


new ApexCharts(document.querySelector("#simple-donut"), simpleDonutOption).render();
</script>
<script>
    const basicOptions = {
        series: [
            {
                name: "Lượng đơn hàng mới",
                data: [<?php
                    foreach ($ord_list30 as $value) {
                        extract($value);
                        // Sử dụng hàm round để làm tròn giá trị
                        echo round($so_luong_don_hang) . ',';
                    }
                ?>],
                color: "#766feb"
            }
        ],
        chart: {
            ...ApexChartDefault,
            height: 350,
            type: "line",
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: ApexStrokeDefault,
        title: {
            text: "Thống kê trong vòng 30 ngày gần nhất",
            align: "left"
        },
        grid: {
            row: {
                colors: ["#f3f3f3", "transparent"],
                opacity: 0.5
            }
        },
        xaxis: {
            categories: [
                <?php
                    foreach ($ord_list30 as $value) {
                        extract($value);

                        // Convert the date format
                        $dateTime = DateTime::createFromFormat('d/m/Y', $ngay_dat_hang);
                        $formattedDate = $dateTime->format('d M Y');

                        echo '"' . $formattedDate . '"' . ',';
                    }
                ?>
            ]
        }
    };
    new ApexCharts(document.querySelector("#basic-chart"), basicOptions).render();
</script>

<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa không?');
    }
</script>