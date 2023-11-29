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
                                    <div class="container mx-auto">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3>Thêm một nhân viên mới</h3>
                                        </div>
                                        <div class="card adaptable-card">
                                            <div class="card-body">
                                                <div class="tabs">
                                                    <div class="tab-content px-4 py-6">
                                                        <div class="tab-pane fade show active" id="tab-profile" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                            <form action="admin.php?act=addnv" method="post" enctype="multipart/form-data" >
                                                             <div class="form-container vertical">
                                                                    <div>
                                                                        <h5>Thông tin cơ bản</h5>
                                                                        
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Tên nhân viên</div>
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
                                                                                            placeholder="Name"
                                                                                           
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
                                                                                          
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Mật khẩu truy cập</div>
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
                                                                                          
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path>

                                                                                            </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="matkhau"
                                                                                            autocomplete="off"
                                                                                            placeholder="mật khẩu truy cập"
                                                                                          
                                                                                        >
                                                                                    </span>
                                                                                </div>
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
                                                                            
                                                                </div>
                                                                            
                                                                </div>
                                                                    </div>
                                                                    </div>
                                                                    
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                                        <div class="font-semibold">Mã nhân viên</div>
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
                                                                                            name="manv"
                                                                                            autocomplete="off"
                                                                                            placeholder="Mã nhân viên"
                                              
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-8">
                                                                        <h5>Liên lạc</h5>
                                                                        <p>Thông tin liên lạc nhân viên</p>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
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
                                                                                            
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819"></path>
                                                                        </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="diachi"
                                                                                            autocomplete="off"
                                                                                            placeholder="Địa chỉ "
                                                                                           

                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 border-b border-gray-200 dark:border-gray-600 items-center">
                                                                        <div class="font-semibold">Số Điện Thoại</div>
                                                                        <div class="col-span-2">
                                                                            <div class="form-item vertical mb-0 max-w-[700px]">
                                                                                <label class="form-label"></label>
                                                                                <div>
                                                                                    <span class="input-wrapper undefined">
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
                                                                                            
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>

                                                                                            </svg>
                                                                                        </div>
                                                                                        <input
                                                                                            class="input pl-8"
                                                                                            type="text"
                                                                                            name="sdt"
                                                                                            autocomplete="off"
                                                                                            placeholder="số điện thoại"
                                                                                          
                                                                                        >
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid md:grid-cols-3 gap-4 py-8 items-center">
                                                                        <div class="font-semibold">Chức vụ nhân viên</div>
                                                                        <div class="col-span-2">
                                                                        <div class="form-item vertical mb-0 max-w-[700px]">
                                                                            <select class="input form-select" name="chuc_vu" id="trangthai">
                                                                                <option value="concac">Chọn chức vụ...</option>
                                                                                <option value="1" >Admin</option>
                                                                                <option value="1" >Nhân Viên</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="flex mt-4 ltr:justify-end gap-2">
                                                                        <button class="btn btn-default" type="button">
                                                                            Reset
                                                                        </button>
                                                                        <button class="btn btn-solid" type="submit" name="submit">
                                                                            Thêm nhân viên mới
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