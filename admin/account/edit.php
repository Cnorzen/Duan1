<?php
extract($data);
foreach ($data as $key => $value) {
    $$key = $value;
}
?>
<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="container mx-auto">
                                    <?php
                                        if(isset($error)){
                                            foreach($error as $key => $value){
                                        ?>
                                        <div class="alert alert-danger">
                                        <div class="alert-content">
                                            <span class="alert-icon">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <div><?php echo $value ?></div>
                                        </div>
                                    </div>
                                <?php
                                            }
                                        }   
                                ?>
                                        <div class="flex items-center justify-between mb-4">
                                       
                                            <h3>Cài Đặt</h3>
                                        </div>
                                        <div class="card adaptable-card">
                                            <div class="card-body">
                                                <div class="tabs">
                                                    <div role="tablist" class="tab-list tab-list-underline">
                                                        <button class="tab-nav tab-nav-underline active" data-bs-toggle="tab" data-bs-target="#tab-profile" role="tab" aria-selected="true" tabindex="0">
                                                            Trang cá nhân
                                                        </button>
                                                        <button class="tab-nav tab-nav-underline" data-bs-toggle="tab" data-bs-target="#tab-password" role="tab" aria-selected="false" tabindex="0">
                                                            Mật Khẩu
                                                        </button>
                                                    </div>
                                                    <div class="tab-content px-4 py-6">
                                                        <div class="tab-pane fade show active" id="tab-profile" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                            <form action="admin.php?act=account" method="POST" enctype="multipart/form-data">
                                                                <div class="form-container vertical">
                                                                    <div>
                                                                        <h5>Thông tin cơ bản</h5>
                                                                        <p>Thông tin cơ bản, sẽ được hiển thị công khai trong phần mêm quản lý </p>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Họ Và Tên</div>
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
                                                                                            placeholder="Họ Và Tên "
                                                                                            value="<?php echo $ten_khach_hang; ?>"
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
                                                                                            value="<?php echo $email; ?>"
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
                    
                                                                        <div class="max-w-full flex flex-col px-4 py-2 justify-center items-center" id="new-upload">
                                                                        <div id="image-preview-container1"></div>
                                                                            <!-- Container for preview images -->
                                                                            <div class="my-16 text-center" id="image-preview-container">
            
                                                                            <p class="font-semibold">
                                                                                <span class="text-gray-800 dark:text-white">kéo hoặc thả ảnh hoặc</span>
                                                                                <span class="text-blue-500">duyệt</span>
                                                                            </p>
                                                                            <p class="mt-1 opacity-60 dark:text-white">Hỗ trợ: jpeg, png</p>
                                                                        </div>
                                                                       
                                                                        </div>
                                                                      
                                                                    </div>
                                                                    <span class="avatar avatar-circle avatat-lg border-2 border-white dark:border-gray-800 shadow-lg" data-avatar-size="60">
                                                                                            <img class="avatar-img avatar-circle" src="../image/<?php echo $avt?>" loading="lazy">
                                                                                            
                                                                   </span>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                
                                                                </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                                        <div class="font-semibold">Chức vụ</div>
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
                                                                                            name="title"
                                                                                            autocomplete="off"
                                                                                            placeholder="Title"
                                                                                            value="<?php 
                                                                                            if($quyen == 1 ){
                                                                                                echo "Admin";
                                                                                            }
                                                                                            else{
                                                                                                echo "Nhân Viên";
                                                                                            }
                                                                                            ?>"
                                                                                            readonly=""
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                                        <div class="font-semibold">Mã nhân Viên</div>
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
                                                                                            
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="manv"
                                                                                            autocomplete="off"
                                                                                            placeholder="Title"
                                                                                            value="<?php echo $ma_nhan_vien; ?>"
                                                                                            readonly=""
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                       
                                                                    <div class="flex mt-4 ltr:justify-end gap-2">
                                                                       
                                                                        <button class="btn btn-default" type="button">
                                                                            Hủy bỏ
                                                                        </button>

                                                                        <button class="btn btn-solid" type="submit" name="submit">
                                                                            Cập nhật
                                                                        </button>
                                                                    </div>                                                                                            
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab-password" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                                            <form action="admin.php?act=account" method="POST">
                                                                <div class="form-container vertical">
                                                                    <div>
                                                                        <h5>Mật khẩu</h5>
                                                                        <p>Nhập lại mật khẩu cũ &amp; mới để đổi mật khẩu mới</p>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Mật khẩu cũ </div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <input
                                                                                        class="input"
                                                                                        type="password"
                                                                                        name="password"
                                                                                        autocomplete="off"
                                                                                        placeholder="Mật khẩu cũ "
                                                                                        value=""
                                                                                    >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Mật khẩu mới</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <input
                                                                                        class="input"
                                                                                        type="password"
                                                                                        name="newpassword"
                                                                                        autocomplete="off"
                                                                                        placeholder="Mật khẩu mới"
                                                                                        value=""
                                                                                    >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Nhập lại mật khẩu mới</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <input
                                                                                        class="input"
                                                                                        type="password"
                                                                                        name="confirmNewPassword"
                                                                                        autocomplete="off"
                                                                                        placeholder="Nhập lại mật khẩu mới"
                                                                                        value=""
                                                                                    >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-4 flex ltr:justify-end gap-2">
                                                                        <button class="btn btn-default" type="button">Reset</button>
                                                                        <button class="btn btn-solid" type="submit" name="updatepass">Cập nhật password</button>
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