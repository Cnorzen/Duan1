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

/***/ "./src/es/pages/form-demo.js":
/*!***********************************!*\
  !*** ./src/es/pages/form-demo.js ***!
  \***********************************/
/***/ (() => {

eval("$( '#form-validation' ).validate({\r\n    ignore: ':hidden:not(:checkbox)',\r\n    errorElement: 'div',\r\n    errorClass: 'input-invalid',\r\n    validClass: 'input-valid',\r\n    errorPlacement: function ( error, element ) {\r\n        error.addClass( 'text-red-500 mt-1' );\r\n        error.removeClass( 'input-valid' );\r\n        if ( element.prop( 'type' ) === 'checkbox' ) {\r\n            error.insertAfter( element.parent( 'label' ) );\r\n        } else {\r\n            error.insertAfter( element );\r\n        }\r\n    },\r\n    rules: {\r\n        inputRequired: {\r\n            required: true\r\n        },\r\n        inputMinLength: {\r\n            required: true,\r\n            minlength: 6\r\n        },\r\n        inputMaxLength: {\r\n            required: true,\r\n            minlength: 8\r\n        }, \r\n        inputUrl: {\r\n            required: true,\r\n            url: true\r\n        },\r\n        inputRangeLength: {\r\n            required: true,\r\n            rangelength: [2, 6]\r\n        },\r\n        inputMinValue: {\r\n            required: true,\r\n            min: 8\r\n        },\r\n        inputMaxValue: {\r\n            required: true,\r\n            max: 6\r\n        },\r\n        inputRangeValue: {\r\n            required: true,\r\n            max: 6,\r\n            range: [6, 12]\r\n        },\r\n        inputEmail: {\r\n            required: true,\r\n            email: true\r\n        },\r\n        inputPassword: {\r\n            required: true\r\n        },\r\n        inputPasswordConfirm: {\r\n            required: true,\r\n            equalTo: '#password'\r\n        },\r\n        inputDigit: {\r\n            required: true,\r\n            digits: true\r\n        },\r\n        inputValidCheckbox: {\r\n            required: true\r\n        }\r\n    }\r\n});\n\n//# sourceURL=webpack://elstar/./src/es/pages/form-demo.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/es/pages/form-demo.js"]();
/******/ 	
/******/ })()
;