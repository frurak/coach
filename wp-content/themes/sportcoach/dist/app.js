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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/*! no static exports found */
/***/ (function(module, exports) {

//----- START ----- Main baner carousel
var circleNav = document.querySelectorAll('.baner_image_nav .nav_circle');
var contBanerImg = document.querySelector('.cont_baner_image');
var contBanerImg_width = contBanerImg.getBoundingClientRect().width;
var contBanerImgWraper = document.querySelector('.cont_baner_image_wraper');
var moveSlideValue = -33.33333333;
var index = 0;

window.onload = function () {
  circleNav.forEach(function (circle, num) {
    if (num === 0) {
      circle.classList.add('nav_circle-active');
    }
  });
};

var function1 = function function1() {
  if (index === 0) {
    contBanerImgWraper.style.transform = 'translateX(' + moveSlideValue * (index + 1) + '%)';
    circleNav.forEach(function (circle, num) {
      if (num === 0) {
        circle.classList.remove('nav_circle-active');
      } else if (num === 1) {
        circle.classList.add('nav_circle-active');
      } else {
        circle.classList.remove('nav_circle-active');
      }
    });
    index++;
  } else if (index == 1) {
    contBanerImgWraper.style.transform = 'translateX(' + moveSlideValue * (index + 1) + '%)';
    circleNav.forEach(function (circle, num) {
      if (num === 0) {
        circle.classList.remove('nav_circle-active');
      } else if (num === 1) {
        circle.classList.remove('nav_circle-active');
      } else {
        circle.classList.add('nav_circle-active');
      }
    });
    index++;
  } else {
    contBanerImgWraper.style.transform = 'translateX(' + moveSlideValue * (index - 2) + '%)';
    circleNav.forEach(function (circle, num) {
      if (num === 0) {
        circle.classList.add('nav_circle-active');
      } else if (num === 1) {
        circle.classList.remove('nav_circle-active');
      } else {
        circle.classList.remove('nav_circle-active');
      }
    });
    index = 0;
  }
};

var interval = setInterval(function1, 4000); //----- END ----- Main baner carousel
//----- START ----- Hamburger

var mobileMenu = document.querySelector('.cont_topbar_nav');
var mobileBurger = document.querySelector('.mobile_burger');
var burgerCircles = document.querySelector('.toggle_circle');
var mobileMenuCounter = 0;
mobileBurger.addEventListener('click', function () {
  if (mobileMenuCounter === 0) {
    mobileMenu.classList.add('cont_topbar_nav-active');
    mobileMenu.classList.remove('cont_topbar_nav-inactive');
    burgerCircles.classList.add('toggle_circle-active');
    burgerCircles.classList.remove('toggle_circle-inactive');
    mobileMenuCounter++;
  } else {
    mobileMenu.classList.add('cont_topbar_nav-inactive');
    mobileMenu.classList.remove('cont_topbar_nav-active');
    burgerCircles.classList.add('toggle_circle-inactive');
    burgerCircles.classList.remove('toggle_circle-active');
    mobileMenuCounter--;
  }
}); //----- END ----- Hamburger
//----- START ----- Blog Homepage Animation

var blogHomepageBox = document.querySelectorAll('.blog_section_content .content_box');
var blogHomepageImage = document.querySelectorAll('.blog_section_content .blog_1_thumbnail');
blogHomepageBox.forEach(function (box, index) {
  box.addEventListener('mouseover', function () {
    blogHomepageImage[index].classList.add('thumbnail-active');
    blogHomepageImage[index].classList.remove('thumbnail-inactive');
  });
});
blogHomepageBox.forEach(function (box, index) {
  box.addEventListener('mouseout', function () {
    blogHomepageImage[index].classList.add('thumbnail-inactive');
    blogHomepageImage[index].classList.remove('thumbnail-active');
  });
}); //----- END ----- Blog Homepage Animation

/***/ }),

/***/ "./src/app.scss":
/*!**********************!*\
  !*** ./src/app.scss ***!
  \**********************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*****************************************!*\
  !*** multi ./src/app.js ./src/app.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /mnt/c/xampp/htdocs/wordpress/wp-content/themes/sportcoach/src/app.js */"./src/app.js");
module.exports = __webpack_require__(/*! /mnt/c/xampp/htdocs/wordpress/wp-content/themes/sportcoach/src/app.scss */"./src/app.scss");


/***/ })

/******/ });