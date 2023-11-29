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
                                        <h3 class="mb-4">Thêm một sản phẩm mới</h3>
                                        <form action="admin.php?act=addsp" method="post" enctype="multipart/form-data"> 
                                            <div class="form-container vertical">
                                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                                    <div class="lg:col-span-2">
                                                        <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                                            <div class="card-body">
                                                                <h5>Thông tin cơ bản sản phẩm</h5>
                                                                <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Tên Sản phẩm</label>
                                                                    <div>
                                                                        <input
                                                                            class="input"
                                                                            type="text"
                                                                            name="tensp"
                                                                            autocomplete="off"
                                                                            placeholder="Tên Sản Phẩm"
                                                                            value=""
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Mã sản phẩm</label>
                                                                    <input
                                                                        class="input"
                                                                        type="text"
                                                                        name="masp"
                                                                        autocomplete="off"
                                                                        placeholder="Mã được tạo tụ động"
                                                                        disabled
                                                                    >
                                                                </div>
                                                                <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Mô tả sản phẩm</label>
                                                                    <div class="rich-text-editor">
                                                                        <div id="description1">
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                                            <div class="card-body">
                                                                <h5>Giá</h5>
                                                                <p class="mb-6">Thiết lập giá cả cho sản phẩm</p>
                                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                    <div class="col-span-1">
                                                                        <div class="form-item vertical">
                                                                            <label class="form-label mb-2">Số lượng</label>
                                                                            <div>
                                                                                <input
                                                                                    class="input"
                                                                                    type="text"
                                                                                    name="soluong"
                                                                                    autocomplete="off"
                                                                                    placeholder="nhập số lượng"
                                                                                    value="0"
                                                                                    inputmode="numeric"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-span-1">
                                                                        <div class="form-item vertical">
                                                                            <label class="form-label mb-2">Đơn giá</label>
                                                                            <div>
                                                                                <span class="input-wrapper undefined">
                                                                                    <div class="input-suffix-start">Đ </div>
                                                                                    <input
                                                                                        class="input pl-8"
                                                                                        type="text"
                                                                                        name="dongia"
                                                                                        autocomplete="off"
                                                                                        placeholder="Nhập giá "
                                                                                        value="0"
                                                                                        inputmode="numeric"
                                                                                    >
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                    <div class="col-span-1">
                                                                        <div class="form-item vertical">
                                                                            <label class="form-label mb-2">Giảm Giá</label>
                                                                            <div>
                                                                                <span class="input-wrapper undefined">
                                                                                    <div class="input-suffix-start">Đ </div>
                                                                                    <input
                                                                                        class="input pl-8"
                                                                                        type="text"
                                                                                        name="giamgia"
                                                                                        autocomplete="off"
                                                                                        placeholder="Giảm giá"
                                                                                        value="0"
                                                                                        inputmode="numeric"
                                                                                    >
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="card adaptable-card pb-6 py-4 ">
                                                            <div class="card-body">
                                                                <h5>Phân loại</h5>
                                                                <p class="mb-6">Phân loại cho từng mặt hàng</p>
                                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                    <div class="col-span-1">
                                                                        <div class="form-item vertical">
                                                                            <label class="form-label mb-2">Loại Hàng</label>
                                                                            <div>
                                                                                <select class="input" name="loaihang">
                                                                                    <option selected value="concac">Select...</option>
                                                                                    <?php
                                                                                    if(is_array($data)){
                                                                                        extract($data);
                                                                                    }
                                                                                    foreach ($data as $list){
                                                                                        extract($list); 
                                                                                        ?>
                                                                                        <option value="<?php echo $ma_loai ?>"><?php echo $ten_loai ?></option>
                                                                                        <?php
                                                                                    }
                                                                                    
                                                                                    
                                                                                    ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                    <div class="col-span-1">
                                                                        <div class="form-item vertical">
                                                                            <label class="form-label mb-2">Thương hiệu</label>
                                                                            <div>
                                                                                <input
                                                                                    class="input"
                                                                                    type="text"
                                                                                    name="thuonghieu"
                                                                                    autocomplete="off"
                                                                                    placeholder="Brand"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>         
                                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                                    <div class="col-span-1">
                                                                        <div class="form-item vertical">
                                                                            <label class="form-label mb-2">Lượt xem</label>
                                                                            <div>
                                                                                <input
                                                                                    class="input"
                                                                                    type="text"
                                                                                    name="luotxem"
                                                                                    autocomplete="off"
                                                                                    placeholder="Mặc định là 0"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                            </div>
                                                            <label class="form-label mb-2">Ngày Nhập</label>
                                                            <span class="input-wrapper">
                                                            <input datepicker class="input pr-8" placeholder="Pick a date" name="ngaythem">
                                                            <div class="input-suffix-end">
                                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                </svg>
                                                            </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="lg:col-span-1">
                                                    <div class="card adaptable-card mb-4">
                                                        <div class="card-body">
                                                            <h5>Ảnh Đại diện</h5>
                                                            <p class="mb-6">thêm hoặc thay đổi cho anh đại diện sản phẩm</p>
                                                            <div class="form-item vertical">
                                                                <label class="form-label"></label>
                                                                <div>
                                                                    <div class="upload upload-draggable hover:border-primary-600">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            name="anh"
                                                                            onchange="previewImagesindex(event)"
                                                                        >
                                                                        <div class="my-16 text-center" id="image-preview-container">
                                                                            <p class="font-semibold">
                                                                                <span class="text-gray-800 dark:text-white">kéo hoặc thả ảnh hoặc</span>
                                                                                <span class="text-blue-500">duyệt</span>
                                                                            </p>
                                                                            <p class="mt-1 opacity-60 dark:text-white">Support: jpeg, png</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-1">
                                                    <div class="card adaptable-card mb-4">
                                                        <div class="card-body">
                                                            <h5>Ảnh sản phẩm</h5>
                                                            <p class="mb-6">Thêm hoặc thay đổi ảnh đại diện sản phẩm</p>
                                                            <div class="form-item vertical">
                                                                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                                                                    <!-- Repeat the above block for each existing image -->

                                                                    <!-- New image upload -->
                                                                    <div class="upload upload-draggable hover:border-primary-600 min-h-fit">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            title=""
                                                                            value=""
                                                                            name="anh1"
                                                                            onchange="previewImagesindex1(event)"
                                                                            
                                                                        >
                    
                                                                        <div class="max-w-full flex flex-col px-4 py-2 justify-center items-center" id="new-upload">
                                                                        <div id="image-preview-container1"></div>
                                                                            <!-- Container for preview images -->
                                                                            <div class="my-16 text-center" id="image-preview-container1">
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
                                                            <div class="form-item vertical">
                                                                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                                                                    <!-- Repeat the above block for each existing image -->

                                                                    <!-- New image upload -->
                                                                    <div class="upload upload-draggable hover:border-primary-600 min-h-fit">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            title=""
                                                                            value=""
                                                                            name="anh2"
                                                                            onchange="previewImagesindex2(event)"
                                                                            
                                                                        >
                    
                                                                        <div class="max-w-full flex flex-col px-4 py-2 justify-center items-center" id="new-upload">
                                                                        <div id="image-preview-container1"></div>
                                                                            <!-- Container for preview images -->
                                                                            <div class="my-16 text-center" id="image-preview-container2">
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
                                                            <div class="form-item vertical">
                                                                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                                                                    <!-- Repeat the above block for each existing image -->

                                                                    <!-- New image upload -->
                                                                    <div class="upload upload-draggable hover:border-primary-600 min-h-fit">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            title=""
                                                                            value=""
                                                                            name="anh3"
                                                                            onchange="previewImagesindex3(event)"
                                                                            
                                                                        >
                    
                                                                        <div class="max-w-full flex flex-col px-4 py-2 justify-center items-center" id="new-upload">
                                                                        <div id="image-preview-container1"></div>
                                                                            <!-- Container for preview images -->
                                                                            <div class="my-16 text-center" id="image-preview-container3">
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
                                                            <div class="form-item vertical">
                                                                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                                                                    <!-- Repeat the above block for each existing image -->

                                                                    <!-- New image upload -->
                                                                    <div class="upload upload-draggable hover:border-primary-600 min-h-fit">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            title=""
                                                                            value=""
                                                                            name="anh4"
                                                                            onchange="previewImagesindex4(event)"
                                                                        >
                    
                                                                        <div class="max-w-full flex flex-col px-4 py-2 justify-center items-center" id="new-upload">
                                                                        <div id="image-preview-container1"></div>
                                                                            <!-- Container for preview images -->
                                                                            <div class="my-16 text-center" id="image-preview-container4">
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
                                                </div>
                                                    </div>
                                            </div>
                                                <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
                                                    <div class="md:flex items-center">
                                                        <button class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" type="button">Trở lại</button>
                                                        <button class="btn btn-solid btn-sm" type="submit" name="submit">
                                                            <span class="flex items-center justify-center">
                                                                <span class="text-lg">
                                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M893.3 293.3L730.7 130.7c-7.5-7.5-16.7-13-26.7-16V112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V338.5c0-17-6.7-33.2-18.7-45.2zM384 184h256v104H384V184zm456 656H184V184h136v136c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32V205.8l136 136V840zM512 442c-79.5 0-144 64.5-144 144s64.5 144 144 144 144-64.5 144-144-64.5-144-144-144zm0 224c-44.2 0-80-35.8-80-80s35.8-80 80-80 80 35.8 80 80-35.8 80-80 80z"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="ltr:ml-1 rtl:mr-1">Thêm sản phẩm</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>    
                                </div>
							</main>

		<!-- Core Vendors JS -->
		<script src="js/vendors.min.js"></script>

		<!-- Other Vendors JS -->
        <script src="vendors/quill/quill.min.js"></script>

		<!-- Page js -->
        <script src="js/pages/product-edit.js"></script>

<script>
    // Lấy giá trị từ input ngày
var inputValue = document.getElementsByName('ngaythem')[0].value;

// Chuyển đổi định dạng ngày
var parts = inputValue.split('/');
var formattedDate = parts[2] + '-' + parts[0] + '-' + parts[1];

// Gán giá trị mới cho input ngày
document.getElementsByName('ngaythem')[0].value = formattedDate;

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
            function previewImagesindex1(event) {
                var previewContainer = document.getElementById('image-preview-container1');
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
            function previewImagesindex2(event) {
                var previewContainer = document.getElementById('image-preview-container2');
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

            function previewImagesindex3(event) {
                var previewContainer = document.getElementById('image-preview-container3');
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

            function previewImagesindex4(event) {
                var previewContainer = document.getElementById('image-preview-container4');
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
document.addEventListener("DOMContentLoaded", function() {
    tinymce.init({
      selector: "#description1",
      plugins: 'mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      autoresize_bottom_margin: 16
    });
  })
// Lấy dữ liệu từ TinyMCE editor
const descriptionValue = tinymce.get('description').getContent();

// Giả sử bạn có một form và bạn muốn thiết lập giá trị cho một trường ẩn
document.getElementById('hiddenDescriptionInput').value = descriptionValue;




</script>
<script src="https://cdn.tiny.cloud/1/wi4t8493gpd7t7lckegg8r2amktox0nngnlhlutio03hdlhq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
