/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/common/inventory.js":
/*!******************************************!*\
  !*** ./resources/js/common/inventory.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var Warehouse = {
  init: function init() {
    this.clickEditForm($('.edit-warehouse-form'), $('.btn-update-warehouse'), $('#editWarehouseModal'));
    this.clickDeleteRow($('.delete-warehouse-row'));
  },
  clickEditForm: function clickEditForm($element, $btnUpdate, $params) {
    $element.on('click', function () {
      $params.modal('show');
      var warehouse = $(this).data('form');
      $('.id').val(warehouse.id);
      $('.warehouse-name').val(warehouse.warehouse_name);
      $('.address').val(warehouse.address);
      $('.remark').val(warehouse.remark);
      $('.is-default').attr('checked', warehouse.is_default == 1 ? true : false);
    });
    $btnUpdate.on('click', function () {
      var frmData = $('#frm-update-warehouse').serialize();
      var $id = $('.id').val();
      $.ajax({
        method: 'POST',
        url: '/update/warehouse/' + $id,
        data: frmData,
        success: function success(data) {
          console.log(data.success);

          if (data.success == true) {
            toastr.success(data.message, function () {
              location.reload();
            });
          } else {
            toastr.error(data.message, function () {// location.reload();
            });
          }
        }
      });
    });
  },
  clickDeleteRow: function clickDeleteRow($element) {
    $element.on('click', function () {
      var $id = $(this).data('form');
      alert('Warning ' + $id + ' !!');
    });
  }
};
/* harmony default export */ __webpack_exports__["default"] = (Warehouse);
$(document).ready(function () {
  Warehouse.init();
});

/***/ }),

/***/ 2:
/*!************************************************!*\
  !*** multi ./resources/js/common/inventory.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\wamp64\www\stock-app\resources\js\common\inventory.js */"./resources/js/common/inventory.js");


/***/ })

/******/ });