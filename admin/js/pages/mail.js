/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/es/pages/mail.js":
/*!******************************!*\
  !*** ./src/es/pages/mail.js ***!
  \******************************/
/***/ (() => {

eval("new PerfectScrollbar('.mail-nav-scroll')\r\nnew PerfectScrollbar('.mail-list-scroll')\r\nnew PerfectScrollbar('.mail-list-mobile-scroll')\r\nnew PerfectScrollbar('.mail-content-scroll')\r\n\r\n$('#mail-nav-toggle').on('click', function () {\r\n    const mailNav = $('#mail-nav')\r\n    const mailList = $('#mail-list')\r\n    if (mailNav.hasClass('ltr:left-0 rtl:right-0')) {\r\n        mailNav.removeClass('ltr:left-0 rtl:right-0')\r\n        mailNav.addClass('ltr:left-[-280px] rtl:right-[-280px]')\r\n        mailList.removeClass('ltr:xl:ml-[280px] rtl:xl:mr-[280px]')\r\n        return\r\n    }\r\n\r\n    if (mailNav.hasClass('ltr:left-[-280px] rtl:right-[-280px]')) {\r\n        mailNav.removeClass('ltr:left-[-280px] rtl:right-[-280px]')\r\n        mailNav.addClass('ltr:left-0 rtl:right-0')\r\n        mailList.addClass('ltr:xl:ml-[280px] rtl:xl:mr-[280px]')\r\n        return\r\n    }\r\n})\r\n\r\n\r\n$('#back-btn').on('click', function () {\r\n    $('#mail-content-section').addClass('hidden')\r\n    $('#mail-content-section').removeClass('block')\r\n\r\n    $('#mail-list').removeClass('hidden')\r\n})\r\n\r\n$('.mail-item').on('click', function () {\r\n    $('#mail-content-section').removeClass('hidden')\r\n    $('#mail-content-section').addClass('block')\r\n\r\n    $('#mail-list').addClass('hidden')\r\n})\n\n//# sourceURL=webpack://elstar/./src/es/pages/mail.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/es/pages/mail.js"]();
/******/ 	
/******/ })()
;