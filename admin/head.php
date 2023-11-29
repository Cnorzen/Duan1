<!DOCTYPE html>
<?php
$ten_nhan_vien= $_SESSION['tennv'];
$ma_nhan_vien = $_SESSION['manv'];
$avt = $_SESSION['anhdaidien'];
$quyen = $_SESSION['admin'];
$email = $_SESSION['email'];
$ma_quyen = $_SESSION['quyen'];
													?>
<html lang="en" dir="ltr" class="light">
	
<!-- Mirrored from www.themenate.net/elstar-html/modern-project-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 10:45:01 GMT -->
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Quản trị Admin</title>

		<!-- Core CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<!-- App Start-->
		<div id="root">
			<!-- App Layout-->
			<div class="app-layout-modern flex flex-auto flex-col">
				<div class="flex flex-auto min-w-0">
					<!-- Side Nav start-->
					<div class="side-nav side-nav-transparent side-nav-expand">
						<div class="side-nav-header">
							<div class="logo px-6">
								<img src="img/logo/logo-light-full.png" alt="Elstar logo">
							</div>
						</div>
						<div class="side-nav-content relative side-nav-scroll">
							<nav class="menu menu-transparent px-4 pb-4">
								<div class="menu-group">
									<div class="menu-title">Chức năng chính</div>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6">
                                             <path d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z"></path>
                                            </svg>
												<span class="menu-item-text">Loại Hàng</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listdm">
														<span>Danh sách hàng hóa</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=adddm">
														<span>Thêm hàng hóa</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=softdell">
														<span>Hàng hóa đã xóa</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"></path>
                                            </svg>
												<span class="menu-item-text">Sản Phẩm</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listsp">
														<span>Danh sách sản Phẩm</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=addsp">
														<span>Thêm Sản Phẩm</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listsoftdellsp">
														<span>Sản phẩm đã xóa</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z"></path>
                                        </svg>
												<span class="menu-item-text">Đơn hàng</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listdonhang">
														<span>Danh sách đơn hàng</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listhuydon">
														<span>Đơn hàng đã hủy</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                                            </svg>
												<span class="menu-item-text">Khách Hàng</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listkh">
														<span>Danh sách khách hàng</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=addkh">
														<span>Thêm khách hàng</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listsoftdellkh">
														<span>khách hàng đã xóa</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                                            </svg>
												<span class="menu-item-text">Quản lý Bình Luận</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listbl">
														<span>Danh sách bình luận</span>
													</a>
												</li>
												<!-- <li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=blsoftdellklist">
														<span>Bình luận đã xóa</span>
													</a>
												</li> -->
												
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 004.875-4.875V12m6.375 5.25a4.875 4.875 0 01-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H3.75a1.5 1.5 0 00-1.5 1.5v13.5a1.5 1.5 0 001.5 1.5zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 013.182 3.182zM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 113.182-3.182z"></path>
                                             </svg>
												<span class="menu-item-text">Quản lý khuyến mãi</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=cuppon">
														<span>Danh sách khuyến mãi</span>
													</a>
												</li>
												 <li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=cupponexpried">
														<span>Khuyến mãi đã hết hạn</span>
													</a>
												</li> 
												
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
												</svg>
												<span class="menu-item-text">Quản Lý Tài Khoản</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=account">
														<span>Quản lý tài khoản</span>
													</a>
												</li>
											
											</ul>
										</li>
									</ul>
								</div>
								<?php
								if($ma_quyen == 1){
								
								?>
								<div class="menu-group">
									<div class="menu-title">Mục dành cho Admin</div>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                            	<path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"></path>
                                            </svg>
												<span class="menu-item-text">Quản lý Nhân Viên</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listnv">
														<span>Danh sách nhân viên</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=addnv">
														<span>Thêm nhân viên mới</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listsoftdellnv">
														<span>Danh sách nhân viên đã xóa</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"></path>
                                            </svg>
												<span class="menu-item-text">Quản lý Banner ảnh</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=banner">
														<span>Quản lý banner</span>
													</a>
												</li>
												
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                                                                        </svg>
												<span class="menu-item-text">Thống Kê</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=dashboard">
														<span>Thống kê</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=salestat">
														<span>Thống kê đơn hàng</span>
													</a>
												</li>
												
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"></path>
                                                                        </svg>
												<span class="menu-item-text">Thông tin liên hệ </span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=contract">
														<span>Thông tin</span>
													</a>
												</li>
												
											</ul>
										</li>
									</ul>
								</div>
								<?php
								} else{
									echo "";
								}
								?>
								
							</nav>
						</div>
					</div>	
					
					<!-- Side Nav end-->
					

					<!-- Header Nav start-->
					<div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full bg-white dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700">
						<header class="header border-b border-gray-200 dark:border-gray-700">
							<div class="header-wrapper h-16">
								<!-- Header Nav Start start-->
								<div class="header-action header-action-start">
									<div id="side-nav-toggle" class="side-nav-toggle header-action-item header-action-item-hoverable">
										<div class="text-2xl">
											<svg class="side-nav-toggle-icon-expand" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
											</svg>
											<svg class="side-nav-toggle-icon-collapsed hidden" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
											</svg>
										</div>
									</div>
									<div class="side-nav-toggle-mobile header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#mobile-nav-drawer">
										<div class="text-2xl">
											<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
											</svg>
										</div>
									</div>
								
								</div>
								<!-- Header Nav Start end-->
								<!-- Header Nav End start -->
								<div class="header-action header-action-end">

									<!-- Notification-->
									<div class="dropdown">
										<div class="dropdown-toggle">
											<div class="text-2xl header-action-item header-action-item-hoverable">
												<a href="admin.php?act=dashboard"> 
												<span class="badge-wrapper">
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                                                                        </svg>
												
												</span>
												</a>
											</div>
										</div>
										
									</div>
									<!-- Config-->
									<div class="text-2xl header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#nav-config">
										<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
										</svg>
									</div>
									<!-- User Dropdown-->
									<div class="dropdown">
										<div class="dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown">
											<div class="header-action-item flex items-center gap-2">
												<span class="avatar avatar-circle" data-avatar-size="32" style="width: 32px">
												<img class="avatar-img avatar-circle" src="../image/<?php echo $avt?>" loading="lazy" alt=""></span>
												<div class="hidden md:block">
												
													<div class="text-xs capitalize"><?php echo $quyen?></div>
													<div class="font-bold"><?php echo $ten_nhan_vien?></div>
												</div>
											</div>
										</div>
										<ul class="dropdown-menu bottom-end min-w-[240px]">
											<li class="menu-item-header">
												<div class="py-2 px-3 flex items-center gap-2">
													<span class="avatar avatar-circle avatar-md">
														<img class="avatar-img avatar-circle" src="../image/<?php echo $avt?>" loading="lazy" alt="">
													</span>
													<div>
														<div class="font-bold text-gray-900 dark:text-gray-100"><?php echo $ten_nhan_vien?></div>
														<div class="text-xs"><?php echo $email?></div>
													</div>
												</div>
											</li>
											<li class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="admin.php?act=account">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
														</svg>
													</span>
													<span>Tài Khoản</span>
												</a>
											</li>
											
											
											<li id="menu-item-29-2VewETdxAb" class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable gap-2 h-[35px]">
											<a class="flex gap-2 items-center" href="admin.php?act=logout">
												<span class="text-xl opacity-50">
													<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
													</svg>
												</span>
												<span>Đăng Xuất</span>
											</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- Header Nav End end -->
							</div>
						</header>
						<!-- Popup start -->
						<div class="modal fade" id="nav-config" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog drawer drawer-end">
								<div class="drawer-content">
									<div class="drawer-header">
										<h4>Theme Config</h4>
										<span class="close-btn close-btn-default" role="button" data-bs-dismiss="modal">
											<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
											</svg>
										</span>
									</div>
									<div class="drawer-body">
										<div class="flex flex-col h-full justify-between">
											<div class="flex flex-col gap-y-10 mb-6">
												<div class="flex items-center justify-between">
													<div>
														<h6>Dark Mode</h6>
														<span>Switch theme to dark mode</span>
													</div>
													<div>
														<label class="switcher">
															<input name="dark-mode-toggle" type="checkbox" value="">
															<span class="switcher-toggle"></span>
														</label>
													</div>
												</div>
												<div class="flex items-center justify-between">
													<div>
														<h6>Direction</h6>
														<span>Select a direction</span>
													</div>
													<div class="input-group">
														<button id="dir-ltr-button" class="btn btn-default btn-sm btn-active">
															LTR
														</button>
														<button id="dir-rtl-button" class="btn bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 radius-round h-9 px-3 py-2 text-sm">
															RTL
														</button>
													</div>
												</div>
												<div>
													<h6 class="mb-3">Nav Mode</h6>
													<div class="inline-flex">
														<label class="radio-label inline-flex mr-3" for="nav-mode-radio-default">
															<input id="nav-mode-radio-default" type="radio" value="default" name="nav-mode-radio-group" class="radio text-primary-600" checked>
															<span>Default</span>
														</label>
														<label class="radio-label inline-flex mr-3" for="nav-mode-radio-themed">
															<input id="nav-mode-radio-themed" type="radio" value="themed" name="nav-mode-radio-group" class="radio text-primary-600">
															<span>Themed</span>
														</label>
													</div>
												</div>
												<div>
													<h6 class="mb-3">Nav Mode</h6>
													<select id="theme-select" class="input input-sm focus:ring-primary-600 focus-within:ring-primary-600 focus-within:border-primary-600 focus:border-primary-600">
														<option value="primary" selected>Indigo</option>
														<option value="red">Red</option>
														<option value="orange">Orange</option>
														<option value="amber">Amber</option>
														<option value="yellow">Yellow</option>
														<option value="lime">Lime</option>
														<option value="green">Green</option>
														<option value="emerald">Emerald</option>
														<option value="teal">Teal</option>
														<option value="cyan">Cyan</option>
														<option value="sky">Sky</option>
														<option value="blue">Blue</option>
														<option value="violet">Violet</option>
														<option value="purple">Purple</option>
														<option value="fuchsia">Fuchsia</option>
														<option value="pink">Pink</option>
														<option value="rose">Rose</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="dialog-search" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog dialog">
								<div class="dialog-content p-0">
									<div>
										<div class="px-4 flex items-center justify-between border-b border-gray-200 dark:border-gray-600">
											<div class="flex items-center">
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
													<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
												</svg>
												<input class="ring-0 outline-none block w-full p-4 text-base bg-transparent text-gray-900 dark:text-gray-100" placeholder="Search...">
											</div>
											<button class="button bg-white border border-gray-300 dark:bg-gray-700 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 rounded font-semibold h-7 px-3 py-1 text-xs" data-bs-dismiss="modal">Esc</button>
										</div>
										<div class="py-6 px-5 max-h-[550px] overflow-y-auto">
											<div class="mb-6">
												<h6 class="mb-3">Recommended</h6>
												<a href="http://www.themenate.net/docs/documentation/introduction">
													<div class="flex items-center justify-between rounded-lg p-3.5 cursor-pointer user-select bg-gray-50 dark:bg-gray-700/60 hover:bg-gray-100 dark:hover:bg-gray-700/90 mb-3">
														<div class="flex items-center">
															<div class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm text-xl group-hover:shadow h-6 w-6 flex items-center justify-center bg-white dark:bg-gray-700 text-primary-600 dark:text-gray-100">
																<svg
																	stroke="currentColor"
																	fill="none"
																	stroke-width="2"
																	viewBox="0 0 24 24"
																	aria-hidden="true"
																	height="1em"
																	width="1em"
																	xmlns="http://www.w3.org/2000/svg"
																>
																	<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
																</svg>
															</div>
															<div class="text-gray-900 dark:text-gray-300">
																<span>
																	<span>Documentation</span>
																</span>
															</div>
														</div>
														<svg
															stroke="currentColor"
															fill="currentColor"
															stroke-width="0"
															viewBox="0 0 20 20"
															aria-hidden="true"
															class="text-lg"
															height="1em"
															width="1em"
															xmlns="http://www.w3.org/2000/svg"
														>
															<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
														</svg>
													</div>
												</a>
												<a href="http://www.themenate.net/docs/changelog">
													<div class="flex items-center justify-between rounded-lg p-3.5 cursor-pointer user-select bg-gray-50 dark:bg-gray-700/60 hover:bg-gray-100 dark:hover:bg-gray-700/90 mb-3">
														<div class="flex items-center">
															<div class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm text-xl group-hover:shadow h-6 w-6 flex items-center justify-center bg-white dark:bg-gray-700 text-primary-600 dark:text-gray-100">
																<svg
																	stroke="currentColor"
																	fill="none"
																	stroke-width="2"
																	viewBox="0 0 24 24"
																	aria-hidden="true"
																	height="1em"
																	width="1em"
																	xmlns="http://www.w3.org/2000/svg"
																>
																	<path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
																</svg>
															</div>
															<div class="text-gray-900 dark:text-gray-300">
																<span>
																	<span>Changelog</span>
																</span>
															</div>
														</div>
														<svg
															stroke="currentColor"
															fill="currentColor"
															stroke-width="0"
															viewBox="0 0 20 20"
															aria-hidden="true"
															class="text-lg"
															height="1em"
															width="1em"
															xmlns="http://www.w3.org/2000/svg"
														>
															<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
														</svg>
													</div>
												</a>
												<a href="http://www.themenate.net/ui-components/button">
													<div class="flex items-center justify-between rounded-lg p-3.5 cursor-pointer user-select bg-gray-50 dark:bg-gray-700/60 hover:bg-gray-100 dark:hover:bg-gray-700/90 mb-3">
														<div class="flex items-center">
															<div class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm text-xl group-hover:shadow h-6 w-6 flex items-center justify-center bg-white dark:bg-gray-700 text-primary-600 dark:text-gray-100">
																<svg
																	stroke="currentColor"
																	fill="none"
																	stroke-width="2"
																	viewBox="0 0 24 24"
																	aria-hidden="true"
																	height="1em"
																	width="1em"
																	xmlns="http://www.w3.org/2000/svg"
																>
																	<path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
																</svg>
															</div>
															<div class="text-gray-900 dark:text-gray-300">
																<span>
																	<span>Button</span>
																</span>
															</div>
														</div>
														<svg
															stroke="currentColor"
															fill="currentColor"
															stroke-width="0"
															viewBox="0 0 20 20"
															aria-hidden="true"
															class="text-lg"
															height="1em"
															width="1em"
															xmlns="http://www.w3.org/2000/svg"
														>
															<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
														</svg>
													</div>
												</a>
											</div>
										</div>
									</div>									
								</div>
							</div>
						</div>
						<div class="modal fade" id="mobile-nav-drawer" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog drawer drawer-start !w-[330px]">
								<div class="drawer-content">
									<div class="drawer-header">
										
										<span class="close-btn" role="button" data-bs-dismiss="modal">
											<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
											</svg>
										</span>
									</div>
									<div class="drawer-body p-0">
										<div class="side-nav-mobile">
											<div class="side-nav-content relative side-nav-scroll">
												<nav class="menu menu-transparent px-4 pb-4">
												<div class="menu-group">
									<div class="menu-title">Chức năng chính</div>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6">
                                             <path d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z"></path>
                                            </svg>
												<span class="menu-item-text">Loại Hàng</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listdm">
														<span>Danh sách hàng hóa</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=adddm">
														<span>Thêm hàng hóa</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=softdell">
														<span>Hàng hóa đã xóa</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"></path>
                                            </svg>
												<span class="menu-item-text">Sản Phẩm</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listsp">
														<span>Danh sách sản Phẩm</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=addsp">
														<span>Thêm Sản Phẩm</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listsoftdellsp">
														<span>Sản phẩm đã xóa</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z"></path>
                                        </svg>
												<span class="menu-item-text">Đơn hàng</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listdonhang">
														<span>Danh sách đơn hàng</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listhuydon">
														<span>Đơn hàng đã hủy</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                                            </svg>
												<span class="menu-item-text">Khách Hàng</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listkh">
														<span>Danh sách khách hàng</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=addkh">
														<span>Thêm khách hàng</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listsoftdellkh">
														<span>khách hàng đã xóa</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                                            </svg>
												<span class="menu-item-text">Quản lý Bình Luận</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listbl">
														<span>Danh sách bình luận</span>
													</a>
												</li>
												<!-- <li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=blsoftdellklist">
														<span>Bình luận đã xóa</span>
													</a>
												</li> -->
												
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
												</svg>
												<span class="menu-item-text">Quản Lý Tài Khoản</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=account">
														<span>Quản lý tài khoản</span>
													</a>
												</li>
											
											</ul>
										</li>
									</ul>
								</div>
								<?php
								if($ma_quyen == 1){
								
								?>
								<div class="menu-group">
									<div class="menu-title">Mục dành cho Admin</div>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                            	<path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"></path>
                                            </svg>
												<span class="menu-item-text">Quản lý Nhân Viên</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listnv">
														<span>Danh sách nhân viên</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=addnv">
														<span>Thêm nhân viên mới</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=listsoftdellnv">
														<span>Danh sách nhân viên đã xóa</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"></path>
                                            </svg>
												<span class="menu-item-text">Quản lý Banner ảnh</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=banner">
														<span>Quản lý banner</span>
													</a>
												</li>
												
											</ul>
										</li>
									</ul>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                                                                        </svg>
												<span class="menu-item-text">Thống Kê</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=dashboard">
														<span>Thống kê</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="admin.php?act=salestat">
														<span>Thống kê đơn hàng</span>
													</a>
												</li>
												
											</ul>
										</li>
									</ul>
								</div>
								<?php
								} else{
									echo "";
								}
								?>
								
												</nav>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Popup end -->

		<!-- Core Vendors JS -->
		<script src="js/vendors.min.js"></script>

		<!-- Core JS -->
		<script src="js/app.min.js"></script>
	</body>


<!-- Mirrored from www.themenate.net/elstar-html/modern-project-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 10:50:01 GMT -->
</html>