<?php 
// ShowArray($days);
 ?>

<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="flex flex-col gap-4 h-full">
                                        <div class="lg:flex items-center justify-between mb-4 gap-3">
                                            <div class="mb-4 lg:mb-0">
                                                <h3>Đơn hàng </h3>
                                                <p>Xem doanh số bán hàng &amp; tổng quan dữ liệu</p>
                                            </div>
                                           
                                        </div>
                                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                            <div class="card card-layout-frame">
                                                <div class="card-body">
                                                    <h6 class="font-semibold mb-4 text-sm">Tổng doanh thu tuần </h6>
                                                    <div class="flex justify-between items-center">
                                                        <div>
                                                            <h3 class="font-bold">
                                                                <span><?php echo number_format($toal_oder_revenue['tong_don_hang_da'], 0, ',', '.').'đ' ?> </span>
                                                            </h3>
                                
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-layout-frame">
                                                <div class="card-body">
                                                    <h6 class="font-semibold mb-4 text-sm">Số đơn hàng được đặt trong tuần này</h6>
                                                    <div class="flex justify-between items-center">
                                                        <div>
                                                            <h3 class="font-bold">
                                                                <span><?php echo  $toal_order['so_luong_don_hang']  ?></span>
                                                            </h3>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-layout-frame">
                                                <div class="card-body">
                                                    <h6 class="font-semibold mb-4 text-sm">Tổng doanh thu trong 30 ngày</h6>
                                                    <div class="flex justify-between items-center">
                                                        <div>
                                                            <h3 class="font-bold">
                                                                <span><?php echo number_format($purchases['tong_don_hang_da'], 0, ',', '.').'đ' ?></span>
                                                            </h3>
                                                            <br>
                                                      
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-layout-frame">
                                                    <div class="card-body">
                                                        <div class="flex sm:flex-row flex-col md:items-center justify-between mb-6 gap-4">
                                                            <h4>Bảng thống kê doanh thu</h4>
                                                            <div class="segment segment-sm">
                                                                <p class="segment-item">Cập nhất cuối ngày</p>
                                                                
                                                              
                                                            </div>
                                                        </div>
                                                       
                                                        <div>
                                                        <div id="basic-area-chart"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                       <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                           <div class="card card-layout-frame col-span-2">
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
                                                    <h4>Số lượng được bán theo danh mục</h4so>
                                                    <div class="mt-6">
                                                    <div id="simple-donut"></div>
                                                    </div>
                                           
                                                </div>
                                        </div>
                                            
                                    </div> 
                                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-1">
                                    <div class="card card-layout-frame ">
                                                <div class="card-body">
                                                    <div class="flex items-center justify-between mb-4">
                                                        <h4>Sản phẩm được bán nhiều nhất</h4>
                                                    </div>
                                                    <div class="overflow-x-auto">
                                                        <table class="table-default table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sản Phẩm</th>
                                                                    <th>Lượt mua</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach($top_selling as $key => $value){
                                                                    extract($value);    
                                                                
                                                                
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="flex items-center gap-2">
                                                                            <span class="avatar avatar-rounded avatar-md">
                                                                                <img
                                                                                    class="avatar-img avatar-rounded"
                                                                                    src="../image/<?php echo $anh?>"
                                                                                    loading="lazy"
                                                                                />
                                                                            </span>
                                                                            <span class="font-semibold"
                                                                                ><?php  echo $ten_san_pham ?></span
                                                                            >
                                                                        </div>
                                                                    </td>
                                                                    <td><?php echo $so_luong_ban ?></td>
                                                                    <td>
                                                                    <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                                            <a href="admin.php?act=chitietsp&ma_san_pham=<?php echo $ma_san_pham ?>" >
                                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                            </svg>
                                                                            </a>
                                                                        </span>
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
                                           
                            </div>  
                                   
							</main>
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
    enabled: false,
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


new ApexCharts(document.querySelector("#simple-donut"), simpleDonutOption).render();

</script>

<script>
    const basicAreaOption = {
    series: [
        {
            name: "Doanh thu",
            data: [
                            <?php
            foreach ($days as $value) {
                extract($value);

                // Format the number as currency
                $formattedAmount = number_format($tong_lgdh, 0, '.', '');
                
                echo $formattedAmount.',';
            }
            ?>
            ],
            color: "#766feb"
        }
    ],
    chart: {
        ...ApexChartDefault,
        type: "area",
        height: 380,
        zoom: {
            enabled: true
        }
    },
    dataLabels: ApexDataLabelDefault,
    title: {
        text: "Biểu đồ doanh thu",
        align: "left"
    },
    subtitle: {
        text: "Tổng doanh thu trong ngày vừa qua tối đa 30 ngày",
        align: "left"
    },
    labels: [
        <?php
            foreach ($days as $value) {
                extract($value);
                
                // Convert the date format
                $dateTime = DateTime::createFromFormat('d/m/Y', $ngay_dat_hang);
                $formattedDate = $dateTime->format('d M Y');

                echo '"'.$formattedDate.'"'.',';
            }
            ?>
    ],
    xaxis: {
        type: "datetime"
    },
    yaxis: {
        opposite: true
    },
    legend: {
        horizontalAlign: "left"
    },
    stroke: ApexStrokeDefault
}
new ApexCharts(document.querySelector("#basic-area-chart"), basicAreaOption).render();
</script>
<script>
    const simpleDonutOption = {
    series: [<?php foreach( $count_loai_hang_selled as $value){
        extract($value);
        echo $so_luong_san_pham_ban.',';
    } ?>],
    chart: {
        ...ApexChartDefault,
        width: 380,
        type: "donut",
    },
    labels: [<?php foreach( $count_loai_hang_selled as $value){
        extract($value);
        echo '"'.$ten_loai.'"'.','; }?>],
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