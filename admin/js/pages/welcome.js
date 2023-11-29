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

/***/ "./src/es/pages/welcome.js":
/*!*********************************!*\
  !*** ./src/es/pages/welcome.js ***!
  \*********************************/
/***/ (() => {

eval("let currentStep = 0\r\n\r\nfunction assignPage (index) {\r\n    $('.welcome-page-section').addClass('hidden')\r\n    $(`#welcome-page-${index}`).removeClass('hidden')\r\n}\r\n\r\n$('.next-button').on('click', function() {\r\n    currentStep = currentStep + 1\r\n    assignPage(currentStep)\r\n});\r\n\r\n$('.back-button').on('click', function() {\r\n    currentStep = currentStep - 1\r\n    console.log('currentStep', currentStep)\r\n    assignPage(currentStep)\r\n});\r\n\r\n$('.skip-button').on('click', function() {\r\n    currentStep = 4\r\n    assignPage(currentStep)\r\n});\r\n\n\n//# sourceURL=webpack://elstar/./src/es/pages/welcome.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/es/pages/welcome.js"]();
/******/ 	
/******/ })()
;