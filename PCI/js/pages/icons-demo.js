/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/es/pages/icons-demo.js":
/*!************************************!*\
  !*** ./src/es/pages/icons-demo.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _utils_copyToClipboard__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../utils/copyToClipboard */ \"./src/es/utils/copyToClipboard.js\");\n\r\n\r\n$('.icon-button').on('click', function() {\r\n    const codeContainers = $(this).children('.icon-wrapper').children();\r\n    const codeToastWrapperId = '#code-copy-toast-wrapper'\r\n\r\n    if (codeContainers.length > 0) {\r\n        (0,_utils_copyToClipboard__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(codeContainers[0].outerHTML);\r\n        if ($(`${codeToastWrapperId}`).length == 0) {\r\n            $('body').append('<div id=\"code-copy-toast-wrapper\" class=\"toast-wrapper top-center\"></div>');\r\n        }\r\n\r\n        const toastHTML = `<div class=\"toast fade\">\r\n            <div class=\"notification\">\r\n                <div class=\"notification-content\">\r\n                    <div class=\"mr-3\">\r\n                        <span class=\"text-2xl text-emerald-400\">\r\n                            <svg stroke=\"currentColor\" fill=\"currentColor\" stroke-width=\"0\" viewBox=\"0 0 20 20\" aria-hidden=\"true\" height=\"1em\" width=\"1em\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"></path>\r\n                            </svg>\r\n                        </span>\r\n                    </div>\r\n                    <div class=\"mr-4\">\r\n                        <div class=\"notification-title\">Icon Copied</div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>`\r\n        $(`${codeToastWrapperId}`).append(toastHTML)\r\n        $(`${codeToastWrapperId} .toast:last-child`).toast('show');\r\n        setTimeout(function(){ \r\n            $(`${codeToastWrapperId} .toast:first-child`).remove();\r\n        }, 2000);\r\n    }\r\n});\n\n//# sourceURL=webpack://elstar/./src/es/pages/icons-demo.js?");

/***/ }),

/***/ "./src/es/utils/copyToClipboard.js":
/*!*****************************************!*\
  !*** ./src/es/utils/copyToClipboard.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* export default binding */ __WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony default export */ function __WEBPACK_DEFAULT_EXPORT__(text) {\r\n    const textArea = $('<textarea/>');\r\n    textArea.val(text);\r\n    $('body').append(textArea);\r\n    textArea.select();\r\n    document.execCommand('copy');\r\n    textArea.remove();\r\n}\n\n//# sourceURL=webpack://elstar/./src/es/utils/copyToClipboard.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/es/pages/icons-demo.js");
/******/ 	
/******/ })()
;