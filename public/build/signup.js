(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["signup"],{

/***/ "./assets/js/signup.js":
/*!*****************************!*\
  !*** ./assets/js/signup.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $.noConflict();
  $("#user_save").click(function (e) {
    e.preventDefault();
    console.log(validateEmail($("#user_emailAddress").val()));

    if ($("#user_emailAddress").val().toLowerCase() == $("#mail_confirm").val().toLowerCase()) {
      console.log('pareil');
    } else {
      console.log('paspareil');
    }
  });

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  $(function () {
    $('[data-toggle="popover"]').popover();
  });
  $('#user_emailAddress').popover();
});

/***/ })

},[["./assets/js/signup.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2lnbnVwLmpzIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5Iiwibm9Db25mbGljdCIsImNsaWNrIiwiZSIsInByZXZlbnREZWZhdWx0IiwiY29uc29sZSIsImxvZyIsInZhbGlkYXRlRW1haWwiLCJ2YWwiLCJ0b0xvd2VyQ2FzZSIsImVtYWlsIiwicmUiLCJ0ZXN0IiwicG9wb3ZlciJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7O0FBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVTtBQUN4QkYsR0FBQyxDQUFDRyxVQUFGO0FBQ0FILEdBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JJLEtBQWhCLENBQXNCLFVBQVNDLENBQVQsRUFBVztBQUM3QkEsS0FBQyxDQUFDQyxjQUFGO0FBQ0FDLFdBQU8sQ0FBQ0MsR0FBUixDQUFZQyxhQUFhLENBQUNULENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCVSxHQUF4QixFQUFELENBQXpCOztBQUNBLFFBQUdWLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCVSxHQUF4QixHQUE4QkMsV0FBOUIsTUFBK0NYLENBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJVLEdBQW5CLEdBQXlCQyxXQUF6QixFQUFsRCxFQUEwRjtBQUN0RkosYUFBTyxDQUFDQyxHQUFSLENBQVksUUFBWjtBQUNILEtBRkQsTUFFTztBQUNIRCxhQUFPLENBQUNDLEdBQVIsQ0FBWSxXQUFaO0FBQ0g7QUFDSixHQVJEOztBQVVBLFdBQVNDLGFBQVQsQ0FBdUJHLEtBQXZCLEVBQThCO0FBQzFCLFFBQU1DLEVBQUUsR0FBRywySkFBWDtBQUNBLFdBQU9BLEVBQUUsQ0FBQ0MsSUFBSCxDQUFRRixLQUFSLENBQVA7QUFDSDs7QUFFRFosR0FBQyxDQUFDLFlBQVk7QUFDVkEsS0FBQyxDQUFDLHlCQUFELENBQUQsQ0FBNkJlLE9BQTdCO0FBQ0gsR0FGQSxDQUFEO0FBR0FmLEdBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCZSxPQUF4QjtBQUNILENBckJELEUiLCJmaWxlIjoic2lnbnVwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuICAgICQubm9Db25mbGljdCgpO1xyXG4gICAgJChcIiN1c2VyX3NhdmVcIikuY2xpY2soZnVuY3Rpb24oZSl7XHJcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgIGNvbnNvbGUubG9nKHZhbGlkYXRlRW1haWwoJChcIiN1c2VyX2VtYWlsQWRkcmVzc1wiKS52YWwoKSkpO1xyXG4gICAgICAgIGlmKCQoXCIjdXNlcl9lbWFpbEFkZHJlc3NcIikudmFsKCkudG9Mb3dlckNhc2UoKSA9PSAkKFwiI21haWxfY29uZmlybVwiKS52YWwoKS50b0xvd2VyQ2FzZSgpKSB7XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCdwYXJlaWwnKTtcclxuICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZygncGFzcGFyZWlsJyk7XHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHJcblxyXG4gICAgZnVuY3Rpb24gdmFsaWRhdGVFbWFpbChlbWFpbCkge1xyXG4gICAgICAgIGNvbnN0IHJlID0gL14oKFtePD4oKVtcXF1cXFxcLiw7Olxcc0BcXFwiXSsoXFwuW148PigpW1xcXVxcXFwuLDs6XFxzQFxcXCJdKykqKXwoXFxcIi4rXFxcIikpQCgoXFxbWzAtOV17MSwzfVxcLlswLTldezEsM31cXC5bMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcXSl8KChbYS16QS1aXFwtMC05XStcXC4pK1thLXpBLVpdezIsfSkpJC87XHJcbiAgICAgICAgcmV0dXJuIHJlLnRlc3QoZW1haWwpO1xyXG4gICAgfVxyXG5cclxuICAgICQoZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICQoJ1tkYXRhLXRvZ2dsZT1cInBvcG92ZXJcIl0nKS5wb3BvdmVyKCk7XHJcbiAgICB9KVxyXG4gICAgJCgnI3VzZXJfZW1haWxBZGRyZXNzJykucG9wb3ZlcigpO1xyXG59KTtcclxuXHJcblxyXG5cclxuXHJcbiJdLCJzb3VyY2VSb290IjoiIn0=