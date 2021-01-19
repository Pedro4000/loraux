(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["signup"],{

/***/ "./assets/js/signup.js":
/*!*****************************!*\
  !*** ./assets/js/signup.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
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
  /*    $(function () {
          $('[data-toggle="popover"]').popover();
      })
      $('#user_emailAddress').popover();*/

});

/***/ })

},[["./assets/js/signup.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvc2lnbnVwLmpzIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJjb25zb2xlIiwibG9nIiwidmFsaWRhdGVFbWFpbCIsInZhbCIsInRvTG93ZXJDYXNlIiwiZW1haWwiLCJyZSIsInRlc3QiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7OztBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVU7QUFFeEJGLEdBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JHLEtBQWhCLENBQXNCLFVBQVNDLENBQVQsRUFBVztBQUM3QkEsS0FBQyxDQUFDQyxjQUFGO0FBQ0FDLFdBQU8sQ0FBQ0MsR0FBUixDQUFZQyxhQUFhLENBQUNSLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCUyxHQUF4QixFQUFELENBQXpCOztBQUNBLFFBQUdULENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCUyxHQUF4QixHQUE4QkMsV0FBOUIsTUFBK0NWLENBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJTLEdBQW5CLEdBQXlCQyxXQUF6QixFQUFsRCxFQUEwRjtBQUN0RkosYUFBTyxDQUFDQyxHQUFSLENBQVksUUFBWjtBQUNILEtBRkQsTUFFTztBQUNIRCxhQUFPLENBQUNDLEdBQVIsQ0FBWSxXQUFaO0FBQ0g7QUFDSixHQVJEOztBQVNBLFdBQVNDLGFBQVQsQ0FBdUJHLEtBQXZCLEVBQThCO0FBQzFCLFFBQU1DLEVBQUUsR0FBRywySkFBWDtBQUNBLFdBQU9BLEVBQUUsQ0FBQ0MsSUFBSCxDQUFRRixLQUFSLENBQVA7QUFDSDtBQUdMOzs7OztBQUlDLENBckJELEUiLCJmaWxlIjoic2lnbnVwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuXHJcbiAgICAkKFwiI3VzZXJfc2F2ZVwiKS5jbGljayhmdW5jdGlvbihlKXtcclxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgY29uc29sZS5sb2codmFsaWRhdGVFbWFpbCgkKFwiI3VzZXJfZW1haWxBZGRyZXNzXCIpLnZhbCgpKSk7XHJcbiAgICAgICAgaWYoJChcIiN1c2VyX2VtYWlsQWRkcmVzc1wiKS52YWwoKS50b0xvd2VyQ2FzZSgpID09ICQoXCIjbWFpbF9jb25maXJtXCIpLnZhbCgpLnRvTG93ZXJDYXNlKCkpIHtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coJ3BhcmVpbCcpO1xyXG4gICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCdwYXNwYXJlaWwnKTtcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxuICAgIGZ1bmN0aW9uIHZhbGlkYXRlRW1haWwoZW1haWwpIHtcclxuICAgICAgICBjb25zdCByZSA9IC9eKChbXjw+KClbXFxdXFxcXC4sOzpcXHNAXFxcIl0rKFxcLltePD4oKVtcXF1cXFxcLiw7Olxcc0BcXFwiXSspKil8KFxcXCIuK1xcXCIpKUAoKFxcW1swLTldezEsM31cXC5bMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcLlswLTldezEsM31cXF0pfCgoW2EtekEtWlxcLTAtOV0rXFwuKStbYS16QS1aXXsyLH0pKSQvO1xyXG4gICAgICAgIHJldHVybiByZS50ZXN0KGVtYWlsKTtcclxuICAgIH1cclxuXHJcblxyXG4vKiAgICAkKGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAkKCdbZGF0YS10b2dnbGU9XCJwb3BvdmVyXCJdJykucG9wb3ZlcigpO1xyXG4gICAgfSlcclxuICAgICQoJyN1c2VyX2VtYWlsQWRkcmVzcycpLnBvcG92ZXIoKTsqL1xyXG59KTtcclxuXHJcblxyXG5cclxuXHJcbiJdLCJzb3VyY2VSb290IjoiIn0=