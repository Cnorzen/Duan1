<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
	
<!-- Mirrored from www.themenate.net/elstar-html/modern-project-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 10:45:01 GMT -->
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Elstar - HTML Tailwind Admin Template</title>

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
									<div class="menu-title">Apps</div>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6">
                                             <path d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z"></path>
                                            </svg>
												<span class="menu-item-text">Loại Hàng</span>
											</div>
											<ul>
												<li data-menu-item="modern-project-dashboard" class="menu-item menu-item-active">
													<a class="h-full w-full flex items-center" href="admin.php?act=listdm">
														<span>Danh sách hàng hóa</span>
													</a>
												</li>
												<li data-menu-item="modern-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-project-list.html">
														<span>Thêm hàng hóa</span>
													</a>
												</li>
												<li data-menu-item="modern-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-scrum-board.html">
														<span>Hàng hóa đã xóa</span>
													</a>
												</li>
											</ul>
										</li>
										
								<div class="menu-group">
									<div class="menu-title">UI Components</div>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
												</svg>
												<span class="menu-item-text">Common</span>
											</div>
											<ul>
												<li data-menu-item="modern-button" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-button.html">
														<span>Button</span>
													</a>
												</li>
												<li data-menu-item="modern-grid" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-grid.html">
														<span>Grid</span>
													</a>
												</li>
												<li data-menu-item="modern-typography" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-typography.html">
														<span>Typography</span>
													</a>
												</li>
												<li data-menu-item="modern-icons" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-icons.html">
														<span>Icons</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
												</svg>
												<span class="menu-item-text">Feedback</span>
											</div>
											<ul>
												<li data-menu-item="modern-alert" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-alert.html">
														<span>Alert</span>
													</a>
												</li>
												<li data-menu-item="modern-dialog" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-dialog.html">
														<span>Dialog</span>
													</a>
												</li>
												<li data-menu-item="modern-drawer" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-drawer.html">
														<span>Drawer</span>
													</a>
												</li>
												<li data-menu-item="modern-progress" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-progress.html">
														<span>Progress</span>
													</a>
												</li>
												<li data-menu-item="modern-skeleton" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-skeleton.html">
														<span>Skeleton</span>
													</a>
												</li>
												<li data-menu-item="modern-spinner" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-spinner.html">
														<span>Spinner</span>
													</a>
												</li>
												<li data-menu-item="modern-toast" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-toast.html">
														<span>Toast</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
												</svg>
												<span class="menu-item-text">Data Display</span>
											</div>
											<ul>
												<li data-menu-item="modern-avatar" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-avatar.html">
														<span>Avatar</span>
													</a>
												</li>
												<li data-menu-item="modern-badge" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-badge.html">
														<span>Badge</span>
													</a>
												</li>
												<li data-menu-item="modern-card" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-card.html">
														<span>Card</span>
													</a>
												</li>
												<li data-menu-item="modern-table" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-table.html">
														<span>Table</span>
													</a>
												</li>
												<li data-menu-item="modern-tag" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-tag.html">
														<span>Tag</span>
													</a>
												</li>
												<li data-menu-item="modern-timeline" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-timeline.html">
														<span>Timeline</span>
													</a>
												</li>
												<li data-menu-item="modern-tooltip" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-tooltip.html">
														<span>Tooltip</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
												</svg>
												<span class="menu-item-text">Forms</span>
											</div>
											<ul>
												<li data-menu-item="modern-checkbox" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-checkbox.html">
														<span>Checkbox</span>
													</a>
												</li>
												<li data-menu-item="modern-date-picker" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-date-picker.html">
														<span>Date Picker</span>
													</a>
												</li>
												<li data-menu-item="modern-form" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-form.html">
														<span>Form</span>
													</a>
												</li>
												<li data-menu-item="modern-input" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-input.html">
														<span>Input</span>
													</a>
												</li>
												<li data-menu-item="modern-input-group" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-input-group.html">
														<span>Input Group</span>
													</a>
												</li>
												<li data-menu-item="modern-radio" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-radio.html">
														<span>Radio</span>
													</a>
												</li>
												<li data-menu-item="modern-segment" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-segment.html">
														<span>Segment</span>
													</a>
												</li>
												<li data-menu-item="modern-select" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-select.html">
														<span>Select</span>
													</a>
												</li>
												<li data-menu-item="modern-switcher" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-switcher.html">
														<span>Switcher</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
												</svg>
												<span class="menu-item-text">Navigation</span>
											</div>
											<ul>
												<li data-menu-item="modern-dropdown" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-dropdown.html">
														<span>Dropdown</span>
													</a>
												</li>
												<li data-menu-item="modern-menu" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-menu.html">
														<span>Menu</span>
													</a>
												</li>
												<li data-menu-item="modern-pagination" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-pagination.html">
														<span>Pagination</span>
													</a>
												</li>
												<li data-menu-item="modern-steps" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-steps.html">
														<span>Steps</span>
													</a>
												</li>
												<li data-menu-item="modern-tabs" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-tabs.html">
														<span>Tabs</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
												</svg>
												<span class="menu-item-text">Graph</span>
											</div>
											<ul>
												<li data-menu-item="modern-chart" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-chart.html">
														<span>Charts</span>
													</a>
												</li>
												<li data-menu-item="modern-maps" class="menu-item">
													<a class="h-full w-full flex items-center" href="modern-maps.html">
														<span>Maps</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="menu-group">
									<div class="menu-title">Authentication</div>
									<ul>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
												</svg>
												<span class="menu-item-text">Sign In</span>
											</div>
											<ul>
												<li data-menu-item="signin-simple" class="menu-item">
													<a class="h-full w-full flex items-center" href="signin-simple.html">
														<span>Simple</span>
													</a>
												</li>
												<li data-menu-item="signin-side" class="menu-item">
													<a class="h-full w-full flex items-center" href="signin-side.html">
														<span>Side</span>
													</a>
												</li>
												<li data-menu-item="signin-cover" class="menu-item">
													<a class="h-full w-full flex items-center" href="signin-cover.html">
														<span>Cover</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
												</svg>
												<span class="menu-item-text">Sign Up</span>
											</div>
											<ul>
												<li data-menu-item="signup-simple" class="menu-item">
													<a class="h-full w-full flex items-center" href="signup-simple.html">
														<span>Simple</span>
													</a>
												</li>
												<li data-menu-item="signup-side" class="menu-item">
													<a class="h-full w-full flex items-center" href="signup-side.html">
														<span>Side</span>
													</a>
												</li>
												<li data-menu-item="signup-cover" class="menu-item">
													<a class="h-full w-full flex items-center" href="signup-cover.html">
														<span>Cover</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
												</svg>
												<span class="menu-item-text">Forgot Password</span>
											</div>
											<ul>
												<li data-menu-item="forget-password-simple" class="menu-item">
													<a class="h-full w-full flex items-center" href="forget-password-simple.html">
														<span>Simple</span>
													</a>
												</li>
												<li data-menu-item="forget-password-side" class="menu-item">
													<a class="h-full w-full flex items-center" href="forget-password-side.html">
														<span>Side</span>
													</a>
												</li>
												<li data-menu-item="forget-password-cover" class="menu-item">
													<a class="h-full w-full flex items-center" href="forget-password-cover.html">
														<span>Cover</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-collapse">
											<div class="menu-collapse-item">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
												</svg>
												<span class="menu-item-text">Reset Password</span>
											</div>
											<ul>
												<li data-menu-item="reset-password-simple" class="menu-item">
													<a class="h-full w-full flex items-center" href="reset-password-simple.html">
														<span>Simple</span>
													</a>
												</li>
												<li data-menu-item="reset-password-side" class="menu-item">
													<a class="h-full w-full flex items-center" href="reset-password-side.html">
														<span>Side</span>
													</a>
												</li>
												<li data-menu-item="reset-password-cover" class="menu-item">
													<a class="h-full w-full flex items-center" href="reset-password-cover.html">
														<span>Cover</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="menu-group">
									<div class="menu-title menu-title-transparent">
										Pages
									</div>
									<ul>
										<li data-menu-item="modern-welcome" class="menu-item menu-item-single mb-2">
											<a class="menu-item-link" href="modern-welcome.html">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"></path>
												</svg>
												<span class="menu-item-text">Welcome</span>
											</a>
										</li>
										<li data-menu-item="modern-access-denied" class="menu-item menu-item-single mb-2">
											<a class="menu-item-link" href="modern-access-denied.html">
												<span class="menu-item-icon">
													<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
													</svg>
												</span>
												<span class="menu-item-text">Access Denied</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="menu-group">
									<div class="menu-title menu-title-transparent">
										Guide
									</div>
									<ul>
										<li data-menu-item="modern-documentation" class="menu-item menu-item-single mb-2">
											<a class="menu-item-link" href="http://www.themenate.net/elstar-html-doc" target="_blank" >
												<span class="menu-item-icon">
													<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
													</svg>
												</span>
												<span class="menu-item-text">Documentation</span>
											</a>
										</li>
									</ul>
								</div>
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
									<div class="header-search header-action-item header-action-item-hoverable text-2xl" data-bs-toggle="modal" data-bs-target="#dialog-search">
										<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
											height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
										</svg>
									</div>
								</div>
								<!-- Header Nav Start end-->
								<!-- Header Nav End start -->
								<div class="header-action header-action-end">
									<!-- Language Selector-->
									<div class="dropdown">
										<div class="dropdown-toggle" id="nav-lang-dropdown" data-bs-toggle="dropdown">
											<div class="header-action-item header-action-item-hoverable flex items-center">
												<span class="avatar avatar-circle" data-avatar-size="24">
													<img class="avatar-img avatar-circle" src="img/countries/us.png"
														loading="lazy" alt="">
												</span>
											</div>
										</div>
										<ul class="dropdown-menu bottom-end">
											<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
												<span class="flex items-center">
													<span class="avatar avatar-circle" data-avatar-size="18">
														<img class="avatar-img avatar-circle" src="img/countries/us.png"
															loading="lazy" alt="">
													</span>
													<span class="ltr:ml-2 rtl:mr-2">English</span>
												</span>
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" class="text-emerald-500 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
												</svg>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
												<span class="flex items-center">
													<span class="avatar avatar-circle" data-avatar-size="18">
														<img class="avatar-img avatar-circle" src="img/countries/cn.png" loading="lazy" alt="">
													</span>
													<span class="ltr:ml-2 rtl:mr-2">
														Chinese
													</span>
												</span>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
												<span class="flex items-center">
													<span class="avatar avatar-circle" data-avatar-size="18">
														<img class="avatar-img avatar-circle" src="img/countries/sp.png" loading="lazy" alt="">
													</span>
													<span class="ltr:ml-2 rtl:mr-2">
														Espanol
													</span>
												</span>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
												<span class="flex items-center">
													<span class="avatar avatar-circle" data-avatar-size="18">
														<img class="avatar-img avatar-circle" src="img/countries/ar.png" loading="lazy" alt="">
													</span>
													<span class="ltr:ml-2 rtl:mr-2">
														Arabic
													</span>
												</span>
											</li>
										</ul>
									</div>
									<!-- Notification-->
									<div class="dropdown">
										<div class="dropdown-toggle" id="nav-notification-dropdown" data-bs-toggle="dropdown">
											<div class="text-2xl header-action-item header-action-item-hoverable">
												<span class="badge-wrapper">
													<span class="badge-dot badge-inner" style="top: 3px; right: 6px;"></span>
													<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
													</svg>
												</span>
											</div>
										</div>
										<ul class="dropdown-menu p-0 min-w-[280px] md:min-w-[340px]">
											<li class="menu-item-header">
												<div class="border-b border-gray-200 dark:border-gray-600 px-4 py-2 flex items-center justify-between">
													<h6>Notifications</h6>
													<span class="tooltip-wrapper">
														<button class="button bg-transparent border border-transparent hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 radius-circle h-9 w-9 inline-flex items-center justify-center text-lg">
															<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"></path>
															</svg>
														</button>
													</span>
												</div>
											</li>
											<li class="relative">
												<div class="max-h-[288px] overflow-y-auto relative notification-scroll">
													<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
														<div>
															<span class="avatar avatar-circle avatar-md">
																<img class="avatar-img avatar-circle" src="img/avatars/thumb-8.jpg" loading="lazy" alt="">
															</span>
														</div>
														<div class="ltr:ml-3 rtl:mr-3">
															<div>
																<span class="font-semibold heading-text">Jean Bowman </span>
																<span>invited you to new project.</span>
															</div>
															<span class="text-xs">4 minutes ago</span>
														</div>
														<span class="badge-dot bg-primary-600  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
													</div>
													<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
														<div>
															<span class="avatar avatar-circle avatar-md bg-primary-600 dark:bg-primary-600">
																<span class="avatar-string avatar-inner-md">VK</span>
															</span>
														</div>
														<div class="ltr:ml-3 rtl:mr-3">
															<div>
																<span class="font-semibold heading-text">Vickie Kim </span>
																<span>comment in your ticket.</span>
															</div>
															<span class="text-xs">20 minutes ago</span>
														</div>
														<span class="badge-dot bg-primary-600  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
													</div>
													<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
														<div>
															<span class="avatar avatar-circle avatar-md bg-blue-100 text-blue-600 dark:bg-blue-500/20 dark:text-blue-100">
																<span class="avatar-icon avatar-icon-md">
																	<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																			d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
																		</path>
																	</svg>
																</span>
															</span>
														</div>
														<div class="ltr:ml-3 rtl:mr-3">
															<div>
																<span>Please submit your daily report.</span>
															</div>
															<span class="text-xs">1 hour ago</span>
														</div>
														<span class="badge-dot bg-primary-600  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
													</div>
													<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
														<div>
															<span class="avatar avatar-circle avatar-md bg-red-100 text-red-600 dark:bg-red-500/20 dark:text-red-100">
																<span class="avatar-icon avatar-icon-md">
																	<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
																	</svg>
																</span>
															</span>
														</div>
														<div class="ltr:ml-3 rtl:mr-3">
															<div>
																<span>Your request was rejected</span>
															</div>
															<span class="text-xs">2 days ago</span>
														</div>
														<span class="badge-dot bg-gray-300  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
													</div>
													<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
														<div>
															<span class="avatar avatar-circle avatar-md">
																<img class="avatar-img avatar-circle" src="img/avatars/thumb-4.jpg" loading="lazy" alt="">
															</span>
														</div>
														<div class="ltr:ml-3 rtl:mr-3">
															<div>
																<span class="font-semibold heading-text">Jennifer Ruiz </span>
																<span>mentioned your in comment.</span>
															</div>
															<span class="text-xs">2 days ago</span>
														</div>
														<span class="badge-dot bg-gray-300  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
													</div>
													<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20">
														<div>
															<span class="avatar avatar-circle avatar-md bg-emerald-100 text-emerald-600 dark:bg-emerald-500/20 dark:text-emerald-100">
																<span class="avatar-icon avatar-icon-md">
																	<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
																	</svg>
																</span>
															</span>
															</div>
														<div class="ltr:ml-3 rtl:mr-3">
															<div>
																<span>Your request has been approved.</span>
															</div>
															<span class="text-xs">4 minutes ago</span>
														</div>
														<span class="badge-dot bg-gray-300  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
													</div>
												</div>
											</li>
											<li class="menu-item-header">
												<div class="flex justify-center border-t border-gray-200 dark:border-gray-600 px-4 py-2">
													<a class="font-semibold cursor-pointer p-2 px-3 text-gray-600 hover:text-gray-900 dark:text-gray-200 dark:hover:text-white" href="modern-activity-log.html">
														View All Activity
													</a>
												</div>
											</li>
										</ul>
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
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-1.jpg" loading="lazy" alt=""></span>
												<div class="hidden md:block">
													<div class="text-xs capitalize">admin</div>
													<div class="font-bold">Carolyn Perkins</div>
												</div>
											</div>
										</div>
										<ul class="dropdown-menu bottom-end min-w-[240px]">
											<li class="menu-item-header">
												<div class="py-2 px-3 flex items-center gap-2">
													<span class="avatar avatar-circle avatar-md">
														<img class="avatar-img avatar-circle" src="img/avatars/thumb-1.jpg" loading="lazy" alt="">
													</span>
													<div>
														<div class="font-bold text-gray-900 dark:text-gray-100">Carolyn Perkins</div>
														<div class="text-xs">carolyn.p@elstar.com</div>
													</div>
												</div>
											</li>
											<li class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="modern-settings.html">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
														</svg>
													</span>
													<span>Profile</span>
												</a>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="modern-settings.html">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
														</svg>
													</span>
													<span>Account Setting</span>
												</a>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="modern-activity-log.html">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
														</svg>
													</span>
													<span>Activity Log</span>
												</a>
											</li>
											<li id="menu-item-29-2VewETdxAb" class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable gap-2 h-[35px]">
												<span class="text-xl opacity-50">
													<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
													</svg>
												</span>
												<span>Sign Out</span>
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
												<div>
													<h6 class="mb-3">Layout</h6>
													<div class="segment w-full">
														<div class="grid grid-cols-3 gap-4 w-full">
															<div class="text-center" id="layout-classic">
																<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/classic.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/classic-dark.jpg" alt="" class="rounded-md hidden dark:block">
																</div>
																<div class="mt-2 font-semibold">Classic</div>
															</div>
															<div class="text-center" id="layout-modern">
																<div class="flex items-center border rounded-md dark:border-gray-600 cursor-pointer select-none w-100 ring-1 ring-primary-600 border-primary-600 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/modern.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/modern-dark.jpg" alt="" class="rounded-md hidden dark:block">
																	<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" class="text-primary-600 absolute top-2 right-2 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
																	</svg>
																</div>
																<div class="mt-2 font-semibold">Modern</div>
															</div>
															<div class="text-center" id="layout-stackedSide">
																<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/stackedSide.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/stackedSide-dark.jpg" alt="" class="rounded-md hidden dark:block">
																</div>
																<div class="mt-2 font-semibold">Stacked Side</div>
															</div>
															<div class="text-center" id="layout-simple">
																<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/simple.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/simple-dark.jpg" alt="" class="rounded-md hidden dark:block">
																</div>
																<div class="mt-2 font-semibold">Simple</div>
															</div>
															<div class="text-center" id="layout-decked">
																<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/decked.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/decked-dark.jpg" alt="" class="rounded-md hidden dark:block">
																</div>
																<div class="mt-2 font-semibold">Decked</div>
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
										<h4>Navigation</h4>
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
														<div class="menu-title">Apps</div>
														<ul>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
																	</svg>
																	<span class="menu-item-text">Project</span>
																</div>
																<ul>
																	<li data-menu-item="modern-project-dashboard" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-project-dashboard.html">
																			<span>Dashboard</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-project-list" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-project-list.html">
																			<span>Project List</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-scrum-board" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-scrum-board.html">
																			<span>Scrum Board</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-issue" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-issue.html">
																			<span>Issue</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
																	</svg>
																	<span class="menu-item-text">CRM</span>
																</div>
																<ul>
																	<li data-menu-item="modern-crm-dashboard" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-crm-dashboard.html">
																			<span>Dashboard</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-calendar" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-calendar.html">
																			<span>Calendar</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-customers" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-customers.html">
																			<span>Customers</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-customer-details" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-customer-details.html">
																			<span>Customer Details</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-mail" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-mail.html">
																			<span>Mail</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
																	</svg>
																	<span class="menu-item-text">Sales</span>
																</div>
																<ul>
																	<li data-menu-item="modern-sales-dashboard" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-sales-dashboard.html">
																			<span>Dashboard</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-product-list" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-product-list.html">
																			<span>Product List</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-product-edit" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-product-edit.html">
																			<span>Product Edit</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-new-product" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-new-product.html">
																			<span>New Product</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-order-list" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-order-list.html">
																			<span>Order List</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-order-details" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-order-details.html">
																			<span>Order Details</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
																	</svg>
																	<span class="menu-item-text">Crypto</span>
																</div>
																<ul>
																	<li data-menu-item="modern-crypto-dashboard" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-crypto-dashboard.html">
																			<span>Dashboard</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-portfolio" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-portfolio.html">
																			<span>Portfolio</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-market" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-market.html">
																			<span>Market</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-wallets" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-wallets.html">
																			<span>Wallets</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
																	</svg>
																	<span class="menu-item-text">Knowledge Base</span>
																</div>
																<ul>
																	<li data-menu-item="modern-help-center" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-help-center.html">
																			<span>Help Center</span>
																		</a>
																	</li>
																	<li data-menu-item="stacked-side-article" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-article.html">
																			<span>Article</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-manage-articles" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-manage-articles.html">
																			<span>Manage Articles</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-edit-article" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-edit-article.html">
																			<span>Edit Article</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
																	</svg>
																	<span class="menu-item-text">Account</span>
																</div>
																<ul>
																	<li data-menu-item="modern-settings" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-settings.html">
																			<span>Settings</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-invoice" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-invoice.html">
																			<span>Invoice</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-activity-log" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-activity-log.html">
																			<span>Activity Log</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-kyc-form" class="menu-item">
																		<a class="h-full w-full flex items-center"  href="stacked-side-kyc-form.html">
																			<span>KYC Form</span>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="menu-group">
														<div class="menu-title">UI Components</div>
														<ul>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
																	</svg>
																	<span class="menu-item-text">Common</span>
																</div>
																<ul>
																	<li data-menu-item="modern-button" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-button.html">
																			<span>Button</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-grid" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-grid.html">
																			<span>Grid</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-typography" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-typography.html">
																			<span>Typography</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-icons" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-icons.html">
																			<span>Icons</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
																	</svg>
																	<span class="menu-item-text">Feedback</span>
																</div>
																<ul>
																	<li data-menu-item="modern-alert" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-alert.html">
																			<span>Alert</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-dialog" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-dialog.html">
																			<span>Dialog</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-drawer" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-drawer.html">
																			<span>Drawer</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-progress" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-progress.html">
																			<span>Progress</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-skeleton" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-skeleton.html">
																			<span>Skeleton</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-spinner" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-spinner.html">
																			<span>Spinner</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-toast" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-toast.html">
																			<span>Toast</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
																	</svg>
																	<span class="menu-item-text">Data Display</span>
																</div>
																<ul>
																	<li data-menu-item="modern-avatar" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-avatar.html">
																			<span>Avatar</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-badge" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-badge.html">
																			<span>Badge</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-card" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-card.html">
																			<span>Card</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-table" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-table.html">
																			<span>Table</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-tag" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-tag.html">
																			<span>Tag</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-timeline" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-timeline.html">
																			<span>Timeline</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-tooltip" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-tooltip.html">
																			<span>Tooltip</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
																	</svg>
																	<span class="menu-item-text">Forms</span>
																</div>
																<ul>
																	<li data-menu-item="modern-checkbox" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-checkbox.html">
																			<span>Checkbox</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-date-picker" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-date-picker.html">
																			<span>Date Picker</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-form" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-form.html">
																			<span>Form</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-input" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-input.html">
																			<span>Input</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-input-group" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-input-group.html">
																			<span>Input Group</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-radio" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-radio.html">
																			<span>Radio</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-segment" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-segment.html">
																			<span>Segment</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-select" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-select.html">
																			<span>Select</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-switcher" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-switcher.html">
																			<span>Switcher</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
																	</svg>
																	<span class="menu-item-text">Navigation</span>
																</div>
																<ul>
																	<li data-menu-item="modern-dropdown" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-dropdown.html">
																			<span>Dropdown</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-menu" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-menu.html">
																			<span>Menu</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-pagination" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-pagination.html">
																			<span>Pagination</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-steps" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-steps.html">
																			<span>Steps</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-tabs" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-tabs.html">
																			<span>Tabs</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
																	</svg>
																	<span class="menu-item-text">Graph</span>
																</div>
																<ul>
																	<li data-menu-item="modern-chart" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-chart.html">
																			<span>Charts</span>
																		</a>
																	</li>
																	<li data-menu-item="modern-maps" class="menu-item">
																		<a class="h-full w-full flex items-center" href="stacked-side-maps.html">
																			<span>Maps</span>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="menu-group">
														<div class="menu-title">Authentication</div>
														<ul>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
																	</svg>
																	<span class="menu-item-text">Sign In</span>
																</div>
																<ul>
																	<li data-menu-item="signin-simple" class="menu-item">
																		<a class="h-full w-full flex items-center" href="signin-simple.html">
																			<span>Simple</span>
																		</a>
																	</li>
																	<li data-menu-item="signin-side" class="menu-item">
																		<a class="h-full w-full flex items-center" href="signin-side.html">
																			<span>Side</span>
																		</a>
																	</li>
																	<li data-menu-item="signin-cover" class="menu-item">
																		<a class="h-full w-full flex items-center" href="signin-cover.html">
																			<span>Cover</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
																	</svg>
																	<span class="menu-item-text">Sign Up</span>
																</div>
																<ul>
																	<li data-menu-item="signup-simple" class="menu-item">
																		<a class="h-full w-full flex items-center" href="signup-simple.html">
																			<span>Simple</span>
																		</a>
																	</li>
																	<li data-menu-item="signup-side" class="menu-item">
																		<a class="h-full w-full flex items-center" href="signup-side.html">
																			<span>Side</span>
																		</a>
																	</li>
																	<li data-menu-item="signup-cover" class="menu-item">
																		<a class="h-full w-full flex items-center" href="signup-cover.html">
																			<span>Cover</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
																	</svg>
																	<span class="menu-item-text">Forgot Password</span>
																</div>
																<ul>
																	<li data-menu-item="forget-password-simple" class="menu-item">
																		<a class="h-full w-full flex items-center" href="forget-password-simple.html">
																			<span>Simple</span>
																		</a>
																	</li>
																	<li data-menu-item="forget-password-side" class="menu-item">
																		<a class="h-full w-full flex items-center" href="forget-password-side.html">
																			<span>Side</span>
																		</a>
																	</li>
																	<li data-menu-item="forget-password-cover" class="menu-item">
																		<a class="h-full w-full flex items-center" href="forget-password-cover.html">
																			<span>Cover</span>
																		</a>
																	</li>
																</ul>
															</li>
															<li class="menu-collapse">
																<div class="menu-collapse-item">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
																	</svg>
																	<span class="menu-item-text">Reset Password</span>
																</div>
																<ul>
																	<li data-menu-item="reset-password-simple" class="menu-item">
																		<a class="h-full w-full flex items-center" href="reset-password-simple.html">
																			<span>Simple</span>
																		</a>
																	</li>
																	<li data-menu-item="reset-password-side" class="menu-item">
																		<a class="h-full w-full flex items-center" href="reset-password-side.html">
																			<span>Side</span>
																		</a>
																	</li>
																	<li data-menu-item="reset-password-cover" class="menu-item">
																		<a class="h-full w-full flex items-center" href="reset-password-cover.html">
																			<span>Cover</span>
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</div>
													<div class="menu-group">
														<div class="menu-title menu-title-transparent">
															Pages
														</div>
														<ul>
															<li data-menu-item="modern-welcome" class="menu-item menu-item-single mb-2">
																<a class="menu-item-link" href="stacked-side-welcome.html">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"></path>
																	</svg>
																	<span class="menu-item-text">Welcome</span>
																</a>
															</li>
															<li data-menu-item="modern-access-denied" class="menu-item menu-item-single mb-2">
																<a class="menu-item-link" href="stacked-side-access-denied.html">
																	<span class="menu-item-icon">
																		<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
																		</svg>
																	</span>
																	<span class="menu-item-text">Access Denied</span>
																</a>
															</li>
														</ul>
													</div>
													<div class="menu-group">
														<div class="menu-title menu-title-transparent">
															Guide
														</div>
														<ul>
															<li data-menu-item="modern-documentation" class="menu-item menu-item-single mb-2">
																<a class="menu-item-link" href="http://www.themenate.net/elstar-html-doc" target="_blank">
																	<span class="menu-item-icon">
																		<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																			<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
																		</svg>
																	</span>
																	<span class="menu-item-text">Documentation</span>
																</a>
															</li>
														</ul>
													</div>
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

		<!-- Other Vendors JS -->
        <script src="vendors/apexcharts/apexcharts.js"></script>

		<!-- Page js -->
        <script src="js/pages/project-dashboard.js"></script>

		<!-- Core JS -->
		<script src="js/app.min.js"></script>
	</body>


<!-- Mirrored from www.themenate.net/elstar-html/modern-project-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 10:50:01 GMT -->
</html>