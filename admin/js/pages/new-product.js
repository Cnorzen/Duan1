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

/***/ "./src/es/pages/new-product.js":
/*!*************************************!*\
  !*** ./src/es/pages/new-product.js ***!
  \*************************************/
/***/ (() => {

eval("new Quill('#description', {\r\n    theme: 'snow',\r\n    toolbar: [\r\n        ['bold', 'italic', 'underline', 'strike'],        \r\n        ['blockquote', 'code-block'],\r\n        [{ 'header': 1 }, { 'header': 2 }],               \r\n        [{ 'list': 'ordered'}, { 'list': 'bullet' }],\r\n        [{ 'size': ['small', false, 'large', 'huge'] }],  \r\n        [{ 'align': [] }],\r\n        ['link', 'image']                        \r\n    ]\r\n});\r\n\r\nlet isSticky = false;\r\nlet cachedRef = $('#stickyFooter')[0];\r\n\r\nlet observer = new IntersectionObserver(\r\n    function(entries) {\r\n        isSticky = entries[0].intersectionRatio < 1;\r\n        $('#stickyFooter').toggleClass('border-t bg-white dark:bg-gray-800 border-gray-200 dark:border-gray-700', isSticky);\r\n    },\r\n    {\r\n        threshold: [1]\r\n    }\r\n);\r\n\r\nobserver.observe(cachedRef);\r\n\r\n$(window).on('beforeunload', function() {\r\n    observer.unobserve(cachedRef);\r\n});\n\n//# sourceURL=webpack://elstar/./src/es/pages/new-product.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/es/pages/new-product.js"]();
/******/ 	
/******/ })()
;