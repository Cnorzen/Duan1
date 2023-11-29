<?php
extract($data);
// ShowArray($data);
foreach ($data as $key => $value) {
    extract($value);
}
?>
<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3>Thông tin Liên hệ</h3>
                                        </div>
                                        <div class="card adaptable-card">
                                            <div class="card-body">
                                                <div class="tabs">
                                                    <div role="tablist" class="tab-list tab-list-underline">
                                                        <button class="tab-nav tab-nav-underline active" data-bs-toggle="tab" data-bs-target="#tab-profile" role="tab" aria-selected="true" tabindex="0">
                                                            Thông tin cơ bản
                                                        </button>
                                                    </div>
                                                    <div class="tab-content px-4 py-6">
                                                        <div class="tab-pane fade show active" id="tab-profile" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                            <form action="admin.php?act=contract" method="post" enctype="multipart/form-data" >
                                                             <div class="form-container vertical">
                                                                    <div>
                                                                        <h5>Thông tin cơ bản</h5>
                                                                        
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Tên doanh nghiệp</div>
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
                                                                                          
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"></path>

                                                                                            </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="ten_doanh_nghiep"
                                                                                            autocomplete="off"
                                                                                            placeholder="Name"
                                                                                            value="<?php echo $ten_doanh_nghiep?>"
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Email Liên Hệ</div>
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
                                                                        <div class="font-semibold">Logo</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                                                                    <!-- Repeat the above block for each existing image -->

                                                                    <!-- New image upload -->
                                                                    <div class="upload upload-draggable hover:border-primary-600 min-h-fit">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            title=""
                                                                            value=""
                                                                            name="avt"
                                                                            onchange="previewImagesindex(event)"
                                                                            
                                                                        >
                                                                        <div class="max-w-full flex flex-col px-4 py-2 justify-center items-center">
                                                                                <div class="my-16 text-center" id="image-preview-container">
                                                                                <p class="font-semibold">
                                                                                <span class="text-gray-800 dark:text-white">kéo hoặc thả ảnh hoặc</span>
                                                                                <span class="text-blue-500">duyệt</span>
                                                                            </div>  
                                                                        </div>
                                                                    </div>
                                                                                    <span class="avatat-lg border-2 border-white dark:border-gray-800 shadow-lg" data-avatar-size="120">
                                                                                            <img  src="../image/<?php echo $logo?>" loading="lazy">
                                                                                           
                                                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                                        <div class="font-semibold">Số Điện Thoại</div>
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
                                                                                            name="sdt"
                                                                                            autocomplete="off"
                                                                                            placeholder="Title"
                                                                                            value="<?php echo $sdt?>"
                                                                                          
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
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
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="dia_chi"
                                                                                            autocomplete="off"
                                                                                            placeholder="Title"
                                                                                            value="<?php echo $dia_chi?>"
                                                                                          
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
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
    function previewImagesindex(event) {
                var previewContainer = document.getElementById('image-preview-container');
                previewContainer.innerHTML = ''; // Xóa các xem trước cũ

                var files = event.target.files;

                for (var i = 0; i < Math.min(files.length, 1); i++) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.classList.add('mx-auto', 'my-2', 'max-w-100', 'max-h-100');
                        previewContainer.appendChild(img);
                    };

                    reader.readAsDataURL(files[i]);
                }
            }
</script>