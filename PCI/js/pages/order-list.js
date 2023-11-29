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

/***/ "./src/es/pages/order-list.js":
/*!************************************!*\
  !*** ./src/es/pages/order-list.js ***!
  \************************************/
/***/ (() => {

eval("$('#order-list-table').DataTable();\r\n\r\n$('.order-checkbox').on('click', function() {\r\n    updateSelectAllCheckbox();\r\n});\r\n\r\n$('#indeterminate-checkbox').on('click', function() {\r\n    console.log('aaa')\r\n    const isChecked = $(this).prop('checked');\r\n    $('.order-checkbox').prop('checked', isChecked);\r\n    updateSelectAllCheckbox()\r\n});\r\n\r\nfunction updateSelectAllCheckbox() {\r\n    const totalItems = $('.order-checkbox').length;\r\n    const checkedItems = $('.order-checkbox:checked').length;\r\n\r\n    if (checkedItems === 0) {\r\n        $('#indeterminate-checkbox').prop('checked', false);\r\n        $('#indeterminate-checkbox').prop('indeterminate', false);\r\n    } else if (checkedItems === totalItems) {\r\n        $('#indeterminate-checkbox').prop('checked', true);\r\n        $('#indeterminate-checkbox').prop('indeterminate', false);\r\n    } else {\r\n        $('#indeterminate-checkbox').prop('indeterminate', true);\r\n    }\r\n}\n\n//# sourceURL=webpack://elstar/./src/es/pages/order-list.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/es/pages/order-list.js"]();
/******/ 	
/******/ })()
;