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

/***/ "./src/es/pages/kyc-form.js":
/*!**********************************!*\
  !*** ./src/es/pages/kyc-form.js ***!
  \**********************************/
/***/ (() => {

eval("const navMapping = [\r\n    {\r\n        navItem: 'menu-item-0',\r\n        section: 'personal-information-section',\r\n        nextButton: 'personal-information-next',\r\n        backButton: ''\r\n    },\r\n    {\r\n        navItem: 'menu-item-1',\r\n        section: 'identification-section',\r\n        nextButton: 'identification-section-next',\r\n        backButton: 'identification-section-back'\r\n    },\r\n    {\r\n        navItem: 'menu-item-2',\r\n        section: 'address-section',\r\n        nextButton: 'address-section-next',\r\n        backButton: 'address-section-back'\r\n    },\r\n    {\r\n        navItem: 'menu-item-3',\r\n        section: 'financial-section',\r\n        nextButton: '',\r\n        backButton: 'financial-section-back'\r\n    }\r\n]\r\n\r\nfunction activeItem(item) {\r\n    $('.content-section').addClass('hidden')\r\n    $(`#${item.section}`).removeClass('hidden')\r\n    $('.menu-item').removeClass('menu-item-active')\r\n    $(`#${item.navItem}`).addClass('menu-item-active')\r\n}\r\n\r\nnavMapping.forEach((item, index) => {\r\n\r\n    $(`#${item.navItem}`).on('click', function() {\r\n        activeItem(item)\r\n    });\r\n\r\n    if (item.nextButton) {\r\n        $(`#${item.nextButton}`).on('click', function() {\r\n            activeItem(navMapping[index + 1])\r\n        })\r\n    }\r\n\r\n    if (item.backButton) {\r\n        $(`#${item.backButton}`).on('click', function() {\r\n            activeItem(navMapping[index - 1])\r\n        })\r\n    }\r\n})\r\n\r\n$(`#on-complete`).on('click', function() {\r\n    $('#form-section').addClass('hidden')\r\n    $('#complete-section').removeClass('hidden')\r\n    $('#complete-section').addClass('flex')\r\n});\n\n//# sourceURL=webpack://elstar/./src/es/pages/kyc-form.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/es/pages/kyc-form.js"]();
/******/ 	
/******/ })()
;