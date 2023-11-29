<?php
extract($data);

// ShowArray($data);
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
                                        <h3 class="mb-4">Thay Đổi Banner trang web</h3>
                                        <p>Vui lòng upload từng ảnh 1</p>
                                        <br>
                                        <h4 class="mb-4"> Hình ảnh hiện tại</h4>
                                        <div class="grid grid-cols-4 gap-4">
                                           <?php
                                            foreach($data as $value){
                                                extract($value);
                                                ?>
                                                <a onclick="arlert(<?php echo $lien_ket?>)">
                                                <img class="rounded max-h-[300px] max-w-full" src="../image/<?php echo $hinh_anh?>" alt="<?php echo $ten_banner ?>">
                                                </a>
                                                <?php
                                            }
                                           
                                           ?>                                          
                                        </div>
                                            <form action="admin.php?act=banner" method="post" enctype="multipart/form-data"> 
                                            <div class="form-container vertical">
                                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                                    <div class="lg:col-span-2">
                                                        <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                                            <div class="card-body">
                                                                <h5>Banner 1</h5>
                                                                
                                                    <div class="lg:col-span-1">
                                                    <div class="card adaptable-card mb-4">
                                                        <div class="card-body">
                                                            <p class="mb-6">thêm hoặc thay đổi cho anh đại diện sản phẩm</p>
                                                            <div class="form-item vertical">
                                                                <label class="form-label"></label>
                                                                <div>
                                                                    <div class="upload upload-draggable hover:border-primary-600">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            name="anh"
                                                                            onchange="previewImagesindex1(event)"
                                                                        >
                                                                        <div class="my-16 text-center" id="image-preview-container1">
                                                                            <p class="font-semibold">
                                                                                <span class="text-gray-800 dark:text-white">kéo hoặc thả ảnh hoặc</span>
                                                                                <span class="text-blue-500">duyệt</span>
                                                                            </p>
                                                                            <p class="mt-1 opacity-60 dark:text-white">Support: jpeg, png</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               

                                                            </div>
                                                            <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Tiêu Đề banner </label>
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="tieudebanner" 
                                                                placeholder="Tiêu đề Banner 1">
                                                            </div>  
                                                            <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Liên kết tới sản phẩm</label>
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="lienketbanner" 
                                                                placeholder="Liên kết tới sản phẩm">
                                                            </div>  
                                                            <div class="form-item vertical">
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="idbanner" 
                                                                value="1"
                                                                placeholder="Tiêu đề Banner 1"
                                                                hidden>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-solid" type="submit" name="submit">Thay đổi</button>
                                            </div>
                                        </form>
                                        <form action="admin.php?act=banner" method="post" enctype="multipart/form-data"> 
                                            <div class="form-container vertical">
                                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                                    <div class="lg:col-span-2">
                                                        <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                                            <div class="card-body">
                                                                <h5>Banner 2</h5>
                                                                
                                                    <div class="lg:col-span-1">
                                                    <div class="card adaptable-card mb-4">
                                                        <div class="card-body">
                                                            <p class="mb-6">thêm hoặc thay đổi cho anh đại diện sản phẩm</p>
                                                            <div class="form-item vertical">
                                                                <label class="form-label"></label>
                                                                <div>
                                                                    <div class="upload upload-draggable hover:border-primary-600">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            name="anh"
                                                                            onchange="previewImagesindex2(event)"
                                                                        >
                                                                        <div class="my-16 text-center" id="image-preview-container2">
                                                                            <p class="font-semibold">
                                                                                <span class="text-gray-800 dark:text-white">kéo hoặc thả ảnh hoặc</span>
                                                                                <span class="text-blue-500">duyệt</span>
                                                                            </p>
                                                                            <p class="mt-1 opacity-60 dark:text-white">Support: jpeg, png</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               

                                                            </div>
                                                            <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Tiêu Đề banner </label>
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="tieudebanner" 
                                                                placeholder="Tiêu đề Banner 2">
                                                            </div>  
                                                            <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Liên kết tới sản phẩm</label>
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="lienketbanner" 
                                                                placeholder="Liên kết tới sản phẩm">
                                                            </div>  
                                                            <div class="form-item vertical">
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="idbanner" 
                                                                value="2"
                                                                placeholder="Tiêu đề Banner 2"
                                                                hidden>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-solid" type="submit" name="submit">Thay đổi</button>
                                            </div>
                                        </form>
                                        <form action="admin.php?act=banner" method="post" enctype="multipart/form-data"> 
                                            <div class="form-container vertical">
                                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                                    <div class="lg:col-span-2">
                                                        <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                                            <div class="card-body">
                                                                <h5>Banner 3</h5>
                                                                
                                                    <div class="lg:col-span-1">
                                                    <div class="card adaptable-card mb-4">
                                                        <div class="card-body">
                                                            <p class="mb-6">thêm hoặc thay đổi cho anh đại diện sản phẩm</p>
                                                            <div class="form-item vertical">
                                                                <label class="form-label"></label>
                                                                <div>
                                                                    <div class="upload upload-draggable hover:border-primary-600">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            name="anh"
                                                                            onchange="previewImagesindex3(event)"
                                                                        >
                                                                        <div class="my-16 text-center" id="image-preview-container3">
                                                                            <p class="font-semibold">
                                                                                <span class="text-gray-800 dark:text-white">kéo hoặc thả ảnh hoặc</span>
                                                                                <span class="text-blue-500">duyệt</span>
                                                                            </p>
                                                                            <p class="mt-1 opacity-60 dark:text-white">Support: jpeg, png</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               

                                                            </div>
                                                            <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Tiêu Đề banner </label>
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="tieudebanner" 
                                                                placeholder="Tiêu đề Banner 3">
                                                            </div>  
                                                            <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Liên kết tới sản phẩm</label>
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="lienketbanner" 
                                                                placeholder="Liên kết tới sản phẩm">
                                                            </div>  
                                                            <div class="form-item vertical">
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="idbanner" 
                                                                value="3"
                                                                placeholder="Tiêu đề Banner 3"
                                                                hidden>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-solid" type="submit" name="submit">Thay đổi</button>
                                            </div>
                                        </form>
                                        <form action="admin.php?act=banner" method="post" enctype="multipart/form-data"> 
                                            <div class="form-container vertical">
                                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                                    <div class="lg:col-span-2">
                                                        <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                                            <div class="card-body">
                                                                <h5>Banner 4</h5>
                                                                
                                                    <div class="lg:col-span-1">
                                                    <div class="card adaptable-card mb-4">
                                                        <div class="card-body">
                                                            <p class="mb-6">thêm hoặc thay đổi cho anh đại diện sản phẩm</p>
                                                            <div class="form-item vertical">
                                                                <label class="form-label"></label>
                                                                <div>
                                                                    <div class="upload upload-draggable hover:border-primary-600">
                                                                        <input
                                                                            class="upload-input draggable"
                                                                            type="file"
                                                                            name="anh"
                                                                            onchange="previewImagesindex4(event)"
                                                                        >
                                                                        <div class="my-16 text-center" id="image-preview-container4">
                                                                            <p class="font-semibold">
                                                                                <span class="text-gray-800 dark:text-white">kéo hoặc thả ảnh hoặc</span>
                                                                                <span class="text-blue-500">duyệt</span>
                                                                            </p>
                                                                            <p class="mt-1 opacity-60 dark:text-white">Support: jpeg, png</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               

                                                            </div>
                                                            <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Tiêu Đề banner </label>
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="tieudebanner" 
                                                                placeholder="Tiêu đề Banner 4">
                                                            </div>  
                                                            <div class="form-item vertical">
                                                                    <label class="form-label mb-2">Liên kết tới sản phẩm</label>
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="lienketbanner" 
                                                                placeholder="Liên kết tới sản phẩm">
                                                            </div>  
                                                            <div class="form-item vertical">
                                                                <input 
                                                                class="input" 
                                                                type="text"  
                                                                name="idbanner" 
                                                                value="4"
                                                                placeholder="Tiêu đề Banner 4"
                                                                hidden>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-solid" type="submit" name="submit">Thay đổi</button>
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
